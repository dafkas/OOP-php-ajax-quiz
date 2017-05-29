@extends ('users.master')

{{ HTML::style('style.css') }}
{{ HTML::script('js/quiz.js') }}
@section('nav')
@stop
<div id="linkerkolom">
    @section ('content')
    	<section class="bg-2">
    		<div class="row" style="background-color:#fafafa; width:1140px; height:auto;">
    			<div class="col-md-6 col-md-offset-1">
    				<h2>Quiz naam</h2>
    				<p>- Elke quiz die je toevoegd heeft 10 vragen, eerst geef je de naam van de quiz en dan komen de vragen.<br/>
	    			   - Bij elke vraag horen 4 antwoorden A, B, C en D een van de 4 antwoorden moet het goede antwoord zijn.
    				</p>
    				{{ Form::open(["route" => "admin/store", "autocomplete" => "off"]) }}
    				{{ Form::label("name", "Naam: ") }}<br/>
					{{ Form::text("name", Input::get("name"),[
					"placeholder" => ""], array("class" => "form-control")) }}<br/><br/>
					{{ Form::label("description", "Description: ") }}<br/>
					{{ Form::text("description", Input::get("description"),[
					"placeholder" => ""], array("class" => "form-control description")) }}<br/><br/>
					
					{{ Form::submit("Maak aan!", array("class" => "btn btn-success")) }}<br/><br/>
				
    			</div>
    		</div>
    	</section>
    @stop
</div>