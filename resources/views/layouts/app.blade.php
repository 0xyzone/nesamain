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
        <x-nav></x-nav>
        {{ $slot }}
        <x-footer></x-footer>
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
