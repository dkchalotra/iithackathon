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

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/student', function () {
    return view('student');
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
    return "Login Successful";
});

Route::get('/dashboard', function(Illuminate\Http\Request $request){
    if(!hasAuthenticated($request)) return redirect('/');
    return "Dashboard";
});
Route::get('/meals', function(Illuminate\Http\Request $request){
    if(!hasAuthenticated($request)) return redirect('/');
    return "Meals";
});
Route::get('/students', function(Illuminate\Http\Request $request){
    if(!hasAuthenticated($request)) return redirect('/');
    return "Students";
});
Route::get('/meal-menu', function(Illuminate\Http\Request $request){
    if(!hasAuthenticated($request)) return redirect('/');
    return "Meal Menu";
});
Route::get('/feedback',function(Illuminate\Http\Request $request){
    if(!hasAuthenticated($request)) return redirect('/');
    return view('feedback');
});

// This method is used to check whether user is authenticated before accessing any admin panel pages
function hasAuthenticated(Illuminate\Http\Request $request){
    if($request->session()->has(SESSION_KEY_USERNAME) && $request->session()->has(SESSION_KEY_PASSWORD)){
        return true;
    }
    return false;
}
