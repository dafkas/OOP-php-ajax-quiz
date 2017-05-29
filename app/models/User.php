<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');
	
		public static $rules = array(
		'username'  => 'required|alpha_num|min:2',
		'email' => 'required|email|unique:users',
		'password' => 'required|alpha_num|between:1,12'
		);
		
		public static function getIsRole($role)
		{
			$id = Auth::id();

			$level = static::find($id)->role()->where('name', '=', $role)->pluck('level');

			return !empty($level);
		}

		
		public function storeUser()
		{
			//Voeg je quiz toe
			
			return "success";
		}

}
