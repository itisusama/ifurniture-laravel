@extends('layouts.master')
@section('ifurniture-content')
<!-- START: Home Page Carousel -->
<section class="home-slider-container" style="margin-top: 100px;">
      <div class="slider">
        <div class="slide"><img src="assets/slide1.jpg" alt="Slide 1"></div>
        <div class="slide"><img src="assets/slide2.jpg" alt="Slide 2"></div>
        <div class="slide"><img src="assets/slide3.jpg" alt="Slide 3"></div>
      </div>
      <div class="arrow left" onclick="prevSlide()">‹</div>
      <div class="arrow right" onclick="nextSlide()">›</div>
    </section>
    <!-- END: Home Page Carousel -->

    <!-- START: Product Selection -->
    <section class="product-selection">
      
      <div class="discount-box">
        <p>50% off on all products!</p><br>
        <a href="#">Avail Now</a>
      </div>

      <div class="middle-image zoom-back">
        <img src="assets/furniture.jpg" alt="1">
        <div class="bottom-left"><a href="#"><h4>ITEM 1</h4></a></div>
      </div>

      <div class="right-image zoom-back">
        <img src="assets/furniture2.jpg" alt="1">
        <div class="bottom-left"><a href="#"><h4>ITEM 2</h4></a></div>
      </div>
    </section>
    <!-- END: Product Selection -->

        <!-- START: Product Selection -->
        <section class="product-selection" style="margin-top: 20px;">
      
          <div class="second-right-image zoom-back">
            <img src="assets/furniture2.jpg" alt="1">
            <div class="bottom-left"><a href="#"><h4>ITEM 3</h4></a></div>
          </div>
    
          <div class="second-right-image zoom-back">
            <img src="assets/furniture2.jpg" alt="1">
            <div class="bottom-left"><a href="#"><h4>ITEM 4</h4></a></div>
          </div>
    
          <div class="second-right-image zoom-back">
            <img src="assets/furniture2.jpg" alt="1">
            <div class="bottom-left"><a href="#"><h4>ITEM 5</h4></a></div>
          </div>

          <div class="second-right-image zoom-back">
            <img src="assets/furniture2.jpg" alt="1">
            <div class="bottom-left"><a href="#"><h4>ITEM 6</h4></a></div>
          </div>

        </section>
        <!-- END: Product Selection -->

        <!-- START: Items Slider Section -->
          <section class="swiper mySwiper" style="margin-top: 20px;">
            
            <div class="items-slider-heading">
              <h1>BEST SELLING</h1>
              <a href="shop.html">Shop Now</a>
            </div>
            <br>

            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <!-- Card -->
                <div class="item-card">
                  <!-- image -->
                  <div class="item-card-image">
                    <a href="product-details.html"><img src="assets/furniture3.jpg" alt="furniture"></a>
                    <span>Save 20%</span>
                  </div><br>
                  <!-- Name -->
                  <div class="item-card-name">
                    <p><strong>Name of the item</strong></p>
                  </div><br>
                  <!-- Price -->
                  <div class="item-card-price">
                    <p><del>$99.99</del> $79.99</p>
                  </div>
                  <!-- - -->
                </div>
                <!-- Card -->
              </div>
              <div class="swiper-slide">
                <!-- Card -->
                <div class="item-card">
                  <!-- image -->
                  <div class="item-card-image">
                    <a href="product-details.html"><img src="assets/furniture3.jpg" alt="furniture"></a>
                    <span>Save 20%</span>
                  </div><br>
                  <!-- Name -->
                  <div class="item-card-name">
                    <p><strong>Name of the item</strong></p>
                  </div><br>
                  <!-- Price -->
                  <div class="item-card-price">
                    <p><del>$99.99</del> $79.99</p>
                  </div>
                  <!-- - -->
                </div>
                <!-- Card -->
              </div>
              <div class="swiper-slide">
                <!-- Card -->
                <div class="item-card">
                  <!-- image -->
                  <div class="item-card-image">
                    <a href="product-details.html"><img src="assets/furniture3.jpg" alt="furniture"></a>
                    <span>Save 20%</span>
                  </div><br>
                  <!-- Name -->
                  <div class="item-card-name">
                    <p><strong>Name of the item</strong></p>
                  </div><br>
                  <!-- Price -->
                  <div class="item-card-price">
                    <p><del>$99.99</del> $79.99</p>
                  </div>
                  <!-- - -->
                </div>
                <!-- Card -->
              </div>
              <div class="swiper-slide">
                <!-- Card -->
                <div class="item-card">
                  <!-- image -->
                  <div class="item-card-image">
                    <a href="product-details.html"><img src="assets/furniture3.jpg" alt="furniture"></a>
                    <span>Save 20%</span>
                  </div><br>
                  <!-- Name -->
                  <div class="item-card-name">
                    <p><strong>Name of the item</strong></p>
                  </div><br>
                  <!-- Price -->
                  <div class="item-card-price">
                    <p><del>$99.99</del> $79.99</p>
                  </div>
                  <!-- - -->
                </div>
                <!-- Card -->
              </div>
              <div class="swiper-slide">
                <!-- Card -->
                <div class="item-card">
                  <!-- image -->
                  <div class="item-card-image">
                    <a href="product-details.html"><img src="assets/furniture3.jpg" alt="furniture"></a>
                    <span>Save 20%</span>
                  </div><br>
                  <!-- Name -->
                  <div class="item-card-name">
                    <p><strong>Name of the item</strong></p>
                  </div><br>
                  <!-- Price -->
                  <div class="item-card-price">
                    <p><del>$99.99</del> $79.99</p>
                  </div>
                  <!-- - -->
                </div>
                <!-- Card -->
              </div>
              <div class="swiper-slide">
                <!-- Card -->
                <div class="item-card">
                  <!-- image -->
                  <div class="item-card-image">
                    <a href="product-details.html"><img src="assets/furniture3.jpg" alt="furniture"></a>
                    <span>Save 20%</span>
                  </div><br>
                  <!-- Name -->
                  <div class="item-card-name">
                    <p><strong>Name of the item</strong></p>
                  </div><br>
                  <!-- Price -->
                  <div class="item-card-price">
                    <p><del>$99.99</del> $79.99</p>
                  </div>
                  <!-- - -->
                </div>
                <!-- Card -->
              </div>
              <div class="swiper-slide">
                <!-- Card -->
                <div class="item-card">
                  <!-- image -->
                  <div class="item-card-image">
                    <a href="product-details.html"><img src="assets/furniture3.jpg" alt="furniture"></a>
                    <span>Save 20%</span>
                  </div><br>
                  <!-- Name -->
                  <div class="item-card-name">
                    <p><strong>Name of the item</strong></p>
                  </div><br>
                  <!-- Price -->
                  <div class="item-card-price">
                    <p><del>$99.99</del> $79.99</p>
                  </div>
                  <!-- - -->
                </div>
                <!-- Card -->
              </div>
              <div class="swiper-slide">
                <!-- Card -->
                <div class="item-card">
                  <!-- image -->
                  <div class="item-card-image">
                    <a href="product-details.html"><img src="assets/furniture3.jpg" alt="furniture"></a>
                    <span>Save 20%</span>
                  </div><br>
                  <!-- Name -->
                  <div class="item-card-name">
                    <p><strong>Name of the item</strong></p>
                  </div><br>
                  <!-- Price -->
                  <div class="item-card-price">
                    <p><del>$99.99</del> $79.99</p>
                  </div>
                  <!-- - -->
                </div>
                <!-- Card -->
              </div>
              <div class="swiper-slide">
                <!-- Card -->
                <div class="item-card">
                  <!-- image -->
                  <div class="item-card-image">
                    <a href="product-details.html"><img src="assets/furniture3.jpg" alt="furniture"></a>
                    <span>Save 20%</span>
                  </div><br>
                  <!-- Name -->
                  <div class="item-card-name">
                    <p><strong>Name of the item</strong></p>
                  </div><br>
                  <!-- Price -->
                  <div class="item-card-price">
                    <p><del>$99.99</del> $79.99</p>
                  </div>
                  <!-- - -->
                </div>
                <!-- Card -->
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </section>
        <!-- END: Items Slider Section -->
      
      <!-- START: Need Help Section -->
      <section class="help-section">
        <div class="help-description">
          <h1 class="first-heading">Need help with anything?</h1>
          <h1 class="second-heading">WE ARE HERE FOR YOU!</h1>
          <!-- BTNS -->
          <div class="help-btns">
            <button type="button" class="nav-whatsapp-btn"><a href="#" style="text-decoration: none; color: white;"> WhatsApp Now </a></button>
            <button type="button" class="help-call-btn"><a href="#" style="text-decoration: none; color: black;"> Call Now </a></button>
          </div>
          <!-- BTNS -->
        </div>
      </section>
      <!-- END: Need Help Section -->

      <!-- START: Item Cards Section -->
      <section class="items-cards-section">
        <!-- START: Item Cards -->
        <!-- 1 -->
        <div class="item-card">
          <!-- image -->
          <div class="item-card-image">
            <a href="product-details.html"><img src="assets/furniture3.jpg" alt="furniture"></a>
            <span>Save 20%</span>
          </div><br>
          <!-- Name -->
          <div class="item-card-name">
            <p><strong>Name of the item</strong></p>
          </div><br>
          <!-- Price -->
          <div class="item-card-price">
            <p><del>$99.99</del> $79.99</p>
          </div>
          <!-- - -->
        </div>
        <!-- 2 -->
        <div class="item-card">
          <!-- image -->
          <div class="item-card-image">
            <a href="product-details.html"><img src="assets/furniture3.jpg" alt="furniture"></a>
            <span>Save 20%</span>
          </div><br>
          <!-- Name -->
          <div class="item-card-name">
            <p><strong>Name of the item</strong></p>
          </div><br>
          <!-- Price -->
          <div class="item-card-price">
            <p><del>$99.99</del> $79.99</p>
          </div>
          <!-- - -->
        </div>
        <!-- 3 -->
        <div class="item-card">
          <!-- image -->
          <div class="item-card-image">
            <a href="product-details.html"><img src="assets/furniture3.jpg" alt="furniture"></a>
            <span>Save 20%</span>
          </div><br>
          <!-- Name -->
          <div class="item-card-name">
            <p><strong>Name of the item</strong></p>
          </div><br>
          <!-- Price -->
          <div class="item-card-price">
            <p><del>$99.99</del> $79.99</p>
          </div>
          <!-- - -->
        </div>
        <!-- 4 -->
        <div class="item-card">
          <!-- image -->
          <div class="item-card-image">
            <a href="product-details.html"><img src="assets/furniture3.jpg" alt="furniture"></a>
            <span>Save 20%</span>
          </div><br>
          <!-- Name -->
          <div class="item-card-name">
            <p><strong>Name of the item</strong></p>
          </div><br>
          <!-- Price -->
          <div class="item-card-price">
            <p><del>$99.99</del> $79.99</p>
          </div>
          <!-- - -->
        </div>
        <!-- 5 -->
        <div class="item-card">
          <!-- image -->
          <div class="item-card-image">
            <a href="product-details.html"><img src="assets/furniture3.jpg" alt="furniture"></a>
            <span>Save 20%</span>
          </div><br>
          <!-- Name -->
          <div class="item-card-name">
            <p><strong>Name of the item</strong></p>
          </div><br>
          <!-- Price -->
          <div class="item-card-price">
            <p><del>$99.99</del> $79.99</p>
          </div>
          <!-- - -->
        </div>
        <!-- 6 -->
        <div class="item-card">
          <!-- image -->
          <div class="item-card-image">
            <a href="product-details.html"><img src="assets/furniture3.jpg" alt="furniture"></a>
            <span>Save 20%</span>
          </div><br>
          <!-- Name -->
          <div class="item-card-name">
            <p><strong>Name of the item</strong></p>
          </div><br>
          <!-- Price -->
          <div class="item-card-price">
            <p><del>$99.99</del> $79.99</p>
          </div>
          <!-- - -->
        </div>
        <!-- 7 -->
        <div class="item-card">
          <!-- image -->
          <div class="item-card-image">
            <a href="product-details.html"><img src="assets/furniture3.jpg" alt="furniture"></a>
            <span>Save 20%</span>
          </div><br>
          <!-- Name -->
          <div class="item-card-name">
            <p><strong>Name of the item</strong></p>
          </div><br>
          <!-- Price -->
          <div class="item-card-price">
            <p><del>$99.99</del> $79.99</p>
          </div>
          <!-- - -->
        </div>
        <!-- 8 -->
        <div class="item-card">
          <!-- image -->
          <div class="item-card-image">
            <a href="product-details.html"><img src="assets/furniture3.jpg" alt="furniture"></a>
            <span>Save 20%</span>
          </div><br>
          <!-- Name -->
          <div class="item-card-name">
            <p><strong>Name of the item</strong></p>
          </div><br>
          <!-- Price -->
          <div class="item-card-price">
            <p><del>$99.99</del> $79.99</p>
          </div>
          <!-- - -->
        </div>
        <!-- 9 -->
        <div class="item-card">
          <!-- image -->
          <div class="item-card-image">
            <a href="product-details.html"><img src="assets/furniture3.jpg" alt="furniture"></a>
            <span>Save 20%</span>
          </div><br>
          <!-- Name -->
          <div class="item-card-name">
            <p><strong>Name of the item</strong></p>
          </div><br>
          <!-- Price -->
          <div class="item-card-price">
            <p><del>$99.99</del> $79.99</p>
          </div>
          <!-- - -->
        </div>
        <!-- 10 -->
        <div class="item-card">
          <!-- image -->
          <div class="item-card-image">
            <a href="product-details.html"><img src="assets/furniture3.jpg" alt="furniture"></a>
            <span>Save 20%</span>
          </div><br>
          <!-- Name -->
          <div class="item-card-name">
            <p><strong>Name of the item</strong></p>
          </div><br>
          <!-- Price -->
          <div class="item-card-price">
            <p><del>$99.99</del> $79.99</p>
          </div>
          <!-- - -->
        </div>
        <!-- END: Item Cards -->
      </section>
      <!-- END: Item Cards Section -->

      <!-- START: Quality Section -->
      <section class="quality-section">
        <div class="image-container">
            <img src="assets/furniture4.png" alt="Description of the image">
        </div>
        <div class="description-container">
            <h2>Section Heading Goes Here</h2> <br>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Amet luctus venenatis lectus magna fringilla urna porttitor rhoncus dolor. Mauris pellentesque pulvinar pellentesque habitant morbi. Dignissim convallis aenean et tortor at risus. Aliquam purus sit amet luctus venenatis lectus. Velit euismod in pellentesque massa placerat. Vel facilisis volutpat est velit egestas dui id ornare. Sed id semper risus in hendrerit gravida rutrum quisque non. Ut diam quam nulla porttitor massa id neque aliquam vestibulum. Pulvinar elementum integer enim neque volutpat ac. Euismod nisi porta lorem mollis aliquam. In hac habitasse platea dictumst vestibulum rhoncus est pellentesque. In hendrerit gravida rutrum quisque non tellus orci ac auctor. Viverra mauris in aliquam sem. At auctor urna nunc id cursus.</p><br>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat fugit illum eos officia tempore, obcaecati repellendus rerum commodi dicta nulla omnis neque autem ab ipsa quidem! A, qui praesentium? Delectus!</p><br>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius pariatur ea est facilis laborum vero adipisci suscipit quibusdam odio, omnis assumenda nam nesciunt, voluptatum sed quisquam dolorem dicta maiores accusantium.</p><br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque qui odit quisquam cupiditate ratione necessitatibus temporibus, expedita id eum sequi ex magnam voluptates natus in quo optio enim eos vel.</p>
        </div>
      </section>
      <!-- END: Quality Section -->
     
      <!-- Swiper JS -->
     <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
      <!-- Initialize Swiper -->
      <script>
        var swiper = new Swiper(".mySwiper", {
          slidesPerView: 1,
          spaceBetween: 10,
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
          breakpoints: {
            "@0.00": {
              slidesPerView: 1,
              spaceBetween: 10,
            },
            "@0.75": {
              slidesPerView: 2,
              spaceBetween: 20,
            },
            "@1.00": {
              slidesPerView: 3,
              spaceBetween: 40,
            },
            "@1.50": {
              slidesPerView: 4,
              spaceBetween: 50,
            },
          },
        });
      </script>
@endsection