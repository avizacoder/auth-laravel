<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{

    public function create()
    {
        $users = User::paginate(10);
        return view('auth.register', compact('users'));
    }

    public function store(Request $request) 
    {
        $rules = [
            'name' => 'required|min:3',
            'email' => 'required|email',
            'password' => 'required|min:3',
            'number_phone' => 'required|digits:8',
            'cedula_identidad' => 'required|digits:8',
            'date_birt' => 'required|min:3',
            'city_code' => 'required|min:3',
        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()) {
            return redirect('/register')
                    ->withErrors($validator)
                    ->withInput();
        }else {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->number_phone = $request->number_phone;
            $user->cedula_identidad = $request->cedula_identidad;
            $user->date_birt = $request->date_birt;
            $user->city_code = $request->city_code;
            $user->save();
        }
        auth()->login($user);
        $notification = 'the register is success';
        return redirect()->route('auth.register')->with(compact('notification'));

    }

    public function destroy($id) 
    {
        User::destroy($id);
        return redirect()->to('/register');
    }

    public function edit($id) 
    {
        $user = User::findOrFail($id);
        return view('auth.edit', compact('user'));
    }

    public function update(Request $request, User $id) 
    {
        $rules = [
            'name' => 'required|min:3',
            'email' => 'required|email',
            'password' => 'required|min:3',
            'number_phone' => 'required|digits:8',
            'cedula_identidad' => 'required|digits:8',
            'date_birt' => 'required|min:3',
            'city_code' => 'required|min:3',
        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()) {
            return back()
                    ->withErrors($validator)
                    ->withInput();
        } else {
            $id->name = $request->name;
            $id->email = $request->email;
            $id->password = $request->password;
            $id->number_phone = $request->number_phone;
            $id->cedula_identidad = $request->cedula_identidad;
            $id->date_birt = $request->date_birt;
            $id->city_code = $request->city_code;
            $id->save();
        }
        auth()->login($id);
        $notification = 'the register is success';
        return redirect()->route('auth.register')->with(compact('notification'));
    }

}
