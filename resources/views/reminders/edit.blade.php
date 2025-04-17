<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ isset($reminder) ? 'Edit Reminder' : 'Create New Reminder' }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-50">
        <div class="max-w-lg mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    <form method="POST" action="{{ isset($reminder) ? route('reminders.update', $reminder) : route('reminders.store') }}">
                        @csrf
                        @if(isset($reminder))
                            @method('PUT')
                        @endif
                        
                        <!-- Pet Selection -->
                        <div class="mb-6">
                            <label for="pet_id" class="block text-sm font-medium text-gray-700 mb-1">Pet</label>
                            <div class="relative">
                                <select id="pet_id" name="pet_id" class="block w-full bg-white border border-gray-300 rounded-md py-2 pl-3 pr-10 text-base focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm appearance-none">
                                    <option value="" disabled selected>Select your pet</option>
                                    @foreach ($pets as $pet)
                                        <option value="{{ $pet->id }}" {{ isset($reminder) && $reminder->pet_id == $pet->id ? 'selected' : '' }}>
                                            {{ $pet->name }}
                                        </option>
                                    @endforeach
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                            @error('pet_id')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <!-- Reminder Type -->
                        <div class="mb-6">
                            <label for="type" class="block text-sm font-medium text-gray-700 mb-1">Reminder Type</label>
                            <div class="mt-1 flex flex-wrap gap-3">
                                @foreach(['Feeding', 'Water', 'Medication', 'Exercise', 'Grooming', 'Vet Visit', 'Other'] as $type)
                                    <div class="flex items-center">
                                        <input type="radio" id="type_{{ strtolower($type) }}" name="type" value="{{ $type }}" 
                                            {{ old('type', $reminder->type ?? '') == $type ? 'checked' : '' }}
                                            class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500">
                                        <label for="type_{{ strtolower($type) }}" class="ml-2 text-sm text-gray-700">{{ $type }}</label>
                                    </div>
                                @endforeach
                                
                                <!-- Custom type input -->
                                <div class="flex items-center" x-data="{ showCustom: {{ old('type', $reminder->type ?? '') && !in_array(old('type', $reminder->type ?? ''), ['Feeding', 'Water', 'Medication', 'Exercise', 'Grooming', 'Vet Visit', 'Other']) ? 'true' : 'false' }} }">
                                    <input type="radio" id="type_custom" name="type_selector" value="custom" 
                                        @click="showCustom = true" 
                                        {{ old('type', $reminder->type ?? '') && !in_array(old('type', $reminder->type ?? ''), ['Feeding', 'Water', 'Medication', 'Exercise', 'Grooming', 'Vet Visit', 'Other']) ? 'checked' : '' }}
                                        class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500">
                                    <label for="type_custom" class="ml-2 text-sm text-gray-700">Custom</label>
                                    
                                    <div x-show="showCustom" class="ml-2">
                                        <input type="text" name="type" value="{{ old('type', $reminder->type ?? '') }}" 
                                            class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" 
                                            placeholder="Enter custom type">
                                    </div>
                                </div>
                            </div>
                            @error('type')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <!-- Reminder Time -->
                        <div class="mb-6">
                            <label for="time" class="block text-sm font-medium text-gray-700 mb-1">Time</label>
                            <div class="relative mt-1 rounded-md shadow-sm">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <input type="time" id="time" name="time" value="{{ old('time', $reminder->time ?? '') }}" 
                                    class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-10 sm:text-sm border-gray-300 rounded-md">
                            </div>
                            @error('time')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Daily Frequency (Optional) -->
                        <div class="mb-6">
                            <label for="frequency" class="block text-sm font-medium text-gray-700 mb-1">Occurs</label>
                            <div class="grid grid-cols-7 gap-2">
                                @foreach(['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'] as $day)
                                    <div class="flex flex-col items-center">
                                        <input type="checkbox" id="day_{{ strtolower($day) }}" name="days[]" value="{{ $day }}"
                                            {{ (isset($reminder) && in_array($day, explode(',', $reminder->days ?? ''))) ? 'checked' : '' }}
                                            class="h-4 w-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                        <label for="day_{{ strtolower($day) }}" class="mt-1 text-xs text-gray-700">{{ $day }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        
                        <!-- Notes (Optional) -->
                        <div class="mb-6">
                            <label for="notes" class="block text-sm font-medium text-gray-700 mb-1">Additional Notes</label>
                            <textarea id="notes" name="notes" rows="3" 
                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">{{ old('notes', $reminder->notes ?? '') }}</textarea>
                        </div>
                        
                        <!-- Action Buttons -->
                        <div class="flex items-center justify-between pt-4">
                            <a href="{{ route('reminders.index') }}" class="text-sm text-gray-600 hover:text-gray-900">
                                Cancel
                            </a>
                            <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-black bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z" />
                                </svg>
                                {{ isset($reminder) ? 'Update Reminder' : 'Create Reminder' }}
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Handle radio button custom logic
            const radioButtons = document.querySelectorAll('input[name="type_selector"]');
            const customInput = document.querySelector('input[name="type"]');
            
            radioButtons.forEach(radio => {
                radio.addEventListener('change', function() {
                    if (this.value !== 'custom') {
                        customInput.value = this.value;
                    } else {
                        customInput.focus();
                    }
                });
            });
        });
    </script>
    @endpush
</x-app-layout>