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
                <a href="{{route('department.index')}}">Departments</a><br>
                <a href="{{route('doctor.index')}}">Doctors</a><br>
                <a href="{{route('package.index')}}">Packages</a><br>
                <a href="{{route('slider.index')}}">Sliders</a><br>
                <a href="{{route('testimonial.index')}}">Testimonials</a><br>
                <a href="{{route('sitesetting.index')}}">Site Settings</a><br>         
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
