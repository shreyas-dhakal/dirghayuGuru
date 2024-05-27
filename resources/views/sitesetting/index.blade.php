<x-app-layout>   
    <div class="container-fluid">
        <h1 class="text-2xl font-bold mb-4">Site Settings</h1>
        <div>
            @if(session()->has('success'))
                <div>
                    {{ session('success') }}
                </div>
            @endif
        </div>
        <div class="row">
            @foreach ($sitesettings as $sitesetting)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset($sitesetting->logo) }}" class="card-img-top" alt="Logo"><hr>
                    <div class="card-body">
                        <h5 class="card-title">{{ $sitesetting->name }}</h5><hr>
                        <p class="card-text">Address: {{ $sitesetting->address }}</p><hr>
                        <p class="card-text">Email 1: {{ $sitesetting->email1 }}</p><hr>
                        <p class="card-text">Email 2: {{ $sitesetting->email2 }}</p><hr>
                        <p class="card-text">Phone Number 1: {{ $sitesetting->phone_number1 }}</p><hr>
                        <p class="card-text">Phone Number 2: {{ $sitesetting->phone_number2 }}</p><hr>
                        <p class="card-text">Link 1: {{ $sitesetting->link1 }}</p><hr>
                        <p class="card-text">Link 2: {{ $sitesetting->link2 }}</p><hr>
                        <p class="card-text">Link 3: {{ $sitesetting->link3 }}</p><hr>
                        <img src="{{ asset($sitesetting->image) }}" class="card-img" alt="Image">
                        <form action="{{ route('sitesetting.edit', ['sitesetting' => $sitesetting]) }}" method="GET">
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </form>
                        <form method="post" action="{{ route('sitesetting.delete', ['sitesetting' => $sitesetting]) }}">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger mt-2">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div>
            <a href="{{ route('sitesetting.create') }}" class="btn btn-primary">Settings Entry</a>
        </div>
    </div>
</x-app-layout>
