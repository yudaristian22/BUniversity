@extends('layouts.app')
@section('content')
    <!-- MAIN SECTION -->
    <article class="container mt-28">
        <h1 class="text-xl font-semibold text-xneutral-400 font-montserrat sm:text-2xl">
            Sejarah B-University
        </h1>
        <p class="text-sm font-semibold text-xneutral-200 sm:text-base font-montserrat">
            Bersama mengembangkan pendidikan Negeri
        </p>

        <div class="grid grid-cols-1 gap-6 mt-8 sm:grid-cols-2">
            <div class="space-y-3">
                <h3 class="text-base font-semibold text-center font-montserrat sm:text-lg text-primary-200">
                    VISI
                </h3>
                <p class="text-lg font-semibold text-center uppercase sm:text-xl font-montserrat text-xneutral-200">
                    {!! $visi ?? 'No Data Available' !!}
                </p>
            </div>
            <div class="space-y-3">
                <h2 class="text-base font-semibold text-center font-montserrat sm:text-lg text-primary-200">
                    MISI
                </h2>
                <ol
                    class="pl-4 text-sm font-semibold text-justify list-decimal font-montserrat text-xneutral-200 sm:text-base">
                    {!! $misi ?? 'No Data Available' !!}
                </ol>
            </div>
        </div>

        <div class="grid grid-cols-1 mt-10 overflow-hidden border sm:grid-cols-3 border-xneutral-100 rounded-2xl">
            <div class="p-[30px]">
                <h2 class="text-base font-semibold sm:text-lg text-xneutral-400 font-montserrat">
                    Inovatif
                </h2>
                <p class="mt-4 text-xs font-medium font-montserrat text-xneutral-200 sm:text-sm">
                    Makna ”Inovatif” dalam visi universitas adalah Lulusan mempunyai
                    kemampuan dalam berfikir untuk menciptakan pengetahuan dan teknologi
                    baru yang tepat guna di bidang industri dan kesehatan untuk
                    kemaslahatan ummat.
                </p>
            </div>
            <div>
                @if (isset($visimisiImg[0]))
                    <img src="{{ asset('storage/' . $visimisiImg[0]) }}" alt="Inovatif" />
                @else
                    <p>No Image Available</p>
                @endif
            </div>
            <div class="p-[30px]">
                <h2 class="text-base font-semibold sm:text-lg text-xneutral-400 font-montserrat">
                    Profesional
                </h2>
                <p class="mt-4 text-xs font-medium font-montserrat text-xneutral-200 sm:text-sm">
                    Makna ”Profesional” dalam visi universitas adalah lulusan mempunyai
                    kompetensi sesuai dengan profesinya masing-masing baik dalam aspek
                    pengetahuan, sikap maupun keterampilan serta berpegang teguh pada
                    nilai moral yang mengarahkan serta mendasari perbuatan.
                </p>
            </div>
            <div>
                @if (isset($visimisiImg[0]))
                    <img src="{{ asset('storage/' . $visimisiImg[1]) }}" alt="Profesional" />
                @else
                    <p>No Image Available</p>
                @endif
            </div>
            <div class="p-[30px]">
                <h2 class="text-base font-semibold sm:text-lg text-xneutral-400 font-montserrat">
                    Islami
                </h2>
                <p class="mt-4 text-xs font-medium font-montserrat text-xneutral-200 sm:text-sm">
                    Makna ”Islami” dalam visi universitas adalah lulusan mempunyai
                    integritas menjunjung tinggi nilai-nilai keislaman (Islamic values)
                    dalam setiap perilaku dan peduli terhadap kesejahteraan masyarakat
                    serta perubahan dalam setiap aspek kehidupan di lingkungannya.
                </p>
            </div>
            <div>
                @if (isset($visimisiImg[0]))
                    <img src="{{ asset('storage/' . $visimisiImg[2]) }}" alt="Islami" />
                @else
                    <p>No Image Available</p>
                @endif
            </div>
        </div>
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
