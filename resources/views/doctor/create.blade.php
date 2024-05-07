<x-app-layout>         
    <div class="container-fluid">
    <h1 class="text-2xl font-bold mb-4">Create a Doctor</h1>
    <div class="mb-4">
        @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li class="text-red-600">{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="POST" action="{{ route('doctor.store') }}" enctype="multipart/form-data" class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">
        @csrf
        @method('post')
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" id="name" name="name" placeholder="Name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
        </div>
        <div class="mb-4">
            <label for="designation" class="block text-sm font-medium text-gray-700">Designation</label>
            <input type="text" id="designation" name="designation" placeholder="Designation" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
        </div>
        <div class="mb-4">
            <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
            <input type="file" id="image" name="image" class="form-input mt-1 block w-full rounded-md border-gray-300">
        </div>        
        <div class="mb-4">
            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
            <input type="text" id="description" name="description" placeholder="Description" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
        </div>
        <div class="mb-4">
            <label for="department_id" class="block text-sm font-medium text-gray-700">Department</label>
            <select id="department_id" name="department_id" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                <option value="">Select Department</option>
                @foreach($departments as $department)
                    <option value="{{ $department->id }}">{{ $department->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save doctor</button>
        </div>
    </form>
    </div>
</x-app-layout>