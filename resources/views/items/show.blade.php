@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>{{ $item->name }}</h1>
        <a href="{{ route('types.index') }}" class="mx-1">types</a>
        <a href="{{ route('items.index') }}" class="mx-1">Items</a>
        <a href="{{ route('characters.index') }}" class="mx-1">Characters</a>
    </section>


    <div class="">
        <div class="container">

            <div class="row gy-3 py-4">

                <div class="col-12 col-md-6">
                    <div class="card">

                        <div class="card-body">
                            <img style="width: 100%" src="https://www.worldofleveldesign.com/categories/ue4/images/012-ue4-crash-course-86.jpg"
                                alt="{{ $item->name }}" class="">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <h2 class="card-title mb-4">{{ $item->name }}</h2>

                    <pre class="mt-4">{{ $item->description }}</pre>
                    <a class="btn btn-primary" href=" {{ route('items.edit', $item->id) }}">item Modify</a>
                    <form action="{{ route('items.destroy', $item->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button item="submit" class="btn btn-danger cancel-button" data-item-title="{{ $item->name }}">
                            <i class="fa-solid fa-trash-can"></i>
                        </button>
                
                    </form>
                </div>


            </div>

            <div class=" py-5 d-flex justify-content-center">
                <button class="btn btn-outline-light"><a href="{{ route('items.create') }}"><i class="fa-solid fa-plus"></i> Add new item</a></button>
            </div>


        </div>
    @endsection
