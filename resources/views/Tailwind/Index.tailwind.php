<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fadhil Haidar Rais_XI PPLG 4</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans bg-gray-100 text-gray-800">
    <!-- Main Section -->
    <div id="main" class="bg-white">
        <div class="container mx-auto p-4">
            <!-- Navigation -->
            <nav class="flex justify-between items-center">
                <img src="./img/logo.png" alt="Logo" class="h-10">
                <ul class="hidden md:flex space-x-6 items-center">
                    <li><a href="#" class="text-gray-600 hover:text-gray-900">Home</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-gray-900">About</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-gray-900">Services</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-gray-900">Contact</a></li>
                    <li><button class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600">202-505-3333</button></li>
                </ul>
                <img src="./img/menu.svg" alt="Menu" class="h-6 cursor-pointer md:hidden">
            </nav>

            <!-- Main Content -->
            <div class="text-center mt-12">
                <h1 class="text-4xl font-bold text-gray-800">We all love</h1>
                <h1 class="text-6xl font-bold text-green-500 mt-2">Nature</h1>
                <p class="text-gray-600 mt-4">
                    Look deep into nature, and you will understand everything better.
                </p>
                <button class="mt-6 bg-green-500 text-white py-2 px-6 rounded-md hover:bg-green-600">
                    Get Started
                </button>
            </div>
        </div>
    </div>

    <!-- Services Section -->
    <section id="Services" class="bg-gray-50 py-12">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-bold mb-6">Our Services</h1>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white shadow-lg p-6 rounded-lg">
                    <img src="./img/service-1.png" alt="" class="h-24 mx-auto mb-4">
                    <h3 class="text-xl font-bold">Web Design</h3>
                    <p class="text-gray-600 mt-2">
                        Focus on how you can help and benefit your user using simple words.
                    </p>
                </div>
                <div class="bg-white shadow-lg p-6 rounded-lg">
                    <img src="./img/service-2.png" alt="" class="h-24 mx-auto mb-4">
                    <h3 class="text-xl font-bold">Graphic Design</h3>
                    <p class="text-gray-600 mt-2">
                        Focus on how you can help and benefit your user using simple words.
                    </p>
                </div>
                <div class="bg-white shadow-lg p-6 rounded-lg">
                    <img src="./img/service-3.png" alt="" class="h-24 mx-auto mb-4">
                    <h3 class="text-xl font-bold">Content Creation</h3>
                    <p class="text-gray-600 mt-2">
                        Focus on how you can help and benefit your user using simple words.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section id="testimonial" class="py-12 bg-white">
        <div class="container mx-auto text-center">
            <img src="./img/quote.png" alt="" class="h-12 mx-auto mb-4">
            <h1 class="text-xl italic font-semibold mb-6">
                "Original and with an innate understanding of their customer's needs, the team at Love Nature are always a pleasure to work with."
            </h1>
            <div class="flex flex-col items-center">
                <img src="./img/profile.png" alt="" class="h-16 w-16 rounded-full mb-2">
                <h4 class="text-lg font-bold">Jane Miller</h4>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section id="about-us" class="py-12 bg-gray-50">
        <div class="container mx-auto flex flex-col md:flex-row items-center">
            <div class="text-center md:text-left md:w-1/2 p-6">
                <h4 class="text-sm uppercase font-semibold text-gray-600">ABOUT US</h4>
                <h1 class="text-4xl font-bold my-4">
                    Tell website visitors who you are and why they should choose your business.
                </h1>
                <p class="text-gray-600">
                    When a visitor lands on your website, they need to get to know you before engaging with your content or services.
                </p>
                <button class="mt-6 bg-green-500 text-white py-2 px-6 rounded-md hover:bg-green-600">
                    Let's Talk Now
                </button>
            </div>
            <div class="md:w-1/2">
                <img src="./img/about.png" alt="About Us" class="w-full rounded-lg shadow-lg">
            </div>
        </div>
    </section>

    <!-- Questions Section -->
    <section id="questions" class="py-12 bg-white text-center">
        <div class="container mx-auto">
            <h1 class="text-4xl font-bold mb-4">QUESTION?</h1>
            <p class="text-gray-600 mb-6">
                Whether you're curious about features, a free trial, or even press, we're here to answer any questions.
            </p>
            <button class="bg-blue-500 text-white py-2 px-6 rounded-md hover:bg-blue-600">
                Let's Talk Now
            </button>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-400 py-6">
        <div class="container mx-auto text-center">
            <ul class="flex justify-center space-x-6 mb-4">
                <li><a href="#" class="hover:text-white">Home</a></li>
                <li><a href="#" class="hover:text-white">About</a></li>
                <li><a href="#" class="hover:text-white">Services</a></li>
                <li><a href="#" class="hover:text-white">Contact</a></li>
            </ul>
            <img src="./img/logo-colored.png" alt="Footer Logo" class="h-8 mx-auto mb-4">
            <p>Love Nature by Tyler Moore</p>
        </div>
    </footer>
</body>
</html>
