<?php
// View::composer(array('users', 'userdetail'), function($view)
View::composer('nav', function($view)
{
	$sports = Sport::getAllSports();
	$view->with('sports', $sports);
});
