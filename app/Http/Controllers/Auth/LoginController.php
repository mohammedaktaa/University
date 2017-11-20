<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function rules(Request $request)
    {
        $field = filter_var($request->get('email'), FILTER_VALIDATE_EMAIL) ? 'email' : 'university_id';
        if ($field == 'email') {
            $this->validate($request, [
                    'email' => 'required|email',
                    'password' => 'required|min:6|max:15']
            );
        } else {
            $this->validate($request, [
                    'university_id' => 'required|numeric',
                    'password' => 'required']
            );
        }
    }

    public function login(Request $request)
    {
        $url = "";
        if ($request->get('university_id')) {
            $field = filter_var($request->get('university_id'), FILTER_VALIDATE_EMAIL) ? 'email' : 'university_id';
            $this->rules($request);
            $request->merge([$field => $request->get('university_id')]);
        } elseif ($request->get('email')) {
            $field = filter_var($request->get('email'), FILTER_VALIDATE_EMAIL) ? 'email' : 'university_id';
            $this->rules($request);
            $request->merge([$field => $request->get('email')]);
        } elseif ($request->get('email') && $request->get('university_id')) {
            dd($request->get('email') . '++++' . $request->get('university_id'));
            return ['success' => true, 'msg' => trans('app.failed'), 'type' => 'danger'];
        }
        $user = User::where($field, $request->get($field))->first();

        $url = "";
        if ($user->isAdmin())
            $url = route('admin-home');
        else {
            $url = \Session::pull('url.intended', localizeURL($this->redirectPath()));
            if ($url == localizeURL($this->redirectPath()) && \Session::previousUrl())
                $url = \Session::previousUrl();
        }
//        dd($url);

        if (\Auth::attempt($request->only($field, 'password'))) {
            if ($request->ajax())
                return ['success' => true, 'redirect' => $url, 'msg' => trans('app.welcome')];

        }
        return redirect('/login')->withErrors([
            'error' => 'These credentials do not match our records.',
        ]);
    }

}