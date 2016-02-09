<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function name()
	{
		return View::make('name');
	}

	public function setname()
	{
		$name = Input::get('name');
		if($name != null && $name != '') {
			Session::put('name', $name);
			return Redirect::action('HomeController@title');
		} else {
			return Redirect::back();
		}
	}

	public function title()
	{
		if(Session::has('name')) {
			return View::make('title');
		} else {
			return Redirect::back();
		}
	}
	public function startgame()
	{
		if(Session::has('name')) {
			return Redirect::action('HomeController@dungeon');
		} else {
			return Redirect::back();
		}
	}
	public function dungeon()
	{
		if(Session::has('name')) {
			$health = 100;
			return View::make('dungeon')->with('health', $health);
		}
	}
	public function restart()
	{
		Session::forget('name');
		return Redirect::action('HomeController@name');
	}
	public function exitdungeon()
	{
		if(Session::has('name')) {
			return Redirect::action('HomeController@forest');
		} else {
			return Redirect::back();
		}
	}
	public function forest()
	{
		if(Session::has('name')) {
			return View::make('forest');
		}
	}
	public function exitforest()
	{
		if(Session::has('name')) {
			return Redirect::action('HomeController@deepforest');
		} else {
			return Redirect::back();
		}
	}
	public function deepforest()
	{
		if(Session::has('name')) {
			return View::make('deepforest');
		} else {
			return Redirect::back();
		}
	}
	public function lavalands()
	{
		if(Session::has('name')) {
			return View::make('lavalands');
		}
	}
}
