<?php

namespace App\Http\Controllers;

use App\Department;
use App\Employee;
use App\Http\Requests\AccountRequest;
use App\Job;
use App\Resume;
use App\Schedule;
use App\Status;
use Illuminate\Http\Request;
use App\User;
use App\Photo;
use DB;
use Yajra\DataTables\DataTables;

class HrUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(5);
        return view('hr.home')->with(compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $status = Status::pluck('status','id')->all();
        $jobs = Job::pluck('job_id','id')->all();
        $scheds =Schedule::pluck('schedule','id')->all();
        return view('hr.create')->with(compact('jobs','scheds','status'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(trim($request->password)==''){
            $input = $request->except('password');
        }
        else{
            $input = $request->all();
            $input['password'] = bcrypt($request->password);
        }

        if($file = $request->file('photo_id')){
            $name = time().$file->getClientOriginalName();
            $file->move('images',$name);
            $photo = Photo::create(['file'=>$name]);
            $input['photo_id'] = $photo->id;
        }
        User::create($input);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::findOrFail($id);
        $employee = Employee::findOrFail($id);
        $depts= Department::pluck('department','id')->all();
        $status = Status::pluck('status','id')->all();
        $jobs = Job::pluck('job_id','id')->all();
        $scheds =Schedule::pluck('schedule','id')->all();
        return view('hr.edit')->with(compact('users','jobs','scheds','status','depts','employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AccountRequest $request, $id)
    {
        $user = User::findOrFail($id);
        if(trim($request->password)==''){
            $input = $request->except('password');
        }
        else{
            $input = $request->all();
            $input['password'] = bcrypt($request->password);
        }

        if($file = $request->file('photo_id')){
            $name = time().$file->getClientOriginalName();
            $file->move('images',$name);
            $photo = Photo::create(['file'=>$name]);
            $input['photo_id'] = $photo->id;
        }
        if($file = $request->file('resume_id')){
            $name = time().$file->getClientOriginalName();
            $file->move('resume',$name);
            $resume = Resume::create(['file'=>$name]);
            $input['resume_id'] = $resume->id;
        }
        $user->update($input);
        return redirect('hr/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    //Edit User Profile
    public function account($id){
        $user  = User::findOrFail($id);
        return view('hr.account')->with(compact('user'));
    }
    public function myprofile($id){
        $user  = User::findOrFail($id);
        return view('hr.account')->with(compact('user'));
    }
    //Get Inactive users that register from register.blade
    public function getInactive(){
        return view('hr.inactive');
    }
    public function get_datatable(){
        return DataTables::of(User::query()->where('isActive',null))->make(true);
    }




}
