<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\{Role,Channeling,Revision};
use App\Authorizable;
use Hash,DB;

class UserController extends Controller
{
    public function index()
    {
        $users = User::get();
        return view('admin.user.index',compact('users'));
    }

    public function create()
    {
        $roles = Role::pluck('name','id');
        return view('admin.user.create',compact('roles'));
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'bail|required|min:2',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'roles' => 'required|min:1',
            'reg' => 'required|min:1'
        ]);

        // hash password
        $request->merge(['password' => bcrypt($request->get('password'))]);

            // Create the user
            if ( $user = User::create($request->except('roles', 'permissions')) ) {
                $this->syncPermissions($request, $user);
                // flash('User has been created.');
            } else {
                // flash()->error('Unable to create user.');
            }

        return redirect()->route('user.index');
    }


    public function show($id)
    {
        //
    }


    public function edit(User $user)
    {
        $roles = Role::userData()->pluck('name','id');
        return view('admin.user.edit',compact('roles','user'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
    'name' => 'required|min:3|max:50',
    'email' => 'email',
    'role' => 'User',
    'password' => 'required|confirmed|min:6',
]);

        $stu=User::find($id);
        $stu->name=$request->name;
        $stu->reg=$request->reg;
        $stu->password=bcrypt($request->password);
        $stu->role="User";
        $stu->email=$request->email;
        $stu->save();
        return redirect('/students');
       // return "sam";
    }

    public function destroy($id)
    {
        //
    }

    private function syncPermissions(Request $request, $user)
    {
        // Get the submitted roles
        $roles = $request->get('roles', []);
        $permissions = $request->get('permissions', []);

        // Get the roles
        $roles = Role::find($roles);

        // check for current role changes
        if( ! $user->hasAllRoles( $roles ) ) {
            // reset all direct permissions for user
            $user->permissions()->sync([]);
        } else {
            // handle permissions
            $user->syncPermissions($permissions);
        }

        $user->syncRoles($roles);
        return $user;
    }

    public function passwordReset()
    {
        return view('admin.user.password',['user'=>auth()->user()]);
    }

    public function postPasswordReset(Request $request)
    {
        $user = $request->user();
        $rules = array(
            'old_password' => 'required',
            'password' => 'required|string|min:6|confirmed',
        );
        $this->validate($request, $rules);
        if (!Hash::check($request->old_password, $user->password)) {
            return redirect()->back()->withErrors('Your old password does not match.');

        } else {
            $user->password = bcrypt($request->password);
            $user->save();
            auth()->login($user);
            session()->flash('info','Your password has been changed.');
            return redirect()->route('admin');
        }
    }

    public function userTrack()
    {
        $date = isset(request()->date) ? request()->date : stoday();
        $users = User::whereHas('revisions',function($q) use ($date){
                    $q->whereDate('created_at',$date);
                })->get();
        $params = [
            'users'=>$users,
            'date'=>$date 
        ];
        return view('admin.user.user_track',$params);
    }
     public function viewuser()
    {
        return view('auth.viewpro');
    } public function viewuserdet()
    {
        return view('auth.viewdet');
    }
}
