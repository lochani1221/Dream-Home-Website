<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dwello – Find Your Dream Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        :root {
            --brand: #92400e;
            --brand-light: #b45309;
            --brand-dark: #78350f;
            --accent: #6b7280;
            --light: #fef3c7;
            --light-bg: #fffbeb;
        }

        * { scroll-behavior: smooth; }

        body {
            font-family: 'DM Sans', sans-serif;
            background: #fff;
            overflow-x: hidden;
        }

        .font-display { font-family: 'Playfair Display', serif; }

        /* ── Navbar ── */
        .navbar {
            position: fixed;
            top: 0; left: 0; right: 0;
            z-index: 100;
            background: rgba(255,255,255,0.85);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(146,64,14,0.08);
            transition: box-shadow 0.3s;
        }
        .navbar.scrolled { box-shadow: 0 4px 24px rgba(146,64,14,0.10); }

        /* ── Hero ── */
        .hero-bg {
            background: linear-gradient(135deg, #fffbeb 0%, #fef3c7 40%, #fde68a 100%);
            position: relative;
            overflow: hidden;
        }
        .hero-blob {
            position: absolute;
            border-radius: 50%;
            filter: blur(80px);
            opacity: 0.35;
            pointer-events: none;
        }
        .hero-blob-1 {
            width: 500px; height: 500px;
            background: #fbbf24;
            top: -120px; right: -80px;
            animation: floatBlob 8s ease-in-out infinite;
        }
        .hero-blob-2 {
            width: 350px; height: 350px;
            background: #f59e0b;
            bottom: -80px; left: -60px;
            animation: floatBlob 10s ease-in-out infinite reverse;
        }
        @keyframes floatBlob {
            0%, 100% { transform: translate(0, 0) scale(1); }
            50% { transform: translate(30px, -30px) scale(1.05); }
        }

        /* ── Animations ── */
        .fade-up {
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 0.7s ease, transform 0.7s ease;
        }
        .fade-up.visible {
            opacity: 1;
            transform: translateY(0);
        }
        .fade-left {
            opacity: 0;
            transform: translateX(-40px);
            transition: opacity 0.7s ease, transform 0.7s ease;
        }
        .fade-left.visible {
            opacity: 1;
            transform: translateX(0);
        }
        .fade-right {
            opacity: 0;
            transform: translateX(40px);
            transition: opacity 0.7s ease, transform 0.7s ease;
        }
        .fade-right.visible {
            opacity: 1;
            transform: translateX(0);
        }
        .delay-1 { transition-delay: 0.1s; }
        .delay-2 { transition-delay: 0.2s; }
        .delay-3 { transition-delay: 0.3s; }
        .delay-4 { transition-delay: 0.4s; }
        .delay-5 { transition-delay: 0.5s; }

        /* ── Stat counter ── */
        .stat-num {
            display: inline-block;
            transition: transform 0.3s;
        }
        .stat-card:hover .stat-num { transform: scale(1.15); }

        /* ── Cards ── */
        .property-card {
            transition: transform 0.35s cubic-bezier(.22,.68,0,1.2), box-shadow 0.35s;
            overflow: hidden;
        }
        .property-card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 20px 48px rgba(146,64,14,0.18);
        }
        .property-card img {
            transition: transform 0.5s ease;
        }
        .property-card:hover img {
            transform: scale(1.07);
        }

        .feature-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease, background 0.3s ease;
        }
        .feature-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 16px 40px rgba(146,64,14,0.15);
            background: linear-gradient(135deg, #fef3c7, #fde68a);
        }
        .feature-card img {
            transition: transform 0.3s ease;
        }
        .feature-card:hover img { transform: rotate(-5deg) scale(1.1); }

        /* ── Testimonial card ── */
        .testimonial-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .testimonial-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 16px 40px rgba(146,64,14,0.15);
        }

        /* ── Search bar ── */
        .search-bar {
            background: rgba(255,255,255,0.95);
            backdrop-filter: blur(8px);
            box-shadow: 0 8px 32px rgba(146,64,14,0.12);
        }

        /* ── CTA Button ── */
        .btn-primary {
            background: var(--brand);
            color: white;
            font-weight: 600;
            padding: 0.75rem 2rem;
            border-radius: 0.75rem;
            position: relative;
            overflow: hidden;
            transition: background 0.3s, transform 0.2s, box-shadow 0.3s;
            display: inline-block;
        }
        .btn-primary::after {
            content: '';
            position: absolute;
            inset: 0;
            background: rgba(255,255,255,0.15);
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.3s ease;
        }
        .btn-primary:hover::after { transform: scaleX(1); }
        .btn-primary:hover {
            background: #78350f;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(146,64,14,0.35);
        }

        /* ── Hero image frame ── */
        .hero-img-wrap {
            position: relative;
        }
        .hero-img-wrap::before {
            content: '';
            position: absolute;
            inset: -12px;
            border: 3px solid rgba(146,64,14,0.2);
            border-radius: 1.5rem;
            animation: borderPulse 3s ease-in-out infinite;
        }
        @keyframes borderPulse {
            0%, 100% { opacity: 0.4; transform: scale(1); }
            50% { opacity: 1; transform: scale(1.01); }
        }

        /* ── Floating badge ── */
        .floating-badge {
            animation: floatY 3s ease-in-out infinite;
        }
        @keyframes floatY {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        /* ── Section divider ── */
        .section-tag {
            display: inline-block;
            background: rgba(146,64,14,0.1);
            color: var(--brand);
            font-size: 0.75rem;
            font-weight: 600;
            letter-spacing: 0.15em;
            text-transform: uppercase;
            padding: 0.3rem 1rem;
            border-radius: 100px;
            margin-bottom: 0.75rem;
        }

        /* ── Footer ── */
        .footer-bg {
            background: linear-gradient(135deg, #78350f 0%, #92400e 60%, #b45309 100%);
        }

        /* ── Navbar link hover ── */
        .nav-link {
            position: relative;
            color: #374151;
            font-weight: 500;
            transition: color 0.2s;
        }
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -2px; left: 0;
            width: 0; height: 2px;
            background: var(--brand);
            transition: width 0.3s ease;
        }
        .nav-link:hover { color: var(--brand); }
        .nav-link:hover::after { width: 100%; }

        /* ── Image skeleton shimmer ── */
        .img-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(146,64,14,0.4), transparent);
            opacity: 0;
            transition: opacity 0.3s;
            border-radius: inherit;
        }
        .property-card:hover .img-overlay { opacity: 1; }

        /* ── FAQ Section ── */
        .email-input:focus {
            outline: none;
            box-shadow: 0 0 0 3px rgba(146,64,14,0.2);
        }

        /* ── Scroll indicator ── */
        .scroll-indicator {
            animation: bounce 2s infinite;
        }
        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(8px); }
        }
    </style>
