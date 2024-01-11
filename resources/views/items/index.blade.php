@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>Items</h1>
        <a href="{{ route('types.index') }}" class="mx-1">Types</a>
        <a href="{{ route('items.index') }}" class="mx-1">Items</a>
        <a href="{{ route('characters.index') }}" class="mx-1">Characters</a>
        <div class="row flex-wrap justify-content-start py-5">
        @foreach ($items as $item)
            <div class="col-2 d-flex flex-wrap justify-content-start px-2 mt-4">
                <div class="my-item-card">
                    <div class="my-item-box">
                        
                        <img src="https://pics.craiyon.com/2023-10-02/f856937355254f41b0f44143d65083bf.webp" alt="{{$item->name}}">
                        
                    </div>
                    <div class="d-flex">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="text-uppercase pt-3">
                                {{$item->name}}
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </section>
@endsection

