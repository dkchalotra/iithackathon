@extends('layouts.design')
@section('page_title', "Meal Menu | Admin Panel")

@section('head_includes')
    @parent
    <link rel="stylesheet" href="css/cssfile1.css">
@show
@section('title', 'Meal Menu')
@section('content')
<div class="row">
    <div class="col-8 offset-2">
    <div class="menudiv">
    <form id="menu" action="" method="POST">
        <div class="form-group">
            <h2 class="text-center">Weekly Menu Prepration</h2>
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
            <button type="button" id="menubtn" class="btn btn-primary col-12">Update</button>
        </div>
    </div>
    </form>
    </div>
</div>
<div class="weeklymenu">
    <h2 class="text-center">Mess Weekly Menu</h2>
    <ul style="list-style-type:none;">
    @foreach($days as $day)
        <li class="list-item-day">
            {{strtoupper($day)}}
            <ul>
            @foreach($times as $time)
                <li class="list-item-time">
                    {{strtoupper($time)}}
                    <ol>
                    @foreach($messData[$day][$time] as $mealItem)
                        <li class="list-item-meal">
                            {{$mealItem}}
                        </li>
                    @endforeach
                    </ol>
                </li>
            @endforeach
            </ul>
        </li>
    @endforeach
    </ul>
</div>
@endsection
