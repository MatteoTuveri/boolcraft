
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
                <form action="{{ route('admin.characters.store') }}" method="POST">

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
                    <textarea id="description"  value="{{ old('description') }}" type="text" name="description"
                        class="mb-3 form-control @error('description') is-invalid @enderror"></textarea>
                    @error('description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                        <label for="attack">Attack</label>
                        <input id="attack" value="{{ old('attack') }}" type="number" name="attack" class="mb-3 form-control @error('attack') is-invalid @enderror">
                    @error('attack')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <label for="defence">Defense</label>
                    <input id="defence" value="{{ old('defence') }}" type="number" name="defence" class="mb-3 form-control @error('defence') is-invalid @enderror">
                    @error('defence')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <label for="speed">Speed</label>
                    <input id="speed" value="{{ old('speed') }}" type="number" name="speed" class="mb-3 form-control @error('speed') is-invalid @enderror">
                    @error('speed')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <label for="life">Life</label>
                    <input id="life" value="{{ old('life') }}" type="number" name="life" class="mb-3 form-control @error('life') is-invalid @enderror">
                    @error('life')
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
