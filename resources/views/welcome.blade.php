<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PetCare Application</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { font-family: 'Nunito', sans-serif; }
        .hero-gradient { background: linear-gradient(135deg, #60a5fa 0%, #3b82f6 100%); }
        .feature-card:hover { transform: translateY(-5px); box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1); }
    </style>
</head>
<body class="antialiased bg-blue-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm fixed w-full z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="{{ url('/') }}" class="flex items-center">
                       
                        <span class="ml-2 text-xl font-bold text-blue-600">Pet Care</span>
                    </a>
                </div>
                
                <!-- Auth Links -->
                <div class="hidden sm:flex sm:items-center sm:space-x-4">
                    @guest
                        <a href="{{ route('login') }}" class="text-gray-500 hover:text-blue-700 px-3 py-2 rounded-md text-sm font-medium">Login</a>
                        <a href="{{ route('register') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm font-medium">Sign Up</a>
                    @else
                        <div class="relative">
                            <button type="button" class="bg-white rounded-full flex text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" id="user-menu-button">
                                <img class="h-8 w-8 rounded-full" src="{{ Auth::user()->profile_photo_url ?? 'https://ui-avatars.com/api/?name='.urlencode(Auth::user()->name) }}" alt="{{ Auth::user()->name }}">
                            </button>
                            <!-- Profile dropdown -->
                            <div class="hidden origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5" id="user-dropdown">
                                <a href="{{ route('profile.show') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Your Profile</a>
                                <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Dashboard</a>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sign out</button>
                                </form>
                            </div>
                        </div>
                    @endguest
                </div>
                
              
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero-gradient pt-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <div>
                    <h1 class="text-4xl md:text-5xl font-extrabold text-white leading-tight">
                        Caring for Your Pets Like Family
                    </h1>
                    <p class="mt-4 text-xl text-blue-100">
                        Premium pet care services to keep your furry friends happy, healthy, and thriving.
                    </p>
                    <div class="mt-8">
                        <a href="{{ route('register') }}" class="bg-white text-blue-600 hover:bg-gray-100 px-6 py-3 rounded-lg font-medium text-lg shadow-md">
                            Get Started
                        </a>
                    </div>
                </div>
               
            </div>
        </div>
        <svg class="w-full h-16 text-blue-50 fill-current" viewBox="0 0 1440 48" preserveAspectRatio="none">
            <path d="M0 48h1440V0c-295.5 0-589.5 32-883.5 32S295.5 0 0 0v48z"></path>
        </svg>
    </div>

    <!-- Services Section -->
    <div class="py-16 bg-blue-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                    Our Pet Care Services
                </h2>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 mx-auto">
                    Comprehensive care for all your pet's needs
                </p>
            </div>

            <div class="mt-16 grid gap-8 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                <!-- Service Cards -->
                <!-- Veterinary Care -->
                <div class="bg-white rounded-lg shadow-md p-6 transition duration-300 feature-card">
                    <div class="w-12 h-12 rounded-md bg-blue-500 text-white flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                    </div>
                    <h3 class="mt-4 text-lg font-medium text-gray-900">Veterinary Care</h3>
                    <p class="mt-2 text-gray-600">
                        Expert veterinary services for preventive care, illness treatment, and emergency situations.
                    </p>
                </div>

                <!-- Grooming Services -->
                <div class="bg-white rounded-lg shadow-md p-6 transition duration-300 feature-card">
                    <div class="w-12 h-12 rounded-md bg-blue-500 text-white flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="mt-4 text-lg font-medium text-gray-900">Grooming Services</h3>
                    <p class="mt-2 text-gray-600">
                        Professional grooming to keep your pet looking and feeling their best with customized treatments.
                    </p>
                </div>

                <!-- Pet Boarding -->
                <div class="bg-white rounded-lg shadow-md p-6 transition duration-300 feature-card">
                    <div class="w-12 h-12 rounded-md bg-blue-500 text-white flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="mt-4 text-lg font-medium text-gray-900">Pet Boarding</h3>
                    <p class="mt-2 text-gray-600">
                        Safe and comfortable accommodations with attentive care when you're away from home.
                    </p>
                </div>

                <!-- Dog Walking -->
                <div class="bg-white rounded-lg shadow-md p-6 transition duration-300 feature-card">
                    <div class="w-12 h-12 rounded-md bg-blue-500 text-white flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="mt-4 text-lg font-medium text-gray-900">Dog Walking</h3>
                    <p class="mt-2 text-gray-600">
                        Regular exercise and attention for your canine companion with scheduled walking services.
                    </p>
                </div>

                <!-- Pet Training -->
                <div class="bg-white rounded-lg shadow-md p-6 transition duration-300 feature-card">
                    <div class="w-12 h-12 rounded-md bg-blue-500 text-white flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="mt-4 text-lg font-medium text-gray-900">Pet Training</h3>
                    <p class="mt-2 text-gray-600">
                        Professional training programs for obedience, behavior modification, and specialized skills.
                    </p>
                </div>

                <!-- Pet Sitting -->
                <div class="bg-white rounded-lg shadow-md p-6 transition duration-300 feature-card">
                    <div class="w-12 h-12 rounded-md bg-blue-500 text-white flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="mt-4 text-lg font-medium text-gray-900">Pet Sitting</h3>
                    <p class="mt-2 text-gray-600">
                        At-home care for your pets, providing company, feeding, and attention while you're away.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonials Section -->
    <div class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                    Happy Pet Parents
                </h2>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 mx-auto">
                    What our clients say about our pet care services
                </p>
            </div>

            <div class="mt-12 grid gap-6 grid-cols-1 md:grid-cols-3">
                <!-- Testimonials -->
                <div class="bg-blue-50 rounded-lg p-6 shadow-sm">
                    <div class="flex items-center">
                        <img class="h-12 w-12 rounded-full" src="https://ui-avatars.com/api/?name=Sarah+Johnson" alt="Sarah Johnson">
                        <div class="ml-4">
                            <h4 class="text-lg font-bold text-gray-900">Sarah Johnson</h4>
                            <p class="text-gray-500">Dog Owner</p>
                        </div>
                    </div>
                    <p class="mt-4 text-gray-600">
                        "The grooming services are incredible! My golden retriever has never looked better, and the staff truly cares about his comfort."
                    </p>
                </div>

                <div class="bg-blue-50 rounded-lg p-6 shadow-sm">
                    <div class="flex items-center">
                        <img class="h-12 w-12 rounded-full" src="https://ui-avatars.com/api/?name=Mike+Peters" alt="Mike Peters">
                        <div class="ml-4">
                            <h4 class="text-lg font-bold text-gray-900">Mike Peters</h4>
                            <p class="text-gray-500">Cat Parent</p>
                        </div>
                    </div>
                    <p class="mt-4 text-gray-600">
                        "The veterinary care is top-notch. They diagnosed my cat's issue quickly and provided effective treatment with genuine compassion."
                    </p>
                </div>

                <div class="bg-blue-50 rounded-lg p-6 shadow-sm">
                    <div class="flex items-center">
                        <img class="h-12 w-12 rounded-full" src="https://ui-avatars.com/api/?name=Emily+Rodriguez" alt="Emily Rodriguez">
                        <div class="ml-4">
                            <h4 class="text-lg font-bold text-gray-900">Emily Rodriguez</h4>
                            <p class="text-gray-500">Multiple Pet Owner</p>
                        </div>
                    </div>
                    <p class="mt-4 text-gray-600">
                        "I've been using the boarding services for years. My pets are always excited to return, which says everything about the quality of care."
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="bg-blue-600">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
            <h2 class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl">
                <span class="block">Ready to give your pet the best care?</span>
                <span class="block text-blue-200">Schedule your first appointment today.</span>
            </h2>
            <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
                <a href="{{ route('register') }}" class="inline-flex items-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-blue-600 bg-white hover:bg-blue-50 shadow">
                    Get Started
                </a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-sm font-semibold text-gray-400 uppercase">
                        Services
                    </h3>
                    <ul class="mt-4 space-y-4">
                        <li><a href="#" class="text-gray-300 hover:text-white">Veterinary Care</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white">Grooming</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white">Boarding</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white">Training</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-gray-400 uppercase">
                        Support
                    </h3>
                    <ul class="mt-4 space-y-4">
                        <li><a href="#" class="text-gray-300 hover:text-white">Pet Care Guides</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white">FAQ</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white">Contact Us</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white">Emergency</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-gray-400 uppercase">
                        Company
                    </h3>
                    <ul class="mt-4 space-y-4">
                        <li><a href="#" class="text-gray-300 hover:text-white">About Us</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white">Blog</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white">Careers</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white">Partners</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-gray-400 uppercase">
                        Legal
                    </h3>
                    <ul class="mt-4 space-y-4">
                        <li><a href="#" class="text-gray-300 hover:text-white">Privacy</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white">Terms</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white">Cookie Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="mt-12 border-t border-gray-700 pt-8 md:flex md:items-center md:justify-between">
                <div class="flex space-x-6 md:order-2">
                    <a href="#" class="text-gray-400 hover:text-gray-300">
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"/></svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-300">
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"/></svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-300">
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"/></svg>
                    </a>
                </div>
                <p class="mt-8 text-base text-gray-400 md:mt-0 md:order-1">
                    &copy; {{ date('Y') }} {{ config('app.name', 'PetCare') }}. All rights reserved.
                </p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            // Mobile menu functionality would go here
        });
        
        // User dropdown toggle
        const userMenuButton = document.getElementById('user-menu-button');
        const userDropdown = document.getElementById('user-dropdown');
        
        if (userMenuButton && userDropdown) {
            userMenuButton.addEventListener('click', function() {
                userDropdown.classList.toggle('hidden');
            });
        }
    </script>
</body>
</html>