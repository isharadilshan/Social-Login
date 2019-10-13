<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function enroll(){
        $user = Auth::user();

        // $request = new FacebookRequest(
        //     $session,
        //     'GET',
        //     "/{$user->id}/likes"
        //   );
        //   $response = $request->execute();
        //   $graphObject = $response->getGraphObject();

        // $user = Auth::user();
        var_dump($user->name);

    }

    function parsePageSignedRequest() {

        if (isset($_REQUEST['signed_request'])) {
          $encoded_sig = null;
          $payload = null;
          list($encoded_sig, $payload) = explode('.', $_REQUEST['signed_request'], 2);
          $sig = base64_decode(strtr($encoded_sig, '-_', '+/'));
          $data = json_decode(base64_decode(strtr($payload, '-_', '+/'), true));
          return $data;
        }
        return false;
      }
}
