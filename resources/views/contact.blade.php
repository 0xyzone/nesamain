<x-app>
    <div class="mt-10">
        <div>
            <h1 class="text-4xl uppercase">we're here</h1>
        </div>
        <div class="h-full">
            <div class="h-[400px] w-full">
                <iframe class="h-full w-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.20524604761!2d85.29115137425423!3d27.710948525334803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19007edecddf%3A0x1f9d45e8812d60fa!2sNepal%20Esports%20Association!5e0!3m2!1sen!2snp!4v1717749194957!5m2!1sen!2snp" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>

    <div class="mt-5 grid grid-cols-1 lg:grid-cols-2 gap-10">

        <div class="h-full w-full flex flex-col col-span-2">
            <div class="py-5 h-max w-full relative flex flex-col-reverse items-center gap-5">
                {{-- <div class="flex gap-2 font-bold mt-5 items-center">
                    <h1 class="text-6xl">Let's Talk</h1>
                    <span class="text-base-color text-4xl"><i class="fa-solid fa-arrow-right"></i></span>
                </div> --}}
                <div class="flex gap-4 w-full">
                    <div class="flex flex-col text-sm">
                        <h1 class="text-base-color uppercase font-semibold text-base">
                            address
                        </h1>
                        <p class="text-lg 2xl:text-2xl">Siddharth Sadak, Dallu Awas, Kathmandu, Nepal</p>
                    </div>
                    {{-- <div class="flex flex-col text-sm">
                        <h1 class="text-base-color uppercase font-semibold text-base">
                            phone
                        </h1>
                        <p class="text-lg 2xl:text-2xl">+977 985-1108629</p>
                    </div> --}}
                    <div class="flex flex-col text-sm">
                        <h1 class="text-base-color uppercase font-semibold text-base">
                            Email
                        </h1>
                        <p class="text-lg 2xl:text-2xl">info@nepalesports.org</p>
                    </div>
                </div>
            </div>
        </div>


        {{-- <div class="w-full flex flex-col items-center">
            <form action="#" class="relative flex flex-col gap-5 p-5 md:p-10">
                <div class="flex flex-col md:flex-row gap-5">
                    <input type="text" name="" id="" placeholder="Full Name" class="contact-form-input" />
                    <input type="text" name="" id="" placeholder="Phone" class="contact-form-input" />
                </div>
                <input type="text" name="" id="" placeholder="Email" class="contact-form-input" />
                <textarea type="text" name="" id="" rows="5" placeholder="Message" class="contact-form-input"></textarea>
                <div class="flex w-full justify-center">
                    <button class="button-styled">SEND</button>
                </div>
            </form>
        </div> --}}
    </div>
</x-app>
