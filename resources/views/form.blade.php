@extends('app')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<h1>Who Are You?</h1>
				    <form action="/" method="post" id="form">
				    	{{ csrf_field() }}
				      <label for="name">Name:</label>
				      <input type="text" name="name" class="form-control">
				      
				      <label for="gender" style="margin-top:10px;">Gender:</label>
				      <select name="gender" class="form-control">
				      	<option value="m">Male</option>
				      	<option value="f">Female</option>
				      </select>

				      <div class="g-recaptcha" data-sitekey="6Lee2yUTAAAAAAtZXh-Eq7x47l93NN9SJOgAYl7p"></div>
				      
				      <input type="submit" value="Say My Name!" class="btn btn-primary btn-block" style="margin-top:15px;">
				    </form>
			</div>
		</div>
	</div>

@endsection