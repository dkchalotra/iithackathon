@extends("layouts.base")
@section("page_title",'Feedback form')

@section('head_includes')
@parent
<link rel="stylesheet" href="css/meals.css">
@endsection
@section('content')
<div class="container">
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
        <div class="col-8 offset-2 mt-5">
            <div class="form">
                <h2 class="text-center">Feedback Form</h2><br>
                 <form method="POST" action="/feedback">
                    @csrf
                    <h5>Roll No.</h5>
                    <div class="form-group">
                        <input type="rollno" name="roll" class="form-control" id="exampleInputRollNo" placeholder="Enter roll no.">
                    </div><br>
                    <h5>Select Meal</h5>
                    <select id="mealtimebox" class="form-control">
                        <option class="dropdown-item" value="breakfast">Breakfast</option>
                        <option class="dropdown-item" value="lunch">Lunch</option>
                        <option class="dropdown-item" value="dinner">Dinner</option>
                    </select>
                    <hr>
                    <h5>Select Meal Item</h5>
                    <select id="mealitembox" name="mealitemid" class="form-control"></select>
                    <hr>
                    <h5>Feedback</h5>
                    <div class="form-group">
                        <textarea name="feedbacktext" class="form-control" id="exampleFormControlTextarea1"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            </div>
        </div>
    </div>
@endsection
@section('foot_includes')
@parent
<script>
    const data = JSON.parse("{{$mealtimes}}".replace(/&quot;/gi, "\""));
    const mealTimeBox = $('select#mealtimebox');
    const mealItemBox = $('select#mealitembox');
    mealTimeBox.on('change', changeMealTime);
    function changeMealTime(){
        //alert('meal time changed to ' + mealTimeBox.val());
        const newtime = mealTimeBox.val();
        const items = [];
        for(let i=0; i<data.length; i++){
            const mealtime = data[i];
            //console.log("meal time is " + mealtime['time']);
            if(mealtime['time'] === newtime) {
                var code = "<option value='??value'>??name</option>";
                code = code.replace("??value", mealtime['meal_id']);
                code = code.replace("??name", mealtime['mname']);
                items.push(code);
            }
        }
        //console.log(items);
        mealItemBox.html(items.join(''));
    }
    // Load initial list of meal items
    changeMealTime();
</script>
@endsection
