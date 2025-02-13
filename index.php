

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <title>Diskon</title>
    <style>
        .main.active {
            width: 100%;
            margin-left: 0;
        }
    </style>
</head>
<body>

  <div class="fixed left-0 top-0 w-64 h-full bg-yellow-500 p-4 z-50 sidebar-menu transition-transform">
        <a href="" class="flex items-center pb-4 border-b border-b-gray-800">
        <img src="image/download2.png" alt="logo" class="w-90 h-15">
        </a>
        <ul class="mt-4">
            <!-- Dashboard -->
            <li class="mb-1">
                <a href="index.php" class="flex items-center py-2 px-4 rounded-md bg-black text-yellow-500">
                    <i class="fa fa-percent mr-3 text-lg"></i>
                    <span class="text-sm">Cek Diskon</span>
                </a>
            </li>

            <!-- Orders -->
            <li class="mb-1">
                <a href="hitung.php" 
                  class="flex items-center py-2 px-4 rounded-md hover:bg-black hover:text-yellow-500 text-black">
                    <i class="fa fa-check mr-3 text-lg"></i>
                    <span class="text-sm">Hasil</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="fixed top-0 left-0 w-full h-full bg-black/50 z-40 md:hidden sidebar-overlay">
  </div>

    <main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-gray-50 min-h-screen transition-all main">
        <div class="py-2 px-6 bg-white flex items-center shadow-md shadow-black/5 sticky top-0 left-0 z-30">
            <button type="button" class="text-lg text-gray-600 sidebar-toggle">
                <i class="fa-solid fa-bars"></i>
            </button>
            <ul class="flex items-center text-base font-medium ml-4">
                <li class="mr-2">
                    <a href="#" class="text-black hover:text-gray-700">Penghitungan Diskon</a>
                </li>
            </ul>
        </div>
      
    <form class="max-w-sm mx-auto">
      <div class="mb-5">
        <label for="" class="block mb-2 text-sm font-medium text-black ">Harga Awal</label>
        <input type="text" name="hargaawal" id="" class="bg-gray-200 border border-gray-400 text-black placeholder-gray-500 text-sm rounded-lg focus:ring-black focus:border-black block w-full p-2.5" placeholder="Masukkan Harga Awal">
        <p class="mt-2 text-sm text-red-600">Harga Harus diisi!</p>
      </div>
      <div>
        <label for="" class="block mb-2 text-sm font-medium text-black">Jumlah Diskon</label>
        <input type="number" name="diskon" id="" class="bg-gray-200 border border-gray-400 text-black placeholder-gray-500 text-sm rounded-lg focus:ring-black focus:border-black block w-full p-2.5 " placeholder="Masukkan Jumlah Diskon"><i class="text-medium">%</i>
        <p class="mt-2 text-sm text-red-600 ">Diskon harus diisi!</p>
        <p class="mt-2 text-sm text-red-600 ">Diskon apa itu?</p>
        <p class="mt-2 text-sm text-red-600 ">Diskon tidak boleh lebih dari 100!</p>
      </div>
      <button type="submit" value="hitung" class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 ">
        <i class="fa fa-percent me-2"></i>
        Hitung
      </button>
    </form>




    </main>

    <script>
            document.addEventListener("DOMContentLoaded", function () {
                const sidebarToggle = document.querySelector('.sidebar-toggle');
                const sidebarOverlay = document.querySelector('.sidebar-overlay');
                const sidebarMenu = document.querySelector('.sidebar-menu');
                const main = document.querySelector('.main');

                if (sidebarToggle && sidebarOverlay && sidebarMenu && main) {
                    if (window.innerWidth < 768) {
                        main.classList.add('active');
                        sidebarOverlay.classList.add('hidden');
                        sidebarMenu.classList.add('-translate-x-full');
                    }

                    sidebarToggle.addEventListener('click', function (e) {
                        e.preventDefault();
                        main.classList.toggle('active');
                        sidebarOverlay.classList.toggle('hidden');
                        sidebarMenu.classList.toggle('-translate-x-full');
                    });

                    sidebarOverlay.addEventListener('click', function (e) {
                        e.preventDefault();
                        main.classList.add('active');
                        sidebarOverlay.classList.add('hidden');
                        sidebarMenu.classList.add('-translate-x-full');
                    });

                    document.querySelectorAll('.sidebar-dropdown-toggle').forEach(function (item) {
                        item.addEventListener('click', function (e) {
                            e.preventDefault();
                            const parent = item.closest('.group');
                            if (parent.classList.contains('selected')) {
                                parent.classList.remove('selected');
                            } else {
                                document.querySelectorAll('.sidebar-dropdown-toggle').forEach(function (i) {
                                    i.closest('.group').classList.remove('selected');
                                });
                                parent.classList.add('selected');
                            }
                        });
                    });
                } 
            });
    </script>
</body>
</html>