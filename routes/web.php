<?php
use MaddHatter\LaravelFullcalendar\Facades\Calendar;

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
    if(Auth::check()){
        return view('hr');
    }
    else{
        return view ('auth.login');
    }
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>'hr'],function (){
    Route::resource('personal','EmployeeInfoController');
    Route::resource('users','HrUsersController');
    Route::resource('jobs', 'HrJobController');
    Route::resource('sched', 'ShiftManagementController');
    Route::resource('post','PostController');
    Route::resource('status','StatusController');
    Route::resource('department','DepartmentController');
    Route::resource('leave','LeaveController');
    Route::resource('createleave','CreateLeaveController');
    Route::resource('updateusers','UpdateUserController');
    Route::resource('emp','EmployeeController');
    Route::get('hr/','HrController@index');
    Route::get('profile/{id}','SkillController@profile');
    Route::get('search','SearchController@index');
    Route::get('search/get_datatable', 'SearchController@get_datatable');
    Route::get('inactive','HrUsersController@getInactive');
    Route::get('inactive/get_datatable', 'HrUsersController@get_datatable');
    Route::get('timelog','TimeLogController@timeLog');
    Route::get('leaverequest','LeaveController@getLeaveRequest');
    Route::get('leaverequest/get_datatable', 'LeaveController@get_datatable');
    Route::post('downloadExcel/', 'GenerateReportController@downloadExcel');
    Route::post('downloadUserExcel/', 'GenerateReportController@downloadUserExcel');
    Route::get('report','GenerateReportController@index');
    Route::get('viewdept/{id}','DepartmentController@getData');
    Route::get('viewdept/get_datatable/{id}','DepartmentController@get_datatable');
    Route::get('updateuser/{id}','UpdateUserController@updateUser');
    Route::get('myprofile/{id}','EmployeeController@myprofile');
});
Route::group(['middleware'=>'payroll'],function (){
    Route::resource('payroll','PayrollController');
    Route::get('dept','PayrollController@dept');
    Route::get('dept/get_datatable', 'PayrollController@get_datatable');
    Route::get('employeelist/{id}','PayrollController@employeelist');
    Route::get('employeepayslip/{id}','EmployeeListController@employeepayslip');
    Route::get('employeepayslip/get_datatable/{id}','EmployeeListController@get_datatable');
});
Route::resource('events', 'EventController');
Route::resource('leave','LeaveController');
Route::resource('attendance','AttendanceController');
Route::resource('user','UsersController');
Route::get('account/{id}','HrUsersController@account');
Route::get('skill/{id}','SkillController@skill');
Route::get('events', 'EventController@index');
Route::get('time/{id}','AttendanceController@time');








