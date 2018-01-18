<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Role;
use App\Models\Course;
use Illuminate\Http\Request;
use Auth;
use Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        // dd(User::all());
        $count = User::count();
        return view('users.index')
                ->with([
                    'users' => User::where('is_active', 1)->get()
                ]);
    }

    public function pendingList(){
        return view('users.pendingrequest')
                ->with([
                    'users' => User::where('is_active', 0)->get()
                ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create')
                ->with([
                    'roles' => Role::all(),
                    'courses' => Course::all()
                    ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        // Puwede pa palinisin to pero dito muna kayo magsimula.
        // Pede ka gumawa ng request if same validation or paulet ulet
        // php artisan make:request Addrequest
        $request->validate([
            'firstname' => 'required',
            'middlename' => 'required',
            'lastname' => 'required',
            'email' => 'required|unique:users,email',
            'role_id' => 'required|integer|between:1,4',
            'stud_course' => 'required_if:role_id,4'
        ]);
        
        $user = new User;
        $user->firstname = $request->firstname;
        $user->middlename = $request->middlename;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->password = '123';
        $user->role_id = $request->role_id;
        $user->course = $request->stud_course == "" ? 0 : $request->stud_course;
        $user->is_active = 0;
        $user->save();
        return back()->with('status','Registration success. Please wait for activation/ approval of your account.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AppUser  $appUser
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AppUser  $appUser
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
         return view('users.update')
                ->with([
                    'user' => $user,
                    'roles' => Role::all(),
                    'courses' => Course::all()
                    ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AppUser  $appUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'firstname' => 'required',
            'middlename' => 'required',
            'lastname' => 'required',
            'email' => 'required|unique:users,email,'.$user->id,
            'role_id' => 'required|integer|between:1,4',
            'stud_course' => 'required_if:role_id,4',
            'is_active' => 'required|integer|between:0,1'
        ]);
        $user->firstname = $request->firstname;
        $user->middlename = $request->middlename;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->role_id = $request->role_id;
        $user->course = $request->stud_course ?: 0;
        $user->is_active = $request->is_active;
        $user->save();
        return back()->with('status','User updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AppUser  $appUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    public function viewChangePassword(){
        return view('users.change-password');
    }

    public function changePassword(Request $request){
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|same:new_password',
            'confirm_new_password' => 'required|same:new_password'
        ]);

        $current_password = Auth::User()->password;           
        if(Hash::check($request['old_password'], $current_password))
        {           
            $user_id = Auth::User()->id;     
            User::where('id', $user_id)->update(['password'=>bcrypt($request->new_password)]);               
            Auth::logout();
            return redirect('/'); 
        }
        else
        {           
            return back()->with('error','Please enter correct current password');  
        }
    }

    public function resetPassword(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required|same:password',
            'password_confirmation' => 'required|same:password'
        ]);

        // $current_password = Auth::User()->password;           
        // if(Hash::check($request['old_password'], $current_password))
        // {           
            // $user_id = Auth::User()->id;     
            User::where('email', $request->email)->update(['password'=>bcrypt($request->password)]);               
            // Auth::logout();
            return redirect('/'); 
        // }
    }
}
