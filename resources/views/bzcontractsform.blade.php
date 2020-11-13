<!-- resources/views/bzcontracts.blade.php -->
@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="col-sm-18">
            <div class="panel panel-default">
                <div class="panel-heading">
                    New bzcontract
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')

                    <!-- My Form -->
                    <form action="{{ url('bzcontract')}}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <!-- My Form Name -->

                        <div class="form-group">
                            <label for="bzcontract-Class" class="col-sm-3 control-label"><span style="color: red">*</span> Class</label>

                            <div class="col-sm-6">
                                <input type="text" name="Class" id="bzcontract-Class" class="form-control" value="{{ old('bzcontract') }}">
                            </div>
                        </div>

                        <!-- My Form Name -->
                        <div class="form-group">
                            <label for="bzcontract-bcId" class="col-sm-3 control-label"><span style="color: red">*</span> BcId</label>

                            <div class="col-sm-6">
                                <input type="text" name="bcId" id="bzcontract-bcId" class="form-control" value="{{ old('bzcontract') }}">
                            </div>
                        </div>

                        <!-- My Form Name -->
                        <div class="form-group">
                            <label for="bzcontract-apId" class="col-sm-3 control-label"><span style="color: red">*</span> ApId</label>

                            <div class="col-sm-6">
                                <input type="text" name="apId" id="bzcontract-apId" class="form-control" value="{{ old('bzcontract') }}">
                            </div>
                        </div>

                        <!-- My Form Name -->
                        <div class="form-group">
                            <label for="bzcontract-bzContractType" class="col-sm-3 control-label"><span style="color: red">*</span> BzContractType</label>

                            <div class="col-sm-6">
                                <input type="text" name="bzContractType" id="bzcontract-bzContractType" class="form-control" value="{{ old('bzcontract') }}">
                            </div>
                        </div>

                        <!-- My Form Name -->
                        <div class="form-group">
                            <label for="bzcontract-Description" class="col-sm-3 control-label"><span style="color: red">*</span> Description</label>

                            <div class="col-sm-6">
                                <input type="text" name="Description" id="bzcontract-Description" class="form-control" value="{{ old('bzcontract') }}">
                            </div>
                        </div>

                        <!-- My Form Name -->
                        <div class="form-group">
                            <label for="bzcontract-Name" class="col-sm-3 control-label"><span style="color: red">*</span> Name</label>

                            <div class="col-sm-6">
                                <input type="text" name="Name" id="bzcontract-Name" class="form-control" value="{{ old('bzcontract') }}">
                            </div>
                        </div>

                        <!-- My Form Name -->
                        <div class="form-group">
                            <label for="bzcontract-startDate" class="col-sm-3 control-label"><span style="color: red">*</span> StartDate</label>

                            <div class="col-sm-6">
                                <input type="text" name="startDate" id="bzcontract-startDate" class="form-control" value="{{ old('bzcontract') }}">
                            </div>
                        </div>

                        <!-- My Form Name -->
                        <div class="form-group">
                            <label for="bzcontract-endDate" class="col-sm-3 control-label"><span style="color: red">*</span> endDate</label>

                            <div class="col-sm-6">
                                <input type="text" name="endDate" id="bzcontract-endDate" class="form-control" value="{{ old('bzcontract') }}">
                            </div>
                        </div>

                        <!-- My Form Name -->
                        <div class="form-group">
                            <label for="bzcontract-Term" class="col-sm-3 control-label"><span style="color: red">*</span> Term</label>

                            <div class="col-sm-6">
                                <input type="text" name="Term" id="bzcontract-Term" class="form-control" value="{{ old('bzcontract') }}">
                            </div>
                        </div>

                        <!-- My Form Name -->
                        <div class="form-group">
                            <label for="bzcontract-primaryParty_BzContactId" class="col-sm-3 control-label"><span style="color: red">*</span> PrimaryPartyBzContactId</label>

                            <div class="col-sm-6">
                                <input type="text" name="primaryParty_BzContactId" id="bzcontract-primaryParty_BzContactId" class="form-control" value="{{ old('bzcontract') }}">
                            </div>
                        </div>

                        <!-- My Form Name -->
                        <div class="form-group">
                            <label for="bzcontract-primaryParty_BzOrgtId" class="col-sm-3 control-label"><span style="color: red">*</span> PrimaryPartyBzOrgtId</label>

                            <div class="col-sm-6">
                                <input type="text" name="primaryParty_BzOrgId" id="bzcontract-primaryParty_BzOrgId" class="form-control" value="{{ old('bzcontract') }}">
                            </div>
                        </div>

                        <!-- My Form Name -->
                        <div class="form-group">
                            <label for="bzcontract-counterParty_BzOrgtId" class="col-sm-3 control-label"><span style="color: red">*</span> CounterPartyBzOrgtId</label>

                            <div class="col-sm-6">
                                <input type="text" name="counterParty_BzOrgId" id="bzcontract-counterParty_BzOrgId" class="form-control" value="{{ old('bzcontract') }}">
                            </div>
                        </div>

                        <!-- My Form Name -->
                        <div class="form-group">
                            <label for="bzcontract-counterParty_BzContactId" class="col-sm-3 control-label"><span style="color: red">*</span> CounterPartyBzContactId</label>

                            <div class="col-sm-6">
                                <input type="text" name="counterParty_BzContactId" id="bzcontract-counterParty_BzContactId" class="form-control" value="{{ old('bzcontract') }}">
                            </div>
                        </div>

                        <!-- My Form Name -->
                        <div class="form-group">
                            <label for="bzcontract-contractValue" class="col-sm-3 control-label"><span style="color: red">*</span> ContractValue</label>

                            <div class="col-sm-6">
                                <input type="text" name="contractValue" id="bzcontract-contractValue" class="form-control" value="{{ old('bzcontract') }}">
                            </div>
                        </div>

                        <!-- My Form Name -->
                        <div class="form-group">
                            <label for="bzcontract-paymentStatus" class="col-sm-3 control-label"><span style="color: red">*</span> PaymentStatus</label>

                            <div class="col-sm-6">
                                <input type="text" name="paymentStatus" id="bzcontract-paymentStatus" class="form-control" value="{{ old('bzcontract') }}">
                            </div>
                        </div>

                        <!-- My Form Name -->
                        <div class="form-group">
                            <label for="bzcontract-Status" class="col-sm-3 control-label"><span style="color: red">*</span> Status</label>

                            <div class="col-sm-6">
                                <input type="text" name="Status" id="bzcontract-Status" class="form-control" value="{{ old('bzcontract') }}">
                            </div>
                        </div>

                        <!-- My Form Name -->
                        <div class="form-group">
                            <label for="bzcontract-Active" class="col-sm-3 control-label"><span style="color: red">*</span> Active</label>

                            <div class="col-sm-6">
                                <input type="text" name="Active" id="bzcontract-Active" class="form-control" value="{{ old('bzcontract') }}">
                            </div>
                        </div>

                        <!-- My Form Name -->
                        <div class="form-group">
                            <label for="bzcontract-earnedRevenue" class="col-sm-3 control-label"><span style="color: red">*</span> EarnedRevenue</label>

                            <div class="col-sm-6">
                                <input type="text" name="earnedRevenue" id="bzcontract-earnedRevenue" class="form-control" value="{{ old('bzcontract') }}">
                            </div>
                        </div>

                        <!-- My Form Name -->
                        <div class="form-group">
                            <label for="bzcontract-bzLocation" class="col-sm-3 control-label"><span style="color: red">*</span> BzLocation</label>

                            <div class="col-sm-6">
                                <input type="text" name="bzLocation" id="bzcontract-bzLocation" class="form-control" value="{{ old('bzcontract') }}">
                            </div>
                        </div>


                        <!-- Add Task Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
