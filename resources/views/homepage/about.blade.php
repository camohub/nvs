@extends('layout-homepage')

@section('content')

	<video autoplay muted loop>
		<source src="{{asset('storage/homepage/vid2.mp4')}}" type="video/mp4" /><p>Your browser doesn't support HTML5 video. Here is
			a <a href="myVideo.mp4">link to the video</a> instead.</p>
	</video>

	<div id="wrapper">

		@include('homepage._side')

		<div id="content">
			<div id="about" class="translateInit-3 translate">
				<h1>O mne</h1>
				<p class="mt-3 fs-30">
					<span class="about-hover">SCRUM</span>,
					<span class="about-hover">Analýza dát</span>,
					<span class="about-hover">Modelovanie procesov</span>, ...
				</p>
				<p class="mt-3 fs-30">
					<span class="about-hover">Zodpovednosť</span>,
					<span class="about-hover">Precíznosť</span>,
					<span class="about-hover">Strategické myslenie</span>,
					<span class="about-hover">Komunikatívnosť</span>,
					<span class="about-hover">Otvorenosť</span>,
					<span class="about-hover">Empatia</span>, ...
				</p>
			</div>
		</div>

	</div>

@endsection