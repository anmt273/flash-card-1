@extends('user.layout.master')
@section('content')
<section>
	<div  class ="container-flashcard">
		<div id="controls"> controls</div>
		<div id="flashcard">
			<div class="container">	
			<div class="flash-card">
  				<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
					<div class="flipper">
						<div class="front">
							abc abc
						</div>
						<div class="back">
							xyz
						</div>
					</div>
				</div>
 			 </div>
 			 	<div>
					<button class="fa fa-pencil"></button>
				</div>
				<div class="flash-card-under">
					<div class="remembered-container">
					<a href="#" class="fa fa-tags"> Remebered</a>
					</div>
					<div class="example-container">
						<a href="#" class="fa fa-tags"> Example</a>
					</div>
				</div>


			</div>
		</div>
		<div class="clear"></div>
	</div>
</section>
@endsection

