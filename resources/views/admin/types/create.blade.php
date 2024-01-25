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
                <h2 class="text-center"> Add new Type:</h2>
                <form action="{{ route('admin.types.store') }}" enctype="multipart/form-data"  method="POST">
                    {{-- token --}}
                    @csrf
                    <label for="name">Name:</label>
                    <input id="name" value="{{ old('name') }}" type="text" name="name"
                        class="mb-3 form-control @error('name') is-invalid @enderror" required>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <label for="description">Description:</label>
                    <textarea id="description" type="text" name="description" cols="30" rows="10"
                        class="mb-3 form-control @error('description') is-invalid @enderror"></textarea>
                    @error('description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <div class="d-flex">
                        <div class="me-3">
                            <img id="uploadPreview" width="100" src="https://via.placeholder.com/300x200">
                        </div>
                        <div class="mb-3">
                                <label for="image">Image</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" id="image" value="{{old('image')}}">
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
