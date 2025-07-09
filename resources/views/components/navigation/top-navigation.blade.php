
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
                <x-navigation.top-navigation-link href="#">Home</x-navigation.top-navigation-link>
                <x-navigation.top-navigation-link href="#skills">Skills</x-navigation.top-navigation-link>
                <x-navigation.top-navigation-link href="#work">Works</x-navigation.top-navigation-link>
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
    <x-navigation.mobile-top-navigation/>
</nav>