<x-default-layout title="Edit Major" section_title="Edit Major">
    <form action="{{ route('majors.update', $major->id) }}" method="POST" class="space-y-4 bg-white p-6 rounded shadow">
        @csrf
        @method('PUT')

        <div>
            <label for="name" class="block text-sm font-medium text-zinc-700">Major Name</label>
            <input type="text" name="name" id="name" value="{{ $major->name }}"
                   class="mt-1 block w-full border-zinc-300 rounded-md shadow-sm focus:border-teal-500 focus:ring focus:ring-teal-200"
                   required>
        </div>
        <div>
            <button type="submit"
                    class="bg-teal-600 text-white px-4 py-2 rounded hover:bg-teal-700 transition duration-200">
                Update
            </button>
        </div>
    </form>
</x-default-layout>
