<!-- resources/views/bzcontracts.blade.php -->
@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="btn-group" role="group" style="float: right;">
            {{-- <input type="button" value="Click Me" > --}}
            <form action="{{ url('bzcontractform')}}" method="GET">
                <button type="submit"  class="btn btn-primary">Create</button>
             </form>
        </div>
        <div class="col-sm-18">

            <!-- Current Tasks -->
            @if (count($bzcontracts) > 0)
            <div class="panel panel-default">
                <div class="panel-heading">
                    Current BzContracts
                </div>

                <div class="panel-body" style="overflow-x:auto;">
                    @include('common.errors')
                        <table class="table table-striped bzcontract-table" >
                            <thead>
                                <th>Bz Contract Id</th>
                                <th>Class</th>
                                <th>Bc Id</th>
                                <th>Ap Id</th>
                                <th>Bz Contract Type</th>
                                <th>Description</th>
                                <th>Name</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Term</th>
                                <th>Primary Party Bz Contact Id</th>
                                <th>Primary Party Bz Org Id</th>
                                <th>Counter Party Bz Org Id</th>
                                <th>Counter Party Bz Contact Id</th>
                                <th>Payment Status</th>
                                <th>Status</th>
                                <th>Active</th>
                                <th>Earned Revenue</th>
                                <th>Bz Location</th>
                                <th>&nbsp;</th>
                            </thead>
                            <tbody>
                                @foreach ($bzcontracts as $bzcontract)
                                    <tr>
                                        <td class="table-text"><div>{{ $bzcontract->id }}</div></td>
                                        <td class="table-text"><div>{{ $bzcontract->Class }}</div></td>
                                        <td class="table-text"><div>{{ $bzcontract->bcId }}</div></td>
                                        <td class="table-text"><div>{{ $bzcontract->apId }}</div></td>
                                        <td class="table-text"><div>{{ $bzcontract->bzContractType }}</div></td>
                                        <td class="table-text"><div>{{ $bzcontract->Description }}</div></td>
                                        <td class="table-text"><div>{{ $bzcontract->Name }}</div></td>
                                        <td class="table-text"><div>{{ $bzcontract->startDate }}</div></td>
                                        <td class="table-text"><div>{{ $bzcontract->endDate }}</div></td>
                                        <td class="table-text"><div>{{ $bzcontract->Term }}</div></td>
                                        <td class="table-text"><div>{{ $bzcontract->primaryParty_BzContactId }}</div></td>
                                        <td class="table-text"><div>{{ $bzcontract->primaryParty_BzOrgId }}</div></td>
                                        <td class="table-text"><div>{{ $bzcontract->counterParty_BzOrgId }}</div></td>
                                        <td class="table-text"><div>{{ $bzcontract->counterParty_BzContactId }}</div></td>
                                        <td class="table-text"><div>{{ $bzcontract->contractValue }}</div></td>
                                        <td class="table-text"><div>{{ $bzcontract->paymentStatus }}</div></td>
                                        <td class="table-text"><div>{{ $bzcontract->Status }}</div></td>
                                        <td class="table-text"><div>{{ $bzcontract->Active }}</div></td>
                                        <td class="table-text"><div>{{ $bzcontract->earnedRevenue }}</div></td>
                                        <td class="table-text"><div>{{ $bzcontract->bzLocation }}</div></td>





                                        <!-- Task Delete Button -->
                                        <td>
                                            <form action="{{ url('bzcontract/'.$bzcontract->id) }}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}

                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fa fa-btn fa-trash"></i>Delete
                                                </button>
                                            </form>
                                        </td>
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
