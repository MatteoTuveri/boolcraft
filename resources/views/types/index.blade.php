<div>Bella pe i Types</div>
<div class="">
    <div class="container">

        <div class="row gy-3 py-4">





            @foreach ($types as $type)
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="card">

                        <div class="card-body">
                            <h5 class="card-title">{{ $type->name }}</h5>
                            <a class="btn btn-primary" href=" {{ route('types.show', $type->id) }}">Type Details</a>
                            <p>{{ $type->description }}</p>
                            <form action="{{ route('types.destroy', $type->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger cancel-button"
                                    data-item-title="{{ $type->name }}"> <i class="fa-solid fa-trash-can"></i>
                                </button>

                            </form>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

        <div class=" py-5 d-flex justify-content-center">
            <button class="btn btn-outline-light"><a href="{{ route('types.create') }}"><i class="fa-solid fa-plus"></i>
                    Add new type</a></button>
        </div>


    </div>
