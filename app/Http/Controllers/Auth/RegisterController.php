<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstname' => 'required',
            'middlename' => 'required',
            'lastname' => 'required',
            'email' => 'required|unique:users,email',
            'role_id' => 'required|integer|between:1,4',
            'stud_course' => 'required_if:role_id,4'
        ]);

        // $request->validate([
        //     'firstname' => 'required',
        //     'middlename' => 'required',
        //     'lastname' => 'required',
        //     'email' => 'required|unique:users,email',
        //     'role_id' => 'required|integer|between:1,4',
        //     'stud_course' => 'required_if:role_id,4'
        // ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'firstname' => $data['firstname'],
            'middlename' => $data['middlename'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'password' => bcrypt('123'),
            'role_id' => $data['role_id'],
            'course' => $data['course_id']?: 0,
            // 'is_active' => bcrypt($data['password']),
        ]);




        // $user = new User;
        // $user->firstname = $request->firstname;
        // $user->middlename = $request->middlename;
        // $user->lastname = $request->lastname;
        // $user->email = $request->email;
        // $user->password = '123';
        // $user->role_id = $request->role_id;
        // $user->course = $request->course_id ?: 0;
        // $user->is_active = 0;
        // $user->save();
        // return back()->with('status','User added.');
    }
}
