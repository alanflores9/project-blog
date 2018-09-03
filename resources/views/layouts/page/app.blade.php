@extends('layouts.share.head');
@extends('layouts.share.foot');
@component('master_guest')
	<div id="page">
		@include('layouts.share.head')
		{{$slot}}

		@include('layouts.share.foot')
	</div>
@endcomponent