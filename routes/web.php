<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
const SESSION_KEY_USERNAME = 'username';
const SESSION_KEY_PASSWORD = "password";

Route::get('/', function () {
    return view('login');
});


Route::post('/login', function(Illuminate\Http\Request $request){
    $key_username = "username";
    $key_password = "password";
    if(!$request->has($key_username) || !$request->has($key_password)) return redirect('/');
    $param_username = $request->input($key_username);
    $param_password = $request->input($key_password);
    // Verify that user exists and have right credentials before displaying the dashboard
    $user = App\User::select('password')
                    ->where('username', $param_username)
                    ->first();
    if(!$user) return Redirect::back()->withErrors('Wrong Username');
    if(!password_verify($param_password, $user->password))  return Redirect::back()->withErrors('Incorrect Password');
    // Store the username & password in the session
    $request->session()->put(SESSION_KEY_USERNAME, $param_username);
    $request->session()->put(SESSION_KEY_PASSWORD, $param_password);
    return redirect('/dashboard');
});

Route::get('/dashboard', function(Illuminate\Http\Request $request){
    if(!hasAuthenticated($request)) return redirect('/');
    $perpage = 5;
    $feedbacks = App\Feedback::orderBy('created_at', 'desc')->paginate($perpage);
    return view('dashboard', ['feedbacks' => $feedbacks]);
});
Route::get('/meals', function(Illuminate\Http\Request $request){
    if(!hasAuthenticated($request)) return redirect('/');
    $perpage = 5;
    $meals = App\Meal::orderBy('id','desc')->paginate($perpage);
    return view('mealdetails', ['meals' => $meals]);
});

Route::post('/meals', function(Illuminate\Http\Request $request){
    $key_meal_name = "mname";
    $key_meal_desc = "desc";
    if(!$request->has($key_meal_name) || !$request->has($key_meal_desc)) return Redirect::back();
    $meal_name = $request->get($key_meal_name);
    $meal_desc = $request->get($key_meal_desc);
    $new_meal = new App\Meal();
    $new_meal->mname = $meal_name;
    $new_meal->desc = $meal_desc;
    $new_meal->save();
    return Redirect::back()->with('message', 'Meal Added');
});

Route::get('/meals/delete/{id}', function($id){
    $meal = App\Meal::findOrFail($id);
    $meal->feedbacks()->delete();
    $meal->delete();
    return redirect()->back()->with('message', $meal->mname . ' Deleted');
});

Route::get('/student', function(Illuminate\Http\Request $request){
    if(!hasAuthenticated($request)) return redirect('/');
    $perpage = 5;
    $students = App\Student::orderBy('id', 'desc')->paginate($perpage);
    return view("student", ['students' => $students]);
});
Route::post('/student', function(Illuminate\Http\Request $request){
    $key_student_name = "sname";
    $key_student_rollno = "roll";
    $key_student_email = "email";
    $key_student_contactno = "contactno";
    if(!hasAuthenticated($request)) return redirect('/');
    if(!$request->has($key_student_name) ||
        !$request->has($key_student_rollno) ||
        !$request->has($key_student_email)||
        !$request->has($key_student_contactno))
        return Redirect::back();
    $student_name = $request->get($key_student_name);
    $student_roll = $request->get($key_student_rollno);
    $student_email = $request->get($key_student_email);
    $student_contact = $request->get($key_student_contactno);
    $newstudent = new App\Student();
    $newstudent->name = $student_name;
    $newstudent->rollno = $student_roll;
    $newstudent->email = $student_email;
    $newstudent->contact = $student_contact;
    $newstudent->save();
    return Redirect::back()->with('message', 'New Student Added');
});

Route::get('/student/delete/{id}', function($id){
    $student = App\Student::findOrFail($id);
    $student->feedbacks()->delete();
    $student->delete();
    return redirect()->back()->with('message', 'Student ' . $student->name . ' Deleted');
});

Route::get('/meal-menu', function(Illuminate\Http\Request $request){
    if(!hasAuthenticated($request)) return redirect('/');
    return view("menu");
});
Route::get('/feedback',function(Illuminate\Http\Request $request){
    if(!hasAuthenticated($request)) return redirect('/');
    return view('feedback');
});

Route::get('/logout', function(Illuminate\Http\Request $request){
    $request->session()->forget([SESSION_KEY_USERNAME, SESSION_KEY_PASSWORD]);
    return redirect('/');
});

// This method is used to check whether user is authenticated before accessing any admin panel pages
function hasAuthenticated(Illuminate\Http\Request $request){
    if($request->session()->has(SESSION_KEY_USERNAME) && $request->session()->has(SESSION_KEY_PASSWORD)){
        return true;
    }
    return false;
}
