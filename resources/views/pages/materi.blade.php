<x-classroom-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <!-- Header -->
                    <div class="mb-8">
                        <h2 class="text-3xl font-bold text-gray-800 text-center">Materi Web Development</h2>
                        <p class="text-gray-600 text-center mt-2">Pelajari materi web development dari dasar hingga mahir</p>
                    </div>

                    <!-- Accordion -->
                    <div class="space-y-4">
                        <!-- HTML & CSS Section -->
                        <div class="border rounded-lg overflow-hidden">
                            <button class="w-full flex justify-between items-center p-4 bg-gray-50 hover:bg-gray-100 transition-colors" 
                                    onclick="toggleAccordion('htmlCss')">
                                <div class="flex items-center space-x-3">
                                    <i class="fas fa-code text-indigo-600 text-xl"></i>
                                    <h3 class="text-lg font-semibold text-gray-800">HTML & CSS Fundamentals</h3>
                                </div>
                                <i class="fas fa-chevron-down text-gray-500 transform transition-transform" id="htmlCssIcon"></i>
                            </button>
                            <div class="hidden" id="htmlCss">
                                <div class="p-4 bg-white">
                                    <ul class="space-y-3">
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>
                                                <b>Pengenalan HTML:</b> 
                                                HTML (HyperText Markup Language) adalah bahasa dasar untuk membuat halaman web. Elemen HTML digunakan untuk menyusun struktur seperti heading, paragraf, tautan, dan gambar.
                                            </span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>
                                                <b>Struktur Dasar HTML:</b> 
                                                Semua dokumen HTML memiliki struktur dasar yang terdiri dari elemen `<html>`, `<head>`, dan `<body>`. Di bagian `<head>` terdapat metadata, sedangkan konten utama ditempatkan di dalam `<body>`.
                                            </span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>
                                                <b>CSS Dasar:</b> 
                                                CSS (Cascading Style Sheets) digunakan untuk mengatur tampilan halaman web. Anda dapat mengatur warna, font, margin, padding, dan tata letak elemen HTML.
                                            </span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>
                                                <b>CSS Layout & Flexbox:</b> 
                                                Flexbox adalah modul CSS yang dirancang untuk tata letak 1 dimensi. Flexbox mempermudah pengaturan elemen secara horizontal dan vertikal, serta memungkinkan elemen otomatis menyesuaikan ukuran.
                                            </span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>
                                                <b>Responsive Design:</b> 
                                                Teknik responsive design memastikan bahwa halaman web terlihat baik pada berbagai perangkat (desktop, tablet, ponsel) menggunakan media queries di CSS.
                                            </span>
                                        </li>
                                        <li class="p-3">
                                            <iframe width="560" height="315" 
                                                    src="https://www.youtube.com/embed/dD2EISBDjWM" 
                                                    title="Pengenalan HTML & CSS"
                                                    frameborder="0" 
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                                    allowfullscreen>
                                            </iframe>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- JavaScript Section -->
                        <div class="border rounded-lg overflow-hidden">
                            <button class="w-full flex justify-between items-center p-4 bg-gray-50 hover:bg-gray-100 transition-colors" 
                                    onclick="toggleAccordion('javascript')">
                                <div class="flex items-center space-x-3">
                                    <i class="fab fa-js text-indigo-600 text-xl"></i>
                                    <h3 class="text-lg font-semibold text-gray-800">JavaScript Programming</h3>
                                </div>
                                <i class="fas fa-chevron-down text-gray-500 transform transition-transform" id="javascriptIcon"></i>
                            </button>
                            <div class="hidden" id="javascript">
                                <div class="p-4 bg-white">
                                    <ul class="space-y-3">
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>
                                                <b>Dasar JavaScript:</b> 
                                                JavaScript adalah bahasa pemrograman yang digunakan untuk membuat halaman web interaktif. Anda bisa membuat elemen bergerak, validasi form, hingga efek animasi.
                                            </span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>
                                                <b>DOM Manipulation:</b> 
                                                DOM (Document Object Model) memungkinkan JavaScript untuk memodifikasi konten, struktur, dan gaya halaman HTML secara dinamis. Contoh: menambahkan elemen dengan `document.createElement`.
                                            </span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>
                                                <b>Event Handling:</b> 
                                                JavaScript memungkinkan Anda untuk menangkap interaksi pengguna seperti klik, hover, atau input dengan metode seperti `addEventListener`.
                                            </span>
                                        </li>
                                        <li class="p-3">
                                            <iframe width="560" height="315" 
                                                    src="https://www.youtube.com/embed/hdI2bqOjy3c" 
                                                    title="Dasar JavaScript"
                                                    frameborder="0" 
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                                    allowfullscreen>
                                            </iframe>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Backend Section -->
                        <div class="border rounded-lg overflow-hidden">
                            <button class="w-full flex justify-between items-center p-4 bg-gray-50 hover:bg-gray-100 transition-colors" 
                                    onclick="toggleAccordion('backend')">
                                <div class="flex items-center space-x-3">
                                    <i class="fas fa-server text-indigo-600 text-xl"></i>
                                    <h3 class="text-lg font-semibold text-gray-800">Backend Development</h3>
                                </div>
                                <i class="fas fa-chevron-down text-gray-500 transform transition-transform" id="backendIcon"></i>
                            </button>
                            <div class="hidden" id="backend">
                                <div class="p-4 bg-white">
                                    <ul class="space-y-3">
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>
                                                <b>Laravel Framework:</b> 
                                                Laravel adalah framework PHP yang mempermudah pengembangan aplikasi web dengan fitur seperti routing, middleware, dan ORM Eloquent.
                                            </span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>
                                                <b>MVC (Model-View-Controller):</b> 
                                                Laravel menggunakan arsitektur MVC untuk memisahkan logika aplikasi, data, dan tampilan. Model menangani data, Controller mengatur logika, dan View menyajikan antarmuka.
                                            </span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>
                                                <b>Migrasi & Seeder:</b> 
                                                Laravel menyediakan migrasi untuk mempermudah pengelolaan database. Seeder digunakan untuk mengisi data awal pada tabel.
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
