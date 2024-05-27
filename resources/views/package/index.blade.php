<x-app-layout>   
    <div class="container-fluid">
        <h1 class="text-2xl font-bold mb-4">Packages</h1>
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
                    <th>Title</th>
                    <th>Description</th>
                    <th>Price</th>
                    <!-- Add fields 1 to 10 headers here -->
                    @for($i = 1; $i <= 10; $i++)
                        <th>Field {{ $i }}</th>
                    @endfor
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                @foreach ($packages as $package)
                    <tr>
                        <td>{{ $package->id }}</td>
                        <td>{{ $package->title }}</td>
                        <td>{{ $package->description }}</td>
                        <td>{{ $package->price }}</td>
                        <td>{{ $package->field_1 }}</td>
                        <td>{{ $package->field_2 }}</td>
                        <td>{{ $package->field_3 }}</td>
                        <td>{{ $package->field_4 }}</td>
                        <td>{{ $package->field_5 }}</td>
                        <td>{{ $package->field_6 }}</td>
                        <td>{{ $package->field_7 }}</td>
                        <td>{{ $package->field_8 }}</td>
                        <td>{{ $package->field_9 }}</td>
                        <td>{{ $package->field_10 }}</td>

                       
                        <td>
                            <form action="{{ route('package.edit', ['package' => $package]) }}" method="GET">
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </form>                        
                        </td>
                        <td>
                            <form method="post" action="{{ route('package.delete', ['package' => $package]) }}">
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
            <a href="{{ route('package.create') }}" class="btn btn-primary">Create a Package</a>
        </div>
    </div>
</x-app-layout>
