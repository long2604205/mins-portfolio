<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elena Moore | Professional Model & Actor</title>
    <!-- Tailwind CSS v3 -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.8/dist/chart.umd.min.js"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Tailwind Configuration -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        tan: '#D2B48C',
                        beige: '#F5F5DC',
                        'light-gold': '#E0CDA9',
                        'warm-brown': '#8B6E4E'
                    },
                    fontFamily: {
                        inter: ['Inter', 'sans-serif'],
                    },
                    backgroundImage: {
                        'gradient-warm': 'linear-gradient(135deg, #F5F5DC, #D2B48C)',
                        'gradient-dark': 'linear-gradient(135deg, #D2B48C, #8B6E4E)',
                    }
                },
            }
        }
        // tailwind.config = {
        //   theme: {
        //     extend: {
        //       colors: {
        //         tan: '#A67C52',           // đậm hơn D2B48C
        //         beige: '#E6D8AD',         // đậm hơn F5F5DC
        //         'light-gold': '#C9B57E',  // đậm hơn E0CDA9
        //         'warm-brown': '#5C3B21'   // đậm hơn 8B6E4E
        //       },
        //       fontFamily: {
        //         inter: ['Inter', 'sans-serif'],
        //       },
        //       backgroundImage: {
        //         'gradient-warm': 'linear-gradient(135deg, #E6D8AD, #A67C52)',
        //         'gradient-dark': 'linear-gradient(135deg, #A67C52, #5C3B21)',
        //       }
        //     },
        //   }
        // }
    </script>

    <!-- Custom Styles -->
    <style type="text/tailwindcss">
        @layer utilities {
            .content-auto {
                content-visibility: auto;
            }
            .text-shadow {
                text-shadow: 0 2px 4px rgba(0,0,0,0.1);
            }
            .text-shadow-lg {
                text-shadow: 0 4px 8px rgba(0,0,0,0.12), 0 2px 4px rgba(0,0,0,0.08);
            }
            .transition-transform-opacity {
                transition-property: transform, opacity;
            }
            .bg-blur {
                backdrop-filter: blur(8px);
            }
            .scrollbar-hide::-webkit-scrollbar {
                display: none;
            }
            .scrollbar-hide {
                -ms-overflow-style: none;
                scrollbar-width: none;
            }
            .ripple {
                position: relative;
                overflow: hidden;
            }
            .ripple:after {
                content: "";
                display: block;
                position: absolute;
                width: 100%;
                height: 100%;
                top: 0;
                left: 0;
                pointer-events: none;
                background-image: radial-gradient(circle, #fff 10%, transparent 10.01%);
                background-repeat: no-repeat;
                background-position: 50%;
                transform: scale(10, 10);
                opacity: 0;
                transition: transform .5s, opacity 1s;
            }
            .ripple:active:after {
                transform: scale(0, 0);
                opacity: .3;
                transition: 0s;
            }
            .glow {
                transition: all 0.3s ease;
            }
            .glow:hover {
                box-shadow: 0 0 15px rgba(210, 180, 140, 0.6);
                transform: translateY(-2px);
            }
            .parallax {
                transform: translateZ(0);
                will-change: transform;
            }
        }
    </style>
</head>
<body class="font-inter bg-beige text-warm-brown overflow-x-hidden">
<!-- Navigation -->
@include('portfolio.navigation')

<!-- Hero Section -->
<section id="home" class="relative min-h-screen flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 bg-gradient-warm opacity-90 z-0"></div>

    <!-- Decorative Elements -->
    <div class="absolute top-20 left-10 w-20 h-20 rounded-full bg-tan/20 animate-pulse parallax" data-speed="0.1"></div>
    <div class="absolute bottom-20 right-10 w-32 h-32 rounded-full bg-light-gold/30 animate-pulse parallax" data-speed="-0.15"></div>
    <div class="absolute top-1/3 right-1/4 w-16 h-16 rounded-full bg-warm-brown/10 animate-pulse parallax" data-speed="0.2"></div>

    <div class="container mx-auto px-4 py-20 relative z-10">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="order-2 md:order-1">
                <h1 class="text-[clamp(2.5rem,5vw,4rem)] font-bold leading-tight text-warm-brown mb-6 opacity-0" id="hero-title">
                    Elena Gomes
                </h1>
                <h2 class="text-[clamp(1.5rem,3vw,2.5rem)] font-medium text-tan mb-8 opacity-0" id="hero-subtitle">
                    Professional Model & Actor
                </h2>
                <p class="text-[clamp(1rem,2vw,1.25rem)] text-warm-brown/80 mb-8 opacity-0" id="hero-description">
                    With over 8 years of experience in the industry, I specialize in commercial, fashion, and editorial modeling, as well as acting in independent films and theater productions.
                </p>
                <div class="flex flex-wrap gap-4 opacity-0" id="hero-buttons">
                    <a href="#gallery" class="bg-gradient-dark text-white font-semibold px-8 py-3 rounded-full ripple glow">
                        View Portfolio
                    </a>
                    <a href="#contact" class="bg-transparent border-2 border-warm-brown text-warm-brown font-semibold px-8 py-3 rounded-full hover:bg-warm-brown hover:text-white transition-all duration-300">
                        Contact Me
                    </a>
                </div>
            </div>
            <div class="order-1 md:order-2 relative">
                <div class="relative w-full h-[500px] md:h-[600px] rounded-2xl overflow-hidden opacity-0" id="hero-image-container">
                    <!--            <img src="https://picsum.photos/id/1011/800/1200" alt="Elena Moore portrait" class="w-full h-full object-cover object-center">-->
                    <img src="./photo/avatar.png" alt="Elena Moore portrait" class="w-full h-full object-cover object-center">
                    <div class="absolute inset-0 bg-gradient-to-t from-warm-brown/30 to-transparent"></div>
                </div>
                <div class="absolute -bottom-5 -right-5 w-40 h-40 bg-gradient-warm rounded-full opacity-70 blur-xl z-[-1]"></div>
                <div class="absolute -top-5 -left-5 w-40 h-40 bg-gradient-dark rounded-full opacity-70 blur-xl z-[-1]"></div>
            </div>
        </div>
    </div>

    <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce">
        <a href="#about" class="text-warm-brown/70 hover:text-warm-brown transition-colors duration-300">
            <i class="fa fa-chevron-down text-2xl"></i>
        </a>
    </div>
</section>

<!-- About Section -->
<section id="about" class="py-20 bg-white relative">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16 opacity-0" id="about-header">
            <h2 class="text-[clamp(1.5rem,3vw,2.5rem)] font-bold text-warm-brown mb-4">About Me</h2>
            <div class="w-20 h-1 bg-gradient-warm mx-auto rounded-full"></div>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-beige p-8 rounded-2xl shadow-lg opacity-0" id="about-me">
                <h3 class="text-xl font-semibold text-warm-brown mb-4 flex items-center">
                    <i class="fa fa-user-circle mr-3 text-tan"></i> Personal Info
                </h3>
                <ul class="space-y-3">
                    <li class="flex items-center">
                        <span class="text-tan mr-2"><i class="fa fa-calendar"></i></span>
                        <span>Age: 28</span>
                    </li>
                    <li class="flex items-center">
                        <span class="text-tan mr-2"><i class="fa fa-map-marker"></i></span>
                        <span>Location: Los Angeles, CA</span>
                    </li>
                    <li class="flex items-center">
                        <span class="text-tan mr-2"><i class="fa fa-envelope"></i></span>
                        <span>contact@elenamoore.com</span>
                    </li>
                    <li class="flex items-center">
                        <span class="text-tan mr-2"><i class="fa fa-phone"></i></span>
                        <span>+1 (555) 123-4567</span>
                    </li>
                    <li class="flex items-center">
                        <span class="text-tan mr-2"><i class="fa fa-briefcase"></i></span>
                        <span>8+ years experience</span>
                    </li>
                </ul>
                <div class="mt-6">
                    <h4 class="font-medium text-warm-brown mb-3">Social Media</h4>
                    <div class="flex space-x-3">
                        <a href="#" class="w-10 h-10 rounded-full bg-tan/20 flex items-center justify-center text-tan hover:bg-tan hover:text-white transition-all duration-300">
                            <i class="fa fa-instagram"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-tan/20 flex items-center justify-center text-tan hover:bg-tan hover:text-white transition-all duration-300">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-tan/20 flex items-center justify-center text-tan hover:bg-tan hover:text-white transition-all duration-300">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-tan/20 flex items-center justify-center text-tan hover:bg-tan hover:text-white transition-all duration-300">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="bg-beige p-8 rounded-2xl shadow-lg opacity-0" id="skills">
                <h3 class="text-xl font-semibold text-warm-brown mb-4 flex items-center">
                    <i class="fa fa-star mr-3 text-tan"></i> Skills & Abilities
                </h3>
                <div class="space-y-5">
                    <div>
                        <div class="flex justify-between mb-1">
                            <span class="font-medium">Commercial Modeling</span>
                            <span>95%</span>
                        </div>
                        <div class="h-2 bg-warm-brown/10 rounded-full overflow-hidden">
                            <div class="h-full bg-gradient-warm rounded-full" style="width: 95%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between mb-1">
                            <span class="font-medium">Fashion Modeling</span>
                            <span>90%</span>
                        </div>
                        <div class="h-2 bg-warm-brown/10 rounded-full overflow-hidden">
                            <div class="h-full bg-gradient-warm rounded-full" style="width: 90%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between mb-1">
                            <span class="font-medium">Acting</span>
                            <span>85%</span>
                        </div>
                        <div class="h-2 bg-warm-brown/10 rounded-full overflow-hidden">
                            <div class="h-full bg-gradient-warm rounded-full" style="width: 85%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between mb-1">
                            <span class="font-medium">Theater</span>
                            <span>80%</span>
                        </div>
                        <div class="h-2 bg-warm-brown/10 rounded-full overflow-hidden">
                            <div class="h-full bg-gradient-warm rounded-full" style="width: 80%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between mb-1">
                            <span class="font-medium">Photography Direction</span>
                            <span>75%</span>
                        </div>
                        <div class="h-2 bg-warm-brown/10 rounded-full overflow-hidden">
                            <div class="h-full bg-gradient-warm rounded-full" style="width: 75%"></div>
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <h4 class="font-medium text-warm-brown mb-3">Languages</h4>
                    <div class="grid grid-cols-2 gap-3">
                        <div class="flex items-center">
                            <div class="w-3 h-3 rounded-full bg-tan mr-2"></div>
                            <span>English (Native)</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-3 h-3 rounded-full bg-tan mr-2"></div>
                            <span>Spanish (Fluent)</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-3 h-3 rounded-full bg-tan/50 mr-2"></div>
                            <span>French (Intermediate)</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-3 h-3 rounded-full bg-tan/30 mr-2"></div>
                            <span>Italian (Basic)</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-beige p-8 rounded-2xl shadow-lg opacity-0" id="stats">
                <h3 class="text-xl font-semibold text-warm-brown mb-4 flex items-center">
                    <i class="fa fa-bar-chart mr-3 text-tan"></i> Statistics
                </h3>
                <div class="grid grid-cols-2 gap-4 mb-6">
                    <div class="bg-white p-4 rounded-xl shadow-sm text-center">
                        <div class="text-3xl font-bold text-tan mb-1 counter" data-target="85">0</div>
                        <div class="text-sm text-warm-brown/70">Photoshoots</div>
                    </div>
                    <div class="bg-white p-4 rounded-xl shadow-sm text-center">
                        <div class="text-3xl font-bold text-tan mb-1 counter" data-target="42">0</div>
                        <div class="text-sm text-warm-brown/70">Commercials</div>
                    </div>
                    <div class="bg-white p-4 rounded-xl shadow-sm text-center">
                        <div class="text-3xl font-bold text-tan mb-1 counter" data-target="18">0</div>
                        <div class="text-sm text-warm-brown/70">Film Roles</div>
                    </div>
                    <div class="bg-white p-4 rounded-xl shadow-sm text-center">
                        <div class="text-3xl font-bold text-tan mb-1 counter" data-target="25">0</div>
                        <div class="text-sm text-warm-brown/70">Theater Shows</div>
                    </div>
                </div>

                <div>
                    <h4 class="font-medium text-warm-brown mb-3">Work Distribution</h4>
                    <canvas id="workChart" width="400" height="250"></canvas>
                </div>
            </div>
        </div>

        <div class="mt-16 grid md:grid-cols-2 gap-8">
            <div class="bg-beige p-8 rounded-2xl shadow-lg opacity-0" id="physical">
                <h3 class="text-xl font-semibold text-warm-brown mb-4 flex items-center">
                    <i class="fa fa-user mr-3 text-tan"></i> Physical Features
                </h3>
                <div class="grid grid-cols-2 gap-4">
                    <div class="flex items-center">
                        <span class="text-tan mr-3"><i class="fa fa-arrows-v"></i></span>
                        <div>
                            <div class="font-medium">Height</div>
                            <div class="text-sm text-warm-brown/70">175 cm (5'9")</div>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <span class="text-tan mr-3"><i class="fa fa-balance-scale"></i></span>
                        <div>
                            <div class="font-medium">Weight</div>
                            <div class="text-sm text-warm-brown/70">58 kg (128 lbs)</div>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <span class="text-tan mr-3"><i class="fa fa-eye"></i></span>
                        <div>
                            <div class="font-medium">Eye Color</div>
                            <div class="text-sm text-warm-brown/70">Hazel</div>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <span class="text-tan mr-3"><i class="fa fa-cutlery"></i></span>
                        <div>
                            <div class="font-medium">Hair Color</div>
                            <div class="text-sm text-warm-brown/70">Brown</div>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <span class="text-tan mr-3"><i class="fa fa-scissors"></i></span>
                        <div>
                            <div class="font-medium">Dress Size</div>
                            <div class="text-sm text-warm-brown/70">US 4 / EU 34</div>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <span class="text-tan mr-3"><i class="fa fa-shoe-prints"></i></span>
                        <div>
                            <div class="font-medium">Shoe Size</div>
                            <div class="text-sm text-warm-brown/70">US 8 / EU 39</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-beige p-8 rounded-2xl shadow-lg opacity-0" id="experience">
                <h3 class="text-xl font-semibold text-warm-brown mb-4 flex items-center">
                    <i class="fa fa-briefcase mr-3 text-tan"></i> Experience
                </h3>
                <div class="space-y-5">
                    <div class="border-l-2 border-tan pl-4 py-1">
                        <div class="font-medium text-warm-brown">Principal Model</div>
                        <div class="text-sm text-tan">Elite Model Management - 2018-Present</div>
                        <p class="text-sm text-warm-brown/70 mt-1">Represented in major campaigns for brands like Vogue, Elle, and Gucci.</p>
                    </div>
                    <div class="border-l-2 border-tan pl-4 py-1">
                        <div class="font-medium text-warm-brown">Actress</div>
                        <div class="text-sm text-tan">Independent Film Projects - 2019-Present</div>
                        <p class="text-sm text-warm-brown/70 mt-1">Lead roles in 3 independent feature films and several short films.</p>
                    </div>
                    <div class="border-l-2 border-tan pl-4 py-1">
                        <div class="font-medium text-warm-brown">Theater Performer</div>
                        <div class="text-sm text-tan">Broadway Theater - 2017-2019</div>
                        <p class="text-sm text-warm-brown/70 mt-1">Featured in 5 major theater productions in New York City.</p>
                    </div>
                    <div class="border-l-2 border-tan/50 pl-4 py-1">
                        <div class="font-medium text-warm-brown">Commercial Model</div>
                        <div class="text-sm text-tan/80">Ford Models - 2016-2018</div>
                        <p class="text-sm text-warm-brown/70 mt-1">Worked on various commercial campaigns for local and international brands.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Gallery Section -->
<section id="gallery" class="py-20 bg-gradient-warm relative">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16 opacity-0" id="gallery-header">
            <h2 class="text-[clamp(1.5rem,3vw,2.5rem)] font-bold text-warm-brown mb-4">Portfolio Gallery</h2>
            <div class="w-20 h-1 bg-gradient-dark mx-auto rounded-full"></div>
            <p class="mt-4 text-warm-brown/80 max-w-2xl mx-auto">Explore my collection of professional photoshoots, commercial work, and acting projects.</p>
        </div>

        <!-- Gallery Filters -->
        <div class="flex flex-wrap justify-center gap-3 mb-10 opacity-0" id="gallery-filters">
            <button class="filter-btn active bg-warm-brown text-white px-5 py-2 rounded-full hover:bg-warm-brown/90 transition-colors duration-300" data-filter="all">All</button>
            <button class="filter-btn bg-white text-warm-brown px-5 py-2 rounded-full hover:bg-warm-brown hover:text-white transition-colors duration-300" data-filter="fashion">Fashion</button>
            <button class="filter-btn bg-white text-warm-brown px-5 py-2 rounded-full hover:bg-warm-brown hover:text-white transition-colors duration-300" data-filter="commercial">Commercial</button>
            <button class="filter-btn bg-white text-warm-brown px-5 py-2 rounded-full hover:bg-warm-brown hover:text-white transition-colors duration-300" data-filter="editorial">Editorial</button>
            <button class="filter-btn bg-white text-warm-brown px-5 py-2 rounded-full hover:bg-warm-brown hover:text-white transition-colors duration-300" data-filter="acting">Acting</button>
        </div>

        <!-- Gallery Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="gallery-grid">
            <!-- Gallery Item 1 -->
            <div class="gallery-item fashion group opacity-0" data-category="fashion">
                <div class="relative overflow-hidden rounded-xl shadow-lg">
                    <img src="https://picsum.photos/id/1005/600/800" alt="Fashion photoshoot on a beach" class="w-full h-80 object-cover object-center transform group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-warm-brown/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                        <h3 class="text-white text-xl font-semibold">Summer Collection</h3>
                        <p class="text-beige/90">Fashion photoshoot for Vogue magazine</p>
                        <div class="mt-4 flex space-x-2">
                            <span class="bg-beige/20 text-beige text-xs px-3 py-1 rounded-full">Fashion</span>
                            <span class="bg-beige/20 text-beige text-xs px-3 py-1 rounded-full">Editorial</span>
                        </div>
                    </div>
                    <button class="view-gallery-item absolute top-4 right-4 w-10 h-10 rounded-full bg-white/20 text-white flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 hover:bg-white hover:text-warm-brown">
                        <i class="fa fa-eye"></i>
                    </button>
                </div>
            </div>

            <!-- Gallery Item 2 -->
            <div class="gallery-item commercial group opacity-0" data-category="commercial">
                <div class="relative overflow-hidden rounded-xl shadow-lg">
                    <img src="https://picsum.photos/id/1003/600/800" alt="Commercial photoshoot for a beauty brand" class="w-full h-80 object-cover object-center transform group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-warm-brown/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                        <h3 class="text-white text-xl font-semibold">Glow Beauty Campaign</h3>
                        <p class="text-beige/90">Commercial work for Glow Cosmetics</p>
                        <div class="mt-4 flex space-x-2">
                            <span class="bg-beige/20 text-beige text-xs px-3 py-1 rounded-full">Commercial</span>
                            <span class="bg-beige/20 text-beige text-xs px-3 py-1 rounded-full">Beauty</span>
                        </div>
                    </div>
                    <button class="view-gallery-item absolute top-4 right-4 w-10 h-10 rounded-full bg-white/20 text-white flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 hover:bg-white hover:text-warm-brown">
                        <i class="fa fa-eye"></i>
                    </button>
                </div>
            </div>

            <!-- Gallery Item 3 -->
            <div class="gallery-item editorial group opacity-0" data-category="editorial">
                <div class="relative overflow-hidden rounded-xl shadow-lg">
                    <img src="https://picsum.photos/id/1004/600/800" alt="Editorial photoshoot in a city" class="w-full h-80 object-cover object-center transform group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-warm-brown/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                        <h3 class="text-white text-xl font-semibold">Urban Explorer</h3>
                        <p class="text-beige/90">Editorial series for Elle magazine</p>
                        <div class="mt-4 flex space-x-2">
                            <span class="bg-beige/20 text-beige text-xs px-3 py-1 rounded-full">Editorial</span>
                            <span class="bg-beige/20 text-beige text-xs px-3 py-1 rounded-full">Fashion</span>
                        </div>
                    </div>
                    <button class="view-gallery-item absolute top-4 right-4 w-10 h-10 rounded-full bg-white/20 text-white flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 hover:bg-white hover:text-warm-brown">
                        <i class="fa fa-eye"></i>
                    </button>
                </div>
            </div>

            <!-- Gallery Item 4 -->
            <div class="gallery-item acting group opacity-0" data-category="acting">
                <div class="relative overflow-hidden rounded-xl shadow-lg">
                    <img src="https://picsum.photos/id/1012/600/800" alt="Acting scene from a short film" class="w-full h-80 object-cover object-center transform group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-warm-brown/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                        <h3 class="text-white text-xl font-semibold">Silent Echo</h3>
                        <p class="text-beige/90">Lead role in independent short film</p>
                        <div class="mt-4 flex space-x-2">
                            <span class="bg-beige/20 text-beige text-xs px-3 py-1 rounded-full">Acting</span>
                            <span class="bg-beige/20 text-beige text-xs px-3 py-1 rounded-full">Film</span>
                        </div>
                    </div>
                    <button class="view-gallery-item absolute top-4 right-4 w-10 h-10 rounded-full bg-white/20 text-white flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 hover:bg-white hover:text-warm-brown">
                        <i class="fa fa-eye"></i>
                    </button>
                </div>
            </div>

            <!-- Gallery Item 5 -->
            <div class="gallery-item fashion group opacity-0" data-category="fashion">
                <div class="relative overflow-hidden rounded-xl shadow-lg">
                    <img src="https://picsum.photos/id/1013/600/800" alt="High fashion photoshoot in a studio" class="w-full h-80 object-cover object-center transform group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-warm-brown/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                        <h3 class="text-white text-xl font-semibold">Winter Essentials</h3>
                        <p class="text-beige/90">Fashion campaign for Gucci</p>
                        <div class="mt-4 flex space-x-2">
                            <span class="bg-beige/20 text-beige text-xs px-3 py-1 rounded-full">Fashion</span>
                            <span class="bg-beige/20 text-beige text-xs px-3 py-1 rounded-full">High Fashion</span>
                        </div>
                    </div>
                    <button class="view-gallery-item absolute top-4 right-4 w-10 h-10 rounded-full bg-white/20 text-white flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 hover:bg-white hover:text-warm-brown">
                        <i class="fa fa-eye"></i>
                    </button>
                </div>
            </div>

            <!-- Gallery Item 6 -->
            <div class="gallery-item commercial group opacity-0" data-category="commercial">
                <div class="relative overflow-hidden rounded-xl shadow-lg">
                    <img src="https://picsum.photos/id/1014/600/800" alt="Commercial photoshoot for a lifestyle brand" class="w-full h-80 object-cover object-center transform group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-warm-brown/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                        <h3 class="text-white text-xl font-semibold">Lifestyle Campaign</h3>
                        <p class="text-beige/90">Commercial work for Lifestyle brand</p>
                        <div class="mt-4 flex space-x-2">
                            <span class="bg-beige/20 text-beige text-xs px-3 py-1 rounded-full">Commercial</span>
                            <span class="bg-beige/20 text-beige text-xs px-3 py-1 rounded-full">Lifestyle</span>
                        </div>
                    </div>
                    <button class="view-gallery-item absolute top-4 right-4 w-10 h-10 rounded-full bg-white/20 text-white flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 hover:bg-white hover:text-warm-brown">
                        <i class="fa fa-eye"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="text-center mt-10 opacity-0" id="gallery-load-more">
            <button id="load-more" class="bg-warm-brown text-white font-semibold px-8 py-3 rounded-full ripple glow">
                Load More
            </button>
        </div>
    </div>

    <!-- Lightbox -->
    <div style="display: none" id="lightbox" class="fixed inset-0 bg-black/90 z-50 flex items-center justify-center opacity-0 pointer-events-none transition-opacity duration-300">
        <button id="close-lightbox" class="absolute top-6 right-6 text-white text-3xl hover:text-tan transition-colors duration-300">
            <i class="fa fa-times"></i>
        </button>
        <div class="container mx-auto px-4">
            <div class="relative">
                <img id="lightbox-image" src="./photo/avatar.png" alt="Lightbox image" class="max-h-[80vh] mx-auto">
                <div class="absolute bottom-4 left-0 right-0 text-center">
                    <h3 id="lightbox-title" class="text-white text-xl font-semibold"></h3>
                    <p id="lightbox-desc" class="text-beige/90"></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section id="testimonials" class="py-20 bg-white relative">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16 opacity-0" id="testimonials-header">
            <h2 class="text-[clamp(1.5rem,3vw,2.5rem)] font-bold text-warm-brown mb-4">Client Testimonials</h2>
            <div class="w-20 h-1 bg-gradient-warm mx-auto rounded-full"></div>
            <p class="mt-4 text-warm-brown/80 max-w-2xl mx-auto">What my clients and collaborators say about working with me.</p>
        </div>

        <div class="testimonial-slider relative opacity-0" id="testimonial-slider">
            <div class="overflow-hidden">
                <div class="testimonial-track flex transition-transform duration-500 ease-out" id="testimonial-track">
                    <!-- Testimonial 1 -->
                    <div class="testimonial-slide min-w-full md:min-w-[50%] lg:min-w-[33.333%] px-4">
                        <div class="bg-beige p-8 rounded-2xl shadow-lg h-full">
                            <div class="flex items-center mb-6">
                                <div class="w-16 h-16 rounded-full overflow-hidden border-4 border-tan mr-4">
                                    <img src="https://picsum.photos/id/1025/200/200" alt="Sarah Johnson" class="w-full h-full object-cover">
                                </div>
                                <div>
                                    <h4 class="font-semibold text-warm-brown">Sarah Johnson</h4>
                                    <p class="text-sm text-tan">Creative Director, Vogue</p>
                                </div>
                            </div>
                            <p class="text-warm-brown/80 italic">"Elena is an absolute professional. Her ability to embody any character or concept is remarkable. She brings a unique energy to every photoshoot that elevates the entire project."</p>
                            <div class="mt-4 text-tan">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 2 -->
                    <div class="testimonial-slide min-w-full md:min-w-[50%] lg:min-w-[33.333%] px-4">
                        <div class="bg-beige p-8 rounded-2xl shadow-lg h-full">
                            <div class="flex items-center mb-6">
                                <div class="w-16 h-16 rounded-full overflow-hidden border-4 border-tan mr-4">
                                    <img src="https://picsum.photos/id/1074/200/200" alt="Michael Chen" class="w-full h-full object-cover">
                                </div>
                                <div>
                                    <h4 class="font-semibold text-warm-brown">Michael Chen</h4>
                                    <p class="text-sm text-tan">Director, Silent Echo</p>
                                </div>
                            </div>
                            <p class="text-warm-brown/80 italic">"Working with Elena was a dream come true. Her dedication to her craft and ability to understand complex characters made her the perfect choice for our lead role. She delivered an outstanding performance."</p>
                            <div class="mt-4 text-tan">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 3 -->
                    <div class="testimonial-slide min-w-full md:min-w-[50%] lg:min-w-[33.333%] px-4">
                        <div class="bg-beige p-8 rounded-2xl shadow-lg h-full">
                            <div class="flex items-center mb-6">
                                <div class="w-16 h-16 rounded-full overflow-hidden border-4 border-tan mr-4">
                                    <img src="https://picsum.photos/id/1062/200/200" alt="Emma Rodriguez" class="w-full h-full object-cover">
                                </div>
                                <div>
                                    <h4 class="font-semibold text-warm-brown">Emma Rodriguez</h4>
                                    <p class="text-sm text-tan">Photographer</p>
                                </div>
                            </div>
                            <p class="text-warm-brown/80 italic">"Elena has an incredible presence in front of the camera. She takes direction beautifully and always brings fresh ideas to the shoot. Her versatility allows her to excel in any genre."</p>
                            <div class="mt-4 text-tan">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 4 -->
                    <div class="testimonial-slide min-w-full md:min-w-[50%] lg:min-w-[33.333%] px-4">
                        <div class="bg-beige p-8 rounded-2xl shadow-lg h-full">
                            <div class="flex items-center mb-6">
                                <div class="w-16 h-16 rounded-full overflow-hidden border-4 border-tan mr-4">
                                    <img src="https://picsum.photos/id/1027/200/200" alt="David Wilson" class="w-full h-full object-cover">
                                </div>
                                <div>
                                    <h4 class="font-semibold text-warm-brown">David Wilson</h4>
                                    <p class="text-sm text-tan">Fashion Designer</p>
                                </div>
                            </div>
                            <p class="text-warm-brown/80 italic">"Elena is the perfect model for showcasing my designs. She understands the vision immediately and knows how to bring the clothing to life. Her professionalism is unmatched."</p>
                            <div class="mt-4 text-tan">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slider Controls -->
            <button id="prev-testimonial" class="absolute top-1/2 left-2 transform -translate-y-1/2 w-10 h-10 rounded-full bg-white/80 text-warm-brown flex items-center justify-center hover:bg-warm-brown hover:text-white transition-all duration-300 z-10">
                <i class="fa fa-chevron-left"></i>
            </button>
            <button id="next-testimonial" class="absolute top-1/2 right-2 transform -translate-y-1/2 w-10 h-10 rounded-full bg-white/80 text-warm-brown flex items-center justify-center hover:bg-warm-brown hover:text-white transition-all duration-300 z-10">
                <i class="fa fa-chevron-right"></i>
            </button>

            <!-- Slider Dots -->
            <div class="flex justify-center mt-8 space-x-2" id="testimonial-dots">
                <button class="w-3 h-3 rounded-full bg-tan" data-index="0"></button>
                <button class="w-3 h-3 rounded-full bg-warm-brown/20" data-index="1"></button>
                <button class="w-3 h-3 rounded-full bg-warm-brown/20" data-index="2"></button>
                <button class="w-3 h-3 rounded-full bg-warm-brown/20" data-index="3"></button>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-20 bg-gradient-dark relative">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16 opacity-0" id="contact-header">
            <h2 class="text-[clamp(1.5rem,3vw,2.5rem)] font-bold text-white mb-4">Get In Touch</h2>
            <div class="w-20 h-1 bg-gradient-warm mx-auto rounded-full"></div>
            <p class="mt-4 text-beige/90 max-w-2xl mx-auto">Interested in working together? Fill out the form below and I'll get back to you as soon as possible.</p>
        </div>

        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="opacity-0" id="contact-form-container">
                <form id="contact-form" class="bg-white p-8 rounded-2xl shadow-lg">
                    <div class="grid md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label for="name" class="block text-warm-brown font-medium mb-2">Name</label>
                            <div class="relative">
                                <input type="text" id="name" name="name" class="w-full px-4 py-3 rounded-lg border border-warm-brown/20 focus:border-tan focus:ring-2 focus:ring-tan/30 outline-none transition-all duration-300" placeholder="Your name">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-warm-brown/40">
                    <i class="fa fa-user"></i>
                  </span>
                            </div>
                        </div>
                        <div>
                            <label for="email" class="block text-warm-brown font-medium mb-2">Email</label>
                            <div class="relative">
                                <input type="email" id="email" name="email" class="w-full px-4 py-3 rounded-lg border border-warm-brown/20 focus:border-tan focus:ring-2 focus:ring-tan/30 outline-none transition-all duration-300" placeholder="Your email">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-warm-brown/40">
                    <i class="fa fa-envelope"></i>
                  </span>
                            </div>
                        </div>
                    </div>

                    <div class="mb-6">
                        <label for="subject" class="block text-warm-brown font-medium mb-2">Subject</label>
                        <div class="relative">
                            <input type="text" id="subject" name="subject" class="w-full px-4 py-3 rounded-lg border border-warm-brown/20 focus:border-tan focus:ring-2 focus:ring-tan/30 outline-none transition-all duration-300" placeholder="Subject">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-warm-brown/40">
                  <i class="fa fa-tag"></i>
                </span>
                        </div>
                    </div>

                    <div class="mb-6">
                        <label for="message" class="block text-warm-brown font-medium mb-2">Message</label>
                        <div class="relative">
                            <textarea id="message" name="message" rows="5" class="w-full px-4 py-3 rounded-lg border border-warm-brown/20 focus:border-tan focus:ring-2 focus:ring-tan/30 outline-none transition-all duration-300 resize-none" placeholder="Your message"></textarea>
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-warm-brown/40">
                  <i class="fa fa-pencil"></i>
                </span>
                        </div>
                    </div>

                    <div class="flex items-start mb-6">
                        <div class="flex items-center h-5">
                            <input id="privacy" name="privacy" type="checkbox" class="w-4 h-4 border border-warm-brown/20 rounded focus:ring-tan focus:ring-offset-0">
                        </div>
                        <label for="privacy" class="ml-3 text-sm text-warm-brown/80">
                            I agree to the <a href="#" class="text-tan hover:underline">privacy policy</a> and consent to the processing of my personal data.
                        </label>
                    </div>

                    <button type="submit" class="w-full bg-gradient-warm text-warm-brown font-semibold py-3 rounded-lg ripple glow">
                        Send Message
                    </button>
                </form>
            </div>

            <div class="opacity-0" id="contact-info">
                <div class="bg-white p-8 rounded-2xl shadow-lg mb-8">
                    <h3 class="text-xl font-semibold text-warm-brown mb-6 flex items-center">
                        <i class="fa fa-info-circle mr-3 text-tan"></i> Contact Information
                    </h3>

                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="w-10 h-10 rounded-full bg-tan/20 flex items-center justify-center text-tan mr-4">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div>
                                <h4 class="font-medium text-warm-brown">Location</h4>
                                <p class="text-warm-brown/70">123 Fashion Street, Los Angeles, CA 90210, United States</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="w-10 h-10 rounded-full bg-tan/20 flex items-center justify-center text-tan mr-4">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div>
                                <h4 class="font-medium text-warm-brown">Email</h4>
                                <p class="text-warm-brown/70">contact@elenamoore.com</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="w-10 h-10 rounded-full bg-tan/20 flex items-center justify-center text-tan mr-4">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div>
                                <h4 class="font-medium text-warm-brown">Phone</h4>
                                <p class="text-warm-brown/70">+1 (555) 123-4567</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="w-10 h-10 rounded-full bg-tan/20 flex items-center justify-center text-tan mr-4">
                                <i class="fa fa-clock-o"></i>
                            </div>
                            <div>
                                <h4 class="font-medium text-warm-brown">Working Hours</h4>
                                <p class="text-warm-brown/70">Monday - Friday: 9:00 AM - 6:00 PM</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-lg">
                    <h3 class="text-xl font-semibold text-warm-brown mb-6 flex items-center">
                        <i class="fa fa-download mr-3 text-tan"></i> Download My Portfolio
                    </h3>

                    <div class="space-y-4">
                        <a href="#" class="block p-4 bg-beige rounded-lg hover:bg-tan/20 transition-colors duration-300 flex items-center">
                            <div class="w-10 h-10 rounded-full bg-tan/20 flex items-center justify-center text-tan mr-4">
                                <i class="fa fa-file-pdf-o"></i>
                            </div>
                            <div>
                                <h4 class="font-medium text-warm-brown">PDF Portfolio</h4>
                                <p class="text-sm text-warm-brown/70">12 MB • High resolution</p>
                            </div>
                        </a>

                        <a href="#" class="block p-4 bg-beige rounded-lg hover:bg-tan/20 transition-colors duration-300 flex items-center">
                            <div class="w-10 h-10 rounded-full bg-tan/20 flex items-center justify-center text-tan mr-4">
                                <i class="fa fa-file-image-o"></i>
                            </div>
                            <div>
                                <h4 class="font-medium text-warm-brown">Compressed Images</h4>
                                <p class="text-sm text-warm-brown/70">25 MB • Portfolio images</p>
                            </div>
                        </a>

                        <a href="#" class="block p-4 bg-beige rounded-lg hover:bg-tan/20 transition-colors duration-300 flex items-center">
                            <div class="w-10 h-10 rounded-full bg-tan/20 flex items-center justify-center text-tan mr-4">
                                <i class="fa fa-file-video-o"></i>
                            </div>
                            <div>
                                <h4 class="font-medium text-warm-brown">Showreel Video</h4>
                                <p class="text-sm text-warm-brown/70">45 MB • 3:45 min</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-warm-brown text-white py-12 relative">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-4 gap-8">
            <div>
                <h3 class="text-2xl font-bold mb-4">Elena<span class="text-tan">.</span></h3>
                <p class="text-beige/80 mb-6">Professional model and actor with a passion for creative expression and storytelling through various mediums.</p>
                <div class="flex space-x-4">
                    <a href="#" class="w-10 h-10 rounded-full bg-tan/20 flex items-center justify-center text-tan hover:bg-tan hover:text-white transition-all duration-300">
                        <i class="fa fa-instagram"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-tan/20 flex items-center justify-center text-tan hover:bg-tan hover:text-white transition-all duration-300">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-tan/20 flex items-center justify-center text-tan hover:bg-tan hover:text-white transition-all duration-300">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-tan/20 flex items-center justify-center text-tan hover:bg-tan hover:text-white transition-all duration-300">
                        <i class="fa fa-linkedin"></i>
                    </a>
                </div>
            </div>

            <div>
                <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                <ul class="space-y-2">
                    <li><a href="#home" class="text-beige/80 hover:text-tan transition-colors duration-300">Home</a></li>
                    <li><a href="#about" class="text-beige/80 hover:text-tan transition-colors duration-300">About</a></li>
                    <li><a href="#gallery" class="text-beige/80 hover:text-tan transition-colors duration-300">Portfolio</a></li>
                    <li><a href="#testimonials" class="text-beige/80 hover:text-tan transition-colors duration-300">Testimonials</a></li>
                    <li><a href="#contact" class="text-beige/80 hover:text-tan transition-colors duration-300">Contact</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-lg font-semibold mb-4">Services</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="text-beige/80 hover:text-tan transition-colors duration-300">Fashion Modeling</a></li>
                    <li><a href="#" class="text-beige/80 hover:text-tan transition-colors duration-300">Commercial Modeling</a></li>
                    <li><a href="#" class="text-beige/80 hover:text-tan transition-colors duration-300">Editorial Photography</a></li>
                    <li><a href="#" class="text-beige/80 hover:text-tan transition-colors duration-300">Acting</a></li>
                    <li><a href="#" class="text-beige/80 hover:text-tan transition-colors duration-300">Theater Performances</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-lg font-semibold mb-4">Newsletter</h4>
                <p class="text-beige/80 mb-4">Subscribe to get the latest updates and news.</p>
                <form class="mb-4">
                    <div class="flex">
                        <input type="email" placeholder="Your email" class="px-4 py-2 rounded-l-lg w-full focus:outline-none text-warm-brown">
                        <button type="submit" class="bg-tan text-white px-4 py-2 rounded-r-lg hover:bg-tan/80 transition-colors duration-300">
                            <i class="fa fa-paper-plane"></i>
                        </button>
                    </div>
                </form>
                <p class="text-beige/60 text-sm">I respect your privacy. No spam, ever.</p>
            </div>
        </div>

        <div class="border-t border-tan/30 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center">
            <p class="text-beige/60 text-sm mb-4 md:mb-0">© 2025 Elena Moore. All rights reserved.</p>
            <div class="flex space-x-6">
                <a href="#" class="text-beige/60 hover:text-tan text-sm transition-colors duration-300">Privacy Policy</a>
                <a href="#" class="text-beige/60 hover:text-tan text-sm transition-colors duration-300">Terms of Service</a>
                <a href="#" class="text-beige/60 hover:text-tan text-sm transition-colors duration-300">Cookie Policy</a>
            </div>
        </div>
    </div>
</footer>

<!-- Back to Top Button -->
<button id="back-to-top" class="fixed bottom-6 right-6 w-12 h-12 rounded-full bg-warm-brown text-white flex items-center justify-center shadow-lg opacity-0 pointer-events-none transition-all duration-300 hover:bg-tan">
    <i class="fa fa-chevron-up"></i>
</button>

<!-- JavaScript -->
<script>
    // DOM Elements
    const navbar = document.getElementById('navbar');
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const backToTopBtn = document.getElementById('back-to-top');
    const lightbox = document.getElementById('lightbox');
    const lightboxImage = document.getElementById('lightbox-image');
    const lightboxTitle = document.getElementById('lightbox-title');
    const lightboxDesc = document.getElementById('lightbox-desc');
    const closeLightbox = document.getElementById('close-lightbox');
    const viewGalleryItems = document.querySelectorAll('.view-gallery-item');
    const filterBtns = document.querySelectorAll('.filter-btn');
    const galleryItems = document.querySelectorAll('.gallery-item');
    const testimonialTrack = document.getElementById('testimonial-track');
    const prevTestimonial = document.getElementById('prev-testimonial');
    const nextTestimonial = document.getElementById('next-testimonial');
    const testimonialDots = document.querySelectorAll('#testimonial-dots button');
    const testimonialSlides = document.querySelectorAll('.testimonial-slide');
    const contactForm = document.getElementById('contact-form');
    const loadMoreBtn = document.getElementById('load-more');

    // Scroll animations
    const animateOnScroll = () => {
        const elements = document.querySelectorAll('.opacity-0');

        elements.forEach(element => {
            const elementPosition = element.getBoundingClientRect().top;
            const screenPosition = window.innerHeight / 1.3;

            if (elementPosition < screenPosition) {
                element.classList.add('animate-fadeIn');
                element.classList.remove('opacity-0');
            }
        });

        // Navbar scroll effect
        if (window.scrollY > 50) {
            navbar.classList.add('bg-beige/95', 'shadow-md');
            navbar.classList.remove('py-3');
            navbar.classList.add('py-2');
        } else {
            navbar.classList.remove('bg-beige/95', 'shadow-md');
            navbar.classList.remove('py-2');
            navbar.classList.add('py-3');
        }

        // Back to top button visibility
        if (window.scrollY > 300) {
            backToTopBtn.classList.remove('opacity-0', 'pointer-events-none');
            backToTopBtn.classList.add('opacity-100');
        } else {
            backToTopBtn.classList.add('opacity-0', 'pointer-events-none');
            backToTopBtn.classList.remove('opacity-100');
        }

        // Parallax effect
        const parallaxElements = document.querySelectorAll('.parallax');
        parallaxElements.forEach(element => {
            const speed = element.getAttribute('data-speed') || 0.2;
            const yPos = -(window.scrollY * speed);
            element.style.transform = `translateY(${yPos}px)`;
        });
    };

    // Mobile menu toggle
    menuToggle.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
        if (menuToggle.innerHTML.includes('bars')) {
            menuToggle.innerHTML = '<i class="fa fa-times text-2xl"></i>';
        } else {
            menuToggle.innerHTML = '<i class="fa fa-bars text-2xl"></i>';
        }
    });

    // Close mobile menu when clicking on a link
    document.querySelectorAll('#mobile-menu a').forEach(link => {
        link.addEventListener('click', () => {
            mobileMenu.classList.add('hidden');
            menuToggle.innerHTML = '<i class="fa fa-bars text-2xl"></i>';
        });
    });

    // Back to top functionality
    backToTopBtn.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    // Smooth scrolling for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            const targetId = this.getAttribute('href');
            if (targetId === '#') return;

            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });

    // Lightbox functionality
    viewGalleryItems.forEach(item => {
        item.addEventListener('click', () => {
            const galleryItem = item.closest('.gallery-item');
            const image = galleryItem.querySelector('img').src;
            const title = galleryItem.querySelector('h3').textContent;
            const desc = galleryItem.querySelector('p').textContent;

            lightboxImage.src = image;
            lightboxTitle.textContent = title;
            lightboxDesc.textContent = desc;

            lightbox.classList.remove('opacity-0', 'pointer-events-none');
            document.body.style.overflow = 'hidden';
        });
    });

    closeLightbox.addEventListener('click', () => {
        lightbox.classList.add('opacity-0', 'pointer-events-none');
        document.body.style.overflow = 'auto';
    });

    lightbox.addEventListener('click', (e) => {
        if (e.target === lightbox) {
            lightbox.classList.add('opacity-0', 'pointer-events-none');
            document.body.style.overflow = 'auto';
        }
    });

    // Gallery filtering
    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const filter = btn.getAttribute('data-filter');

            // Update active button
            filterBtns.forEach(b => b.classList.remove('active', 'bg-warm-brown', 'text-white'));
            filterBtns.forEach(b => b.classList.add('bg-white', 'text-warm-brown'));
            btn.classList.add('active', 'bg-warm-brown', 'text-white');
            btn.classList.remove('bg-white', 'text-warm-brown');

            // Filter gallery items
            galleryItems.forEach(item => {
                if (filter === 'all' || item.getAttribute('data-category') === filter) {
                    item.style.display = 'block';
                    setTimeout(() => {
                        item.style.opacity = '1';
                        item.style.transform = 'scale(1)';
                    }, 50);
                } else {
                    item.style.opacity = '0';
                    item.style.transform = 'scale(0.8)';
                    setTimeout(() => {
                        item.style.display = 'none';
                    }, 300);
                }
            });
        });
    });

    // Testimonial slider
    let currentSlide = 0;
    const slideWidth = 100; // 100%
    const slidesToShow = window.innerWidth < 768 ? 1 : window.innerWidth < 1024 ? 2 : 3;

    const updateSlider = () => {
        const offset = currentSlide * (slideWidth / slidesToShow);
        testimonialTrack.style.transform = `translateX(-${offset}%)`;

        // Update dots
        testimonialDots.forEach((dot, index) => {
            if (index === currentSlide) {
                dot.classList.add('bg-tan');
                dot.classList.remove('bg-warm-brown/20');
            } else {
                dot.classList.remove('bg-tan');
                dot.classList.add('bg-warm-brown/20');
            }
        });
    };

    prevTestimonial.addEventListener('click', () => {
        if (currentSlide > 0) {
            currentSlide--;
            updateSlider();
        }
    });

    nextTestimonial.addEventListener('click', () => {
        if (currentSlide < testimonialSlides.length - slidesToShow) {
            currentSlide++;
            updateSlider();
        }
    });

    testimonialDots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            currentSlide = index;
            updateSlider();
        });
    });

    // Handle window resize for responsive slider
    window.addEventListener('resize', () => {
        const newSlidesToShow = window.innerWidth < 768 ? 1 : window.innerWidth < 1024 ? 2 : 3;
        if (newSlidesToShow !== slidesToShow) {
            currentSlide = 0;
            updateSlider();
        }
    });

    // Contact form submission
    contactForm.addEventListener('submit', (e) => {
        e.preventDefault();

        // Simple validation
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const message = document.getElementById('message').value;
        const privacy = document.getElementById('privacy').checked;

        if (!name || !email || !message) {
            alert('Please fill in all required fields.');
            return;
        }

        if (!privacy) {
            alert('Please agree to the privacy policy.');
            return;
        }

        // Simulate form submission
        const submitButton = contactForm.querySelector('button[type="submit"]');
        const originalText = submitButton.innerHTML;

        submitButton.disabled = true;
        submitButton.innerHTML = '<i class="fa fa-spinner fa-spin mr-2"></i> Sending...';

        setTimeout(() => {
            alert('Thank you for your message! I will get back to you soon.');
            contactForm.reset();
            submitButton.disabled = false;
            submitButton.innerHTML = originalText;
        }, 2000);
    });

    // Counter animation
    const animateCounter = (element) => {
        const target = parseInt(element.getAttribute('data-target'));
        const duration = 2000; // 2 seconds
        const step = target / (duration / 16); // 60fps
        let current = 0;

        const updateCounter = () => {
            current += step;
            if (current < target) {
                element.textContent = Math.ceil(current);
                requestAnimationFrame(updateCounter);
            } else {
                element.textContent = target;
            }
        };

        updateCounter();
    };

    // Load more functionality (simulated)
    loadMoreBtn.addEventListener('click', () => {
        loadMoreBtn.innerHTML = '<i class="fa fa-spinner fa-spin mr-2"></i> Loading...';

        setTimeout(() => {
            alert('All items loaded!');
            loadMoreBtn.innerHTML = 'No More Items';
            loadMoreBtn.disabled = true;
            loadMoreBtn.classList.add('opacity-70', 'cursor-not-allowed');
        }, 1500);
    });

    // Initialize Chart.js
    const initChart = () => {
        const ctx = document.getElementById('workChart').getContext('2d');
        new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Fashion', 'Commercial', 'Acting', 'Theater'],
                datasets: [{
                    data: [45, 30, 15, 10],
                    backgroundColor: [
                        '#D2B48C',
                        '#E0CDA9',
                        '#F5F5DC',
                        '#8B6E4E'
                    ],
                    borderWidth: 0
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            padding: 20,
                            font: {
                                family: 'Inter',
                                size: 12
                            }
                        }
                    }
                },
                cutout: '70%'
            }
        });
    };

    // Initial animation trigger
    window.addEventListener('load', () => {
        animateOnScroll();
        initChart();

        // Animate counters when they come into view
        const counters = document.querySelectorAll('.counter');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounter(entry.target);
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        counters.forEach(counter => {
            observer.observe(counter);
        });
    });

    // Scroll event listener
    window.addEventListener('scroll', animateOnScroll);

    // Add animation classes
    document.head.insertAdjacentHTML('beforeend', `
      <style>
        @keyframes fadeIn {
          from { opacity: 0; transform: translateY(20px); }
          to { opacity: 1; transform: translateY(0); }
        }

        .animate-fadeIn {
          animation: fadeIn 0.8s ease forwards;
        }
      </style>
    `);
</script>
</body>
</html>

