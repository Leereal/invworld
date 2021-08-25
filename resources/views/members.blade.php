@extends('layouts.sidebar')
@section('content')
<div class="content">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Members</h4>
        </div>
    </div>
    <div class="row col-12">
      <div class="card col-12">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table text-nowrap">
              <thead class="">
                <th>ID</th>
                <th>DATE JOINED</th>
                <th>USERNAME</th>                  
                <th>CELLPHONE</th>
                <th>REFERRER</th> 
                {{-- <th>STATUS</th> --}}
              </thead>
              <tbody> 
                @foreach($members as $member)                  
                      <tr>
                        <td>{{$member->id}}</td> 
                        <td>{{$member->created_at}}</td> 
                        <td>{{$member->username}}</td>
                        <td>{{$member->cellphone}}</td>
                        <td>{{$member->referrer->username}}</td> 
                      </tr> 
                @endforeach   
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

