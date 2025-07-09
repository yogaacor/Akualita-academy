@extends('layout.app')
@section('title', 'Akualita Academy - About')
@section('content')

<!-- Bagian 1 halaman utama -->
<section class="w-full min-h-screen text-white pt-12 pb-10 px-6 md:px-16" style="background-image: url('{{ asset('storage/Bg/bg--10.png') }}'); background-size: cover; background-position: center;">
  <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center max-w-7xl mx-auto w-full">
    
    <!-- Kiri: Teks -->
    <div class="space-y-4">
      <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight text-[#1F2756]">
        Bangun <span class="text-[#1F2756]">karirmu</span>,<br>
        bersama <span class="text-[#1F2756]">kami</span><br>
        <span class="bg-[#00ACF8] text-[#FFFFFF] inline-block px-3 py-1 rounded mt-1">mulai sekarang</span>
      </h2>
      <p class="text-base md:text-lg lg:text-lg text-gray-800 max-w-xl">
        Kami bantu kamu tingkatkan keterampilan, raih sertifikasi resmi, dan siap hadapi dunia kerja dengan lebih percaya diri!
      </p>
      <div class="mt-4">
        <a href="#" class="inline-flex items-center bg-[#00ACF8] text-white font-semibold px-4 py-3 rounded-lg shadow-md hover:bg-cyan-300 transition duration-300 text-sm md:text-lg">
        <img src="https://img.icons8.com/ios-filled/20/ffffff/whatsapp.png" class="mr-2" alt="wa" />
        Coba Konsultasi
      </a>

      </div>
    </div>

    <!-- Kanan: Gambar -->
    <div class="relative w-full h-full flex justify-end items-start mt-[-2rem] md:mt-[-4rem]">
      <img src="{{ asset('storage/Bg/bg-utama1.png') }}"
           alt="Akualita Academy Foto"
           class="w-full h-auto md:h-[600px] object-cover object-right rounded-md" />
    </div>

  </div>
</section>



<!-- Bagian 2 halaman utama -->
<section class="pt-0 pb-16 bg-gradient-to-b from-white to-[#DFF3FD]">
  <div class="max-w-7xl mx-auto px-4">
    <h2 class="text-3xl md:text-4xl font-bold text-center mb-10 text-[#1F2756]">
      Pilih program terbaik untuk memulai <br> perjalanan belajarmu
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      
      <!-- CARD COMPONENT START -->
      @foreach ([
        ['title' => 'Pelatihan Sertifikasi', 'img' => 'Pelatihan sertifikasi.jpeg'],
        ['title' => 'Pelatihan Non-Sertifikasi', 'img' => 'Pelatihan sertifikasi.jpeg'],
        ['title' => 'Bootcamp', 'img' => 'Pelatihan sertifikasi.jpeg'],
      ] as $card)
      <div class="bg-white rounded-xl shadow-md border overflow-hidden flex flex-col">
        <img src="{{ asset('storage/main/' . $card['img']) }}" alt="{{ $card['title'] }}" class="w-full h-[250px] object-cover opacity-90 border-b">

        <div class="p-4 flex-1 flex flex-col">
          <h3 class="text-xl font-bold text-[#1F2756] mb-3">{{ $card['title'] }}</h3>
          <p class="text-sm text-gray-600 mb-6 leading-relaxed">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </p>
          <div class="mt-auto flex gap-2">
            <button class="bg-[#00ACF8] text-white px-4 py-2 rounded-lg text-sm font-semibold">Full Program</button>
            <button class="bg-white border border-[#00ACF8] text-[#00ACF8] px-4 py-2 rounded-lg text-sm font-semibold">Konsultasi</button>
          </div>
        </div>
      </div>
      @endforeach
      <!-- CARD COMPONENT END -->
    </div>
  </div>
</section>


<!-- Bagian 3 halaman utama - manfaat -->
<section class="bg-white py-20 px-6 md:px-16">
  <div class="max-w-7xl mx-auto text-[#1F2756]">
    <!-- Heading -->
    <h2 class="text-3xl md:text-4xl font-bold text-center mb-4">
      Manfaat Mendaftar ke Program Akualita Academy
    </h2>
    <p class="text-center text-lg text-[#1F2756]/80 mb-16 max-w-2xl mx-auto">
      Bersama Akualita Academy, siapa pun bisa meningkatkan kompetensi, mendapatkan sertifikasi resmi, dan lebih siap menghadapi dunia kerja!
    </p>

    <!-- Grid Benefit Items -->
    <div class="grid md:grid-cols-3 gap-10">
      <!-- Reusable Card Component -->
      @foreach ([
        ['title' => 'Akses Mudah dan Terjangkau untuk Individu', 'desc' => 'Program pelatihan dan sertifikasi dirancang khusus untuk perorangan, tanpa harus melalui jalur perusahaan.'],
        ['title' => 'Sertifikasi Resmi dan Diakui Industri', 'desc' => 'Peserta akan mendapatkan sertifikasi BNSP dan Kemnaker yang diakui secara nasional serta dibutuhkan di berbagai sektor industri.'],
        ['title' => 'Siap Bersaing di Dunia Kerja', 'desc' => 'Meningkatkan kompetensi dan kepercayaan diri untuk menghadapi persaingan di dunia kerja, khususnya bagi mahasiswa dan lulusan baru.'],
        ['title' => 'Materi Praktis dan Relevan', 'desc' => 'Program fokus pada kebutuhan industri dengan materi yang aplikatif dan sesuai standar.'],
        ['title' => 'Pilihan Belajar Online dan Offline', 'desc' => 'Fleksibel sesuai kebutuhan peserta, tersedia kelas tatap muka dan kelas online interaktif.'],
        ['title' => 'Belajar dari Praktisi Berpengalaman', 'desc' => 'Program dipandu oleh instruktur profesional yang memahami kebutuhan dunia kerja dan industri.'],
      ] as $index => $item)
      <div class="group bg-white p-8 border-2 border-[#00ACF8] rounded-2xl shadow-sm hover:shadow-lg transition-all hover:-translate-y-1 hover:border-[#007EC3] duration-300">
        <div class="flex items-start space-x-4 mb-4">
          <!-- Number Badge -->
          <div class="w-12 h-12 bg-gradient-to-tr from-[#00ACF8] to-[#007EC3] text-white text-lg font-bold rounded-full flex items-center justify-center shadow-md">
            {{ $index + 1 }}
          </div>
          <!-- Title -->
          <h3 class="text-lg font-semibold leading-snug group-hover:text-[#007EC3] transition-colors duration-300">
            {{ $item['title'] }}
          </h3>
        </div>
        <p class="text-gray-600 text-sm leading-relaxed">
          {{ $item['desc'] }}
        </p>
      </div>
      @endforeach
    </div>
  </div>
</section>

<!-- Bagian 4 halaman utama - kontak -->
<section class="bg-[#DFF3FD] py-20 px-6 md:px-16">
  <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-12 items-start">

    <!-- Formulir Pertanyaan -->
    <div>
      <h2 class="text-3xl md:text-4xl font-bold mb-6 leading-snug text-[#1F2756]">
        <span class="text-[#00ACF8]">Sampaikan</span> pertanyaan seputar produk Kami melalui Email
      </h2>

      <form action="#" method="POST" class="space-y-5">
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Email Kamu</label>
          <input 
            type="email" 
            placeholder="Masukkan email aktif kamu" 
            class="w-full border border-gray-300 rounded-xl px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-[#00ACF8]" 
            required
          >
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Subjek Email</label>
          <input 
            type="text" 
            placeholder="Masukkan subjek email ini" 
            class="w-full border border-gray-300 rounded-xl px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-[#00ACF8]" 
            required
          >
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Isi Pesan</label>
          <textarea 
            rows="5" 
            placeholder="Masukkan pertanyaan kamu" 
            class="w-full border border-gray-300 rounded-xl px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-[#00ACF8]" 
            required
          ></textarea>
        </div>

        <button 
          type="submit" 
          class="w-full bg-[#00ACF8] text-white px-6 py-3 rounded-xl font-semibold flex items-center justify-center gap-2 hover:bg-[#0095d9] transition duration-200"
        >
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
            <path d="M2.94 2.94a.75.75 0 011.06 0L10 8.94l5.99-6a.75.75 0 111.06 1.06l-6 5.99 6 6a.75.75 0 11-1.06 1.06l-6-6-6 6A.75.75 0 112.94 14.94l6-6-6-6a.75.75 0 010-1.06z"/>
          </svg>
          Kirim Email
        </button>

        <div class="flex items-center my-6">
          <div class="flex-grow border-t border-gray-300"></div>
          <span class="mx-4 text-gray-500 text-sm">atau</span>
          <div class="flex-grow border-t border-gray-300"></div>
        </div>

        <a 
          href="https://wa.me/6281234567890" 
          target="_blank" 
          class="w-full inline-block text-center border border-[#00ACF8] text-[#00ACF8] px-6 py-3 rounded-xl font-semibold hover:bg-[#e6f7ff] transition duration-200"
        >
          💬 Hubungi via Whatsapp
        </a>
      </form>
    </div>

    <!-- Maps dan Alamat -->
    <div class="space-y-6">
      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.470496169294!2d110.4722692!3d-6.9964396999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708ce1b39ada93%3A0x38813ea0bc529c6a!2sPT%20Adhikriya%20Kualita%20Utama%20(AKUALITA)!5e0!3m2!1sid!2sid!4v1720500000000!5m2!1sid!2sid" 
        width="100%" 
        height="280" 
        style="border:0; border-radius: 0.75rem;" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade"
      ></iframe>

      <div>
        <h3 class="text-xl font-semibold text-[#1F2756] mb-2">Kantor Kami</h3>
        <p class="text-sm text-gray-700 leading-relaxed">
          PT. Adhikriya Kualita Utama (AKUALITA)<br>
          Jl. Kemang Timur No.1 RT.14/RW.8, Pejaten Barat,<br>
          Pasar Minggu, Kota Jakarta Selatan,<br>
          Daerah Khusus Ibukota Jakarta 12510
        </p>
      </div>
    </div>

  </div>
</section>


@endsection