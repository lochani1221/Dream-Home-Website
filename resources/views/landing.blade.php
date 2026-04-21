
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Your Dream Home</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white text-gray-800">

    <!-- Navbar -->
    <header class="shadow-md bg-white">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <h1 class="text-2xl font-bold text-amber-800 text-brand">Dwello</h1>
            <nav class="hidden md:flex space-x-6">
                <a href="#" class="font-bold text-brand hover:text-brand/80">Home</a>

                <a href="#" class="font-bold text-brand hover:text-brand/80">Service</a>
                <a href="#" class="font-bold text-brand hover:text-brand/80">Agents</a>
                <a href="#" class="font-bold text-brand hover:text-brand/80">Contact</a>
            </nav>
            <div class="space-x-3">
                <a href="{{ route('register') }}" 
                   class="text-white font-bold rounded-lg hover:bg-amber-900 bg-brand px-4 py-2 rounded hover:bg-brand/80">Sign Up</a>
                   
                <a href="{{ route('login') }}" 
                   class="text-white font-bold rounded-lg hover:bg-amber-900 bg-brand px-4 py-2 rounded hover:bg-brand/80">Sign In</a>
            </div>
        </div>
    </header>

<!-- Hero Section -->
<section class="py-16">
  <div class="container mx-auto grid md:grid-cols-2 gap-12 items-center">
    
    <!-- Left: Text -->
    <div class="text-left">
     <h2 class="text-6xl font-bold text-amber-800 mb-4 text-brand"> We Help You To Find <br>Your Dream Home </h2>
      
      <p class="font-bold text-accent hover:text-brand"> Explore our curated selection of exquisite <br> properties meticulously tailored to your<br> unique dream home vision. </p>
<br><br>
      <!-- Button -->
      <a href="{{ route('register') }}" 
         class="text-white font-bold rounded-lg hover:bg-amber-900 bg-brand px-6 py-3 rounded-lg font-semibold hover:bg-amber-900 transition">
        Sign Up
      </a>
    </div>

    <!-- Right: Image -->
    <div class="flex justify-center">
      <img src="{{ asset('images/house-1.jpg') }}" 
           alt="Dream Home" 
           class="w-96 md:w-[36rem] lg:w-[40rem] rounded-xl shadow-lg">
           
    </div>
    
  </div>
</section>


<!-- Filter/Search Section -->
<section class="container mx-auto px-6 py-8">
    <div class="bg-amber-100 rounded-xl p-6 flex flex-col md:flex-row items-center justify-between gap-4 shadow-md bg-light">
        <!-- Location -->
        <input type="text" placeholder="Location" 
               class="flex-1 p-3 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-amber-300 ">

        <!-- Type -->
        <input type="text" placeholder="Type" 
               class="flex-1 p-3 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-amber-300">

        <!-- Price Range -->
        <input type="text" placeholder="Price Range" 
               class="flex-1 p-3 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-amber-300">

        <!-- Sign Up Button -->
        <a href="{{ route('register') }}" 
           class="text-white font-bold rounded-lg hover:bg-amber-900 bg-brand px-6 py-3 rounded hover:bg-amber-800">
            Sign Up
        </a>
    </div>
</section>


<section class="py-16">
  <div class="container mx-auto grid md:grid-cols-2 gap-12 items-center">
    <!-- Left: Image -->
    <div class="flex justify-center">
<!-- <img src="/images/house-4.jpg" alt="Support Team" class="rounded-xl shadow-lg w-full max-w-md"> -->
      <img src="{{ asset('images/house-1.jpg') }}" alt="Support Team" class="rounded-xl shadow-lg w-full max-w-md">
      

    </div>

    <!-- Right: Content -->
    <div class="text-left">
      <!-- Headline -->
      <h2 class="text-4xl font-bold text-amber-800 mb-4 text-brand">
        We Help You To Find <br>Your Dream Home
      </h2>

      <!-- Small description -->
      <p class="text-lg font-semibold text-accent-600 mb-6 text-accent">
        Our dedicated team is ready to assist you with all your needs. 
        Whether it’s live support, FAQs, or email inquiries, 
        we make sure you get the right help at the right time.
      </p>

      <!-- Stats -->
      <div class="flex gap-12 text-4xl font-extrabold text-amber-800 text-brand">
        <div>
          8k+ <br>
          <span class="text-lg font-normal text-accent-600 text-accent">Houses Available</span>
        </div>
        <div>
          6k+ <br>
          <span class="text-lg font-normal text-accent-600 text-accent">Houses Sold</span>
        </div>
        <div>
          2k+ <br>
          <span class="text-lg font-normal text-accent-600 text-accent">Trusted Agents</span>
        </div>
      </div>
    </div>
  </div>
