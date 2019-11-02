@extends('layouts.base')
@section('page_title', "Feedback Dashboard")

@section('head_includes')
    @parent
    <link rel="stylesheet" href="css/cssfile1.css">
@show
@section('content')
<div class="row">
    <div class="col-4 offset-4">
    <form id="menu" action="" method="POST">
        <div class="form-group">
            <label for="lbl">Weekly Menu Prepration</label>
            <label for="exampleFormControlSelect1">Select Day:</label>
            <select class="form-control" id="exampleFormControlSelect1">
                <option value="0" selected disabled>Day</option>
                <option value="1">Monday</option>
                <option value="2">Tuesday</option>
                <option value="3">Wednesday</option>
                <option value="4">Thursday</option>
                <option value="5">Friday</option>
                <option value="6">Saturday</option>
                <option value="7">Sunday</option>
            </select>
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect3">Select Timming</label>
            <select class="form-control" id="exampleFormControlSelect2">
                <option value="0" selected disabled>Time</option>
                <option value="1">Breakfast</option>
                <option value="2">Lunch</option>
                <option value="3">Dinner</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect2">Select Food Items:</label>
            <select class="form-control" id="exampleFormControlSelect3" multiple>
                <option value="0" selected disabled>Cooked</option>
                <option value="1">Breakfast</option>
                <option value="2">Lunch</option>
                <option value="3">Dinner</option>
            </select>
        </div>
        
        <div class="buttoncontainer">
            <button type="button" id="menubtn" class="btn btn-primary col-12">Next</button>
        </div>
    </form>
    </div>
</div>
@endsection