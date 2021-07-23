<?php

namespace App\Http\Controllers\Seguridad;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class LoginController extends Controller
{
    use AuthenticatesUsers;
    
    protected $redirectTo = "/menu";
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('seguridad.index');
    }

   


    protected function authenticated(Request $request, $user)
    {
        
        if ($request->Bloqueado == 1) {
            $this->guard()->logout();
            $request->session()->invalidate();
            return redirect('/login')->withErrors(['error' => 'Este usuario se encuentra bloqueado']);
        }else{
            $user->setSession($user);
        }
    }


    public function username()
    {
        return 'usuario';
    }

}
