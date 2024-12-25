<x-classroom-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <!-- Header -->
                    <div class="mb-8">
                        <h2 class="text-3xl font-bold text-gray-800 text-center">Materi Operating System</h2>
                        <p class="text-gray-600 text-center mt-2">Pelajari konsep dan implementasi sistem operasi modern</p>
                    </div>

                    <!-- Accordion -->
                    <div class="space-y-4">
                        <!-- OS Fundamentals Section -->
                        <div class="border rounded-lg overflow-hidden">
                            <button class="w-full flex justify-between items-center p-4 bg-gray-50 hover:bg-gray-100 transition-colors" 
                                    onclick="toggleAccordion('osBasics')">
                                <div class="flex items-center space-x-3">
                                    <i class="fas fa-desktop text-indigo-600 text-xl"></i>
                                    <h3 class="text-lg font-semibold text-gray-800">OS Fundamentals</h3>
                                </div>
                                <i class="fas fa-chevron-down text-gray-500 transform transition-transform" id="osBasicsIcon"></i>
                            </button>
                            <div class="hidden" id="osBasics">
                                <div class="p-4 bg-white">
                                    <ul class="space-y-3">
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>Pengenalan Sistem Operasi</span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>Arsitektur Sistem Operasi</span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>Process Management</span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>Memory Management</span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>File Systems</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- System Administration Section -->
                        <div class="border rounded-lg overflow-hidden">
                            <button class="w-full flex justify-between items-center p-4 bg-gray-50 hover:bg-gray-100 transition-colors" 
                                    onclick="toggleAccordion('sysAdmin')">
                                <div class="flex items-center space-x-3">
                                    <i class="fas fa-terminal text-indigo-600 text-xl"></i>
                                    <h3 class="text-lg font-semibold text-gray-800">System Administration</h3>
                                </div>
                                <i class="fas fa-chevron-down text-gray-500 transform transition-transform" id="sysAdminIcon"></i>
                            </button>
                            <div class="hidden" id="sysAdmin">
                                <div class="p-4 bg-white">
                                    <ul class="space-y-3">
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>Linux Administration</span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>Windows Administration</span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>Shell Scripting</span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>System Services</span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>Network Configuration</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- System Security Section -->
                        <div class="border rounded-lg overflow-hidden">
                            <button class="w-full flex justify-between items-center p-4 bg-gray-50 hover:bg-gray-100 transition-colors" 
                                    onclick="toggleAccordion('sysSecurity')">
                                <div class="flex items-center space-x-3">
                                    <i class="fas fa-shield-alt text-indigo-600 text-xl"></i>
                                    <h3 class="text-lg font-semibold text-gray-800">System Security</h3>
                                </div>
                                <i class="fas fa-chevron-down text-gray-500 transform transition-transform" id="sysSecurityIcon"></i>
                            </button>
                            <div class="hidden" id="sysSecurity">
                                <div class="p-4 bg-white">
                                    <ul class="space-y-3">
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>Access Control</span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>User Authentication</span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>System Hardening</span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>Security Policies</span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>Backup & Recovery</span>
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