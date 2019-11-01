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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function(){
    return view('login');
});

Route::get('/feedback',function(){
    return view('feedback');
});

Route::post('/login', function(Illuminate\Http\Request $request){
    $key_username = "username";
    $key_password = "password";
    if(!$request->has($key_username) || !$request->has($key_password)) return redirect('/sample');
    $param_username = $request->input($key_username);
    $param_password = $request->input($key_password);
    // Verify that user exists and have right credentials before displaying the dashboard
    $user = App\User::select('password')
                    ->where('username', $param_username)
                    ->first();
    if(!$user) return redirect('/sample');
    if(!password_verify($param_password, $user->password)) return redirect('/sample');
    return "Login Successful";
});