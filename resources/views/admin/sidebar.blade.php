<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="#">Rental Mobil</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        {{-- <a href="#">W</a> --}}
        <img src="/assets/img/LogoWin-Shop.png" style="width: 40px; height: 40px;" alt="">
      </div>
      <ul class="sidebar-menu">
          {{-- <li class="{{ request()->routeIs('promosi') ? 'active' : '' }}"><a href="{{route('promosi')}}"><i class="fas fa-tags"></i><span>Promo Produk</span></a></li> --}} 
          <li><a href="/admin/dashboard"><i class="fas fa-th-large"></i><span>Dashboard</span></a></li>
          <li><a href="/admin/type"><i class="fas fa-th-large"></i><span>Type</span></a></li>
          <li><a href="/admin/car"><i class="fas fa-car"></i><span>Car</span></a></li>
          <li><a href="/admin/peminjaman"><i class="fas fa-money-bill-wave-alt"></i><span>Peminjaman</span></a></li>
      </ul>
      
    </aside>
  </div>