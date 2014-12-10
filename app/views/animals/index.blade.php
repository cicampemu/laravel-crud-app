<!DOCTYPE html>
<html>
<head>
    <title>Animal List</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('/') }}">Animals list</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('animals') }}">View All animals</a></li>
        <li><a href="{{ URL::to('animals/create') }}">Create an animal</a>
        <li><a href="{{ URL::to('/register') }}" title="register">Register</a></li>
        <li><a href="{{ URL::to('/login') }}" title="login">Login</a></li>
        <li><a href="{{ URL::to('/logout') }}" title="logout">Logout</a></li>
    </ul>
</nav>

<h1>All the animals</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Title</td>
            <td>Description</td>
            <td>Father</td>
            <td>Mother</td>
            <td>Born</td>
            <td>Sold</td>
            <td>Member</td>
            <td>Price</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
    @foreach($animals as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->title }}</td>
            <td>{{ $value->description }}</td>
            <td>{{ $value->father }}</td>
            <td>{{ $value->mother }}</td>
            <td>{{ $value->born }}</td>
            <td>{{ $value->sold }}</td>
            <td>{{ $value->member }}</td>
            <td>{{ $value->price }}</td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->
                {{ Form::open(array('url' => 'animals/' . $value->id, 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete this animal', array('class' => 'btn btn-warning')) }}
                {{ Form::close() }}

                <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                <a class="btn btn-small btn-success" href="{{ URL::to('animals/' . $value->id) }}">Show this animal</a>

                <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ URL::to('animals/' . $value->id . '/edit') }}">Edit this animal</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
</body>
</html>