</head>
<body>

<!-- ══════════════════════════════════
     NAVBAR
══════════════════════════════════ -->
<nav class="navbar" id="navbar">
    <div class="container mx-auto flex justify-between items-center py-4 px-6 max-w-7xl">
        <a href="#" class="font-display text-2xl font-bold text-amber-800 tracking-tight hover:opacity-80 transition-opacity">
            Dwello
        </a>
        <div class="hidden md:flex items-center space-x-8">
            <a href="#" class="nav-link">Home</a>
            <a href="#features" class="nav-link">Services</a>
            <a href="#properties" class="nav-link">Properties</a>
            <a href="#agents" class="nav-link">Agents</a>
            <a href="#contact" class="nav-link">Contact</a>
        </div>
        <div class="flex items-center space-x-3">
            <a href="{{ route('login') }}" class="text-amber-800 font-semibold px-4 py-2 rounded-lg border border-amber-800 hover:bg-amber-50 transition-colors">
                Sign In
            </a>
            <a href="{{ route('register') }}" class="btn-primary text-sm">
                Sign Up
            </a>
        </div>
    </div>
</nav>


<!-- ══════════════════════════════════
     HERO
══════════════════════════════════ -->
<section class="hero-bg pt-28 pb-20 min-h-screen flex items-center">
    <div class="hero-blob hero-blob-1"></div>
    <div class="hero-blob hero-blob-2"></div>

    <div class="container mx-auto px-6 max-w-7xl relative z-10">
        <div class="grid md:grid-cols-2 gap-16 items-center">

            <!-- Left Text -->
            <div class="fade-left visible">
                <span class="section-tag">🏡 #1 Real Estate Platform</span>
                <h2 class="font-display text-6xl lg:text-7xl font-black text-amber-900 leading-tight mb-6">
                    We Help You<br>
                    <span class="relative inline-block">
                        Find Your
                        <svg class="absolute -bottom-2 left-0 w-full" viewBox="0 0 300 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 8C50 2 150 2 298 8" stroke="#f59e0b" stroke-width="4" stroke-linecap="round"/>
                        </svg>
                    </span><br>
                    Dream Home
                </h2>
                <p class="text-gray-600 text-lg leading-relaxed mb-8 max-w-md">
                    Explore our curated selection of exquisite properties meticulously tailored to your unique dream home vision.
                </p>
                <div class="flex flex-wrap gap-4 mb-10">
                    <a href="{{ route('register') }}" class="btn-primary text-base">
                        Get Started Free →
                    </a>
                    <a href="#properties" class="inline-flex items-center gap-2 text-amber-800 font-semibold px-5 py-3 rounded-lg hover:bg-amber-50 transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z"/></svg>
                        View Properties
                    </a>
                </div>

                <!-- Trust badges -->
                <div class="flex items-center gap-6">
                    <div class="flex -space-x-2">
                        <img src="{{ asset('images/image-1.jpg') }}" class="w-9 h-9 rounded-full border-2 border-white object-cover shadow" alt="">
                        <img src="{{ asset('images/image-2.jpg') }}" class="w-9 h-9 rounded-full border-2 border-white object-cover shadow" alt="">
                        <div class="w-9 h-9 rounded-full border-2 border-white bg-amber-800 flex items-center justify-center text-white text-xs font-bold shadow">+</div>
                    </div>
                    <div>
                        <div class="flex items-center gap-1 text-yellow-500">
                            ★★★★★
                        </div>
                        <p class="text-sm text-gray-500">Trusted by <strong class="text-amber-800">10,000+</strong> happy homeowners</p>
                    </div>
                </div>
            </div>

            <!-- Right Image -->
            <div class="fade-right visible flex justify-center relative">
                <div class="hero-img-wrap rounded-2xl overflow-hidden shadow-2xl">
                    <img src="{{ asset('images/house-1.jpg') }}"
                         alt="Dream Home"
                         class="w-full max-w-xl rounded-2xl object-cover"
                         style="aspect-ratio:4/3;">
                </div>

                <!-- Floating badge 1 -->
                <div class="floating-badge absolute top-6 -left-6 bg-white rounded-2xl shadow-lg p-4 flex items-center gap-3">
                    <div class="w-10 h-10 bg-amber-100 rounded-xl flex items-center justify-center text-xl">🏠</div>
                    <div>
                        <p class="text-xs text-gray-500">Properties</p>
                        <p class="font-bold text-amber-800">8,000+</p>
                    </div>
                </div>

                <!-- Floating badge 2 -->
                <div class="floating-badge absolute bottom-8 -right-6 bg-white rounded-2xl shadow-lg p-4 flex items-center gap-3" style="animation-delay: 1.5s;">
                    <div class="w-10 h-10 bg-green-100 rounded-xl flex items-center justify-center text-xl">✓</div>
                    <div>
                        <p class="text-xs text-gray-500">Deals Closed</p>
                        <p class="font-bold text-amber-800">6,000+</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll indicator -->
        <div class="flex justify-center mt-16 scroll-indicator">
            <svg class="w-6 h-6 text-amber-700 opacity-60" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════
     SEARCH BAR
