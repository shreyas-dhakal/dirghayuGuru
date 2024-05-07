<x-app-layout>         
    <div class="container-fluid">

    <h1 class="text-2xl font-bold mb-4">Create a Testimonial</h1>
    <div>
        @if($errors->any())
        <ul class="text-red-500">
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                
            @endforeach
        </ul>
        @endif
    </div>
    <form method="POST" action="{{route('testimonial.store')}}" class="max-w-md bg-white shadow-md rounded px-8 py-6">
        @csrf
        @method('post')
        <div class="mb-4">
            <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title</label>
            <input type="text" name="title" id="title" placeholder="Title" class="block w-full px-4 py-2 mt-1 text-gray-700 bg-white border border-gray-300 rounded-md focus:border-blue-500 focus:outline-none focus:ring">
        </div>
        <div class="mb-4">
            <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
            <input type="text" name="description" id="description" placeholder="Description" class="block w-full px-4 py-2 mt-1 text-gray-700 bg-white border border-gray-300 rounded-md focus:border-blue-500 focus:outline-none focus:ring">
        </div>
        <div class="mb-4">
            <label for="designation" class="block text-gray-700 text-sm font-bold mb-2">Designation</label>
            <input type="text" name="designation" id="designation" placeholder="Designation" class="block w-full px-4 py-2 mt-1 text-gray-700 bg-white border border-gray-300 rounded-md focus:border-blue-500 focus:outline-none focus:ring">
        </div>
        <div class="mb-4">
            <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Image</label>
            <input type="file" name="image" id="image" class="block w-full px-4 py-2 mt-1 text-gray-700 bg-white border border-gray-300 rounded-md focus:border-blue-500 focus:outline-none focus:ring">
        </div>      
        <div class="mb-4">
            <input type="submit" value="Save Testimonial" class="bg-indigo-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
        </div>
    </form>
    </div>
</x-app-layout>
