@extends('layout.app')

@section('title', 'Akualita Academy - Mitra')

@section('content')

<!-- Bagian 1 Beranda Mitra -->
<section class="w-full h-[550px] px-10 bg-gradient-to-br from-[#05E089] to-[#00ACF8] flex items-center justify-between">
    <div class="grid grid-cols-[3.5fr_1.5fr] max-w-full">
        <div class="flex flex-col justify-center ml-2">
            <h1 class="text-5xl font-bold text-white mb-3">Ayo, jadi mitra Akualita Academy!</h1>
            <p class="text-2xl font-light text-white">Mulai perjalananmu bersama Akualita Academy Affiliate!</p>
            <p class="text-2xl font-light text-white">Buka peluang baru untuk tumbuh bersama kami tanpa batas hanya dari rumah.</p>
            <p class="text-2xl font-light text-white">Yuk, jadi #AkualitaAcademyAffiliator sekarang!</p>
            <div class="mt-10">
                <a href="#" class="bg-white text-[#05E089] px-4 py-3 rounded-2xl font-semibold">Daftar Sekarang!</a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 text-white text-left mt-10">
                <!-- Box 1 -->
                <div class="flex flex-col items-left">
                    <div class="text-8xl mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-16">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Komisi Puluhan Juta</h3>
                    <p class="text-base font-light">
                        Nikmati peluang komisi dari setiap pendaftaran training & sertifikasi, 
                        komisi yang di dapat bisa mencapai puluhan juta.
                    </p>
                </div>
                <!-- Box 2 -->
                <div class="flex flex-col items-left">
                    <div class="text-6xl mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-16">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Didampingi Tim Kami</h3>
                    <p class="text-base font-light">
                        Akses materi promosi & panduan langsung dari tim Akualita Academy 
                        untuk membantumu strategi pemasaranmu.
                    </p>
                </div>
                <!-- Box 3 -->
                <div class="flex flex-col items-left">
                    <div class="text-6xl mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-16">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m3.75 13.5 10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z" />
                    </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Komisi Cepat & Mudah</h3>
                    <p class="text-base font-light">
                        Bagikan link referral-mu untuk ajak teman atau perusahaan ikut training 
                        Akualita dan nikmati komisi instan.
                    </p>
                </div>
            </div>
        </div>
        <div class="flex">
            <img src="{{ asset('storage/main/BA11.png') }}" alt="Mitra Image" class="w-full h-[550px] object-cover">
        </div>
    </div>
</section>

