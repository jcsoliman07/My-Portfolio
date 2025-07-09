
@props(['icon', 'label'])

<div class="tech-card bg-gray-50 rounded-lg p-6 text-center shadow-sm hover:shadow-md transition duration-300">
    <div class="flex justify-center mb-4">
        <img src="{{ $icon }}" alt="{{ $label }}" class="w-12 h-12" />
    </div>
    <h3 class="font-semibold text-gray-800">{{ $slot }}</h3>
</div>