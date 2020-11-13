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

                    <script type="text/javascript" language="javascript">
                        function checkform()
                        {
                            var f = document.forms["theform"].elements;
                            var cansubmit = true;
                            // console.log(f);
                            for (var i = 0; i < f.length; i++) {
                                // console.log(f[i].id);
                                if ((f[i].id).includes("bzcontract") && f[i].value.length == 0){
                                    // console.log(f[i].id);
                                    cansubmit = false;
                                }
                            }
                    
                            console.log(document.getElementById('submitbutton'));
                            if (cansubmit) {
                                document.getElementById('submitbutton').disabled = false;
                            }
                        }
                    </script>

                    <!-- My Form -->
                    <form name="theform" action="{{ url('bzcontract')}}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <!-- My Form Name -->
                        <table class="centre table  bzcontract-table">

                        <tr>
                            <div class="d">
                                <td>
                                    <label for="bzcontract-Class" class="col-sm-3 control-label"><span style="color: red">*</span> Class</label>

                                    <div class="col-sm-6">
                                        <input type="text" onKeyup="checkform()" name="Class" id="bzcontract-Class" class="form-control" value="{{ old('bzcontract') }}">
                                    </div>
                                </td>
                            </div>

                            <!-- My Form Name -->
                            <div class="d">
                                <td>
                                    <label for="bzcontract-bcId" class="col-sm-3 control-label"><span style="color: red">*</span> Bc Id</label>

                                    <div class="col-sm-6">
                                        <input type="text" onKeyup="checkform()" name="bcId" id="bzcontract-bcId" class="form-control" value="{{ old('bzcontract') }}">
                                    </div>
                                </td>
                            </div>
                        </tr>

                        <tr>
                            <div class="d">
                                <td>
                                    <label for="bzcontract-apId" class="col-sm-3 control-label"><span style="color: red">*</span> Ap Id</label>

                                    <div class="col-sm-6">
                                        <input type="text" onKeyup="checkform()" name="apId" id="bzcontract-apId" class="form-control" value="{{ old('bzcontract') }}">
                                    </div>
                                </td>
                            </div>

                        <!-- My Form Name -->
                            <div class="d">
                                <td>
                                    <label for="bzcontract-bzContractType" class="col-sm-3 control-label"><span style="color: red">*</span> Bz Contract Type</label>

                                    <div class="col-sm-6">
                                        <input type="text" onKeyup="checkform()" name="bzContractType" id="bzcontract-bzContractType" class="form-control" value="{{ old('bzcontract') }}">
                                    </div>
                                </td>
                            </div>
                        </tr>

                        <tr>
                            <div class="d">
                                <td>
                                    <div class="d">
                                        <label for="bzcontract-Description" class="col-sm-3 control-label"><span style="color: red">*</span> Description</label>

                                        <div class="col-sm-6">
                                            <input type="text" onKeyup="checkform()" name="Description" id="bzcontract-Description" class="form-control" value="{{ old('bzcontract') }}">
                                        </div>
                                    </div>
                                </td>
                            </div>

                        <!-- My Form Name -->
                            <div class="d">
                                <td>
                                    <div class="d">
                                        <label for="bzcontract-Name" class="col-sm-3 control-label"><span style="color: red">*</span> Name</label>
            
                                        <div class="col-sm-6">
                                            <input type="text" onKeyup="checkform()" name="Name" id="bzcontract-Name" class="form-control" value="{{ old('bzcontract') }}">
                                        </div>
                                    </div>
                                </td>
                            </div>
                        </tr>


                        <tr>
                            <div class="d">
                                <td>
                                    <div class="d">
                                        <label for="bzcontract-startDate" class="col-sm-3 control-label"><span style="color: red">*</span> Start Date</label>

                                        <div class="col-sm-6">
                                            <input type="text" onKeyup="checkform()" name="startDate" id="bzcontract-startDate" class="form-control" value="{{ old('bzcontract') }}">
                                        </div>
                                    </div>
                                </td>
                            </div>

                        <!-- My Form Name -->
                            <div class="d">
                                <td>
                                    <div class="d">
                                        <label for="bzcontract-endDate" class="col-sm-3 control-label"><span style="color: red">*</span> End Date</label>

                                        <div class="col-sm-6">
                                            <input type="text" onKeyup="checkform()" name="endDate" id="bzcontract-endDate" class="form-control" value="{{ old('bzcontract') }}">
                                        </div>
                                    </div>
                                </td>
                            </div>
                        </tr>

                        <tr>
                            <div class="d">
                                <td>
                                    <!-- My Form Name -->
                                    <div class="d">
                                        <label for="bzcontract-Term" class="col-sm-3 control-label"><span style="color: red">*</span> Term</label>

                                        <div class="col-sm-6">
                                            <input type="text" onKeyup="checkform()" name="Term" id="bzcontract-Term" class="form-control" value="{{ old('bzcontract') }}">
                                        </div>
                                    </div>
                                </td>
                            </div>

                        <!-- My Form Name -->
                            <div class="d">
                                <td>
                                    <!-- My Form Name -->
                                    <div class="d">
                                        <label for="bzcontract-primaryParty_BzContactId" class="col-sm-3 control-label"><span style="color: red">*</span> Primary Party Bz Contact Id</label>

                                        <div class="col-sm-6">
                                            <input type="text" onKeyup="checkform()" name="primaryParty_BzContactId" id="bzcontract-primaryParty_BzContactId" class="form-control" value="{{ old('bzcontract') }}">
                                        </div>
                                    </div>
                                </td>
                            </div>
                        </tr>

                        <tr>
                            <div class="d">
                                <td>
                                    <!-- My Form Name -->
                                    <div class="d">
                                        <label for="bzcontract-primaryParty_BzOrgtId" class="col-sm-3 control-label"><span style="color: red">*</span> Primary Party Bz Org Id</label>

                                        <div class="col-sm-6">
                                            <input type="text" onKeyup="checkform()" name="primaryParty_BzOrgId" id="bzcontract-primaryParty_BzOrgId" class="form-control" value="{{ old('bzcontract') }}">
                                        </div>
                                    </div>
                                </td>
                            </div>

                        <!-- My Form Name -->
                            <div class="d">
                                <td>
                                    <!-- My Form Name -->
                                    <div class="d">
                                        <label for="bzcontract-counterParty_BzOrgtId" class="col-sm-3 control-label"><span style="color: red">*</span> Counter Party Bz Org Id</label>

                                        <div class="col-sm-6">
                                            <input type="text" onKeyup="checkform()" name="counterParty_BzOrgId" id="bzcontract-counterParty_BzOrgId" class="form-control" value="{{ old('bzcontract') }}">
                                        </div>
                                    </div>
                                </td>
                            </div>
                        </tr>


                        <tr>
                            <div class="d">
                                <td>
                                    <!-- My Form Name -->
                                    <div class="d">
                                        <label for="bzcontract-counterParty_BzContactId" class="col-sm-3 control-label"><span style="color: red">*</span> Counter Party Bz Contact Id</label>

                                        <div class="col-sm-6">
                                            <input type="text" onKeyup="checkform()" name="counterParty_BzContactId" id="bzcontract-counterParty_BzContactId" class="form-control" value="{{ old('bzcontract') }}">
                                        </div>
                                    </div>
                                </td>
                            </div>

                        <!-- My Form Name -->
                            <div class="d">
                                <td>
                                    <!-- My Form Name -->
                                    <div class="d">
                                        <label for="bzcontract-contractValue" class="col-sm-3 control-label"><span style="color: red">*</span> Contract Value</label>

                                        <div class="col-sm-6">
                                            <input type="text" onKeyup="checkform()" name="contractValue" id="bzcontract-contractValue" class="form-control" value="{{ old('bzcontract') }}">
                                        </div>
                                    </div>
                                </td>
                            </div>
                        </tr>


                        <tr>
                            <div class="d">
                                <td>
                                    <!-- My Form Name -->
                                    <div class="d">
                                        <label for="bzcontract-paymentStatus" class="col-sm-3 control-label"><span style="color: red">*</span> Payment Status</label>

                                        <div class="col-sm-6">
                                            <input type="text" onKeyup="checkform()" name="paymentStatus" id="bzcontract-paymentStatus" class="form-control" value="{{ old('bzcontract') }}">
                                        </div>
                                    </div>
                                </td>
                            </div>

                        <!-- My Form Name -->
                            <div class="d">
                                <td>
                                    <!-- My Form Name -->
                                    <div class="d">
                                        <label for="bzcontract-Status" class="col-sm-3 control-label"><span style="color: red">*</span> Status</label>

                                        <div class="col-sm-6">
                                            <input type="text" onKeyup="checkform()" name="Status" id="bzcontract-Status" class="form-control" value="{{ old('bzcontract') }}">
                                        </div>
                                    </div>
                                </td>
                            </div>
                        </tr>



                        <tr>
                            <div class="d">
                                <td>
                                    <!-- My Form Name -->
                                    <!-- My Form Name -->
                                    <div class="d">
                                        <label for="bzcontract-Active" class="col-sm-3 control-label"><span style="color: red">*</span> Active</label>

                                        <div class="col-sm-6">
                                            <input type="text" onKeyup="checkform()" name="Active" id="bzcontract-Active" class="form-control" value="{{ old('bzcontract') }}">
                                        </div>
                                    </div>
                                </td>
                            </div>

                        <!-- My Form Name -->
                            <div class="d">
                                <td>
                                    <!-- My Form Name -->
                                    <div class="d">
                                        <label for="bzcontract-earnedRevenue" class="col-sm-3 control-label"><span style="color: red">*</span> Earned Revenue</label>

                                        <div class="col-sm-6">
                                            <input type="text" onKeyup="checkform()" name="earnedRevenue" id="bzcontract-earnedRevenue" class="form-control" value="{{ old('bzcontract') }}">
                                        </div>
                                    </div>
                                </td>
                            </div>
                        </tr>


                        <tr>
                            <div class="d">
                                <td>
                                    <!-- My Form Name -->
                                    <div class="d">
                                        <label for="bzcontract-bzLocation" class="col-sm-3 control-label"><span style="color: red">*</span> Bz Location</label>

                                        <div class="col-sm-6">
                                            <input type="text" onKeyup="checkform()" name="bzLocation" id="bzcontract-bzLocation" class="form-control" value="{{ old('bzcontract') }}">
                                        </div>
                                    </div>
                                </td>
                            </div>
                        </tr>
                        </table>
                        <!-- Add Task Button -->
                        <div class="d">
                            <div class="col-sm-offset-3 col-sm-6">
                                {{-- <input id="submitbutton" class="btn btn-default" type="submit" value="Submit" disabled="disabled"/> --}}

                                <button id="submitbutton" type="submit" class="btn btn-default" disabled>
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
