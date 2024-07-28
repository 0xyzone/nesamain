<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nesa News Portal</title>
    <link rel="stylesheet" href="css/style.css" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- <link rel="stylesheet" href="/public/css/output.css" /> --}}

    <script src="https://kit.fontawesome.com/0a09f83869.js" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <script src="/public/js/script.js"></script>
    <script src="/public/mock/mock-news.js"></script>
</head>
<body class="font-open-sans">
    <div class="relative px-10 md:px-20 xl:px-32 pb-5 min-w-screen w-full min-h-svh h-full text-white bg-background">
        <!-- navbar  -->
        <div class="relative py-5">
            <nav class="flex justify-between w-full bg-neutral-950 pr-2 lg:pr-4">
                <div>
                    <a href="./index.html"><img src="storage/images/logo/light-nesa-logo.png" alt="Nesa Logo" class="h-20 object-contain" /></a>
                </div>
                <div id="navbar" class="hidden lg:flex lg:items-center">
                    <div id="navbar_content" class="hidden lg:flex items-center gap-8 font-medium text-base">
                        <a href="./index.html" class="hover:text-base-color transform ease-in-out duration-200">Home</a>
                        <a href="./about.html" class="hover:text-base-color transform ease-in-out duration-200">About Us</a>
                        <a href="./events.html" class="hover:text-base-color transform ease-in-out duration-200">Events</a>

                        <a href="./news.html" class="hover:text-base-color transform ease-in-out duration-200">News</a>
                        <a href="./contact.html" class="hover:text-base-color transform ease-in-out duration-200">Contact Us</a>
                        <a href="./certificate.html" class="hover:text-base-color transform ease-in-out duration-200">Certificates</a>
                        <ion-icon name="close" id="close-mobile-nav" class="lg:hidden cursor-pointer text-3xl hover:scale-105 transform ease-in-out duration-300 bg-transparent text-white border-0"></ion-icon>
                    </div>
                </div>

                <div class="flex flex-col justify-center lg:hidden">
                    <ion-icon name="menu" id="open-mobile-nav" class="lg:hidden cursor-pointer text-2xl hover:scale-105 transform ease-in-out duration-300 bg-transparent text-white border-0"></ion-icon>
                </div>
            </nav>
        </div>

        <!-- banner  -->
        <div class="flex justify-end">
            <div class="relative h-[600px] w-[90%]">
                <img src="storage/images/nesa/nesa-03.jpg" alt="Landing Banner" class="h-full w-full object-cover" />
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
                        <h1 class="text-lg">Since 2020</h1>
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
                        <img src="storage/images/nesa/nesa-05.jpg" alt="" class="h-full w-full object-cover rounded-xl" />
                    </div>
                    <div class="hidden sm:block absolute -bottom-16 -right-0 2xl:right-20 z-30">
                        <div class="h-[260px] w-[230px] rounded-xl shadow-lg shadow-[#181918]">
                            <img src="storage/images/nesa/nesa-09.jpg" alt="" class="h-full w-full object-cover rounded-xl" />
                        </div>
                    </div>
                    <div class="hidden sm:block absolute -bottom-2 -left-5 md:-left-10 2xl:left-10 z-30">
                        <div class="h-[260px] w-[230px] rounded-xl shadow-lg shadow-[#181918]">
                            <img src="storage/images/nesa/nesa-06.jpg" alt="" class="h-full w-full object-cover rounded-xl" />
                        </div>
                    </div>
                </div>
                <div class="mt-5 sm:mt-16 lg:mt-0 flex flex-col justify-center gap-3">
                    <h1 class="text-sm text-base-color">ABOUT US</h1>
                    <h1 class="text-2xl">Rise of Nepal Esports</h1>
                    <p class="text-justify text-gray-400">
                        Nepal Esports Association (NESA) came into basing through the
                        initiation of five board members (Suraj Dangol, Sangram Singh
                        Deuja, Jyoti Ratna Bajracharya, Bimal Tamrakar, Gopal Timsina) who
                        are Infotech professionals and fans of electronic games.
                    </p>
                    <a href="./about.html" class="button-styled">About Us</a>
                </div>
            </div>
        </div>

        <!-- esports games -->
        <div class="mt-20 lg:mt-40 gap-10">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 w-full gap-3">
                <div class="flex flex-col gap-5 pl-0 mb-2 sm:mb-0">
                    <div class="flex flex-col gap-3">
                        <h1 class="text-sm text-base-color">OUR GAMES</h1>
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
                    <img src="storage/images/games/pes.webp" alt="" class="h-full w-full object-cover" loading="lazy" />
                </div>
                <div class="w-full h-[200px] sm:h-[250px] rounded-xl overflow-hidden">
                    <img src="storage/images/games/dota2.webp" alt="" class="h-full w-full object-cover" loading="lazy" />
                </div>
                <div class="w-full h-[200px] sm:h-[250px] rounded-xl overflow-hidden">
                    <img src="storage/images/games/valorant.webp" alt="" class="h-full w-full object-cover" loading="lazy" />
                </div>
                <div class="w-full h-[200px] sm:h-[250px] rounded-xl overflow-hidden">
                    <img src="storage/images/games/mlbb.webp" alt="" class="h-full w-full object-cover" loading="lazy" />
                </div>
                <div class="w-full h-[200px] sm:h-[250px] rounded-xl overflow-hidden">
                    <img src="storage/images/games/csgo.webp" alt="" class="h-full w-full object-cover" loading="lazy" />
                </div>
            </div>
        </div>

        <!-- news  -->
        <div class="my-16">
            <div class="flex flex-col items-center gap-3">
                <h1 class="text-sm text-base-color">Latest News</h1>
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
        </div>

        <!-- join us -->
        <div class="mt-10">
            <div class="relative h-[50vh] w-full rounded-2xl overflow-hidden">
                <img src="storage/images/nesa/nesa-04.jpg" alt="" class="h-full w-full object-cover" />
                <div class="absolute inset-0 h-full w-full bg-background bg-opacity-50">
                    <div class="h-full w-full flex flex-col gap-2 items-center justify-center">
                        <h1 class="text-base md:text-xl: lg:text-3xl 2xl:text-5xl uppercase font-bold text-center">
                            Are You Ready To Join?
                        </h1>
                        <div class="text-2xl flex gap-5 mt-5">
                            <a href="#" class="text-white hover:scale-125 duration-200 transform ease-in-out"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#" class="text-white hover:scale-125 duration-200 transform ease-in-out"><i class="fa-brands fa-discord"></i></a>
                            <a href="#" class="text-white hover:scale-125 duration-200 transform ease-in-out"><i class="fa-brands fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- footer -->
        <footer class="mt-10 flex flex-col items-center justify-center py-5 gap-3 bg-neutral-950">
            <a href="#"><img src="storage/images/logo/light-nesa-logo.png" alt="Nesa Logo" class="h-20 object-scale-down" /></a>
            <nav class="bg-transparent flex justify-center w-full">
                <div class="hidden lg:flex items-center gap-8 font-medium text-base">
                    <a href="./index.html" class="hover:text-base-color transform ease-in-out duration-200">Home</a>
                    <a href="./about.html" class="hover:text-base-color transform ease-in-out duration-200">About Us</a>
                    <a href="./events.html" class="hover:text-base-color transform ease-in-out duration-200">Events</a>
                    <a href="./games.html" class="hover:text-base-color transform ease-in-out duration-200">Games</a>
                    <a href="./news.html" class="hover:text-base-color transform ease-in-out duration-200">News</a>
                    <a href="./contact.html" class="hover:text-base-color transform ease-in-out duration-200">Contact Us</a>
                    <a href="./certificate.html" class="hover:text-base-color transform ease-in-out duration-200">Certificates</a>
                </div>
            </nav>
            <div class="text-2xl flex gap-5">
                <a href="#" class="p-1 text-white hover:scale-125 duration-200 transform ease-in-out"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#" class="p-1 text-white hover:scale-125 duration-200 transform ease-in-out"><i class="fa-brands fa-discord"></i></a>
                <a href="#" class="p-1 text-white hover:scale-125 duration-200 transform ease-in-out"><i class="fa-brands fa-instagram"></i></a>
            </div>
            <p class="text-sm text-gray-500 flex gap-2">
                © 2024 NESA . <a href="#" class="text-white"> Privacy Policy</a>
            </p>
        </footer>
    </div>
