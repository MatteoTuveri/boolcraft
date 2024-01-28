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
                <h2 class="text-center"> Add new item:</h2>
                <form action="{{ route('admin.items.store') }}" method="POST" enctype="multipart/form-data">
                
                    @csrf
                    
                    <label for="name">Name:</label>
                    <input id="name" value="{{ old('name') }}" type="text" name="name"
                        class="mb-3 form-control @error('name') is-invalid @enderror">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="description">Description:</label>
                    <textarea id="description" type="text" name="description"
                        class="mb-3 form-control @error('description') is-invalid @enderror"></textarea>
                    @error('description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="category">category:</label>
                    <input id="category" value="{{ old('category') }}" type="text" name="category"
                        class="mb-3 form-control @error('category') is-invalid @enderror" >
                    @error('category')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="type">type:</label>
                    <input id="type" value="{{ old('type') }}" type="text" name="type"
                        class="mb-3 form-control @error('type') is-invalid @enderror">
                    @error('type')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="weight">weight:</label>
                    <input id="weight" value="{{ old('weight') }}" type="text" name="weight"
                        class="mb-3 form-control @error('weight') is-invalid @enderror" >
                    @error('weight')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="cost">cost:</label>
                    <input id="cost" value="{{ old('cost') }}" type="text" name="cost"
                        class="mb-3 form-control @error('cost') is-invalid @enderror">
                    @error('cost')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    
                    <div class="mb-3">
                        <label for="damage_dice">damage dice</label>
                        <select name="damage_dice" id="damage_dice">
                            <option value="">scegli il dado del danno</option>
                            <option value="0" {{ old('damage_dice') == '0' ? 'selected' : '' }}>0</option>
                            <option value="1d4" {{ old('damage_dice') == '1d4' ? 'selected' : '' }}>1d4</option>
                            <option value="2d4" {{ old('damage_dice') == '2d4' ? 'selected' : '' }}>2d4</option>
                            <option value="3d4" {{ old('damage_dice') == '3d4' ? 'selected' : '' }}>3d4</option>
                            <option value="4d4" {{ old('damage_dice') == '4d4' ? 'selected' : '' }}>4d4</option>
                            <option value="1d6" {{ old('damage_dice') == '1d6' ? 'selected' : '' }}>1d6</option>
                            <option value="2d6" {{ old('damage_dice') == '2d6' ? 'selected' : '' }}>2d6</option>
                            <option value="3d6" {{ old('damage_dice') == '3d6' ? 'selected' : '' }}>3d6</option>
                            <option value="1d8" {{ old('damage_dice') == '1d8' ? 'selected' : '' }}>1d8</option>
                            <option value="2d8" {{ old('damage_dice') == '2d8' ? 'selected' : '' }}>2d8</option>
                            <option value="1d10" {{ old('damage_dice') == '1d10' ? 'selected' : '' }}>1d10</option>
                            <option value="1d12" {{ old('damage_dice') == '1d12' ? 'selected' : '' }}>1d12</option>
                        </select>
                        @error('damage_dice')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="image">image</label>
                        <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" id="image">
                        @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-success"><i class="fa-solid fa-plus"></i></button>
                </form>
            </div>
        </div>

    </div>
@endsection
