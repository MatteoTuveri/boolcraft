
@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>{{ $character->name }}</h1>
        <a href="{{ route('types.index') }}" class="mx-1">Types</a>
        <a href="{{ route('items.index') }}" class="mx-1">Items</a>
        <a href="{{ route('characters.index') }}" class="mx-1">Characters</a>
    </section>


    <div>Personaggio:</div>
    <div class="">
        <div class="container">

            <div class="row gy-3 py-4">






                <div class="col-12 col-md-6">
                    <div class="card">

                        <div class="card-body">
                            <img src="https://www.worldofleveldesign.com/categories/ue4/images/012-ue4-crash-course-86.jpg"
                                alt="{{ $character->name }}" class="">


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
                    <h2 class="card-title mb-4">{{ $character->name }}</h2>

                    <pre class="mb-4">{{ $character->description }}</pre>
                    <a class="btn btn-primary" href=" {{ route('characters.edit', $character->id) }}">character Modify</a>
                    <form action="{{ route('characters.destroy', $character->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger cancel-button" data-item-title="{{ $character->name }}">
                            <i class="fa-solid fa-trash-can"></i>
                        </button>

                    </form>
                </div>


            </div>

            <div class=" py-5 d-flex justify-content-center">
                <button class="btn btn-outline-light"><a href="{{ route('characters.create') }}"><i
                            class="fa-solid fa-plus"></i>
                        Add new Character</a></button>
            </div>


        </div>
    @endsection
