<x-app-layout>   
    <div class="container-fluid">
        <h1 class="text-2xl font-bold mb-4">Information</h1>
    <div>
        @if(session()->has('success'))
            <div>
                {{ session('success') }}
            </div>
        @endif
    </div>
    <div>
        <table border="1" class="table table-striped">
            <tr>
                <th>ID</th>
                <th>Logo</th>
                <th>Footer</th>
                <th>Story Image</th>
                <th>Story</th>
                <th>Vision Image</th>
                <th>Vision</th>
                <th>Greeting Image</th>
                <th>Greeting</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach ($informations as $information)
                <tr>
                    <td>{{ $information->id }}</td>
                    <td><img src="{{asset($information->logo)}}" alt="" style="width: 70px; height:70px"></td>
                    <td>{{ $information->footer }}</td>
                    <td><img src="{{asset($information->story_image)}}" alt="" style="width: 70px; height:70px"></td>
                    <td>{{ $information->story }}</td>
                    <td><img src="{{asset($information->vision_image)}}" alt="" style="width: 70px; height:70px"></td>
                    <td>{{ $information->vision }}</td>
                    <td><img src="{{asset($information->greeting_image)}}" alt="" style="width: 70px; height:70px"></td>
                    <td>{{ $information->greeting }}</td>
                    <td>
                        <form action="{{ route('information.edit', ['information' => $information]) }}" method="GET">
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </form>                        
                    </td>
                    <td><form method="post" action="{{route('information.delete', ['information' => $information])}}">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        <a href="{{ route('information.create') }}" class="btn btn-primary">New Information Entry</a>
    </div>
    </div>
</div>
</x-app-layout>