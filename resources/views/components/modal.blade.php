@props(['id' => null, 'maxWidth' => 'sm'])

<x-base-modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>
    <div class="px-6 py-4">
        <div class="text-lg">
            {{ $title }}
        </div>

        <div class="mt-4">
            {{ $content }}
        </div>
    </div>

    <div class="px-6 py-4 text-right">
        {{ $footer }}
    </div>
</x-base-modal>
