<form id="requestLoan" method="POST" action="{{ route('process_new_loan') }}">
        @csrf

        <!-- Lender ID -->
<<<<<<< HEAD
        <div class="form-group row">
            <label for="lender_id" class="col-md-4 col-form-label text-md-right">{{ __('Lender ID') }}</label>
            <div class="col-md-6">
                <select id="lender_id" class="form-control{{ $errors->has('lender_id') ? ' is-invalid' : '' }}" name="lender_id" value="{{ old('lender_id') }}" min="0" required autofocus>
                  
                @if (empty($users))                                    
                    Whoops! Something went wrong                            
                @else
                    @foreach($users as $idUser => $user)
                        <option value="{{$idUser}}">{{$user}}</option>
                    @endforeach
                @endif
                    
                </select>    
                @if ($errors->has('lender_id'))
=======
                <input id="lender_id" type="hidden" class="form-control{{ $errors->has('lender_id') ? ' is-invalid' : '' }}" name="lender_id" value="{{ old('lender_id') }}" min="0" required autofocus>

                <!--@if ($errors->has('lender_id'))
>>>>>>> michael
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('lender_id') }}</strong>
                    </span>
                @endif-->

        <!-- Loaner ID -->
        <div class="form-group row">
                <label for="loaner_id" class="col-md-4 col-form-label text-md-right">{{ __('Loaner ID') }}</label>
<<<<<<< HEAD
                <div class="col-md-6">
                    <select id="loaner_id" type="number" class="form-control{{ $errors->has('loaner_id') ? ' is-invalid' : '' }}" name="loaner_id" value="{{ old('loaner_id') }}" min="0" required autofocus>
                        @if (empty($users))                                    
                            Whoops! Something went wrong                            
                        @else
                            @foreach($users as $idUser => $user)
                                <option value="{{$idUser}}">{{$user}}</option>
                            @endforeach
                        @endif
                    </select>   
=======
                <div class="col-md-6"> -->
                    <input id="loaner_id" type="hidden" class="form-control{{ $errors->has('loaner_id') ? ' is-invalid' : '' }}" name="loaner_id" value="{{ Auth::user()->id }}" min="0" required autofocus>
<!--
>>>>>>> michael
                    @if ($errors->has('loaner_id'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('loaner_id') }}</strong>
                        </span>
                    @endif
                </div>
        </div>


        <!-- loan_amount -->
                    <input id="loan_amount" type="hidden" class="form-control{{ $errors->has('loan_amount') ? ' is-invalid' : '' }}" name="loan_amount" value="{{ old('loan_amount') }}" min="0" step="any" required autofocus>

                    <!--@if ($errors->has('loan_amount'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('loan_amount') }}</strong>
                        </span>
                    @endif-->

        {{-- amount_paid --}}
        <div class="form-group row">
                <label for="amount_paid" class="col-md-4 col-form-label text-md-right">{{ __('Amount paid') }}</label>
<<<<<<< HEAD
                <div class="col-md-6">
                    <input id="amount_paid" type="number" class="form-control{{ $errors->has('amount_paid') ? ' is-invalid' : '' }}" name="amount_paid" value="{{ old('amount_paid') }}" min="0" step="any" required autofocus>

=======
                <div class="col-md-6"> -->
                    <input id="amount_paid" type="hidden" class="form-control{{ $errors->has('amount_paid') ? ' is-invalid' : '' }}" name="amount_paid" value="0" min="0" step="any" required autofocus>
<!--
>>>>>>> michael
                    @if ($errors->has('amount_paid'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('amount_paid') }}</strong>
                        </span>
                    @endif
                </div>
        </div>


        {{-- due_date --}}
        <div class="form-group row">
                <label for="due_date" class="col-md-4 col-form-label text-md-right">{{ __('Due date') }}</label>
<<<<<<< HEAD
                <div class="col-md-6">
                    <input id="due_date" type="datetime-local" class="form-control{{ $errors->has('due_date') ? ' is-invalid' : '' }}" name="due_date" value="{{ old('due_date') }}" required autofocus>

=======
                <div class="col-md-6"> -->
                    <input id="due_date" type="hidden" class="form-control{{ $errors->has('due_date') ? ' is-invalid' : '' }}" name="due_date" value="0001-01-01 01:01:00" required autofocus>
<!--
>>>>>>> michael
                    @if ($errors->has('due_date'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('due_date') }}</strong>
                        </span>
                    @endif
                </div>
        </div>

        {{-- status --}}
        <div class="form-group row">
                <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>
<<<<<<< HEAD
                <div class="col-md-6">
                    <select id="status" type="number" class="form-control{{ $errors->has('status') ? ' is-invalid' : '' }}" name="status" value="{{ old('status') }}" min="0" step="any" required autofocus>

                    @if (empty($status))                                    
                        Whoops! Something went wrong                            
                    @else
                        @foreach($status as $idStatus => $status)
                            <option value="{{$status->id}}">{{$status->description}}</option>
                        @endforeach
                    @endif

                    </select>


=======
                <div class="col-md-6"> -->
                    <input id="status" type="hidden" class="form-control{{ $errors->has('status') ? ' is-invalid' : '' }}" name="status" value="0" min="0" step="any" required autofocus>
<!--
>>>>>>> michael
                    @if ($errors->has('status'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('status') }}</strong>
                        </span>
                    @endif
                </div>
        </div>


        {{-- <div class="form-group row">
            This is for announcements area
        </div> --}}
    </form>
<<<<<<< HEAD

    <!-- user datas -->
    {{-- <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>isLending</th>
        </tr>
    @foreach($users as $key => $data)
        <tr>
            <td>{{$data->id}}</td>
            <td>{{$data->name}}</td>
            <td>{{$data->isLending}}</td>
        </tr>
    @endforeach --}}
    </table>
=======
>>>>>>> michael
