<x-classroom-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="mb-6">
                        <img src="{{ asset('storage/' . $course->image) }}" alt="{{ $course->title }}" class="w-full h-64 object-cover rounded-lg">
                    </div>
                    
                    <h1 class="text-3xl font-bold mb-4">{{ $course->title }}</h1>
                    
                    <div class="flex items-center gap-4 mb-6">
                        <span class="text-2xl text-blue-600 font-bold">
                            Rp {{ number_format($course->price, 0, ',', '.') }}
                        </span>
                        <span class="px-3 py-1 bg-gray-100 rounded-full text-gray-600">
                            {{ $course->duration }} Jam
                        </span>
                        <span class="px-3 py-1 bg-gray-100 rounded-full text-gray-600">
                            Level: {{ $course->level }}
                        </span>
                    </div>

                    <div class="prose max-w-none">
                        <h3 class="text-xl font-semibold mb-2">Deskripsi Course</h3>
                        <p class="text-gray-600">
                            {{ $course->description }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-classroom-layout> 