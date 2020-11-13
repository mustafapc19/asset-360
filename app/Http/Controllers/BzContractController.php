<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BzContract;
use App\Http\Requests;
use App\Http\Controllers\Controller;
// use Illuminate\Support\Facades\Validator;
// use Illuminate\Contracts\Validation\Validator;
// use Illuminate\Validation\Validator;
use Validator;

class BzContractController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('bzcontracts.bzcontracts', [
            'bzcontracts' => BzContract::orderBy('created_at', 'asc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'bcId' => 'required|unique:bz_contracts|max:255',
        ],[
            'required' => 'This field is required.',
        ]);

        if ($validator->fails()) {
            return redirect(/* '/bzcontractform' */)->back()
                ->withInput()
                ->withErrors($validator);
        }

        $bzcontract = new BzContract;
        $bzcontract->Class = $request->Class;
        $bzcontract->bcId = $request->bcId;
        $bzcontract->apid = $request->apId;
        $bzcontract->bzContractType = $request->bzContractType;
        $bzcontract->Description = $request->Description;
        $bzcontract->Name = $request->Name;
        $bzcontract->startDate = $request->startDate;
        $bzcontract->endDate = $request->endDate;
        $bzcontract->Term = $request->Term;
        $bzcontract->primaryParty_BzContactId = $request->primaryParty_BzContactId;
        $bzcontract->primaryParty_BzOrgId = $request->primaryParty_BzOrgId;
        $bzcontract->counterParty_BzOrgId = $request->counterParty_BzOrgId;
        $bzcontract->counterParty_BzContactId = $request->counterParty_BzContactId;
        $bzcontract->contractValue = $request->contractValue;
        $bzcontract->paymentStatus = $request->paymentStatus;
        $bzcontract->Status = $request->Status;
        $bzcontract->Active = $request->Active;
        $bzcontract->earnedRevenue = $request->earnedRevenue;
        $bzcontract->bzLocation = $request->bzLocation;
        $bzcontract->save();

        return redirect('/bzcontract');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        BzContract::findOrFail($id)->delete();

        return redirect('/bzcontract');
    }
}
