<x-classroom-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <!-- Header -->
                    <div class="mb-8">
                        <h2 class="text-3xl font-bold text-gray-800 text-center">Materi Cloud Computing</h2>
                        <p class="text-gray-600 text-center mt-2">Pelajari teknologi cloud dari dasar hingga tingkat lanjut</p>
                    </div>

                    <!-- Accordion -->
                    <div class="space-y-4">
                        <!-- Cloud Fundamentals Section -->
                        <div class="border rounded-lg overflow-hidden">
                            <button class="w-full flex justify-between items-center p-4 bg-gray-50 hover:bg-gray-100 transition-colors" 
                                    onclick="toggleAccordion('cloudBasics')">
                                <div class="flex items-center space-x-3">
                                    <i class="fas fa-cloud text-indigo-600 text-xl"></i>
                                    <h3 class="text-lg font-semibold text-gray-800">Cloud Fundamentals</h3>
                                </div>
                                <i class="fas fa-chevron-down text-gray-500 transform transition-transform" id="cloudBasicsIcon"></i>
                            </button>
                            <div class="hidden" id="cloudBasics">
                                <div class="p-4 bg-white">
                                    <ul class="space-y-3">
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>Pengenalan Cloud Computing</span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>Cloud Service Models</span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>Cloud Deployment Models</span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>Cloud Architecture</span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>Cloud Security Basics</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- AWS Services Section -->
                        <div class="border rounded-lg overflow-hidden">
                            <button class="w-full flex justify-between items-center p-4 bg-gray-50 hover:bg-gray-100 transition-colors" 
                                    onclick="toggleAccordion('awsServices')">
                                <div class="flex items-center space-x-3">
                                    <i class="fab fa-aws text-indigo-600 text-xl"></i>
                                    <h3 class="text-lg font-semibold text-gray-800">AWS Services</h3>
                                </div>
                                <i class="fas fa-chevron-down text-gray-500 transform transition-transform" id="awsServicesIcon"></i>
                            </button>
                            <div class="hidden" id="awsServices">
                                <div class="p-4 bg-white">
                                    <ul class="space-y-3">
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>EC2 & Virtual Machines</span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>S3 Storage Solutions</span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>RDS & Database Services</span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>Lambda & Serverless</span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>CloudFormation</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Cloud DevOps Section -->
                        <div class="border rounded-lg overflow-hidden">
                            <button class="w-full flex justify-between items-center p-4 bg-gray-50 hover:bg-gray-100 transition-colors" 
                                    onclick="toggleAccordion('cloudDevOps')">
                                <div class="flex items-center space-x-3">
                                    <i class="fas fa-cogs text-indigo-600 text-xl"></i>
                                    <h3 class="text-lg font-semibold text-gray-800">Cloud DevOps</h3>
                                </div>
                                <i class="fas fa-chevron-down text-gray-500 transform transition-transform" id="cloudDevOpsIcon"></i>
                            </button>
                            <div class="hidden" id="cloudDevOps">
                                <div class="p-4 bg-white">
                                    <ul class="space-y-3">
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>CI/CD Pipeline</span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>Infrastructure as Code</span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>Container Orchestration</span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>Monitoring & Logging</span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>Cloud Cost Optimization</span>
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