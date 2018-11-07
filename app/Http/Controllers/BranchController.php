<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Bank;
use App\Models\BankBranch;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Laravel\Lumen\Routing\Controller as BaseController;

class BranchController extends BaseController
{
    public function show_branch_list()
    {
        $branch = BankBranch::all();
        $bank = Bank::all();
        return view('BankBranch.crud', [
            'title' => 'Branch',
            'branchs' => $branch,
            'banks' => $bank
        ]);
    }

    public function del_branch(Request $request)
    {
        $Bnumber = $request->get('Bnumber');
        $branch = BankBranch::find($Bnumber);
        $branch->delete();

        return response()->json(['status' => true]);
    }

    public function add_branch(Request $request)
    {

        $branch = new BankBranch();
        $branch->Bnumber = $request->get('Bnumber');
        $branch->Name = $request->get('Name');
        $branch->Street = $request->get('Street');
        $branch->City = $request->get('City');
        $branch->Province = $request->get('Province');
        $branch->ZIP = $request->get('ZIP');
        $branch->Phone = $request->get('Phone');
        $branch->Bcode = $request->get('Bcode');
        $branch->save();
        return response()->json(['status' => true]);
    }

    public function edit_branch(Request $request)
    {
        $branch = BankBranch::find($request->get('Bnumber'));
        $branch->Name = $request->get('Name');
        $branch->Street = $request->get('Street');
        $branch->City = $request->get('City');
        $branch->Province = $request->get('Province');
        $branch->ZIP = $request->get('ZIP');
        $branch->Phone = $request->get('Phone');
        $branch->Bcode = $request->get('Bcode');
        $branch->save();
        return response()->json(['status' => true]);
    }
}
