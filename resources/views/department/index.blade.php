<x-app-layout>  
    <div class="container-fluid">
        <h1 class="text-2xl font-bold mb-4">Departments</h1>
        <div>
            @if(session()->has('success'))
                <div>
                    {{session('success')}}
                </div>
            @endif
        </div>
        <div>
            <table border="1" class="table table-striped">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                @foreach ($departments as $department)
                    <tr>
                        <td>{{$department->id}}</td>
                        <td>{{$department->name}}</td>
                        <td>{{$department->image}}</td>
                        <td>{{$department->description}}</td>
                        <td>
                            <form action="{{ route('department.edit', ['department' => $department]) }}" method="GET">
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </form>                        
                        </td>
                        <td><form method="post" action="{{route('department.delete', ['department' => $department])}}">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div>
            <a href="{{ route('department.create') }}" class="btn btn-primary">New Department Entry</a>
        </div>
    </div>
</x-app-layout>