<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Victoria Odeh</title>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <!-- <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style> -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        <href="/images/favicon.ico">
    </head>
  <body>
    <header>
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <x-header />
        </div>
    </header>
        <main class="flex flex-col items-center mt-16">
        <img src="{{ asset('images/Victoria Odeh dev.png') }}" alt="Victoria Odeh" class="w-32 h-32 rounded-full border-4 border-gray-300">
        
        <h1 class="mt-4 text-3xl font-bold">Victoria Odeh</h1>
        <p class="mt-2 text-gray-400">I'm a software developer</p>

        <div class="flex space-x-6 mt-4">
            <a href="https://www.linkedin.com/in/victoria-oderinde" target="_blank">
                <img src="{{ asset('images/LinkedIn.png') }}" alt="LinkedIn" class="w-6 h-6">
            </a>
            <a href="https://x.com/Vikydaniella" target="_blank">
                <img src="{{ asset('images/x.png') }}" alt="Twitter" class="w-6 h-6">
            </a>
            <a href="https://github.com/Vikydaniella" target="_blank">
                <img src="{{ asset('images/Github.png') }}" alt="GitHub" class="w-6 h-6">
            </a>
            <a href="https://www.instagram.com/vikydaniella_womanofexcellence" target="_blank">
                <img src="{{ asset('images/Instagram.png') }}" alt="Instagram"  class="w-6 h-6">
            </a>
            <a href="https://www.facebook.com/Vikydaniella" target="_blank">
                <img src="{{ asset('images/Facebook.png') }}" alt="Facebook"  class="w-6 h-6">
            </a>
            <a href="https://www.youtube.com/@VictoriaOdeh" target="_blank">
                <img src="{{ asset('images/Youtube.png') }}" alt="Youtube"  class="w-6 h-6">
            </a>
        </div>

        <a href="#contact" class="mt-6 px-6 py-2 bg-pink-500 text-white font-semibold rounded-full hover:bg-pink-600">Hire me</a>


        <section id="about" class="py-8 px-6 lg:px-12 rounded-lg shadow-lg max-w-4xl mx-auto bg-[#1f88b3] flex flex-col lg:flex-row items-center space-y-6 lg:space-y-0 lg:space-x-8 relative">
        <div class="text-green max-w-lg">
        <h2 class="text-2xl font-bold mb-4">About Me</h2>
        <hr class="w-16 border-t-2 border-green mb-4">
        <p class="text-lg mb-6">
        Hello! I'm <span class="font-semibold text-indigo-400">Victoria Odeh</span>, a software engineer and published author with a passion for media management, writing, People Operations, and women’s empowerment. I’m multifaceted and dedicated to making a positive impact.</p>
            <p class="text-lg mb-6">My career reflects a commitment to creating impact, whether through developing software solutions, managing social media for brands, or authoring books that inspire and uplift. I’ve published several works, including <span class="font-semibold text-indigo-400"> <a href="https://selar.co/s43w61" target="_blank">Be Stirred Up</a></span>, <span class="font-semibold text-indigo-400"> <a href="https://selar.co/917c9t" target="_blank">Money Mingled with Love</a> </span>, and <span class="font-semibold text-indigo-400">Letters to Momma</span>, each reflecting my dedication to storytelling and personal growth.
        </p>
    </div>
    <div class="relative">
        <div class="bg-[#e63342] p-2 rounded-lg absolute -inset-3"></div>
        <img src="{{ asset('images/Victoria Odeh dev.png') }}" alt="Victoria Odeh" class="rounded-lg relative z-10 max-w-sm">
    </div>
</section>

    <h3 class="mt-4 text-3xl font-bold">CERTIFICATIONS</h3>
    <li>SeamlesssHR - Codeable Software Engineering Training (2022)</li>
    <li>University of Lagos - M.A English Literature (2021)</li>
    <li>Google Certification - Google Digital Marketing Certification (2020)</li>
    <li>USAID Global Health Certification- Family Planning and Women’s Health (2019)</li>
    <li>National Youth Service Corps- NYSC Certificate (2017)</li>
    <li>Olabisi Onabanjo University- B. A English (2016) 2nd Class Upper Division</li>
    <li>The Believers Bible College- Diploma in Theology (2015)</li>
    <li>Goshen Universal- Diploma in Theatre Arts (2014)</li>

    <h3 class="mt-4 text-3xl font-bold">PUBLICATIONS AND CREATIVES</h3>
    <li>Daniella: Becoming  a Woman of Excellence, 2024</li>
    <li>Be Stirred Up- 40 Nuggets of Excellence (An Inspirational Book), 2020</li> 
    <li>Sisters from the Rear (A Novel), 2017</li>
    <li>Letters to Momma (An Anthology of Poems), 2017</li>
    <li>Less Than Half-a-Second (Final Year Project), 2015</li>
    <li>Mothercraft (An Anthology of Poems), 2014</li>

    <h3 class="mt-4 text-3xl font-bold">COMMUNITY SERVICE</h3>
    <li>Project Initiator, #Corpers4Communities Skill Acquisition Program, 2017</li>
    <li>Peer Educator Trainer, UNICEF, 2017</li>
    <li>Volunteer, Feed a Child Today (FACT), 2015</li>
    <li>Founder, The Daniellas Foundation, 2015</li> 
    <li>Volunteer, Girls Only, 2014</li>

    <h3 class="mt-4 text-3xl font-bold">AWARDS/RECOGNITIONS</h3>
    <li>Honour for Community Service - The Daniellas Foundation (2018)</li>
    <li>NYSC State Award - Cross River State (2017)</li> 
    <li>NYSC Zonal Award - Ikom Zone, Cross River State (2017)</li>

    <a href="https://docs.google.com/document/d/1eH_4hxM7a_GoNuDZVchqUeAPLe1xjDLn/edit" class="about">Download CV</a>

    <br>

