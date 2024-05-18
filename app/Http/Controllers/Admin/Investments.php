<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Jobs\SendInvestmentNotification;
use App\Models\GeneralSetting;
use App\Models\Investment;
use App\Models\ReturnType;
use App\Models\User;
use App\Models\Withdrawal;
use App\Notifications\InvestmentMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Investments extends Controller
{
    public function landingPage()
    {
        $web = GeneralSetting::find(1);
        $user = Auth::user();

        $dataView = [
            'web'=>$web,
            'user'=>$user,
            'investments'=>Investment::get(),
            'pageName'=>'Investment Lists',
            'siteName'=>$web->name
        ];

        return view('admin.investments',$dataView);
    }
    public function investmentDetails($id)
    {
        $user = Auth::user();
        $web = GeneralSetting::find(1);

        $investment = Investment::findOrFail($id);
        $dataView = [
            'user'=>$user,
            'web'=>$web,
            'pageName'=>'Investment Detail',
            'siteName'=>$web->name,
            'investment'=>$investment,
        ];
        return view('admin.investment_detail',$dataView);
    }

    public function startInvestment($id)
    {
        $user = Auth::user();
        $web = GeneralSetting::find(1);

        $investment = Investment::where('id',$id)->first();

        $type = ReturnType::where('id',$investment->returnType)->first();
        $investor = User::where('id',$investment->user)->first();

        $message ="Bekleyen yatırımınızın yatırımı alındı ve etkinleştirildi. Şimdi şirketimizde bir yatırımcı olmanın avantajlarının tadını çıkarabilirsiniz.";

        $investor->notify(new InvestmentMail($investor,$message,'Yatırım Yatırma Aktivasyonu'));

        $timeReturn = strtotime($type->duration,time());

        $investment->status = 4;

        $investment->nextReturn = $timeReturn;

        $investment->save();

        return back()->with('success','Investment Started');
    }

    public function cancel($id)
    {
        $user = Auth::user();
        $web = GeneralSetting::find(1);

        $investment = Investment::where('id',$id)->first();

        $investment->status = 3;

        $investment->save();

        return back()->with('warning','Investment Cancelled');
    }

    public function completeInvestment($id)
    {
        $user = Auth::user();
        $web = GeneralSetting::find(1);

        $investment = Investment::where('id',$id)->first();

        $investor = User::where('id',$investment->user)->first();

        $profit = $investment->amount+($investment->profitPerReturn*$investment->numberOfReturns);

        $dateInvestment = [
            'status'=>1,
            'currentReturn'=>$investment->numberOfReturns
        ];

        $dataUser=[
            'profit'=>$profit +$investor->profit,
        ];


        $update = Investment::where('id',$id)->update($dateInvestment);
        if ($update) {
            User::where('id', $investor->id)->update($dataUser);
            //send a mail to investor
            $userMessage = "
                                Referans kimliği <b>".$investment->reference."</b> olan yatırımınız tamamlandı ve kazanılan getiriler hesap bakiyenize eklendi.

                            ";
            //send mail to user
            //SendInvestmentNotification::dispatch($investor, $userMessage, 'Investment Completion');

            $investor->notify(new InvestmentMail($investor, $userMessage, 'Yatırım Tamamlama'));

            $admin = User::where('is_admin', 1)->first();
            //send mail to Admin
            if (!empty($admin)) {
                $adminMessage = "
                  An investment started by the investor <b>" . $investor->name . "</b> with reference
                  <b>" . $investment->reference . "</b> has completed and returns credited to profit balance.
                ";
                //SendInvestmentNotification::dispatch($admin, $adminMessage, 'Investment completion');

                $admin->notify(new InvestmentMail($admin, $userMessage, 'Investment Completion'));
            }
            return back()->with('success', 'Investment completed');
        }
        return back()->with('success', 'Investment completed');
    }

    public function delete($id)
    {
        $withdrawal = Investment::where('id', $id)->first();
        if (empty($withdrawal)) {
            return back()->with('error', 'Not found');
        }

        $withdrawal->delete();

        return redirect()->to(route('admin.investment.index'))->with('success','deleted');
    }
}
