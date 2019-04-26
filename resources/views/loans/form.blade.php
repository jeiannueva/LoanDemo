<form method="POST" action="{{ route('process_new_loan') }}">
        @csrf
    
        <!-- Lender ID -->
        <div class="form-group row">
            <label for="lender_id" class="col-md-4 col-form-label text-md-right">{{ __('Lender ID') }}</label>
            <div class="col-md-6">
<<<<<<< HEAD
                <select id="lender_id" class="form-control{{ $errors->has('lender_id') ? ' is-invalid' : '' }}" name="lender_id" value="{{ old('lender_id') }}" min="0" required autofocus>
                  
                @if (empty($users))                                    
                    Whoops! Something went wrong                            
                @else
                    @foreach($users as $idUser => $user)
                        <option value="{{$idUser}}">{{$user}}</option>
                    @endforeach
                @endif
                    
                </select>    
=======
                <input id="lender_id" type="number" class="form-control{{ $errors->has('lender_id') ? ' is-invalid' : '' }}" name="lender_id" value="{{ old('lender_id') }}" min="0" required autofocus>

>>>>>>> matthew
                @if ($errors->has('lender_id'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('lender_id') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <!-- Loaner ID -->
<<<<<<< HEAD
        <div class="form-group row">
                <label for="loaner_id" class="col-md-4 col-form-label text-md-right">{{ __('Loaner ID') }}</label>
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
        <!-- <div class="form-group row">
                <label for="loaner_id" class="col-md-4 col-form-label text-md-right">{{ __('Loaner ID') }}</label>
                <div class="col-md-6"> -->
                    <input id="loaner_id" type="hidden" class="form-control{{ $errors->has('loaner_id') ? ' is-invalid' : '' }}" name="loaner_id" value="{{ Auth::user()->id }}" min="0" required autofocus>
<!-- 
>>>>>>> matthew
                    @if ($errors->has('loaner_id'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('loaner_id') }}</strong>
                        </span>
                    @endif
                </div>
<<<<<<< HEAD
        </div>
=======
        </div> -->
>>>>>>> matthew


        <!-- loan_amount -->
        <div class="form-group row">
                <label for="loan_amount" class="col-md-4 col-form-label text-md-right">{{ __('Loan Amount') }}</label>
                <div class="col-md-6">
                    <input id="loan_amount" type="number" class="form-control{{ $errors->has('loan_amount') ? ' is-invalid' : '' }}" name="loan_amount" value="{{ old('loan_amount') }}" min="0" step="any" required autofocus>

                    @if ($errors->has('loan_amount'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('loan_amount') }}</strong>
                        </span>
                    @endif
                </div>
        </div>

<<<<<<< HEAD
        {{-- amount_paid --}}
        <div class="form-group row">
                <label for="amount_paid" class="col-md-4 col-form-label text-md-right">{{ __('Amount paid') }}</label>
                <div class="col-md-6">
                    <input id="amount_paid" type="number" class="form-control{{ $errors->has('amount_paid') ? ' is-invalid' : '' }}" name="amount_paid" value="{{ old('amount_paid') }}" min="0" step="any" required autofocus>

=======
        <!-- {{-- amount_paid --}}
        <div class="form-group row">
                <label for="amount_paid" class="col-md-4 col-form-label text-md-right">{{ __('Amount paid') }}</label>
                <div class="col-md-6"> -->
                    <input id="amount_paid" type="hidden" class="form-control{{ $errors->has('amount_paid') ? ' is-invalid' : '' }}" name="amount_paid" value="0" min="0" step="any" required autofocus>
<!-- 
>>>>>>> matthew
                    @if ($errors->has('amount_paid'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('amount_paid') }}</strong>
                        </span>
                    @endif
                </div>
<<<<<<< HEAD
        </div>


        {{-- due_date --}}
        <div class="form-group row">
                <label for="due_date" class="col-md-4 col-form-label text-md-right">{{ __('Due date') }}</label>
                <div class="col-md-6">
                    <input id="due_date" type="datetime-local" class="form-control{{ $errors->has('due_date') ? ' is-invalid' : '' }}" name="due_date" value="{{ old('due_date') }}" required autofocus>

=======
        </div> -->


       <!--  {{-- due_date --}}
        <div class="form-group row">
                <label for="due_date" class="col-md-4 col-form-label text-md-right">{{ __('Due date') }}</label>
                <div class="col-md-6"> -->
                    <input id="due_date" type="hidden" class="form-control{{ $errors->has('due_date') ? ' is-invalid' : '' }}" name="due_date" value="0001-01-01 01:01:00" required autofocus>
<!-- 
>>>>>>> matthew
                    @if ($errors->has('due_date'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('due_date') }}</strong>
                        </span>
                    @endif
                </div>
<<<<<<< HEAD
        </div>

        {{-- status --}}
        <div class="form-group row">
                <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>
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
        </div> -->

        <!-- {{-- status --}}
        <div class="form-group row">
                <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>
                <div class="col-md-6"> -->
                    <input id="status" type="hidden" class="form-control{{ $errors->has('status') ? ' is-invalid' : '' }}" name="status" value="0" min="0" step="any" required autofocus>
<!-- 
>>>>>>> matthew
                    @if ($errors->has('status'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('status') }}</strong>
                        </span>
                    @endif
                </div>
<<<<<<< HEAD
        </div>
=======
        </div> -->
>>>>>>> matthew


        {{-- <div class="form-group row">
            This is for announcements area
        </div> --}}

        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Submit') }}
                </button>

            </div>
        </div>
<<<<<<< HEAD
    </form>
=======
    </form>

    <!-- user datas -->
    <table>
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
    @endforeach
    </table>
>>>>>>> matthew
