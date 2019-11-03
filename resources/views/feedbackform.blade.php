@extends("layouts.design")
@section("page_title",'Feedback form')
@section('head_includes')
@parent
<link rel="stylesheet" href="css/meals.css">
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-8 offset-2">
            <h2 class="text-center">Student Feedback Form</h2><br>
            <div class="form">
                 <form>
                     <h5>Roll No.</h5>
                     <div class="form-group">
                    <input type="rollno" class="form-control" id="exampleInputRollNo" placeholder="Enter roll no.">
                </div><br>
                <h5>Select Meal</h5>
                <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Day-Wise button
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">Breakfast</a>
                          <a class="dropdown-item" href="#">Lunch</a>
                          <a class="dropdown-item" href="#">Dinner</a>
                        </div>
                    </div><br>
                        <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" alignment="right">Meal-Wise button
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                  <a class="dropdown-item" href="#">Grilled cheese</a>
                                  <a class="dropdown-item" href="#">Hot Dog</a>
                                  <a class="dropdown-item" href="#">Paneer Masala</a>
                                </div>
                      </div><br><br>
                      <h5>Ratings</h5>
                      <div class="form-check">
                      <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                      <label class="form-check-label" for="exampleRadios1">
                              1
                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                            <label class="form-check-label" for="exampleRadios2">
                                  2
                                </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                <label class="form-check-label" for="exampleRadios3">
                                      3
                                    </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option4">
                                    <label class="form-check-label" for="exampleRadios4">
                                          4
                                        </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios5" value="option5" checked>
                                        <label class="form-check-label" for="exampleRadios5">
                                              5
                                            </label>
                                        </div><br><br>
                                            <h5>Feedback</h5>
                                            <div class="form-group">
                                                <textarea class="form-control" id="exampleFormControlTextarea1"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>
                                    </div>
                                </div>
                            </div>
@endsection
