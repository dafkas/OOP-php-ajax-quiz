<?php

class AdminController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /admin
	 *
	 * @return Response
	 */
	 
    
	public function index()
	{	
		//checken of hij admin is
		if(Auth::user()->groep_id == 1)
		{
			$quiz = quiz::all();
			return View::make('admin/index')->with('quizzes', $quiz);
			
		}
		
		return Redirect::to('/profile')->with('login_notice', 'Je bent geen admin!');
		
	}

	//quiz aanmaken
	public function create()
	{
		//checken of hij admin is
		if(Auth::user()->groep_id == 1)
		{
			
			return View::make('admin/create');
		}
		
		return Redirect::to('/profile')->with('login_notice', 'Je bent geen admin!');
	}	

	//quiznaam opslaan
	public function storeQuizName()
	{
		
			$quiz = new quiz;
			$quiz ->name = Input::get("name");
			$quiz->description = Input::get("description");
			
			$quiz->timestamps = false;
			$quiz->save();
			
			//terug naar admin pagina
			return Redirect::to('admin/')->with('login_notice', 'Quiz aangemaakt!');
	}
	
	public function createQuestions($id){
		
		//checken of hij admin is anders alles quizzes laten zien
		if(Auth::user()->groep_id == 1)
		{	
			$quiz = quiz::find($id);
			return View::make('admin/createQuestions')->with('quiz', $quiz);
		}
		//als geen admin is naar index
		else
		{
			return View::make('admin/index');
		}
	}

	/**
	 * Display the specified resource.
	 * GET /admin/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function storeQuestions($id)
	{	
		
		$validator = Validator::make(Input::only('question'), Question::$rules);
		
		if($validator->passes())
		{	
			$answers = array_filter(Input::get('answer'));
			$answercount = count($answers);
			
			if($answercount <= 1)
			{
				return Redirect::back()->with('login_notice', 'er is maar een antwoord ingevuld');
				
			}
			
			elseif($answercount > 1)
			{
				$question = new question;
				$question->quiz_id = Input::get("id");
				$question->question = Input::get("question");
			
				$question->timestamps = false;
				$question->save();
				
				for($i = 0; $i < $answercount; $i++)
				{
					$answer = new Answer;
					$answer->answer = $answers[$i];
					$answer->question()->associate($question);
					$answer->timestamps = false;
					
					if(Input::get('is_correct') == $i)
					{
						$answer->is_correct = true;
					}
					
					else
					{
						$answer->is_correct = false;
					}
					
					$answer->save();
				
				}
			}
						
			return Redirect::back();
		}
	}
	 
	public function completeQuiz()
	{
		return Redirect::to('admin/');
	}
	

	/**
	 * Show the form for editing the specified resource.
	 * GET /admin/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$quiz = quiz::find($id);
        return View::make('admin/edit')->with('quiz',$quiz)->render();

		
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /admin/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
			$quiz = quiz::find($id);
			$quiz ->name = Input::get("name");
			$quiz->description = Input::get("description");
			
			$quiz->timestamps = false;
			$quiz->save();
			
			//terug naar admin pagina
			return Redirect::to('admin/')->with('login_notice', 'gewijzigd!');

	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /admin/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$quiz = quiz::find($id);
        $quiz->delete();
        return Redirect::back();
	}

}