@extends('layouts.app')

@section('content')
<title>CodeMaster Academy</title>
<x-classroom-layout>


    <!-- Content -->
    <div class="container mx-auto px-4 lg:px-8 max-w-7xl my-5">
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">Full Materi Online Course</h1>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto px-4">
                Pelajari berbagai teknologi terkini dengan kurikulum yang komprehensif dan terstruktur. 
                Materi dirancang oleh praktisi profesional yang berpengalaman di bidangnya.
            </p>
        </div>

        <div class="max-w-6xl mx-auto">
            <!-- Web Development Section -->
            <section class="mb-12 bg-white rounded-lg shadow-lg p-8 mx-4">
                <div class="flex items-center mb-6">
                    <i class="fas fa-code text-4xl text-blue-600 mr-4"></i>
                    <div>
                        <h2 class="text-3xl font-bold text-gray-800">Web Development</h2>
                        <p class="text-gray-600">Durasi: 12 minggu | Level: Beginner - Advanced</p>
                    </div>
                </div>
                
                <p class="text-gray-700 mb-6">Web development mencakup teknologi dan praktik untuk membangun website atau aplikasi web dari awal hingga tingkat lanjut. Kurikulum ini dirancang untuk membantu Anda menjadi full-stack developer yang kompeten.</p>
                
                <div class="grid md:grid-cols-2 gap-8">
                    <div>
                        <h3 class="text-xl font-semibold mb-4 text-gray-800">Frontend Development</h3>
                        <ul class="space-y-4">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                                <div>
                                    <h4 class="font-semibold">HTML5 & CSS3 Modern</h4>
                                    <p class="text-gray-600">Semantic HTML, CSS Grid, Flexbox, Animations</p>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                                <div>
                                    <h4 class="font-semibold">JavaScript ES6+</h4>
                                    <p class="text-gray-600">Async/Await, Modules, DOM Manipulation</p>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                                <div>
                                    <h4 class="font-semibold">React & Vue.js</h4>
                                    <p class="text-gray-600">Components, State Management, Routing</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    
                    <div>
                        <h3 class="text-xl font-semibold mb-4 text-gray-800">Backend Development</h3>
                        <ul class="space-y-4">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                                <div>
                                    <h4 class="font-semibold">PHP & Laravel</h4>
                                    <p class="text-gray-600">MVC, Eloquent ORM, Authentication</p>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                                <div>
                                    <h4 class="font-semibold">Database Management</h4>
                                    <p class="text-gray-600">MySQL, MongoDB, Database Design</p>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                                <div>
                                    <h4 class="font-semibold">API Development</h4>
                                    <p class="text-gray-600">RESTful APIs, GraphQL, Authentication</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="mt-8 p-4 bg-blue-50 rounded-lg">
                    <h4 class="font-semibold text-blue-800 mb-2">Project-Based Learning:</h4>
                    <ul class="list-disc list-inside text-blue-700 space-y-2">
                        <li>E-commerce Website</li>
                        <li>Social Media Platform</li>
                        <li>Content Management System</li>
                        <li>Real-time Chat Application</li>
                    </ul>
                </div>
            </section>

            <!-- Mobile Development Section -->
            <section class="mb-12 bg-white rounded-lg shadow-lg p-8 mx-4">
                <div class="flex items-center mb-6">
                    <i class="fas fa-mobile-alt text-4xl text-purple-600 mr-4"></i>
                    <div>
                        <h2 class="text-3xl font-bold text-gray-800">Mobile Development</h2>
                        <p class="text-gray-600">Durasi: 10 minggu | Level: Intermediate</p>
                    </div>
                </div>

                <p class="text-gray-700 mb-6">Kuasai pengembangan aplikasi mobile untuk platform Android dan iOS dengan pendekatan native dan cross-platform.</p>

                <div class="grid md:grid-cols-2 gap-8">
                    <div>
                        <h3 class="text-xl font-semibold mb-4 text-gray-800">Native Development</h3>
                        <ul class="space-y-4">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                                <div>
                                    <h4 class="font-semibold">Android dengan Kotlin</h4>
                                    <p class="text-gray-600">Android SDK, Material Design, Room Database</p>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                                <div>
                                    <h4 class="font-semibold">iOS dengan Swift</h4>
                                    <p class="text-gray-600">UIKit, SwiftUI, Core Data</p>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="text-xl font-semibold mb-4 text-gray-800">Cross-Platform</h3>
                        <ul class="space-y-4">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                                <div>
                                    <h4 class="font-semibold">Flutter & Dart</h4>
                                    <p class="text-gray-600">Widget Tree, State Management, Firebase Integration</p>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                                <div>
                                    <h4 class="font-semibold">React Native</h4>
                                    <p class="text-gray-600">Components, Navigation, Native Modules</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="mt-8 p-4 bg-purple-50 rounded-lg">
                    <h4 class="font-semibold text-purple-800 mb-2">Proyek Akhir:</h4>
                    <ul class="list-disc list-inside text-purple-700 space-y-2">
                        <li>Food Delivery App</li>
                        <li>Fitness Tracking App</li>
                        <li>Travel Planning App</li>
                    </ul>
                </div>
            </section>

            <!-- Data Science Section -->
            <section class="mb-12 bg-white rounded-lg shadow-lg p-8 mx-4">
                <div class="flex items-center mb-6">
                    <i class="fas fa-brain text-4xl text-green-600 mr-4"></i>
                    <div>
                        <h2 class="text-3xl font-bold text-gray-800">Data Science</h2>
                        <p class="text-gray-600">Durasi: 14 minggu | Level: Intermediate - Advanced</p>
                    </div>
                </div>

                <p class="text-gray-700 mb-6">Pelajari cara menganalisis dan menginterpretasi data kompleks untuk menghasilkan insights yang actionable menggunakan teknik statistik dan machine learning.</p>

                <div class="grid md:grid-cols-2 gap-8">
                    <div>
                        <h3 class="text-xl font-semibold mb-4 text-gray-800">Data Analysis & Processing</h3>
                        <ul class="space-y-4">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                                <div>
                                    <h4 class="font-semibold">Python for Data Science</h4>
                                    <p class="text-gray-600">Pandas, NumPy, Data Cleaning, EDA</p>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                                <div>
                                    <h4 class="font-semibold">Statistical Analysis</h4>
                                    <p class="text-gray-600">Hypothesis Testing, Regression, Time Series</p>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                                <div>
                                    <h4 class="font-semibold">Data Visualization</h4>
                                    <p class="text-gray-600">Matplotlib, Seaborn, Plotly, Dashboard</p>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="text-xl font-semibold mb-4 text-gray-800">Machine Learning</h3>
                        <ul class="space-y-4">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                                <div>
                                    <h4 class="font-semibold">Supervised Learning</h4>
                                    <p class="text-gray-600">Classification, Regression, Random Forests</p>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                                <div>
                                    <h4 class="font-semibold">Deep Learning</h4>
                                    <p class="text-gray-600">Neural Networks, CNN, RNN, TensorFlow</p>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                                <div>
                                    <h4 class="font-semibold">Model Deployment</h4>
                                    <p class="text-gray-600">MLOps, API Development, Monitoring</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="mt-8 p-4 bg-green-50 rounded-lg">
                    <h4 class="font-semibold text-green-800 mb-2">Proyek Data Science:</h4>
                    <ul class="list-disc list-inside text-green-700 space-y-2">
                        <li>Customer Segmentation Analysis</li>
                        <li>Predictive Sales Forecasting</li>
                        <li>Image Recognition System</li>
                        <li>Natural Language Processing Application</li>
                    </ul>
                </div>
            </section>

            <!-- UI/UX Design Section -->
            <section class="mb-12 bg-white rounded-lg shadow-lg p-8 mx-4">
                <div class="flex items-center mb-6">
                    <i class="fas fa-paint-brush text-4xl text-pink-600 mr-4"></i>
                    <div>
                        <h2 class="text-3xl font-bold text-gray-800">UI/UX Design</h2>
                        <p class="text-gray-600">Durasi: 8 minggu | Level: Beginner - Intermediate</p>
                    </div>
                </div>

                <p class="text-gray-700 mb-6">Pelajari prinsip-prinsip desain dan teknik UX research untuk menciptakan produk digital yang tidak hanya indah tetapi juga user-friendly.</p>

                <div class="grid md:grid-cols-2 gap-8">
                    <div>
                        <h3 class="text-xl font-semibold mb-4 text-gray-800">User Experience (UX)</h3>
                        <ul class="space-y-4">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                                <div>
                                    <h4 class="font-semibold">UX Research</h4>
                                    <p class="text-gray-600">User Interview, Usability Testing, Analytics</p>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                                <div>
                                    <h4 class="font-semibold">Information Architecture</h4>
                                    <p class="text-gray-600">User Flow, Sitemap, Content Strategy</p>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                                <div>
                                    <h4 class="font-semibold">Wireframing</h4>
                                    <p class="text-gray-600">Low-fi Prototypes, User Testing, Iteration</p>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="text-xl font-semibold mb-4 text-gray-800">User Interface (UI)</h3>
                        <ul class="space-y-4">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                                <div>
                                    <h4 class="font-semibold">Visual Design</h4>
                                    <p class="text-gray-600">Typography, Color Theory, Layout Design</p>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                                <div>
                                    <h4 class="font-semibold">Design Tools</h4>
                                    <p class="text-gray-600">Figma, Adobe XD, Prototyping</p>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                                <div>
                                    <h4 class="font-semibold">Design Systems</h4>
                                    <p class="text-gray-600">Component Library, Style Guide, Documentation</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="mt-8 p-4 bg-pink-50 rounded-lg">
                    <h4 class="font-semibold text-pink-800 mb-2">Portfolio Projects:</h4>
                    <ul class="list-disc list-inside text-pink-700 space-y-2">
                        <li>E-commerce Mobile App Redesign</li>
                        <li>SaaS Dashboard Design</li>
                        <li>Personal Finance App Design</li>
                        <li>Design System Creation</li>
                    </ul>
                </div>
            </section>
        </div>
    </div>
</x-classroom-layout>

<!-- Tambahkan Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
@endsection
