@extends('layouts.app')
@section('content')
    <!-- MAIN SECTION -->
    <article class="container mt-28">
        <h1 class="text-xl font-semibold text-xneutral-400 font-montserrat sm:text-2xl">
            Pengumuman
        </h1>
        <p class="text-sm font-semibold text-xneutral-200 sm:text-base font-montserrat">
            Dapatkan Pengumuman terbaru
        </p>

        <div class="grid grid-cols-1 gap-6 mt-8 sm:grid-cols-2 md:grid-cols-3">
            @forelse ($announcements as $announcement)
                <div class="py-[26px] px-7 rounded-[20px] border border-xneutral-100 bg-white">
                    <a href="{{ route('pengumuman.show', $announcement->slug) }}"
                        class="mb-4 text-base font-semibold sm:text-lg font-montserrat text-xneutral-400 line-clamp-2">
                        {{ $announcement->title }}
                    </a>
                    <p class="font-montserrat text-xs sm:text-sm font-semibold text-xneutral-200 mb-1.5">
                        {{ Str::limit(strip_tags(html_entity_decode($announcement->content)), 100, '...') }}
                    </p>
                    <p class="text-xs font-semibold font-montserrat text-xneutral-200">
                        {{ \Carbon\Carbon::parse($announcement->created_at)->format('d/m/y') }}
                    </p>
                </div>
            @empty
                <div class="py-[26px] px-7 rounded-[20px] border border-xneutral-100 bg-white">
                    <p class="text-lg text-center text-xneutral-400 font-montserrat">No announcements available.
                    </p>
                </div>
            @endforelse

        </div>
    </article>
    <!-- END MAIN SECTION -->
@endsection
