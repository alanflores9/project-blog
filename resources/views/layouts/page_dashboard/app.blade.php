@component('master_dashboard')
		@include('layouts.share_dashbord.header')
		@include('layouts.page_dashboard.sidebar')

		<div class="content-wrapper">

		{{$slot}}

		</div>
		@include('layouts.share_dashbord.footer')
		
	
@endcomponent