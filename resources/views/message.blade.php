@extends('layout_plain')

@section('content')
<br/><br/>
<div class="jumbotron shadow bg-danger text-white"><center>
    <p class="lead">Login Failed!</p>
    <h1 class="display-">{{ $response['message'] }}</h1>
    <hr class="my-4">
    <p>click the button to be redirected.</p>
    <br/>
    <p class="lead">
      <a class="btn btn-primary btn-lg" href="{{ $response['link'] }}" role="button">Done</a>
    </p>
</center></div>
@endsection
