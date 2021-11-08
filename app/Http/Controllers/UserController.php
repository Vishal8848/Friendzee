<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        
        $users = DB::select('SELECT id, name, gender, dob, email FROM users ORDER BY id DESC');
        $count = DB::select('SELECT COUNT(id) AS total, SUM( CASE WHEN gender = ? THEN 1 ELSE 0 END ) AS male, SUM( CASE WHEN gender = ? THEN 1 ELSE 0 END ) AS female, SUM( CASE WHEN gender = ? THEN 1 ELSE 0 END ) AS other FROM USERS', ['Male', 'Female', 'Others']);

        // $all = User::all()->toJson();
        // $all = json_decode($all);
        
        return view('home', [
            'users' => $users,
            'count' => $count
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $user = new User;
        // $user->name = $request->input('fname') . ' ' . $request->input('lname');
        // $user->gender = $request->input('gender');
        // $user->dob = $request->input('dob');
        // $user->email = $request->input('email');
        // $user->save();

        User::create([
            'name' => $request->input('fname') . ' ' . $request->input('lname'),
            'gender' => $request->input('gender'),
            'dob' => $request->input('dob'),
            'email' => $request->input('email'),
            'created_at' => now()
        ]);

        return redirect('/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::where('id' , $id)->firstOrFail();
        return view('profile')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::where('id' , $id)->firstOrFail();
        return view('update')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        User::where('id', $id)->update([
            'name' => $request->input('fname') . ' ' . $request->input('lname'),
            'gender' => $request->input('gender'),
            'dob' => $request->input('dob'),
            'email' => $request->input('email')
        ]);

        return redirect('/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::where('id' , $id)->firstOrFail();
        $user->delete();
        return redirect('/users');
    }
}
