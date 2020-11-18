<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BzPart;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Validator;

class BzPartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('bzparts.bzparts', [
            'bzparts' => BzPart::orderBy('created_at', 'asc')->get()
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
            'class' => 'max:255',
            'bcId' => 'required|max:255',
            'apId' => 'required|max:255',
            'bzPartType' => 'required|max:255',
            'description' => 'required|max:255',
            'partNumber' => 'max:255',
            'serialNumber' => 'max:255',
            'ucc_cid' => 'required|max:255',
            'name' => 'required|max:255',
            'issueDate' => 'required|max:255',
            'issuedBy_BzContactId' => 'required|max:255',
            'issuedBy_BzOrgId' => 'required|max:255',
            'manufacturer_BzOrgId' => 'required|max:255',
            'currentOwner_BzContactId' => 'required|max:255',
            'currentOwner_BzOrgId' => 'required|max:255',
            'bzAssetFamily' => 'required|max:255',
            'make' => 'required|max:255',
            'bzModel' => 'required|max:255',
            'year' => 'required|max:255',
            'bzPartLife' => 'required|max:255',
            'operatingCycles' => 'required|max:255',
            'repairable' => 'required|max:255',
            'bzPartCondition' => 'required|max:255',
            'bzPartCategory' => 'required|max:255',
            'status' => 'required|max:255',
            'active' => 'required|max:255',
            'acquisitionCost' => 'required|max:255',
            'supplier_BzOrgId' => 'required|max:255',
            'bzLocation' => 'required|max:255',
            'warrantyStatus' => 'required|max:255',
            'insuranceStatus' => 'required|max:255',
        ],[
            'required' => 'This field is required.',
        ]);

        if ($validator->fails()) {
            return redirect(/* '/bzcontractform' */)->back()
                ->withInput()
                ->withErrors($validator);
        }

        $bzpart = new BzPart;
        $bzpart->class = $request->class;
        $bzpart->bcId = $request->bcId;
        $bzpart->apId = $request->apId;
        $bzpart->bzPartType = $request->bzPartType;
        $bzpart->description = $request->description;
        $bzpart->partNumber = $request->partNumber;
        $bzpart->serialNumber = $request->serialNumber;
        $bzpart->ucc_cid = $request->ucc_cid;
        $bzpart->name = $request->name;
        $bzpart->issueDate = $request->issueDate;
        $bzpart->issuedBy_BzContactId = $request->issuedBy_BzContactId;
        $bzpart->issuedBy_BzOrgId = $request->issuedBy_BzOrgId;
        $bzpart->manufacturer_BzOrgId = $request->manufacturer_BzOrgId;
        $bzpart->currentOwner_BzContactId = $request->currentOwner_BzContactId;
        $bzpart->currentOwner_BzOrgId = $request->currentOwner_BzOrgId;
        $bzpart->bzAssetFamily = $request->bzAssetFamily;
        $bzpart->make = $request->make;
        $bzpart->bzModel = $request->bzModel;
        $bzpart->year = $request->year;
        $bzpart->bzPartLife = $request->bzPartLife;
        $bzpart->operatingCycles = $request->operatingCycles;
        $bzpart->repairable = $request->repairable;
        $bzpart->bzPartCondition = $request->bzPartCondition;
        $bzpart->bzPartCategory = $request->bzPartCategory;
        $bzpart->status = $request->status;
        $bzpart->active = $request->active;
        $bzpart->acquisitionCost = $request->acquisitionCost;
        $bzpart->supplier_BzOrgId = $request->supplier_BzOrgId;
        $bzpart->bzLocation = $request->bzLocation;
        $bzpart->warrantyStatus = $request->warrantyStatus;
        $bzpart->insuranceStatus = $request->insuranceStatus;
        $bzpart->save();




        return redirect('/bzpart');
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
    }
}