</section>





<!-- Features Section -->
<section class="py-12">
    <div class="container mx-auto text-center">
        <h3 class="text-2xl font-bold mb-8 text-amber-800 text-brand">Why Choose Us</h3>
        <h3 class="font-bold text-accent hover:text-brand">
            Elevating Your Home Buying Experience With Wxpertise, Integrity,<br>and Unmatched Personalized Service
        </h3><br>

        <div class="grid gap-8 md:grid-cols-4">
            <!-- Feature 1 -->
            <div class="bg-amber-100 shadow-md rounded-lg p-6 bg-light text-left flex flex-col items-start">
                <img src="{{ asset('images/location.png') }}" alt="Expert Guidance" class="w-12 h-12 mb-4">
                

                
                <h4 class="text-lg font-bold mb-2 text-amber-800 text-brand">Expert Guidance</h4>
                <p class="text-accent">All properties are verified and updated regularly.</p>
            </div>

            <!-- Feature 2 -->
            <div class="bg-amber-100 shadow-md rounded-lg p-6 bg-light text-left flex flex-col items-start">
                <img src="{{ asset('images/contact.png') }}" alt="Personalized Service" class="w-12 h-12 mb-4">
                <h4 class="text-lg font-bold mb-2 text-amber-800 text-brand">Personalized Service</h4>
                <p class="text-accent">Work with experienced and trusted real estate agents.</p>
            </div>

            <!-- Feature 3 -->
            <div class="bg-amber-100 shadow-md rounded-lg p-6 bg-light text-left flex flex-col items-start">
                <img src="{{ asset('images/note.png') }}" alt="Transparent Process" class="w-12 h-12 mb-4">
                <h4 class="text-lg font-bold mb-2 text-amber-800 text-brand">Transparent Process</h4>
                <p class="text-accent">We help you find homes that suit your budget.</p>
            </div>

            <!-- Feature 4 -->
            <div class="bg-amber-100 shadow-md rounded-lg p-6 bg-light text-left flex flex-col items-start">
                <img src="{{ asset('images/support.png') }}" alt="Exceptional Support" class="w-12 h-12 mb-4">
                <h4 class="text-lg font-bold mb-2 text-amber-800 text-brand">Exceptional Support</h4>
                <p class="text-accent">We provide guidance and assistance every step of the way.</p>
            </div>
        </div>
    </div>
</section>





    <!-- Testimonials Section -->

