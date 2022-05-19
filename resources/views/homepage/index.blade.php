@extends('layout-homepage')

@section('content')

	<video autoplay muted loop>
		<source src="{{asset('storage/homepage/vid1.mp4')}}" type="video/mp4" /><p>Your browser doesn't support HTML5 video. Here is
			a <a href="myVideo.mp4">link to the video</a> instead.</p>
	</video>

	<div id="wrapper">

		@include('homepage._side')

		<div id="content">
			<div id="welcome" class="translateInit translate">
				<h1>Filip&nbsp;Šramko</h1>
				<div>Mojim záujmom je pomáhať ľuďom, <br>v rámci mojich možností.</div>
			</div>
		</div>

	</div>

@endsection