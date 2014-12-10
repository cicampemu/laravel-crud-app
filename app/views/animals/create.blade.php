<!DOCTYPE html>
<html>
<head>
    <title>Create new animal</title>
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
        <li><a href="{{ URL::to('animals/create') }}">Create an animal</a>
        <li><a href="{{ URL::to('/register') }}" title="register">Register</a></li>
        <li><a href="{{ URL::to('/login') }}" title="login">Login</a></li>
        <li><a href="{{ URL::to('/logout') }}" title="logout">Logout</a></li>
    </ul>
</nav>

<h1>Create an animal</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'animals')) }}

    <div class="form-group">
        {{ Form::label('title', 'Title') }}
        {{ Form::text('title', Input::old('title'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('description', 'Description') }}
        {{ Form::textarea('description', '', Input::old('description'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('father', 'Father') }}
        {{ Form::text('father', Input::old('father'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('mother', 'Mother') }}
        {{ Form::text('mother', Input::old('mother'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('price', 'Price') }}
        {{ Form::number('price', '', Input::old('price'), array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Create an animal!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>