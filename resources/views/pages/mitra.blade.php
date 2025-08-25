@extends('layout.app')

@section('title', 'Akualita Academy - Mitra')

@section('content')

<!-- Bagian 1 Beranda Mitra -->
<section class="w-full h-[400px] px-20 bg-gradient-to-br from-[#05E089] to-[#00ACF8] flex items-center justify-between">
    <div class="grid grid-cols-2 max-w-full">
        <div class="flex flex-col justify-center ml-20">
            <h1 class="text-5xl font-bold text-white mb-3">Mitra Akualita Academy</h1>
            <p class="text-lg text-white mb-2">Mulai perjalananmu bersama Akualita Academy Affiliate!
            Buka peluang baru untuk tumbuh bersama kami tanpa batas hanya dari rumah.</p>
            <p class="text-lg text-white mb-2">Yuk, jadi #AkualitaAcademyAffiliator sekarang!</p>
            <div class="mt-8">
                <a href="#" class="bg-white text-[#05E089] px-4 py-3 rounded-3xl font-semibold">Daftar Disini</a>
            </div>
        </div>
        <div class="flex justify-end mr-20">
            <img src="{{ asset('storage/main/BA.png') }}" alt="Mitra Image" class="w-[300px] h-[400px] object-cover self-end">
        </div>
    </div>
</section>

<!-- Bagian 2 Benefit Mitra -->
<section class="w-full h-[500px]">
    <div class="text-center justify-center">
        <p class="text-gray-700 font-bold text-4xl mt-16 mb-14">Keuntungan Menjadi Mitra Akualita Academy</p>
            <div class="grid md:grid-cols-4 gap-4 text-[#1F2756] mt-10 mr-10 ml-10">
                <div class=" p-6 rounded-xl transition duration-300 flex flex-col items-left text-left bg-[#F4FCFF] shadow-sm hover:-translate-y-1 border-b-4 border-[#00ACF8]">
                    <div class="bg-gradient-to-br from-[#05E089] to-[#00ACF8] w-16 h-16 rounded-xl flex items-center justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-9 h-9">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z" />
                    </svg>
                    </div>
                    <h3 class="font-bold text-2xl mb-2">Komisi Hingga Puluhan Juta*</h3>
                    <p class="text-gray-600 text-lg leading-relaxed mb-2">
                    Nikmati peluang komisi dari setiap pendaftaran training & sertifikasi, bisa mencapai puluhan juta.*
                    </p>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        *Besaran komisi bervariasi sesuai jenis program.
                    </p>
                </div>

                <div class="p-6 rounded-xl transition duration-300 flex flex-col items-left text-left bg-[#F4FCFF] shadow-sm hover:-translate-y-1 border-b-4 border-[#00ACF8]">
                    <div class="bg-gradient-to-br from-[#05E089] to-[#00ACF8] w-16 h-16 rounded-xl flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-9 h-9">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-2xl mb-2">Didampingi Tim Akualita Academy</h3>
                    <p class="text-gray-600 text-lg leading-relaxed">
                    Akses materi promosi & panduan langsung dari tim Akualita Academy untuk membantu strategi pemasaranmu.
                    </p>
                </div>

                <div class="p-6 rounded-xl transition duration-300 flex flex-col items-left text-left bg-[#F4FCFF] shadow-sm hover:-translate-y-1 border-b-4 border-[#00ACF8]">
                    <div class="bg-gradient-to-br from-[#05E089] to-[#00ACF8] w-16 h-16 rounded-xl flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-9 h-9">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m3.75 13.5 10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-2xl mb-2">Komisi Cepat & Mudah</h3>
                    <p class="text-gray-600 text-lg leading-relaxed">
                    Cukup chat kami untuk link referral. Kamu bisa ajak teman atau perusahaan mendaftar training Akualita, dan komisi langsung masuk tanpa ribet.
                    </p>
                </div>

                <div class="p-6 rounded-xl transition duration-300 flex flex-col items-left text-left bg-[#F4FCFF] shadow-sm hover:-translate-y-1 border-b-4 border-[#00ACF8]">
                    <div class="bg-gradient-to-br from-[#05E089] to-[#00ACF8] w-16 h-16 rounded-xl flex items-center justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-9 h-9">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 14.25v2.25m3-4.5v4.5m3-6.75v6.75m3-9v9M6 20.25h12A2.25 2.25 0 0 0 20.25 18V6A2.25 2.25 0 0 0 18 3.75H6A2.25 2.25 0 0 0 3.75 6v12A2.25 2.25 0 0 0 6 20.25Z" />
                    </svg>
                    </div>
                    <h3 class="font-bold text-2xl mb-2">Laporan Komisi Transparan</h3>
                    <p class="text-gray-600 text-lg leading-relaxed">
                    Pantau perkembangan referral dan hasil komisi kamu lewat laporan yang jelas & real-time.
                    </p>
                </div>
            </div>
    </div>
