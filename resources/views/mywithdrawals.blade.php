@extends('layouts.sidebar')
@section('content')
<div class="content">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">My Withdrawals</h4>
        </div>
    </div>
    <div class="row col-12">
        <div class="card col-12">
            <div class="card-body">
            <div class="table-responsive">
                <table class="table text-nowrap">
                    <thead class="">
                    <th>DATE</th>
                    <th>AMOUNT</th>
                    <th>ACCOUNT</th>
                    <th>STATUS</th>
                    </thead>
                    <tbody> 
                    @foreach($withdrawals as $withdrawal) 
                    <tr>
                        <td>{{$withdrawal->created_at}}</td> 
                        <td>${{$withdrawal->amount}}</td>
                        <td>{{$withdrawal->account}}</td>
                        @if($withdrawal->status==2)
                        <td>
                        <button disabled class="btn btn-primary btn-sm btn-round"><i class="icon-check"></i> Pending</button>
                        </td> 
                        @else
                        <td>
                        <button disabled class="btn btn-success btn-sm btn-round"><i class="icon-check"></i> Processed</button>
                        </td>
                        @endif          
                    </tr>
                    @endforeach   
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection

