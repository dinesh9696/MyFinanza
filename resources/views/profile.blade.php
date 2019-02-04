@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <img src="/uploads/profile/{{$user->image}}" style="width:150px;height:150px;float:left;border-radius:50%;margin-right: 25px;"/>
            <h2>{{$user->name}}'s Profile</h2>
           <form action="/profile-update" method="POST" enctype="multipart/form-data">
                <label>Update Your Profile</label></br>
                
                <input type="file" name="dp">
                <br><br>
                <div class="row">
                <div class="col-md-8">
                <div class="form-group">

                        
                        
                        <input type="text" placeholder="Enter Name" name="name" value="{{$user->name}}" class="form-control" id="name">
                    </div>
                
                <div class="form-group">

                        
                        
                        <input type="text" placeholder="Enter Name" name="mobile" value="{{$user->mobile}}" class="form-control" id="mobile">
                    </div>    
                    
                    <div class="form-group">
                        
                        <input type="email" placeholder="Enter EMAIL-ID" id="email" name="email" class="form-control" value="{{$user->email}}" style="border:none;background-color:transparent;">
                    </div>
                    <div align="center" class="form-group">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="submit" value="Update Profile" class="btn btn-md btn-primary">
                </div>
</div>
</div>
            </form>   
        </div>
    </div>
</div>

@endsection
