@extends('layout.app')

@section('title', 'Akualita Academy - About')

@section('content')

<section class="w-full min-h-screen bg-[#FAFAFA] text-white flex items-start pt-28 pb-10 px-6 md:px-16">
  <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center max-w-7xl mx-auto w-full">

    <!-- Kiri: Teks -->
    <div class="space-y-6">
      <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight text-[#1F2756]">
        Bangun<span class="text-[#1F2756]"> karirmu</span>,<br>
        bersama <span class="text-[#1F2756]">kami</span><br>
        <span class="bg-[#00c7ec] text-[#FFFFFF] inline-block px-3 py-1 rounded mt-1">mulai sekarang</span>
      </h2>
      <p class="text-base md:text-lg lg:text-xl text-gray-800 max-w-xl">
        Kami bantu kamu upgrade skill, pelajari hal-hal yang relevan, dan buka jalan menuju karier impianmu.
      </p>
      <a href="#" class="inline-flex items-center bg-[#00c7ec] text-white font-semibold px-4 py-3 rounded-lg shadow-md hover:bg-[#e39200] transition duration-300 text-sm md:text-lg">
        <img src="https://img.icons8.com/ios-filled/20/ffffff/whatsapp.png" class="mr-2" alt="wa" />
        Coba Konsultasi
      </a>
      <p class="text-xs md:text-sm text-gray-300 mt-2">Terakui oleh Kemendikbudristek</p>
    </div>
  </div>
</section>





@endsection