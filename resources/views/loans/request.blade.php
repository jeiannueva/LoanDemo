@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Requesting a new loan</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <div class="card-body">
<<<<<<< HEAD
                        @if(empty($loan))
                            @include('loans/form')                           
                        @else
                            @include('loans/edit')
                        @endif
=======
                        @include('loans/form')
>>>>>>> matthew
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
