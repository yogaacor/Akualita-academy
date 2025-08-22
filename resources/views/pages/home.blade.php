@extends('layout.app')

@section('title', 'Akualita Academy - Beranda')

@section('content')

<!-- Bagian 1 halaman utama -->
<section class="w-full min-h-screen text-white md:pt-0 pb-10 px-3 md:px-16" style="background-image: url('{{ asset('storage/Bg/ww.jpg') }}'); background-size: cover; background-position: center;">
  <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center max-w-7xl mx-auto w-full">
    <div class="space-y-4 ml-4 mt-6">
      <h2 class="text-4xl sm:text-4xl md:text-6xl lg:text-6xl font-bold text-[#1F2756]">
        Bangun <span class="text-[#1F2756]">karirmu</span>,<br>
        bersama <span class="text-[#1F2756]">kami</span><br>
        <span class="bg-[#00ACF8] text-[#FFFFFF] inline-block px-3 py-1 rounded mt-1">mulai sekarang</span>
      </h2>
      <p class="text-base sm:text-lg md:text-xl text-gray-900 max-w-xl">
        Kami bantu kamu tingkatkan keterampilan, raih sertifikasi resmi, dan siap hadapi dunia kerja dengan lebih percaya diri!
      </p>

      <div class="mt-4">
        <a href="#" class="inline-flex items-center bg-[#00ACF8] text-white font-semibold px-4 md:m py-3 md:py-3 rounded-lg shadow-md hover:bg-cyan-300 transition duration-300 text-base md:text-xl">
          <img src="https://img.icons8.com/ios-filled/20/ffffff/whatsapp.png" class="mr-2" alt="wa" />
          Coba Konsultasi
        </a>
      </div>
    </div>
    <div class="relative w-full h-full flex justify-center md:justify-end items-start mt-[-2rem] md:mt-[4rem]">
      <img src="{{ asset('storage/Bg/bg-utama1.png') }}"
           alt="Galeri foto kegiatan pelatihan di Akualita Academy"
           class="w-full sm:w-[500px] md:w-[700px] h-auto object-cover object-right rounded-md" />
    </div>
  </div>
</section>


