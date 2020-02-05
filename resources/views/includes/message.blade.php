@if(Session('success'))
<div class="alert bg-primary fade in">
	<a href="#" class="close" data-dismiss="alert">×</a>
	{{ Session('success') }}
</div>
@endif

@if($errors->any())
	@foreach($errors->all() as $error)
	<div class="alert bg-danger fade in">
		<a href="#" class="close" data-dismiss="alert">×</a>
		{{ $error }}
	</div>
	@endforeach
@endif

