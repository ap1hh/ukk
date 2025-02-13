<?php 

$hargaawal=$_POST['hargaawal'];
$diskon=$_POST['diskon'];

if($hargaawal==""){
    echo "<script>alert('Silahkan masukkan harga awal');
    window.location='index.php';
    </script>";
}elseif($diskon==""){
    echo "<script>alert('Silahkan masukkan diskon barang');
    window.location='index.php';
    </script>";
}else{
    $hargadiskon=($diskon/100)*$hargaawal;
    $hargatotal=$hargaawal-$hargadiskon;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <title>Document</title>
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
                <img src="image/download2.png" alt="logo" class="w-90 h-20">
            </a>
            <ul class="mt-4">
                <li class="mb-1">
                    <a href="hitung.php" 
                    class="flex items-center py-2 px-4 rounded-md hover:bg-black hover:text-yellow-500 text-black">
                    <i class="fa fa-percent mr-3 text-lg"></i>
                    <span class="text-sm">Cek Diskon</span>
                </a>
            </li>

            <li class="mb-1">
                <a href="index.php" class="flex items-center py-2 px-4 rounded-md bg-black text-yellow-500">
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
        <label>Harga Awal : Rp <?php echo $hargaawal ?>.00</label>
        <br>
        <label>Jumlah diskon : <?php echo $diskon ?> %</label>
        <br>
        <label>Potongan Harga : Rp <?php echo $hargadiskon ?>.00</label>
        <br>
        <label>Jadi Total Harga yang harus dibayar adalah : Rp <?php echo $hargatotal ?>.00</label> 
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