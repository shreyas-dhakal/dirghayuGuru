<x-app-layout>
    <div class="container-fluid">

        <h1 class="text-2xl font-bold mb-4">Edit a Package</h1>
        <form method="POST" action="{{ route('package.update', ['package' => $package]) }}" class="card-body">
            @csrf
            @method('put')
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" id="title" name="title" placeholder="Title" value="{{ $package->title }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            </div>
            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <input type="text" id="description" name="description" placeholder="Description" value="{{ $package->description }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            </div>        
            <div class="mb-4">
                <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                <input type="text" id="price" name="price" placeholder="Price" value="{{ $package->price }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            </div>
            <div>
                <input type="submit" value="Update Package" class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
            </div>
        </form>
    </div>
</x-app-layout>
