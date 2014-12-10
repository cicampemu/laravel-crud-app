<!DOCTYPE html>
<html>
<head>
    <title>Home of Cardena Andaluza</title>
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
<div class="contentWrapper">
    <div class="mainContent">
<h1>Welcome to Cardena Andaluza App</h1>
    <article class="post">
      <h2>This is a cowboy app</h2>
      <p>Thanks for stopping by!</p>  
  </article>
	</div>
</div>
</body>
</html>
