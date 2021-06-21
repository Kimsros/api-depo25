<template>
    <nav class="sidebar" data-trigger="scrollbar">
            <div class="sidebar-header d-none d-lg-block">
               <div class="sidebar-toogle-pin">
                  <i class="icofont-tack-pin"></i>
               </div>
            </div>
            <div class="sidebar-body">
               <ul class="nav">
                  <li class="nav-category">Main</li>
                  <li class="active">
                     <a href="index.html">
                        <i class="icofont-pie-chart"></i>
                        <span class="link-title">Dashboard</span>
                     </a>
                  </li>
                  <li class="nav-category">apps</li>
                  <li>
                     <a href="#">
                        <i class="icofont-ui-user"></i>
                        <span class="link-title">Users</span>
                     </a>
                     <ul class="nav sub-menu">
                        <li><a href="/admin/add_user">Add Users</a></li>
                        <li><a href="/admin/all_user">All Users</a></li>
                        <li><a href="/admin/admin">Admin List</a></li>
                        <li><a href="/admin/seller">Seller List</a></li>
                        <li><a href="/admin/buyer">Buyer List</a></li>
                     </ul>
                  </li>
                  <li>
                     <a href="#">
                        <i class="icofont-shopping-cart"></i>
                        <span class="link-title">Product</span>
                     </a>
                     <ul class="nav sub-menu">
                        <li><a href="/admin/product/add_product">Add Product</a></li>
                        <li><a href="/admin/product/list_attribute">All Product</a></li>
                        <li><a href="/admin/product_brand">Product Brand</a></li>
                        <li><a href="/admin/product/list_house_product">In House Product</a></li>
                        <li><a href="/admin/product/list_attribute">Attribute</a></li>
                     </ul>
                  </li>
                  <li>
                     <a href="#">
                        <i class="icofont-shopping-cart"></i>
                        <span class="link-title">Product Category</span>
                     </a>
                     <ul class="nav sub-menu">
                        <li><a href="/admin/add_category">Add Product Category</a></li>
                        <li><a href="/admin/list_category">All Product Category</a></li>
                     </ul>
                  </li>
                  <li>
                     <a href="#">
                        <i class="icofont-cubes"></i>
                        <span class="link-title">Brand</span>
                     </a>
                     <ul class="nav sub-menu">
                        <li><a href="/admin/add_brand">Add Brand</a></li>
                        <li><a href="/admin/brand">List Brand</a></li>
                     </ul>
                  </li>
                  <li>
                     <a href="#">
                        <i class="icofont-dollar-true"></i>
                        <span class="link-title">Sale</span>
                     </a>
                     <ul class="nav sub-menu">
                        <li><a href="/admin/all_order">All Order</a></li>
                        <li><a href="/admin/house_order">In House Order</a></li>
                     </ul>
                  </li>
                  <li>
                     <a href="#">
                        <i class="icofont-newspaper"></i>
                        <span class="link-title">Blog System</span>
                     </a>
                     <ul class="nav sub-menu">
                        <li><a href="/admin/add_blog">Add Post</a></li>
                        <li><a href="/admin/blog">All Post</a></li>
                     </ul>
                  </li>
                  <li>
                     <a href="#">
                        <i class="icofont-newspaper"></i>
                        <span class="link-title">Blog Category</span>
                     </a>
                     <ul class="nav sub-menu">
                        <li><a href="/admin/list_blog_category">Add Blog Category</a></li>
                        <li><a href="/admin/add_blog_category">All Category</a></li>
                     </ul>
                  </li>
                  <li>
                     <a href="#">
                        <i class="icofont-price"></i>
                        <span class="link-title">Pricing</span>
                     </a>
                     <ul class="nav sub-menu">
                        <li><a href="/admin/add_pricing">Add Pricing</a></li>
                        <li><a href="/admin/list_pricing">All Pricing</a></li>
                     </ul>
                  </li>
                  <li>
                     <a href="#">
                        <i class="icofont-shopify"></i>
                        <span class="link-title">Shop</span>
                     </a>
                     <ul class="nav sub-menu">
                        <li><a href="/admin/add_shop">Add Shop</a></li>
                        <li><a href="/admin/shop">All Shop</a></li>
                     </ul>
                  </li>
                  <li>
                     <a href="#">
                        <i class="icofont-file-text"></i>
                        <span class="link-title">Report</span>
                     </a>
                     <ul class="nav sub-menu">

                        <li><a href="/admin/in_house_products">In House Product</a></li>
                        <li><a href="/admin/purchase">Purchase</a></li>
                        <li><a href="/admin/user_search">User Search</a></li>
                        <li><a href="/admin/product_wishlist">Product Wishlist</a></li>
                     </ul>
                  </li>
                  <li>
                     <a href="#">
                        <i class="icofont-settings-alt"></i>
                        <span class="link-title">Setting</span>
                     </a>
                     <ul class="nav sub-menu">
                        <li><a href="/admin/role">Role & Permission</a></li>
                        <li><a href="/admin/preference">Preference</a></li>
                     </ul>
                  </li>
               </ul>
               <!-- End Nav -->
            </div>
            <!-- End Sidebar Body -->
         </nav>
</template>
