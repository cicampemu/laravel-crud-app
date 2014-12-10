<!DOCTYPE html>
<html>
<head>
    <title>Page not found</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('animals') }}">Animal List</a>
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
    <h1>404 Not Found! Sorry!</h1>
    <article class="post">
      <h2>Thanks for passing by!</h2>
      <p>Go to Home.</p>   
</article>
  </article>
  </div>
</body>
</html>
