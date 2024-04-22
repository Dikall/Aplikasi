<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
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
     * * Where to redirect users after login.
    *
    * @var string
    */
    protected $redirectTo = RouteServiceProvider::HOME;
    /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    /**
    * Create a new controller instance.
    *
    * @return RedirectResponse
    */
    public function login(Request $request): RedirectResponse
    {
        $input = $request->all();
        $this->validate($request, [
        'email' => 'required|email',
        'password' => 'required',
    ]);
        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
            if (auth()->user()->type == 'admin') {
                return redirect()->route('admin.home');
            }else if (auth()->user()->type == 'manager') {
                return redirect()->route('manager.home');
             }else if (auth()->user()->type == 'dosen') {
                return redirect()->route('dosenHome');
             }else if (auth()->user()->type == 'tendik') {
                return redirect()->route('tendikHome');
             }else if (auth()->user()->type == 'superadmin') {
                return redirect()->route('superadminHome');
             }else if (auth()->user()->type == 'admakademik') {
                return redirect()->route('admakademikHome');
             }else if (auth()->user()->type == 'admkeuangan') {
                return redirect()->route('admkeuanganHome');
             }else if (auth()->user()->type == 'direktur') {
                return redirect()->route('direkturHome');
             }else if (auth()->user()->type == 'wakil1') {
                return redirect()->route('wakil1Home');
             }else if (auth()->user()->type == 'wakil2') {
                return redirect()->route('wakil2Home');
             }else if (auth()->user()->type == 'wakil3') {
                return redirect()->route('wakil3Home');
             }else if (auth()->user()->type == 'admlppm') {
                return redirect()->route('admlppmHome');
             }else if (auth()->user()->type == 'admsdm') {
                return redirect()->route('admsdmHome');
            }else{
                return redirect()->route('home');
            }
        }else{
            return redirect()->route('login')
                ->with('error','Email-Address And Password Are Wrong.');
        }
    }
}