<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function signIn(){

        return view('signIn');
    }

    public function signUp(){

        return view('signUp');
    }

    public function signUp_valid(Request $request){
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|unique:users,email|string|max:100',
            'password' => 'required|string|min:6|max:100',
            'password_repeat' => 'required|same:password',
        ],
    [
        'name.required' => 'Поле "Логин" обязательно для заполнения.',
        'name.string' => 'Поле "Логин" должно содержать текст.',
        'name.unique' => 'Пользователь с таким "Логином" уже существует.',
        'name.max' => 'Поле "Логин" не должно превышать 100 символов.',
    
        'email.required' => 'Поле "Email" обязательно для заполнения.',
        'email.string' => 'Поле "Email" должно содержать текст.',
        'email.unique' => 'Пользователь с таким "Email" уже существует.',
        'email.max' => 'Поле "Email" не должно превышать 100 символов.',
    
        'password.required' => 'Поле "Пароль" обязательно для заполнения.',
        'password.string' => 'Поле "Пароль" должно содержать текст.',
        'password.min' => 'Пароль должен содержать не менее 6 символов.',
        'password.max' => 'Поле "Пароль" не должно превышать 100 символов.',
    
        'password_repeat.required' => 'Поле "Повторите пароль" обязательно для заполнения.',
        'password_repeat.same' => 'Пароль и его повтор должны совпадать.',
    ]);
    User::create([
        'name' => $request['name'],
        'email' => $request['email'],
        'password' => $request['password'],
        'role_id' => 2
    ]);
        return redirect(route('index'))->with('success', 'Вы успешно зарегистрировались, теперь можете авторизоваться!');
    }

    public function signIn_valid(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ],
    [
        'email.required' => 'Поле "Email" обязательно для заполнения.',
        'password.required' => 'Поле "Пароль" обязательно для заполнения.',
    ]);
    $credentails = $request->only('email', 'password');
    if(Auth::attempt($credentails)){
        $role_id = Auth::user()->role_id;
        switch($role_id){
        case 1:
            return redirect(route('admin'));
            case 2:
                return redirect(route('account'));
            default:
            return redirect(route('index'));
        }
    } else{
        return redirect()->back()->with('success', 'Неверный логин или пароль');
    }
        
    }
    
    public function logout(){
        Auth::logout();
        return redirect(route('index'));
    }
}