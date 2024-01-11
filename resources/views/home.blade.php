@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>Section title</h1>
        <a href="{{ route('types.index') }}" class="mx-1">Types</a>
        <a href="{{ route('items.index') }}" class="mx-1">Items</a>
        <a href="{{ route('characters.index') }}" class="mx-1">Characters</a>
    </section>
@endsection
