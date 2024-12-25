<x-classroom-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <!-- Header -->
                    <div class="mb-8">
                        <h2 class="text-3xl font-bold text-gray-800 text-center">Materi Artificial Intelligence</h2>
                        <p class="text-gray-600 text-center mt-2">Pelajari konsep dan implementasi kecerdasan buatan modern</p>
                    </div>

                    <!-- Accordion -->
                    <div class="space-y-4">
                        <!-- AI Fundamentals Section -->
                        <div class="border rounded-lg overflow-hidden">
                            <button class="w-full flex justify-between items-center p-4 bg-gray-50 hover:bg-gray-100 transition-colors" 
                                    onclick="toggleAccordion('aiBasics')">
                                <div class="flex items-center space-x-3">
                                    <i class="fas fa-brain text-indigo-600 text-xl"></i>
                                    <h3 class="text-lg font-semibold text-gray-800">AI Fundamentals</h3>
                                </div>
                                <i class="fas fa-chevron-down text-gray-500 transform transition-transform" id="aiBasicsIcon"></i>
                            </button>
                            <div class="hidden" id="aiBasics">
                                <div class="p-4 bg-white">
                                    <ul class="space-y-3">
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>Pengenalan AI</span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>Machine Learning Basics</span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>Neural Networks</span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>Deep Learning</span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>Natural Language Processing</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- AI Applications Section -->
                        <div class="border rounded-lg overflow-hidden">
                            <button class="w-full flex justify-between items-center p-4 bg-gray-50 hover:bg-gray-100 transition-colors" 
                                    onclick="toggleAccordion('aiApplications')">
                                <div class="flex items-center space-x-3">
                                    <i class="fas fa-robot text-indigo-600 text-xl"></i>
                                    <h3 class="text-lg font-semibold text-gray-800">AI Applications</h3>
                                </div>
                                <i class="fas fa-chevron-down text-gray-500 transform transition-transform" id="aiApplicationsIcon"></i>
                            </button>
                            <div class="hidden" id="aiApplications">
                                <div class="p-4 bg-white">
                                    <ul class="space-y-3">
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>Computer Vision</span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>Speech Recognition</span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>Recommendation Systems</span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>Autonomous Systems</span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>AI in Healthcare</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- AI Ethics & Future Section -->
                        <div class="border rounded-lg overflow-hidden">
                            <button class="w-full flex justify-between items-center p-4 bg-gray-50 hover:bg-gray-100 transition-colors" 
                                    onclick="toggleAccordion('aiEthics')">
                                <div class="flex items-center space-x-3">
                                    <i class="fas fa-balance-scale text-indigo-600 text-xl"></i>
                                    <h3 class="text-lg font-semibold text-gray-800">AI Ethics & Future</h3>
                                </div>
                                <i class="fas fa-chevron-down text-gray-500 transform transition-transform" id="aiEthicsIcon"></i>
                            </button>
                            <div class="hidden" id="aiEthics">
                                <div class="p-4 bg-white">
                                    <ul class="space-y-3">
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>Ethical AI Development</span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>AI Safety & Security</span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>Bias in AI</span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>Future of AI</span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>AI Governance</span>
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