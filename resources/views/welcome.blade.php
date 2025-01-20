<x-app>
    <!-- banner  -->
    <div class="flex justify-end">
        <div class="relative h-[600px] w-[90%]">
            <img src="{{ asset('img/nesa/nesa-01.jpg') }}" alt="Landing Banner" class="h-full w-full object-cover" />
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
                        <span class="text-base-color">ESPORTS UNIVERSE</span><br /><span>IS CALLING YOU!</span>
                    </h1>
                    <h1 class="text-lg">Since 2016</h1>
                </div>
            </div>
            <div class="absolute -bottom-10 right-0 text-center z-20">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold">
                    <span class="text-base-color">Empowering</span><br /><span>Nepal's Youth Gamers</span>
                </h1>
            </div>
        </div>
    </div>

    <!-- about us -->
    <div class="mt-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-2 md:gap-5 lg:gap-10">
            <div class="w-full h-full relative flex flex-col items-center justify-center py-10">
                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 -z-[0]">
                    <div class="h-[450px] w-[360px] rounded-xl bg-white bg-opacity-25 rotate-[10deg]"></div>
                </div>
                <div class="h-[450px] w-[360px] rounded-xl z-20 shadow-lg shadow-[#181918]">
                    <img src="img/nesa/nesa-05.jpg" alt="" class="h-full w-full object-cover rounded-xl" />
                </div>
                <div class="hidden sm:block absolute -bottom-16 -right-0 2xl:right-20 z-30">
                    <div class="h-[260px] w-[230px] rounded-xl shadow-lg shadow-[#181918]">
                        <img src="img/nesa/nesa-09.jpg" alt="" class="h-full w-full object-cover rounded-xl" />
                    </div>
                </div>
                <div class="hidden sm:block absolute -bottom-2 -left-5 md:-left-10 2xl:left-10 z-30">
                    <div class="h-[260px] w-[230px] rounded-xl shadow-lg shadow-[#181918]">
                        <img src="img/nesa/nesa-06.jpg" alt="" class="h-full w-full object-cover rounded-xl" />
                    </div>
                </div>
            </div>
            <div class="mt-5 sm:mt-16 lg:mt-0 flex flex-col justify-center gap-3">
                <h1 class="text-sm text-base-color font-bold">ABOUT US</h1>
                <h1 class="text-2xl">Rise of Nepal Esports</h1>
                <p class="text-justify text-gray-400">
                    Nepal Esports Association (NESA) came into basing through the
                    initiation of five board members (Suraj Dangol, Sangram Singh
                    Deuja, Jyoti Ratna Bajracharya, Bimal Tamrakar, Gopal Timsina) who
                    are Infotech professionals and fans of electronic games.
                </p>
                <a href="{{ route('about.index') }}" class="button-styled">About Us</a>
            </div>
        </div>
    </div>

    <!-- esports games -->
    <div class="mt-20 lg:mt-40 gap-10">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 w-full gap-3">
            <div class="flex flex-col gap-5 pl-0 mb-2 sm:mb-0">
                <div class="flex flex-col gap-3">
                    <h1 class="text-sm text-base-color font-bold">OUR GAMES</h1>
                    <h1 class="text-2xl">Nepal Esports Games</h1>
                    <!-- <a href="./games.html" class="button-styled">All Games</a> -->
                    <p class="text-gray-400">
                        Discover the current games in Nepal's esports scene. From
                        competitive favorites to emerging titles, stay informed about
                        the most popular and exciting games captivating Nepali gamers.
                    </p>
                </div>
            </div>
            <div class="w-full h-[200px] sm:h-[250px] rounded-xl overflow-hidden">
                <img src="{{ asset('img/games/pes.web') }}p" alt="" class="h-full w-full object-cover" loading="lazy" />
            </div>
            <div class="w-full h-[200px] sm:h-[250px] rounded-xl overflow-hidden">
                <img src="{{ asset('img/games/dota2.webp')}}" alt="" class="h-full w-full object-cover" loading="lazy" />
            </div>
            <div class="w-full h-[200px] sm:h-[250px] rounded-xl overflow-hidden">
                <img src="{{ asset('img/games/valorant.webp') }}" alt="" class="h-full w-full object-cover" loading="lazy" />
            </div>
            <div class="w-full h-[200px] sm:h-[250px] rounded-xl overflow-hidden">
                <img src="{{ asset('img/games/mlbb.webp') }}" alt="" class="h-full w-full object-cover" loading="lazy" />
            </div>
            <div class="w-full h-[200px] sm:h-[250px] rounded-xl overflow-hidden">
                <img src="{{ asset('img/games/csgo.webp') }}" alt="" class="h-full w-full object-cover" loading="lazy" />
            </div>
        </div>
    </div>

    <!-- news  -->
    {{-- <div class="my-16">
        <div class="flex flex-col items-center gap-3">
            <h1 class="text-sm text-base-color font-bold">Latest News</h1>
            <h1 class="text-2xl">News Highlights</h1>
            <p class="max-w-2xl text-center text-gray-400">
                Stay updated with the latest events and stories in Nepal's esports
                scene. From tournament results to player interviews, our coverage
                ensures you never miss a moment in Nepali esports.
            </p>
        </div>
        <div class="flex flex-col items-center">
            <div id="news-container" class="mt-10 w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
                <!-- scripts below -->
            </div>
        </div>

        <div class="mt-5 flex justify-center">
            <a href="./news.html" class="button-styled">More News</a>
        </div>
    </div> --}}

    <!-- join us -->
    <div class="mt-10">
        <div class="relative h-[50vh] w-full rounded-2xl overflow-hidden">
            <img src="img/nesa/nesa-04.jpg" alt="" class="h-full w-full object-cover" />
            <div class="absolute inset-0 h-full w-full bg-background bg-opacity-50">
                <div class="h-full w-full flex flex-col gap-2 items-center justify-center">
                    <h1 class="text-base md:text-xl: lg:text-3xl 2xl:text-5xl uppercase font-bold text-center">
                        Are You Ready To Join?
                    </h1>
                    <x-socials></x-socials>
                </div>
            </div>
        </div>
    </div>


</x-app>