══════════════════════════════════ -->
<section class="py-6 bg-white">
    <div class="container mx-auto px-6 max-w-5xl -mt-8">
        <div class="search-bar rounded-2xl p-2 flex flex-col md:flex-row items-stretch gap-2 fade-up">
            <div class="flex-1 flex items-center gap-3 bg-amber-50 rounded-xl px-4 py-3">
                <svg class="w-5 h-5 text-amber-700 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                <input type="text" placeholder="Location (e.g. New York)" class="bg-transparent w-full focus:outline-none text-gray-700 placeholder-gray-400">
            </div>
            <div class="flex-1 flex items-center gap-3 bg-amber-50 rounded-xl px-4 py-3">
                <svg class="w-5 h-5 text-amber-700 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                <input type="text" placeholder="Property Type" class="bg-transparent w-full focus:outline-none text-gray-700 placeholder-gray-400">
            </div>
            <div class="flex-1 flex items-center gap-3 bg-amber-50 rounded-xl px-4 py-3">
                <svg class="w-5 h-5 text-amber-700 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                <input type="text" placeholder="Price Range" class="bg-transparent w-full focus:outline-none text-gray-700 placeholder-gray-400">
            </div>
            <a href="{{ route('register') }}" class="btn-primary whitespace-nowrap flex items-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                Search
            </a>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════
     STATS
