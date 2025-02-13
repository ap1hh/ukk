<!-- <div class="fixed left-0 top-0 w-64 h-full bg-yellow-500 p-4 z-50 sidebar-menu transition-transform">
    <a href="/" class="flex items-center pb-4 border-b border-b-gray-800">
        <img src="{{ asset('image/download.png') }}" alt="logo" class="w-90 h-20 grayscale">
    </a>
    <ul class="mt-4">
        <li class="mb-1 group {{ request()->is('dashboard') ? 'active' : '' }}">
            <a href="/dashboard" 
               class="flex items-center py-2 px-4 rounded-md
                      {{ request()->is('dashboard') 
                         ? 'bg-black text-red-500' 
                         : 'hover:bg-black text-black hover:text-red-500' }}">
                <i class="fa fa-percent mr-3 text-lg"></i>
                <span class="text-sm">Cek Diskon</span>
            </a>
        </li>

        <li class="mb-1 group {{ request()->is('dashboard/paket') ? 'active' : '' }}">
            <a href="/dashboard/paket" 
               class="flex items-center py-2 px-4 rounded-md
                      {{ request()->is('dashboard/paket') 
                         ? 'bg-black text-red-500' 
                         : 'hover:bg-black text-black hover:text-red-500' }}">
                <i class="fa fa-check mr-3 text-lg"></i>
                <span class="text-sm">Hasil</span>
            </a>
        </li>
    </ul>
</div>
<div class="fixed top-0 left-0 w-full h-full bg-black/50 z-40 md:hidden sidebar-overlay"></div> 

<aside>
<?php include 'sidebar.php'; ?>
</aside>
-->

elseif($diskon>100){
    echo "<script>alert('Diskon Terlalu Banyak');
    window.location='index.php';
    </script>";
}elseif($diskon<0){
    echo "<script>alert('Diskon apa itu');
    window.location='index.php';
    </script>";
}
