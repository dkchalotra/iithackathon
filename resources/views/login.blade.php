@extends('layouts.base')
@section('page_title', "Login | Admin Panel")

@section('content')
<div class="container">
    <div class="row">
        <div class="col-4 offset-4 login-panel">
          <div class="form-group">
              <img src="images\iitjammu.jpg" alt="logo">
          </div>
         <br/>
                <form method="POST" action="/login">
                    @csrf
                      <div class="form-group">
                          <label for="username">Username</label>
                          <input type="text" class="form-control" name="username" id="username" aria-describedby="username" placeholder="Enter Username">
                      </div>
                      <div class="form-group">
                          <label for="password">Password</label>
                          <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                      </div>
                      <br/>
                      <button type="submit" class="btn btn-primary col-12">Login</button>
                </form>
                <br>
                <a class="btn btn-warning col-12" href="/feedback">Want to give meal feedback ?</a>
        </div>
        @if($errors->any())
        <div class="col-4 offset-4" style="margin-top:1em;">
                <div class="alert alert-danger" role="alert">
                {{$errors->first()}}
                </div>
        </div>
        @endif
    </div>
</div>
@endsection
