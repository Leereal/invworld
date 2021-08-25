@extends('layouts.sidebar')
@section('content')
<div class="content">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Referrals</h4>
        </div>
    </div>
    <div class="row col-12">
        <div class="card col-12">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>     
                                <th>Username</th>                         
                                <th>Joining Date</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($referrals as $referral)
                            <tr>
                                <td>{{$referral->username}}</td>
                                <td>{{date('d M Y', strtotime($referral->created_at));}}</td>
                                <td class="color-primary"><span class="badge badge-success px-2">Active</span></td>
                            </tr>
                            @empty 
                            <p>No referrals to show. If you want to earn extra income please use your referral link under profile to recruit and earn.</p>
                            @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

