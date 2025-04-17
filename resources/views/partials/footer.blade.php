<!-- FOOTER SECTION -->
<footer class="w-full pt-20 mt-14">
    <div class="container grid grid-cols-1 gap-12 sm:grid-cols-2 md:grid-cols-3 lg:gap-36">
        <div>
            <img class="mb-10"
                src="{{ $datafooter->image ? Storage::url($datafooter->image) : asset('assets/images/B-Uni.png') }}"
                alt="Logo B-Universitas" />
            <p class="mb-6 text-sm text-medium text-xneutral-200 font-poppins">
                Lihat Perkembangan kami diakun sosial media
            </p>
            <div class="flex items-center gap-11">
                <a href="{{ $datafooter->link_instagram ?? 'null' }}"
                    class="grid w-8 h-8 rounded-full place-content-center bg-primary-200">
                    <i class="text-lg bi bi-instagram text-xneutral-0"></i>
                </a>
                <a href="{{ $datafooter->link_youtube ?? 'null' }}"
                    class="grid w-8 h-8 rounded-full place-content-center bg-primary-200">
                    <i class="text-lg bi bi-youtube text-xneutral-0"></i>
                </a>
                <a href="{{ $datafooter->link_linkedin ?? 'null' }}"
                    class="grid w-8 h-8 rounded-full place-content-center bg-primary-200">
                    <i class="text-sm bi bi-linkedin text-xneutral-0"></i>
                </a>
                <a href="{{ $datafooter->link_facebook ?? 'null' }}"
                    class="grid w-8 h-8 rounded-full place-content-center bg-primary-200">
                    <i class="text-lg bi bi-facebook text-xneutral-0"></i>
                </a>
            </div>
        </div>
        <div>
            <h4 class="mb-10 text-lg font-semibold font-poppins text-xneutral-300">
                Contact us
            </h4>
            <div class="space-y-6">
                <div class="flex gap-4">
                    <i class="bi bi-geo-alt-fill text-xneutral-200"></i>
                    <p class="text-sm font-poppins text-xneutral-200">
                        {{ $datafooter->alamat ?? 'null' }}
                    </p>
                </div>
                <div class="flex gap-4">
                    <i class="bi bi-envelope text-xneutral-200"></i>
                    <p class="text-sm font-poppins text-xneutral-200">
                        {{ $datafooter->email ?? 'null' }}
                    </p>
                </div>
                <div class="flex gap-4">
                    <i class="bi bi-whatsapp text-xneutral-200"></i>
                    <p class="text-sm font-poppins text-xneutral-200">
                        {{ $datafooter->wa ?? 'null' }}
                    </p>
                </div>
            </div>
        </div>
        <div>
            <h4 class="mb-10 text-lg font-semibold font-poppins text-xneutral-300">
                Contact us
            </h4>
            <div class="max-h-24">
                <a href="{{ $datafooter->link_gmaps ?? 'null' }}" target="_blank" rel="noopener noreferrer">
                    <button
                        class="px-6 py-[14px] text-center w-full font-montserrat text-neutral-0 bg-white border text-lg font-semibold border-primary-200 text-primary-200 rounded-full">
                        View GMaps
                    </button>
                </a>
            </div>
        </div>
    </div>
    <div class="container">
        <hr class="border-2 mt-14 border-xneutral-300" />
        <p class="my-6 text-center font-poppins text-xneutral-200">
            Copyright © 2024 | B University
        </p>
    </div>
</footer>
<!-- END OF FOOTER SECTION -->
