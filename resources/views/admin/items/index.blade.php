<div class="container">
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
</div>
