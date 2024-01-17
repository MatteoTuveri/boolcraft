@php
  $type = $data['type'][0];  
  $item = $data['item'][0];  
  $character = $data['character'][0]; 
@endphp
@extends('layouts.app')
@section('content')
<h1 class="text-center mb-3">Home</h1>
    <section class="container d-flex justify-content-center">
        <div class="mx-1">
            <div class="card d-flex-column align-items-center" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body d-flex-column">
                        <h5 class="card-title text-center">{{$type->name}}</h5>
                        <a href="{{ route('admin.types.index') }}" class="btn btn-primary">Go to types</a>
                    </div>
            </div>
        </div>
        <div class="mx-1">
            <div class="card d-flex-column align-items-center" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body d-flex-column">
                        <h5 class="card-title text-center">{{$item->name}}</h5>
                        <a href="{{ route('admin.items.index') }}" class="btn btn-primary">Go to items</a>
                    </div>
            </div>
        </div>
        <div class="mx-1">
            <div class="card d-flex-column align-items-center" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body d-flex-column">
                        <h5 class="card-title text-center">{{$character->name}}</h5>
                        <a href="{{ route('admin.characters.index') }}" class="btn btn-primary">Go to characters</a>
                    </div>
            </div>
        </div>

    </section>
@endsection
