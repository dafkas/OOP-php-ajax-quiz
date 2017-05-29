<?php


class Quiz extends Eloquent{
	
		public function questions(){
			return $this->hasMany('Question');
		}
	
		public static $rules = array(
			'answer' => 'required|alpha|min:2',
			'description' => 'alpha|min:2'
		);

}
