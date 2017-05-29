@extends ('users.master')

{{ HTML::style('style.css') }}
<div id="background">

@section('nav')
@stop
<div id="background">
	<div id="linkerkolom">
    	@section ('content')
    		<section class="bg-2">
    			<div class="row" style="background-color:#fafafa; width:auto; height:300px;">
					<div class="col-md-6 col-md-offset-1">
					</div>
					<div class="col-md-4 col-md-offset-2" >
						
						
						
						
						<div class="members" style="width: 500px ;background-color: beige;">
							
						</div>
								<div id="flash_error">
									{{ Session::get('flash_error') }}
								</div>
								<div class="question">
									@foreach($quiz->questions as $question)
										<form class="playQuizForm">
											<h1>Vraag:</h1>
									
						
											{{ $question->question}}<br/>
											
											@foreach($question->answers as $answer)
										
												
												
												
												<input type="radio" name="playQuizRadio" class="playQuizRadio"/>
												<input type="hidden" name="isCorrect" value="{{ $answer->is_correct }}"/>
										
												{{ $answer->answer }}<br/>
											@endforeach
											<br/>
											{{ Form::submit("Volgende vraag", array("class" => "btn btn-primary")) }}<br/><br/>
										</form>
									@endforeach
										<div class="endQuiz">
											<p>Score:</p>
											<p class="showScore"></p>
											<a href="http://localhost/ROOT/quizOOP/public/profile">Terug</a>
										</div>
								</div>
								<div class="answers">
								</div>
						
					</div>
				</div>
			</div>
    						
							
    			</div>

    			</div>
    		</section>

    	
		@stop
		

	</div>
</div>
</div>