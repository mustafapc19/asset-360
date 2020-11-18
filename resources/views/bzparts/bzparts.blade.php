<!-- resources/views/bzparts.blade.php -->
@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="btn-group" role="group" style="float: right;">
            {{-- <input type="button" value="Click Me" > --}}
            <form action="{{ url('bzpartform')}}" method="GET">
                <button type="submit"  class="btn btn-primary">Create</button>
             </form>
        </div>
        <div class="col-sm-18">

            <!-- Current Tasks -->
            @if (count($bzparts) > 0)
            <div class="panel panel-default">
                <div class="panel-heading">
                    Current BzParts
                </div>

                <div class="panel-body" style="overflow-x:auto;">
                    {{-- @include('common.errors') --}}
                        <table class="table table-striped bzpart-table" style="width: 100%;">
                            <thead>
								<th>Class</th>
								<th>Bc ID</th>
								<th>App Id</th>
								<th>Bz Part Type</th>
								<th>Description</th>
								<th>Part Number</th>
								<th>Serial Number</th>
								<th>Ucc/C Id</th>
								<th>Name</th>
								<th>Issue Date</th>
								<th width="100%">Issued By Bz ContactId</th>
								<th width="100%">Issued By Bz Org ID</th>
								<th>Manufacturer Bz Org Id</th>
								<th>Current Owner Bz Contact Id</th>
								<th>Current Owner Bz Org Id</th>
								<th>Bz Asset Family</th>
								<th>Make</th>
								<th>Bz Model</th>
								<th>Year</th>
								<th>Bz Part Life</th>
								<th>Operating Cycles</th>
								<th>Repairable</th>
								<th>Bz Part Condition</th>
								<th>Bz Part Category</th>
								<th>Status</th>
								<th>Active</th>
								<th>Acquisition Cost</th>
								<th>Supplier Bz Org Id</th>
								<th>Bz Location</th>
								<th>Warranty Status</th>
								<th>Insurance Status</th>
                                <th>&nbsp;</th>
                            </thead>
                            <tbody>
                                @foreach ($bzparts as $bzpart)
                                    <tr>
                                        <td class="table-next"><div>{{ $bzpart->class }}</div></td>
                                        <td class="table-next"><div>{{ $bzpart->bcId }}</div></td>
                                        <td class="table-next"><div>{{ $bzpart->apId }}</div></td>
                                        <td class="table-next"><div>{{ $bzpart->bzPartType }}</div></td>
                                        <td class="table-next"><div>{{ $bzpart->description }}</div></td>
                                        <td class="table-next"><div>{{ $bzpart->partNumber }}</div></td>
                                        <td class="table-next"><div>{{ $bzpart->serialNumber }}</div></td>
                                        <td class="table-next"><div>{{ $bzpart->ucc_cid }}</div></td>
                                        <td class="table-next"><div>{{ $bzpart->name }}</div></td>
                                        <td class="table-next"><div>{{ $bzpart->issueDate }}</div></td>
                                        <td class="table-next"><div>{{ $bzpart->issuedBy_BzContactId }}</div></td>
                                        <td class="table-next"><div>{{ $bzpart->issuedBy_BzOrgId }}</div></td>
                                        <td class="table-next"><div>{{ $bzpart->manufacturer_BzOrgId }}</div></td>
                                        <td class="table-next"><div>{{ $bzpart->currentOwner_BzContactId }}</div></td>
                                        <td class="table-next"><div>{{ $bzpart->currentOwner_BzOrgId }}</div></td>
                                        <td class="table-next"><div>{{ $bzpart->bzAssetFamily }}</div></td>
                                        <td class="table-next"><div>{{ $bzpart->make }}</div></td>
                                        <td class="table-next"><div>{{ $bzpart->bzModel }}</div></td>
                                        <td class="table-next"><div>{{ $bzpart->year }}</div></td>
                                        <td class="table-next"><div>{{ $bzpart->bzPartLife }}</div></td>
                                        <td class="table-next"><div>{{ $bzpart->operatingCycles }}</div></td>
                                        <td class="table-next"><div>{{ $bzpart->repairable }}</div></td>
                                        <td class="table-next"><div>{{ $bzpart->bzPartCondition }}</div></td>
                                        <td class="table-next"><div>{{ $bzpart->bzPartCategory }}</div></td>
                                        <td class="table-next"><div>{{ $bzpart->status }}</div></td>
                                        <td class="table-next"><div>{{ $bzpart->active }}</div></td>
                                        <td class="table-next"><div>{{ $bzpart->acquisitionCost }}</div></td>
                                        <td class="table-next"><div>{{ $bzpart->supplier_BzOrgId }}</div></td>
                                        <td class="table-next"><div>{{ $bzpart->bzLocation }}</div></td>
                                        <td class="table-next"><div>{{ $bzpart->warrantyStatus }}</div></td>
                                        <td class="table-next"><div>{{ $bzpart->insuranceStatus }}</div></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
