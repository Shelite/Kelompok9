<x-classroom-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <!-- Header -->
                    <div class="mb-8">
                        <h2 class="text-3xl font-bold text-gray-800 text-center">Materi Mobile Development</h2>
                        <p class="text-gray-600 text-center mt-2">Pelajari pengembangan aplikasi mobile dari dasar hingga mahir</p>
                    </div>

                    <!-- Accordion -->
                    <div class="space-y-4">
                        <!-- Flutter Basics Section -->
                        <div class="border rounded-lg overflow-hidden">
                            <button class="w-full flex justify-between items-center p-4 bg-gray-50 hover:bg-gray-100 transition-colors" 
                                    onclick="toggleAccordion('flutterBasics')">
                                <div class="flex items-center space-x-3">
                                    <i class="fab fa-flutter text-indigo-600 text-xl"></i>
                                    <h3 class="text-lg font-semibold text-gray-800">Flutter Fundamentals</h3>
                                </div>
                                <i class="fas fa-chevron-down text-gray-500 transform transition-transform" id="flutterBasicsIcon"></i>
                            </button>
                            <div class="hidden" id="flutterBasics">
                                <div class="p-4 bg-white">
                                    <ul class="space-y-3">
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>
                                                <b>Pengenalan Flutter & Dart:</b> 
                                                Flutter adalah framework UI open-source dari Google untuk membuat aplikasi mobile, web, dan desktop dengan basis kode tunggal. Dart adalah bahasa pemrograman yang digunakan Flutter untuk membangun aplikasi.
                                            </span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>
                                                <b>Widget & Layout Dasar:</b> 
                                                Widget adalah elemen dasar Flutter yang digunakan untuk membangun antarmuka pengguna. Contohnya adalah `Text`, `Container`, dan `Column`.
                                            </span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>
                                                <b>State Management:</b> 
                                                Mengelola state adalah salah satu aspek penting dalam Flutter. Ada beberapa metode seperti menggunakan `setState`, Provider, atau Riverpod.
                                            </span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>
                                                <b>Navigation & Routing:</b> 
                                                Flutter mendukung navigasi multi-halaman dengan menggunakan `Navigator` dan konsep routing. Anda dapat membuat aplikasi multi-screen dengan mudah.
                                            </span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>
                                                <b>UI Components:</b> 
                                                Pelajari komponen UI seperti AppBar, Drawer, dan Bottom Navigation Bar untuk membangun aplikasi yang lebih kompleks.
                                            </span>
                                        </li>
                                        <li class="p-3">
                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/1xipg02Wu8s?si=RJQn7Urz4_IilRyT" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- React Native Section -->
                        <div class="border rounded-lg overflow-hidden">
                            <button class="w-full flex justify-between items-center p-4 bg-gray-50 hover:bg-gray-100 transition-colors" 
                                    onclick="toggleAccordion('reactNative')">
                                <div class="flex items-center space-x-3">
                                    <i class="fab fa-react text-indigo-600 text-xl"></i>
                                    <h3 class="text-lg font-semibold text-gray-800">React Native Development</h3>
                                </div>
                                <i class="fas fa-chevron-down text-gray-500 transform transition-transform" id="reactNativeIcon"></i>
                            </button>
                            <div class="hidden" id="reactNative">
                                <div class="p-4 bg-white">
                                    <ul class="space-y-3">
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>
                                                <b>Pengenalan React Native:</b> 
                                                React Native adalah framework JavaScript yang digunakan untuk membangun aplikasi mobile lintas platform dengan basis kode tunggal. Framework ini memanfaatkan komponen React.
                                            </span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>
                                                <b>Components & Props:</b> 
                                                React Native menggunakan komponen seperti `View`, `Text`, dan `Button`. Props digunakan untuk mengirim data ke dalam komponen.
                                            </span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>
                                                <b>React Hooks:</b> 
                                                Hooks seperti `useState` dan `useEffect` memungkinkan Anda untuk mengelola state dan efek samping dalam komponen fungsional.
                                            </span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>
                                                <b>Native Modules:</b> 
                                                Pelajari cara mengintegrasikan fitur asli perangkat seperti kamera, GPS, atau sensor menggunakan modul native.
                                            </span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>
                                                <b>Performance Optimization:</b> 
                                                Teknik untuk meningkatkan performa aplikasi, seperti memanfaatkan lazy loading, caching, dan optimasi render komponen.
                                            </span>
                                        </li>
                                        <li class="p-3">
                                            <iframe width="560" height="315" 
                                                    src="https://www.youtube.com/embed/MFh0Fd7BsjE" 
                                                    title="Belajar Laravel"
                                                    frameborder="0" 
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                                    allowfullscreen>
                                            </iframe>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Mobile Backend Section -->
                        <div class="border rounded-lg overflow-hidden">
                            <button class="w-full flex justify-between items-center p-4 bg-gray-50 hover:bg-gray-100 transition-colors" 
                                    onclick="toggleAccordion('mobileBackend')">
                                <div class="flex items-center space-x-3">
                                    <i class="fas fa-server text-indigo-600 text-xl"></i>
                                    <h3 class="text-lg font-semibold text-gray-800">Mobile Backend Integration</h3>
                                </div>
                                <i class="fas fa-chevron-down text-gray-500 transform transition-transform" id="mobileBackendIcon"></i>
                            </button>
                            <div class="hidden" id="mobileBackend">
                                <div class="p-4 bg-white">
                                    <ul class="space-y-3">
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>
                                                <b>REST API Integration:</b> 
                                                Pelajari cara menghubungkan aplikasi mobile ke backend menggunakan HTTP request. Contoh tools yang sering digunakan adalah Axios atau Fetch API.
                                            </span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>
                                                <b>Local Storage:</b> 
                                                Simpan data pengguna secara lokal di perangkat menggunakan SQLite, SharedPreferences, atau SecureStorage.
                                            </span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>
                                                <b>Firebase Integration:</b> 
                                                Firebase menyediakan layanan seperti real-time database, cloud storage, dan analytics untuk mendukung aplikasi mobile.
                                            </span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>
                                                <b>Push Notifications:</b> 
                                                Kirim notifikasi ke perangkat pengguna menggunakan layanan seperti Firebase Cloud Messaging (FCM).
                                            </span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>
                                                <b>Authentication & Security:</b> 
                                                Tambahkan otentikasi pengguna dengan menggunakan OAuth2, JSON Web Tokens (JWT), atau layanan Firebase Authentication.
                                            </span>
                                        </li>
                                        <li class="p-3">
                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/yye7rSsiV6k?si=Y10nUE0wrx6rjhfJ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function toggleAccordion(id) {
            const content = document.getElementById(id);
            const icon = document.getElementById(id + 'Icon');
            
            // Toggle content visibility
            content.classList.toggle('hidden');
            
            // Rotate icon
            if (content.classList.contains('hidden')) {
                icon.classList.remove('rotate-180');
            } else {
                icon.classList.add('rotate-180');
            }
        }
    </script>
</x-classroom-layout> 