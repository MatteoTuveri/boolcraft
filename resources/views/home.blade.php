@php
    $type = $data['type'][0];
    $item = $data['item'][0];
    $character = $data['character'][0];
    $baseImgUrl = 'http://127.0.0.1:8000/storage/'
@endphp
@extends('layouts.app')
@section('content')
    <h1 class="text-center mb-4 mt-2 text-uppercase">Home</h1>
    <section class="container d-flex gap-3 justify-content-center">
        <div class="mx-1">
            <div class="card d-flex-column align-items-center" style="width:18rem;">
                <div class="home-card">
                    @if ($type->image)
                        <img src="{{$baseImgUrl . $type->image }}" class="card-img-top" alt="{{ $type->name }}">
                        @else
                        <img src="https://www.worldofleveldesign.com/categories/ue4/images/012-ue4-crash-course-86.jpg" class="card-img-top" alt="{{ $type->name }}">
                    @endif
                </div>

                <div class="card-body d-flex-column">
                    <h5 class="card-title text-center">{{ $type->name }}</h5>
                    <a href="{{ route('admin.types.index') }}" class="btn btn-primary">Go to types</a>
                </div>
            </div>
        </div>
        <div class="mx-1">
            <div class="card d-flex-column align-items-center" style="width: 18rem;">
                <div class="home-card">
                    @if ($item->image)
                        <img src="{{ $baseImgUrl . $item->image }}" class="card-img-top" alt="{{ $item->name }}">
                        @else
                        <img src="https://www.worldofleveldesign.com/categories/ue4/images/012-ue4-crash-course-86.jpg" class="card-img-top" alt="{{ $item->name }}">
                    @endif
                </div>

                <div class="card-body d-flex-column">
                    <h5 class="card-title text-center">{{ $item->name }}</h5>
                    <a href="{{ route('admin.items.index') }}" class="btn btn-primary">Go to items</a>
                </div>
            </div>
        </div>
        <div class="mx-1">
            <div class="card d-flex-column align-items-center" style="width: 18rem;">
                <div class="home-card">
                    @if ($character->image)
                        <img src="{{ asset('storage/' . $character->image) }}" class="card-img-top" alt="{{ $character->name }}">
                        @else
                        <img src="https://www.worldofleveldesign.com/categories/ue4/images/012-ue4-crash-course-86.jpg" class="card-img-top" alt="{{ $character->name }}">
                    @endif
                </div>
                <div class="card-body d-flex-column">
                    <h5 class="card-title text-center">{{ $character->name }}</h5>
                    <a href="{{ route('admin.characters.index') }}" class="btn btn-primary">Go to characters</a>
                </div>
            </div>
        </div>

    </section>
@endsection
