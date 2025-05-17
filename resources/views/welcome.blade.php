
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-slate-100 h-screen">
    <!-- Sidebar -->
<aside class="w-64 bg-white shadow-md flex flex-col justify-between m-2 mt-3 rounded-2xl">
    <!-- Top Section -->
    <div class="">
      <!-- Logo -->
      <div class="flex items-center space-x-4 px-6 py-4">
        <img src="/img/logosimko.png" class="h-9 w-9" alt="Logo">
        <span class="font-bold text-sm">SIMKO</span>
      </div>
  
      <!-- Menu -->
      <div class="px-6 py-3 text-xs text-gray-400 uppercase ">Menu</div>
      <div class="w-[200px] border-b ml-6 border-gray-300">
      <nav class="space-y-1 pl-4">
        <!-- Map -->
        <a href="#" class="flex items-center space-x-2 text-gray-700 hover:text-blue-600 py-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M11.9999 13.4299C13.723 13.4299 15.1199 12.0331 15.1199 10.3099C15.1199 8.58681 13.723 7.18994 11.9999 7.18994C10.2768 7.18994 8.87988 8.58681 8.87988 10.3099C8.87988 12.0331 10.2768 13.4299 11.9999 13.4299Z" stroke="#3C424A" stroke-width="1.5"/>
                <path d="M3.61995 8.49C5.58995 -0.169998 18.42 -0.159997 20.38 8.5C21.53 13.58 18.37 17.88 15.6 20.54C13.59 22.48 10.41 22.48 8.38995 20.54C5.62995 17.88 2.46995 13.57 3.61995 8.49Z" stroke="#3C424A" stroke-width="1.5"/>
            </svg>
          <span>Map</span>
        </a>
  
        <!-- Pemasaran -->
        <details class="group">
            <summary class="flex items-center justify-between cursor-pointer gap-3 text-gray-700 hover:text-blue-600 py-2">
              <div class="flex items-center space-x-2">
                <!-- Ikon -->
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path d="M5.89999 17H18.09C19.99 17 20.99 16 20.99 14.1V2H2.98999V14.1C2.99999 16 3.99999 17 5.89999 17Z" stroke="#3C424A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M2 2H22" stroke="#3C424A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M8 22L12 20V17" stroke="#3C424A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M16 22L12 20" stroke="#3C424A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M7.5 11L10.65 8.37C10.9 8.16 11.23 8.22 11.4 8.5L12.6 10.5C12.77 10.78 13.1 10.83 13.35 10.63L16.5 8" stroke="#3C424A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span>Pemasaran</span>
              </div>
              <!-- Chevron -->
              <svg class="h-4 w-4 group-open:rotate-180 transition" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </summary>
          
            <!-- Sub-menu -->
            <nav id="submenu" class="pl-6 mt-1 space-y-1 relative before:absolute before:left-2 before:top-3 before:bottom-3 before:w-px before:bg-gray-300 before:content-['']">
              <a href="#" class="submenu-item flex items-center space-x-2 px-3 py-1 rounded bg-blue-100 text-blue-800 font-medium relative">
                <span class="bullet w-2 h-2 rounded-full bg-black absolute -left-4 top-1/2 -translate-y-1/2"></span>
                <span>Prospecting</span>
              </a>
              <a href="#" class="submenu-item flex items-center space-x-2 px-3 py-1 text-gray-700 relative">
                <span class="bullet w-2 h-2 rounded-full bg-gray-300 absolute -left-4 top-1/2 -translate-y-1/2"></span>
                <span>Canvassing</span>
              </a>
              <a href="#" class="submenu-item flex items-center space-x-2 px-3 py-1 text-gray-700 relative">
                <span class="bullet w-2 h-2 rounded-full bg-gray-300 absolute -left-4 top-1/2 -translate-y-1/2"></span>
                <span>Cross Selling</span>
              </a>
              <a href="#" class="submenu-item flex items-center space-x-2 px-3 py-1 text-gray-700 relative">
                <span class="bullet w-2 h-2 rounded-full bg-gray-300 absolute -left-4 top-1/2 -translate-y-1/2"></span>
                <span>Majelis Taklim</span>
              </a>
            </nav>
        </details>
        
  
        <!-- Pembiayaan -->
        <details class="group">
            <summary class="flex items-center justify-between cursor-pointer gap-3 text-gray-700 hover:text-blue-600 py-2">
              <div class="flex items-center space-x-2">
                <!-- Ikon -->
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M16.8999 16.9C19.5999 14.2 19.5999 9.7 16.8999 7" stroke="#3C424A" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M7.09995 7.1001C4.39995 9.8001 4.39995 14.3001 7.09995 17.0001" stroke="#3C424A" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M9.69995 13.6C9.69995 14.5 10.4 15.2 11.3 15.2H13C13.7 15.2 14.4 14.6 14.4 13.8C14.4 12.9 14 12.6 13.5 12.4L10.7 11.4C9.99995 11.3 9.69995 11 9.69995 10.2C9.69995 9.40005 10.3 8.80005 11.1 8.80005H12.9C13.8 8.80005 14.5 9.50005 14.5 10.4" stroke="#3C424A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 7.80005V16.2" stroke="#3C424A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#17191C" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              <span>Pembiayaan</span>
              </div>
              <!-- Chevron -->
              <svg class="h-4 w-4 group-open:rotate-180 transition" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </summary>
          
            <!-- Sub-menu -->
            <nav id="submenu" class="pl-6 mt-1 space-y-1 relative before:absolute before:left-2 before:top-3 before:bottom-3 before:w-px before:bg-gray-300 before:content-['']">
              <a href="#" class="submenu-item flex items-center space-x-2 px-3 py-1 rounded bg-blue-100 text-blue-800 font-medium relative">
                <span class="bullet w-2 h-2 rounded-full bg-black absolute -left-4 top-1/2 -translate-y-1/2"></span>
                <span>Pengajuan</span>
              </a>
              <a href="#" class="submenu-item flex items-center space-x-2 px-3 py-1 text-gray-700 relative">
                <span class="bullet w-2 h-2 rounded-full bg-gray-300 absolute -left-4 top-1/2 -translate-y-1/2"></span>
                <span>Pra Analisa</span>
              </a>
              <a href="#" class="submenu-item flex items-center space-x-2 px-3 py-1 text-gray-700 relative">
                <span class="bullet w-2 h-2 rounded-full bg-gray-300 absolute -left-4 top-1/2 -translate-y-1/2"></span>
                <span>Analisa Kwantitatif</span>
              </a>
              <a href="#" class="submenu-item flex items-center space-x-2 px-3 py-1 text-gray-700 relative">
                <span class="bullet w-2 h-2 rounded-full bg-gray-300 absolute -left-4 top-1/2 -translate-y-1/2"></span>
                <span>Analisa Keuangan</span>
              </a>
              <a href="#" class="submenu-item flex items-center space-x-2 px-3 py-1 text-gray-700 relative">
                <span class="bullet w-2 h-2 rounded-full bg-gray-300 absolute -left-4 top-1/2 -translate-y-1/2"></span>
                <span>Neraca</span>
              </a>
              <a href="#" class="submenu-item flex items-center space-x-2 px-3 py-1 text-gray-700 relative">
                <span class="bullet w-2 h-2 rounded-full bg-gray-300 absolute -left-4 top-1/2 -translate-y-1/2"></span>
                <span>Analisa Agunan 1</span>
              </a>
              <a href="#" class="submenu-item flex items-center space-x-2 px-3 py-1 text-gray-700 relative">
                <span class="bullet w-2 h-2 rounded-full bg-gray-300 absolute -left-4 top-1/2 -translate-y-1/2"></span>
                <span>Analisa Agunan 2</span>
              </a>
              <a href="#" class="submenu-item flex items-center space-x-2 px-3 py-1 text-gray-700 relative">
                <span class="bullet w-2 h-2 rounded-full bg-gray-300 absolute -left-4 top-1/2 -translate-y-1/2"></span>
                <span>Analisa Agunan 3</span>
              </a>
            </nav>
        </details>
  
        <!-- Laporan -->
        <details class="group">
            <summary class="flex items-center justify-between cursor-pointer mb-3 gap-3 text-gray-700 hover:text-blue-600 py-2">
            <div class="flex items-center space-x-2">
              <!-- Ikon -->
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M20 8.25V18C20 21 18.21 22 16 22H8C5.79 22 4 21 4 18V8.25C4 5 5.79 4.25 8 4.25C8 4.87 8.24997 5.43 8.65997 5.84C9.06997 6.25 9.63 6.5 10.25 6.5H13.75C14.99 6.5 16 5.49 16 4.25C18.21 4.25 20 5 20 8.25Z" stroke="#3C424A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M16 4.25C16 5.49 14.99 6.5 13.75 6.5H10.25C9.63 6.5 9.06997 6.25 8.65997 5.84C8.24997 5.43 8 4.87 8 4.25C8 3.01 9.01 2 10.25 2H13.75C14.37 2 14.93 2.25 15.34 2.66C15.75 3.07 16 3.63 16 4.25Z" stroke="#3C424A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M8 13H12" stroke="#3C424A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M8 17H16" stroke="#3C424A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Laporan</span>
            </div>
            <!-- Chevron -->
            <svg class="h-4 w-4 group-open:rotate-180 transition" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </summary>
        
          <!-- Sub-menu -->
          <nav id="submenu" class="pl-6 mt-1 space-y-1 relative before:absolute before:left-2 before:top-3 before:bottom-3 before:w-px before:bg-gray-300 before:content-['']">
            <a href="#" class="submenu-item flex items-center space-x-2 px-3 py-1 rounded bg-blue-100 text-blue-800 font-medium relative">
              <span class="bullet w-2 h-2 rounded-full bg-black absolute -left-4 top-1/2 -translate-y-1/2"></span>
              <span>Prospecting</span>
            </a>
            <a href="#" class="submenu-item flex items-center space-x-2 px-3 py-1 text-gray-700 relative">
              <span class="bullet w-2 h-2 rounded-full bg-gray-300 absolute -left-4 top-1/2 -translate-y-1/2"></span>
              <span>Canvassing</span>
            </a>
            <a href="#" class="submenu-item flex items-center space-x-2 px-3 py-1 text-gray-700 relative">
              <span class="bullet w-2 h-2 rounded-full bg-gray-300 absolute -left-4 top-1/2 -translate-y-1/2"></span>
              <span>Cross Selling</span>
            </a>
            <a href="#" class="submenu-item flex items-center space-x-2 px-3 py-1 text-gray-700 relative">
              <span class="bullet w-2 h-2 rounded-full bg-gray-300 absolute -left-4 top-1/2 -translate-y-1/2"></span>
              <span>Majelis Taklim</span>
            </a>
          </nav>
      </details>
    </div> 
  
      <!-- Alat -->
      <div class="px-6 py-3 text-xs text-gray-400 uppercase mt-[120px] alat-heading">Alat</div>
      <div class="w-[200px] border-b ml-6 border-gray-300">
      <nav class="space-y-1 pl-4">
        <details class="group relative">
            <summary class="flex items-center justify-between cursor-pointer gap-3 text-gray-700 hover:text-blue-600 py-2">
              <div class="flex items-center space-x-2">
                <!-- Ikon -->
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" stroke="#3C424A" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M2 12.8799V11.1199C2 10.0799 2.85 9.21994 3.9 9.21994C5.71 9.21994 6.45 7.93994 5.54 6.36994C5.02 5.46994 5.33 4.29994 6.24 3.77994L7.97 2.78994C8.76 2.31994 9.78 2.59994 10.25 3.38994L10.36 3.57994C11.26 5.14994 12.74 5.14994 13.65 3.57994L13.76 3.38994C14.23 2.59994 15.25 2.31994 16.04 2.78994L17.77 3.77994C18.68 4.29994 18.99 5.46994 18.47 6.36994C17.56 7.93994 18.3 9.21994 20.11 9.21994C21.15 9.21994 22.01 10.0699 22.01 11.1199V12.8799C22.01 13.9199 21.16 14.7799 20.11 14.7799C18.3 14.7799 17.56 16.0599 18.47 17.6299C18.99 18.5399 18.68 19.6999 17.77 20.2199L16.04 21.2099C15.25 21.6799 14.23 21.3999 13.76 20.6099L13.65 20.4199C12.75 18.8499 11.27 18.8499 10.36 20.4199L10.25 20.6099C9.78 21.3999 8.76 21.6799 7.97 21.2099L6.24 20.2199C5.33 19.6999 5.02 18.5299 5.54 17.6299C6.45 16.0599 5.71 14.7799 3.9 14.7799C2.85 14.7799 2 13.9199 2 12.8799Z" stroke="#3C424A" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              <span>Pengaturan</span>
              </div>
              <!-- Chevron -->
              <svg class="h-4 w-4 group-open:rotate-180 transition" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </summary>
          
            <!-- Sub-menu -->
            <nav id="submenu" class="pl-6 mt-1 space-y-1 relative before:absolute before:left-2 before:top-3 before:bottom-3 before:w-px before:bg-gray-300 before:content-['']">
              <a href="#" class="bottom-full submenu-item flex items-center space-x-2 px-3 py-1 rounded bg-blue-100 text-blue-800 font-medium relative">
                <span class="bullet w-2 h-2 rounded-full bg-black absolute -left-4 top-1/2 -translate-y-1/2"></span>
                <span>Data Cabang</span>
              </a>
              <a href="#" class="submenu-item flex items-center space-x-2 px-3 py-1 text-gray-700 relative">
                <span class="bullet w-2 h-2 rounded-full bg-gray-300 absolute -left-4 top-1/2 -translate-y-1/2"></span>
                <span>Lembaga</span>
              </a>
              <a href="#" class="submenu-item flex items-center space-x-2 px-3 py-1 text-gray-700 relative">
                <span class="bullet w-2 h-2 rounded-full bg-gray-300 absolute -left-4 top-1/2 -translate-y-1/2"></span>
                <span>Ganti Password</span>
              </a>
              <a href="#" class="submenu-item flex items-center space-x-2 px-3 py-1 text-gray-700 relative">
                <span class="bullet w-2 h-2 rounded-full bg-gray-300 absolute -left-4 top-1/2 -translate-y-1/2"></span>
                <span>Ubah Pengguna</span>
              </a>
            </nav>
        </details>
        <a href="#" class="flex items-center space-x-2 text-gray-700 hover:text-blue-600 py-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M9 11V17L11 15" stroke="#3C424A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M9 17L7 15" stroke="#3C424A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M22 10V15C22 20 20 22 15 22H9C4 22 2 20 2 15V9C2 4 4 2 9 2H14" stroke="#3C424A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M22 10H18C15 10 14 9 14 6V2L22 10Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          <span>Unduh APK</span>
        </a>
      </nav>
      </div>
    </div>
  
    <!-- User Info -->
    <div class="p-4">
      <div class="flex items-center justify-between bg-blue-900 text-sm rounded-xl px-3 py-2 shadow-sm">
        <div class="flex items-center space-x-2">
          <img src="/img/profile.jpg" alt="User" class="w-8 h-8 rounded-full">
          <div>
            <div class="font-light text-white ">Hamada Asahi</div>
            <div class="text-s font-semibold text-white">BMT Alhamdulilla..</div>
          </div>
        </div>
        <a href="#" class="text-blue-700 hover:text-blue-900">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M8.90002 7.56023C9.21002 3.96023 11.06 2.49023 15.11 2.49023H15.24C19.71 2.49023 21.5 4.28023 21.5 8.75023V15.2702C21.5 19.7402 19.71 21.5302 15.24 21.5302H15.11C11.09 21.5302 9.24002 20.0802 8.91002 16.5402" stroke="#ECF2F5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M15 12H3.62" stroke="#ECF2F5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M5.85 8.65039L2.5 12.0004L5.85 15.3504" stroke="#ECF2F5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </a>
      </div>
    </div>
  </aside>
  





  <script>
    const items = document.querySelectorAll(".submenu-item");
  
    items.forEach(item => {
      item.addEventListener("click", (e) => {
        e.preventDefault(); // optional if href is used
  
        // Reset all items
        items.forEach(i => {
          i.classList.remove("bg-blue-100", "text-blue-800", "font-medium");
          i.classList.add("text-gray-700");
          const bullet = i.querySelector(".bullet");
          bullet.classList.remove("bg-black");
          bullet.classList.add("bg-gray-300");
        });
  
        // Set active item
        item.classList.add("bg-blue-100", "text-blue-800", "font-medium");
        item.classList.remove("text-gray-700");
        const bullet = item.querySelector(".bullet");
        bullet.classList.remove("bg-gray-300");
        bullet.classList.add("bg-black");
      });
    });


    //setting
    document.addEventListener('DOMContentLoaded', function () {
    const details = document.querySelector('details');
    const alatDiv = document.querySelector('.alat-heading');

    function adjustMargin() {
      if (details.open) {
        alatDiv.classList.remove('mt-[105px]');
        alatDiv.classList.add('mt-[50px]'); // atur sesuai kebutuhan
      } else {
        alatDiv.classList.remove('mt-[50px]');
        alatDiv.classList.add('mt-[105px]');
      }
    }

    // Saat diklik
    details.addEventListener('toggle', adjustMargin);
  });
  </script>

</body>
</html>