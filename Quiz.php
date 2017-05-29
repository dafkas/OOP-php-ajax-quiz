<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Quiz extends Eloquent implements UserInterface, RemindableInterface {
	
		public static $rules = array(
		'name'  => 'required|alpha|min:2',
		);

}
