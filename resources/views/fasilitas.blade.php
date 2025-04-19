@extends('layouts.app')
@section('content')
    <!-- MAIN SECTION -->
    <article class="container mt-28">
        <h1 class="text-xl font-semibold text-xneutral-400 font-montserrat sm:text-2xl">
            Fasilitas B-University
        </h1>
        <p class="text-sm font-semibold text-xneutral-200 font-montserrat sm:text-base">
            Menciptakan lingkungan pembelajaran yang nyaman dan lengkap
        </p>


        @if ($facilities->isEmpty())
            <div class="text-sm font-medium text-center text-xneutral-300 font-montserrat sm:text-base"> No Data Available
            </div>
        @else
            @foreach ($facilities as $facility)
                <div class="grid grid-cols-1 gap-8 mt-8 sm:grid-cols-12">
                    <img src="{{ asset('storage/' . $facility->image) }}" alt="Laboratorium Sistem dan Teknologi Informasi"
                        class="w-full h-fit object-cover rounded-[30px] sm:col-span-5" />
                    <div class="sm:col-span-7">
                        {!! $facility->content !!}
                    </div>
                </div>
            @endforeach
        @endif

        <style>
            /* Gaya untuk heading */
            h1,
            h2,
            h3,
            h4,
            h5,
            h6 {
                font-family: 'Montserrat', sans-serif;
                color: #333;
                /* Warna teks */
                font-weight: bold;
                /* Ketebalan teks */
            }

            /* Gaya untuk numbering dan bullet list */
            ul {
                list-style-type: disc;
                /* Jenis bullet list */
                padding-left: 20px;
                /* Jarak dari kiri */
                marbin-bottom: 1em;
            }

            ol {
                list-style-type: decimal;
                /* Jenis numbering list */
                padding-left: 20px;
                /* Jarak dari kiri */
                margin-bottom: 1em;
            }

            li {
                margin-bottom: 0.5em;
            }

            p {
                margin-bottom: 1em;
                color: #555
            }
        </style>
    </article>
@endsection
