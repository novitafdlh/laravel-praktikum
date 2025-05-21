<x-default-layout title="Majors" section_title="Majors">
    <div class="mb-4">
        <a href="{{ route('majors.create') }}"
           class="bg-teal-600 text-white px-4 py-2 rounded hover:bg-teal-700 transition duration-200">
            + Add Major
        </a>
    </div>

    <table class="min-w-full bg-white border shadow">
        <thead class="bg-gray-100 border-b">
            <tr>
                <th class="text-left px-4 py-2">#</th>
                <th class="text-left px-4 py-2">Major Name</th>
                <th class="text-left px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($majors as $index => $major)
                <tr class="border-b hover:bg-gray-50">
                    <td class="px-4 py-2">{{ $index + 1 }}</td>
                    <td class="px-4 py-2">{{ $major->name }}</td>
                    <td class="px-4 py-2 space-x-2">
                        <a href="{{ route('majors.show', $major->id) }}" class="text-blue-500 hover:underline">Detail</a>
                        <a href="{{ route('majors.edit', $major->id) }}" class="text-yellow-500 hover:underline">Edit</a>
                        <form action="{{ route('majors.destroy', $major->id) }}" method="POST" class="inline-block"
                              onsubmit="return confirm('Are you sure?')">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-500 hover:underline">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-default-layout>
