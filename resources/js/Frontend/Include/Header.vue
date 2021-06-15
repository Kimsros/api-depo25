<template>
    <div class="page-wrapper" style="opacity: 1;">
      <header class="header header-border">
          <div class="header-top">
              <div class="container">
                  <div class="header-left">
                      <p class="welcome-msg">Welcome to Riode store message or remove it!</p>
                  </div>
                  <div class="header-right">
                      <div class="dropdown">
                          <a href="#currency">USD</a>
                          <ul class="dropdown-box">
                              <li><a href="#USD">USD</a></li>
                              <li><a href="#EUR">EUR</a></li>
                          </ul>
                      </div>
                      <!-- End DropDown Menu -->
                      <div class="dropdown ml-5">
                          <a href="#language">ENG</a>
                          <ul class="dropdown-box">
                              <li>
                                  <a href="#USD">ENG</a>
                              </li>
                              <li>
                                  <a href="#EUR">FRH</a>
                              </li>
                          </ul>
                      </div>
                      <!-- End DropDown Menu -->
                      <span class="divider"></span>
                      <a href="/contact" class="contact d-lg-show"><i class="d-icon-map"></i>Contact</a>
                      <a href="#" class="help d-lg-show"><i class="d-icon-info"></i> Need Help</a>
                      <a class="login-link" href="/login" data-toggle="login-modal"><i
                              class="d-icon-user"></i>Sign in</a>
                      <span class="delimiter">/</span>
                      <a class="register-link ml-0" href="/register" data-toggle="login-modal">Register</a>
                      <!-- End of Login -->
                  </div>
              </div>
          </div>
          <!-- End HeaderTop -->
          <div class="header-middle sticky-header fix-top sticky-content">
              <div class="container">
                  <div class="header-left">
                      <a href="#" class="mobile-menu-toggle">
                          <i class="d-icon-bars2"></i>
                      </a>
                      <a href="/" class="logo">
                          <img src="/backend/assets/img/depot25.png" alt="logo" width="153" height="44" />
                      </a>
                      <!-- End Logo -->

                      <div class="header-search hs-simple">
                          <form action="#" class="input-wrapper">
                              <input type="text" class="form-control" name="search" autocomplete="off"
                                  placeholder="Search..." required />
                              <button class="btn btn-search" type="submit">
                                  <i class="d-icon-search"></i>
                              </button>
                          </form>
                      </div>
                      <!-- End Header Search -->
                  </div>
                  <div class="header-right">
                      <a href="tel:#" class="icon-box icon-box-side">
                          <div class="icon-box-icon mr-0 mr-lg-2">
                              <i class="d-icon-phone"></i>
                          </div>
                          <div class="icon-box-content d-lg-show">
                              <h4 class="icon-box-title">Call Us Now:</h4>
                              <p>0(800) 123-456</p>
                          </div>
                      </a>
                      <span class="divider"></span>
                      <a href="wishlist.html" class="wishlist">
                          <i class="d-icon-heart"></i>
                      </a>
                      <span class="divider"></span>
                      <div class="dropdown cart-dropdown type2 mr-0 mr-lg-2">
                          <a href="#" class="cart-toggle label-block link">
                              <div class="cart-label d-lg-show">
                                  <span class="cart-name">Shopping Cart:</span>
                                  <span class="cart-price">$0.00</span>
                              </div>
                              <i class="d-icon-bag"><span class="cart-count">2</span></i>
                          </a>
                          <!-- End Cart Toggle -->
                          <div class="dropdown-box">
                              <div class="products scrollable">
                                  <div class="product product-cart">
                                      <figure class="product-media">
                                          <a href="product.html">
                                              <img src="/frontend/images/cart/product-1.jpg" alt="product" width="80"
                                                  height="88" />
                                          </a>
                                          <button class="btn btn-link btn-close">
                                              <i class="fas fa-times"></i><span class="sr-only">Close</span>
                                          </button>
                                      </figure>
                                      <div class="product-detail">
                                          <a href="product.html" class="product-name">Riode White Trends</a>
                                          <div class="price-box">
                                              <span class="product-quantity">1</span>
                                              <span class="product-price">$21.00</span>
                                          </div>
                                      </div>

                                  </div>
                                  <!-- End of Cart Product -->
                                  <div class="product product-cart">
                                      <figure class="product-media">
                                          <a href="product.html">
                                              <img src="/frontend/images/cart/product-2.jpg" alt="product" width="80"
                                                  height="88" />
                                          </a>
                                          <button class="btn btn-link btn-close">
                                              <i class="fas fa-times"></i><span class="sr-only">Close</span>
                                          </button>
                                      </figure>
                                      <div class="product-detail">
                                          <a href="product.html" class="product-name">Dark Blue Women’s
                                              Leomora Hat</a>
                                          <div class="price-box">
                                              <span class="product-quantity">1</span>
                                              <span class="product-price">$118.00</span>
                                          </div>
                                      </div>
                                  </div>
                                  <!-- End of Cart Product -->
                              </div>
                              <!-- End of Products  -->
                              <div class="cart-total">
                                  <label>Subtotal:</label>
                                  <span class="price">$139.00</span>
                              </div>
                              <!-- End of Cart Total -->
                              <div class="cart-action">
                                  <a href="/order" class="btn btn-dark btn-link">View Cart</a>
                                  <a href="order_checkout" class="btn btn-dark"><span>Go To Checkout</span></a>
                              </div>
                              <!-- End of Cart Action -->
                          </div>
                          <!-- End Dropdown Box -->
                      </div>
                      <div class="header-search hs-toggle mobile-search">
                          <a href="#" class="search-toggle">
                              <i class="d-icon-search"></i>
                          </a>
                          <form action="#" class="input-wrapper">
                              <input type="text" class="form-control" name="search" autocomplete="off"
                                  placeholder="Search your keyword..." required />
                              <button class="btn btn-search" type="submit">
                                  <i class="d-icon-search"></i>
                              </button>
                          </form>
                      </div>
                      <!-- End of Header Search -->
                  </div>
              </div>

          </div>

          <div class="header-bottom d-lg-show">
              <div class="container">
                  <div class="header-left">
                      <nav class="main-nav">
                          <ul class="menu">
                              <li>
                                <router-link to="/">Home</router-link>
                              </li>
                              <li>
                                <router-link to="/buy">Buy</router-link>
                              </li>
                              <li>
                                <router-link to="/sell">Sell</router-link>
                              </li>
                              <li>
                                <router-link to="/rent">Rent</router-link>
                              </li>
                              <li>
                                <router-link to="/blog">News</router-link>
                              </li>
                              <li>
                                <router-link to="/about">About</router-link>
                              </li>
                              <li>
                                <router-link to="/term_and_condition">Terms and conditions</router-link>
                              </li>
                          </ul>
                      </nav>
                  </div>
                  <div class="header-right">
                      <a href="#"><i class="d-icon-card"></i>Special Offers</a>
                      <a href="https://d-themes.com/buynow/riodehtml" target="_blank" class="ml-6">Buy Riode!</a>
                  </div>
              </div>
          </div>
      </header>
    </div>
</template>