@extends('layouts.app')
@section('content')
<!-- <div class="container">
    <div class="row">
        @foreach ($characters as $character)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Name: {{ $character->name }}</h5>
                        <p class="card-text">Description: {{ $character->description }}</p>
                        <p class="card-text">Attack Power: {{ $character->attack }}</p>
                        <p class="card-text">Defense Power: {{ $character->defence }}</p>
                        <p class="card-text">Speed: {{ $character->speed }}</p>
                        <p class="card-text">Life: {{ $character->life }}</p>
                    </div>
                    <div>
                        {{ $character->type->name }}
                    </div>
                    <a class="btn btn-primary" href=" {{ route('admin.characters.show', $character->id) }}">Details</a>
                </div>
            </div>
            <hr>
        @endforeach
        <div class=" py-5 d-flex justify-content-center">
            <button class="btn btn-outline-light"><a href="{{ route('admin.characters.create') }}"><i class="fa-solid fa-plus"></i>Add new character</a></button>
        </div>
    </div>
</div> -->
<div class="container">
    <table class="table table-hover">
        <thead>
            <tr class="text-center">
            <th scope="col">Image</th>
            <th scope="col">Name</th>
            <th scope="col">View Details</th>
            </tr>
    </thead>
        <tbody>
        @foreach ($characters as $character)
            <tr class="text-center">
                <td>
                        @if ($character->image)
                            <img src="{{asset('storage/'. $character->image)}}" alt="{{ $character->name }}" class="img-card">
                        @else
                            <img src="https://www.worldofleveldesign.com/categories/ue4/images/012-ue4-crash-course-86.jpg" alt="{{ $character->name }}" class="img-card">
                        @endif
                </td>
                <th>{{ $character->name }}</th>
                <td class="d-flex align-items-center justify-content-center">
                    <a class="btn btn-primary" href=" {{ route('admin.characters.show', $character->id) }}"><i class="fa-regular fa-eye"></i></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class=" py-5 d-flex justify-content-center">
            <button class="btn btn-outline-light"><a href="{{ route('admin.characters.create') }}"><i class="fa-solid fa-plus"></i>Add new character</a></button>
    </div>
</div>
@endsection

