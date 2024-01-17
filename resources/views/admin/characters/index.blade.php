<div class="container">
    <div class="row">
        @foreach ($characters as $character)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Name: {{ $character->name }}</h5>
                        <p class="card-text">Description: {{ $character->description }}</p>
                        <p class="card-text">Attack Power: {{ $character->attack }}</p>
                        <p class="card-text">Defense Power: {{ $character->defence }}</p>
                        <p class="card-text">Speed: {{ $character->speed }}</p>
                        <p class="card-text">Life: {{ $character->life }}</p>
                    </div>
                    <a class="btn btn-primary" href=" {{ route('admin.characters.show', $character->id) }}">Details</a>
                </div>
            </div>
            <hr>
        @endforeach
        <div class=" py-5 d-flex justify-content-center">
            <button class="btn btn-outline-light"><a href="{{ route('admin.characters.create') }}"><i class="fa-solid fa-plus"></i>
                    Add new character</a></button>
        </div>
    </div>
</div>
