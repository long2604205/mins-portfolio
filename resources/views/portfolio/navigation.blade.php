<nav id="navbar" class="fixed w-full z-50 transition-all duration-300">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center bg-beige/80 bg-blur">
        <a href="#" class="text-2xl font-bold tracking-tight text-warm-brown">
            Elena<span class="text-tan">.</span>
        </a>

        <!-- Desktop Menu -->
        <div class="hidden md:flex space-x-8 items-center">
            <a href="#home" class="text-warm-brown hover:text-tan transition-colors duration-300 font-medium">Home</a>
            <a href="#about" class="text-warm-brown hover:text-tan transition-colors duration-300 font-medium">About</a>
            <a href="#gallery" class="text-warm-brown hover:text-tan transition-colors duration-300 font-medium">Gallery</a>
            <a href="#testimonials" class="text-warm-brown hover:text-tan transition-colors duration-300 font-medium">Testimonials</a>
            <a href="#contact" class="text-warm-brown hover:text-tan transition-colors duration-300 font-medium">Contact</a>
            <a href="#" class="bg-gradient-warm text-warm-brown font-semibold px-6 py-2 rounded-full ripple glow">IB for Work</a>
        </div>

        <!-- Mobile Menu Button -->
        <button id="menu-toggle" class="md:hidden text-warm-brown focus:outline-none">
            <i class="fa fa-bars text-2xl"></i>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-beige/95 bg-blur">
        <div class="container mx-auto px-4 py-3 flex flex-col space-y-4">
            <a href="#home" class="text-warm-brown hover:text-tan transition-colors duration-300 font-medium py-2">Home</a>
            <a href="#about" class="text-warm-brown hover:text-tan transition-colors duration-300 font-medium py-2">About</a>
            <a href="#gallery" class="text-warm-brown hover:text-tan transition-colors duration-300 font-medium py-2">Gallery</a>
            <a href="#testimonials" class="text-warm-brown hover:text-tan transition-colors duration-300 font-medium py-2">Testimonials</a>
            <a href="#contact" class="text-warm-brown hover:text-tan transition-colors duration-300 font-medium py-2">Contact</a>
            <a href="#" class="bg-gradient-warm text-warm-brown font-semibold px-6 py-3 rounded-full text-center ripple glow">IB for Work</a>
        </div>
    </div>
</nav>
