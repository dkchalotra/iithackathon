@extends('layouts.base')
@section('page_title', "Feedback Dashboard")

@section('head_includes')
    @parent
    <link rel="stylesheet" href="css/cssfile1.css">
@show
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col">
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
        </div>
    </div>

   
    <div class="row">
        <div class="col">
            <div class="first">
                <div class="student_name">
                    ABC:
                </div>
                <div class="food_item">
                    XYZ
                </div>
                <div class="feedback">
                    food not found
                </div>
                <div class="submitted">
                    Timming:
                </div>
                <div class="btn">
                    <button type="button" class="btn btn-primary col-12">Delete</button>
                </div>
            </div>
        </div>
    </div>

   
    <div class="row">
        <div class="col">
            <div class="second">
                <div class="student_name">
                        ABC:
                </div>
                <div class="food_item">
                        XYZ
                </div>
                <div class="feedback">
                        food not found
                </div>
                <div class="submitted">
                        Timming:
                </div>
                <div class="btn">
                    <button type="button" class="btn btn-primary col-12">Delete</button>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="row">
        <div class="col">
            <div class="buttoncontainer">
                <button type="button" class="btn btn-primary col-12">Next</button>
            </div>
        </div>
    </div>
</div>
@endsection