══════════════════════════════════ -->
<section class="py-16 bg-white" id="agents">
    <div class="container mx-auto px-6 max-w-7xl">
        <div class="grid md:grid-cols-2 gap-16 items-center">

            <!-- Left image -->
            <div class="fade-left rounded-2xl overflow-hidden shadow-xl relative">
                <img src="{{ asset('images/house-1.jpg') }}" alt="Support Team" class="w-full object-cover rounded-2xl" style="aspect-ratio:4/3;">
                <div class="absolute inset-0 bg-gradient-to-t from-amber-900/50 to-transparent rounded-2xl"></div>
                <div class="absolute bottom-6 left-6 text-white">
                    <p class="text-sm opacity-80">Since 2010</p>
                    <p class="text-xl font-bold font-display">15+ Years of Excellence</p>
                </div>
            </div>

            <!-- Right content -->
            <div class="fade-right">
                <span class="section-tag">📊 Our Impact</span>
                <h2 class="font-display text-4xl font-bold text-amber-900 mb-4 leading-tight">
                    We Help You To Find<br>Your Dream Home
                </h2>
                <p class="text-gray-600 leading-relaxed mb-10">
                    Our dedicated team is ready to assist you with all your needs. Whether it's live support, FAQs, or email inquiries, we make sure you get the right help at the right time.
                </p>

                <div class="grid grid-cols-3 gap-6">
                    <div class="stat-card text-center p-5 bg-amber-50 rounded-2xl border border-amber-100">
                        <p class="font-display text-3xl font-black text-amber-800 stat-num">8k+</p>
                        <p class="text-sm text-gray-500 mt-1 font-medium">Houses Available</p>
                    </div>
                    <div class="stat-card text-center p-5 bg-amber-50 rounded-2xl border border-amber-100">
                        <p class="font-display text-3xl font-black text-amber-800 stat-num">6k+</p>
                        <p class="text-sm text-gray-500 mt-1 font-medium">Houses Sold</p>
                    </div>
                    <div class="stat-card text-center p-5 bg-amber-50 rounded-2xl border border-amber-100">
                        <p class="font-display text-3xl font-black text-amber-800 stat-num">2k+</p>
                        <p class="text-sm text-gray-500 mt-1 font-medium">Trusted Agents</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════
     FEATURES
