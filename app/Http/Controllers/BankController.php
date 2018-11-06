<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Bank;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Laravel\Lumen\Routing\Controller as BaseController;

class BankController extends BaseController
{
    public function show_bank_list()
    {
        $bank = Bank::all();

        return view('bank.crud', [
            'title' => 'Bank',
            'banks' => $bank
        ]);
    }

    public function del_bank(Request $request)
    {
        $Bcode = $request->get('Bcode');
        $bank = Bank::find($Bcode);
        $bank->delete();

        return response()->json(['status' => true]);
    }

    public function add_bank(Request $request)
    {

        $bank = new Bank();
        $bank->Bcode = $request->get('Bcode');
        $bank->Name = $request->get('Name');
        $bank->Street = $request->get('Street');
        $bank->City = $request->get('City');
        $bank->Province = $request->get('Province');
        $bank->ZIP = $request->get('ZIP');
        $bank->save();
        return response()->json(['status' => true]);
    }

    public function edit_bank(Request $request)
    {
        $bank = Bank::find($request->get('Bcode'));
        $bank->Name = $request->get('Name');
        $bank->Street = $request->get('Street');
        $bank->City = $request->get('City');
        $bank->Province = $request->get('Province');
        $bank->ZIP = $request->get('ZIP');
        $bank->save();
        return response()->json(['status' => true]);
    }
}
