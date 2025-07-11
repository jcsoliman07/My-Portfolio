<div>
    <div class="project-card rounded-lg overflow-hidden shadow-sm hover:shadow-md transition duration-300">

        <div class="project-image overflow-hidden h-[400px] w-full">
            <img src="{{ $image }}" alt="{{ $alt }}" class="w-full h-full object-cover" loading="lazy" />
        </div>

        <div class="p-4">
            <x-heading.heading-4>{{ $title }}</x-heading.heading-4>
            <p class="text-gray-600">{{ $description }}</p>
        

            <div class="mt-4">
                <a href="{{ $detailsUrl }}" class="text-primary-600 hover:text-primary-800 font-medium transition duration-300">View</a>
            </div>
        </div>
        
    </div>
    
</div>