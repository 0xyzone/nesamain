<!-- footer -->
<footer class="mt-10 flex flex-col items-center justify-center py-5 gap-3 bg-neutral-950">
    <a href="#"><img src="{{ asset('img/NESA-logo-White.png') }}" alt="Nesa Logo" class="h-20 object-scale-down" /></a>
    <nav class="bg-transparent flex justify-center w-full">
        <div class="hidden lg:flex items-center gap-8 font-medium text-base">
            <a href="{{ route('home') }}" class="hover:text-base-color transform ease-in-out duration-200 {{ request()->routeIs('home') || request()->routeIs('/') ? '!text-base-color' : '' }}">Home</a>
            <a href="{{ route('about.index') }}" class="{{ request()->routeIs('about.index') ? '!text-base-color' : '' }} hover:text-base-color transform ease-in-out duration-200">About Us</a>
            <a href="{{ route('events.index') }}" class="{{ request()->routeIs('events.index') ? '!text-base-color' : '' }} hover:text-base-color transform ease-in-out duration-200">Events</a>

            <a href="{{ route('news.index') }}" class="{{ request()->routeIs('news.index') ? '!text-base-color' : '' }} hover:text-base-color transform ease-in-out duration-200">News</a>
            <a href="{{ route('contact.index') }}" class="{{ request()->routeIs('contact.index') ? '!text-base-color' : '' }} hover:text-base-color transform ease-in-out duration-200">Contact Us</a>
            <a href="{{ route('certificates.index') }}" class="{{ request()->routeIs('certificates.index') ? '!text-base-color' : '' }} hover:text-base-color transform ease-in-out duration-200">Certificates</a>
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
