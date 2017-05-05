@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
		<h2>{{ $item->title }}</h2>
		<div>{{ $item->content }}</div>
		<div>{{ $item->created_at }}</div>
</div>
    </div>
</div>
@endsection
