<!DOCTYPE html>
<html>
<head>
    <title>Register to Cardena Andaluza</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('/') }}">Animal List</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('/animals') }}">View All animals</a></li>
        <li><a href="{{ URL::to('/animals/create') }}">Create an animal</a>
        <li><a href="{{ URL::to('/register') }}" title="register">Register</a></li>
        <li><a href="{{ URL::to('/login') }}" title="login">Login</a></li>
        <li><a href="{{ URL::to('/logout') }}" title="logout">Logout</a></li>
    </ul>
</nav>
<div id="contentWrapper">
  <article id="mainContent">
    <h1>Sign Up!</h1>
    <article class="post">
      <h2>New User Registration</h2>
      {{Form::open(array('url'=>'register'))}} 

        {{Form::label('email', 'Email address')}}
        {{Form::text('email')}}

        {{Form::label('username', 'Username')}}
        {{Form::text('username')}}

        {{Form::label('password', 'Password')}}
        {{Form::password('password')}}

        {{Form::submit('Sign up')}}

      {{Form::close()}}     
</article>
  </article>
</div>
</div>
</body>
</html>
