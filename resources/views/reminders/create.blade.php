<!-- Add in your head section -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">

<div class="container mx-auto p-6">
    <div class="bg-white rounded-lg shadow-lg p-6 max-w-md mx-auto transform transition-all hover:shadow-xl">
        <h1 class="text-2xl font-bold text-center mb-6 text-indigo-600">
            {{ isset($reminder) ? 'Edit Reminder' : 'Add Reminder' }}
        </h1>
        
        <form method="POST" action="{{ isset($reminder) ? route('reminders.update', $reminder->id) : route('reminders.store') }}" class="space-y-6">
            @csrf
            @if(isset($reminder))
                @method('PUT')
            @endif
            
            <div class="form-group">
                <label for="pet_id" class="block text-sm font-medium text-gray-700 mb-2">
                    <i class="fas fa-paw text-orange-500 mr-2"></i>Select Pet
                </label>
                <div class="relative">
                    <select id="pet_id" name="pet_id" class="block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 bg-gray-50" required>
                        <option value="" disabled selected>Choose a pet</option>
                        @foreach ($pets as $pet)
                            <option value="{{ $pet->id }}" {{ isset($reminder) && $reminder->pet_id == $pet->id ? 'selected' : '' }}>
                                {{ $pet->name }}
                            </option>
                        @endforeach
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
            </div>
            
            <div class="form-group">
                <label for="type" class="block text-sm font-medium text-gray-700 mb-2">
                    <i class="fas fa-tag text-orange-500 mr-2"></i>Reminder Type
                </label>
                <input type="text" id="type" name="type" value="{{ isset($reminder) ? $reminder->type : old('type') }}" class="block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 bg-gray-50" placeholder="Enter reminder type (e.g., Feeding, Exercise, Medical)" required>
            </div>
            
            <div class="form-group">
                <label for="time" class="block text-sm font-medium text-gray-700 mb-2">
                    <i class="fas fa-clock text-orange-500 mr-2"></i>Time
                </label>
                <input type="datetime-local" id="time" name="time" value="{{ isset($reminder) ? $reminder->time : '' }}" class="block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 bg-gray-50" required>
            </div>
            
            <div class="mt-8">
                <button type="submit" class="w-full inline-flex justify-center items-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transform transition-all hover:-translate-y-1">
                    <i class="fas {{ isset($reminder) ? 'fa-edit' : 'fa-plus-circle' }} mr-2"></i>
                    {{ isset($reminder) ? 'Update' : 'Add' }} Reminder
                </button>
            </div>
        </form>
    </div>
</div>