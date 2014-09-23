<?php

class loginController extends BaseController {

	/**
     * Instantiate a new LoginController instance.
     */
    public function __construct()
    {
        $this->beforeFilter('csrf', array('on' => 'post'));
    }

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
		$remember = (bool)Input::get('remember');
		$inputs = Input::only(array('email', 'password'));
		if ( Auth::attempt($inputs, $remember) ) {
			return Redirect::to('/');
		} else {
			return Redirect::back()->withInput();
		}
	}
}
