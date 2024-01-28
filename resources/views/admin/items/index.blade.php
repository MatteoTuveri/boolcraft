@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>Items</h1>
        <a href="{{ route('admin.types.index') }}" class="mx-1">Types</a>
        <a href="{{ route('admin.items.index') }}" class="mx-1">Items</a>
        <a href="{{ route('admin.characters.index') }}" class="mx-1">Characters</a>
    </section>
    <div class="container">
        <div class="text-center"><a href="{{ route('admin.items.create') }}" >add new item</a></div>
        <table class="table table-hover">
            <thead>
                <tr class="text-center">
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">View Details</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                    <tr class="text-center">
                        <td>
                            @if ($item->image)
                                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}"
                                    class="img-card">
                            @else
                                <img src="https://www.worldofleveldesign.com/categories/ue4/images/012-ue4-crash-course-86.jpg"
                                    alt="{{ $item->name }}" class="img-card">
                            @endif
                        </td>
                        <th>{{ $item->name }}</th>
                        <td class="">
                            <a class="btn btn-primary" href=" {{ route('admin.items.show', $item->id) }}"><i
                                    class="fa-regular fa-eye"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class=" py-5 d-flex justify-content-center">
            <button class="btn btn-outline-light"><a href="{{ route('admin.items.create') }}"><i
                        class="fa-solid fa-plus"></i>Add new item</a></button>
        </div>
    </div>
@endsection