══════════════════════════════════ -->
<section class="py-20 bg-amber-50" id="features">
    <div class="container mx-auto px-6 max-w-7xl text-center">
        <div class="fade-up">
            <span class="section-tag">⭐ Why Choose Us</span>
            <h3 class="font-display text-4xl font-bold text-amber-900 mb-3">Your Trusted Real Estate Partner</h3>
            <p class="text-gray-500 max-w-xl mx-auto mb-12">
                Elevating your home buying experience with expertise, integrity, and unmatched personalized service.
            </p>
        </div>

        <div class="grid gap-6 md:grid-cols-4">
            <div class="feature-card bg-white shadow rounded-2xl p-6 text-left fade-up delay-1">
                <div class="w-14 h-14 bg-amber-100 rounded-2xl flex items-center justify-center mb-5">
                    <img src="{{ asset('images/location.png') }}" alt="Expert Guidance" class="w-8 h-8">
                </div>
                <h4 class="font-display text-lg font-bold text-amber-800 mb-2">Expert Guidance</h4>
                <p class="text-gray-500 text-sm leading-relaxed">All properties are verified and updated regularly by our expert team.</p>
            </div>

            <div class="feature-card bg-white shadow rounded-2xl p-6 text-left fade-up delay-2">
                <div class="w-14 h-14 bg-amber-100 rounded-2xl flex items-center justify-center mb-5">
                    <img src="{{ asset('images/contact.png') }}" alt="Personalized Service" class="w-8 h-8">
                </div>
                <h4 class="font-display text-lg font-bold text-amber-800 mb-2">Personalized Service</h4>
                <p class="text-gray-500 text-sm leading-relaxed">Work with experienced and trusted real estate agents who care.</p>
            </div>

            <div class="feature-card bg-white shadow rounded-2xl p-6 text-left fade-up delay-3">
                <div class="w-14 h-14 bg-amber-100 rounded-2xl flex items-center justify-center mb-5">
                    <img src="{{ asset('images/note.png') }}" alt="Transparent Process" class="w-8 h-8">
                </div>
                <h4 class="font-display text-lg font-bold text-amber-800 mb-2">Transparent Process</h4>
                <p class="text-gray-500 text-sm leading-relaxed">We help you find homes that perfectly suit your lifestyle and budget.</p>
            </div>

            <div class="feature-card bg-white shadow rounded-2xl p-6 text-left fade-up delay-4">
                <div class="w-14 h-14 bg-amber-100 rounded-2xl flex items-center justify-center mb-5">
                    <img src="{{ asset('images/support.png') }}" alt="Exceptional Support" class="w-8 h-8">
                </div>
                <h4 class="font-display text-lg font-bold text-amber-800 mb-2">Exceptional Support</h4>
                <p class="text-gray-500 text-sm leading-relaxed">We provide guidance and assistance every step of the way.</p>
            </div>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════
     PROPERTIES
