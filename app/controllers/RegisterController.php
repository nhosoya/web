<?php

class RegisterController extends BaseController {

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = [
			'username' => ['required'],
			'email'    => ['required', 'email', 'unique:users'],
			'password' => ['required', 'min:8'],
		];
		$inputs = Input::only(['username', 'email', 'password']);
		$val = Validator::make($inputs, $rules);
		if($val->fails())
		{
			return Redirect::back()
					->withErrors($val)
					->withInput();
		}
		if($user = User::create($inputs))
		{
			Auth::login($user);
			return Redirect::to('/');
		}
	}

}
