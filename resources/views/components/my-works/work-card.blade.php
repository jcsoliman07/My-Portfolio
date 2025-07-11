<div>
    <div class="project-card bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">

        <div class="project-image overflow-hidden">
            <img src="{{ $image }}" alt="{{ $alt }}" class="w-full h-48 object-cover" />
        </div>

        <div class="p-6">

            <x-heading.heading-4>{{ $title }}</x-heading.heading-4>

            <p class="text-gray-600 mb-4">{{ $description }}</p>

            <div class="flex flex-wrap gap-2">

                @foreach ($tech as $tag)
                    <span class="px-3 py-1 bg-{{ $tag['bg'] }} text-{{ $tag['text'] }} text-xs rounded-full">{{ $tag['name'] }}</span>
                @endforeach

            </div>

            <div class="mt-4 flex justify-between items-center">

                <a href="{{ $detailsUrl }}" class="text-primary-600 hover:text-primary-800 font-medium transition duration-300">View Details</a>

                <a href="{{ $externalUrl }}" class="text-gray-500 hover:text-gray-700 transition duration-300">
                    <i class="fas fa-external-link-alt"></i>
                </a>

            </div>
        </div>
    </div>
</div>