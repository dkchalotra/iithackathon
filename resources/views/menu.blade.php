@extends('layouts.design')
@section('page_title', "Meal Menu | Admin Panel")

@section('head_includes')
    @parent
    <link rel="stylesheet" href="css/cssfile1.css">
@show
@section('title', 'Meal Menu')
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
    <div class="menudiv">
    <form id="menu" action="/meal-menu" method="POST">
        @csrf
        <div class="form-group">
            <h2 class="text-center">Weekly Menu Prepration</h2>
            <label for="exampleFormControlSelect1">Select Day</label>
            <select name="day" class="form-control" id="exampleFormControlSelect1">
                <option value="sunday">Sunday</option>
                <option value="monday">Monday</option>
                <option value="tuesday">Tuesday</option>
                <option value="wednesday">Wednesday</option>
                <option value="thursday">Thursday</option>
                <option value="friday">Friday</option>
                <option value="saturday">Saturday</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect3">Select Meal Time</label>
            <select name="meal-time" class="form-control" id="exampleFormControlSelect2">
                <option value="breakfast">Breakfast</option>
                <option value="lunch">Lunch</option>
                <option value="dinner">Dinner</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect2">Select Meal Items</label>
            <select name="meal-item[]" class="form-control" id="exampleFormControlSelect3" size="10" multiple>
                @foreach($allmeals as $meal)
                <option value="{{$meal->id}}">{{$meal->mname}}</option>
                @endforeach
            </select>
        </div>
        <div class="buttoncontainer">
            <button type="submit" id="menubtn" class="btn btn-primary col-12">Update</button>
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
                        @if(isset($messData[$day][$time]))
                        @foreach($messData[$day][$time] as $mealItem)
                            <li class="list-item-meal">
                                {{$mealItem}}
                            </li>
                        @endforeach
                        @endif
                    </ol>
                </li>
            @endforeach
            </ul>
        </li>
    @endforeach
    </ul>
</div>
@endsection
