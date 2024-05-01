<x-app-layout>   
    <div class="container-fluid">
    <div>
        @if(session()->has('success'))
            <div>
                {{ session('success') }}
            </div>
        @endif
    </div>
    <div>
        <div>
            <a href="{{ route('doctor.create') }}">Create a doctor</a>
        </div>
        <table border="1" class="table table-striped">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Designation</th>
                <th>Image</th>
                <th>Description</th>
                <th>Department</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach ($doctors as $doctor)
                <tr>
                    <td>{{ $doctor->id }}</td>
                    <td>{{ $doctor->name }}</td>
                    <td>{{ $doctor->designation }}</td>
                    <td>{{ $doctor->image }}</td>
                    <td>{{ $doctor->description }}</td>
                    <td>{{ $doctor->department->name }}</td> <!-- Display department name instead of ID -->
                    <td>
                        <form action="{{ route('doctor.edit', ['doctor' => $doctor]) }}" method="GET">
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </form>                        
                    </td>
                    <td><form method="post" action="{{route('doctor.delete', ['doctor' => $doctor])}}">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    </div>
</div>
</x-app-layout>