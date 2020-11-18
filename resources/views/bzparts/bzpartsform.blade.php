<!-- resources/views/bzparts.blade.php -->
@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="col-sm-18">
            <div class="panel panel-default">
                <div class="panel-heading">
                    New bzpart
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    {{-- @include('common.errors') --}}

                    <script type="text/javascript" language="javascript">
                        function checkform()
                        {
                            var f = document.forms["theform"].elements;
                            var cansubmit = true;
                            // console.log(f);
                            for (var i = 0; i < f.length; i++) {
                                if ((f[i].id).includes("bzpart") && (f[i].value.length == 0 || f[i].value == '')){
                                    // console.log(f[i].id);
                                    cansubmit = false;
                                }
                            }
                    
                            console.log(document.getElementById('submitbutton'));
                            if (cansubmit) {
                                document.getElementById('submitbutton').disabled = false;
                            }
                            if(!cansubmit) {
                                document.getElementById('submitbutton').disabled = true;
                            }
                        }
                    </script>

                    <!-- My Form -->
                    <form name="theform" action="{{ url('bzpart')}}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <!-- My Form Name -->
                        <table class="centre table table-stripped bzpart-table">

                            <tr>
                                <div class="d">
                                    <td>
                                        <label for="bzpart-Class" class="col-sm-3 control-label"><span style="color: red">*</span> Class</label>
                                        <div class="col-sm-6">
                                            <input type="text" onKeyup="checkform()" name="class" id="bzpart-Class" class="form-control" value="{{ old('class') }}">
                                        </div>
                                    </td>
                                </div>
                                <div class="d">
                                    <td>
                                        <label for="bzpart-Class" class="col-sm-3 control-label"><span style="color: red">*</span> Bc ID</label>
                                        <div class="col-sm-6">
                                            <input type="text" onKeyup="checkform()" name="bcId" id="bzpart-Class" class="form-control" value="{{ old('bcId') }}">
                                        </div>
                                    </td>
                                </div>
                            </tr>
                            <tr>
                                <div class="d">
                                    <td>
                                        <label for="bzpart-Class" class="col-sm-3 control-label"><span style="color: red">*</span> App Id</label>
                                        <div class="col-sm-6">
                                            <input type="text" onKeyup="checkform()" name="apId" id="bzpart-Class" class="form-control" value="{{ old('apId') }}">
                                        </div>
                                    </td>
                                </div>
                                <div class="d">
                                    <td>
                                        <label for="bzpart-Class" class="col-sm-3 control-label"><span style="color: red">*</span> Bz Part Type</label>
                                        <div class="col-sm-6">
                                            <input type="text" onKeyup="checkform()" name="bzPartType" id="bzpart-Class" class="form-control" value="{{ old('bzPartType') }}">
                                        </div>
                                    </td>
                                </div>
                            </tr>
                            <tr>
                                <div class="d">
                                    <td>
                                        <label for="bzpart-Class" class="col-sm-3 control-label"><span style="color: red">*</span> Description</label>
                                        <div class="col-sm-6">
                                            <input type="text" onKeyup="checkform()" name="description" id="bzpart-Class" class="form-control" value="{{ old('description') }}">
                                        </div>
                                    </td>
                                </div>
                                <div class="d">
                                    <td>
                                        <label for="bzpart-Class" class="col-sm-3 control-label"><span style="color: red">*</span> Part Number</label>
                                        <div class="col-sm-6">
                                            <input type="text" onKeyup="checkform()" name="partNumber" id="bzpart-Class" class="form-control" value="{{ old('partNumber') }}">
                                        </div>
                                    </td>
                                </div>
                            </tr>
                            <tr>
                                <div class="d">
                                    <td>
                                        <label for="bzpart-Class" class="col-sm-3 control-label"><span style="color: red">*</span> Serial Number</label>
                                        <div class="col-sm-6">
                                            <input type="text" onKeyup="checkform()" name="serialNumber" id="bzpart-Class" class="form-control" value="{{ old('serialNumber') }}">
                                        </div>
                                    </td>
                                </div>
                                <div class="d">
                                    <td>
                                        <label for="bzpart-Class" class="col-sm-3 control-label"><span style="color: red">*</span> Ucc/C Id</label>
                                        <div class="col-sm-6">
                                            <input type="text" onKeyup="checkform()" name="ucc_cid" id="bzpart-Class" class="form-control" value="{{ old('ucc_cid') }}">
                                        </div>
                                    </td>
                                </div>
                            </tr>
                            <tr>
                                <div class="d">
                                    <td>
                                        <label for="bzpart-Class" class="col-sm-3 control-label"><span style="color: red">*</span> Name</label>
                                        <div class="col-sm-6">
                                            <input type="text" onKeyup="checkform()" name="name" id="bzpart-Class" class="form-control" value="{{ old('name') }}">
                                        </div>
                                    </td>
                                </div>
                                <div class="d">
                                    <td>
                                        <label for="bzpart-Class" class="col-sm-3 control-label"><span style="color: red">*</span> Issue Date</label>
                                        <div class="col-sm-6">
                                            <input type="text" onKeyup="checkform()" name="issueDate" id="bzpart-Class" class="form-control" value="{{ old('issueDate') }}">
                                        </div>
                                    </td>
                                </div>
                            </tr>
                            <tr>
                                <div class="d">
                                    <td>
                                        <label for="bzpart-Class" class="col-sm-3 control-label"><span style="color: red">*</span> Issued By Bz ContactId</label>
                                        <div class="col-sm-6">
                                            <input type="text" onKeyup="checkform()" name="issuedBy_BzContactId" id="bzpart-Class" class="form-control" value="{{ old('issuedBy_BzContactId') }}">
                                        </div>
                                    </td>
                                </div>
                                <div class="d">
                                    <td>
                                        <label for="bzpart-Class" class="col-sm-3 control-label"><span style="color: red">*</span> Issued By Bz Org ID</label>
                                        <div class="col-sm-6">
                                            <input type="text" onKeyup="checkform()" name="issuedBy_BzOrgId" id="bzpart-Class" class="form-control" value="{{ old('issuedBy_BzOrgId') }}">
                                        </div>
                                    </td>
                                </div>
                            </tr>
                            <tr>
                                <div class="d">
                                    <td>
                                        <label for="bzpart-Class" class="col-sm-3 control-label"><span style="color: red">*</span> Manufacturer Bz Org Id</label>
                                        <div class="col-sm-6">
                                            <input type="text" onKeyup="checkform()" name="manufacturer_BzOrgId" id="bzpart-Class" class="form-control" value="{{ old('manufacturer_BzOrgId') }}">
                                        </div>
                                    </td>
                                </div>
                                <div class="d">
                                    <td>
                                        <label for="bzpart-Class" class="col-sm-3 control-label"><span style="color: red">*</span> Current Owner Bz Contact Id</label>
                                        <div class="col-sm-6">
                                            <input type="text" onKeyup="checkform()" name="currentOwner_BzContactId" id="bzpart-Class" class="form-control" value="{{ old('currentOwner_BzContactId') }}">
                                        </div>
                                    </td>
                                </div>
                            </tr>
                            <tr>
                                <div class="d">
                                    <td>
                                        <label for="bzpart-Class" class="col-sm-3 control-label"><span style="color: red">*</span> Current Owner Bz Org Id</label>
                                        <div class="col-sm-6">
                                            <input type="text" onKeyup="checkform()" name="currentOwner_BzOrgId" id="bzpart-Class" class="form-control" value="{{ old('currentOwner_BzOrgId') }}">
                                        </div>
                                    </td>
                                </div>
                                <div class="d">
                                    <td>
                                        <label for="bzpart-Class" class="col-sm-3 control-label"><span style="color: red">*</span> Bz Asset Family</label>
                                        <div class="col-sm-6">
                                            <input type="text" onKeyup="checkform()" name="bzAssetFamily" id="bzpart-Class" class="form-control" value="{{ old('bzAssetFamily') }}">
                                        </div>
                                    </td>
                                </div>
                            </tr>
                            <tr>
                                <div class="d">
                                    <td>
                                        <label for="bzpart-Class" class="col-sm-3 control-label"><span style="color: red">*</span> Make</label>
                                        <div class="col-sm-6">
                                            <input type="text" onKeyup="checkform()" name="make" id="bzpart-Class" class="form-control" value="{{ old('make') }}">
                                        </div>
                                    </td>
                                </div>
                                <div class="d">
                                    <td>
                                        <label for="bzpart-Class" class="col-sm-3 control-label"><span style="color: red">*</span> Bz Model</label>
                                        <div class="col-sm-6">
                                            <input type="text" onKeyup="checkform()" name="bzModel" id="bzpart-Class" class="form-control" value="{{ old('bzModel') }}">
                                        </div>
                                    </td>
                                </div>
                            </tr>
                            <tr>
                                <div class="d">
                                    <td>
                                        <label for="bzpart-Class" class="col-sm-3 control-label"><span style="color: red">*</span> Year</label>
                                        <div class="col-sm-6">
                                            <input type="text" onKeyup="checkform()" name="year" id="bzpart-Class" class="form-control" value="{{ old('year') }}">
                                        </div>
                                    </td>
                                </div>
                                <div class="d">
                                    <td>
                                        <label for="bzpart-Class" class="col-sm-3 control-label"><span style="color: red">*</span> Bz Part Life</label>
                                        <div class="col-sm-6">
                                            <input type="text" onKeyup="checkform()" name="bzPartLife" id="bzpart-Class" class="form-control" value="{{ old('bzPartLife') }}">
                                        </div>
                                    </td>
                                </div>
                            </tr>
                            <tr>
                                <div class="d">
                                    <td>
                                        <label for="bzpart-Class" class="col-sm-3 control-label"><span style="color: red">*</span> Operating Cycles</label>
                                        <div class="col-sm-6">
                                            <input type="text" onKeyup="checkform()" name="operatingCycles" id="bzpart-Class" class="form-control" value="{{ old('operatingCycles') }}">
                                        </div>
                                    </td>
                                </div>
                                <div class="d">
                                    <td>
                                        <label for="bzpart-Class" class="col-sm-3 control-label"><span style="color: red">*</span> Repairable</label>
                                        <div class="col-sm-6">
                                            <input type="text" onKeyup="checkform()" name="repairable" id="bzpart-Class" class="form-control" value="{{ old('repairable') }}">
                                        </div>
                                    </td>
                                </div>
                            </tr>
                            <tr>
                                <div class="d">
                                    <td>
                                        <label for="bzpart-Class" class="col-sm-3 control-label"><span style="color: red">*</span> Bz Part Condition</label>
                                        <div class="col-sm-6">
                                            <input type="text" onKeyup="checkform()" name="bzPartCondition" id="bzpart-Class" class="form-control" value="{{ old('bzPartCondition') }}">
                                        </div>
                                    </td>
                                </div>
                                <div class="d">
                                    <td>
                                        <label for="bzpart-Class" class="col-sm-3 control-label"><span style="color: red">*</span> Bz Part Category</label>
                                        <div class="col-sm-6">
                                            <input type="text" onKeyup="checkform()" name="bzPartCategory" id="bzpart-Class" class="form-control" value="{{ old('bzPartCategory') }}">
                                        </div>
                                    </td>
                                </div>
                            </tr>
                            <tr>
                                <div class="d">
                                    <td>
                                        <label for="bzpart-Class" class="col-sm-3 control-label"><span style="color: red">*</span> Status</label>
                                        <div class="col-sm-6">
                                            <input type="text" onKeyup="checkform()" name="status" id="bzpart-Class" class="form-control" value="{{ old('status') }}">
                                        </div>
                                    </td>
                                </div>
                                <div class="d">
                                    <td>
                                        <label for="bzpart-Class" class="col-sm-3 control-label"><span style="color: red">*</span> Active</label>
                                        <div class="col-sm-6">
                                            <input type="text" onKeyup="checkform()" name="active" id="bzpart-Class" class="form-control" value="{{ old('active') }}">
                                        </div>
                                    </td>
                                </div>
                            </tr>
                            <tr>
                                <div class="d">
                                    <td>
                                        <label for="bzpart-Class" class="col-sm-3 control-label"><span style="color: red">*</span> Acquisition Cost</label>
                                        <div class="col-sm-6">
                                            <input type="text" onKeyup="checkform()" name="acquisitionCost" id="bzpart-Class" class="form-control" value="{{ old('acquisitionCost') }}">
                                        </div>
                                    </td>
                                </div>
                                <div class="d">
                                    <td>
                                        <label for="bzpart-Class" class="col-sm-3 control-label"><span style="color: red">*</span> Supplier Bz Org Id</label>
                                        <div class="col-sm-6">
                                            <input type="text" onKeyup="checkform()" name="supplier_BzOrgId" id="bzpart-Class" class="form-control" value="{{ old('supplier_BzOrgId') }}">
                                        </div>
                                    </td>
                                </div>
                            </tr>
                            <tr>
                                <div class="d">
                                    <td>
                                        <label for="bzpart-Class" class="col-sm-3 control-label"><span style="color: red">*</span> Bz Location</label>
                                        <div class="col-sm-6">
                                            <input type="text" onKeyup="checkform()" name="bzLocation" id="bzpart-Class" class="form-control" value="{{ old('bzLocation') }}">
                                        </div>
                                    </td>
                                </div>
                                <div class="d">
                                    <td>
                                        <label for="bzpart-Class" class="col-sm-3 control-label"><span style="color: red">*</span> Warranty Status</label>
                                        <div class="col-sm-6">
                                            <input type="text" onKeyup="checkform()" name="warrantyStatus" id="bzpart-Class" class="form-control" value="{{ old('warrantyStatus') }}">
                                        </div>
                                    </td>
                                </div>
                            </tr>
                            <tr>
                                <div class="d">
                                    <td>
                                        <label for="bzpart-Class" class="col-sm-3 control-label"><span style="color: red">*</span> Insurance Status</label>
                                        <div class="col-sm-6">
                                            <input type="text" onKeyup="checkform()" name="insuranceStatus" id="bzpart-Class" class="form-control" value="{{ old('insuranceStatus') }}">
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
