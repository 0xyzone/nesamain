<x-app>
    <!-- banner  -->
    <div class="flex justify-end">
        <div class="relative h-[600px] w-[90%]">
            <img src="{{ asset('img/nesa/nesa-05.jpg') }}" alt="5th Nepal Esports Championship & Expo 2025" class="h-full w-full object-cover" />
            <div class="absolute inset-0 z-10 h-full w-full" style="
            background: linear-gradient(
                90deg,
                rgba(0, 0, 0),
                rgba(255, 255, 255, 0),
                rgba(0, 0, 0)
            );
            "></div>
            <div class="absolute top-1/2 -translate-y-1/2 -left-10 md:-left-20 lg:-left-32 z-20 bg-transparent">
                <div class="flex flex-col gap-5">
                    <h1 class="text-4xl md:text-5xl xl:text-6xl font-bold">
                        <span class="text-base-color">5TH NEPAL ESPORTS CHAMPIONSHIP</span><br /><span>& EXPO 2025</span>
                    </h1>
                    <h1 class="text-lg">Organized by Nepal Esports Association</h1>
                </div>
            </div>
        </div>
    </div>

    <!-- event details -->
    <div class="mt-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-2 md:gap-5 lg:gap-10">
            <div class="flex flex-col justify-center gap-3">
                <h1 class="text-sm text-base-color font-bold">EVENT DETAILS</h1>
                <h1 class="text-2xl">Hybrid Tournament Format</h1>
                <p class="text-justify text-gray-400">
                    The 5th Nepal Esports Championship & Expo 2025 will feature a hybrid tournament format. Qualifiers and double elimination matches will be played online until the semi-finals, with the grand finals taking place in a LAN setting. This event will also serve as the National Qualifiers for the upcoming World Esports Championship 2025 organized by the International Esports Federation.
                </p>
            </div>
            <div class="flex flex-col justify-center gap-3">
                <h1 class="text-sm text-base-color font-bold">GAME TITLES</h1>
                <ul class="list-disc list-inside text-gray-400">
                    <li>CS2</li>
                    <li>DOTA 2</li>
                    <li>Mobile Legends Bang Bang Open</li>
                    <li>Mobile Legends Bang Bang Women</li>
                    <li>eFootball</li>
                    <li>PUBG Mobile</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- prize and qualification -->
    <div class="mt-20">
        <div class="flex flex-col items-center gap-3">
            <h1 class="text-sm text-base-color font-bold">PRIZE & QUALIFICATION</h1>
            <h1 class="text-2xl">Path to the World Esports Championship 2025</h1>
            <p class="text-justify text-gray-400">
                The winners of the 5th Nepal Esports Championship will proceed to the regional qualifiers of the World Esports Championship 2025. This is a fantastic opportunity for Nepali gamers to showcase their skills on an international stage.
            </p>
        </div>
    </div>

    <!-- join us -->
    <div class="mt-10">
        <div class="relative h-[50vh] w-full rounded-2xl overflow-hidden">
            <img src="{{ asset('img/nesa/nesa-03.jpg') }}" alt="Join Us" class="h-full w-full object-cover" />
            <div class="absolute inset-0 h-full w-full bg-background bg-opacity-50">
                <div class="h-full w-full flex flex-col gap-2 items-center justify-center">
                    <h1 class="text-base md:text-xl lg:text-3xl 2xl:text-5xl uppercase font-bold text-center">
                        Are You Ready to Compete?
                    </h1>
                    <div class="flex flex-col lg:flex-row gap-2 items-center">
                        <a target="_blank" href="https://meroticket.com/tournament-registration" class="button-styled">Register Now</a>
                        <a target="_blank" href="https://dsc.gg/fyftnec" class="button-styled-discord flex gap-2 items-center">
                            <x-fab-discord class="w-6 h-6" />Join discord</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- past events section -->
    <div class="mt-20">
        <h1 class="text-sm text-base-color font-bold text-center">PAST EVENTS</h1>
        <h2 class="text-2xl text-center">Watch Our Previous Championships</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 mt-5">
            <div class="video-container">
                <iframe width="100%" height="200" src="https://www.youtube.com/embed/Y1qkMPV5XkY" title="1st Nepal Esports Championship" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="video-container">
                <iframe width="100%" height="200" src="https://www.youtube.com/embed/0pNguxxLGnA" title="2nd Nepal Esports Championship" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="video-container">
                <iframe width="100%" height="200" src="https://www.youtube.com/embed/fhkm3OWrFFE" title="3rd Nepal Esports Championship" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="video-container">
                <iframe width="100%" height="200" src="https://www.youtube.com/embed/BW-5aHq4ESc" title="4th Nepal Esports Championship" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <style>
        .video-container {
            overflow: hidden;
            border-radius: 8px;
            /* Optional: for rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* Optional: for shadow effect */
        }

    </style>

    <!-- Sponsorship Opportunities -->
    <div class="mt-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-2 md:gap-5 lg:gap-10">
            <div class="w-full h-full relative flex flex-col items-center justify-center py-10">
                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 -z-[0]">
                    <div class="h-[450px] w-[360px] rounded-xl bg-white bg-opacity-25 rotate-[10deg]"></div>
                </div>
                <a href="https://www.flipbookpdf.net/web/site/79197faddeb74cb873159866eca5cb95dd576c4f202502.pdf.html" target="_blank" class="h-[450px] w-[360px] rounded-xl z-20 shadow-lg shadow-[#181918]">
                    <img src="{{ asset('img/sponsor proposal cover.jpg') }}" alt="banner-1" class="h-full w-full object-cover rounded-xl" />
                </a>
            </div>
            <div class="mt-5 sm:mt-16 lg:mt-0 flex flex-col justify-center gap-3">
                <h1 class="text-sm text-base-color font-bold">For Sponsors</h1>
                <h1 class="text-2xl">Sponshorship Opportunities Available</h1>
                <p class="text-justify text-gray-400">
                    Nepal Esports Association (NESA) offers exceptional sponsorship opportunities for brands looking to connect with Nepal's fast-growing esports community. Partner with us to gain exclusive access to a passionate audience of gamers and fans through tournament branding, digital exposure, and experiential marketing opportunities. Our tailored packages include title sponsorship, event partnerships, and product collaboration opportunities - all designed to maximize your brand visibility among our 50,000+ community members.
                    {{-- Align your brand with South Asia's premier esports organization recognized by <strong>International Esports Federation (IESF), Global Esports Federation (GEF), and Asian Electronic Sports Federation (AESF)</strong>, while supporting the development of competitive gaming in Nepal. --}}
                </p>
                <div class="flex gap-2 items-center">
                    <button onclick="showContactModal()" class="button-styled duration-150 !text-xs lg:!text-lg">Contact Us</button>
                    <a href="https://www.flipbookpdf.net/web/site/79197faddeb74cb873159866eca5cb95dd576c4f202502.pdf.html" target="_blank" class="button-styled col-span-2 self-center bg-lime-600 duration-150 !text-xs lg:!text-lg">Sponsorship Proposal</a>
                </div>
            </div>
        </div>
    </div>

    {{-- <!-- Sponsorship Opportunity -->
    <div class="mt-20">
        <div class="relative h-[50vh] w-full rounded-2xl overflow-hidden">
            <img src="{{ asset('img/nesa/nesa-02.jpg') }}" alt="Sponsorship Opportunity" class="h-full w-full object-cover" />
            <div class="absolute inset-0 h-full w-full bg-background bg-opacity-50">
                <div class="h-full w-full flex flex-col gap-2 items-center justify-center">
                    <h1 class="text-base md:text-xl lg:text-3xl 2xl:text-5xl uppercase font-bold text-center">
                        Sponsorship Opportunities Available
                    </h1>
                    <div class="flex gap-2">
                        <button onclick="showContactModal()" class="button-styled mt-4">Contact Us</button>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Contact Modal -->
    <div id="contactModal" class="fixed hidden inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-lg p-8 max-w-2xl w-full relative">
            <button onclick="hideContactModal()" class="absolute top-4 right-4 text-gray-600 hover:text-gray-800">
                &times;
            </button>
            <h2 class="text-2xl font-bold mb-6 text-base-color">Contact Sponsorship Team</h2>
            <div class="grid grid-cols-1 lg:grid-cols-2">
                <div class="text-stone-600 flex flex-col">
                    <strong>Sliu Shrestha</strong>
                    <p class="text-stone-600">Email: <a href="mailto:miceintl.np@gmail.com" class="text-blue-600">miceintl.np@gmail.com</a></p>
                    <p class="text-stone-600">Phone: <a href="tel:98510145661" class="text-blue-600">98510145661</a></p>
                </div>
                <div class="text-stone-600 flex flex-col">
                    <strong>Saurav Bikram Pant</strong>
                    <p class="text-stone-600">Email: <a href="mailto:saurav@kailaasa-advert.com" class="text-blue-600">saurav@kailaasa-advert.com</a></p>
                    <p class="text-stone-600">Phone: <a href="tel:9849249331" class="text-blue-600">9849249331</a></p>
                </div>
                <div>
                    <a href="https://www.flipbookpdf.net/web/site/79197faddeb74cb873159866eca5cb95dd576c4f202502.pdf.html" target="_blank" class="button-styled col-span-2 self-center">Sponsorship Proposal</a>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        function showContactModal() {
            document.getElementById('contactModal').classList.remove('hidden');
        }

        function hideContactModal() {
            document.getElementById('contactModal').classList.add('hidden');
        }

        // Close modal when clicking outside
        window.onclick = function(event) {
            const modal = document.getElementById('contactModal');
            if (event.target == modal) {
                hideContactModal();
            }
        }

    </script>
    <style>
        .button-styled:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        #contactModal a:hover {
            text-decoration: underline;
        }

    </style>
    @endpush

    <!-- partners section -->
    <div class="mt-20">
        <h1 class="text-sm lg:text-6xl text-base-color font-bold text-center mb-8">OUR PARTNERS</h1>

        <!-- Carousel Container -->
        <div class="relative overflow-hidden group">
            <!-- Draggable and Auto-Scrolling Slider -->
            <div id="sponsor-track" class="slide-track flex gap-8 py-4 cursor-grab active:cursor-grabbing overflow-x-auto scrollbar-hide" onmousedown="handleMouseDown(event)" ontouchstart="handleMouseDown(event)">
                <!-- Duplicate slides for seamless loop -->
                @for($i = 0; $i < 2; $i++) <!-- Run twice for infinite loop -->
                    @foreach(range(1, 12) as $num)
                    <div class="slide min-w-[150px] md:min-w-[200px] flex items-center">
                        <img src="{{ asset('img/partners/'.$num.'.png') }}" alt="Sponsor {{ $num }}" class="w-full h-auto object-contain max-h-[250px] grayscale hover:grayscale-0 transition-all duration-300" />
                    </div>
                    @endforeach
                    @endfor
            </div>
        </div>
    </div>

    <style>
        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }

        .slide-track {
            scroll-behavior: smooth;
            -webkit-overflow-scrolling: touch;
            user-select: none;
            width: max-content;
        }

        @keyframes auto-scroll {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(calc(-100% / 2));
            }

            /* Move half the duplicated content */
        }

        .slide-track.auto-scroll {
            animation: auto-scroll 40s linear infinite;
        }

        .slide-track.dragging {
            animation-play-state: paused;
        }

    </style>

    @push ('scripts')
    <script>
        let isDown = false;
        let startX;
        let scrollLeft;
        const track = document.getElementById('sponsor-track');

        // Enable auto-scroll by default
        track.classList.add('auto-scroll');

        // Drag-to-scroll functionality
        function handleMouseDown(e) {
            isDown = true;
            track.classList.add('dragging');
            startX = (e.pageX || e.touches[0].pageX) - track.offsetLeft;
            scrollLeft = track.scrollLeft;
        }

        function handleMouseLeave() {
            isDown = false;
            track.classList.remove('dragging');
        }

        function handleMouseUp() {
            isDown = false;
            track.classList.remove('dragging');
        }

        function handleMouseMove(e) {
            if (!isDown) return;
            e.preventDefault();
            const x = (e.pageX || e.touches[0].pageX) - track.offsetLeft;
            const walk = (x - startX) * 2; // Adjust scroll speed
            track.scrollLeft = scrollLeft - walk;
        }

        // Event listeners
        track.addEventListener('mousedown', handleMouseDown);
        track.addEventListener('touchstart', handleMouseDown);

        track.addEventListener('mouseleave', handleMouseLeave);
        track.addEventListener('mouseup', handleMouseUp);
        track.addEventListener('touchend', handleMouseUp);

        track.addEventListener('mousemove', handleMouseMove);
        track.addEventListener('touchmove', handleMouseMove);

        // Reset auto-scroll after user interaction
        track.addEventListener('scroll', () => {
            if (!isDown) {
                track.classList.add('auto-scroll');
            }
        });

    </script>
    @endpush
</x-app>
