@extends('layouts.app')
@section('content')
    <!-- MAIN SECTION -->
    <article class="container mt-28">
        <h1 class="text-xl font-semibold text-xneutral-400 font-montserrat sm:text-2xl">
            Pengumuman
        </h1>
        <p class="text-sm font-semibold text-xneutral-200 sm:text-base font-montserrat">
            Dapatklan Pengumuman terbaru
        </p>

        <div class="mt-11">
            <div class="space-y-[14px] mb-3">
                <h2 class="uppercase font-montserrat font-semibold text-xneutral-400 text-[22px] sm:text-3xl">
                    {{ $announcement->title }}
                </h2>
                <div class="flex items-center gap-[18px] font-montserrat text-xs text-xneutral-200 font-semibold">
                    <div class="flex gap-[10px] items-center">
                        {{-- <img src="/assets/images/profile-picture.png" alt="Admin" /> --}}
                        <span>by <span class="text-xneutral-400">{{ $announcement->user->name }}</span></span>
                    </div>
                    <span>{{ \Carbon\Carbon::parse($announcement->created_at)->format('d F Y') }}</span>
                </div>
            </div>
            <p class="text-sm font-medium text-justify font-montserrat sm:text-base sm:col-span-8 text-xneutral-300">
                {!! $announcement->content !!}
            </p>
        </div>
    </article>
@endsection
