<x-app-layout>         
    <div class="container-fluid">

    <h1 class="text-2xl font-bold mb-4">Create a Package</h1>
    <div class="mb-4">
        @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li class="text-red-600">{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="POST" action="{{route('package.store')}}" class="card-body" enctype="multipart/form-data">
        @csrf
        @method('post')
        <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
            <input type="text" id="title" name="title" placeholder="Title" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
        </div>
        <div class="mb-4">
            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
            <input type="text" id="description" name="description" placeholder="Description" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
        </div>
        <div class="mb-4">
            <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
            <input type="text" id="price" name="price" placeholder="Price" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
        </div>    
    <div class="mb-4">
        <label for="field_1" class="block text-sm font-medium text-gray-700">Field 1</label>
        <input type="text" id="field_1" name="field_1" placeholder="Field 1" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
    </div>
    <div class="mb-4">
        <label for="field_2" class="block text-sm font-medium text-gray-700">Field 2</label>
        <input type="text" id="field_2" name="field_2" placeholder="Field 2" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
    </div>
    <div class="mb-4">
        <label for="field_3" class="block text-sm font-medium text-gray-700">Field 3</label>
        <input type="text" id="field_3" name="field_3" placeholder="Field 3" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
    </div>
    <div class="mb-4">
        <label for="field_4" class="block text-sm font-medium text-gray-700">Field 4</label>
        <input type="text" id="field_4" name="field_4" placeholder="Field 4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
    </div>
    <div class="mb-4">
        <label for="field_5" class="block text-sm font-medium text-gray-700">Field 5</label>
        <input type="text" id="field_5" name="field_5" placeholder="Field 5" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
    </div>
    <div class="mb-4">
        <label for="field_6" class="block text-sm font-medium text-gray-700">Field 6</label>
        <input type="text" id="field_6" name="field_6" placeholder="Field 6" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
    </div>
    <div class="mb-4">
        <label for="field_7" class="block text-sm font-medium text-gray-700">Field 7</label>
        <input type="text" id="field_7" name="field_7" placeholder="Field 7" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
    </div>
    <div class="mb-4">
        <label for="field_8" class="block text-sm font-medium text-gray-700">Field 8</label>
        <input type="text" id="field_8" name="field_8" placeholder="Field 8" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
    </div>
    <div class="mb-4">
        <label for="field_9" class="block text-sm font-medium text-gray-700">Field 9</label>
        <input type="text" id="field_9" name="field_9" placeholder="Field 9" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
    </div>
    <div class="mb-4">
        <label for="field_10" class="block text-sm font-medium text-gray-700">Field 10</label>
        <input type="text" id="field_10" name="field_10" placeholder="Field 10" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
    </div>

    
        <div>
            <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save Package</button>
        </div>
    </form>
    </div>
</x-app-layout>
