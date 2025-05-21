<x-default-layout title="Create Major" section_title="Create Major">
    <form action="{{ route('majors.store') }}" method="POST" class="space-y-4 bg-white p-6 rounded shadow">
        @csrf
        <div>
            <label for="name" class="block text-sm font-medium text-zinc-700">Major Name</label>
            <input type="text" name="name" id="name"
                   class="mt-1 block w-full border-zinc-300 rounded-md shadow-sm focus:border-teal-500 focus:ring focus:ring-teal-200"
                   required>
        </div>
        <div>
            <button type="submit"
                    class="bg-teal-600 text-white px-4 py-2 rounded hover:bg-teal-700 transition duration-200">
                Save
            </button>
        </div>
    </form>
</x-default-layout>
