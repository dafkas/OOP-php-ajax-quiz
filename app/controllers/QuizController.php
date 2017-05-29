<?php

class Quizcontroller extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /quizcontroller
	 *
	 * @return Response
	 */
	 
	public function getjson($id)
	{
		$quiz = quiz::find($id);
		
		$questions = DB::table('questions')	
						->Join('answers', 'questions.id', '=', 'answers.question_id')
						->select('answers.*', 'questions.id', 'questions.question')
						->where('quiz_id', '=', $id)
						->get();		

		return Response::json(array(
				'quiz' => $quiz,
				'questions' => $questions));
		
	}
	
	public function index()
	{
		if(Auth::user()->groep_id == 2)
		{
			$quiz = quiz::all();
			return View::make('users/profile')->with('quizzes', $quiz);
			
		}
		
		return view::make('users/profile');
	}
	
	public function quiz($id)
	{
		if(Auth::user()->groep_id == 2)
		{
			$quiz = quiz::find($id);
			
			return View::make('users/quiz')->with('quiz', $quiz);
			
		}
		
		return view::make('users/quiz');
	}
	
	public function playQuiz($id)
	{
		if(Auth::user()->groep_id == 2)
		{
			$quiz = quiz::find($id);
						
			return View::make('users/play', compact('quiz'));
			 
			Input::get('id');
			
			    
		
		}
	
	}
				 	

	/**
	 * Show the form for creating a new resource.
	 * GET /quizcontroller/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /quizcontroller
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /quizcontroller/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{

		
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /quizcontroller/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /quizcontroller/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /quizcontroller/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		
	}
}