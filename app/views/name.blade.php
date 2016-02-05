@extends('layouts.master')
@section('top-script')
<style>
	body {
		background-color: black;
		color: white;
	}
</style>
@stop

@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3 text-center">
			<form class="form-horizontal" method="POST" action="{{{action('HomeController@setname')}}}">
				<div class="form-group" id="nameform">
					<label class="control-label" for="name"><h3>Brave Traveller, enter thy name</h3></label>
					<input class="form-control" type="text" name="name">
					<button class="btn btn-secondary">Continue</button>
				</div>
			</form>
		</div>
	</div>
</div>
@stop

@section('bottom-script')
<script type="text/javascript">
"Use Strict";

$("#nameform").animate({
	opacity: 0.1
},500).animate({
	opacity: 0.2
},500).animate({
	opacity: 0.3
},500).animate({
	opacity: 0.4
},500).animate({
	opacity: 0.5
},500).animate({
	opacity: 0.6
},500).animate({
	opacity: 0.7
},500).animate({
	opacity: 0.8
},500).animate({
	opacity: 0.9
},500).animate({
	opacity: 1
},500);
</script>
@stop