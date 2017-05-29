@extends ('users.master')

{{ HTML::style('style.css') }}

@section('nav')
@stop
<div id="linkerkolom">
    @section ('content')
    @if(!Auth::check())
    	<section class="bg-2">
    		<div class="row" style="background-color:#fafafa; width:1140px; height:auto;">
    			<div class="col-md-4 col-md-offset-1">
    			
    				<h2>Registreer voor je in logt</h2>
    				<p>al geregistreerd? klik <a href="login">hier</a> om in te loggen</p>
    				<div class="col-md-4 col-md-offset-2" >
    				
    					<h3>Registreer</h3>
    					<div class="errortext"></div>
    						<div class="form-group">
    							{{ Form::open(["route" => "users/store", "autocomplete" => "off"]) }}
								{{ Form::label("username", "username: ") }}<br/>
								{{ Form::text("username", Input::get("username"),[
								"placeholder" => ""], array("class" => "form-control")) }}<br/>

								{{ form::label("email", "email: ") }}<br/>
								{{ form::text("email", Input::get("email"),[
								"placeholder" => "" ], array("class" => "form-control")) }}<br/>
							
								{{ form::label("password", "password: ") }}<br/>
								{{ form::password("password",[
								"placeholder" => "" ], array("class" => "form-control")) }}<br/><br/>
							
								{{ Form::submit("Register", array("class" => "btn btn-primary")) }}
							</div>
				@endif
    			</div>
    		</div>
    	</section>
    @stop
</div>