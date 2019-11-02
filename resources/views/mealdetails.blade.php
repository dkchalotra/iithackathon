@extends("layouts.base")
@section("page_title",'MealDetails Page')
@section('head_includes')
@parent
<link rel="stylesheet" href="css/meals.css">
@endsection
@section('content')
<div class="row">
    <div class ="col-4 offset-4">
<form>
    <div class='mealdescpanel'>
    <h2 class="text-center"> Add New Meal</h2><br>
      <div class="form-group">
          <label for="exampleInputmealname">Meal Name</label> <input type="text" class="form-control" id="exampleInputmealname"  placeholder="Enter Meal Name" size=40>
        </div>
        <div class="form-group">
            <label for="exampleInputdescription">Meal Description</label> <input type="text" class="form-control" id="exampleInputdescription" placeholder="Enter description" size=40>
        </div><br>
        <button type="add" class="btn btn-primary">Add Meal</button>
    </div>
    </form>
</div>
</div><br>
<div class="row">
    <div class="col-12">
    <h2 class="text-center">Meal Available</h2><br>
    </div>
    <div class="col-8 offset-2 columndetails"><div style="font-size:20pt;">MealName</div><div style="font-size:12pt;">MealDescription</div><br>
    <button type="delete" class="btn btn-primary button">Delete</button>
    </div>
    <div class="col-8 offset-2 columndetails"><div style="font-size:20pt;">MealName</div><div style="font-size:12pt;">MealDescription</div><br>
    <button type="delete" class="btn btn-primary button">Delete</button>
    </div>
    <div class="col-8 offset-2 columndetails"><div style="font-size:20pt;">MealName</div><div style="font-size:12pt;">MealDescription</div><br>
    <button type="delete" class="btn btn-primary button">Delete</button>
    </div>
    <div class="col-8 offset-2 columndetails"><div style="font-size:20pt;">MealName</div><div style="font-size:12pt;">MealDescription</div><br>
    <button type="delete" class="btn btn-primary button">Delete</button>
    </div>
    <div class="col-8 offset-2 columndetails"><div style="font-size:20pt;">MealName</div><div style="font-size:12pt;">MealDescription</div><br>
    <button type="delete" class="btn btn-primary button">Delete</button>
    </div>
</div>
@endsection