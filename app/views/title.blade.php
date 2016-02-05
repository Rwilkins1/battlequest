@extends('layouts.master')
@section('top-script')
<style>
	body {
		background-color: black;
		color: white;
	}
	.firsttitle {
		font-size: 40px;
		opacity: 0;
	}
	.secondtitle {
		font-size: 50px;
		margin-top: 20%;
		opacity: 0;
	}
	.thirdtitle {
		font-size: 350px;
		opacity: 0;
	}
	.fourthtitle {
		font-size: 100px;
		opacity: 0;
	}
</style>
@stop

@section('content')
<div class="container-fluid text-center">
	<div class="row">
		<div class="col-lg-12">
			<span class="firsttitle">Reagan Wilkins presents...</span><br><br><br><br><br><br>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<span class="secondtitle">An original game...</span>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<span class="fourthtitle">Battle </span><span class="thirdtitle">3</span><span class="fourthtitle">Quest</span>
		</div>
	</div>
</div>
<form id="nextpage" method="POST" action="{{{action('HomeController@startgame')}}}">
	<input type="hidden">
</form>
@stop

@section('bottom-script')
<script>
"Use Strict";
var audio = new Audio('/audio/battlequestopening.wav');
var number = 0;
function firsttitle()
{
	$(".firsttitle").animate({
		opacity: 0.1
	},2000).animate({
		opacity: 0.2
	},2000).animate({
		opacity: 0.3
	},2000).animate({
		opacity: 0.4
	},2000).animate({
		opacity: 0.5
	},2000).animate({
		opacity: 0.6
	},2000).animate({
		opacity: 0.7
	},2000).animate({
		opacity: 0.8
	},2000).animate({
		opacity: 0.9
	},2000).animate({
		opacity: 1
	},2000);
	
}

function secondtitle()
{
	$(".secondtitle").animate({
		opacity: 0.1
	},1000).animate({
		opacity: 0.2
	},1000).animate({
		opacity: 0.3
	},1000).animate({
		opacity: 0.4
	},1000).animate({
		opacity: 0.5
	},1000).animate({
		opacity: 0.6
	},1000).animate({
		opacity: 0.7
	},1000).animate({
		opacity: 0.8
	},1000).animate({
		opacity: 0.9
	},1000).animate({
		opacity: 1
	},1000);
}

function thirdtitle()
{
	$(".thirdtitle").animate({
		opacity: 0.1
	},800).animate({
		opacity: 0.2
	},800).animate({
		opacity: 0.3
	},800).animate({
		opacity: 0.4
	},800).animate({
		opacity: 0.5
	},800).animate({
		opacity: 0.6
	},800).animate({
		opacity: 0.7
	},800).animate({
		opacity: 0.8
	},800).animate({
		opacity: 0.9
	},800).animate({
		opacity: 1
	},800);
}

function fourthtitle()
{
	$(".fourthtitle").animate({
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
}

function runtitle()
{
	firsttitle();
	var go = setInterval(function() {
		if($(".firsttitle").css("opacity") == 1) {
			secondtitle();
			clearInterval(go);
			runsecondtitle();
		} else {
		}
	});
}

function runsecondtitle()
{
	var anothergo = setInterval(function() {
		if($(".secondtitle").css("opacity") == 1) {
			clearInterval(anothergo);
			runbigtitle();
		} else {
		}
	});
}
function runbigtitle()
{
	thirdtitle();
	var newgo = setInterval(function() {
		if($(".thirdtitle").css("opacity") == 1) {
			fourthtitle();
			clearInterval(newgo);
			checklasttitle();
		} else {
		}
	});
}
function checklasttitle()
{
	var lastgo = setInterval(function() {
		if($(".fourthtitle").css("opacity") == 1) {
			clearInterval(lastgo);
			$("#nextpage").submit();
		} else {

		}
	});
}
audio.play();
runtitle();

</script>
@stop