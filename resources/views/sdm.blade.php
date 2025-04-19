@extends('layouts.app')
@section('content')
    <!-- MAIN SECTION -->
    <article class="container mt-28">
        <h1 class="text-xl font-semibold text-xneutral-400 font-montserrat sm:text-2xl">
            Data Dosen
        </h1>
        <p class="text-sm font-semibold text-xneutral-200 font-montserrat sm:text-base">
            Dosen berkompeten dibidangnya
        </p>
        @if ($lectures->isEmpty())
            <div class="text-sm font-medium text-center text-xneutral-300 font-montserrat sm:text-base"> No Data Available
            </div>
        @else
            <div class="mt-10 space-y-11">
                @foreach ($lectures as $lecture)
                    <div class="flex flex-col items-center gap-8 sm:flex-row sm:gap-16">
                        <img class="sm:col-span-2" src="{{ asset('storage/' . $lecture->image) }}"
                            alt="{{ $lecture->nama }}" />
                        <div class="sm:col-span-10 font-montserrat">
                            <h3 class="text-base font-semibold sm:text-lg text-primary-200">
                                {{ $lecture->nama }}
                            </h3>
                            <table class="mt-5 text-xs font-medium table-auto sm:table-fixed sm:text-sm text-xneutral-300">
                                <tbody>
                                    <tr>
                                        <td class="w-24 py-1 sm:w-48">NIDN</td>
                                        <td class="w-4 sm:w-12">:</td>
                                        <td>{{ $lecture->nidn }}</td>
                                    </tr>
                                    <tr>
                                        <td class="w-24 py-1 sm:w-48">Pendidikan</td>
                                        <td class="w-4 sm:w-12">:</td>
                                        <td>
                                            {{ $lecture->pendidikan }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w-24 py-1 sm:w-48">Jabatan</td>
                                        <td class="w-4 sm:w-12">:</td>
                                        <td>{{ $lecture->jabatan }}</td>
                                    </tr>
                                    <tr>
                                        <td class="w-24 py-1 sm:w-48">Email</td>
                                        <td class="w-4 sm:w-12">:</td>
                                        <td>{{ $lecture->email }}</td>
                                    </tr>
                                    <tr>
                                        <td class="w-24 py-1 sm:w-48">Topik</td>
                                        <td class="w-4 sm:w-12">:</td>
                                        <td>{{ $lecture->topik }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </article>

    <article class="container mt-[150px]">
        <h1 class="text-xl font-semibold text-xneutral-400 font-montserrat sm:text-2xl">
            Tenaga Kependidikan
        </h1>
        <p class="text-sm font-semibold text-xneutral-200 font-montserrat sm:text-base">
            Tendik B-University
        </p>
        @if ($admins->isEmpty())
            <div class="text-sm font-medium text-center text-xneutral-300 font-montserrat sm:text-base"> No Data Available
            </div>
        @else
            <div class="mt-10 space-y-11">
                @foreach ($admins as $admin)
                    <div class="flex flex-col items-center gap-8 sm:flex-row sm:gap-16">
                        <img class="sm:col-span-2" src="{{ asset('storage/' . $admin->image) }}"
                            alt="{{ $admin->nama }}" />
                        <div class="sm:col-span-10 font-montserrat">
                            <h3 class="text-base font-semibold sm:text-lg text-primary-200">
                                {{ $admin->nama }}
                            </h3>
                            <table
                                class="w-full mt-5 text-xs font-medium table-fixed sm:table-fixed sm:text-sm text-xneutral-300">
                                <tbody>
                                    <tr>
                                        <td class="w-24 py-1 sm:w-48">NIP</td>
                                        <td class="w-4 sm:w-12">:</td>
                                        <td>{{ $admin->nip }}</td>
                                    </tr>
                                    <tr>
                                        <td class="w-24 py-1 sm:w-48">Jabatan</td>
                                        <td class="w-4 sm:w-12">:</td>
                                        <td>{{ $admin->jabatan }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </article>
@endsection