<section id="services" class="services-section">
    <h2>Services</h2>
    <div class="services-container">
      
        <div class="service-card machine-learning">
            <h4>Software Development</h4>
            <p>Turning complex ideas into easy-to use solutions. Committed to building reliable, high-quality software with care and creativity.</p>
        </div>

    
        <div class="service-card software-development">
            <h4>Writing</h4>
            <p>Bringing stories and ideas to life with clarity and impact. Focused on creating authentic, compelling content that resonates with readers.</p>
        </div>

        <div class="service-card mobile-app-dev">
            <h4>Media Management</h4>
            <p>Amplifying brand voices and connecting with audiences through strategic, authentic storytelling.</p>
        </div>

        <div class="service-card software-development">
            <h4>People's Operation</h4>
            <p>Fostering a culture where people thrive. Dedicated to building empowered, engaged teams that drive growth and create meaningful impact.</p>
        </div>

        <div class="service-card machine-learning">
            <h4>Clothing services</h4>
            <p>Creating stylish, personalized clothing options with care and attention to detail. Committed to offering quality, comfort, and designs that reflect individual style.</p>
        </div>
    </div>
    <br>
    <p>Looking for a custom job? <a href="#contact" class="about">Click here to contact me!</a> 👋</p>
</section>


    <h2 id="experience" class="mt-4 text-3xl font-bold">Work Experience</h2>

    <p  class="mt-2 text-1xl font-bold">Feb 2023 - Present | SeamlessHR</p>
    <h3>Software Developer</h3>
    <p>Using PHP/Laravel to create API endpoints and software for blade environment.</p>

    <p class="mt-2 text-1xl font-bold">Nov 2023 - March 2024 | 3 Million Technical Talent (3MTT)</p>
    <h3>FG Software Development Training</h3>
    <p>Node.js, Express.js, and React.</p>

    <p class="mt-2 text-1xl font-bold">2022 | SeamlessHR Codeable Initiative</p>
    <h3>Software Development Training</h3>
    <p>Project Management, QA/Software Testing, Software Development.</p>

    <p class="mt-2 text-1xl font-bold">2021 - 2023 | RETECH Foundation</p>
    <h3>Communications Officer/People’s Operation</h3>
    <p>Content writing, graphics design, and newsletter curation. Recruitment, onboarding, and performance tracking.</p>

    <p class="mt-2 text-1xl font-bold">2018 - 2021 | The Ambassadors Schools</p>
    <h3>Media Officer</h3>
    <p>SEO/SEM strategies, advertising campaigns, email marketing, and content writing.</p>

    <p   class="mt-2 text-1xl font-bold">2020 | Lagos State Ministry of Education, Curriculum Services Department</p>
    <h3>Book Reviewer (Contract)</h3>
    <p>Reviewed literature texts for recommendation for state-owned schools.</p>
    <br>

<h1 id="work" class="text-2xl font-bold mb-6">Publications</h1>

<div class="flex space-x-4 justify-center">
    <a href="https://selar.co/s43w61" target="_blank">
    <img src="{{ asset('images/Be Stirred Up Victoria Odeh.jpeg') }}" alt="Be Stirred Up" class="w-48 h-64 object-cover rounded-lg"> </a>

    <img src="{{ asset('images/Sisters from the Rear Victoria Odeh.jpeg') }}" alt="Sisters from the Rear" class="w-48 h-64 object-cover rounded-lg">

    <a href="https://selar.co/917c9t" target="_blank">
    <img src="{{ asset('images/Money Mingled with Love Victoria Odeh.jpeg') }}" alt="Money Mingled with Love" class="w-48 h-64 object-cover rounded-lg">  </a>
</div>

<h2 id="contact" class="text-3xl font-bold text-white mb-4">Get In Touch</h2>
        <p>Let's talk about everything!</p>
        <p class="text-md text-gray-400 mb-6">
    Don't like forms? <a href="mailto:victoriaodeh172@gmail.com" class="text-red-400 underline">Send me an email</a> 👋
</p>
        
<form action="{{ route('contact.store') }}" method="POST" class="max-w-lg p-8 bg-transparent">
    @csrf

    <div class="mb-4">
        <label for="name">Name<span class="required">*</span></label>
        <input type="text" id="name" name="name" placeholder="Your Name" required 
               class="bg-gray-50 text-gray-700 text-lg rounded-lg px-4 py-3 w-full focus:outline-none" />
    </div>

    <div class="mb-4">
        <label for="email">Email<span class="required">*</span></label>
        <input type="email" id="email" name="email" placeholder="Email address" required 
               class="bg-gray-50 text-gray-700 text-lg rounded-lg px-4 py-3 w-full focus:outline-none" />
    </div>

    <div class="mb-4">
        <label for="phone_number">Phone Number<span class="required">*</span></label>
        <input type="number" id="phone_number" name="phone_number" placeholder="Phone Number" required 
            class="bg-gray-50 text-gray-700 text-lg rounded-lg px-4 py-3 w-full focus:outline-none" />
    </div>

    <div class="mb-6">
        <label for="Message">Message</label>
        <textarea id="message" name="message" rows="4" placeholder="Message" required 
                  class="bg-gray-50 text-gray-700 text-lg rounded-lg px-4 py-3 w-full focus:outline-none"></textarea>
    </div>

    <button type="submit" class="w-full sm:w-auto px-8 py-3 text-lg font-medium text-white bg-red-500 rounded-full hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300">
        Send Message
    </button>
</form>

    <x-footer />
    </main>
  </body>
</html>
