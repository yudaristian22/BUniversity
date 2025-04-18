@extends('layouts.app')
@extends('content')

<!-- HERO SECTION -->
<section class="container min-h-[90vh] relative mt-28">
    <div id="hero-1"
        class="absolute animate-fade top-0 left-0 w-full h-full flex flex-col lg:flex-row lg:portrait:flex-col items-center justify-center rounded-[30px]">
        <div class="w-full px-4 md:pl-12 lg:w-1/2 lg:portrait:w-full">
            <h1 class="text-4xl font-semibold font-montserrat md:text-5xl/[60px] text-white mb-7">
                Menyatukan Ilmu dan Iman untuk Masa Depan Cerah
            </h1>
            <span class="text-lg font-medium text-white md:text-xl font-montserrat">Kami berkomitmen mendidik
                generasi unggul yang menjunjung tinggi
                nilai agama dan kecemerlangan akademik.</span>
        </div>
        <img src="../assets/images/hero-illustration-1.png" class="z-0 w-full mr-12 sm:-mr-12 lg:w-1/2 lg:portrait:w-4/5"
            alt="Hero Image" />
    </div>
    <div id="hero-2"
        class="absolute top-0 animate-fade left-0 w-full h-full flex flex-col lg:flex-row lg:portrait:flex-col items-center justify-center rounded-[30px]">
        <div class="w-full px-4 md:pl-12 lg:w-1/2 lg:portrait:w-full">
            <h1 class="text-4xl font-semibold font-montserrat md:text-5xl/[60px] text-white mb-7">
                Menuju Pendidikan Berdaya Saing Global
            </h1>
            <span class="text-lg font-medium text-white md:text-xl font-montserrat">Teknik pembelajaran yang
                memadukan tradisi keilmuan Agama dengan
                inovasi modern.</span>
        </div>
        <img src="../assets/images/hero-illustration-2.png"
            class="z-0 w-full mr-12 sm:-mr-12 lg:w-1/2 lg:portrait:w-4/5" alt="Hero Image" />
    </div>
    <div id="hero-3"
        class="absolute animate-fade top-0 left-0 w-full h-full flex flex-col lg:flex-row lg:portrait:flex-col items-center justify-center rounded-[30px]">
        <div class="w-full px-4 md:pl-12 lg:w-1/2 lg:portrait:w-full">
            <h1 class="text-4xl font-semibold font-montserrat md:text-5xl/[60px] text-white mb-7">
                Menciptakan Generasi Berakhlak dan Berwawasan
            </h1>
            <span class="text-lg font-medium text-white md:text-xl font-montserrat">Kami hadir untuk membimbing
                Anda dalam meraih prestasi akademik dan
                menjadi agen perubahan di dunia.</span>
        </div>
        <img src="../assets/images/hero-illustration-3.png"
            class="z-0 w-full mr-12 sm:-mr-12 lg:w-1/2 lg:portrait:w-4/5" alt="Hero Image" />
    </div>
</section>

<!-- COOPERATION -->
<div
    class="container relative z-10 py-5 mx-4 -mt-32 overflow-hidden bg-white shadow-2xl w-fit md:px-16 rounded-3xl sm:mx-auto">
    <h3 class="w-full mb-4 text-xl font-semibold text-center sm:text-2xl font-montserrat">
        Bekerjasama Dengan
    </h3>
    <div class="flex gap-16 overflow-x-auto">
        @if ($cooperationImg->isEmpty())
            <p class="text-lg text-center text-xneutral-200 font-montserrat">No cooperation images available.</p>
        @else
            @foreach ($cooperationImg as $image)
                <img class="w-12 md:w-fit" src="{{ asset('storage/' . $image->image) }}" alt="Cooperation" />
            @endforeach
        @endif
    </div>
</div>
<!-- END COOPERATION -->

<!-- END OF HERO SECTION -->

