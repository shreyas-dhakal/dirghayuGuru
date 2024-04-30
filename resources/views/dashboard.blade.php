<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1>{{ __("You're logged in!") }}</h1><br>
                    <div class="sidebar">
                        <ul>
                            <li><a href="{{ route('department.index') }}">Departments</a></li>
                            <li><a href="{{ route('doctor.index') }}">Doctors</a></li>
                            <li><a href="{{ route('package.index') }}">Packages</a></li>
                            <li><a href="{{ route('slider.index') }}">Sliders</a></li>
                            <li><a href="{{ route('testimonial.index') }}">Testimonials</a></li>
                            <li><a href="{{ route('sitesetting.index') }}">Site Settings</a></li>
                            <li><a href="{{ route('user.index') }}">Users</a></li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
