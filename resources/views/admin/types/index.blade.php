@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>Types</h1>
        <a href="{{ route('admin.types.index') }}" class="mx-1">Types</a>
        <a href="{{ route('admin.items.index') }}" class="mx-1">Items</a>
        <a href="{{ route('admin.characters.index') }}" class="mx-1">Characters</a>
    </section>
    <div class="container">
        <div class="row gy-3 py-4">
            @foreach ($types as $type)
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="card">

                        <div class="card-body">
                            @if ($type->image)
                                <img src="{{asset('storage/'. $project->image)}}" alt="{{ $type->name }}" class="img-card">
                            @else
                                <img src="https://www.worldofleveldesign.com/categories/ue4/images/012-ue4-crash-course-86.jpg" alt="{{ $type->name }}" class="img-card">
                            @endif
                            <h5 class="card-title">{{ $type->name }}</h5>
                            <a class="btn btn-primary" href=" {{ route('admin.types.show', $type->id) }}">Type Details</a>
                            <pre>{{ substr($type->description, 0, 200) . '...' }}</pre>
                            <form action="{{ route('admin.types.destroy', $type->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger cancel-button" data-item-title="{{ $type->name }}"> <i class="fa-solid fa-trash-can"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    <div class=" py-5 d-flex justify-content-center">
        <a class="btn btn-outline-light text-decoration-none" href="{{ route('admin.types.create') }}"><i class="fa-solid fa-plus"></i></a>
    </div>
@endsection
