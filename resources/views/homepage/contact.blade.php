@extends('layout-homepage')

@section('content')

	<video autoplay muted loop>
		<source src="{{asset('storage/homepage/vid3.mp4')}}" type="video/mp4" /><p>Your browser doesn't support HTML5 video. Here is
			a <a href="myVideo.mp4">link to the video</a> instead.</p>
	</video>

	<div id="wrapper">

		@include('homepage._side')

		<div id="content">
			<div id="contact" class="translateInit-2 translate">
				<h1>Kontakt</h1>
				<div><i class="fa fa-at"> </i>&nbsp;produktivec@gmail.com</div>
				<div><i class="fa fa-phone"> </i> 0908 833 487</div>
				<div><span class="fa-brands fa-linkedin"></span> <a target="_blank" href="https://www.linkedin.com/in/filip-%C5%A1ramko-07013923b/?fbclid=IwAR0U8y3WUV1UYQPiquVL9PdakkhHbBz7zupHnWeVNY9gr2yQPDO6OKJbp2k">LinkedIn</a></div>
				<div>G <a target="_blank" href="https://growni.sk/dobrovolnictvo/dobrovolnici/QzMpHxrk73MMe3YF80r1bQpCvkJ2?fbclid=IwAR0G3XGi_2bl7ZLP8Eom3PwDps8fnVjfCjE98_ORwUDKcoM7_-rmkFukj8g">Growni dobrovoľník</a></div>
				<div>G <a target="_blank" href="https://growni.sk/mentor/filip-sramko?names=Filip%20%C5%A0ramko&page=1">Growni mentor</a></div>
			</div>
		</div>

	</div>

@endsection