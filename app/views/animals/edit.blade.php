<!DOCTYPE html>
<html>
<head>
    <title>Look! I'm CRUDding</title>
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

<h1>Edit {{ $animal->title }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($animal, array('route' => array('animals.update', $animal->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('title', 'Title') }}
        {{ Form::text('title', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('description', 'Description') }}
        {{ Form::textarea('description', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('father', 'Father') }}
        {{ Form::text('father', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('mother', 'Mother') }}
        {{ Form::text('mother', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('price', 'Price') }}
        {{ Form::number('price', null, array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Edit the animal', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>