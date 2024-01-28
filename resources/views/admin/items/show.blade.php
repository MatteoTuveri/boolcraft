@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>{{ $item->name }}</h1>
        <a href="{{ route('admin.types.index') }}" class="mx-1">types</a>
        <a href="{{ route('admin.items.index') }}" class="mx-1">Items</a>
        <a href="{{ route('admin.characters.index') }}" class="mx-1">Characters</a>
    </section>


    <div class="">
        <div class="container">

            <div class="row gy-3 py-4">

                <div class="col-12 col-md-6">
                    <div class="card">

                        
                            @if ($item->image)
                            <img style="width:100%" src="{{asset('storage/'.$item->image)}}" alt="{{$item->name}}">
                            @else
                            <img src="https://www.worldofleveldesign.com/categories/ue4/images/012-ue4-crash-course-86.jpg"
                            alt="{{ $item->name }}" class="img-card">
                            @endif
                        
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <h2 class="card-title mb-4">{{ $item->name }}</h2>

                    <p class="mt-4">Description: {{ $item->description }}</p>
                    <p class="card-text">Category: {{ $item->category }}</p>
                    <p class="card-text">Type: {{ $item->type }}</p>
                    <p class="card-text">Weight: {{ $item->weight }}</p>
                    <p class="card-text">Cost: {{ $item->cost }}</p>
                    <p class="card-text">damage dice: {{ $item->damage_dice }}</p>
                    <div class="d-flex align-items-center">
                        <a class="btn btn-warning" href=" {{ route('admin.items.edit', $item->id) }}"><i class="fa-solid fa-pencil"></i></a>
                        <form action="{{ route('admin.items.destroy', $item->id) }}" method="post" class="mx-2">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger cancel-button" data-item-title="{{ $item->name }}">
                                <i class="fa-solid fa-trash-can"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class=" py-5 d-flex justify-content-center">
                <button class="btn btn-outline-light"><a href="{{ route('admin.items.create') }}"><i class="fa-solid fa-plus"></i> Add new item</a></button>
            </div> 
        </div>
    @endsection
