<?php
/**********************************************************
 * Project:     l7-api-passport
 * File:        AuthController.php
 * Author:      Adrian <Adrian@tafe.wa.edu.au>
 * Date:        2020-06-01
 * Version:     1.0.0
 * Description: "Authorisation" Controller
 **********************************************************/


namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;
use Validator;

class AuthController extends Controller
{
    const HTTP_OK = Response::HTTP_OK;
    const HTTP_CREATED = Response::HTTP_CREATED;
    const HTTP_UNAUTHORISED = Response::HTTP_UNAUTHORIZED;

    public function login(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
            ];

        if (auth()->attempt($credentials)) {
            $user = Auth::user();
            $token['token'] = $this->get_user_token($user, "TestToken");
            $response = self::HTTP_OK;

            return $this->get_http_response("success", $token, $response);
        }
        // No need to use an else, as if the test passes, this code is never got to
        $error = "Unauthorised Access";
        $response = self::HTTP_UNAUTHORISED;

        return $this->get_http_response("Error", $error, $response);
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()]);
        }

        $data = $request->all();
        $data['password'] = Hash::make($data['password']);
        $user = User::create($data);
        $success['token'] = $this->get_user_token($user, "TestToken");
        $success['name'] = $user->name;
        $response = self::HTTP_CREATED;

        return $this->get_http_response("success", $success, $response);
    }

    public function get_user_details_info()
    {
        $user = Auth::user();
        $response = self::HTTP_OK;

        return $user ? $this->get_http_response("success", $user, $response)
            : $this->get_http_response("Unauthenticated user", $user, $response);
    }

    public function get_http_response(string $status = null, $data = null, $response)
    {
        return response()->json([
            'status' => $status,
            'data' => $data,
        ], $response);
    }

    public function get_user_token($user, string $token_name = null)
    {
        return $user->createToken($token_name)->accessToken;
    }
}
