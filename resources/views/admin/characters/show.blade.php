@extends('layouts.app')
@section('content')
<section class="container">
    <h1>{{ $character->name }}</h1>
    <a href="{{ route('admin.types.index') }}" class="mx-1">Types</a>
    <a href="{{ route('admin.items.index') }}" class="mx-1">Items</a>
    <a href="{{ route('admin.characters.index') }}" class="mx-1">Characters</a>
</section>
<div class="container">

    <div class="row gy-3 py-4">
        <div class="col-12 col-md-6">
            <div class="card">

                @if ($character->image)
                <img src="{{asset('storage/'. $character->image)}}" alt="{{ $character->name }}" class="img-card">
                @else
                <img src="https://www.worldofleveldesign.com/categories/ue4/images/012-ue4-crash-course-86.jpg"
                    alt="{{ $character->name }}" class="img-card">
                @endif
            </div>
            <div class="card-body">
                <h5 class="card-title">Name: {{ $character->name }}</h5>
                <p class="card-text">Description: {{ $character->description }}</p>
                <p class="card-text">Attack Power: {{ $character->attack }}</p>
                <p class="card-text">Defense Power: {{ $character->defence }}</p>
                <p class="card-text">Speed: {{ $character->speed }}</p>
                <p class="card-text">Life: {{ $character->life }}</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6">
<!--         <h2 class="card-title mb-4">{{ $character->name }}</h2>

        <pre class="mb-4">{{ $character->description }}</pre> -->
        <div class="d-flex align-characters-center">
            <a class="btn btn-warning" href=" {{ route('admin.characters.edit', $character->id) }}"><i
                    class="fa-solid fa-pencil"></i></a>
            <form action="{{ route('admin.characters.destroy', $character->id) }}" method="post" class="mx-2">
                @csrf
                @method('DELETE')
                <button character="submit" class="btn btn-danger cancel-button"
                    data-item-title="{{ $character->name }}">
                    <i class="fa-solid fa-trash-can"></i>
                </button>
            </form>
        </div>
    </div>
</div>
<!--             <div class=" py-5 d-flex justify-content-center">
                <button class="btn btn-outline-light"><a href="{{ route('admin.characters.create') }}"><i
                            class="fa-solid fa-plus"></i>
                        Add new Character</a></button>
            </div> -->
@endsection