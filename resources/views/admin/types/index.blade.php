@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>Types</h1>
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
                @foreach ($types as $type)
                    <tr class="text-center">
                        <td>
                            @if ($type->image)
                                <img src="{{ asset('storage/' . $type->image) }}" alt="{{ $type->name }}"
                                    class="img-card">
                            @else
                                <img src="https://www.worldofleveldesign.com/categories/ue4/images/012-ue4-crash-course-86.jpg"
                                    alt="{{ $type->name }}" class="img-card">
                            @endif
                        </td>
                        <th>{{ $type->name }}</th>
                        <td class="">
                            <div class="">

                                <a class="btn btn-primary" href=" {{ route('admin.types.show', $type->id) }}"><i
                                        class="fa-regular fa-eye"></i></a>


                            </div>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>



        {{-- <div class="row gy-3 py-4">
        @foreach ($types as $type)
        <div class="col-12 col-md-4 col-lg-3">
            <div class="card">
                <div class="card-img items-img">
                    @if ($type->image)
                    <img src="{{asset('storage/'. $type->image)}}" alt="{{ $type->name }}" >
                    @else
                    <img src="https://www.worldofleveldesign.com/categories/ue4/images/012-ue4-crash-course-86.jpg"
                        alt="{{ $type->name }}" >
                    @endif
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $type->name }}</h5>
                    <div class="mb-2">{{ substr($type->description, 0, 200) . '...' }}</div>
                    <div class="d-flex align-types-center">
                        <a class="btn btn-primary" href=" {{ route('admin.types.show', $type->id) }}"><i
                                class="fa-regular fa-eye"></i></a>
                        <a class="btn btn-warning mx-2" href=" {{ route('admin.types.edit', $type->id) }}"><i
                                class="fa-solid fa-pencil"></i></a>
                        <form action="{{ route('admin.types.destroy', $type->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger cancel-button"
                                data-item-title="{{ $type->name }}">
                                <i class="fa-solid fa-trash-can"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div> --}}
        <div class=" py-5 d-flex justify-content-center">
            <button class="btn btn-outline-light"><a href="{{ route('admin.types.create') }}"><i
                        class="fa-solid fa-plus"></i>Add new type</a></button>
        </div>
    @endsection
