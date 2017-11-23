@extends('user.layout.master')
@section('title')
<title>Game|Flash-Card</title>
@endsection
@section('content')
<div class="container">
	<div>
		<button>
			<a href="#">Convert</a>
		</button> 
	</div>
	
	<div class="container-game">
		<div id="game-word">
			{{$card->word}}
		</div>
		<form action="{{url('game',$card->id)}}" method="post">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<label>Mean</label>
			<div  id="game-input"  >
			
				<input type="text" name="enter" placeholder="Type">
				<button type="submit">Enter</button>
			</div>
			@if(Session::has('enter')){
			@if($result == 0){
				Incorrect!
			}@else{
				Correct
			}
			@endif
			}
			@endif
		</form>
		
		<div id="game-under">
			@if (!empty($card2))
			@if( ($card->lesson_id) == ($card2->lesson_id))
				<div class="undo-container" style="font-size: 30px">
					<a href="{{route('game',$card2->id)}}" class="fa fa-undo" style="color: black"> Prev</a>
				</div>
			@endif
			@endif
			@if (!empty($card1))
			@if (($card->lesson_id) == ($card1->lesson_id))
				<div class="next-container" style="font-size: 30px ">
					<a href="{{route('game',$card1->id)}}" class="fa fa-next" style="color: red"> Next</a>
				</div>
			@endif
	@endif
		</div>	
	</div>
		
	
	

</div>
@endsection