<!-- Bagian 2 halaman utama -->
<section class="pt-0 md:pt-6 pb-20 bg-white">
  <div class="max-w-7xl mx-auto px-6">
    <h2 class="text-3xl md:text-4xl font-bold text-center mb-6 text-[#1F2756] leading-snug hidden md:block">
      Pilih Program Terbaik untuk Memulai Perjalanan <br class="hidden md:block">Belajarmu di Akualita Academy
    </h2>
    <h2 class="text-3xl md:text-4xl font-bold text-center mb-6 text-[#1F2756] block md:hidden">
      Pilih Program Terbaik di Akualita Academy
    </h2>
    <br>
    <div class="grid md:grid-cols-3 gap-10 text-[#1F2756] bg-white ">
      <div class="border-2 border-gray-200 p-6 rounded-xl transition duration-300 flex flex-col items-center text-center hover:bg-[#E6F8FE] hover:shadow-lg hover:-translate-y-1 hover:border-b-4 hover:border-[#00ACF8]">
        <div class="bg-gradient-to-br from-[#05E089] to-[#00ACF8] w-16 h-16 rounded-xl flex items-center justify-center mb-4">
          <img src="{{ asset('storage/svg/certi12.svg') }}" alt="Icon Buku" class="w-10 h-10">
        </div>
        <h3 class="font-bold text-2xl mb-2">Pelatihan Sertifikasi</h3>
        <p class="text-gray-600 md:text-lg text-lg leading-relaxed">
          Tingkatkan kompetensi melalui pelatihan sertifikasi resmi dengan materi dari instruktur berpengalaman, siap menghadapi tantangan kerja.
        </p>
        <div class="mt-6">
        <a href="" class="inline-flex items-center bg-[#00ACF8] text-white font-semibold px-3 py-2 rounded-lg shadow-md hover:bg-cyan-300 transition duration-300 text-base md:text-lg">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 mr-2">
            <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm4.28 10.28a.75.75 0 0 0 0-1.06l-3-3a.75.75 0 1 0-1.06 1.06l1.72 1.72H8.25a.75.75 0 0 0 0 1.5h5.69l-1.72 1.72a.75.75 0 1 0 1.06 1.06l3-3Z" clip-rule="evenodd" />
          </svg>
          Selengkapnya
        </a>
      </div>
      </div>

      <div class="border-2 border-gray-200 p-6 rounded-xl transition duration-300 flex flex-col items-center text-center hover:bg-[#E6F8FE] hover:shadow-lg hover:-translate-y-1 hover:border-b-4 hover:border-[#00ACF8]">
        <div class="bg-gradient-to-br from-[#05E089] to-[#00ACF8] w-16 h-16 rounded-xl flex items-center justify-center mb-4">
          <img src="{{ asset('storage/svg/noncerti12.svg') }}" alt="Icon Buku" class="w-12 h-12">
        </div>
        <h3 class="font-bold text-2xl mb-2">Pelatihan Non-Sertifikasi</h3>
        <p class="text-gray-600 text-lg leading-relaxed">
          Pelatihan praktis untuk menambah pengetahuan dan keterampilan tanpa persyaratan ujian sertifikasi, fleksibel sesuai kebutuhan.
        </p>
        <div class="mt-6">
        <a href="" class="inline-flex items-center bg-[#00ACF8] text-white font-semibold px-3 py-2 rounded-lg shadow-md hover:bg-cyan-300 transition duration-300 text-base md:text-lg">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 mr-2">
            <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm4.28 10.28a.75.75 0 0 0 0-1.06l-3-3a.75.75 0 1 0-1.06 1.06l1.72 1.72H8.25a.75.75 0 0 0 0 1.5h5.69l-1.72 1.72a.75.75 0 1 0 1.06 1.06l3-3Z" clip-rule="evenodd" />
          </svg>
          Selengkapnya
        </a>
      </div>
      </div>

      <div class="border-2 border-gray-200 p-6 rounded-xl transition duration-300 flex flex-col items-center text-center hover:bg-[#E6F8FE] hover:shadow-lg hover:-translate-y-1 hover:border-b-4 hover:border-[#00ACF8]">
        <div class="bg-gradient-to-br from-[#05E089] to-[#00ACF8] w-16 h-16 rounded-xl flex items-center justify-center mb-4">
          <img src="{{ asset('storage/svg/boot12.svg') }}" alt="Icon Buku" class="w-8 h-8">
        </div>
        <h3 class="font-bold text-2xl mb-2">Bootcamp</h3>
        <p class="text-gray-600 text-lg leading-relaxed">
          Program intensif dengan pembelajaran terstruktur dan praktik langsung, dirancang untuk menguasai keterampilan dalam waktu singkat.
        </p>
        <div class="mt-6">
        <a href="" class="inline-flex items-center bg-[#00ACF8] text-white font-semibold px-3 py-2 rounded-lg shadow-md hover:bg-cyan-300 transition duration-300 text-base md:text-lg">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 mr-2">
            <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm4.28 10.28a.75.75 0 0 0 0-1.06l-3-3a.75.75 0 1 0-1.06 1.06l1.72 1.72H8.25a.75.75 0 0 0 0 1.5h5.69l-1.72 1.72a.75.75 0 1 0 1.06 1.06l3-3Z" clip-rule="evenodd" />
          </svg>
          Selengkapnya
        </a>
      </div>
      </div>
    </div>
  </div>
</section>


