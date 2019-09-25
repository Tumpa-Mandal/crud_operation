@extends('parent')

@section('main')

<div class="jumbotron text-center">
	<div align="right">
		<a href="{{ route('crud.index') }}" class="btn btn-default">Back</a>
	</div>
	<br>
	<img src="{{ URL::to('/') }}/image/{{ $data->image }}" class="img-thumbnail" width="75" />
	<h3>First Name - {{ $data->first_name }}</h3>
	<h3>Last Name - {{ $data->last_name }}</h3>
	<h3>Email Address - {{ $data->email }}</h3>
</div>

@endsection