@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
			@if ( count($items) > 0)
				@foreach ($items as $item)
					<h2><a href="items/{{ $item->id }}">{{ $item->title }}</a></h2>
				@endforeach
			@else
				<h2>Nema zapisa u Blogu!</h2>
			@endif
		</div>
    </div>
</div>
@endsection