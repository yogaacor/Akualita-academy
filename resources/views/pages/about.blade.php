@extends('layout.app')

@section('title', 'Akualita Academy - About')

@section('content')

<!-- Bagian 1 halaman utama -->
<section class="w-full min-h-screen text-white pt-14 pb-10 px-6 md:px-16" style="background-image: url('{{ asset('storage/Bg/bg-utama-9-2.png') }}'); background-size: cover; background-position: center;">
  <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center max-w-7xl mx-auto w-full">
    
    <!-- Kiri: Teks -->
    <div class="space-y-6">
      <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight text-[#1F2756]">
        Bangun <span class="text-[#1F2756]">karirmu</span>,<br>
        bersama <span class="text-[#1F2756]">kami</span><br>
        <span class="bg-[#00ACF8] text-[#FFFFFF] inline-block px-3 py-1 rounded mt-1">mulai sekarang</span>
      </h2>
      <p class="text-base md:text-lg lg:text-lg text-gray-800 max-w-xl">
        Kami bantu kamu tingkatkan keterampilan, raih sertifikasi resmi, dan siap hadapi dunia kerja dengan lebih percaya diri!
      </p>
      <a href="#" class="inline-flex items-center bg-[#00ACF8] text-white font-semibold px-4 py-3 rounded-lg shadow-md hover:bg-cyan-300 transition duration-300 text-sm md:text-lg">
        <img src="https://img.icons8.com/ios-filled/20/ffffff/whatsapp.png" class="mr-2" alt="wa" />
        Coba Konsultasi
      </a>
    </div>

    <!-- Kanan: Gambar -->
    <div class="relative w-full h-full flex justify-end items-start">
      <img src="{{ asset('storage/main/Foto utama.png') }}"
           alt="Akualita Academy Foto"
           class="w-full h-auto md:h-[600px] object-cover object-right rounded-xl" />
    </div>

  </div>
</section>



<!-- Bagian 2 halaman utama -->
<section class=" pt-16 pb-16 bg-gradient-to-b from-white to-[#DFF3FD]">
  <div class="max-w-7xl mx-auto px-4">
    <h2 class="text-3xl md:text-4xl font-bold text-center mb-6 text-[#1F2756] pb-4">Pilih program terbaik untuk memulai <br> perjalanan belajarmu</h2>
    {{-- <p class="justify-center text-center font-medium text-lg text-[#1F2756] mb-6">Mulai perjalanan belajarmu dengan program terbaik dari kami.</p> --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      
    <div class="max-w-sm mx-auto bg-white rounded-xl shadow-md overflow-hidden border">
      <!-- Gambar dan Header -->
      <div class="relative">
        <img src="{{ asset('storage/main/Pelatihan sertifikasi.jpeg') }}" alt="Banner" class="w-full h-auto opacity-80 border-b">
      </div>

      <!-- Konten -->
      <div class="p-4">
        <h2 class="text-2xl font-bold text-gray-900 mb-2">
          Pelatihan Sertifikasi
        </h2>

        <!-- Tanggal & Waktu -->
        <p class="text-base text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>

        <!-- Tombol -->
        <div class="mt-6">
          <div class="flex gap-2">
            <button class="bg-[#00ACF8] text-white px-4 py-2 rounded-lg font-semibold">Full Program</button>
            <button class="bg-white border text-[#00ACF8] px-4 py-2 rounded-lg font-semibold">Konsultasi</button>
          </div>
        </div>
      </div>
    </div>


    <!-- Card 2 -->
    <div class="max-w-sm mx-auto bg-white rounded-xl shadow-md overflow-hidden border">
      <!-- Gambar dan Header -->
      <div class="relative">
        <img src="{{ asset('storage/main/Pelatihan sertifikasi.jpeg') }}" alt="Banner" class="w-full h-auto opacity-80 border-b">
      </div>

      <!-- Konten -->
      <div class="p-4">
        <h2 class="text-2xl font-bold text-gray-900 mb-2">
          Pelatihan Sertifikasi
        </h2>

        <!-- Tanggal & Waktu -->
        <p class="text-base text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>

        <!-- Tombol -->
        <div class="mt-6">
          <div class="flex gap-2">
            <button class="bg-[#00ACF8] text-white px-4 py-2 rounded-lg font-semibold">Full Program</button>
            <button class="bg-white border text-[#00ACF8] px-4 py-2 rounded-lg font-semibold">Konsultasi</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="max-w-sm mx-auto bg-white rounded-xl shadow-md overflow-hidden border">
      <!-- Gambar dan Header -->
      <div class="relative">
        <img src="{{ asset('storage/main/Pelatihan sertifikasi.jpeg') }}" alt="Banner" class="w-full h-auto opacity-80 border-b">
      </div>

      <!-- Konten -->
      <div class="p-4">
        <h2 class="text-2xl font-bold text-gray-900 mb-2">
          Pelatihan Sertifikasi
        </h2>

        <!-- Tanggal & Waktu -->
        <p class="text-base text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>

        <!-- Tombol -->
        <div class="mt-6">
          <div class="flex gap-2">
            <button class="bg-[#00ACF8] text-white px-4 py-2 rounded-lg font-semibold">Full Program</button>
            <button class="bg-white border text-[#00ACF8] px-4 py-2 rounded-lg font-semibold">Konsultasi</button>
          </div>
        </div>
      </div>
    </div>

    </div>
  </div>
</section>

<section class="bg-gradient-to-br from-[#DFF3FD] to-white py-20 px-6 md:px-16">
  <div class="max-w-7xl mx-auto text-[#1F2756]">
    
    <!-- Heading -->
    <h2 class="text-3xl md:text-4xl font-bold text-center mb-4">
      Manfaat Mendaftar ke Program Akualita Academy
    </h2>
    <p class="text-center text-lg text-[#1F2756]/80 mb-16 max-w-2xl mx-auto">
      Bersama Akualita Academy, siapa pun bisa meningkatkan kompetensi, mendapatkan sertifikasi resmi, dan lebih siap menghadapi dunia kerja!
    </p>

    <!-- Grid Benefit Items -->
    <div class="grid md:grid-cols-2 gap-8">
      <!-- Reusable Item Card -->
      <div class="group relative bg-white p-6 rounded-2xl shadow-md hover:shadow-xl transition transform hover:-translate-y-1">
        <div class="absolute -top-5 left-5 w-10 h-10 bg-blue-100 text-blue-600 font-bold rounded-full flex items-center justify-center shadow-sm">
          1
        </div>
        <h3 class="text-lg font-semibold mb-2 pt-4">Akses Mudah dan Terjangkau untuk Individu</h3>
        <p class="text-gray-600 text-sm">
          Program pelatihan dan sertifikasi dirancang khusus untuk perorangan, tanpa harus melalui jalur perusahaan.
        </p>
      </div>

      <div class="group relative bg-white p-6 rounded-2xl shadow-md hover:shadow-xl transition transform hover:-translate-y-1">
        <div class="absolute -top-5 left-5 w-10 h-10 bg-blue-100 text-blue-600 font-bold rounded-full flex items-center justify-center shadow-sm">
          2
        </div>
        <h3 class="text-lg font-semibold mb-2 pt-4">Sertifikasi Resmi dan Diakui Industri</h3>
        <p class="text-gray-600 text-sm">
          Peserta akan mendapatkan sertifikasi BNSP dan Kemnaker yang diakui secara nasional serta dibutuhkan di berbagai sektor industri.
        </p>
      </div>

      <div class="group relative bg-white p-6 rounded-2xl shadow-md hover:shadow-xl transition transform hover:-translate-y-1">
        <div class="absolute -top-5 left-5 w-10 h-10 bg-blue-100 text-blue-600 font-bold rounded-full flex items-center justify-center shadow-sm">
          3
        </div>
        <h3 class="text-lg font-semibold mb-2 pt-4">Siap Bersaing di Dunia Kerja</h3>
        <p class="text-gray-600 text-sm">
          Meningkatkan kompetensi dan kepercayaan diri untuk menghadapi persaingan di dunia kerja, khususnya bagi mahasiswa dan lulusan baru.
        </p>
      </div>

      <div class="group relative bg-white p-6 rounded-2xl shadow-md hover:shadow-xl transition transform hover:-translate-y-1">
        <div class="absolute -top-5 left-5 w-10 h-10 bg-blue-100 text-blue-600 font-bold rounded-full flex items-center justify-center shadow-sm">
          4
        </div>
        <h3 class="text-lg font-semibold mb-2 pt-4">Materi Praktis dan Relevan</h3>
        <p class="text-gray-600 text-sm">
          Program fokus pada kebutuhan industri dengan materi yang aplikatif dan sesuai standar.
        </p>
      </div>

      <div class="group relative bg-white p-6 rounded-2xl shadow-md hover:shadow-xl transition transform hover:-translate-y-1">
        <div class="absolute -top-5 left-5 w-10 h-10 bg-blue-100 text-blue-600 font-bold rounded-full flex items-center justify-center shadow-sm">
          5
        </div>
        <h3 class="text-lg font-semibold mb-2 pt-4">Pilihan Belajar Online dan Offline</h3>
        <p class="text-gray-600 text-sm">
          Fleksibel sesuai kebutuhan peserta, tersedia kelas tatap muka dan kelas online interaktif.
        </p>
      </div>

      <div class="group relative bg-white p-6 rounded-2xl shadow-md hover:shadow-xl transition transform hover:-translate-y-1">
        <div class="absolute -top-5 left-5 w-10 h-10 bg-blue-100 text-blue-600 font-bold rounded-full flex items-center justify-center shadow-sm">
          6
        </div>
        <h3 class="text-lg font-semibold mb-2 pt-4">Belajar dari Praktisi Berpengalaman</h3>
        <p class="text-gray-600 text-sm">
          Program dipandu oleh instruktur profesional yang memahami kebutuhan dunia kerja dan industri.
        </p>
      </div>

      <div class="group relative bg-white p-6 rounded-2xl shadow-md hover:shadow-xl transition transform hover:-translate-y-1 md:col-span-2">
        <div class="absolute -top-5 left-5 w-10 h-10 bg-blue-100 text-blue-600 font-bold rounded-full flex items-center justify-center shadow-sm">
          7
        </div>
        <h3 class="text-lg font-semibold mb-2 pt-4">Peluang Pengembangan Diri dan Jaringan</h3>
        <p class="text-gray-600 text-sm">
          Kesempatan untuk membangun relasi dan memperluas wawasan melalui workshop, webinar, dan sesi diskusi.
        </p>
      </div>
    </div>
  </div>
</section>








@endsection