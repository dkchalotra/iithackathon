@extends('layouts.design')
@section('page_title', "Students | Admin Panel")

@section('head_includes')
    @parent
    <link rel="stylesheet" href="css/cssfile1.css">
@endsection
@section('title', 'Students')
@section('content')
@if(session()->has('message'))
<br>
<div class="row">
    <div class="col-12">
        <div class="alert alert-success" role="alert">
            <i class="fas fa-check"></i> {{session()->get('message')}}
        </div>
    </div>
</div>
@endif
<div class="row">
    <div class="col-8 offset-2">
        <form id="menu" action="/student" method="POST">
            @csrf
            <div class="sdetails">
                <div class="form-group">
                    <h2 class="text-center">Student Registration Form</h2>
                    <label for="srollno">Rollno</label>
                    <input class="form-control" name="roll" type="text" placeholder="Enter Rollno">
                    <label for="sname">Name</label>
                    <input class="form-control" name="sname" type="text" placeholder="Enter Yor Full Name">
                    <label for="semail">E-mail Address</label>
                    <input type="text" class="form-control-plaintext" name="email" id="staticEmail" placeholder="email@example.com">
                    <label for="scontact">Contact Number</label>
                    <input class="form-control" type="text" name="contactno" placeholder="e.g 9022111101">
                    <button type="submit" class="btn btn-primary mb-2">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
<br>
<div class="row">
        <div class="col-12">
            <h2 class="text-center">Students Registered</h2>
        </div>
</div>
        @foreach($students as $student)
        <div class="row">
            <div class="col-8 offset-2 columndetails">
                <div style="font-size:20pt;">Name: {{$student->name}}</div>
                <div style="font-size:12pt;">Roll No: {{$student->rollno}}</div>
                <div style="font-size:12pt;">Email: {{$student->email}}</div>
                <div style="font-size:12pt;">Contact {{$student->contact}}</div>
                <br>
                <a class="btn btn-sm btn-danger button" href="/student/delete/{{$student->id}}"><i class="fas fa-trash-alt"></i> Delete</a>
            </div>
        </div>
        <hr>
        @endforeach

<div class="row">
    <div class="col-8 offset-2">
        {{$students->render()}}
    </div>
</div>
@endsection
