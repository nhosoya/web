<?php

class loginController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('login');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$inputs = Input::only(array('email', 'password'));
		if ( Auth::attempt($inputs) ) {
			return Redirect::to('/');
		} else {
			return Redirect::back()->withInput();
		}
	}
}
