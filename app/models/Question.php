<?php
class Question extends Eloquent{
	
		public function quiz(){
			return $this->belongsTo('Quiz');
		}
		
		public function answers(){
			return $this->hasMany('Answer');
		}
	
		public static $rules = array(
		
			
		);

}

?>