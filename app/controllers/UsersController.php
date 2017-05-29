<?php

class UsersController extends \BaseController {

	 
	
	public function index()
	{
		return view::make("users.index");
	}

	public function create()
	{
			return view::make("users.create");
	}

	public function store()
	{
		$validator = Validator::make(Input::all(), User::$rules);
		
		if($validator->passes()){
		
			$user = new user;
			
			#$user->addQuiz();
			$user ->username = Input::get('username');
			$user ->email = Input::get('email');
			$user ->password = Hash::make(Input::get('password'));
			$user ->groep_id = "2";
			$result = $user->save();
			
		
			
			return Redirect::to('/login');
		}
		
		else{
				echo "niet alle velden ingevuld!";
		}
		
		return View::make("users/login");
	}
	
	public function login()
	{
			
		if(Auth::attempt(array('username' =>Input::get('username'), 'password' =>Input::get('password'), 'groep_id' => "1")))
		{
			return Redirect::to('admin/')->with('login_notice', 'Welkom admin');
		}
		
		elseif(Auth::attempt(array('username' =>Input::get('username'), 'password' =>Input::get('password'), 'groep_id' => "2"))){
		
			return Redirect::to('/profile')->with('flash_notice', 'You are successfully logged in.');
		}
		else{
		
			return Redirect::to('/login')->with('login_notice', 'Gebruikersnaam of wachtwoord klopt niet');
		}
		
		
		
	}
	
	public function logout(){
	
		Auth::logout();
		
		return Redirect::to('/login')->with('flash_notice', 'je bent nu uitgelogd');
	}
	
	public function profile(){
	
		return view::make('users/profile');
	}

	/**
	 * Display the specified resource.
	 * GET /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return View::make("users/profile");
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /users/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
	
	}

}