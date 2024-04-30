<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex">
            <!-- Sidebar -->
            <aside id="default-sidebar" class="w-64 h-screen transition-transform -translate-x-full sm:translate-x-0 bg-gray-50 dark:bg-gray-800">
                <div class="h-full px-3 py-4 overflow-y-auto">
                    <ul class="space-y-2 font-medium">
                        <li>
                            <a href="{{ route('department.index') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <span class="ms-3">Departments</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('doctor.index') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <span class="ms-3">Doctors</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('package.index') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <span class="ms-3">Packages</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('slider.index') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <span class="ms-3">Sliders</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('testimonial.index') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <span class="ms-3">Testimonials</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('sitesetting.index') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <span class="ms-3">Site Settings</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('user.index') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                <span class="ms-3">Users</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </aside>

            <!-- Dashboard Content -->
            <div class="p-4 sm:ml-64">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <h1>{{ __("You're logged in!") }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
