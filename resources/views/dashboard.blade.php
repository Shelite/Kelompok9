<title>CodeMaster Academy</title>
<x-classroom-layout>
    <!-- Search Section -->
    <div class="mb-8">
        <div class="max-w-3xl mx-auto">
            <form action="{{ route('courses.search') }}" method="GET" class="flex gap-4">
                <div class="flex-1">
                    <input 
                        type="text" 
                        name="search" 
                        placeholder="Cari ..." 
                        value="{{ request('search') }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    >
                </div>
                <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                    <i class="fas fa-search mr-2"></i>
                    Cari
                </button>
            </form>
            
        </div>
    </div>

    <!-- Course Grid -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if($courses->isEmpty())
                        <div class="text-center py-4">
                            <p class="text-gray-500">Tidak ada course yang ditemukan.</p>
                        </div>
                    @else
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                            @foreach($courses as $course)
                            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                                
                                <div class="p-4">
                                    <h3 class="text-xl font-semibold mb-2">{{ $course->title }}</h3>
                                    <p class="text-gray-600 mb-4">{{ Str::limit($course->description, 100) }}</p>
                                    <div class="flex justify-between items-center">
                                        <span class="text-blue-600 font-bold">Free</span>
                                        <a href="{{ route('materi') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                                            Lihat Detail
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-classroom-layout>
