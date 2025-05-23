<?php

namespace App\Http\Controllers;

use App\Models\UserInfo;
use App\Models\Person;
use Illuminate\Http\Request;

class UserInfoController extends Controller
{
     public function index() {
      // route --> /users/
      // fetch all records & pass into the index view

      // $users = UserInfo::all()  // fetches all records

      $users = UserInfo::with('person')->orderBy('created_at', 'desc')->get();
       
    //   $users = UserInfo::orderBy('created_at', 'desc')->paginate(10) - for pagination

      return view('users.index', ['users' => $users]);
    }

    public function show(UserInfo $user) {
      // route --> /users/{id}
      // fetch a single record & pass into show view

      // $user = UserInfo::with('person')->findOrFail($id)
      $user->load('person');
      return view('users.show', ["user" => $user]);
    }

    public function create() {
      // route --> /users/create
      // render a create view (with web form) to users

      $people = Person::all();

      return view('users.create', ["persons" => $people]);
    }

    public function store(Request $request) {
      // --> /users/ (POST)
      // hanlde POST request to store a new user record in table

      $validated = $request->validate([
        'name' => 'required|string|max:255',
        'skill' => 'required|integer|min:0|max:100',
        'bio' => 'required|string|min:5|max:1000',
        'person_id' => 'required|exists:people,id'
      ]);
     
      UserInfo::create($validated);
      
      return redirect()->route('users.index')->with('success','User Created!');
    }

    public function destroy(UserInfo $user) {
      // handle delete request to delete a user record from table
      
      //$user = UserInfo::findOrFail($id)
      $user->delete();

      return redirect()->route('users.index')->with('success','User Deleted!');
    }

    // edit() and update() for edit view and update requests
    // we won't be using these routes
}
