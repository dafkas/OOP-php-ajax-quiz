@extends ('users.master')

{{ HTML::style('css/style.css') }}

<div id="background">

@section('nav')
@stop

<div id="background">
	<div id="linkerkolom">
	    @section ('content')
    		<section class="bg-2">
    			<div class="row" style="background-color:#fafafa; width:auto; height:auto;">
					<div class="col-md-6 col-md-offset-2">
					<h2>Maak vraag aan</h2>
					<p> Markeer het juiste antwoord met de radiobutton</p>
					
					</div>
					<div class="col-md-4 col-md-offset-2" >
    				
    				{{ Form::open(['route' => 'admin/storequestions']) }}
    				
    				{{ Form::hidden('id', $quiz->id) }}
					
					{{ Form::label("question", "Vraag: ") }}<br/>
					{{ Form::text('question'); }}<br/><br/>
					
					{{ Form::label("awnser_a", "Antwoorden: ") }}<br/>
					
					{{ Form::text('answer[0]'); }} 
					{{ Form::radio('is_correct', '0' ) }}<br/><br/>
					
					{{ Form::text('answer[1]'); }} 
					{{ Form::radio('is_correct', '1' ) }}<br/><br/>
					
					<div id="toggle" style="display:none">
						{{ Form::text('answer[2]'); }}
						{{ Form::radio('is_correct', '2' ) }}<br/><br/>

						{{ Form::text('answer[3]'); }}
						{{ Form::radio('is_correct', '3' ) }}<br/><br/>

						{{ Form::text('answer[4]'); }}
						{{ Form::radio('is_correct', '4' ) }}<br/><br/>
						
						{{ Form::text('answer[5]'); }}
						{{ Form::radio('is_correct', '5' ) }}<br/><br/>
					</div>
					<div id="addquestions">
						
					</div>
					
					<div id="addmore"><input type="button" onclick="showDiv('toggle');" value="Voeg meer antwoorden toe" class="btn btn-primary"><br/><br/></div>
					
					
					{{ Form::submit("Volgende vraag", array("class" => "btn btn-primary btn-block")) }}<br/>
					{{ Form::close() }}
					{{ Form::open(["route" => "admin/completequiz", "autocomplete" => "off"]) }}
					{{ Form::submit("Voltooien", array("class" => "btn btn-success btn-block")) }}<br/><br/>
					</div>
    						
							
    			</div>

    			</div>
    		</section>
 		
		@stop

	</div>
</div>
</div>