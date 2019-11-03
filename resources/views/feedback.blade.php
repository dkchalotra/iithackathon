@extends("layouts.design")
@section("page_title",'Feedback Page')
@section('head_includes')
@parent
<link rel="stylesheet" href="default.css">
@endsection
@section('content')
<div class='container'>
    <div class='row'>
            <div class="col-4 offset-4">
                <div class="feedback-panel">
                <h2 class="text-center">Student Feedback</h2><br>
                <form>
                    <div class='form-group'>
                            <label for="exampleInputRollNo">Enter Roll No.</label>
                            <input type="rollno" class="form-control" id="exampleInputRollNo"  placeholder="Roll Number">
                    </div>
                    <button type="next" class="btn btn-primary col-12">Next</button>
                </form>
            </div>
            </div>
        </div>
    </div>
    @endsection