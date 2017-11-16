@extends('user.layout.master')
@section('content')
<section>
<div id="containerlesson" class="container">
 	<!--Lesson list Show -->
   	<div id="lesson_list" class="auto">
   		<div class="search">
			<form class="form_search_khoahoc">
				<input type="text" name="lesson_search" value="Search">
			</form>
   		</div>
         @foreach($lesson as $lesson)
   		<div class="item-lesson" href="{{route('getword',$lesson->id)}}">
   			<div >
   				<img>
   			</div> 
   			<div class="item-lesson-name">
				{{$lesson->name}}			
   			</div>
   			<div class="item-lesson-quantity">
   			{{$lesson->word_quantity}} words
   			</div>
   		</div>
         @endforeach
   </div>   
   <div id="word_list" class="auto">
   		<button href="#" class="button_start" >STASRT</button>
         @if(Session::has('getword'))
         @foreach($words as $word)
   		    <div class="item-word">
   		    	<div class="row">{{$word->word}}</div>
   		    	<div class="row">{{$word->phonetic}}</div>
   		    	<div class="row">{{$word->mean}}</div>
   		    </div>
         @endforeach
         @endif
         
   </div> 
   	<!-------------------------------endList---------------------------------->
   <div class="clear"></div>
</div>
</section>
@endsection
