@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
		<h2>{{ $item->title }}</h2>
		<div>{{ $item->content }}</div>
		<div>{{ $item->created_at }}</div>
		<br />
		<!-- Provjera da li je user vlasnik itema -->
		@if ( auth()->id() == $item->user_id)
		<div>
			<a href="{{ url('item/'.$item->id.'/del') }}" class="btn btn-danger">Obriši</a></div>
		</div>
		@endif
    </div>
</div>
@endsection
