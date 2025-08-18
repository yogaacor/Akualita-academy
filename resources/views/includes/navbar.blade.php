<nav class="sticky top-0 z-50 flex items-center justify-between px-6 md:px-20 py-4 bg-white shadow-sm transition duration-300">
  <!-- Logo -->
  <div class="flex items-center space-x-3">
    <img src="{{ asset('storage/logo/logo2.png') }}" alt="Logo Akualita Academy" class="h-10 w-auto">
  </div>

  <!-- Hamburger Menu Button -->
  <button id="menu-toggle" class="block md:hidden focus:outline-none">
    <svg class="w-6 h-6 text-gray-900" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
    </svg>
  </button>

  <!-- Menu Items -->
  <ul id="menu" class="hidden md:flex flex-col md:flex-row items-center space-y-4 md:space-y-0 md:space-x-12 text-sm text-gray-900 absolute md:static top-16 left-0 w-full md:w-auto bg-white md:bg-transparent shadow-md md:shadow-none p-6 md:p-0 z-50">
    
    <!-- Program Desktop -->
    <li class="group relative cursor-pointer hidden md:block">
      <div class="relative group">
        <button class="flex items-center space-x-1 text-base hover:text-[#00ACF8] transition duration-300">
          <span>Program</span>
          <svg class="w-4 h-4 transition-transform duration-300 group-hover:rotate-180 mt-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
          </svg>
        </button>
      </div>

      <!-- Megamenu -->
      <div class="absolute left-1/2 top-full hidden group-hover:block -translate-x-1/2 w-[1000px] bg-white shadow-xl z-50 transition duration-600 rounded-xl ml-28">
        <div class="px-12 py-10 grid grid-cols-2 gap-10 text-gray-700 text-base">
          
          <!-- Pelatihan Sertifikasi -->
          <div class="flex items-start space-x-3 hover:bg-[#E6F8FE] p-4 transition duration-300 rounded-xl">
            <div>
              <div class="bg-gradient-to-br from-[#05E089] to-[#00ACF8] w-16 h-16 rounded-xl flex items-center justify-center mb-2">
                <img src="{{ asset('storage/svg/certi12.svg') }}" alt="Icon Buku" class="w-10 h-10">
              </div>
              <h4 class="font-semibold text-lg text-gray-900 mb-1">Pelatihan Sertifikasi</h4>
              <p class="text-base text-gray-600">
                Tingkatkan kompetensi melalui pelatihan sertifikasi resmi dengan materi dari instruktur berpengalaman, siap menghadapi tantangan kerja.
              </p>
            </div>
          </div>

          <!-- Pelatihan Non-Sertifikasi -->
          <div class="flex items-start space-x-3 hover:bg-[#E6F8FE] p-4 transition duration-300 rounded-xl">
            <div>
              <div class="bg-gradient-to-br from-[#05E089] to-[#00ACF8] w-16 h-16 rounded-xl flex items-center justify-center mb-2">
                <img src="{{ asset('storage/svg/noncerti12.svg') }}" alt="Icon Buku" class="w-12 h-12">
              </div>
              <h4 class="font-semibold text-lg text-gray-900 mb-1">Pelatihan Non-Sertifikasi</h4>
              <p class="text-base text-gray-600">
                Pelatihan praktis untuk menambah pengetahuan dan keterampilan tanpa persyaratan ujian sertifikasi, fleksibel sesuai kebutuhan.
              </p>
            </div>
          </div>

          <!-- Bootcamp -->
          <div class="flex items-start space-x-3 hover:bg-[#E6F8FE] p-4 transition duration-300 rounded-xl">
            <div>
              <div class="bg-gradient-to-br from-[#05E089] to-[#00ACF8] w-16 h-16 rounded-xl flex items-center justify-center mb-2">
                <img src="{{ asset('storage/svg/boot12.svg') }}" alt="Icon Buku" class="w-8 h-8">
              </div>
              <h4 class="font-semibold text-lg text-gray-900 mb-1">Bootcamp</h4>
              <p class="text-base text-gray-600">
                Program intensif dengan pembelajaran terstruktur dan praktik langsung, dirancang untuk menguasai keterampilan dalam waktu singkat.
              </p>
            </div>
          </div>

        </div>
      </div>
    </li>

    <!-- Program Mobile -->
    <button type="button" onclick="toggleMobileDropdown()" class="cursor-pointer flex items-center w-full hover:text-[#0c9df0] focus:outline-none text-base block md:hidden">
      Program
      <svg class="w-4 h-4 transition-transform duration-300 mt-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
      </svg>
    </button>
    <ul id="mobile-riksa-dropdown" class="hidden flex-col pl-4 mt-2 space-y-2">
      <li class="cursor-pointer hover:text-[#00ACF8] transition duration-300"><span class="text-base">Pelatihan Sertifikasi</span></li>
      <li class="cursor-pointer hover:text-[#00ACF8] transition duration-300"><span class="text-base">Pelatihan Non-Sertifikasi</span></li>
      <li class="cursor-pointer hover:text-[#00ACF8] transition duration-300"><span class="text-base">Bootcamp</span></li>
    </ul>

    <!-- Other Menu Items -->
    <li class="cursor-pointer hover:text-[#00ACF8] transition duration-300"><span class="text-base">Tentang Akualita Academy</span></li>
    <li class="cursor-pointer hover:text-[#00ACF8] transition duration-300"><span class="text-base">Industri</span></li>
    <li class="cursor-pointer hover:text-[#00ACF8] transition duration-300"><span class="text-base">Komunitas</span></li>
    <li class="cursor-pointer hover:text-[#00ACF8] transition duration-300">
      <a href="https://akualita.com/webinar-2025/" target="_blank" class="border-2 border-[#00ACF8] text-[#00ACF8] text-base px-4 py-1.5 rounded-md hover:bg-[#00ACF8] hover:shadow-md hover:text-white transition duration-300">
        Kursus Gratis
      </a>
    </li>
  </ul>
</nav>

<script>
  // Toggle main menu
  document.getElementById('menu-toggle').addEventListener('click', function () {
    document.getElementById('menu').classList.toggle('hidden');
  });

  // Toggle mobile dropdown
  function toggleMobileDropdown() {
    document.getElementById('mobile-riksa-dropdown').classList.toggle('hidden');
  }
</script>
