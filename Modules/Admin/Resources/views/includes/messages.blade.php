@if(count($errors)>0)
	<p class="alert alert-danger message">

	<strong>Whoops!</strong> <br>
		@foreach($errors->all() as $error)
			<strong><i class="fa fa-warning text-danger" aria-hidden="true"></i></strong>{{ $error }}<br>
		@endforeach
	</p>
@endif

@if(session()->has('message'))
	<p class="alert alert-success">{{ session('message') }}</p>
@endif
