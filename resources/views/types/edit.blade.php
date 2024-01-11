@extends('layouts.app')
@section('content')
    <section class="container">

        <a href="{{ route('types.index') }}" class="mx-1">Types</a>
        <a href="{{ route('items.index') }}" class="mx-1">Items</a>
        <a href="{{ route('characters.index') }}" class="mx-1">Characters</a>
    </section>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <h2 class="text-center"> Editing {{ $type->name }}</h2>
                <form action="{{ route('types.update', $type->id) }}" method="POST">
                    {{-- token --}}
                    @csrf
                    @method('PUT')
                    <label for="name">Name:</label>
                    <input id="name" value="{{ $type->name }}" type="text" name="name"
                        class="mb-3 form-control @error('name') is-invalid @enderror" required>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <label for="description">Description:</label>
                    <textarea id="description" type="text" name="description"
                        class="mb-3 form-control @error('description') is-invalid @enderror">{{ $type->description }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror


                    <button type="submit" class="btn btn-success"><i class="fa-solid fa-plus"></i></button>
                </form>
            </div>
        </div>

    </div>
@endsection
