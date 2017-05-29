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
    				<h2>Registreer voor je in gaat loggen</h2>
    				<p>Nog niet geregistreerd klik <a href="create">hier</a> om te registreren</p>
					</div>
					
					<div class="col-md-4 col-md-offset-2" >
    					<h3>Login</h3>
    					    @if (Session::has('flash_error'))
								<div id="flash_error">{{ Session::get('flash_error') }}</div>
							@endif
							@if (!Auth::check())
    						<div class="form-group">
    						<div id="login_notice">{{ Session::get('login_notice') }}</div>
    							{{ Form::open(["route" => "users/login", "autocomplete" => "off"]) }}
								{{ Form::label("username", "username: ") }}<br/>
								{{ Form::text("username", Input::old("username"),[
								"placeholder" => ""], array("class" => "form-control")) }}<br/>

							
								{{ form::label("password", "password: ") }}<br/>
								{{ form::password("password",[
								"placeholder" => "" ], array("class" => "form-control")) }}<br/><br/>
							
								{{ Form::submit("Login", array("class" => "btn btn-primary")) }}
							
							@else
							</div>
					</div>
					<div class="row" style="background-color:#fafafa; width:auto; height:auto;">
							<div class="col-md-4 col-md-offset-1" >
								<p>je bent al ingelogd klik <a href="logout">hier</a> om uit te loggen</p>
								@endif
							</div>
					</div>
    						
							
    			</div>

    			</div>
    		</section>
		@stop
		

	</div>
</div>
</div>