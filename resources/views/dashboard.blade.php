@extends('layouts.design')
@section('page_title', "Dashboard | Admin Panel")
@section('head_includes')
    @parent
    <link rel="stylesheet" href="css/cssfile1.css">
@show
@section('title', 'Dashboard')
@section('content')
<div class="container-fluid">
    <div class="row m-0">
        <div class="col p-0">
            Feedback:
            <select name="view">
                <option value="0" selected disabled>View</option>
                <option value="1">All</option>
                <option value="2">Day Wise</option>
                <option value="3">Meal Wise</option>
            </select>
            <select name="day" title="Select Day">
                <option value="0" selected disabled>Choose Day</option>
                <option value="1">Monday</option>
                <option value="2">Tuesday</option>
                <option value="3">Wednesday</option>
                <option value="4">Thursday</option>
                <option value="5">Friday</option>
                <option value="6">Saturday</option>
                <option value="7">Sunday</option>
            </select>
            <select name="timming">
                <option value="0" selected disabled>Choose Time</option>
                <option value="1">Breakfast</option>
                <option value="2">Lunch</option>
                <option value="3">Dinner</option>
            </select>
            <button class="btn btn-sm btn-secondary">Apply</button>
        </div>
    </div>
    <hr>
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
    @foreach($feedbacks as $feedback)
    <div class="row m-0">
            <div class="col feedback-item">
                <div class="first">
                    <div class="student_name">
                        <i class="fas fa-user"></i> {{$feedback->student->name}}
                    </div>
                    <div class="food_item">
                        <i class="fas fa-utensils"></i> {{$feedback->meal->mname}}
                    </div>
                    <div class="feedback">
                            <i class="fas fa-pen-square"></i> {{$feedback->feedback}}
                    </div>
                    <div class="submitted">
                            <i class="fas fa-clock"></i>
                            {{Carbon\Carbon::parse($feedback->created_at)->format('d M Y')}}
                    </div>
                <a class="btn btn-sm btn-danger" href="/feedback/delete/{{$feedback->id}}"><i class="fas fa-trash-alt"></i> Delete</a>
                </div>
            </div>
        </div>
    @endforeach
    <br>
    <div class="row">
        <div class="col">
            {{ $feedbacks->render() }}
        </div>
    </div>
</div>
@endsection