══════════════════════════════════ -->
<section class="py-20 bg-white" id="properties">
    <div class="container mx-auto px-6 max-w-7xl">
        <div class="text-center mb-12 fade-up">
            <span class="section-tag">🏘️ Featured Listings</span>
            <h3 class="font-display text-4xl font-bold text-amber-900 mb-3">Our Popular Residences</h3>
            <p class="text-gray-500">Handpicked properties just for you</p>
        </div>

        <div class="grid gap-8 md:grid-cols-4">

            <!-- Card 1 -->
            <div class="property-card bg-white rounded-2xl shadow-md overflow-hidden fade-up delay-1">
                <div class="relative overflow-hidden h-48">
                    <img src="{{ asset('images/house-1.jpg') }}" alt="House 1" class="w-full h-full object-cover">
                    <div class="img-overlay"></div>
                    <span class="absolute top-3 left-3 bg-amber-800 text-white text-xs font-bold px-3 py-1 rounded-full">For Sale</span>
                </div>
                <div class="p-5">
                    <div class="flex items-center gap-1 text-amber-800 font-semibold text-sm mb-2">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M10 2C6.686 2 4 4.686 4 8c0 4 6 10 6 10s6-6 6-10c0-3.314-2.686-6-6-6zm0 8a2 2 0 110-4 2 2 0 010 4z"/></svg>
                        New York, USA
                    </div>
                    <div class="flex gap-4 text-gray-500 text-sm mb-4">
                        <span>🛏 3 Rooms</span>
                        <span>📐 1,500 sqft</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="font-display font-bold text-amber-800 text-lg">$450,000</span>
                        <a href="{{ route('register') }}" class="btn-primary text-xs px-4 py-2">View</a>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="property-card bg-white rounded-2xl shadow-md overflow-hidden fade-up delay-2">
                <div class="relative overflow-hidden h-48">
                    <img src="{{ asset('images/house-3.jpg') }}" alt="House 2" class="w-full h-full object-cover">
                    <div class="img-overlay"></div>
                    <span class="absolute top-3 left-3 bg-green-700 text-white text-xs font-bold px-3 py-1 rounded-full">New</span>
                </div>
                <div class="p-5">
                    <div class="flex items-center gap-1 text-amber-800 font-semibold text-sm mb-2">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M10 2C6.686 2 4 4.686 4 8c0 4 6 10 6 10s6-6 6-10c0-3.314-2.686-6-6-6zm0 8a2 2 0 110-4 2 2 0 010 4z"/></svg>
                        Los Angeles, USA
                    </div>
                    <div class="flex gap-4 text-gray-500 text-sm mb-4">
                        <span>🛏 4 Rooms</span>
                        <span>📐 2,000 sqft</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="font-display font-bold text-amber-800 text-lg">$650,000</span>
                        <a href="{{ route('register') }}" class="btn-primary text-xs px-4 py-2">View</a>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="property-card bg-white rounded-2xl shadow-md overflow-hidden fade-up delay-3">
                <div class="relative overflow-hidden h-48">
                    <img src="{{ asset('images/house-2.jpg') }}" alt="House 3" class="w-full h-full object-cover">
                    <div class="img-overlay"></div>
                    <span class="absolute top-3 left-3 bg-amber-800 text-white text-xs font-bold px-3 py-1 rounded-full">For Sale</span>
                </div>
                <div class="p-5">
                    <div class="flex items-center gap-1 text-amber-800 font-semibold text-sm mb-2">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M10 2C6.686 2 4 4.686 4 8c0 4 6 10 6 10s6-6 6-10c0-3.314-2.686-6-6-6zm0 8a2 2 0 110-4 2 2 0 010 4z"/></svg>
                        Miami, USA
                    </div>
                    <div class="flex gap-4 text-gray-500 text-sm mb-4">
                        <span>🛏 5 Rooms</span>
                        <span>📐 2,500 sqft</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="font-display font-bold text-amber-800 text-lg">$850,000</span>
                        <a href="{{ route('register') }}" class="btn-primary text-xs px-4 py-2">View</a>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="property-card bg-white rounded-2xl shadow-md overflow-hidden fade-up delay-4">
                <div class="relative overflow-hidden h-48">
                    <img src="{{ asset('images/house-3.jpg') }}" alt="House 4" class="w-full h-full object-cover">
                    <div class="img-overlay"></div>
                    <span class="absolute top-3 left-3 bg-blue-700 text-white text-xs font-bold px-3 py-1 rounded-full">Premium</span>
                </div>
                <div class="p-5">
                    <div class="flex items-center gap-1 text-amber-800 font-semibold text-sm mb-2">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M10 2C6.686 2 4 4.686 4 8c0 4 6 10 6 10s6-6 6-10c0-3.314-2.686-6-6-6zm0 8a2 2 0 110-4 2 2 0 010 4z"/></svg>
                        Chicago, USA
                    </div>
                    <div class="flex gap-4 text-gray-500 text-sm mb-4">
                        <span>🛏 4 Rooms</span>
                        <span>📐 1,800 sqft</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="font-display font-bold text-amber-800 text-lg">$720,000</span>
                        <a href="{{ route('register') }}" class="btn-primary text-xs px-4 py-2">View</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════
     TESTIMONIALS
