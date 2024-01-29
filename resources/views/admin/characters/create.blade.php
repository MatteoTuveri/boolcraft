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
                <h2 class="text-center"> Add new Character:</h2>
                <form action="{{ route('admin.characters.store') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <label for="name">Name:</label>
                    <input id="name" type="text" name="name"
                        class="mb-3 form-control @error('name') is-invalid @enderror" required>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <label for="type">Type:</label>
                    <select name="type_id" id="type_id" class="mb-3 form-control @error('type_id') is-invalid @enderror">
                        @foreach ($types as $type)
                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                        @endforeach
                    </select>

                    @error('type')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <div class="mb-3">
                        <div class="form-group">
                            <h6>I tuoi oggetti</h6>
                            @foreach ($items as $item)
                                <div class="form-check @error('items') is-invalid @enderror">
                                    <input type="checkbox" class="form-check-input" name="items[]"
                                        value="{{ $item->id }}"
                                        {{ in_array($item->id, old('items', [])) ? 'checked' : '' }}>
                                    <label class="form-check-label">
                                        {{ $item->name }}
                                    </label>
                                </div>
                            @endforeach
                            @error('items')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <label for="description">Description:</label>
                        <textarea name="description" id="description" class="mb-3 form-control @error('description') is-invalid @enderror"></textarea>
                        @error('description')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <label for="attack">Attack</label>
                        <input id="attack" type="number" name="attack"
                            class="mb-3 form-control @error('attack') is-invalid @enderror">
                        @error('attack')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <label for="defence">Defense</label>
                        <input id="defence" type="number" name="defence"
                            class="mb-3 form-control @error('defence') is-invalid @enderror">
                        @error('defence')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <label for="speed">Speed</label>
                        <input id="speed" type="number" name="speed"
                            class="mb-3 form-control @error('speed') is-invalid @enderror">
                        @error('speed')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <label for="life">Life</label>
                        <input id="life" type="number" name="life"
                            class="mb-3 form-control @error('life') is-invalid @enderror">
                        @error('life')
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
                                <input type="file" class="form-control @error('image') is-invalid @enderror"
                                    name="image" id="image">
                                @error('image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success mt-3"><i class="fa-solid fa-plus"></i></button>
                </form>
            </div>
        </div>

    </div>
@endsection
