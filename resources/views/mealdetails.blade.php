@extends("layouts.adminbase")
@section("page_title",'Meal Details | Admin Panel')
@section('head_includes')
@parent
<link rel="stylesheet" href="css/meals.css">
@endsection
@section('content')
<div class="row">
    <div class ="col-8 offset-2 mt-3">
<form method="POST" action="/meals">
    @csrf
    <div class='mealdescpanel'>
    <h2 class="text-center"> Add New Meal Item</h2>
      <div class="form-group">
          <label for="exampleInputmealname">Meal Name</label>
          <input type="text" class="form-control" id="exampleInputmealname" name="mname" placeholder="Enter Meal Name" size=40>
        </div>
        <div class="form-group">
            <label for="exampleInputdescription">Meal Description</label>
            <input type="text" class="form-control" id="exampleInputdescription" name="desc" placeholder="Enter description" size=40>
        </div><br>
        <button type="submit" class="btn btn-primary">Add Meal</button>
    </div>
    </form>
</div>
</div>
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
<hr>
<div class="row">
    <div class="col-12">
        <h2 class="text-center">Meal Items Available</h2>
    </div>
    @foreach($meals as $meal)
    <div class="col-8 offset-2 columndetails">
        <div style="font-size:20pt;"><i class="fas fa-utensils"></i> {{$meal->mname}}</div>
        <div style="font-size:12pt;"><i class="fas fa-info-circle"></i> {{$meal->desc}}</div><br>
        <a class="btn btn-sm btn-primary button" href="/meals/delete/{{$meal->id}}"><i class="fas fa-trash-alt"></i> Delete</a>
    </div>
    @endforeach
</div>
<div class="row">
    <div class="col-8 offset-2">
        {{$meals->render()}}
    </div>
</div>
@endsection
