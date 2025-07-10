<nav class="sticky top-0 z-50 flex items-center justify-between px-20 py-4 bg-white shadow-sm">
  <!-- Kiri: Logo -->
  <div class="flex items-center space-x-3 ml-20">
    <img src="{{ asset('storage/logo/logo2.png') }}" alt="Akualita Academy Logo" class="h-10 w-auto">
  </div>

  <!-- Tengah: Menu -->
  <ul class="hidden md:flex items-center space-x-12 text-sm text-gray-900 mr-20 relative">
    
  <!-- Program dengan Megamenu di Tengah -->
  <li class="group relative cursor-pointer">
    <span class="text-base hover:text-[#00ACF8] transition duration-300">Program</span>

    <!-- Megamenu -->
    <div class="absolute left-1/2 top-full hidden group-hover:block -translate-x-1/2 w-[1000px] bg-white shadow-xl z-50 transition duration-600 rounded-xl ml-28">
      <div class="px-12 py-10 grid grid-cols-2 gap-10 text-gray-700 text-base">

        <!-- Pelatihan Sertifikasi -->
        <div class="flex items-start space-x-3 hover:bg-blue-300 p-4">
          <div>
            <div class="bg-gradient-to-br from-[#05E089] to-[#00ACF8] w-16 h-16 rounded-xl flex items-center justify-center mb-2 ">
              <img src="{{ asset('storage/svg/certi12.svg') }}" alt="Icon Buku" class="w-10 h-10">
            </div>
            <h4 class="font-semibold text-lg text-gray-900 mb-1">Pelatihan Sertifikasi</h4>
            <p class="text-sm text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>

        <!-- Pelatihan Non-Sertifikasi -->
        <div class="flex items-start space-x-3">
          <div>
          <div class="bg-gradient-to-br from-[#05E089] to-[#00ACF8] w-16 h-16 rounded-xl flex items-center justify-center mb-2">
            <img src="{{ asset('storage/svg/noncerti12.svg') }}" alt="Icon Buku" class="w-12 h-12">
          </div>
            <div class="flex items-center space-x-2 mb-1">
              <h4 class="font-semibold text-lg text-gray-900">Pelatihan Non-Sertifikasi</h4>
            </div>
            <p class="text-sm text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>

        <!-- Bootcamp -->
        <div class="flex items-start space-x-3">
          <div>
          <div class="bg-gradient-to-br from-[#05E089] to-[#00ACF8] w-16 h-16 rounded-xl flex items-center justify-center mb-2">
            <img src="{{ asset('storage/svg/boot12.svg') }}" alt="Icon Buku" class="w-8 h-8">
          </div>
            <h4 class="font-semibold text-lg text-gray-900 mb-1">Bootcamp</h4>
            <p class="text-sm text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
      </div>
    </div>
  </li>



    <li class="cursor-pointer hover:text-[#00ACF8] transition duration-300">
      <span class="text-base">Tentang Akualita Academy</span>
    </li>
    <li class="cursor-pointer hover:text-[#00ACF8] transition duration-300">
      <span class="text-base">Industri</span>
    </li>
    <li class="cursor-pointer hover:text-[#00ACF8] transition duration-300">
      <span class="text-base">Komunitas</span>
    </li>

    <!-- Tombol Kursus Gratis -->
    <button class="border-2 border-[#00ACF8] text-[#00ACF8] text-base px-4 py-1.5 rounded-md hover:bg-[#00ACF8] hover:shadow-md hover:text-white transition duration-300">
      Kursus Gratis
    </button>
  </ul>
</nav>