</body>

<script>
    const news_container = document.getElementById("news-container");
    const newsDivs = mock_news.slice(0, 3).map(
        (news) => `
               <a href="/news-description.html" class="group relative">
              <div
                class="h-[250px] xl:h-[300px] w-full rounded-xl relative overflow-hidden hover:shadow-sm "
              >
                <img
                  src="storage/images/news/news-card.jpg"
                  alt=""
                  class="h-full w-full object-cover group-hover:scale-105 transform duration-300 ease-in-out"
                />
              </div>
              <div class="absolute inset-0 bg-gradient-to-b from-transparent via-black/50 to-black bg-opacity-50 p-5">
                <div class="flex flex-col h-full justify-end font-semibold">
                  <p class="text-sm flex gap-2">
                    <span class="flex items-center gap-2 text-gray-200"><ion-icon name="calendar-outline" class="text-base-color"></ion-icon>May 15, 2024</span>
                    <span> | </span>
                    <span class="flex items-center gap-2 text-gray-200"><ion-icon name="person-outline" class="text-base-color"></ion-icon>NESA</span>
                  </p>
                  <h1 class="text-base 2xl:text-xl font-bold flex flex-wrap">${news.title}</h1>
                </div>
              </div>
            </a>
    `
    );
    news_container.innerHTML = newsDivs.join("");

</script>
</html>
