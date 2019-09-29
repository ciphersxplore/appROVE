<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Session;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $client = new Client();
        $response = $client->get("http://localhost:3000/api/users/");
        $users = json_decode($response->getBody());
        
        return view('admin.users.view.admin', compact('users'));
    }

    public function login(Request $request)
    {
    
    }

    /**
     * Show dashboard for the resident
     */
    public function dashboard($id)
    {
        $client = new Client();
        $response = $client->get("http://localhost:3000/api/users/{$id}");
        $user = json_decode($response->getBody());

        // dd($user);

        $client = new Client();
        $response = $client->get("http://localhost:3000/api/users/{$id}");
        $user = json_decode($response->getBody());

        return view('user.dashboard', compact('user'));

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $destinationPath = public_path('image/profile');
        $fileName = Input::file('image')->getClientOriginalName();

        Input::file('image')->move($destinationPath, $fileName);

         try {
            $client = new Client();

            $client->post('http://localhost:3000/api/users', [
                "json" => [
                    "firstName" => $request->firstName,
                    "lastName" => $request->lastName,
                    "email" => $request->email,
                    "contactNumber" => $request->contactNumber,
                    "password" => $request->password,
                    "age" => $request->age,
                    "gender" => $request->gender,
                    "img_path" => $fileName

                ]
            ]);

            return redirect()->back()->with('success', 'Registration successful');
        } catch (ClientException $e) {
            return redirect()->back()->with('error', 'Kindly check registration details');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
