@extends('layouts.sidebar')
@section('content')
<div class="content">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Withdraw</h4>
        </div>
    </div>
    <div class="row col-12">
        <div>
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        @if (isset($errors) && count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        </div>
        <div class="col-12 justify-content-center">
            <div class="card">
                <form method="POST" action="/withdraw">
                    {{ csrf_field() }}
                    <input type="hidden" name="investment" value="{{$investment}}">
                    <div class="card-body "> 
                        <div class="form-group">
                            <select class="form-control" name="bank" id="bank">
                                @foreach($banks as $bank)
                                    <option value="{{$bank->id}}">{{$bank->name}}</option>
                                @endforeach
                            </select>
                        </div>                  
                        <div class="form-group">
                            <label for="account" class="bmd-label-floating">Account / Address</label>
                            <input type="text" class="form-control"name="account"  id="account">
                        </div>
                        <div class="form-group">
                            <label for="amount" class="bmd-label-floating">Amount</label>
                            <input type="text" class="form-control"name="amount"  id="amount">
                        </div>
                    </div>
                    <div class="card-footer ">
                    <button type="submit" class="btn btn-fill btn-rose">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>  
</div>
@endsection

