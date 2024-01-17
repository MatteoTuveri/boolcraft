@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>{{ $type->name }}</h1>
        <a href="{{ route('types.index') }}" class="mx-1">Types</a>
        <a href="{{ route('items.index') }}" class="mx-1">Items</a>
        <a href="{{ route('characters.index') }}" class="mx-1">Characters</a>
    </section>


    <div>Bella pe i Types</div>
    <div class="">
        <div class="container">

            <div class="row gy-3 py-4">






                <div class="col-12 col-md-6">
                    <div class="card">

                        <div class="card-body">
                            @if ($type->image)
                                <img src="{{asset('storage/'. $project->image)}}" alt="{{ $type->name }}" class="img-card">
                            @else
                                <img src="https://www.worldofleveldesign.com/categories/ue4/images/012-ue4-crash-course-86.jpg" alt="{{ $type->name }}" class="img-card">
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <h2 class="card-title mb-4">{{ $type->name }}</h2>

                    <pre class="mb-4">{{ $type->description }}</pre>
                    <a class="btn btn-primary" href=" {{ route('types.edit', $type->id) }}">Type Modify</a>
                    <form action="{{ route('types.destroy', $type->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger cancel-button" data-item-title="{{ $type->name }}">
                            <i class="fa-solid fa-trash-can"></i>
                        </button>

                    </form>
                </div>


            </div>

            <div class=" py-5 d-flex justify-content-center">
                <button class="btn btn-outline-light"><a href="{{ route('types.create') }}"><i
                            class="fa-solid fa-plus"></i>
                        Add new type</a></button>
            </div>


        </div>
    @endsection