<!-- Bagian 3 halaman utama - manfaat -->
<section class="bg-[#F8FCFE] py-16 px-6 md:px-20">
  <div class="flex items-center justify-center px-4">
    <h2 class="text-center max-w-4xl text-3xl md:text-4xl font-bold text-[#1F2756] mb-3">
      Berbagai Manfaat yang Akan Kamu Dapatkan Saat Mendaftar di 
      <span class="bg-[#00ACF8] text-white inline-block px-3 py-1 rounded mt-1 text-2xl md:text-4xl">Akualita Academy</span>
    </h2>
  </div>

  <div class="flex items-center justify-center mb-6">
    <p class="text-lg md:text-xl text-[#5E6574] mb-10 hidden md:block">
      Bersama Akualita Academy, tingkatkan kompetensi, raih sertifikasi, dan siap hadapi dunia kerja!
    </p>
  </div>

  <div class="max-w-9xl mx-auto grid md:grid-cols-[0.5fr_0.8fr] gap-10 items-center">
    <div id="card-container" class="space-y-4">

        <!-- Item 1 -->
        <div class="flex items-start gap-4 border border-gray-300 p-3 rounded-xl transition-all duration-300 group hover:bg-[#00ACF8] hover:border-white hover:shadow-md max-w-xl">
          <div class="text-[#00ACF8] text-3xl group-hover:text-white">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 00-1.414 0L8 12.586 4.707 9.293a1 1 0 10-1.414 1.414l4 4a1 1 0 001.414 0l8-8a1 1 0 000-1.414z" clip-rule="evenodd"/>
            </svg>
          </div>
          <div>
            <h3 class="font-bold text-xl mb-1 text-[#1F2756] group-hover:text-white">Akses Mudah dan Terjangkau untuk Individu</h3>
            <p class="text-[#5E6574] leading-relaxed group-hover:text-white">Program pelatihan dan sertifikasi dirancang khusus untuk perorangan, tanpa harus melalui jalur perusahaan.</p>
          </div>
        </div>

        <!-- Item 2 -->
        <div class="flex items-start gap-4 border border-gray-300 p-3 rounded-xl transition-all duration-300 group hover:bg-[#00ACF8] hover:shadow-md max-w-xl">
          <div class="text-[#00ACF8] text-3xl group-hover:text-white">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 00-1.414 0L8 12.586 4.707 9.293a1 1 0 10-1.414 1.414l4 4a1 1 0 001.414 0l8-8a1 1 0 000-1.414z" clip-rule="evenodd"/>
            </svg>
          </div>
          <div>
            <h3 class="font-bold text-xl mb-1 text-[#1F2756] group-hover:text-white">Sertifikasi Resmi dan Diakui Industri</h3>
            <p class="text-[#5E6574] leading-relaxed group-hover:text-white">Peserta akan mendapatkan sertifikasi BNSP dan Kemnaker yang diakui secara nasional serta dibutuhkan di berbagai sektor industri.</p>
          </div>
        </div>

        <!-- Item 3 -->
        <div class="flex items-start gap-4 border border-gray-300 p-3 rounded-xl transition-all duration-300 group hover:bg-[#00ACF8] hover:shadow-md max-w-xl">
          <div class="text-[#00ACF8] text-3xl group-hover:text-white">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 00-1.414 0L8 12.586 4.707 9.293a1 1 0 10-1.414 1.414l4 4a1 1 0 001.414 0l8-8a1 1 0 000-1.414z" clip-rule="evenodd"/>
            </svg>
          </div>
          <div>
            <h3 class="font-bold text-xl mb-1 text-[#1F2756] group-hover:text-white">Siap Bersaing di Dunia Kerja</h3>
            <p class="text-[#5E6574] leading-relaxed group-hover:text-white">Meningkatkan kompetensi dan kepercayaan diri untuk menghadapi persaingan di dunia kerja, khususnya bagi mahasiswa dan lulusan baru.</p>
          </div>
        </div>

        <!-- Item 4 -->
        <div class="flex items-start gap-4 border border-gray-300 p-3 rounded-xl transition-all duration-300 group hover:bg-[#00ACF8] hover:shadow-md max-w-xl">
          <div class="text-[#00ACF8] text-3xl group-hover:text-white">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 00-1.414 0L8 12.586 4.707 9.293a1 1 0 10-1.414 1.414l4 4a1 1 0 001.414 0l8-8a1 1 0 000-1.414z" clip-rule="evenodd"/>
            </svg>
          </div>
          <div>
            <h3 class="font-bold text-xl mb-1 text-[#1F2756] group-hover:text-white">Materi Praktis dan Relevan</h3>
            <p class="text-[#5E6574] leading-relaxed group-hover:text-white">Program fokus pada kebutuhan industri dengan materi yang aplikatif dan sesuai standar.</p>
          </div>
        </div>

        <!-- Item 5 -->
        <div class="flex items-start gap-4 border border-gray-300 p-3 rounded-xl transition-all duration-300 group hover:bg-[#00ACF8] hover:shadow-md max-w-xl">
          <div class="text-[#00ACF8] text-3xl group-hover:text-white">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 00-1.414 0L8 12.586 4.707 9.293a1 1 0 10-1.414 1.414l4 4a1 1 0 001.414 0l8-8a1 1 0 000-1.414z" clip-rule="evenodd"/>
            </svg>
          </div>
          <div>
            <h3 class="font-bold text-xl mb-1 text-[#1F2756] group-hover:text-white">Pilihan Belajar Online dan Offline</h3>
            <p class="text-[#5E6574] leading-relaxed group-hover:text-white">Fleksibel sesuai kebutuhan peserta, tersedia kelas tatap muka dan kelas online interaktif.</p>
          </div>
        </div>

        <!-- Item 6 -->
        <div class="flex items-start gap-4 border border-gray-300 p-3 rounded-xl transition-all duration-300 group hover:bg-[#00ACF8] hover:shadow-md max-w-xl">
          <div class="text-[#00ACF8] text-3xl group-hover:text-white">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 00-1.414 0L8 12.586 4.707 9.293a1 1 0 10-1.414 1.414l4 4a1 1 0 001.414 0l8-8a1 1 0 000-1.414z" clip-rule="evenodd"/>
            </svg>
          </div>
          <div>
            <h3 class="font-bold text-xl mb-1 text-[#1F2756] group-hover:text-white">Belajar dari Praktisi Berpengalaman</h3>
            <p class="text-[#5E6574] leading-relaxed group-hover:text-white">Program dipandu oleh instruktur profesional yang memahami kebutuhan dunia kerja dan industri.</p>
          </div>
        </div>
    </div>
    <div class="flex justify-start">
      <img src="{{ asset('storage/bg/bggg2.png') }}" alt="Pelatihan Akualita Academy" class="rounded-xl shadow-md w-full md:w-[95%] ">
    </div>
  </div>
