<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join Virtual Pet Care</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        .pet-gradient {
            background: linear-gradient(135deg, #6366F1 0%, #8B5CF6 100%);
        }
        .form-input:focus {
            border-color: #8B5CF6;
            box-shadow: 0 0 0 3px rgba(139, 92, 246, 0.2);
        }
    </style>
</head>
<body class="bg-gray-50 min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-4xl bg-white rounded-2xl shadow-xl overflow-hidden flex flex-col md:flex-row">
        <!-- Left Side - Illustration & Welcome -->
        <div class="pet-gradient w-full md:w-2/5 p-8 text-white flex flex-col justify-between">
            <div>
                <h2 class="text-3xl font-bold mb-6">Whisker Watch</h2>
                <p class="text-indigo-100 mb-6">Join our community of pet lovers and get the best care for your furry friends!</p>
                
                <div class="flex items-center mb-4">
                    <div class="bg-indigo-100 rounded-full p-2 mr-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <span>24/7 Virtual Vet Consultations</span>
                </div>
                <div class="flex items-center mb-4">
                    <div class="bg-indigo-100 rounded-full p-2 mr-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <span>Personalized Pet Care Plans</span>
                </div>
                <div class="flex items-center">
                    <div class="bg-indigo-100 rounded-full p-2 mr-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <span>Community of Pet Enthusiasts</span>
                </div>
            </div>
            
            <!-- Pet Illustration -->
            <div class="mt-12 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-40 w-40 mx-auto text-indigo-100" viewBox="0 0 64 64" fill="currentColor">
                    <path d="M58.766 24.394c-1.097-1.444-2.858-2.394-4.858-2.394-1.018 0-1.972.276-2.798.758l-8.341-8.341c.482-.826.758-1.78.758-2.798 0-3.046-2.482-5.528-5.528-5.528-1.018 0-1.972.276-2.798.758l-8.341-8.341c.482-.826.758-1.78.758-2.798 0-3.046-2.482-5.528-5.528-5.528s-5.528 2.482-5.528 5.528c0 1.018.276 1.972.758 2.798l-8.341 8.341c-.826-.482-1.78-.758-2.798-.758-3.046 0-5.528 2.482-5.528 5.528 0 1.018.276 1.972.758 2.798l-8.341 8.341c-.826-.482-1.78-.758-2.798-.758-3.046 0-5.528 2.482-5.528 5.528s2.482 5.528 5.528 5.528c1.018 0 1.972-.276 2.798-.758l8.341 8.341c-.482.826-.758 1.78-.758 2.798 0 3.046 2.482 5.528 5.528 5.528 1.018 0 1.972-.276 2.798-.758l8.341 8.341c-.482.826-.758 1.78-.758 2.798 0 3.046 2.482 5.528 5.528 5.528s5.528-2.482 5.528-5.528c0-1.018-.276-1.972-.758-2.798l8.341-8.341c.826.482 1.78.758 2.798.758 3.046 0 5.528-2.482 5.528-5.528 0-1.018-.276-1.972-.758-2.798l8.341-8.341c.826.482 1.78.758 2.798.758 3.046 0 5.528-2.482 5.528-5.528 0-2-.95-3.761-2.394-4.858z" />
                    <circle cx="37" cy="37" r="5" fill="#fff" />
                    <circle cx="22" cy="37" r="5" fill="#fff" />
                    <path d="M36 47c0 2.761-2.239 5-5 5s-5-2.239-5-5" stroke="#fff" stroke-width="2" fill="none" />
                </svg>
                <p class="text-lg mt-4">Your pets deserve the best!</p>
            </div>
        </div>
        
        <!-- Right Side - Registration Form -->
        <div class="w-full md:w-3/5 p-8">
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-gray-800">Create Your Account</h1>
                <p class="text-gray-500 mt-2">Join thousands of pet parents today</p>
            </div>
            
            <form method="POST" action="{{ route('register') }}">
                @csrf
                
                <!-- Name -->
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                    <input id="name" type="text" name="name" required autofocus
                        class="form-input w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none transition-colors" 
                        placeholder="Enter your name">
                    <p class="text-red-500 text-xs mt-1">{{ $errors->first('name') }}</p>
                </div>
                
                <!-- Email Address -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                    <input id="email" type="email" name="email" required
                        class="form-input w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none transition-colors" 
                        placeholder="your@email.com">
                    <p class="text-red-500 text-xs mt-1">{{ $errors->first('email') }}</p>
                </div>
                
                <!-- Password -->
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <input id="password" type="password" name="password" required
                        class="form-input w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none transition-colors" 
                        placeholder="Create a strong password">
                    <p class="text-red-500 text-xs mt-1">{{ $errors->first('password') }}</p>
                </div>
                
                <!-- Confirm Password -->
                <div class="mb-6">
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
                    <input id="password_confirmation" type="password" name="password_confirmation" required
                        class="form-input w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none transition-colors" 
                        placeholder="Confirm your password">
                    <p class="text-red-500 text-xs mt-1">{{ $errors->first('password_confirmation') }}</p>
                </div>
                
                <!-- Terms Agreement -->
                <div class="flex items-center mb-6">
                    <input id="terms" name="terms" type="checkbox" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                    <label for="terms" class="ml-2 block text-sm text-gray-700">
                        I agree to the <a href="#" class="text-indigo-600 hover:text-indigo-700">Terms of Service</a> and <a href="#" class="text-indigo-600 hover:text-indigo-700">Privacy Policy</a>
                    </label>
                </div>
                
                <!-- Register Button -->
                <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white py-3 px-4 rounded-lg font-medium transition-colors focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Create Account
                </button>
                
                <!-- Sign In Link -->
                <div class="text-center mt-6">
                    <p class="text-gray-600">
                        Already have an account? <a href="{{ route('login') }}" class="text-indigo-600 hover:text-indigo-700 font-medium">Sign in</a>
                    </p>
                </div>
            </form>
            
            <!-- Social Login Options -->
            <div class="mt-8">
                <div class="relative">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-300"></div>
                    </div>
                 
                </div>
               
            </div>
            
        </div>
    </div>
</body>
</html>