<!-- ABOUT SECTION -->
<section class="w-full overflow-hidden py-28">
    <div class="container grid items-center grid-cols-1 gap-12 md:grid-cols-2">
        <div class="space-y-4 lg:ml-20">
            <h3 class="text-xl font-bold text-primary-200 sm:text-2xl font-montserrat">
                TENTANG KAMI
            </h3>
            @if (empty($abouts->content) && empty($abouts->image))
                <p class="text-lg font-semibold font-montserrat sm:text-xl text-xneutral-200"></p>
            @else
                <p class="text-2xl font-semibold font-montserrat sm:text-4xl">
                    Membangun generasi
                    <span class="text-secondary-purple">unggul</span> dan
                    <span class="text-secondary-pink">berakhlak</span>
                </p>
                <p class="text-base font-semibold sm:text-lg text-xneutral-200 font-montserrat">
                    {{ $abouts->content }}
                </p>
                <a href="{{ route('sejarah') }}"
                    class="px-6 py-[14px] font-montserrat text-neutral-0 bg-white border w-fit text-lg font-semibold border-primary-200 text-primary-200 rounded-full flex gap-[10px]"><span>Tentang
                        kami</span>
                    <i class="bi bi-arrow-right"></i>
                </a>
            @endif
        </div>
        <div class="relative">
            <div class="grid grid-cols-2 gap-6 w-fit">
                @if (isset($abouts->image[0]))
                    <img src="{{ asset('storage/' . $abouts->image[0]) }}" alt="Illustration" />
                @endif
                @if (isset($abouts->image[1]))
                    <img src="{{ asset('storage/' . $abouts->image[1]) }}" alt="Illustration" />
                @endif
                @if (isset($abouts->image[2]))
                    <img src="{{ asset('storage/' . $abouts->image[2]) }}" alt="Illustration" />
                @endif
            </div>
            <img class="absolute -bottom-32 -left-36 -z-10" src="/assets/images/elipse-1.svg" alt="" />
            <img class="absolute -top-24 -right-16 -z-10" src="/assets/images/elipse-2.svg" alt="" />
        </div>
    </div>
</section>
<!-- END OF ABOUT SECTION -->

<!-- NEWS SECTION -->
<section class="container relative">
    <div class="flex items-center justify-between mb-10">
        <div>
            <h3 class="text-xl font-semibold sm:text-2xl font-montserrat text-xneutral-400">
                Berita terkini untuk Anda
            </h3>
            <p class="text-sm font-semibold sm:text-base font-montserrat text-xneutral-200">
                Temukan berita terbaru hari ini
            </p>
        </div>
        <div>
            <button
                class="w-10 h-10 transition-all rounded-full text-xneutral-400 hover:text-xneutral-0 bg-xneutral-0 hover:bg-xneutral-400">
                <i class="text-4xl bi bi-arrow-left-short"></i>
            </button>
            <button
                class="w-10 h-10 transition-all rounded-full text-xneutral-400 hover:text-xneutral-0 bg-xneutral-0 hover:bg-xneutral-400">
                <i class="text-4xl bi bi-arrow-right-short"></i>
            </button>
        </div>
    </div>
    <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
        <div class="p-[14px] rounded-[20px] border border-xneutral-100 bg-xneutral-0">
            @if ($news->isEmpty())
                <p class="text-lg text-center text-xneutral-200 font-montserrat">No news available.</p>
            @else
                @foreach ($news as $newslist)
                    <div class="max-h-[214px] rounded-2xl overflow-hidden mb-5">
                        <img src="{{ asset('storage/' . $newslist->image) }}" alt="{{ $newslist->title }}" />
                    </div>
                    <a href="{{ route('berita.show', $newslist->slug) }}"
                        class="text-base font-semibold sm:text-lg font-montserrat text-xneutral-400 line-clamp-2">
                        {{ $newslist->title }}
                    </a>
                    <p class="text-xs font-semibold font-montserrat sm:text-sm text-xneutral-200">
                        {{ \Carbon\Carbon::parse($newlist->created_at)->format('d/m/y') }}
                    </p>
                @endforeach
            @endif
        </div>
    </div>
    <div class="absolute top-12 -left-24 -z-10">
        <img src="/assets/images/elipse-1.svg" alt="" />
    </div>
