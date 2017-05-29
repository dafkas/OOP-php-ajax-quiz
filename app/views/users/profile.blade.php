@extends ('users.master')

{{ HTML::style('style.css') }}
<div id="background">

@section('nav')
@stop
<div id="background">
	<div id="linkerkolom">
	    @section ('content')
    		<section class="bg-2">
    			<div class="row" style="background-color:#fafafa; width:auto; height:auto;">
					<div class="col-md-6 col-md-offset-1">
					</div>
					<div class="col-md-4 col-md-offset-2" >
    					<h2 style="text-align:center;">Quizzes</h2><br/>
    					    @if (Session::has('flash_error'))
								<div id="flash_error">
									{{ Session::get('flash_error') }}
								</div>
							@endif
	
								<div class="panel panel-default">
									<div class="panel-heading">
										<h3 class="panel-title">
											Quiznaam:</h3>
                					</div>
									<ul class="list-group">
										@foreach($quizzes as $quiz)
										<a href="quiz/{{ $quiz->id }}" class="list-group-item">{{ $quiz['name']  }}</a>
										@endforeach	
                					</ul>
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