<section class="container mx-auto text-center py-12">
    <h3 class="text-2xl font-bold mb-8 text-amber-800 text-brand">Our Popular Residences</h3>
    <div class="grid gap-8 md:grid-cols-4">
        
        <!-- Card 1 -->
        <div class="bg-amber-100 shadow-md rounded-lg overflow-hidden bg-light">
            <!-- Image Top -->
            <img src="{{ asset('images/house-1.jpg') }}" alt="House 1" class="w-full h-48 object-cover">
            
            <!-- Card Details -->
            <div class="p-6">
                <!-- Location -->
                <div class="flex items-center mb-2 text-brand font-bold">
                    <svg class="w-5 h-5 mr-2 text-amber-800 " fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 2C6.686 2 4 4.686 4 8c0 4 6 10 6 10s6-6 6-10c0-3.314-2.686-6-6-6zm0 8a2 2 0 110-4 2 2 0 010 4z"/>
                    </svg>
                    <span>New York, USA</span>
                </div>

                <!-- Rooms & Sqft -->
                <div class="flex items-center mb-4 text-accent space-x-4 font-bold" >
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-1 text-amber-800" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M3 4h14v12H3z" />
                        </svg>
                        <span>3 Rooms</span>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-1 text-amber-800" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 2h16v16H2z" />
                        </svg>
                        <span>1,500 sqft</span>
                    </div>
                </div>

                <!-- Button + Price -->
                <div class="flex justify-between items-center">
                    <a href="{{ route('register') }}" class="bg-amber-800 text-white px-4 py-2 rounded hover:bg-amber-700 bg-brand">
                        Sign Up
                    </a>
                    <span class="font-bold text-amber-800 text-lg text-brand">$450,000</span>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="bg-amber-100 shadow-md rounded-lg overflow-hidden bg-light">
            <img src="{{ asset('images/house-3.jpg') }}" alt="House 2" class="w-full h-48 object-cover">
            <div class="p-6">
                <div class="flex items-center mb-2 text-brand font-bold">
                    <svg class="w-5 h-5 mr-2 text-amber-800" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 2C6.686 2 4 4.686 4 8c0 4 6 10 6 10s6-6 6-10c0-3.314-2.686-6-6-6zm0 8a2 2 0 110-4 2 2 0 010 4z"/>
                    </svg>
                    <span>Los Angeles, USA</span>
                </div>
                <div class="flex items-center mb-4 text-accent space-x-4 font-bold">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-1 text-amber-800" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M3 4h14v12H3z" />
                        </svg>
                        <span>4 Rooms</span>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-1 text-amber-800" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 2h16v16H2z" />
                        </svg>
                        <span>2,000 sqft</span>
                    </div>
                </div>
                <div class="flex justify-between items-center">
                    <a href="{{ route('register') }}" class="bg-amber-800 text-white px-4 py-2 rounded hover:bg-amber-700 bg-brand">
                        Sign Up
                    </a>
                    <span class="font-bold text-amber-800 text-lg text-brand">$650,000</span>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="bg-amber-100 shadow-md rounded-lg overflow-hidden bg-light">
            <img src="{{ asset('images/house-2.jpg') }}" alt="House 3" class="w-full h-48 object-cover">
            <div class="p-6">
                <div class="flex items-center mb-2 text-brand font-bold">
                    <svg class="w-5 h-5 mr-2 text-amber-800" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 2C6.686 2 4 4.686 4 8c0 4 6 10 6 10s6-6 6-10c0-3.314-2.686-6-6-6zm0 8a2 2 0 110-4 2 2 0 010 4z"/>
                    </svg>
                    <span>Miami, USA</span>
                </div>
                <div class="flex items-center mb-4 text-accent space-x-4 font-bold">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-1 text-amber-800" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M3 4h14v12H3z" />
                        </svg>
                        <span>5 Rooms</span>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-1 text-amber-800" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 2h16v16H2z" />
                        </svg>
                        <span>2,500 sqft</span>
                    </div>
                </div>
                <div class="flex justify-between items-center">
                    <a href="{{ route('register') }}" class="bg-amber-800 text-white px-4 py-2 rounded hover:bg-amber-700 bg-brand">
                        Sign Up
                    </a>
                    <span class="font-bold text-amber-800 text-lg text-brand">$850,000</span>
                </div>
            </div>
        </div>

         <!-- Card 4 -->
        <div class="bg-amber-100 shadow-md rounded-lg overflow-hidden bg-light">
            <img src="{{ asset('images/house-3.jpg') }}" alt="House 3" class="w-full h-48 object-cover">
            <div class="p-6">
                <div class="flex items-center mb-2 text-brand font-bold">
                    <svg class="w-5 h-5 mr-2 text-amber-800" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 2C6.686 2 4 4.686 4 8c0 4 6 10 6 10s6-6 6-10c0-3.314-2.686-6-6-6zm0 8a2 2 0 110-4 2 2 0 010 4z"/>
                    </svg>
                    <span>Miami, USA</span>
                </div>
                <div class="flex items-center mb-4 text-accent space-x-4 font-bold">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-1 text-amber-800" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M3 4h14v12H3z" />
                        </svg>
                        <span>5 Rooms</span>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-1 text-amber-800" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 2h16v16H2z" />
                        </svg>
                        <span>2,500 sqft</span>
                    </div>
                </div>
                <div class="flex justify-between items-center">
                    <a href="{{ route('register') }}" class="bg-amber-800 text-white px-4 py-2 rounded hover:bg-amber-700 bg-brand">
                        Sign Up
                    </a>
                    <span class="font-bold text-amber-800 text-lg text-brand">$850,000</span>
                </div>
            </div>
        </div>

    </div>
</section>



  <!-- Testimonials Section -->
