@extends('layouts.app')
@section('content')
<!-- <div class="container">
    <div class="row">
        @foreach ($items as $item)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Name: {{ $item->name }}</h5>
                        <p class="card-text">Description: {{ $item->description }}</p>
                        <p class="card-text">category: {{ $item->category }}</p>
                        <p class="card-text">type: {{ $item->type }}</p>
                        <p class="card-text">weight: {{ $item->weight }}</p>
                        <p class="card-text">cost: {{ $item->cost }}</p>
                        <p><a href="{{route('admin.items.show', $item->id)}}">SHOW</a></p>
                    </div>
                </div>
            </div>
            <hr>
        @endforeach
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
        @foreach ($items as $item)
            <tr class="text-center">
                <td>
                        @if ($item->image)
                            <img src="{{asset('storage/'. $item->image)}}" alt="{{ $item->name }}" class="img-card">
                        @else
                            <img src="https://www.worldofleveldesign.com/categories/ue4/images/012-ue4-crash-course-86.jpg" alt="{{ $item->name }}" class="img-card">
                        @endif
                </td>
                <th>{{ $item->name }}</th>
                <td class="d-flex align-items-center justify-content-center">
                    <a class="btn btn-primary" href=" {{ route('admin.items.show', $item->id) }}"><i class="fa-regular fa-eye"></i></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class=" py-5 d-flex justify-content-center">
            <button class="btn btn-outline-light"><a href="{{ route('admin.items.create') }}"><i class="fa-solid fa-plus"></i>Add new item</a></button>
    </div>
</div>
@endsection
