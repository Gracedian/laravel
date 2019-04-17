<!DOCTYPE html>
<html>
<head>
 <title>Contact</title>
 <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
 <div class="navbar-header">
  <a class="navbar-brand" href="{{ url::to('contact') }}">Contact</a>
 </div>
 <ul class="nav navbar-nav">
  <li><a href="{{ url::to('contact') }}">View All</a></li>  <li><a href="{{ url::to('contact/create') }}">Create</a> </ul>
</nav>

<h1>Input Data Contact</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'contact')) }}

 <div class="form-group">
  {{ Form::label('full_name', 'Name') }}
  {{ Form::text('full_name', Input::old('full_name'), array('class' => 'form-control')) }}
 </div>

 <div class="form-group">
  {{ Form::label('email', 'Email') }}
  {{ Form::email('email', Input::old('email'), array('class' => 'form-control')) }}
 </div>

 <div class="form-group">
  {{ Form::label('message', 'Nerd Level') }}
  {{ Form::textarea('message', Input:old('message'), array('class' => 'form-control')) }}
 </div>

 {{ Form::submit('Submit', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>