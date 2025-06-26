@extends('layout.app')

@section('title', 'Akualita Academy - About')

@section('content')

<! -- Bagian 1 halaman utama -->
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
      <a href="#" class="inline-flex items-center bg-[#00c7ec] text-white font-semibold px-4 py-3 rounded-lg shadow-md hover:bg-cyan-300 transition duration-300 text-sm md:text-lg">
        <img src="https://img.icons8.com/ios-filled/20/ffffff/whatsapp.png" class="mr-2" alt="wa" />
        Coba Konsultasi
      </a>
      <p class="text-xs md:text-sm text-gray-300 mt-2">Terakui oleh Kemendikbudristek</p>
    </div>
  </div>
</section>

<!-- Bagian 2 halaman utama -->
<section class="bg-[#F8F9FC] py-16 px-6 md:px-16">
  <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-gray-900">Program Pilihan Kami</h2>
  
  <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-7xl mx-auto">
    
    <!-- Card 1 -->
    <div class="bg-white shadow-lg rounded-xl p-6 flex flex-col justify-between">
      <div>
        <div class="flex items-center mb-4">
          <div class=" p-2 rounded-md">
            <img src="" alt="learning" />
          </div>
        </div>
        <h3 class="text-xl font-bold text-gray-900 mb-2">Lorem Ipsum dolor sit amet</h3>
        <span class="inline-block bg-[#00C7EC] text-white text-sm font-medium px-2 py-1 rounded mb-4">
          💬 Lorem Ipsum dolor sit amet
        </span>
        <ul class="space-y-2 text-sm text-gray-700">
          <li>✓ Lorem Ipsum dolor sit amet</li>
          <li>✓ Lorem Ipsum dolor sit amet</li>
          <li>✓ Lorem Ipsum dolor sit amet</li>
        </ul>
      </div>
      <div class="mt-6">
        <div class="flex gap-2">
          <button class="bg-[#00C7EC] text-white px-4 py-2 rounded-lg font-semibold">Full Program</button>
          <button class="bg-white border text-[#00C7EC] px-4 py-2 rounded-lg font-semibold">Konsultasi</button>
        </div>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="bg-white shadow-lg rounded-xl p-6 flex flex-col justify-between">
      <div>
        <div class="flex items-center mb-4">
          <div class=" p-2 rounded-md">
            <img src="" alt="learning" />
          </div>
        </div>
        <h3 class="text-xl font-bold text-gray-900 mb-2">Lorem Ipsum dolor sit amet</h3>
        <span class="inline-block bg-[#00C7EC] text-white text-sm font-medium px-2 py-1 rounded mb-4">
          💬 Lorem Ipsum dolor sit amet
        </span>
        <ul class="space-y-2 text-sm text-gray-700">
          <li>✓ Lorem Ipsum dolor sit amet</li>
          <li>✓ Lorem Ipsum dolor sit amet</li>
          <li>✓ Lorem Ipsum dolor sit amet</li>
        </ul>
      </div>
      <div class="mt-6">
        <div class="flex gap-2">
          <button class="bg-[#00C7EC] text-white px-4 py-2 rounded-lg font-semibold">Full Program</button>
          <button class="bg-white border text-[#00C7EC] px-4 py-2 rounded-lg font-semibold">Konsultasi</button>
        </div>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="bg-white shadow-lg rounded-xl p-6 flex flex-col justify-between">
      <div>
        <div class="flex items-center mb-4">
          <div class=" p-2 rounded-md">
            <img src="" alt="learning" />
          </div>
        </div>
        <h3 class="text-xl font-bold text-gray-900 mb-2">Lorem Ipsum dolor sit amet</h3>
        <span class="inline-block bg-[#00C7EC] text-white text-sm font-medium px-2 py-1 rounded mb-4">
          💬 Lorem Ipsum dolor sit amet
        </span>
        <ul class="space-y-2 text-sm text-gray-700">
          <li>✓ Lorem Ipsum dolor sit amet</li>
          <li>✓ Lorem Ipsum dolor sit amet</li>
          <li>✓ Lorem Ipsum dolor sit amet</li>
        </ul>
      </div>
      <div class="mt-6">
        <div class="flex gap-2">
          <button class="bg-[#00C7EC] text-white px-4 py-2 rounded-lg font-semibold">Full Program</button>
          <button class="bg-white border text-[#00C7EC] px-4 py-2 rounded-lg font-semibold">Konsultasi</button>
        </div>
      </div>
    </div>

  </div>
</section>






@endsection