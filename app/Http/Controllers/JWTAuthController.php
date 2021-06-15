<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Validator;
use App\User;
use App\User_Details;
use Storage;

class JWTAuthController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
        $this->guard = "api";
    }
    public function register(Request $request)
    {
        // dd(Storage::disk('upload')->putFile('/profileImg', $request->file('img'),'public'));
        $validator = Validator::make($request->all(), [
            'name' => 'required|between:2,100',
            'phone' => 'required|unique:users|max:50',
            'password' => 'required|string|min:6',
            // 'img.*' => 'image|mimes:jpeg,png,jpg,JPG,gif,svg',
        ]);

        if ($validator->fails())
        {
            $error = $validator->errors();
            if($error->has('phone'))
            {
                return response()->json(['message' => $error->first('phone')], 422);
            }
            return response()->json(['message' =>$error], 422);

        }

            $user = User::create(array_merge(
                    $validator->validated(),
                    ['password' => bcrypt($request->password)]
                ));

             return response()->json([
                        'message' => 'Successfully registered',
                        'user' => $user
                    ], 201);


    }
    public function login(Request $request)
    {
        // dd($request->all());

                $validator = Validator::make($request->all(), [



                    'phone' => 'required',
                    'password' => 'required',


                ]);


        if ($validator->fails()) {

            return response()->json($validator->errors(), 422);
        }

        if (! $token = auth($this->guard)->attempt($validator->validated())) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->createNewToken($token);
    }

     public function update()
    {
        $users = User::all();

        try {

            foreach($users as $item){
                $get = bcrypt($item->phone);
                User::where('phone',$item->phone)->update(array('password' => $get));
            }
            // Validate the value...
        } catch (Throwable $e) {
            report($e);

            return false;
        }



        // $update  =  User::where('phone','923076102050')->update([
        //     'password' =>$get
        // ])

    }
    public function profile(Request $req)
    {
        // dd($req->user_id);
        $user = User::with('userDetails')->where('id',$req->user_id)->first();
        return $user;
    }
    public function logout()
    {
        auth($this->guard)->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }
    public function refresh()
    {
        return $this->createNewToken(auth($this->guard)->refresh());
    }
    protected function createNewToken($token)
    {
        // dd("check");
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth($this->guard)->factory()->getTTL() * 60,
            'user'=>auth($this->guard)->user(),
        ]);
    }
}

