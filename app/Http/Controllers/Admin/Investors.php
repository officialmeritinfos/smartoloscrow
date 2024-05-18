<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Jobs\SendInvestmentNotification;
use App\Models\GeneralSetting;
use App\Models\Package;
use App\Models\User;
use App\Notifications\InvestmentMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Models\Notification;

class Investors extends Controller
{
    public function landingPage()
    {
        $web = GeneralSetting::find(1);
        $user = Auth::user();

        $dataView =[
            'siteName' => $web->name,
            'pageName' => 'Investors',
            'user'     =>  $user,
            'web'=>$web,
            'investors'=>User::where('status',1)->get()
        ];

        return view('admin.investors',$dataView);
    }

    public function inactive()
    {
        $web = GeneralSetting::find(1);
        $user = Auth::user();

        $dataView =[
            'siteName' => $web->name,
            'pageName' => 'Investors',
            'user'     =>  $user,
            'web'=>$web,
            'investors'=>User::where('status','!=',1)->get()
        ];

        return view('admin.investors',$dataView);
    }

    public function details($id)
    {
        $web = GeneralSetting::find(1);
        $user = Auth::user();

        $dataView =[
            'siteName' => $web->name,
            'pageName' => 'Investor Details',
            'user'     =>  $user,
            'web'=>$web,
            'investor'=>User::where('id',$id)->first(),
            'promos'=>Notification::where('user',$id)->get()
        ];

        return view('admin.investor_detail',$dataView);
    }

    public function activateTwoWay($id)
    {
        $data =[
            'twoWay'=>1
        ];
        User::where('id',$id)->update($data);

        return back()->with('success','Successful');
    }
    public function deactivateTwoWay($id)
    {
        $data =[
            'twoWay'=>2
        ];
        User::where('id',$id)->update($data);

        return back()->with('success','Successful');
    }
    public function activateLoan($id)
    {
        $data =[
            'canLoan'=>1
        ];
        User::where('id',$id)->update($data);

        return back()->with('success','Successful');
    }
    public function deactivateLoan($id)
    {
        $data =[
            'canLoan'=>2
        ];
        User::where('id',$id)->update($data);

        return back()->with('success','Successful');
    }
    public function verifyEmail($id)
    {
        $data =[
            'emailVerified'=>1
        ];
        User::where('id',$id)->update($data);

        return back()->with('success','Successful');
    }
    public function unVerifyEmail($id)
    {
        $data =[
            'emailVerified'=>2
        ];
        User::where('id',$id)->update($data);

        return back()->with('success','Successful');
    }
    public function activateUser($id)
    {
        $data =[
            'status'=>1
        ];
        User::where('id',$id)->update($data);

        return back()->with('success','Successful');
    }
    public function deactivateUser($id)
    {
        $data =[
            'status'=>2
        ];
        User::where('id',$id)->update($data);

        return redirect('admin/investors') ->with('success','Successful');
    }

