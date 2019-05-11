@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-3" style="margin-left:13vw">
            <div class="card">
<<<<<<< HEAD
                <div class="card-header">Requesting a new loan</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <div class="card-body">
                        @if(empty($loan))
                            @include('loans/form')                           
                        @else
                            @include('loans/edit')
                        @endif
=======
              <div class="card-body">
                  <form method="POST" action="">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Loan Amount (PHP)</label>
                      <input type="number" class="form-control" id="amount" placeholder="0" required>
>>>>>>> michael
                    </div>
                    <!--<button type="submit" class="btn btn-primary">Search</button>-->
                  </form>
              </div>
            </div>
        </div>
        <div class="col">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
            @include('loans/form')

                @foreach($users as $key => $data)
                <div class="card" style="width:30rem">
                  <div class="card-body">
                      <div class="row">
                          <div class="col" style="padding-right:0px">
                            <i style="font-size:1.5em" class="fas fa-user-circle"></i>
                          </div>
                          <div class="details">
                              {{$data->id}}
                          </div>
                          <div class="col name" ideastyle="padding-left:0px">
                              {{$data->name}}
                          </div>
                          <div class="col">
                              <span style="color:#efca04">3</span><span style="color:gray"> / 5</span>
                          </div>
                          <div class="col" style="padding-right:2px">
                            <button style="border-radius:80px" type="button" class="btn btn-primary btn-sm push">Request Loan</button>
                          </div>
                      </div>
                  </div>
                </div>
                @endforeach
        </div>
    </div>
</div>
@endsection
