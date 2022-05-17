 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="index3.html" class="brand-link">
         <img src="{{ url('assets/sayur/kecil.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
         <span class="brand-text font-weight-light">Admin Bag Shop</span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar-menu">
         <!-- Sidebar user panel (optional) -->

         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                 <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                 <li class="nav-item">
                     <a href="/admin" class="nav-link {{ Request::is('admin') ? 'active' : '' }}">
                         <i class="nav-icon fas fa-th"></i>
                         <p>
                             Dashboard
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="/admin/crud" class="nav-link {{ Request::is('admin/crud') ? 'active' : '' }}">
                         <i class="nav-icon fas fa-th"></i>
                         <p>
                             Add Products
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="/admin/konfirmasi" class="nav-link {{ Request::is('admin/konfirmasi') ? 'active' : '' }}">

                         <i class="nav-icon fas fa-th"></i>
                         <p>
                             Konfirmasi pembayaran
                         </p>
                     </a>
                 </li>
             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>
