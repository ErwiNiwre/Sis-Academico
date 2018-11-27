<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use App\Estudiante;
use App\Postulante;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function redirectPath()
    {
        if (method_exists($this, 'redirectTo')) {
            return $this->redirectTo();
        }
        if (auth()->user()->rol_id==1) {
                    return "Hola";
                } else {
                    if (auth()->user()->rol_id==2) {
                        return "Como";
                    } else {
                        if (auth()->user()->rol_id==3) {
                            return "Gggggg";
                        } else {
                            if (auth()->user()->rol_id==4) {
                                return "/";
                            } else {
                                if (auth()->user()->rol_id==5) {
                                    return "PPPPPP";
                                } else {
                                    if (auth()->user()->rol_id==6) {
                                        $usr=Auth::user()->id;
                                        $est=Estudiante::where('usuario_id', $usr)->first();
                                        return property_exists($this, 'redirectTo') ? $this->redirectTo : 'estudiantes/'.$est->id;
                                    } else {
                                        if (auth()->user()->rol_id==7) {
                                            $usr=Auth::user()->id;
                                            $pos=Postulante::where('usuario_id', $usr)->first();
                                            return property_exists($this, 'redirectTo') ? $this->redirectTo : 'postulantes/'.$pos->id;
                                        } else {
                                            return property_exists($this, 'redirectTo') ? $this->redirectTo : '/';
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
        


        // return property_exists($this, 'redirectTo') ? $this->redirectTo : '/estudiantes';
    }
    // public function redirectPath()
    // {
    //     if (auth()-user()->rol_id==1) {
    //         return "Hola";
    //     } else {
    //         if (auth()-user()->rol_id==2) {
    //             return "Como";
    //         } else {
    //             if (auth()-user()->rol_id==3) {
    //                 return "Gggggg";
    //             } else {
    //                 if (auth()-user()->rol_id==4) {
    //                     return "KKKKKK";
    //                 } else {
    //                     if (auth()-user()->rol_id==5) {
    //                         return "PPPPPP";
    //                     } else {
    //                         if (auth()-user()->rol_id==6) {
    //                             return "LLLLLL";
    //                         } else {
    //                             if (auth()-user()->rol_id==7) {
    //                                 return "popopopo";
    //                             } else {
    //                                 return "/";
    //                             }
    //                         }
    //                     }
    //                 }
    //             }
    //         }
    //     }

    //     // return property_exists($this, 'redirectTo') ? $this->redirectTo : '/home';
    // }
}
