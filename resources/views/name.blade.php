@extends('app')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<h1>Hello {{ $name }}</h1>
				
				<div class="image">
					@if ($gender == 'm')
						<img src="man.png">
					@elseif ($gender == 'f')
						<img src="woman.png">
					@elseif ($gender == 'r')
						<img src="robot.png">
					@endif
				</div>
			</div>
		</div>
	</div>

@endsection