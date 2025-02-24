<x-app>
    <!-- banner  -->
    <div class="flex justify-end">
        <div class="relative h-[600px] w-[90%]">
            <img src="{{ asset('img/nesa/nesa-02.jpg') }}" alt="5th Nepal Esports Championship & Expo 2025" class="h-full w-full object-cover" />
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
                    <a href="#" class="button-styled">Register Now</a>
                </div>
            </div>
        </div>
    </div>

    <!-- sponsors section -->
    <div class="mt-20">
        <h1 class="text-sm lg:text-6xl text-base-color font-bold text-center">OUR PARTNERS</h1>
        <div class="slider">
            <div class="slide-track">
                <div class="slide">
                    <img src="{{ asset('img/sponsors/1.png') }}" alt="Sponsor 1" />
                </div>
                <div class="slide">
                    <img src="{{ asset('img/sponsors/2.png') }}" alt="Sponsor 2" />
                </div>
                <div class="slide">
                    <img src="{{ asset('img/sponsors/3.png') }}" alt="Sponsor 3" />
                </div>
                <div class="slide">
                    <img src="{{ asset('img/sponsors/4.png') }}" alt="Sponsor 4" />
                </div>
                <div class="slide">
                    <img src="{{ asset('img/sponsors/5.png') }}" alt="Sponsor 5" />
                </div>
                <div class="slide">
                    <img src="{{ asset('img/sponsors/6.png') }}" alt="Sponsor 5" />
                </div>
                <div class="slide">
                    <img src="{{ asset('img/sponsors/7.png') }}" alt="Sponsor 5" />
                </div>
                <div class="slide">
                    <img src="{{ asset('img/sponsors/8.png') }}" alt="Sponsor 5" />
                </div>
                <div class="slide">
                    <img src="{{ asset('img/sponsors/9.png') }}" alt="Sponsor 5" />
                </div>
                <div class="slide">
                    <img src="{{ asset('img/sponsors/10.png') }}" alt="Sponsor 5" />
                </div>
                <div class="slide">
                    <img src="{{ asset('img/sponsors/11.png') }}" alt="Sponsor 5" />
                </div>
                <!-- Duplicate slides for seamless scrolling -->
                <div class="slide">
                    <img src="{{ asset('img/sponsors/1.png') }}" alt="Sponsor 1" />
                </div>
                <div class="slide">
                    <img src="{{ asset('img/sponsors/2.png') }}" alt="Sponsor 2" />
                </div>
                <div class="slide">
                    <img src="{{ asset('img/sponsors/3.png') }}" alt="Sponsor 3" />
                </div>
                <div class="slide">
                    <img src="{{ asset('img/sponsors/4.png') }}" alt="Sponsor 4" />
                </div>
                <div class="slide">
                    <img src="{{ asset('img/sponsors/5.png') }}" alt="Sponsor 5" />
                </div>
                <div class="slide">
                    <img src="{{ asset('img/sponsors/6.png') }}" alt="Sponsor 5" />
                </div>
                <div class="slide">
                    <img src="{{ asset('img/sponsors/7.png') }}" alt="Sponsor 5" />
                </div>
                <div class="slide">
                    <img src="{{ asset('img/sponsors/8.png') }}" alt="Sponsor 5" />
                </div>
                <div class="slide">
                    <img src="{{ asset('img/sponsors/9.png') }}" alt="Sponsor 5" />
                </div>
                <div class="slide">
                    <img src="{{ asset('img/sponsors/10.png') }}" alt="Sponsor 5" />
                </div>
                <div class="slide">
                    <img src="{{ asset('img/sponsors/11.png') }}" alt="Sponsor 5" />
                </div>
            </div>
        </div>
    </div>
    <style>
        .slider {
            overflow: hidden;
            position: relative;
            /* background: #efeef2; */
        }

        .slide-track {
            display: flex;
            animation: scroll 20s linear infinite;
        }

        .slide {
            min-width: 200px;
            /* Adjust based on your logo size */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .slide img {
            width: 100%;
            /* Adjust as needed */
            height: auto;
        }

        @keyframes scroll {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
                /* Adjust based on the number of logos */
            }
        }

    </style>
</x-app>
