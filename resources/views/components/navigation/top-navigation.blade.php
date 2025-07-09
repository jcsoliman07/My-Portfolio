
<!-- Navigation -->
<nav class="fixed top-0 w-full bg-white shadow-md z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <a href="#" class="flex items-center">
                    <span class="text-2xl font-bold gradient-text">Portfolio</span>
                </a>
            </div>
            <div class="hidden md:flex items-center space-x-8">
                <x-navigation.top-navigation-link>Home</x-navigation.top-navigation-link>
                <x-navigation.top-navigation-link>Skills</x-navigation.top-navigation-link>
                <x-navigation.top-navigation-link>Works</x-navigation.top-navigation-link>
                <x-navigation.top-navigation-link>Contact</x-navigation.top-navigation-link>
                
            </div>
            <div class="md:hidden flex items-center">
                <button id="mobile-menu-button" class="text-gray-500 hover:text-gray-900 focus:outline-none">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
        </div>
    </div>
    
    <!-- Mobile menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-white shadow-lg">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="#home" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-gray-800">Home</a>
            <a href="#skills" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-100">Skills</a>
            <a href="#work" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-100">Work</a>
            <a href="#contact" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-100">Contact</a>
        </div>
    </div>
</nav>