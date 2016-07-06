@extends('layouts.app')

@section('content')

@include('includes.header')
<div class="container">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 m-t">
<h1>About</h1>
<p class="subtitle">About me, who I am, and other stuff</p>
</div></div>

</div>
<div class="spacer-50"></div>

<div class="container m-y">
<div class="col-md-12">
	<img src="{{ asset('/img/ben.png') }}" class="img-circle img-responsive col-md-2 col-lg-2 col-sm-4 col-xs-4 m-x m-y">
	<p>This site is a collection of my own work. I started producing videos on Latin grammar and ancient culture in 2011, with over a million views. My goal is to make learning Latin easier than it normally is, and to provide students and teachers alike with resources for the 21st century. I have also created <a href="http://www.hexameter.co">hexameter.co</a>, a site devoted to helping students practice scanning lines of ancient hexameter poetry.</p>
	<p>I am Ben Johnson, and I have taught Latin at a public school in Maine for 13 years. I have a bachelor's degree in classics from Cornell University and a master's from the University of Florida. My own interests are broad, ranging from technology to the ancient world. You should be able to see this in the posts on this site.</p>
	<p>All views expressed on this site are my own, as are all of the videos.</p>
	<hr>
	<div class="col-md-12 text-center m-b">
		<h3>Connect with Me</h3>
	</div>
	<div class="col-md-3 col-sm-6 col-xs-12 text-center m-b">
		<a href="https://www.facebook.com/benjamin.johnson1"><span class="icon icon-facebook icon-size"></span></a>
	</div>
	<div class="col-md-3 col-sm-6 col-xs-12 text-center m-b">
		<a href="https://www.twitter.com/latintutorial"><span class="icon icon-twitter icon-size"></span></a>
	</div>
	<div class="col-md-3 col-sm-6 col-xs-12 text-center m-b">
		<a href="https://www.youtube.com/user/latintutorial"><span class="icon icon-youtube icon-size"></span></a>
	</div>
	<div class="col-md-3 col-sm-6 col-xs-12 text-center m-b">
		<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=DUUHVP6N29GM2"><span class="icon icon-paypal icon-size"></span></a>
	</div>
	
</div>

</div>
<div class="spacer-50"></div>

@stop