<section class="container mx-auto py-12 text-center bg-lightwhite">
    <h3 class="text-2xl font-bold mb-8 text-amber-800 text-brand">
        What People Say <br>About Dwello
    </h3>
    <div class="grid gap-8 md:grid-cols-4">

        <!-- Card 1 -->
        <div class="bg-amber-100 shadow-md rounded-lg overflow-hidden bg-light">
            <!-- Top Image -->
            <img src="{{ asset('images/room-1.jpg') }}" alt="House 1" class="w-full h-32 object-cover">

            <div class="p-6">
                <!-- Profile + Name + Location + Rating -->
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center">
                        <img src="{{ asset('images/image-1.jpg') }}" alt="John Doe" class="w-12 h-12 rounded-full mr-3 object-cover shadow-sm">
                        <div class="text-left">
                            <h4 class="font-semibold text-brand-800 text-brand">John Doe</h4>
                            <p class="text-accent-600 text-accent">New York, USA</p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.974a1 1 0 00.95.69h4.184c.969 0 1.371 1.24.588 1.81l-3.39 2.462a1 1 0 00-.364 1.118l1.286 3.974c.3.921-.755 1.688-1.54 1.118l-3.39-2.462a1 1 0 00-1.175 0l-3.39 2.462c-.784.57-1.838-.197-1.539-1.118l1.285-3.974a1 1 0 00-.364-1.118L2.05 9.401c-.784-.57-.38-1.81.588-1.81h4.183a1 1 0 00.95-.69l1.286-3.974z"/>
                        </svg>
                        <span class="text-accent-600 text-accent">5.0</span>
                    </div>
                </div>

                <p class="text-accent-700 text-accent  font-bold text-left">
                    “Great service and professional team. Helped me find the perfect home.”
                </p>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="bg-amber-100 shadow-md rounded-lg overflow-hidden bg-light">
            <img src="{{ asset('images/room-2.jpg') }}" alt="House 2" class="w-full h-32 object-cover">
            <div class="p-6">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center">
                        <img src="{{ asset('images/image-2.jpg') }}" alt="Sarah Lee" class="w-12 h-12 rounded-full mr-3 object-cover shadow-sm">
                        <div class="text-left">
                            <h4 class="font-semibold text-brand-800 text-brand">Sarah Lee</h4>
                            <p class="text-accent-600 text-accent">Los Angeles, USA</p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.974a1 1 0 00.95.69h4.184c.969 0 1.371 1.24.588 1.81l-3.39 2.462a1 1 0 00-.364 1.118l1.286 3.974c.3.921-.755 1.688-1.54 1.118l-3.39-2.462a1 1 0 00-1.175 0l-3.39 2.462c-.784.57-1.838-.197-1.539-1.118l1.285-3.974a1 1 0 00-.364-1.118L2.05 9.401c-.784-.57-.38-1.81.588-1.81h4.183a1 1 0 00.95-.69l1.286-3.974z"/>
                        </svg>
                        <span class="text-accent-600 text-accent">4.8</span>
                    </div>
                </div>
                <p class="text-accent-700 text-accent font-bold text-left">
                    “The agents were very helpful and patient. Highly recommended!”
                </p>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="bg-amber-100 shadow-md rounded-lg overflow-hidden bg-light">
            <img src="{{ asset('images/room-1.jpg') }}" alt="House 3" class="w-full h-32 object-cover">
            <div class="p-6">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center">
                        <img src="{{ asset('images/image-1.jpg') }}" alt="Michael Smith" class="w-12 h-12 rounded-full mr-3 object-cover shadow-sm">
                        <div class="text-left">
                            <h4 class="font-semibold text-brand-800 text-brand">Michael Smith</h4>
                            <p class="text-accent-600 text-accent">Miami, USA</p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.974a1 1 0 00.95.69h4.184c.969 0 1.371 1.24.588 1.81l-3.39 2.462a1 1 0 00-.364 1.118l1.286 3.974c.3.921-.755 1.688-1.54 1.118l-3.39-2.462a1 1 0 00-1.175 0l-3.39 2.462c-.784.57-1.838-.197-1.539-1.118l1.285-3.974a1 1 0 00-.364-1.118L2.05 9.401c-.784-.57-.38-1.81.588-1.81h4.183a1 1 0 00.95-.69l1.286-3.974z"/>
                        </svg>
                        <span class="text-accent-600 text-accent">5.0</span>
                    </div>
                </div>
                <p class="text-accent-700  font-bold text-accent text-left">
                    “Dwello made my home buying journey smooth and easy.”
                </p>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="bg-amber-100 shadow-md rounded-lg overflow-hidden bg-light">
            <img src="{{ asset('images/room-2.jpg') }}" alt="House 4" class="w-full h-32 object-cover">
            <div class="p-6">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center">
                        <img src="{{ asset('images/image-2.jpg') }}" alt="Michael Smith" class="w-12 h-12 rounded-full mr-3 object-cover shadow-sm">
                        <div class="text-left">
                            <h4 class="font-semibold text-brand-800 text-brand">Michael Smith</h4>
                            <p class="text-accent-600 text-accent">Miami, USA</p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.974a1 1 0 00.95.69h4.184c.969 0 1.371 1.24.588 1.81l-3.39 2.462a1 1 0 00-.364 1.118l1.286 3.974c.3.921-.755 1.688-1.54 1.118l-3.39-2.462a1 1 0 00-1.175 0l-3.39 2.462c-.784.57-1.838-.197-1.539-1.118l1.285-3.974a1 1 0 00-.364-1.118L2.05 9.401c-.784-.57-.38-1.81.588-1.81h4.183a1 1 0 00.95-.69l1.286-3.974z"/>
                        </svg>
                        <span class="text-accent-600 text-accent">5.0</span>
                    </div>
                </div>
                <p class="text-accent-700 text-accent font-bold text-left">
                    “Dwello made my home buying journey smooth and easy.”
                </p>
            </div>
        </div>

    </div>
