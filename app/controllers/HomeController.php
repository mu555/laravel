<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| デフォルトHomeコントローラー
	|--------------------------------------------------------------------------
	|
	| クロージャーベースのルーティングの代わりに、もしくはそれに付け加え
	| コントローラーを使いたいと思うことでしょう。それは素晴らしい！
	| このコントローラーを動作させるには、ルートに以下を付け加えてください。
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

}