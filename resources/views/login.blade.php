@extends('layouts.base')
@section('page_title', "Sample Page")

@section('content')
<div class="container">
    <div class="row">
        <div class="col-4 offset-4 login-panel">
            
          <div class="form-group">
              <img src="images\iitjammu.jpg" alt="logo">
          </div> 
         <br/>
  
                <form>                       
                      <div class="form-group">
                          <label for="exampleInputEmail1">Username</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username">
                          <small id="emailHelp" class="form-text text-muted"></small>
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                      </div>
                      <br/>
                      <button type="submit" class="btn btn-primary col-12">Login</button>
                </form>
        </div>
    </div>
</div>
@endsection
