<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index (Request $request)
    {
        $date = now();
        if($request -> isMethod('get')){
            return view('View1', ['date' => $date ?? '', 'pengguna' => $pengguna ?? 'pengguna']);
        }else if($request -> isMethod('post')){
            $btnValue = $request->input("btn_choice");
            return $this->checkerhome($btnValue);
        }
    }

    private function checkerhome ($btnValue)
    {
        return $btnValue == 0 ? view('TestView.signup') : view('TestView.signin');
    }

    public function signup (Request $request)
    {
        if($request->input("BtnLog") == 0){
                return back();
        }else{
        $validated = $request->validate([
            'nl' => 'required|string|max:255',
            'eml' => 'required|email|max:255',
            'pwd' => 'required|min:8'
        ]);

        $user = User::create([
        'name' => $validated['nl'],
        'email' => $validated['eml'],
        'password' => Hash::make($validated['pwd']),
        ]);

        Auth::login($user);
        $request->session()->regenerate();
        return redirect()->route('dashboard')->with('success', 'User Successfully Created!');
        }
    }

    public function signin (Request $request)
    {
        if($request->input("BtnLog") == 0){
                return back();
        }else{
        $user = User::where('email', $request->eml)->first();
        if (!$user) {
            return back()->with('error','User does not exist in our database.');
        }
        
        if (!Hash::check($request->pwd, $user->password)) {
            return back()->with('error','User found, but the password is wrong!');
        }

        Auth::login($user);
        $request->session()->regenerate();
        return redirect()->route('dashboard')->with('success', 'Successfully Login');
        }
    }

    public function dashboard()
    {
        $user = auth()->user();
        return view('Testview.dashboard', ['users'=>$user]);
    }
}