══════════════════════════════════ -->
<section class="py-20 bg-amber-50">
    <div class="container mx-auto px-6 max-w-7xl">
        <div class="text-center mb-12 fade-up">
            <span class="section-tag">💬 Testimonials</span>
            <h3 class="font-display text-4xl font-bold text-amber-900 mb-3">What People Say About Dwello</h3>
            <p class="text-gray-500">Real stories from happy homeowners</p>
        </div>

        <div class="grid gap-6 md:grid-cols-4">

            <!-- Testimonial 1 -->
            <div class="testimonial-card bg-white rounded-2xl overflow-hidden shadow fade-up delay-1">
                <img src="{{ asset('images/room-1.jpg') }}" alt="" class="w-full h-28 object-cover">
                <div class="p-5">
                    <div class="flex items-center justify-between mb-3">
                        <div class="flex items-center gap-3">
                            <img src="{{ asset('images/image-1.jpg') }}" alt="John Doe" class="w-10 h-10 rounded-full object-cover border-2 border-amber-200">
                            <div>
                                <p class="font-semibold text-amber-800 text-sm">John Doe</p>
                                <p class="text-xs text-gray-400">New York, USA</p>
                            </div>
                        </div>
                        <span class="text-yellow-400 text-sm font-bold">★ 5.0</span>
                    </div>
                    <p class="text-gray-600 text-sm leading-relaxed italic">"Great service and professional team. Helped me find the perfect home."</p>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="testimonial-card bg-white rounded-2xl overflow-hidden shadow fade-up delay-2">
                <img src="{{ asset('images/room-2.jpg') }}" alt="" class="w-full h-28 object-cover">
                <div class="p-5">
                    <div class="flex items-center justify-between mb-3">
                        <div class="flex items-center gap-3">
                            <img src="{{ asset('images/image-2.jpg') }}" alt="Sarah Lee" class="w-10 h-10 rounded-full object-cover border-2 border-amber-200">
                            <div>
                                <p class="font-semibold text-amber-800 text-sm">Sarah Lee</p>
                                <p class="text-xs text-gray-400">Los Angeles, USA</p>
                            </div>
                        </div>
                        <span class="text-yellow-400 text-sm font-bold">★ 4.8</span>
                    </div>
                    <p class="text-gray-600 text-sm leading-relaxed italic">"The agents were very helpful and patient. Highly recommended!"</p>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="testimonial-card bg-white rounded-2xl overflow-hidden shadow fade-up delay-3">
                <img src="{{ asset('images/room-1.jpg') }}" alt="" class="w-full h-28 object-cover">
                <div class="p-5">
                    <div class="flex items-center justify-between mb-3">
                        <div class="flex items-center gap-3">
                            <img src="{{ asset('images/image-1.jpg') }}" alt="Michael Smith" class="w-10 h-10 rounded-full object-cover border-2 border-amber-200">
                            <div>
                                <p class="font-semibold text-amber-800 text-sm">Michael Smith</p>
                                <p class="text-xs text-gray-400">Miami, USA</p>
                            </div>
                        </div>
                        <span class="text-yellow-400 text-sm font-bold">★ 5.0</span>
                    </div>
                    <p class="text-gray-600 text-sm leading-relaxed italic">"Dwello made my home buying journey smooth and easy."</p>
                </div>
            </div>

            <!-- Testimonial 4 -->
            <div class="testimonial-card bg-white rounded-2xl overflow-hidden shadow fade-up delay-4">
                <img src="{{ asset('images/room-2.jpg') }}" alt="" class="w-full h-28 object-cover">
                <div class="p-5">
                    <div class="flex items-center justify-between mb-3">
                        <div class="flex items-center gap-3">
                            <img src="{{ asset('images/image-2.jpg') }}" alt="Emily Chen" class="w-10 h-10 rounded-full object-cover border-2 border-amber-200">
                            <div>
                                <p class="font-semibold text-amber-800 text-sm">Emily Chen</p>
                                <p class="text-xs text-gray-400">Chicago, USA</p>
                            </div>
                        </div>
                        <span class="text-yellow-400 text-sm font-bold">★ 5.0</span>
                    </div>
                    <p class="text-gray-600 text-sm leading-relaxed italic">"Amazing experience from start to finish. Found my perfect home!"</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════
     CONTACT / FAQ CTA
