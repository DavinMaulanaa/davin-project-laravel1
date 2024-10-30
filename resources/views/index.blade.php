<!DOCTYPE html>
<html>
<head>
    <title>LEARNK</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/jpg" href="asset/img/logoo.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
</head>
<body class="bg-black overflow-x-hidden relative">
    <!-- Intro Animation -->
    <div class="fixed inset-0 bg-black flex justify-center items-center z-50 animate-fadeOut">
        <h1 class="text-6xl font-bold text-purple-900 animate-introText opacity-0 mt-64">Davin Autobahn</h1>
    </div>

    <!-- Navigation -->
    <nav class="relative w-full h-32 bg-gradient-to-b from-purple-900/90 to-purple-900/30 flex items-center justify-start px-5 shadow-md">
        <img class="w-32 h-auto mr-[600px]" src="logoo.png" alt="logo">
        <div class="flex justify-center w-full">
            <a href="#" class="text-xl text-white px-4 mx-1 leading-[50px] transition-colors duration-300 hover:text-purple-900 relative">HOME</a>
            <a href="{{ route('login') }}" class="text-xl text-white px-4 mx-1 leading-[50px] transition-colors duration-300 hover:text-purple-900">CARS</a>
            <a href="#" class="text-xl text-white px-4 mx-1 leading-[50px] transition-colors duration-300 hover:text-purple-900">GALLERY</a>
            <a href="{{ route('about') }}" class="text-xl text-white px-4 mx-1 leading-[50px] transition-colors duration-300 hover:text-purple-900">ABOUT</a>
        </div>
    </nav>

    <!-- Header -->
    <div class="h-20 bg-black/70 bg-cover bg-center flex justify-center items-center text-white shadow-lg">
        <h1 class="text-3xl absolute bottom-[1000px] z-10 text-white left-[890px]">HOME</h1>
    </div>

    <!-- Main Content -->
    <div class="relative">
        <h1 class="absolute text-purple-900 flex justify-center bottom-[620px] left-[1000px] z-[3] tracking-wide text-4xl">
            <span class="bg-purple-600 rounded px-2 text-white">Davin Autobahn</span>
            <span class="ml-3 text-white" id="typed-text"></span>
        </h1>

        <!-- About Section -->
        <div class="relative">
            <img class="w-[800px] h-auto rounded-[40px] mt-24 ml-24" src="Mekleren1.webp" alt="Mekleren1">
            <div class="absolute z-[1] text-white tracking-wide bottom-[105px] left-[110px] flex gap-2.5">
                <h4>about</h4>
                <h3>Davin<span class="ml-2 text-purple-900">Autobahn</span></h3>
            </div>
            <!-- Description text blocks -->
            <div class="absolute text-white left-[118px] space-y-5 mt-4">
                <h5>We pride ourselves on working with only the finest, most prestigious car brand in the World.</h5>
                <h5>Our portfolio includes the likes of Bugatti, Ferrari, Lamborghini, Mercedes-Benz, Rolls Royce, McLaren and many more.</h5>
                <h5>With such an extensive range of luxury vehicles, we're confident that we can help you find the car of your dreams.</h5>
            </div>
        </div>

        <!-- Highlight Stock -->
        <h2 class="text-white capitalize self-end mt-36 mb-16 ml-[850px]">highlight stock</h2>

        <!-- Car Cards -->
        <div class="grid grid-cols-2 gap-8 px-24">
            <!-- Pagani Card -->
            <div class="relative">
                <img class="w-full rounded-t-xl rounded-b-[40px]" src="paganihuayracb.webp" alt="Pagani Huayra">
                <div class="absolute bottom-0 w-full h-32 bg-purple-900 rounded-b-xl">
                    <div class="p-4 text-white">
                        <h4 class="text-xl capitalize">pagani huayra carbon edition</h4>
                        <div class="flex justify-between mt-4">
                            <span>3.105.000 USD</span>
                            <span>2023 | 0 Km</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- AMG Card -->
            <div class="relative">
                <img class="w-full rounded-t-xl rounded-b-[40px]" src="amgone.webp" alt="Mercedes-AMG One">
                <div class="absolute bottom-0 w-full h-32 bg-purple-900 rounded-b-xl">
                    <div class="p-4 text-white">
                        <h4 class="text-xl capitalize">Mercedes-Benz AMG One</h4>
                        <div class="flex justify-between mt-4">
                            <span>4.873.027 USD</span>
                            <span>2012 | 0 Km</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cars Market Section -->
        <h2 class="text-white text-center mt-24 mb-12">CARS MARKET</h2>
        <hr class="border-purple-600 w-[1100px] mx-auto mb-24">

        <!-- Brand Cards -->
        <div class="grid grid-cols-3 gap-8 px-24 mb-24">
            <!-- German Brands -->
            <div class="bg-purple-900 rounded-xl p-6 h-[550px]">
                <img class="w-full h-44 rounded object-cover mb-6" src="jermanflag.webp" alt="German Flag">
                <div class="grid grid-cols-3 gap-4">
                    <img class="w-20" src="mercy-removebg-preview.png" alt="Mercedes">
                    <img class="w-24" src="maybach-removebg-preview.png" alt="Maybach">
                    <img class="w-24" src="bmw.png" alt="BMW">
                    <img class="w-24" src="brabus.png" alt="Brabus">
                    <img class="w-24" src="poce.png" alt="Porsche">
                    <img class="w-20" src="download-removebg-preview (7).png" alt="Audi">
                </div>
            </div>
            
            <!-- Italian Brands (repeated twice in original) -->
            <div class="bg-purple-900 rounded-xl p-6 h-[550px]">
                <img class="w-full h-44 rounded object-cover mb-6" src="italyflag.png" alt="Italian Flag">
                <div class="grid grid-cols-3 gap-4">
                    <img class="w-20" src="ferarri.png" alt="Ferrari">
                    <img class="w-24" src="lambo.png" alt="Lamborghini">
                    <img class="w-24" src="pagani.png" alt="Pagani">
                </div>
            </div>
        </div>
    </div>

    <script>
        var typed = new Typed("#typed-text", {
            strings: ["Break The Limit", "Make Your Dream To Reality"],
            typeSpeed: 150,
            backSpeed: 150,
            loop: true
        });
    </script>

    <style>
        @keyframes fadeOut {
            0% { opacity: 1; }
            90% { opacity: 1; }
            100% { opacity: 0; visibility: hidden; }
        }
        
        @keyframes introText {
            0% { transform: translateY(-80px); opacity: 0; }
            100% { transform: translateY(0); opacity: 1; }
        }
        
        .animate-fadeOut {
            animation: fadeOut 2s ease-in-out forwards;
        }
        
        .animate-introText {
            animation: introText 1s ease-in-out forwards;
        }
    </style>
</body>
</html>