</section>
<!-- END OF NEWS SECTION -->

<!-- RECTOR SECTION -->
<section class="container mt-28">
    <div class="space-y-2 text-center">
        <h3 class="text-xl font-semibold font-montserrat text-xneutral-400 sm:text-2xl">
            Rektorat B-Universitas
        </h3>
        <p class="text-sm font-semibold font-montserrat sm:text-base text-xneutral-200">
            Berkomitmen untuk meningkatkan kualitas Pendidikan
        </p>
    </div>
    <div class="grid grid-cols-2 gap-12 text-center lg:grid-cols-4 mt-11">
        @if ($rectors->isEmpty())
            <p class="text-lg text-center text-xneutral-200 font-montserrat">No rector images available.</p>
        @else
            @foreach ($rectors as $rector)
                <div class="flex flex-col items-center">
                    <div class="mb-6 overflow-hidden rounded-full w-fit">
                        <img src="{{ asset('storage/' . $rector->image) }}" alt="{{ $rector->nama }}" />
                    </div>
                    <p class="mb-[2px] text-sm sm:text-base text-xneutral-400 font-semibold font-montserrat">
                        {{ $rector->nama }}
                    </p>
                    <p class="mb-[2px] text-xs sm:text-sm text-xneutral-200 font-semibold font-montserrat">
                        {{ $rector->jabatan }}
                    </p>
                </div>
            @endforeach
        @endif
    </div>
</section>
<!-- END OF RECTOR SECTION -->

<!-- ANNOUNCEMENT SECTION -->
<section class="w-full mt-28 x-announcement">
    <div class="container pb-16 pt-9">
        <div class="flex items-center justify-between mb-10">
            <div>
                <h3 class="text-xl font-semibold sm:text-2xl font-montserrat text-xneutral-0">
                    Pengumuman
                </h3>
                <p class="text-sm font-semibold font-montserrat sm:text-base text-xneutral-0">
                    Dapatkan pengumuman terbaru
                </p>
            </div>
            <div>
                <button
                    class="w-10 h-10 transition-all rounded-full text-xneutral-400 hover:text-xneutral-0 bg-xneutral-0 hover:bg-xneutral-400">
                    <i class="text-4xl bi bi-arrow-left-short"></i>
                </button>
                <button
                    class="w-10 h-10 transition-all rounded-full text-xneutral-400 hover:text-xneutral-0 bg-xneutral-0 hover:bg-xneutral-400">
                    <i class="text-4xl bi bi-arrow-right-short"></i>
                </button>
            </div>
        </div>
        <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
            <div class="py-[26px] px-7 rounded-[20px] border border-xneutral-100 bg-white">
                @forelse ($announcements as $announcement)
                    <a href="{{ route('pengumuman.show', $announcement->slug) }}"
                        class="mb-4 text-base font-semibold sm:text-lg font-montserrat text-xneutral-400 line-clamp-2">
                        {{ $announcement->title }}
                    </a>
                    <p class="font-montserrat text-xs sm:text-sm font-semibold text-xneutral-200 mb-1.5">
                        {{ Str::limit($announcement->content, 100, '...') }}
                    </p>
                    <p class="text-xs font-semibold font-montserrat text-xneutral-200">
                        {{ \Carbon\Carbon::parse($announcement->created_at)->format('d/m/y') }}
                    </p>
                @empty
                    <div class="py-[26px] px-7 rounded-[20px] border border-xneutral-100 bg-white">
                        <p class="text-lg text-center text-xneutral-400 font-montserrat">No announcements available.
                        </p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</section>
<!-- END OF ANNOUNCEMENT SECTION -->

</body>

</html>