</section>

<!-- Bagian 3 Cara Bergabung -->
<section class="px-10 mb-6">
    <div class="bg-gray-800 w-full h-auto rounded-xl flex items-center">
        <div class="ml-6 mt-4 mr-4">
            <img src="{{ asset('storage/main/BA3.png') }}" alt="Mitra Image" class="w-[100px]">
        </div>
        <div class=" text-white">
            <p class="text-2xl font-semibold">🚀 Mulai langkahmu sekarang bersama Akualita Academy Affiliate!</p>
            <p class="text-lg">Klik link pendaftaran & buka peluangmu tanpa batas.</p>
        </div>
        <div class="ml-auto mr-10">
            <a href="#" class="bg-[#00ACF8] text-white px-4 py-3 rounded-lg font-semibold hover:bg-[#008FCC] transition text-lg">
                Daftar Sekarang
            </a>
        </div>
    </div>
</section>

<!-- Bagian 4 Skema Komisi -->
<section class="w-full h-[350px] bg-gray-800">
    <div class="grid grid-cols-2">
        <div class="px-20 mt-10">
            <h1 class="text-white font-bold text-3xl mb-6">Skema Komisi</h1>
            <div class="mb-4">
                <div class="overflow-hidden rounded-lg border-2 border-white">
                    <table class="table-auto border-collapse w-full text-white text-center rounded-lg overflow-hidden shadow-lg">
                        <thead>
                            <tr>
                                <th class="border px-2 py-3 bg-[#0284C7]">Total Nilai Penjualan</th>
                                <th class="border px-2 py-3 bg-[#0284C7]">Komisi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-[#1E293B]">
                                <td class="border border-gray-600 px-2 py-2"><= 5000000</td>
                                <td class="border border-gray-600 px-4 py-2">5%</td>
                            </tr>
                            <tr class="bg-[#273549]">
                                <td class="border border-gray-600 px-2 py-2">Rp. 5000000 - 25000000</td>
                                <td class="border border-gray-600 px-4 py-2">6%</td>
                            </tr>
                            <tr class="bg-[#1E293B]">
                                <td class="border border-gray-600 px-2 py-2">Rp. 25000001 - 100000000</td>
                                <td class="border border-gray-600 px-4 py-2">8%</td>
                            </tr>
                            <tr class="bg-[#273549]">
                                <td class="border border-gray-600 px-2 py-2">>100000000</td>
                                <td class="border border-gray-600 px-4 py-2">10%</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="flex items-center justify-center">
            <img src="{{ asset('storage/main/graf.png') }}" alt="" class="w-[270px] h-[350px] object-contain">
        </div>
    </div>
</section>

<!-- Bagian 5 Cara Daftar -->
<section class="w-full py-16 bg-gray-100">
    <div class="text-center mb-10">
        <h1 class="text-3xl font-bold text-gray-800">3 Langkah Mudah Jadi Akualita Academy Affiliate</h1>
    </div>
    <div class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 px-6">
        <!-- Kartu 1 -->
        <div class="bg-white rounded-xl overflow-hidden border border-gray-200 flex flex-col items-center text-center">
            <div class="relative w-full">
                <img src="" alt="Daftar" class="w-full h-44 sm:h-48 object-cover" loading="lazy">
            </div>
            <div class="px-6 py-4">
                <h3 class="font-bold text-lg text-gray-900 mb-2">Daftar</h3>
                <p class="text-gray-600 text-sm">Bergabung sebagai Affiliate Akualita Academy—gratis & cepat.</p>
            </div>
        </div>

        <!-- Kartu 2 -->
        <div class="bg-white rounded-xl overflow-hidden border border-gray-200 flex flex-col items-center text-center">
            <div class="relative w-full">
                <img src="" alt="Bagikan Link" class="w-full h-44 sm:h-48 object-cover" loading="lazy">
            </div>
            <div class="px-6 py-4">
                <h3 class="font-bold text-lg text-gray-900 mb-2">Bagikan Link</h3>
                <p class="text-gray-600 text-sm">Sebarkan harga referral ke jaringanmu (individu/perusahaan) untuk program training & sertifikasi.</p>
            </div>
        </div>

        <!-- Kartu 3 -->
        <div class="bg-white rounded-xl overflow-hidden border border-gray-200 flex flex-col items-center text-center">
            <div class="relative w-full">
                <img src="" alt="Dapatkan Komisi" class="w-full h-44 sm:h-48 object-cover" loading="lazy">
            </div>
            <div class="px-6 py-4">
                <h3 class="font-bold text-lg text-gray-900 mb-2">Dapatkan Komisi</h3>
                <p class="text-gray-600 text-sm">Terima komisi untuk setiap pendaftaran dan pembayaran yang terjadi.</p>
            </div>
        </div>
    </div>
</section>
@endsection

