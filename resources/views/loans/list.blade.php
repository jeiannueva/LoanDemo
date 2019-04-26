@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">All Loans list</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table style="width: 100%">
                     <tr>
                        <th> Transaction Code </th>
                        <th> Lender ID </th>
                        <th> Loaner ID </th>
                        <th> Loan Amount </th>
                        <th> Due Date </th>
                        <th> Status </th>
                        <th> Options </th>
                     </tr>

                    @if (empty($loans))                                    
                        Whoops! Something went wrong                            
                    @else
                        @foreach($loans as $loan)
                            <tr>
                                <td>{{$loan->id}}</td>
                                <td>{{$loan->lender_id}}</td>
                                <td>{{$loan->loaner_id}}</td>
                                <td>{{$loan->loan_amount}}</td>
                                <td>{{$loan->due_date}}</td>
                                <td>{{$loan->status}}</td>
                                <td>
                                    {!! link_to_route('loan_edit', 'Edit', ['loanid'=> $loan->id]) !!}
                                    {!! link_to_route('delete_loan', 'Delete', ['loanid' => $loan->id]) !!}
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
