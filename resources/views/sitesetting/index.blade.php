<x-app-layout>   
    <div class="container-fluid">
        <h1 class="text-2xl font-bold mb-4">Site Settings</h1>
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
                <th>Logo</th>
                <th>Name</th>
                <th>Address</th>
                <th>Email 1</th>
                <th>Email 2</th>
                <th>Phone Number 1</th>
                <th>Phone Number 2</th>
                <th>Image</th>
                <th>Link 1</th>
                <th>Link 2</th>
                <th>Link 3</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach ($sitesettings as $sitesetting)
            <tr>
                <td>{{$sitesetting->id}}</td>
                <td>{{$sitesetting->logo}}</td>
                <td>{{$sitesetting->name}}</td>
                <td>{{$sitesetting->address}}</td>
                <td>{{$sitesetting->email1}}</td>
                <td>{{$sitesetting->email2}}</td>
                <td>{{$sitesetting->phone_number1}}</td>
                <td>{{$sitesetting->phone_number2}}</td>
                <td>{{$sitesetting->image}}</td>
                <td>{{$sitesetting->link1}}</td>
                <td>{{$sitesetting->link2}}</td>
                <td>{{$sitesetting->link3}}</td>
                <td>
                    <form action="{{ route('sitesetting.edit', ['sitesetting' => $sitesetting]) }}" method="GET">
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>                        
                </td>
                <td><form method="post" action="{{route('sitesetting.delete', ['sitesetting' => $sitesetting])}}">
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
        <a href="{{ route('sitesetting.create') }}" class="btn btn-primary">Settings Entry</a>
    </div>
    </div>
</x-app-layout>