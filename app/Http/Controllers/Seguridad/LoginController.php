<?php

namespace App\Http\Controllers\Seguridad;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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

    public function username()
    {
        return 'usuario';
    }


}
