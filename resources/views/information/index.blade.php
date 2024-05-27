<x-app-layout>   
    <div class="container-fluid">
        <h1 class="text-2xl font-bold mb-4">Information</h1>
        <div>
            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </div>
        <div class="row">
            @foreach ($informations as $information)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset($information->logo) }}" class="card-img-top" alt="Logo" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">ID: {{ $information->id }}</h5>
                            <p class="card-text"><strong>Footer:</strong> {{ $information->footer }}</p>
                            <hr>
                            <p class="card-text"><strong>Story Para 1:</strong> {{ $information->story1 }}</p><hr>
                            <p class="card-text"><strong>Story Para 2:</strong> {{ $information->story2 }}</p><hr>
                            <figure class="mb-4">
                                <img src="{{ asset($information->story_image) }}" alt="Story Image" class="img-fluid mb-2" style="height: 100px; object-fit: cover;">
                                <figcaption class="text-muted">Story Image</figcaption>
                            </figure>
                            <hr>
                            <p class="card-text"><strong>Vision:</strong> {{ $information->vision }}</p><hr>
                            <figure class="mb-4">
                                <img src="{{ asset($information->vision_image) }}" alt="Vision Image" class="img-fluid mb-2" style="height: 100px; object-fit: cover;">
                                <figcaption class="text-muted">Vision Image</figcaption>
                            </figure>
                            <hr><p class="card-text"><strong>Greeting:</strong> {{ $information->greeting }}</p><hr>
                            <figure class="mb-4">
                                <img src="{{ asset($information->greeting_image) }}" alt="Greeting Image" class="img-fluid mb-2" style="height: 100px; object-fit: cover;">
                                <figcaption class="text-muted">Greeting Image</figcaption>
                            </figure>
                            <div class="d-flex justify-content-between">
                                <form action="{{ route('information.edit', ['information' => $information]) }}" method="GET">
                                    <button type="submit" class="btn btn-primary btn-sm">Edit</button>
                                </form>
                                <form method="post" action="{{ route('information.delete', ['information' => $information]) }}">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <a href="{{ route('information.create') }}" class="btn btn-primary">New Information Entry</a>
    </div>
</x-app-layout>