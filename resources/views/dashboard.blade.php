<title>CodeMaster Academy</title>
<x-classroom-layout>
    <!-- Search Section -->
    <div class="mb-8">
        <div class="max-w-3xl mx-auto">
            <form action="{{ route('dashboard') }}" method="GET" class="flex gap-4">
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
                    <div class="bg-gray-100 py-16">
                        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                            @php
                            $courses = [
                                [
                                    'title' => 'Web Development',
                                    'image' => 'web-development.png',
                                    'icon' => 'fas fa-code',
                                    'description' => 'Belajar HTML, CSS, dan JavaScript dari dasar hingga mahir'
                                ],
                                [
                                    'title' => 'Mobile Development',
                                    'image' => 'mobile-development.jpeg',
                                    'icon' => 'fas fa-mobile-alt',
                                    'description' => 'Buat aplikasi mobile dengan Flutter dan React Native'
                                ],
                                [
                                    'title' => 'Data Science',
                                    'image' => 'data-science.jpg',
                                    'icon' => 'fas fa-chart-bar',
                                    'description' => 'Pelajari Data Science dan Machine Learning dengan Python'
                                ],
                                [
                                    'title' => 'Cyber Security',
                                    'image' => 'cyber-security.jpg',
                                    'icon' => 'fas fa-shield-alt',
                                    'description' => 'Pelajari keamanan siber, ethical hacking, dan pertahanan jaringan'
                                ],
                                [
                                    'title' => 'UI/UX Design',
                                    'image' => 'ui-ux-design.jpg',
                                    'icon' => 'fas fa-pencil-ruler',
                                    'description' => 'Kuasai desain antarmuka dan pengalaman pengguna modern'
                                ],
                                [
                                    'title' => 'Cloud Computing',
                                    'image' => 'cloud-computing.jpg',
                                    'icon' => 'fas fa-cloud',
                                    'description' => 'Pelajari AWS, Azure, dan Google Cloud Platform'
                                ],
                                [
                                    'title' => 'Python Programming',
                                    'image' => 'python-programming.jpg',
                                    'icon' => 'fab fa-python',
                                    'description' => 'Pelajari bahasa pemrograman Python dari dasar hingga mahir'
                                ],
                                [
                                    'title' => 'Operating System',
                                    'image' => 'operating-system.jpg',
                                    'icon' => 'fas fa-desktop',
                                    'description' => 'Pelajari konsep dan implementasi sistem operasi modern'
                                ],
                                [
                                    'title' => 'Artificial Intelligence',
                                    'image' => 'artificial-intelligence.jpg',
                                    'icon' => 'fas fa-robot',
                                    'description' => 'Pelajari AI, Neural Networks, dan Deep Learning'
                                ]
                            ];

                            $search = request('search');
                            if ($search) {
                                $courses = array_filter($courses, function($course) use ($search) {
                                    return stripos($course['title'], $search) !== false;
                                });
                            }
                            @endphp

                            @if(count($courses) == 0)
                                <div class="text-center py-4">
                                    <p class="text-gray-500">Tidak ada course yang ditemukan.</p>
                                </div>
                            @else
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                                    @foreach($courses as $course)
                                    <div class="bg-white rounded-lg overflow-hidden shadow-lg transform transition duration-300 hover:scale-105">
                                        <img src="{{ asset('img/' . $course['image']) }}" alt="{{ $course['title'] }}" class="w-full h-48 object-cover">
                                        <div class="p-6">
                                            <div class="flex items-center mb-4">
                                                <i class="{{ $course['icon'] }} text-2xl text-indigo-600 mr-3"></i>
                                                <h3 class="text-xl font-semibold">{{ $course['title'] }}</h3>
                                            </div>
                                            <p class="text-gray-600 mb-4">{{ $course['description'] }}</p>
                                            <div class="flex justify-between items-center">
                                                <span class="text-indigo-600 font-semibold">Modul & Video</span>
                                                @if($course['title'] === 'Web Development')
                                                    <a href="{{ route('materi') }}" class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700">
                                                        Lihat Detail
                                                    </a>
                                                @elseif($course['title'] === 'Mobile Development')
                                                    <a href="{{ route('materi.mobile') }}" class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700">
                                                        Lihat Detail
                                                    </a>
                                                @elseif($course['title'] === 'Data Science')
                                                    <a href="{{ route('materi.data-science') }}" class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700">
                                                        Lihat Detail
                                                    </a>
                                                @elseif($course['title'] === 'Cyber Security')
                                                    <a href="{{ route('materi.cyber-security') }}" class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700">
                                                        Lihat Detail
                                                    </a>
                                                @elseif($course['title'] === 'UI/UX Design')
                                                    <a href="{{ route('materi.uiux') }}" class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700">
                                                        Lihat Detail
                                                    </a>
                                                @elseif($course['title'] === 'Cloud Computing')
                                                    <a href="{{ route('materi.cloud') }}" class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700">
                                                        Lihat Detail
                                                    </a>
                                                @elseif($course['title'] === 'Python Programming')
                                                    <a href="{{ route('materi.python') }}" class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700">
                                                        Lihat Detail
                                                    </a>
                                                @elseif($course['title'] === 'Operating System')
                                                    <a href="{{ route('materi.os') }}" class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700">
                                                        Lihat Detail
                                                    </a>
                                                @elseif($course['title'] === 'Artificial Intelligence')
                                                    <a href="{{ route('materi.ai') }}" class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700">
                                                        Lihat Detail
                                                    </a>
                                                @else
                                                    <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700">Lihat Detail</button>
                                                @endif
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
        </div>
    </div>
</x-classroom-layout>
