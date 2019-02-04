@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ __('Add Account') }}</div>

                <div class="card-body">
                    <form method="POST" action="/account">
                        @csrf
                    <center>
                        <div class="form-group row">
                            

                            <div class="col-md-12">
                                <select name="type">
                                    <option>Select Type</option>
                                    <option value="Personal">Personal</option>
                                    <option value="Official">Official</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>
                        </div>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="submit" value="Add Account" class=" btn btn-sm btn-primary">
            </center>
             </form>   
        </div>
    </div>
</div>
</div>
</div>

@endsection
