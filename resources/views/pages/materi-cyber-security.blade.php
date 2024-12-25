<x-classroom-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <!-- Header -->
                    <div class="mb-8">
                        <h2 class="text-3xl font-bold text-gray-800 text-center">Materi Cyber Security</h2>
                        <p class="text-gray-600 text-center mt-2">Pelajari keamanan siber dari dasar hingga tingkat lanjut</p>
                    </div>

                    <!-- Accordion -->
                    <div class="space-y-4">
                        <!-- Network Security Section -->
                        <div class="border rounded-lg overflow-hidden">
                            <button class="w-full flex justify-between items-center p-4 bg-gray-50 hover:bg-gray-100 transition-colors" 
                                    onclick="toggleAccordion('networkSecurity')">
                                <div class="flex items-center space-x-3">
                                    <i class="fas fa-network-wired text-indigo-600 text-xl"></i>
                                    <h3 class="text-lg font-semibold text-gray-800">Network Security</h3>
                                </div>
                                <i class="fas fa-chevron-down text-gray-500 transform transition-transform" id="networkSecurityIcon"></i>
                            </button>
                            <div class="hidden" id="networkSecurity">
                                <div class="p-4 bg-white">
                                    <ul class="space-y-3">
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>
                                                <b>Dasar Jaringan Komputer</b>
                                                Dasar jaringan komputer adalah dasar yang digunakan untuk memahami bagaimana jaringan komputer bekerja.
                                            </span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>
                                                <b>Firewall Configuration</b>
                                                Firewall configuration adalah proses mengatur firewall untuk memproteksi jaringan komputer dari serangan.
                                            </span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>
                                                <b>VPN & Encryption</b>
                                                VPN & Encryption adalah proses mengatur VPN untuk memproteksi jaringan komputer dari serangan.
                                            </span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>
                                                <b>Intrusion Detection Systems</b>
                                                Intrusion Detection Systems adalah proses mengatur intrusion detection systems untuk memproteksi jaringan komputer dari serangan.
                                            </span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>
                                                <b>Network Monitoring</b>
                                                Network Monitoring adalah proses mengatur network monitoring untuk memproteksi jaringan komputer dari serangan.
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Ethical Hacking Section -->
                        <div class="border rounded-lg overflow-hidden">
                            <button class="w-full flex justify-between items-center p-4 bg-gray-50 hover:bg-gray-100 transition-colors" 
                                    onclick="toggleAccordion('ethicalHacking')">
                                <div class="flex items-center space-x-3">
                                    <i class="fas fa-user-secret text-indigo-600 text-xl"></i>
                                    <h3 class="text-lg font-semibold text-gray-800">Ethical Hacking</h3>
                                </div>
                                <i class="fas fa-chevron-down text-gray-500 transform transition-transform" id="ethicalHackingIcon"></i>
                            </button>
                            <div class="hidden" id="ethicalHacking">
                                <div class="p-4 bg-white">
                                    <ul class="space-y-3">
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>
                                                <b>Penetration Testing</b>
                                                Penetration Testing adalah proses menguji keamanan jaringan komputer dengan mencoba mengaksesnya dari luar.
                                            </span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>
                                                <b>Vulnerability Assessment</b>
                                                Vulnerability Assessment adalah proses menguji keamanan jaringan komputer dengan mencoba mengaksesnya dari luar.
                                            </span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>
                                                <b>Social Engineering</b>
                                                Social Engineering adalah proses menguji keamanan jaringan komputer dengan mencoba mengaksesnya dari luar.
                                            </span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>
                                                <b>Web Application Security</b>
                                                Web Application Security adalah proses menguji keamanan jaringan komputer dengan mencoba mengaksesnya dari luar.
                                            </span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>
                                                <b>Wireless Security</b>
                                                Wireless Security adalah proses menguji keamanan jaringan komputer dengan mencoba mengaksesnya dari luar.
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Security Management Section -->
                        <div class="border rounded-lg overflow-hidden">
                            <button class="w-full flex justify-between items-center p-4 bg-gray-50 hover:bg-gray-100 transition-colors" 
                                    onclick="toggleAccordion('securityManagement')">
                                <div class="flex items-center space-x-3">
                                    <i class="fas fa-shield-alt text-indigo-600 text-xl"></i>
                                    <h3 class="text-lg font-semibold text-gray-800">Security Management</h3>
                                </div>
                                <i class="fas fa-chevron-down text-gray-500 transform transition-transform" id="securityManagementIcon"></i>
                            </button>
                            <div class="hidden" id="securityManagement">
                                <div class="p-4 bg-white">
                                    <ul class="space-y-3">
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>
                                                <b>Risk Assessment</b>
                                                Risk Assessment adalah proses menguji keamanan jaringan komputer dengan mencoba mengaksesnya dari luar.
                                            </span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>
                                                <b>Security Policies</b>
                                                Security Policies adalah proses menguji keamanan jaringan komputer dengan mencoba mengaksesnya dari luar.
                                            </span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>
                                                <b>Incident Response</b>
                                                Incident Response adalah proses menguji keamanan jaringan komputer dengan mencoba mengaksesnya dari luar.
                                            </span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>
                                                <b>Disaster Recovery</b>
                                                Disaster Recovery adalah proses menguji keamanan jaringan komputer dengan mencoba mengaksesnya dari luar.
                                            </span>
                                        </li>
                                        <li class="flex items-center space-x-3 p-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                                            <i class="fas fa-play-circle text-indigo-600"></i>
                                            <span>
                                                <b>Compliance & Regulations</b>
                                                Compliance & Regulations adalah proses menguji keamanan jaringan komputer dengan mencoba mengaksesnya dari luar.
                                            </span>
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