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
					<span class="about-hover">Programovanie webových stránok</span>,
					<span class="about-hover">eshopov</span> a <span class="about-hover">custom riešení na mieru</span>,
					<span class="about-hover">správa serverov</span>,
				</p>
				<p class="mt-3 fs-30">
					<span class="about-hover">PHP</span>,
					<span class="about-hover">Mysql</span>,
					<span class="about-hover">Postgresql</span>,
					<span class="about-hover">Javascript</span>,

					...
				</p>
			</div>
		</div>

	</div>

@endsection