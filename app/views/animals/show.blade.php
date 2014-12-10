<!DOCTYPE html>
<html>
<head>
    <title>Show animal details</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('/') }}">Animal List</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('animals') }}">View All animals</a></li>
        <li><a href="{{ URL::to('animals/create') }}">Create a animal</a>
        <li><a href="{{ URL::to('/register') }}" title="register">Register</a></li>
        <li><a href="{{ URL::to('/login') }}" title="login">Login</a></li>
        <li><a href="{{ URL::to('/logout') }}" title="logout">Logout</a></li>
    </ul>
</nav>

<h1>Showing {{ $animal->title }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $animal->title }}</h2>
        <p>
            <strong>Description:</strong> {{ $animal->description }}<br>
            <strong>Father:</strong> {{ $animal->father }}<br>
            <strong>Mother:</strong> {{ $animal->mother }}<br>

            <strong>Price:</strong> {{ $animal->price }}
        </p>
    </div>

</div>
</body>
</html>