</section>


<section class="py-12">
    <div class="container mx-auto text-center">
        <h3 class="text-4xl font-bold mb-8 text-amber-800 text-brand">
            Do You Have Any Questions?<br>Get Help From Us
        </h3>

        <div class="flex justify-center items-center gap-6 text-accent font-bold mb-8">
            <!-- Chat Live -->
            <div class="flex items-center gap-2 cursor-pointer hover:text-brand">
                <img src="/images/tick.png" alt="Chat Icon" class="w-6 h-6">
                <span>Chat live with our support team</span>
            </div>

            <!-- FAQ -->
            <div class="flex items-center gap-2 cursor-pointer hover:text-brand">
                <img src="/images/tick.png" alt="FAQ Icon" class="w-6 h-6">
                <span>Browse our FAQ</span>
            </div>
        </div>

        <!-- Email Form -->
        <form class="flex justify-center items-center gap-4">
            <div class="relative " t>
                <!-- Email Icon -->
                <span class="absolute inset-y-0 left-3 flex items-center text-accent">
                    <img src="/images/email.png" alt="Email Icon" class="w-5 h-5">
                </span>
                <input 
                    type="email" 
                    placeholder="Enter your email address" 
                    class="pl-10 pr-4 py-2 w-96 rounded-lg bg-amber-100 text-accent bg-light focus:outline-none focus:ring-2 focus:ring-amber-300"
                >
            </div>
            <button 
                type="submit" 
                class="px-8 py-2 w-36 bg-amber-800 text-white font-bold rounded-lg hover:bg-amber-900 bg-brand"
            >
                Submit
            </button>
        </form>
    </div>
</section>




    <!-- Footer -->
    <footer class="bg-amber-800 text-amber-100 py-8 bg-light font-bold text-brand">
        <div class="container mx-auto grid md:grid-cols-5 gap-7 px-8">
            <div>
                <h5 class="font-bold mb-5 text-brand">Dwello</h5>
                <p class="text-accent">Bringing you closer to <br> your dream home, one <br>click at time</p>
            </div>
            <div>
                <h5 class="font-bold mb-5 text-brand">Quick Links</h5>
                <ul class="space-y-2 text-accent">
                    <li><a href="#" class="hover:text-white">Our Story</a></li>
                    <li><a href="#" class="hover:text-white">Careers</a></li>
                    <li><a href="#" class="hover:text-white">Our Team</a></li>
                    <li><a href="#" class="hover:text-white">Resources</a></li>
                </ul>
            </div>
            <div>
                <h5 class="font-bold mb-5 text-brand">Support</h5>
                <ul class="space-y-2 text-accent">
                <li><a href="#" class="hover:text-white">FAQ</a></li>
                    <li><a href="#" class="hover:text-white">Contact Us</a></li>
                    <li><a href="#" class="hover:text-white">Help Centre</a></li>
                    <li><a href="#" class="hover:text-white">Terms and Services</a></li>
</ul>
            </div>
            <div>
                <h5 class="font-bold mb-5 text-brand">Find Us</h5>
                <ul class="space-y-2 text-accent">
                    <li><a href="#" class="hover:text-white">Events</a></li>
                    <li><a href="#" class="hover:text-white">Locations</a></li>
                    <li><a href="#" class="hover:text-white">News Letter</a></li>
                </ul>
            </div>
            <div>
                <h5 class="font-bold mb-5 text-brand">Our social</h5>
                <ul class="space-y-2 text-accent">
                    <li><a href="#" class="hover:text-white">Instagram</a></li>
                    <li><a href="#" class="hover:text-white">Facebook</a></li>
                    <li><a href="#" class="hover:text-white">Twitter (X)</a></li>
                </ul>
            </div>
        </div>
        <div class="font-bold mb-5 text-brand"></div>
        <div class="font-bold mb-5 text-brand"></div>
        <div class="font-bold mb-5 text-brand"></div>
        <div class="font-bold mb-5 text-brand"></div>
    </footer>

</body>
</html>
