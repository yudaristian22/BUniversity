@extends('layouts.app')
@section('content')
    <!-- MAIN SECTION -->
    <article class="container mt-28">
        <h1 class="text-xl font-semibold text-xneutral-400 font-montserrat sm:text-2xl">
            Sambutan Rektor B-University
        </h1>
        <p class="text-sm font-semibold text-xneutral-200 sm:text-base font-montserrat">
            Meraih Masa Depan dengan Semangat Kebersamaan
        </p>

        @if ($greeting->isEmpty())
            <div class="text-sm font-medium text-center text-xneutral-300 font-montserrat sm:text-base"> No Data Available
            </div>
        @else
            @foreach ($greetings as $greeting)
                <div class="grid grid-cols-1 gap-8 mt-8 sm:grid-cols-12">
                    <img src="{{ asset('storage/' . $greeting->image) }}" alt="Rektor B-University"
                        class="w-full h-fit object-cover rounded-[30px] sm:col-span-4" />
                    <div
                        class="text-sm font-medium text-justify font-montserrat sm:text-base sm:col-span-8 text-xneutral-300">
                        {!! $greeting->content !!}
                    </div>
                </div>
            @endforeach
        @endif
    </article>
@endsection
