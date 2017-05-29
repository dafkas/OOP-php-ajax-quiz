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
    					<h3>Admin Panel</h3>
    					    @if (Session::has('flash_error'))
								<div id="flash_error">{{ Session::get('flash_error') }}</div>
							@endif
						<a href="admin/create">{{ Form::submit("Maak quiz aan!", array("class" => "btn btn-success btn-lg")) }}</a><br/><br/>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">
								Quizzes:</h3>
                			</div>
							<ul class="list-group">
								@foreach($quizzes as $quiz)
									<a href="admin/createquestions/{{ $quiz->id }}" class="list-group-item">{{ $quiz['name']  }}</a>
									<a href="admin/delete/{{ $quiz->id }}">verwijder</a>
									<a href="admin/edit/{{ $quiz->id }}">wijzigen</a>
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