@extends('layouts.sidebar')
@section('content')
<div class="content">
  <div class="page-inner">
      <div class="page-header">
          <h4 class="page-title">Bonus</h4>
      </div>
  </div>
  <div class="row">
    <div class="table-responsive col-12">
      <table class="table text-nowrap">
          <thead class="">
            <th>DATE</th>
            <th>AMOUNT</th>
            <th>INVESTMENT</th>
            <th>DOWNLINER</th>
            {{-- <th>STATUS</th>           --}}
          </thead>
          <tbody>  
            @forelse($bonuses as $bonus) 
            <tr>
              <td>{{$bonus->created_at}}</td> 
              <td>${{$bonus->amount}}</td>
              <td>${{$bonus->investment->amount ?? ''}}</td>
              <td>{{$bonus->investment->user->username ?? ''}}</td>
              {{-- <td>{{$bonus->status}}</td>              --}}
            </tr>
            @endforeach  
          </tbody>
      </table>
    </div>
  </div>
</div>
@endsection

