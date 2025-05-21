<x-default-layout title="Major Detail" section_title="Major Detail">
    <div class="bg-white p-6 rounded shadow space-y-4">
        <div>
            <h2 class="text-lg font-semibold text-zinc-800">Major Name:</h2>
            <p class="text-zinc-600">{{ $major->name }}</p>
        </div>
        <div>
            <a href="{{ route('majors.index') }}"
               class="text-teal-600 hover:underline inline-block mt-2">
                ← Back to Majors
            </a>
        </div>
    </div>
</x-default-layout>
