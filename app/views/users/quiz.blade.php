@extends ('users.master')


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
    					    @if (Session::has('flash_error'))
								<div id="flash_error">
									{{ Session::get('flash_error') }}
								</div>
							@endif	
							<div class="quiz-name" style="text-align:center;">
								<h4>Naam:</h4>
								
								<h2>{{ $quiz['name']  }}</h2>	<br/>
								<div class="quiz-description" style="text-align:center;">
									<h4>Description:</h4>
								
									<h2>{{ $quiz['description']  }}</h2><br/>
								</div>
							
							</div><br/>
							<div id="play" style="text-align:center;">
							<a href="play/{{ $quiz->id }}">{{ Form::submit("Play quiz!", array("class" => "btn btn-success")) }}</a><br/><br/><br/>
							</div>
							<br/>
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

