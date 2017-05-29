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
    					<h3>Quiz wijzigen</h3>
    					    @if (Session::has('flash_error'))
								<div id="flash_error">{{ Session::get('flash_error') }}</div>
							@endif
							
					 {{ Form::model($quiz, array('route' => array('admin/update', $quiz->id))) }}
    				{{ Form::label("name", "Naam: ") }}<br/>
					{{ Form::text("name", Input::get("name"),[
					"placeholder" => ""], array("class" => "form-control")) }}<br/><br/>
					{{ Form::label("description", "Description: ") }}<br/>
					{{ Form::text("description", Input::get("description"),[
					"placeholder" => ""], array("class" => "form-control description")) }}<br/><br/>
					
					{{ Form::submit("Opslaan", array("class" => "btn btn-success")) }}

							</div>
					</div>
    						
							
    			</div>

    			</div>
    		</section>
 		
		@stop

	</div>
</div>
</div>