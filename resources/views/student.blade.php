@extends('layouts.adminbase')
@section('page_title', "Feedback Dashboard")

@section('head_includes')
    @parent
    <link rel="stylesheet" href="css/cssfile1.css">
@show
@section('content')

<div class="row">
    <div class="col-8 offset-2">
        <form id="menu" action="" method="POST">
            <div class="sdetails">
                <div class="form-group">
                    <h2 class="text-center">Student Registration Form</h2>
                    <label for="srollno">Rollno</label>
                    <input class="form-control" type="text" placeholder="Enter Rollno">
                    <label for="sname">Name</label>
                    <input class="form-control" type="text" placeholder="Enter Yor Full Name">
                    <label for="semail">E-mail Address</label>
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
                    <label for="scontact">Contact Number</label>
                    <input class="form-control" type="text" placeholder="e.g 9022111101">
                    <button type="submit" class="btn btn-primary mb-2">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection    