<!-- START: Navbar -->
<nav>
      <!-- START: Top Bar -->
      <section class="home-top-bar">
        <div class="home-top-bar-left"><p>Free Same-Day Delivery</p></div>

        <div class="home-top-bar-right">
            <ul>
                <li><a href="tel:123456">Call 123456</a></li>
                <li><a href="allproducts.html">All Products</a></li>
                <li><a href="newarrivals.html">New Arrivals</a></li>
                <li><a href="summersale.html">Summer Sale</a></li>
            </ul>
        </div>
    </section>
    <!-- END: Top Bar -->

        <div class="wrapper">
          <input type="radio" name="slider" id="menu-btn">
          <input type="radio" name="slider" id="close-btn">
          <ul class="nav-links">
            <div class="logo"><a href="index.html">iFurniture</a></div>
            <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
            <li><a href="index.html">Home</a></li>
            
            <!-- 1 -->
            <li>
              <a href="beds.html" class="desktop-item">Beds</a>
              <input type="checkbox" id="showDrop">
              <label for="showDrop" class="mobile-item"><a href="beds.html" style="text-decoration: none; color: black;">Beds</a></label>
              <ul class="drop-menu">
                <li><a href="#">Drop menu 1</a></li>
                <li><a href="#">Drop menu 2</a></li>
                <li><a href="#">Drop menu 3</a></li>
                <li><a href="#">Drop menu 4</a></li>
              </ul>
            </li>
            <!-- 2 -->
            <li><a href="#">Item 2</a></li>
            <!-- 3 -->
            <li><a href="#">Item 3</a></li>
            <!-- 4 -->
            <li>
                <a href="#" class="desktop-item">Item 4</a>
                <input type="checkbox" id="showDrop">
                <label for="showDrop2" class="mobile-item">Item4</label>
                <ul class="drop-menu">
                  <li><a href="#">Drop menu 1</a></li>
                </ul>
              </li>
            <!-- 5 -->
            <li><a href="#">Item 5</a> &nbsp;</li>
            
            <button type="button" class="nav-whatsapp-btn">WhatsApp Now</button>
    
          </ul>
          <div class="logo-and-toggle" style="display: flex; gap: 1rem;">
            <div class="mobile-logo logo"><a href="index.html">iFurniture</a></div>
            <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label> 
          </div>

          <div class="nav-right">
            <a href="#" id="searchBtn"><i class="fa fa-search" aria-hidden="true"></i></a>
            <a href="cart.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
            <a href="account.html">Account</a>
          </div>
    
        </div>
      </nav>
    <!-- END: Navbar -->

    <!-- START: search box -->
    <section class="nav-search-section" id="searchSection">
        <div class="serach-heading"><h4>Search www.ifurniture.com</h4></div><br>
        <input type="text" id="searchBox" placeholder="Serach Your Item">
        <a href="#" id="closeSearch" style="color: white;"><i class="fa fa-times" aria-hidden="true"></i></a>
        <br><br>

        <div class="serach-heading"><h4>Trending</h4></div><br>
        <div class="search-trending-box">
            <a href="#">Item1</a>
            <a href="#">Item2</a>
            <a href="#">Item3</a>
            <a href="#">Item4</a>
        </div>
    </section>
    <!-- END: search box -->