    public function addFund(Request $request)
    {
        $web = GeneralSetting::where('id',1)->first();
        $user = Auth::user();
        $validator = Validator::make($request->input(),[
            'id'=>['required','numeric'],
            'amount'=>['required','numeric'],
        ]);

        if ($validator->fails()){
            return back()->with('errors',$validator->errors());
        }
        $input = $validator->validated();

        $investor = User::where('id',$input['id'])->first();

        $data = [
            'balance'=>$investor->balance+$input['amount']
        ];

        $update = User::where('id',$input['id'])->update($data);
        if ($update){
            //send mail to investor
            $userMessage = "
               Hesap bakiyenize $" . $input['amount'] . " kredi yapıldı.
            ";
            //SendInvestmentNotification::dispatch($investor, $userMessage, 'Balance Topup');
            $investor->notify(new InvestmentMail($investor, $userMessage, 'Bakiye Yükleme'));
        }
        return back()->with('success','Balance added');
    }
    public function addProfit(Request $request)
    {
        $web = GeneralSetting::where('id',1)->first();
        $user = Auth::user();
        $validator = Validator::make($request->input(),[
            'id'=>['required','numeric'],
            'amount'=>['required','numeric'],
        ]);

        if ($validator->fails()){
            return back()->with('errors',$validator->errors());
        }
        $input = $validator->validated();

        $investor = User::where('id',$input['id'])->first();

        $data = [
            'profit'=>$investor->profit+$input['amount']
        ];

        $update = User::where('id',$input['id'])->update($data);
        if ($update){
            //send mail to investor
            $userMessage = "
                Süregelen yatırım planınızda $" . $input['amount'] . " kazandınız. Bu, hesap bakiyenize eklenmiştir.
            ";
            //SendInvestmentNotification::dispatch($investor, $userMessage, 'Profit Topup');
            $investor->notify(new InvestmentMail($investor, $userMessage, 'Kar Kazancı'));
        }
        return back()->with('success','Profit added');
    }
    public function addRef(Request $request)
    {
        $web = GeneralSetting::where('id',1)->first();
        $user = Auth::user();
        $validator = Validator::make($request->input(),[
            'id'=>['required','numeric'],
            'amount'=>['required','numeric'],
        ]);

        if ($validator->fails()){
            return back()->with('errors',$validator->errors());
        }
        $input = $validator->validated();

        $investor = User::where('id',$input['id'])->first();

        $data = [
            'refBal'=>$investor->refBal+$input['amount']
        ];

        $update = User::where('id',$input['id'])->update($data);
        if ($update){
            //send mail to investor
            $userMessage = "
                Yönlendirme bakiyenize $" . $input['amount'] . " kredi yapıldı.
            ";
            //SendInvestmentNotification::dispatch($investor, $userMessage, 'Referral Topup');
            $investor->notify(new InvestmentMail($investor, $userMessage, 'Yönlendirme Bakiye Yükleme'));

        }
        return back()->with('success','Referral Balance added');
    }
    public function addWith(Request $request)
    {
        $web = GeneralSetting::where('id',1)->first();
        $user = Auth::user();
        $validator = Validator::make($request->input(),[
            'id'=>['required','numeric'],
            'amount'=>['required','numeric'],
        ]);

        if ($validator->fails()){
            return back()->with('errors',$validator->errors());
        }
        $input = $validator->validated();

        $investor = User::where('id',$input['id'])->first();

        $data = [
            'withdrawals'=>$investor->withdrawals+$input['amount']
        ];

        $update = User::where('id',$input['id'])->update($data);
        if ($update){
            //send mail to investor
            $userMessage = "
                $" . $input['amount'] . "lık Çekim talebiniz işlendi ve cüzdan adresinize gönderildi. İşlem KİMLİĞİ " . Str::random(200) . "dur.
            ";
            //SendInvestmentNotification::dispatch($investor, $userMessage, 'Withdrawal Approved');
            $investor->notify(new InvestmentMail($investor, $userMessage, 'Para çekme Onayı'));

        }
        return back()->with('success','Withdrawal added');
    }

