@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>Characters</h1>
        <a href="{{ route('admin.types.index') }}" class="mx-1">Types</a>
        <a href="{{ route('admin.items.index') }}" class="mx-1">Items</a>
        <a href="{{ route('admin.characters.index') }}" class="mx-1">Characters</a>
    </section>
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
                                <img src="{{ asset('storage/' . $character->image) }}" alt="{{ $character->name }}"
                                    class="img-card">
                            @else
                                <img src="https://www.worldofleveldesign.com/categories/ue4/images/012-ue4-crash-course-86.jpg"
                                    alt="{{ $character->name }}" class="img-card">
                            @endif
                        </td>
                        <th>{{ $character->name }}</th>
                        <td class="">
                            <a class="btn btn-primary" href=" {{ route('admin.characters.show', $character->id) }}"><i
                                    class="fa-regular fa-eye"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class=" py-5 d-flex justify-content-center">
            <button class="btn btn-outline-light"><a href="{{ route('admin.characters.create') }}"><i
                        class="fa-solid fa-plus"></i>Add new character</a></button>
        </div>
    </div>
@endsection