</section>

<!-- Bagian 4 halaman utama - kontak -->
<section class="bg-white py-20 px-6 md:px-16">
  <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-12 items-start">
    <div>
      <h2 class="text-3xl md:text-4xl font-bold mb-6 text-[#1F2756]">
        Hubungi kami melalui email untuk pertanyaan seputar produk kami
      </h2>
      <form action="https://formsubmit.co/akualita.akademi@gmail.com" method="POST"     class="space-y-5">
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Email Kamu</label>
            <input 
              type="email" 
              name="email"
              placeholder="Masukkan email aktif kamu" 
              class="w-full border border-gray-300 rounded-xl px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-[#00ACF8]" 
              required
            >
          </div>
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Subjek Email</label>
            <input 
              type="text" 
              name="subject" 
              placeholder="Masukkan subjek email ini" 
              class="w-full border border-gray-300 rounded-xl px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-[#00ACF8]" 
              required
            >
          </div>
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Isi Pesan</label>
            <textarea 
              rows="5" 
              name="message" 
              placeholder="Masukkan pertanyaan kamu" 
              class="w-full border border-gray-300 rounded-xl px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-[#00ACF8]" 
              required
            ></textarea>
          </div>
          <button 
            type="submit" 
            class="w-full bg-[#00ACF8] text-white px-6 py-3 rounded-xl font-semibold flex items-center justify-center gap-2 hover:bg-[#0095d9] transition duration-200"
          >
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
            </svg>
            Kirim Email
          </button>
        </form>

    </div>

    <div class="space-y-4">
      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.470496169294!2d110.4722692!3d-6.9964396999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708ce1b39ada93%3A0x38813ea0bc529c6a!2sPT%20Adhikriya%20Kualita%20Utama%20(AKUALITA)!5e0!3m2!1sid!2sid!4v1720500000000!5m2!1sid!2sid" 
        width="100%" 
        height="400" 
        style="border:0; border-radius: 0.75rem;" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade"
      ></iframe>

      <div>
        <h3 class="text-xl font-bold text-[#1F2756] mb-1">Kantor Kami</h3>
        <p class="text-base text-gray-700">
          AKUALITA Academy Office <br>
          CV Primera Purwina Gemilang :
          Jl. Abdul Manan No.25 Semarang <br>
          Phone : 0812-2566-9188 (General Info)
        </p>
      </div>
    </div>

  </div>
</section>


@endsection