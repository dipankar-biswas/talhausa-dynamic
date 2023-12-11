<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Validator;
use Session;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {   
        $user = null;
        if(User::get()){
            $user = User::orderby("id","DESC")->get();
        }
        return view('auth.register', compact("user"));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            "name"                  => ['required', 'string', 'max:255'],
            "email"                 => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            "password"              => ['required', 'confirmed', Rules\Password::defaults()],
            "password_confirmation" => ['required']
        ]);

        if($validator->fails()){
            return response()->json([
                "status" => "validatorError",
                "data" => $validator->errors(),
            ]);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'status' => $request->status,
            'password' => Hash::make($request->password),
        ]);

        if($user){
            Session::put('success', 'New user registered!');
            return response()->json([
                "reload" => true
            ]);
        }else{
            Session::put('error', 'Data not deleted!');
            return response()->json([
                "reload" => true
            ]);
        }

    }



    public function edit(Request $request){
        $user = User::findOrFail($request->id);
        if($user){
            return response()->json([
                "status" => "update",
                "data" => $user
            ]);
        }
    }    


    public function update(Request $request){

        $validator = Validator::make($request->all(),[
            "name"                  => ['required', 'string', 'max:255'],
            "email"                 => ['required', 'string', 'email', 'max:255', 'unique:'.User::class.",email,".$request->id]
        ]);

        if($validator->fails()){
            return response()->json([
                "status" => "validatorError",
                "data" => $validator->errors(),
            ]);
        }

        $user           = User::find($request->id);
        $user->name     = $request->name;
        $user->email    = $request->email;
        $user->status   = $request->status;
        $user->save();

        if($user){
            Session::put('success', 'New user data updated!');
            return response()->json([
                "reload" => true
            ]);
        }else{
            Session::put('error', 'Data not deleted!');
            return response()->json([
                "reload" => true
            ]);
        }

    }



    public function delete($id){
        $user = User::findOrFail($id);
        if($user){
            $user->delete();
            Session::put('success', 'Data delete successfully!');
            return redirect(Route('register'));
        }
        
    }





}
