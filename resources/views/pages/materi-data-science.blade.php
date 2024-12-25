<x-classroom-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <!-- Header -->
                    <div class="mb-8">
                        <h2 class="text-3xl font-bold text-gray-800 text-center">Materi Data Science</h2>
                        <p class="text-gray-600 text-center mt-2">Pelajari Data Science dan Machine Learning dari dasar hingga mahir</p>
                    </div>

                    <!-- Accordion -->
                    <div class="space-y-4">
                        <!-- Python for Data Science Section -->
                        <div class="border rounded-lg overflow-hidden">
                            <button class="w-full flex justify-between items-center p-4 bg-gray-50 hover:bg-gray-100 transition-colors" 
                                    onclick="toggleAccordion('pythonDS')">
                                <div class="flex items-center space-x-3">
                                    <i class="fab fa-python text-indigo-600 text-xl"></i>
                                    <h3 class="text-lg font-semibold text-gray-800">Python for Data Science</h3>
                                </div>
                                <i class="fas fa-chevron-down text-gray-500 transform transition-transform" id="pythonDSIcon"></i>
                            </button>
                            <div class="hidden" id="pythonDS">
                                <div class="p-4 bg-white">
                                    <ul class="space-y-3">
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>
                                                <b>Dasar Python</b> adalah bahasa pemrograman yang digunakan untuk membangun aplikasi data science. Python memiliki banyak library yang dapat membantu dalam pemrosesan data, seperti NumPy, Pandas, dan Matplotlib.
                                            </span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>
                                                <b>NumPy</b> adalah library Python yang digunakan untuk komputasi numerik. Library ini memiliki fungsi untuk operasi matematika, statistik, dan manipulasi array.
                                            </span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>
                                                <b>Data Visualization dengan Matplotlib</b>
                                                Matplotlib adalah library Python yang digunakan untuk membuat visualisasi data. Library ini memiliki fungsi untuk membuat grafik, diagram, dan visualisasi lainnya.
                                            </span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>
                                                <b>Statistical Analysis</b>
                                                Statistical analysis adalah proses mengumpulkan, mengorganisasi, dan menganalisis data untuk menghasilkan informasi yang berguna.
                                            </span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>
                                                <b>Data Preprocessing</b>
                                                Data preprocessing adalah proses mengubah data mentah menjadi format yang dapat digunakan untuk analisis.
                                            </span>
                                        </li>
                                        <li class="p-3">
                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/mkv5mxYu0Wk?si=AuEvDqkwmCIffoVE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Machine Learning Section -->
                        <div class="border rounded-lg overflow-hidden">
                            <button class="w-full flex justify-between items-center p-4 bg-gray-50 hover:bg-gray-100 transition-colors" 
                                    onclick="toggleAccordion('machineLearning')">
                                <div class="flex items-center space-x-3">
                                    <i class="fas fa-brain text-indigo-600 text-xl"></i>
                                    <h3 class="text-lg font-semibold text-gray-800">Machine Learning</h3>
                                </div>
                                <i class="fas fa-chevron-down text-gray-500 transform transition-transform" id="machineLearningIcon"></i>
                            </button>
                            <div class="hidden" id="machineLearning">
                                <div class="p-4 bg-white">
                                    <ul class="space-y-3">
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>
                                                <b>Supervised Learning</b>
                                                Supervised learning adalah metode pembelajaran mesin yang menggunakan data yang sudah diketahui label untuk membuat model yang dapat memprediksi label baru.
                                            </span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>
                                                <b>Unsupervised Learning</b>
                                                Unsupervised learning adalah metode pembelajaran mesin yang menggunakan data yang tidak diketahui label untuk membuat model yang dapat mengelompokkan data.
                                            </span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>
                                                <b>Model Evaluation</b>
                                                Model evaluation adalah proses menguji model yang telah dibuat untuk mengetahui seberapa baik model tersebut dalam memprediksi label baru.
                                            </span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>
                                                <b>Feature Engineering</b>
                                                Feature engineering adalah proses mengubah data mentah menjadi format yang dapat digunakan untuk analisis.
                                            </span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>
                                                <b>Ensemble Methods</b>
                                                Ensemble methods adalah metode pembelajaran mesin yang menggabungkan beberapa model untuk meningkatkan akurasi prediksi.
                                            </span>
                                        </li>
                                        <li class="p-3">
                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/E0Hmnixke2g?si=AwoE0aFhUmzcK6Rw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Big Data Analytics Section -->
                        <div class="border rounded-lg overflow-hidden">
                            <button class="w-full flex justify-between items-center p-4 bg-gray-50 hover:bg-gray-100 transition-colors" 
                                    onclick="toggleAccordion('bigData')">
                                <div class="flex items-center space-x-3">
                                    <i class="fas fa-database text-indigo-600 text-xl"></i>
                                    <h3 class="text-lg font-semibold text-gray-800">Big Data Analytics</h3>
                                </div>
                                <i class="fas fa-chevron-down text-gray-500 transform transition-transform" id="bigDataIcon"></i>
                            </button>
                            <div class="hidden" id="bigData">
                                <div class="p-4 bg-white">
                                    <ul class="space-y-3">
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>
                                                <b>Hadoop Ecosystem</b>
                                                Hadoop Ecosystem adalah kumpulan alat dan teknologi yang digunakan untuk memproses data dalam jumlah besar.
                                            </span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>
                                                <b>Apache Spark</b>
                                                Apache Spark adalah platform open-source untuk pemrosesan data dalam jumlah besar.
                                            </span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>
                                                <b>Data Warehousing</b>
                                                Data warehousing adalah proses mengumpulkan, mengorganisasi, dan menyimpan data dari berbagai sumber untuk analisis.
                                            </span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>
                                                <b>ETL Processes</b>
                                                ETL processes adalah proses mengubah data mentah menjadi format yang dapat digunakan untuk analisis.
                                            </span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>
                                                <b>Data Pipeline Development</b>
                                                Data pipeline development adalah proses mengubah data mentah menjadi format yang dapat digunakan untuk analisis.
                                            </span>
                                        </li>
                                        <li class="p-3">
                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/bAyrObl7TYE?si=jUM1o-GAWJGHrRH8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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