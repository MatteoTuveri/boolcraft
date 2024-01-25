@extends('layouts.app')
@section('content')
    <section class="container">

        <a href="{{ route('admin.types.index') }}" class="mx-1">Types</a>
        <a href="{{ route('admin.items.index') }}" class="mx-1">Items</a>
        <a href="{{ route('admin.characters.index') }}" class="mx-1">Characters</a>
    </section>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <h2 class="text-center"> Editing {{ $type->name }}</h2>
                <form action="{{ route('admin.types.update', $type->id) }}" method="POST" enctype="multipart/form-data">
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
                    <textarea id="description" type="text" name="description" cols="30" rows="10"
                        class="mb-3 form-control @error('description') is-invalid @enderror">{{ $type->description }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <div class="d-flex">
                        <div class="media me-4">
                            <img class="shadow" width="150" src="{{ asset('storage/' . $type->image) }}"
                                alt="{{ $type->name }}">
                        </div>
                        <div class="mb-3">
                            <label for="image">Image</label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror" name="image"
                                id="image" value="{{ old('image', $type->image) }}">
                            @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>


                    <button type="submit" class="btn btn-success"><i class="fa-solid fa-plus"></i></button>
                </form>
            </div>
        </div>

    </div>
@endsection
