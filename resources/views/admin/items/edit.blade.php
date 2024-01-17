@extends('layouts.app')
@section('content')
    <section class="container">

        <a href="{{ route('admin.types.index') }}" class="mx-1">types</a>
        <a href="{{ route('admin.items.index') }}" class="mx-1">Items</a>
        <a href="{{ route('admin.characters.index') }}" class="mx-1">Characters</a>
    </section>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <h2 class="text-center"> Edit item {{$item->name}}:</h2>
                <form action="{{ route('admin.items.update', $item->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    
                    <label for="name">Name:</label>
                    <input id="name" value="{{ old('name'). $item->name }}" item="text" name="name"
                        class="mb-3 form-control @error('name') is-invalid @enderror" required>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="description">Description:</label>
                    <textarea id="description" item="text" name="description"
                        class="mb-3 form-control @error('description') is-invalid @enderror">{{ old('description'). $item->description }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="category">category:</label>
                    <input id="category" value="{{ old('category'). $item->category }}" item="text" name="category"
                        class="mb-3 form-control @error('category') is-invalid @enderror" required>
                    @error('category')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="type">type:</label>
                    <input id="type" value="{{ old('type'). $item->type  }}" item="text" name="type"
                        class="mb-3 form-control @error('type') is-invalid @enderror" required>
                    @error('type')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="weight">weight:</label>
                    <input id="weight" value="{{ old('weight'). $item->weight }}" item="text" name="weight"
                        class="mb-3 form-control @error('weight') is-invalid @enderror" required>
                    @error('weight')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="cost">cost:</label>
                    <input id="cost" value="{{ old('cost'). $item->cost }}" item="text" name="cost"
                        class="mb-3 form-control @error('cost') is-invalid @enderror" required>
                    @error('cost')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                    <button item="submit" class="btn btn-success"><i class="fa-solid fa-plus"></i></button>
                </form>
            </div>
        </div>

    </div>
@endsection