    public function subFund(Request $request)
    {
        $web = GeneralSetting::where('id',1)->first();
        $user = Auth::user();
        $validator = Validator::make($request->input(),[
            'id'=>['required','numeric'],
            'amount'=>['required','numeric'],
        ]);

        if ($validator->fails()){
            return back()->with('errors',$validator->errors());
        }
        $input = $validator->validated();

        $investor = User::where('id',$input['id'])->first();

        $data = [
            'balance'=>$investor->balance-$input['amount']
        ];

        $update = User::where('id',$input['id'])->update($data);

        return back()->with('success','Balance subtracted');
    }
    public function subProfit(Request $request)
    {
        $web = GeneralSetting::where('id',1)->first();
        $user = Auth::user();
        $validator = Validator::make($request->input(),[
            'id'=>['required','numeric'],
            'amount'=>['required','numeric'],
        ]);

        if ($validator->fails()){
            return back()->with('errors',$validator->errors());
        }
        $input = $validator->validated();

        $investor = User::where('id',$input['id'])->first();

        $data = [
            'profit'=>$investor->profit-$input['amount']
        ];

        $update = User::where('id',$input['id'])->update($data);

        return back()->with('success','Profit subtracted');
    }
    public function subRef(Request $request)
    {
        $web = GeneralSetting::where('id',1)->first();
        $user = Auth::user();
        $validator = Validator::make($request->input(),[
            'id'=>['required','numeric'],
            'amount'=>['required','numeric'],
        ]);

        if ($validator->fails()){
            return back()->with('errors',$validator->errors());
        }
        $input = $validator->validated();

        $investor = User::where('id',$input['id'])->first();

        $data = [
            'refBal'=>$investor->refBal-$input['amount']
        ];

        $update = User::where('id',$input['id'])->update($data);

        return back()->with('success','Referral Balance subtracted');
    }
    public function subWith(Request $request)
    {
        $web = GeneralSetting::where('id',1)->first();
        $user = Auth::user();
        $validator = Validator::make($request->input(),[
            'id'=>['required','numeric'],
            'amount'=>['required','numeric'],
        ]);

        if ($validator->fails()){
            return back()->with('errors',$validator->errors());
        }
        $input = $validator->validated();

        $investor = User::where('id',$input['id'])->first();

        $data = [
            'withdrawals'=>$investor->withdrawals-$input['amount']
        ];

        $update = User::where('id',$input['id'])->update($data);

        return back()->with('success','Withdrawal subtracted');
    }
    public function addLoan(Request $request)
    {
        $web = GeneralSetting::where('id',1)->first();
        $user = Auth::user();
        $validator = Validator::make($request->input(),[
            'id'=>['required','numeric'],
            'amount'=>['required','numeric'],
        ]);

        if ($validator->fails()){
            return back()->with('errors',$validator->errors());
        }
        $input = $validator->validated();

        $investor = User::where('id',$input['id'])->first();

        $data = [
            'profit'=>$investor->profit+$input['amount'],
            'bonus'=>$investor->bonus+$input['amount'],
        ];

        $update = User::where('id',$input['id'])->update($data);
        if ($update){
            //send mail to investor
            $userMessage = "
                Sizden $" . $input['amount'] . " bonus olarak kredilendirildi.
            ";
            //SendInvestmentNotification::dispatch($investor, $userMessage, 'Withdrawal Approved');
            $investor->notify(new InvestmentMail($investor, $userMessage, 'Kredi Bildirimi - Bonus'));

        }

        return back()->with('success','Bonus added');
    }

    public function subLoan(Request $request)
    {
        $web = GeneralSetting::where('id',1)->first();
        $user = Auth::user();
        $validator = Validator::make($request->input(),[
            'id'=>['required','numeric'],
            'amount'=>['required','numeric'],
        ]);

        if ($validator->fails()){
            return back()->with('errors',$validator->errors());
        }
        $input = $validator->validated();

        $investor = User::where('id',$input['id'])->first();

        $data = [
            'profit'=>$investor->profit-$input['amount'],
            'bonus'=>$investor->bonus-$input['amount']
        ];

        $update = User::where('id',$input['id'])->update($data);

        return back()->with('success','Bonus subtracted');
    }

    public function loginUser($id)
    {
        $web = GeneralSetting::where('id',1)->first();
        $user = Auth::user();

        $investor = User::where('id',$id)->first();

        Auth::logout();

        Auth::login($investor);

        return redirect(route('user.dashboard')) ->with('success','Login Successful');

    }
    public function verifyKYC($id)
    {
        $data =[
            'isVerified'=>1
        ];
        User::where('id',$id)->update($data);

        return back()->with('success','Successful');
    }
    public function unverifyKYC($id)
    {
        $data =[
            'isVerified'=>3
        ];
        User::where('id',$id)->update($data);

        return back()->with('success','Successful');
    }
    public function activateReinvestment($id)
    {
        $data =[
            'canCompound'=>1
        ];
        User::where('id',$id)->update($data);

        return back()->with('success','Successful');
    }
    public function deactivateReinvestment($id)
    {
        $data =[
            'canCompound'=>2
        ];
        User::where('id',$id)->update($data);

        return back()->with('success','Successful');
    }
}
