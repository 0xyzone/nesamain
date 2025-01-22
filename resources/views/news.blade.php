<x-app :titleName="$titleName">
    @push('headScripts')
    <script src="mock/mock-news.js"></script>
    @endpush
    <div class="relative mt-10">
        <div class="grid grid-cols-1 xl:grid-cols-3 gap-5">
            <div class="col-span-2 relative flex flex-col gap-5">
                <div class="w-full flex flex-col gap-5 divide-gray-800">
                    <hr class="bg-base-color h-2 border-0 w-32" />
                    <h1 class="font-bold text-2xl">
                        Charity Stream: Nepali Esports Community Raises Funds for
                        Disaster Relief
                    </h1>
                    <h6 class="py-2 text-sm font-light border-solid border-y-2 border-neutral-950 border-x-0">
                        Posted on <span class="italic">May 15,2024</span> by
                        <span class="italic">NESA</span>
                    </h6>
                    <img src="img/news/news-card.jpg" alt="" class="h-full w-full object-cover" />
                    <p class="text-justify">
                        Nepal E-Sports Association (NESA) successfully concluded the
                        National Qualifier for 12th World Championship, Eilat 2020.
                        Esports world championship is organized by International Esports
                        Association (IESF) every year to promote esports. This year’s
                        world championship is hosted by Eilat, Israel.<br /><br />
                        Due to COVID-19 situation this year’s qualification was held
                        online from 9th September to 19th September 2020. The qualifier
                        included three titles Dota2, PES and Tekken and the event was
                        streamed on the social media page (facebook) of NESA. Technical
                        support was provided by WASD Arena and Touch Studio.<br /><br />
                        myRevenge Team (Sumit Shrestha, Abhinav Shakya, Irin Rai, Atush
                        Pant and Sharnup Tandukar) qualified to represent Nepal for
                        regional qualification, similarly Aysuh Ranjit and Sameer Gurung
                        were qualified for PES and Tekken respectively. In regional
                        qualification they will compete with participants from Southern
                        Asia Region countries Sri Lanka, Indian and Maldives.
                    </p>
                </div>
            </div>
            <div class="flex flex-col items-center mt-10 xl:mt-0">
                <div class="bg-background px-0 w-full">
                    <div class="flex flex-col gap-3 w-full">
                        <div class="w-full flex items-center gap-5 pb-2">
                            <h1 class="text-3xl">
                                <span class="text-base-color">Trending </span> News
                            </h1>
                            <hr class="flex-1 h-1 bg-base-color border-0" />
                        </div>
                        <div id="recent-news-container" class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-1 gap-3">
                            <!-- script below -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-col lg:flex-row gap-16 mt-10">
        <div class="">
            <div class="w-full flex items-center gap-5 pb-2">
                <h1 class="text-4xl">
                    <span class="text-base-color">All </span> News
                </h1>
                <hr class="flex-1 h-1 bg-base-color border-0" />
                <div class="flex gap-2">
                    <button class="w-max px-7 py-3 border border-solid border-base-color bg-transparent text-base-color hover:bg-base-color hover:text-white transform ease-in-out duration-150">
                        External
                    </button>
                    <button class="w-max px-7 py-3 border border-solid border-base-color bg-transparent text-base-color hover:bg-base-color hover:text-white transform ease-in-out duration-150">
                        Mention
                    </button>
                </div>
            </div>
            <div class="mt-5 flex flex-col items-center">
                <div id="external-news-container" class="w-full grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-5">
                    <!-- script below -->
                </div>
            </div>
        </div>
    </div>

    @push ('scripts') 
        <script>
            const external_news_container = document.getElementById(
                "external-news-container"
            );
            const externalNewsDivs = mock_news
                .filter((news) => news.type === "external")
                .slice(0, 3)
                .map(
                    (news) => `
                                <a href="/news-description.html" class="group relative">
                                    <div
                                        class="h-[250px] xl:h-[300px] w-full rounded-xl relative overflow-hidden hover:shadow-sm "
                                    >
                                        <img
                                        src="img/news/news-card.jpg"
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
            external_news_container.innerHTML = externalNewsDivs.join("");
    
        </script>
    
        <script>
            const recent_news_container = document.getElementById(
                "recent-news-container"
            );
            const recentNewsDivs = mock_news.slice(0, 6).map(
                (news) => `
                                <a href="#" class="h-full grid grid-cols-3 sm:grid-cols-4 md:grid-cols-2 xl:grid-cols-3 gap-2 border-solid border-2 border-transparent hover:border-gray-900 transform duration-100 ease-in-out p-1">
                                    <div class="col-span-1 h-24 w-auto rounded-md overflow-hidden">
                                        <img
                                        src="img/news/news-card.jpg"
                                        alt=""
                                        class="h-24 w-full object-cover"
                                        />
                                    </div>
                                    <div class="col-span-2 sm:col-span-3 md:col-span-2 flex flex-col gap-1">
                                        <h1 class="text-sm 2xl:text-base font-semibold flex flex-wrap ">
                                        ${news.title}
                                        </h1>
                                        <h6 class="text-sm font-medium text-gray-600">
                                        June 21, 2023
                                        </h6>
                                    </div>
                                </a>
                            `
            );
            recent_news_container.innerHTML = recentNewsDivs.join("");
        </script>
    
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
    @endpush
</x-app>
