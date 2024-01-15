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
                </div>
            </div>
            <hr>
        @endforeach
    </div>
</div>
