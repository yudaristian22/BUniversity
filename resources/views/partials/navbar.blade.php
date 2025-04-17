<!-- NAVIGATION -->
<header class="fixed top-0 z-50 w-full bg-white">
    <nav class="container flex items-center justify-between py-5">
        <div>
            <a href="{{ route('/') }}">
                <img src="{{ asset('assets/images/B-Uni.png') }}" height="60" class="max-h-[60px]" alt="" />
            </a>
        </div>
        <ul class="items-center hidden list-none md:flex gap-9 font-montserrat">
            <li class="relative flex items-center h-full group">
                <div class="flex items-center gap-1.5 x-dropdown-button cursor-pointer peer">
                    <span class="font-semibold">Tentang Kami</span>
                    <i class="transition-all bi bi-chevron-down group-hover:rotate-180"></i>
                </div>
                <div
                    class="absolute hidden overflow-hidden shadow-xl peer-hover:block hover:block group-hover:block rounded-xl top-full w-fit">
                    <div class="pt-12">
                        <ul class="p-3 pl-8 list-disc bg-white text-nowrap rounded-xl">
                            <li>
                                <a href="{{ route('sejarah') }}" class="block w-full py-1 pl-2 pr-8">Sejarah</a>
                            </li>
                            <li>
                                <a href="{{ route('visimisi') }}" class="block w-full py-1 pl-2 pr-8">Visi & Misi</a>
                            </li>
                            <li>
                                <a href="{{ route('sambutan') }}" class="block w-full py-1 pl-2 pr-8">Sambutan
                                    Rektor</a>
                            </li>
                            <li>
                                <a href="{{ route('fasilitas') }}" class="block w-full py-1 pl-2 pr-8">Fasilitas</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>
                <a href="{{ route('sdm') }}" class="font-semibold">SDM</a>
            </li>
            <li class="relative flex items-center h-full group">
                <div class="flex items-center gap-1.5 x-dropdown-button cursor-pointer peer">
                    <span class="font-semibold">Akademik</span>
                    <i class="transition-all bi bi-chevron-down group-hover:rotate-180"></i>
                </div>
                <div
                    class="absolute hidden overflow-hidden -translate-x-1/2 shadow-xl rounded-xl peer-hover:block hover:block group-hover:block top-full w-fit">
                    <div class="pt-12">
                        <div class="flex gap-4 px-6 py-3 bg-white rounded-xl">
                            <div class="flex-1 px-4">
                                <span class="block h-10 mb-4 font-semibold text-nowrap">ILMU KESEHATAN</span>
                                <ul class="space-y-1 list-disc text-nowrap">
                                    <li>
                                        <a href="#" class="block w-full py-1 pl-2 pr-8">S1 KEPERAWATAN</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block w-full py-1 pl-2 pr-8">S1 KEBIDANAN</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block w-full py-1 pl-2 pr-8">S1 FARMASI</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block w-full py-1 pl-2 pr-8">S1 ADMINISTRASI RUMAH
                                            SAKIT</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block w-full py-1 pl-2 pr-8">D3 KEBIDANAN</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block w-full py-1 pl-2 pr-8">D3 FISIOTERAPI</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block w-full py-1 pl-2 pr-8">D3 FARMASI</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="flex-1 px-4">
                                <span class="block h-10 mb-4 font-semibold text-nowrap">EKONOMI DAN BISNIS</span>
                                <ul class="space-y-1 list-disc text-nowrap">
                                    <li>
                                        <a href="#" class="block w-full py-1 pl-2 pr-8">S1 MANAJEMEN</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block w-full py-1 pl-2 pr-8">S1 AKUNTANSI</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block w-full py-1 pl-2 pr-8">S1 EKONOMI SYARIAH</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block w-full py-1 pl-2 pr-8">S1 KEWIRAUSAHAAN</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="flex-1 px-4">
                                <span class="block h-10 mb-4 font-semibold">SAINS, TEKNOLOGI, DAN PENDIDIKAN</span>
                                <ul class="space-y-1 list-disc text-nowrap">
                                    <li>
                                        <a href="#" class="block w-full py-1 pl-2 pr-8">S1 PENDIDIKAN GURU
                                            SD</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block w-full py-1 pl-2 pr-8">S1 BIOLOGI</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block w-full py-1 pl-2 pr-8">S1 FISIKA</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block w-full py-1 pl-2 pr-8">S1 TEKNIK KOMPUTER</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block w-full py-1 pl-2 pr-8">S1 TEKNIK INDUSTRI</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block w-full py-1 pl-2 pr-8">S1 TEKNIK
                                            INFORMATIKA</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <a href="{{ route('pengumuman') }}" class="font-semibold">Pengumuman</a>
            </li>
        </ul>
        <div class="hidden md:flex">
            <a href="{{ route('pendaftaran') }}"
                class="px-6 py-[14px] font-montserrat font-semibold text-xneutral-0 bg-primary-200 rounded-full">Pendaftaran</a>
        </div>

        <!-- Mobile menu toggle -->
        <button type="button"
            class="relative inline-flex items-center justify-center p-2 rounded-md md:hidden text-xneutral-300 hover:bg-xneutral-100 hover:text-xneutral-400 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
            aria-controls="mobile-menu" aria-expanded="false">
            <span class="absolute -inset-0.5"></span>
            <span class="sr-only">Open main menu</span>
            <svg class="block w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <svg class="hidden w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </nav>

    <!-- Mobile Menu -->
    <div class="hidden shadow-xl" id="mobile-menu">
        <ul class="px-4 pt-2 pb-3 space-y-2">
            <li class="w-full h-full">
                <div class="flex items-center w-full justify-between gap-1.5 x-dropdown-button cursor-pointer"
                    data-target="menu1">
                    <span class="font-semibold">Tentang Kami</span>
                    <i class="transition-all bi bi-chevron-down"></i>
                </div>
                <div class="hidden x-dropdown-menu" id="menu1">
                    <div>
                        <ul class="px-3 bg-white text-nowrap rounded-xl">
                            <li>
                                <a href="{{ route('sejarah') }}" class="block w-full py-1 pl-2 pr-8">Sejarah</a>
                            </li>
                            <li>
                                <a href="{{ route('visimisi') }}" class="block w-full py-1 pl-2 pr-8">Visi & Misi</a>
                            </li>
                            <li>
                                <a href="{{ route('sambutan') }}" class="block w-full py-1 pl-2 pr-8">Sambutan
                                    Rektor</a>
                            </li>
                            <li>
                                <a href="{{ route('fasilitas') }}" class="block w-full py-1 pl-2 pr-8">Fasilitas</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>
                <a href="{{ route('sdm') }}" class="font-semibold">SDM</a>
            </li>
            <li class="w-full h-full">
                <div class="flex items-center w-full justify-between gap-1.5 x-dropdown-button cursor-pointer"
                    data-target="menu2">
                    <span class="font-semibold">Akademik</span>
                    <i class="transition-all bi bi-chevron-down"></i>
                </div>
                <div class="hidden w-full mt-4 x-dropdown-menu" id="menu2">
                    <div class="space-y-4">
                        <div class="pl-3">
                            <span class="flex justify-between mb-3 font-semibold text-nowrap x-dropdown-button"
                                data-target="menu-ilmu-kesehatan">ILMU KESEHATAN
                                <i class="transition-all bi bi-chevron-down"></i></span>
                            <ul id="menu-ilmu-kesehatan" class="hidden space-y-1 x-dropdown-menu text-nowrap">
                                <li>
                                    <a href="#" class="block w-full py-1 pl-2 pr-8">S1 KEPERAWATAN</a>
                                </li>
                                <li>
                                    <a href="#" class="block w-full py-1 pl-2 pr-8">S1 KEBIDANAN</a>
                                </li>
                                <li>
                                    <a href="#" class="block w-full py-1 pl-2 pr-8">S1 FARMASI</a>
                                </li>
                                <li>
                                    <a href="#" class="block w-full py-1 pl-2 pr-8">S1 ADMINISTRASI RUMAH
                                        SAKIT</a>
                                </li>
                                <li>
                                    <a href="#" class="block w-full py-1 pl-2 pr-8">D3 KEBIDANAN</a>
                                </li>
                                <li>
                                    <a href="#" class="block w-full py-1 pl-2 pr-8">D3 FISIOTERAPI</a>
                                </li>
                                <li>
                                    <a href="#" class="block w-full py-1 pl-2 pr-8">D3 FARMASI</a>
                                </li>
                            </ul>
                        </div>
                        <div class="pl-3">
                            <span class="flex justify-between mb-3 font-semibold text-nowrap x-dropdown-button"
                                data-target="menu-ekonomi-bisnis">EKONOMI DAN BISNIS
                                <i class="transition-all bi bi-chevron-down"></i></span>
                            <ul id="menu-ekonomi-bisnis" class="hidden space-y-1 x-dropdown-menu text-nowrap">
                                <li>
                                    <a href="#" class="block w-full py-1 pl-2 pr-8">S1 MANAJEMEN</a>
                                </li>
                                <li>
                                    <a href="#" class="block w-full py-1 pl-2 pr-8">S1 AKUNTANSI</a>
                                </li>
                                <li>
                                    <a href="#" class="block w-full py-1 pl-2 pr-8">S1 EKONOMI SYARIAH</a>
                                </li>
                                <li>
                                    <a href="#" class="block w-full py-1 pl-2 pr-8">S1 KEWIRAUSAHAAN</a>
                                </li>
                            </ul>
                        </div>
                        <div class="pl-3">
                            <span class="flex justify-between mb-3 font-semibold text-nowrap x-dropdown-button"
                                data-target="menu-saintekdik">SAINS, TEKNOLOGI, DAN PENDIDIKAN
                                <i class="transition-all bi bi-chevron-down"></i></span>
                            <ul id="menu-saintekdik" class="hidden space-y-1 x-dropdown-menu text-nowrap">
                                <li>
                                    <a href="#" class="block w-full py-1 pl-2 pr-8">S1 PENDIDIKAN GURU
                                        SD</a>
                                </li>
                                <li>
                                    <a href="#" class="block w-full py-1 pl-2 pr-8">S1 BIOLOGI</a>
                                </li>
                                <li>
                                    <a href="#" class="block w-full py-1 pl-2 pr-8">S1 FISIKA</a>
                                </li>
                                <li>
                                    <a href="#" class="block w-full py-1 pl-2 pr-8">S1 TEKNIK KOMPUTER</a>
                                </li>
                                <li>
                                    <a href="#" class="block w-full py-1 pl-2 pr-8">S1 TEKNIK INDUSTRI</a>
                                </li>
                                <li>
                                    <a href="#" class="block w-full py-1 pl-2 pr-8">S1 TEKNIK
                                        INFORMATIKA</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <a href="{{ route('pengumuman') }}" class="font-semibold">Pengumuman</a>
            </li>
        </ul>
    </div>
</header>
<!-- END OF NAVIGATION -->
