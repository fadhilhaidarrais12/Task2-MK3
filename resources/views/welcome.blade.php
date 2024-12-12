<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fadhil Haidar Rais_XI PPLG 4</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans text-gray-800">
    <!-- Main Section -->
    <div id="main" class="bg-cover bg-center h-[70vh]" style="background-image: url('{{ asset('img/main.png') }}');">
        <div class="container mx-auto px-4">
            <!-- Navigation -->
            <nav class="flex justify-between items-center py-4">
                <img src="{{ asset('img/logo.png') }}" alt="Logo" class="h-12">
                <ul class="hidden md:flex gap-6 text-white">
                    <li><a href="#" class="hover:text-gray-300">Home</a></li>
                    <li><a href="#" class="hover:text-gray-300">About</a></li>
                    <li><a href="#" class="hover:text-gray-300">Services</a></li>
                    <li><a href="#" class="hover:text-gray-300">Contact</a></li>
                    <li><button class="border-2 border-white px-4 py-2 rounded-md text-white font-bold">202-505-3333</button></li>
                </ul>
                <img src="{{ asset('img/menu.svg') }}" alt="Menu" class="block md:hidden h-8 cursor-pointer">
            </nav>

            <!-- Main Content -->
            <div class="text-center text-white mt-20">
                <h1 class="text-5xl md:text-6xl font-bold">We all love</h1>
                <h1 class="text-7xl md:text-8xl font-bold mt-2">Nature</h1>
                <p class="mt-4 max-w-md mx-auto">Look deep into nature, and you will understand everything better.</p>
                <button class="mt-6 px-6 py-3 bg-yellow-400 text-gray-800 font-bold rounded-md hover:bg-yellow-300">Get Started</button>
            </div>
        </div>
    </div>

    <!-- Services Section -->
    <section id="Services" class="py-20">
        <div class="container mx-auto px-4">
            <div class="text-center">
                <h1 class="text-4xl font-bold">Our Services</h1>
                <div class="w-36 h-1 bg-yellow-400 mx-auto mt-4"></div>
            </div>
            <div class="flex flex-wrap justify-center gap-8 mt-12">
                <div class="text-center max-w-xs">
                    <img src="{{ asset('img/service-1.png') }}" alt="Web Design" class="rounded-lg transition-transform transform hover:scale-105">
                    <h3 class="text-2xl font-semibold mt-4">Web Design</h3>
                    <p class="mt-2 text-gray-600">Focus on how you can help and benefit your users with simple words.</p>
                </div>
                <div class="text-center max-w-xs">
                    <img src="{{ asset('img/service-2.png') }}" alt="Graphic Design" class="rounded-lg transition-transform transform hover:scale-105">
                    <h3 class="text-2xl font-semibold mt-4">Graphic Design</h3>
                    <p class="mt-2 text-gray-600">Focus on how you can help and benefit your users with simple words.</p>
                </div>
                <div class="text-center max-w-xs">
                    <img src="{{ asset('img/service-3.png') }}" alt="Content Creation" class="rounded-lg transition-transform transform hover:scale-105">
                    <h3 class="text-2xl font-semibold mt-4">Content Creation</h3>
                    <p class="mt-2 text-gray-600">Focus on how you can help and benefit your users with simple words.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section id="testimonial" class="bg-gray-100 py-20">
        <div class="container mx-auto px-4 text-center">
            <img src="{{ asset('img/quote.png') }}" alt="Quote" class="mx-auto mb-6">
            <h1 class="text-2xl font-medium italic">"Original and with an innate understanding of their customer's needs, the team at Love Nature are always a pleasure to work with."</h1>
            <div class="flex flex-col items-center mt-6">
                <img src="./img/profile.png" alt="Jane Miller" class="h-16 w-16 rounded-full">
                <h4 class="mt-4 font-semibold">Jane Miller</h4>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section id="about-us" class="py-20">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center gap-12">
            <div class="max-w-md">
                <h4 class="text-yellow-400 font-semibold">ABOUT US</h4>
                <h1 class="text-3xl font-bold mt-4">Tell website visitors who you are and why they should choose your business.</h1>
                <p class="mt-4 text-gray-600">Because when a visitor first lands on your website, you're a stranger to them. They have to get to know you in order to want to read your blog posts, subscribe to your email newsletter, or buy what you're selling.</p>
                <button class="mt-6 px-6 py-3 bg-yellow-400 text-gray-800 font-bold rounded-md hover:bg-yellow-300">Let's Talk Now</button>
            </div>
            <div>
                <img src="{{ asset('img/about.png') }}" alt="About Us">
            </div>
        </div>
    </section>

    <!-- Questions Section -->
    <section id="questions" class="bg-cover bg-center h-[500px] flex items-center justify-center text-center text-white" style="background-image: url('./img/main-2.png');">
        <div class="px-4">
            <h1 class="text-4xl font-bold">QUESTION?</h1>
            <p class="mt-4 max-w-lg mx-auto">Whether you're curious about features, a free trial, or even press, we're here to answer any questions.</p>
            <button class="mt-6 px-6 py-3 bg-yellow-400 text-gray-800 font-bold rounded-md hover:bg-yellow-300">Let's Talk Now</button>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-4 flex flex-col md:flex-row justify-between items-center gap-4">
            <ul class="flex gap-4">
                <li><a href="#" class="hover:text-gray-400">Home</a></li>
                <li><a href="#" class="hover:text-gray-400">About</a></li>
                <li><a href="#" class="hover:text-gray-400">Services</a></li>
                <li><a href="#" class="hover:text-gray-400">Contact</a></li>
            </ul>
            <img src="{{ asset('img/logo-colored.png') }}" alt="Footer Logo" class="h-12">
            <p class="text-sm">Love Nature by Tyler Moore</p>
        </div>
    </footer>
</body>
</html>
