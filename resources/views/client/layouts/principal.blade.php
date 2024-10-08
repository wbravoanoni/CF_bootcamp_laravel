<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="icon" type="icon" href="assets/images/favicon.png" />
    <title>@yield('title')</title>
    @vite('resources/js/app.js')

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('build/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('build/css/custom.css') }}">


    <style>
        #img-principal {
            background-image: url('https://fastly.picsum.photos/id/1012/3973/2639.jpg?hmac=s2eybz51lnKy2ZHkE2wsgc6S81fVD1W2NKYOSh8bzDc');
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            height: 40vh;
        }
    </style>

</head>

<body>

    @yield('content')

    <!-- Footer -->
    <footer class="border-t border-gray-line">
        <!-- Top part -->
        <div class="container mx-auto px-4 py-10">
            <div class="flex flex-wrap -mx-4">
                <!-- Menu 1 -->
                <div class="w-full sm:w-1/6 px-4 mb-8">
                    <h3 class="text-lg font-semibold mb-4">Shop</h3>
                    <ul>
                        <li><a href="/" class="hover:text-primary">Gatos</a></li>
                        <li><a href="/" class="hover:text-primary">Perros</a></li>
                        <li><a href="/" class="hover:text-primary">Accesorios</a></li>
                    </ul>
                </div>
                <!-- Menu 2 -->
                <div class="w-full sm:w-1/6 px-4 mb-8">
                    <h3 class="text-lg font-semibold mb-4">Paginas</h3>
                    <ul>
                        <li><a href="/shop.html" class="hover:text-primary">Shop</a></li>
                        <li><a href="/single-product-page.html" class="hover:text-primary">Product</a></li>
                        <li><a href="/checkout.html" class="hover:text-primary">Checkout</a></li>
                        <li><a href="/404.html" class="hover:text-primary">404</a></li>
                    </ul>
                </div>
                <!-- Menu 3 -->
                <div class="w-full sm:w-1/6 px-4 mb-8">
                    <h3 class="text-lg font-semibold mb-4">Cuenta</h3>
                    <ul>
                        <li><a href="{{ route('verCarrrito') }}" class="hover:text-primary">Carrito</a></li>
                        <li><a href="{{ route('client.newClient') }}" class="hover:text-primary">Registro</a></li>
                        <li><a href="{{ route('ingreso.index') }}" class="hover:text-primary">Ingreso</a></li>
                    </ul>
                </div>
                <!-- Social Media -->
                <div class="w-full sm:w-1/6 px-4 mb-8">
                    <h3 class="text-lg font-semibold mb-4">Siguenos</h3>
                    <ul>
                        <li class="flex items-center mb-2">
                            <img src="{{ asset('build/images/social_icons/facebook.svg') }}" alt="Facebook"
                                class="w-4 h-4 transition-transform transform hover:scale-110 mr-2">
                            <a href="#" class="hover:text-primary">Facebook</a>
                        </li>
                        <li class="flex items-center mb-2">
                            <img src="{{ asset('build/images/social_icons/twitter.svg') }}" alt="Twitter"
                                class="w-4 h-4 transition-transform transform hover:scale-110 mr-2">
                            <a href="#" class="hover:text-primary">Twitter</a>
                        </li>
                        <li class="flex items-center mb-2">
                            <img src="{{ asset('build/images/social_icons/instagram.svg') }}" alt="Instagram"
                                class="w-4 h-4 transition-transform transform hover:scale-110 mr-2">
                            <a href="#" class="hover:text-primary">Instagram</a>
                        </li>
                        <li class="flex items-center mb-2">
                            <img src="{{ asset('build/images/social_icons/pinterest.svg') }}" alt="Instagram"
                                class="w-4 h-4 transition-transform transform hover:scale-110 mr-2">
                            <a href="#" class="hover:text-primary">Pinterest</a>
                        </li>
                        <li class="flex items-center mb-2">
                            <img src="{{ asset('build/images/social_icons/youtube.svg') }}" alt="Instagram"
                                class="w-4 h-4 transition-transform transform hover:scale-110 mr-2">
                            <a href="#" class="hover:text-primary">YouTube</a>
                        </li>
                    </ul>
                </div>
                <!-- Contact Information -->
                <div class="w-full sm:w-2/6 px-4 mb-8">
                    <h3 class="text-lg font-semibold mb-4">Contact Us</h3>
                    <p><img src="{{ asset('build/images/template-logo.jpeg') }}" alt="Logo" class="h-[60px] mb-4">
                    </p>
                    <p>123 Street Name, Paris, France</p>
                    <p class="text-xl font-bold my-4">Phone: (123) 456-7890</p>
                    <a href="mailto:info@company.com" class="underline">Email: info@company.com</a>
                </div>
            </div>
        </div>

        <!-- Bottom part -->
        <div class="py-6 border-t border-gray-line">
            <div class="container mx-auto px-4 flex flex-wrap justify-between items-center">
                <!-- Copyright and Links -->
                <div class="w-full lg:w-3/4 text-center lg:text-left mb-4 lg:mb-0">
                    <p class="mb-2 font-bold">&copy; 2024 Samyss. Todos los derechos reservados.</p>
                    <ul class="flex justify-center lg:justify-start space-x-4 mb-4 lg:mb-0">
                        <li><a href="#" class="hover:text-primary">Privacy Policy</a></li>
                        <li><a href="#" class="hover:text-primary">Terms of Service</a></li>
                        <li><a href="#" class="hover:text-primary">FAQ</a></li>
                    </ul>
                    <p class="text-sm mt-4"><b>Tu tienda de confianza para productos de mascotas:</b> En nuestra tienda
                        encontrarás todo lo que tu mascota necesita. Ofrecemos una amplia gama de productos de alta
                        calidad para perros, gatos y otras mascotas, desde alimentos nutritivos hasta juguetes, camas, y
                        accesorios esenciales. ¡Nos preocupamos por el bienestar de tu mejor amigo!</p>
                </div>
                <!-- Payment Icons -->
                <div class="w-full lg:w-1/4 text-center lg:text-right">
                    <img src="{{ asset('build/images/social_icons/paypal.svg') }}" alt="PayPal"
                        class="inline-block h-8 mr-2">
                    <img src="{{ asset('build/images/social_icons/stripe.svg') }}" alt="Stripe"
                        class="inline-block h-8 mr-2">
                    <img src="{{ asset('build/images/social_icons/visa.svg') }}" alt="Visa"
                        class="inline-block h-8">
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
