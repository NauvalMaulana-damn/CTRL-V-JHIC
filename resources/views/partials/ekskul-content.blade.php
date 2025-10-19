<div class="max-w-full mx-auto">
    <div class="grid grid-cols-3 gap-6">
        @foreach ($ekskuls as $ekskul)
        <x-ekscard title="{{ $ekskul->title }}" alt="{{ $ekskul->title }}" image="{{ $ekskul->image }}">
            {{ $ekskul->desc }}
        </x-ekscard>
        @endforeach
    </div>
</div>

<div class="flex justify-center mt-8 space-x-2" id="pagination-container">
    {{ $ekskuls->links('pagination::tailwind') }}
</div>
