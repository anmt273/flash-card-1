@extends('user.layout.master')
@section('title')
<title>CreateLesson|Flash-Card</title>
@endsection
@section('content')
	<form action="{{url('createlesson',$course->id)}}">
	<div class="container create-lesson">
		<label>Lesson's name</label>
		<input type="text" name="name" placeholder="Lesson's name">
		<label>Describe</label>
		<input type="text" name="des" placeholder="Describe">
		<label>Image</label>
		<input type="file" name="img">
		<button type="submit">Create</button>
	</div>
	</form>
@endsection