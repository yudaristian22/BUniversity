@extends('layouts.app')

@section('content')
    <!-- MAIN SECTION -->
    <article class="container mt-28">
        <h1 class="text-xneutral-400 font-montserrat text-xl sm:text-2xl font-semibold">
            Pengumuman
        </h1>
        <p class="text-xneutral-200 text-sm sm:text-base font-montserrat font-semibold">
            Dapatkan Pengumuman terbaru
        </p>

        <div class="mt-11">
            <div class="space-y-[14px] mb-3">
                <h2 class="uppercase font-montserrat font-semibold text-xneutral-400 text-[22px] sm:text-3xl">
                    {{ $announcement->title }} <!-- Menampilkan judul pengumuman -->
                </h2>
                <div class="flex items-center gap-[18px] font-montserrat text-xs text-xneutral-200 font-semibold">
                    <div class="flex gap-[10px] items-center">
                        {{-- <img src="/assets/images/profile-picture.png" alt="Admin" /> --}}
                        <span>by <span class="text-xneutral-400">{{ $announcement->user->name }}</span></span>
                        <!-- Mengganti dengan nama user dari relasi -->
                    </div>
                    <span>{{ \Carbon\Carbon::parse($announcement->created_at)->format('d F Y') }}</span>
                    <!-- Tanggal pengumuman -->
                </div>
            </div>
            <p class="font-montserrat font-medium text-sm sm:text-base text-justify sm:col-span-8 text-xneutral-300">
                {!! $announcement->content !!} <!-- Menampilkan konten pengumuman -->
            </p>
        </div>
    </article>
@endsection
