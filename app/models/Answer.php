<?php


class Answer extends Eloquent{
		
		public function question(){
			return $this->belongsTo('Question');
		}
		public static $rules = array(

		);

}
