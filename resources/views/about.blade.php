<x-app>

    <div class="flex justify-end">
        <div class="relative h-[400px] w-[90%]">
            <img src="img/nesa/nesa-01.jpg" alt="About Banner" class="h-full w-full object-cover" />
            <div class="absolute inset-0 z-10 h-full w-full" style="
            background: linear-gradient(90deg, rgba(0, 0, 0), rgba(255, 255, 255, 0), rgba(0, 0, 0));"></div>
            <div class="absolute top-1/2 -translate-y-1/2 -left-10 md:-left-20 lg:-left-32 z-20">
                <div class="flex flex-col gap-5">
                    <h1 class="text-3xl md:text-5xl xl:text-6xl font-bold">
                        <span class="text-base-color">Know About </span><span>Us</span>
                    </h1>
                </div>
            </div>
            <div class="absolute -bottom-12 right-0 text-center z-20">
                <h1 class="text-3xl md:text-5xl lg:text-6xl font-bold">
                    <span class="text-base-color">Leading Nepal's </span><br /><span>ESports revolution</span>
                </h1>
            </div>
        </div>
    </div>

    <div class="mt-20">
        <div class="flex flex-col gap-10">
            <p id="about-content" class="text-base text-justify">
                <span class="text-base-color text-5xl font-bold">N</span>epal E-sports Association (NESA) established as non- profit sharing company on May 2016 is a national level organization establish to promote Esports in Nepal. NESA is recognized as by Nepal Olympic Committee and full member of  <strong>International Esports governing bodies International Esports Federation (IESF), Global Esports Federation (GEF) and Asian Electronic Sports Federation (AESF).</strong>
                <br />
                <br />
                A lot of credit goes to the President of the Nepal Olympic Committee, Mr. Jeevan Ram Shrestha. His unwavering cooperation has been instrumental in establishing NESA as the official governing body for esports activities in Nepal. Recognition from the Nepal Olympic Committee has not only boosted our confidence with the government but also facilitated our international affiliations.
            </p>
            <div class="flex justify-center">
                <div class="max-w-5xl w-full text-center flex">
                    <h1 class="text-base-color text-3xl">
                        <i class="fa-solid fa-quote-left opacity-50 text-6xl text-white"></i>
                        Mission Statement & Values: Nepal Esports Association is a social impact organization that aspires to promote and develop Esports as a main stream sports by ensuring equal access while instilling values of teamwork, respect discipline and integrity.
                        <i class="fa-solid fa-quote-right opacity-50 text-4xl text-white"></i>
                    </h1>
                </div>
            </div>
            <div class="flex flex-col gap-2">
                <h1 class="text-base-color text-2xl">Purpose</h1>
                <p class="text-base text-justify">
                    The purpose of the Nepal Esports Association is to establish a thriving ecosystem for esports by promoting its growth and developing a robust grassroots esports system. This involves nurturing talent at the community level, creating opportunities for players to excel, and fostering partnerships to build a sustainable and inclusive esports environment in Nepal.
                </p>
            </div>
            <div class="mt-10 flex flex-col gap-10">
                <div class="flex justify-end">
                    <h1 class="text-3xl md:text-5xl font-bold">
                        <span class="text-base-color">International </span><span>Affiliation</span>
                    </h1>
                </div>
                <div class="flex flex-wrap gap-5">
                    <a data-fslightbox="first-lightbox" href="img/certificates/Certificate-01.jpg">
                        <img src="img/certificates/Certificate-01.jpg" alt="" class="h-60 sm:h-72 w-auto object-scale-down" loading="lazy" />
                    </a>

                    <a data-fslightbox="first-lightbox" href="img/certificates/Certificate-02.jpg"><img src="img/certificates/Certificate-02.jpg" alt="" class="h-60 sm:h-72 w-auto object-scale-down" /></a>
                    <a data-fslightbox="first-lightbox" href="img/certificates/Certificate-03.jpg">
                        <img src="img/certificates/Certificate-03.jpg" alt="" class="h-60 sm:h-72 w-auto object-scale-down" /></a>
                </div>
            </div>
            {{-- <div class="mt-10 flex flex-col gap-10">
                <div class="flex justify-start">
                    <h1 class="text-3xl md:text-5xl font-bold">
                        <span class="text-base-color">Our </span><span>Partners</span>
                    </h1>
                </div>
                <div class="grid grid-cols-auto w-full overflow-x-auto">
                    <div class="border rounded-lg flex h-max overflow-hidden">
                        <div class="p-4">
                            <img src="img/certificates/Certificate-01.jpg" alt="" class="aspect-square max-w-[15rem] object-cover rounded-lg">
                        </div>
                        <div class="py-4 pr-4 flex flex-col justify-between">
                            <div>
                                <h1 class="text-base-color text-2xl font-bold">Company Name</h1>
                                <p>test</p>
                            </div>
                            <div>
                                Socials
                            </div>
                        </div>
                    </div>
                    <div class="border rounded-lg flex h-max overflow-hidden">
                        <div class="p-4">
                            <img src="img/certificates/Certificate-01.jpg" alt="" class="aspect-square max-w-[15rem] object-cover rounded-lg">
                        </div>
                        <div class="py-4 pr-4 flex flex-col justify-between">
                            <div>
                                <h1 class="text-base-color text-2xl font-bold">Company Name</h1>
                                <p>test</p>
                            </div>
                            <div>
                                Socials
                            </div>
                        </div>
                    </div>
                    <div class="border rounded-lg flex h-max overflow-hidden">
                        <div class="p-4">
                            <img src="img/certificates/Certificate-01.jpg" alt="" class="aspect-square max-w-[15rem] object-cover rounded-lg">
                        </div>
                        <div class="py-4 pr-4 flex flex-col justify-between">
                            <div>
                                <h1 class="text-base-color text-2xl font-bold">Company Name</h1>
                                <p>test</p>
                            </div>
                            <div>
                                Socials
                            </div>
                        </div>
                    </div>
                    <div class="border rounded-lg flex h-max overflow-hidden">
                        <div class="p-4">
                            <img src="img/certificates/Certificate-01.jpg" alt="" class="aspect-square max-w-[15rem] object-cover rounded-lg">
                        </div>
                        <div class="py-4 pr-4 flex flex-col justify-between">
                            <div>
                                <h1 class="text-base-color text-2xl font-bold">Company Name</h1>
                                <p>test</p>
                            </div>
                            <div>
                                Socials
                            </div>
                        </div>
                    </div>
                    <div class="border rounded-lg flex h-max overflow-hidden">
                        <div class="p-4">
                            <img src="img/certificates/Certificate-01.jpg" alt="" class="aspect-square max-w-[15rem] object-cover rounded-lg">
                        </div>
                        <div class="py-4 pr-4 flex flex-col justify-between">
                            <div>
                                <h1 class="text-base-color text-2xl font-bold">Company Name</h1>
                                <p>test</p>
                            </div>
                            <div>
                                Socials
                            </div>
                        </div>
                    </div>
                    <div class="border rounded-lg flex h-max overflow-hidden">
                        <div class="p-4">
                            <img src="img/certificates/Certificate-01.jpg" alt="" class="aspect-square max-w-[15rem] object-cover rounded-lg">
                        </div>
                        <div class="py-4 pr-4 flex flex-col justify-between">
                            <div>
                                <h1 class="text-base-color text-2xl font-bold">Company Name</h1>
                                <p>test</p>
                            </div>
                            <div>
                                Socials
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</x-app>
