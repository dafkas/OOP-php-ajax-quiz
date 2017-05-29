<!DOCTYPE html>
{{ HTML::style('css/style.css') }}
<html>

<title>quiz</title>
<meta charset="UTF-8" />

<header>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js">
	{{ HTML::script('http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js') }}

</header>

<body style="background-color:#b5b0b0;">
	<div class="container">
    @yield ('nav')
    	<div id="navkolom">
    	<div class="row">
			<div class="navbar-form" style="background-color:#7E8F7C; height:auto; width:auto;">
				<div class="row">
					<div class="col-md-4 col-md-offset-5">
						@if(!Auth::check())
							<h1 ><a href="create">Registreer</h1></a>
							<h1 style="margin-left:40px;"><a href="login">Login</h1></a>
						@else
							<h1 style=""><a href="logout">Logout</h1></a>
					</div>
						Je bent nu ingelogd als {{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->username }}}
						@endif
					</div>
				</div>
			</div>
			<div class="id">
				{{ Session::get('login_notice') }}
				
				
			</div>

			
		</div>
		<div id="user_notifications"></div>
		
	</div>
</div>
<div class="row" >
	<div class="col-md-9 col-md-offset-1" style="margin-left:70px; width:1170px;">
		<div class="linkerkolom">
			@yield ('content')
			@yield ('blog')
		</div>
	</div>

</div>

<div class="rechterkolom">

</div>

<div class="error">


</div>



{{ HTML::script('/js/addquiz.js') }}

{{ HTML::script('/js/jquery/quiz.js') }}

</body>
</html>
