@extends('layouts.app')

@section('content')
<div class="container">
    
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                      </div>
                     @endif

                    You are logged in!

                    <a href="/transaction">
                    <button type="button" name="btn" value="Submit" class=" btn btn-sm btn-success">Add Transactions</button></a>
                </div>
            </div>
            <div class="row justify-content-center">
        <div class="col-md-8">
 @foreach(['danger','warning','success','info'] as $msg)
                     @if(Session::has('alert-'.$msg))
                     <div class="row justify-content-center">
                     <div class="col-md-8">
                      <div id="errorAlert">  
                        <p class="alert alert-{{$msg}}">{{Session::get('alert-'.$msg)}}
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                </p>
                      </div>  
                     </div> 
                     
        </div>
        @endif
        @endforeach
    </div>
</div>
</div>
@endsection