<!-- Bagian 2 Benefit Mitra -->
<section class="pt-0 md:pt-6 bg-white mt-20">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl md:text-4xl font-bold text-center mb-6 text-[#1F2756] leading-snug hidden md:block">
            3 Langkah Mudah Menjadi Mitra Akualita Academy
        </h2>
        <br>
        <div class="grid md:grid-cols-3 gap-10 text-[#1F2756] bg-white ">
        <div class="border-2 border-gray-200 p-6 rounded-xl transition duration-300 flex flex-col items-center text-center hover:bg-[#E6F8FE] hover:shadow-lg hover:-translate-y-1 hover:border-b-4 hover:border-[#00ACF8]">
            <div class=" w-32 h-32 rounded-xl flex items-center justify-center mb-4">
                <img src="{{ asset('storage/svg/daft.png') }}" alt="Icon Buku" class="w-28 h-28">
            </div>
            <h3 class="font-bold text-2xl mb-2">Step 1: Daftar</h3>
            <p class="text-gray-600 md:text-lg text-lg leading-relaxed">
                Bergabung sebagai Affiliate Akualita Academy—gratis & cepat.
            </p>
        </div>

            <div class="border-2 border-gray-200 p-6 rounded-xl transition duration-300 flex flex-col items-center text-center hover:bg-[#E6F8FE] hover:shadow-lg hover:-translate-y-1 hover:border-b-4 hover:border-[#00ACF8]">
                <div class=" w-32 h-32 rounded-xl flex items-center justify-center mb-4">
                    <img src="{{ asset('storage/svg/shr.png') }}" alt="Icon Buku" class="w-28 h-28">
                </div>
                <h3 class="font-bold text-2xl mb-2">Step 2: Bagikan Link</h3>
                <p class="text-gray-600 text-lg leading-relaxed">
                    Sebarkan harga referral ke jaringanmu untuk program training & sertifikasi.
                </p>
            </div>

            <div class="border-2 border-gray-200 p-6 rounded-xl transition duration-300 flex flex-col items-center text-center hover:bg-[#E6F8FE] hover:shadow-lg hover:-translate-y-1 hover:border-b-4 hover:border-[#00ACF8]">
                <div class=" w-32 h-32 rounded-xl flex items-center justify-center mb-4">
                    <img src="{{ asset('storage/svg/mony.png') }}" alt="Icon Buku" class="w-28 h-28">
                </div>
                <h3 class="font-bold text-2xl mb-2">Step 3: Dapatkan Komisi</h3>
                <p class="text-gray-600 text-lg leading-relaxed">
                    Terima komisi untuk setiap pendaftaran dan pembayaran yang terjadi.
                </p>
            </div>
        </div>
    </div>
</section>

<div class=" gap-8 items-center py-20">
  <!-- Title -->
  <div class="flex flex-col justify-center">
    <h2 class="text-4xl font-bold text-gray-800 mb-10 text-center">Skema Komisi Mitra Akualita Academy</h2>
      <!-- Table -->
        <div class="flex justify-center">
            <div class="overflow-hidden rounded-xl shadow-lg border border-gray-200 w-full max-w-3xl">
            <table class="table-auto w-full text-gray-700 text-center text-lg">
                <thead>
                <tr class="bg-gradient-to-r from-[#00ACF8] to-[#05E089]">
                    <th class="px-6 py-4 text-white text-xl font-semibold">Total Penjualan</th>
                    <th class="px-6 py-4 text-white text-xl font-semibold">Komisi</th>
                </tr>
                </thead>
                <tbody>
                <tr class="bg-white hover:bg-gray-50 transition">
                    <td class="border px-6 py-4">≤ Rp 5.000.000</td>
                    <td class="border px-6 py-4 font-semibold">5%</td>
                </tr>
                <tr class="bg-gray-50 hover:bg-gray-100 transition">
                    <td class="border px-6 py-4">Rp 5.000.001 - Rp 25.000.000</td>
                    <td class="border px-6 py-4 font-semibold">6%</td>
                </tr>
                <tr class="bg-white hover:bg-gray-50 transition">
                    <td class="border px-6 py-4">Rp 25.000.001 - Rp 100.000.000</td>
                    <td class="border px-6 py-4 font-semibold">8%</td>
                </tr>
                <tr class="bg-gray-50 hover:bg-gray-100 transition">
                    <td class="border px-6 py-4">> Rp 100.000.000</td>
                    <td class="border px-6 py-4 font-semibold ">10%</td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>
  </div>
</div>

<!-- Bagian 3 CTA Mitra -->
<section class="w-full bg-gradient-to-br from-[#05E089] to-[#00ACF8]  flex items-center">
    <div class="grid grid-cols-1 md:grid-cols-[1fr_4fr] max-w-7xl mx-auto px-8 gap-8 items-center">
        <!-- Gambar -->
        <div class="flex justify-center pr-8">
            <img src="{{ asset('storage/main/BA2.png') }}" alt="CTA Mitra" 
                 class="h-full object-contain">
        </div>
        <!-- Konten Kanan -->
        <div class="flex flex-col space-y-6 text-left md:text-left">
            <h2 class="text-2xl md:text-3xl font-bold text-white leading-relaxed">
                Mulai langkahmu sekarang bersama Akualita Academy Affiliate!
            </h2>
            <p class="text-white text-lg leading-relaxed mr-20">
                Bergabunglah dengan Akualita Academy Affiliate dan jadilah bagian dari komunitas penuh peluang! 
                Dapatkan penghasilan tambahan yang fleksibel dan berkelanjutan sambil berbagi informasi bermanfaat. 
            </p>
            <div>
                <a href="#" class="bg-white text-[#05E089] font-semibold px-6 py-3 rounded-2xl shadow hover:bg-gray-100 transition">
                    Daftar Sekarang!
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Bagian 4 FAQ -->
<section class="w-full bg-white py-16">
    <div class="max-w-5xl mx-auto px-6">
        <h1 class="text-gray-900 font-bold text-4xl text-center mb-3">Frequently Asked Questions (FAQ)</h1>
        <p class="text-center text-gray-500 mb-10">Temukan jawaban dari pertanyaan yang paling sering diajukan mengenai Akualita Academy Affiliate.</p>

        <div class="space-y-4">
            <!-- Question 1 -->
            <div x-data="{ open: false }" class="border border-gray-200 rounded-xl shadow-sm overflow-hidden">
                <button @click="open = !open" class="w-full text-left px-6 py-4 flex justify-between items-center hover:bg-gray-50 transition">
                    <span class="text-lg font-semibold text-gray-800">Apa itu Akualita Academy Affiliate?</span>
                    <svg :class="{'rotate-180': open}" class="h-6 w-6 text-gray-600 transform transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="open" x-collapse class="px-6 pb-6 text-gray-600 leading-relaxed">
                    Program kemitraan referral untuk memasarkan program Akualita dan memperoleh komisi dari pendaftaran yang berhasil.
                </div>
            </div>

            <!-- Question 2 -->
            <div x-data="{ open: false }" class="border border-gray-200 rounded-xl shadow-sm overflow-hidden">
                <button @click="open = !open" class="w-full text-left px-6 py-4 flex justify-between items-center hover:bg-gray-50 transition">
                    <span class="text-lg font-semibold text-gray-800">Apa keuntungan untuk Affiliate?</span>
                    <svg :class="{'rotate-180': open}" class="h-6 w-6 text-gray-600 transform transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="open" x-collapse class="px-6 pb-6 text-gray-600 leading-relaxed">
                    Komisi per pendaftaran, materi promosi, bimbingan tim Akualita, dan laporan transparan.
                </div>
            </div>

            <!-- Question 3 -->
            <div x-data="{ open: false }" class="border border-gray-200 rounded-xl shadow-sm overflow-hidden">
                <button @click="open = !open" class="w-full text-left px-6 py-4 flex justify-between items-center hover:bg-gray-50 transition">
                    <span class="text-lg font-semibold text-gray-800">Bagaimana cara mengetahui form referral?</span>
                    <svg :class="{'rotate-180': open}" class="h-6 w-6 text-gray-600 transform transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="open" x-collapse class="px-6 pb-6 text-gray-600 leading-relaxed">
                    Tenang, form referral akan langsung kamu dapatkan dari Admin Akualita Academy setelah proses pendaftaran selesai.
                </div>
            </div>

            <!-- Question 4 -->
            <div x-data="{ open: false }" class="border border-gray-200 rounded-xl shadow-sm overflow-hidden">
                <button @click="open = !open" class="w-full text-left px-6 py-4 flex justify-between items-center hover:bg-gray-50 transition">
                    <span class="text-lg font-semibold text-gray-800">Bisakah saya memperbarui data (rekening/KTP/NPWP)?</span>
                    <svg :class="{'rotate-180': open}" class="h-6 w-6 text-gray-600 transform transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="open" x-collapse class="px-6 pb-6 text-gray-600 leading-relaxed">
                    Bisa, melalui menghubungi tim affiliate support.
                </div>
            </div>

            <!-- Question 5 -->
            <div x-data="{ open: false }" class="border border-gray-200 rounded-xl shadow-sm overflow-hidden">
                <button @click="open = !open" class="w-full text-left px-6 py-4 flex justify-between items-center hover:bg-gray-50 transition">
                    <span class="text-lg font-semibold text-gray-800">Apakah ada potongan biaya atas komisi?</span>
                    <svg :class="{'rotate-180': open}" class="h-6 w-6 text-gray-600 transform transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="open" x-collapse class="px-6 pb-6 text-gray-600 leading-relaxed">
                    Mengikuti S&K termasuk ketentuan pajak/biaya transfer yang berlaku.
                </div>
            </div>
        </div>
    </div>
        <div class="text-center text-gray-900">
            <h2 class="text-xl font-semibold mb-2 mt-6">Tumbuh Bersama #AkualitaAffiliate.</h2>
            <p class="">Daftarkan dirimu sekarang & mulai hasilkan komisi dari referral.</p>
            <p class="">Butuh bantuan? Email affiliate@akualita-academy.com.</p>
        </div>
</section>


@endsection