══════════════════════════════════ -->
<section class="py-20 bg-white" id="contact">
    <div class="container mx-auto px-6 max-w-3xl text-center fade-up">
        <span class="section-tag">📧 Get In Touch</span>
        <h3 class="font-display text-4xl font-bold text-amber-900 mb-3">Do You Have Any Questions?<br>Get Help From Us</h3>
        <p class="text-gray-500 mb-8">Our support team is ready to help you anytime.</p>

        <div class="flex justify-center flex-wrap gap-6 text-amber-800 font-semibold mb-10">
            <div class="flex items-center gap-2 hover:text-amber-600 cursor-pointer transition-colors">
                <img src="/images/tick.png" alt="" class="w-5 h-5">
                <span>Chat live with our support team</span>
            </div>
            <div class="flex items-center gap-2 hover:text-amber-600 cursor-pointer transition-colors">
                <img src="/images/tick.png" alt="" class="w-5 h-5">
                <span>Browse our FAQ</span>
            </div>
        </div>

        <div class="flex items-center gap-3 max-w-lg mx-auto">
            <div class="relative flex-1">
                <span class="absolute inset-y-0 left-4 flex items-center">
                    <img src="/images/email.png" alt="" class="w-5 h-5 opacity-50">
                </span>
                <input type="email" placeholder="Enter your email address"
                    class="email-input w-full pl-12 pr-4 py-3 rounded-xl border border-amber-200 bg-amber-50 text-gray-700 placeholder-gray-400 transition-all">
            </div>
            <button class="btn-primary whitespace-nowrap">Submit</button>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════
     FOOTER
══════════════════════════════════ -->
<footer class="footer-bg text-amber-100 py-16">
    <div class="container mx-auto px-6 max-w-7xl">
        <div class="grid md:grid-cols-5 gap-10 mb-12">
            <div class="md:col-span-1">
                <h5 class="font-display text-2xl font-bold text-white mb-4">Dwello</h5>
                <p class="text-amber-200 text-sm leading-relaxed">Bringing you closer to your dream home, one click at a time.</p>
            </div>
            <div>
                <h5 class="font-semibold text-white mb-4">Quick Links</h5>
                <ul class="space-y-2 text-amber-200 text-sm">
                    <li><a href="#" class="hover:text-white transition-colors">Our Story</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Careers</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Our Team</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Resources</a></li>
                </ul>
            </div>
            <div>
                <h5 class="font-semibold text-white mb-4">Support</h5>
                <ul class="space-y-2 text-amber-200 text-sm">
                    <li><a href="#" class="hover:text-white transition-colors">FAQ</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Contact Us</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Help Centre</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Terms of Service</a></li>
                </ul>
            </div>
            <div>
                <h5 class="font-semibold text-white mb-4">Find Us</h5>
                <ul class="space-y-2 text-amber-200 text-sm">
                    <li><a href="#" class="hover:text-white transition-colors">Events</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Locations</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Newsletter</a></li>
                </ul>
            </div>
            <div>
                <h5 class="font-semibold text-white mb-4">Social</h5>
                <ul class="space-y-2 text-amber-200 text-sm">
                    <li><a href="#" class="hover:text-white transition-colors">Instagram</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Facebook</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Twitter (X)</a></li>
                </ul>
            </div>
        </div>
        <div class="border-t border-amber-700 pt-6 flex flex-col md:flex-row justify-between items-center text-amber-300 text-sm">
            <p>&copy; {{ date('Y') }} Dwello. All rights reserved.</p>
            <p class="mt-2 md:mt-0">Made with ❤️ for dream home seekers</p>
        </div>
    </div>
</footer>


<!-- ══════════════════════════════════
     JS — scroll animations + navbar
══════════════════════════════════ -->
<script>
    // Navbar scroll effect
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => {
        navbar.classList.toggle('scrolled', window.scrollY > 20);
    });

    // Intersection Observer for fade animations
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, { threshold: 0.15 });

    document.querySelectorAll('.fade-up, .fade-left, .fade-right').forEach(el => {
        observer.observe(el);
    });
</script>

</body>
</html>