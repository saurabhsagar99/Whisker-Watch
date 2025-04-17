<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-bold text-3xl text-gray-800 leading-tight flex items-center">
                <span class="text-4xl mr-2">🐾</span> {{ __('Pet Companion Dashboard') }}
            </h2>
            <div class="text-sm text-gray-500">
                Welcome back, {{ Auth::user()->name }}!
            </div>
        </div>
    </x-slot>
    
    <div class="py-12 bg-gray-50 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            
          
            
            <!-- Profile Details -->
            <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 -mt-8 -mr-8 bg-blue-100 rounded-full opacity-70"></div>
                <div class="relative">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                        <span class="bg-blue-100 p-2 rounded-full mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </span>
                        Your Profile
                    </h3>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                        <div>
                            <p class="text-gray-600 mb-2 text-lg">Owner's Name</p>
                            <p class="text-gray-900 font-semibold text-xl">{{ Auth::user()->name }}</p>
                        </div>
                     
                    </div>
                </div>
            </div>
            
            <!-- Manage Pets -->
            <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 -mt-8 -mr-8 bg-green-100 rounded-full opacity-70"></div>
                <div class="relative">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                        <span class="bg-green-100 p-2 rounded-full mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.121 14.121L19 19m-7-7l7-7m-7 7l-2.879 2.879M12 12L9.121 9.121m0 5.758a3 3 0 10-4.243-4.243 3 3 0 004.243 4.243z" />
                            </svg>
                        </span>
                        Manage Your Pets
                    </h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <a href="{{ route('pets.index') }}" class="flex items-center p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors duration-300">
                            <div class="bg-blue-100 p-3 rounded-full mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-lg text-gray-900">View All Pets</h4>
                                <p class="text-gray-600">See and manage your registered pets</p>
                            </div>
                        </a>
                        
                        <a href="{{ route('pets.create') }}" class="flex items-center p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors duration-300">
                            <div class="bg-green-100 p-3 rounded-full mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-lg text-gray-900">Add New Pet</h4>
                                <p class="text-gray-600">Register a new furry family member</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Manage Reminders -->
            <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 -mt-8 -mr-8 bg-amber-100 rounded-full opacity-70"></div>
                <div class="relative">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                        <span class="bg-amber-100 p-2 rounded-full mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-amber-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </span>
                        Pet Care Reminders
                    </h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <a href="{{ route('reminders.index') }}" class="flex items-center p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors duration-300">
                            <div class="bg-blue-100 p-3 rounded-full mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-lg text-gray-900">View All Reminders</h4>
                                <p class="text-gray-600">Check your upcoming pet care schedule</p>
                            </div>
                        </a>
                        
                        <a href="{{ route('reminders.create') }}" class="flex items-center p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors duration-300">
                            <div class="bg-green-100 p-3 rounded-full mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-lg text-gray-900">Add New Reminder</h4>
                                <p class="text-gray-600">Schedule vaccinations, grooming or checkups</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            
           
            
        </div>
    </div>
</x-app-layout>