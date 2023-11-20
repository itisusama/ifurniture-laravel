@extends('layouts.master')
@section('ifurniture-content')
<!-- START: Product and Details -->
<section class="product-details" style="margin-top: 100px;">
        <!-- Images -->
        <div class="product-details-images">
            <!-- larg image -->
            <div class="main-image">
                <img src="assets/furniture3.jpg" alt="1">
            </div>
            <!-- Thumbnails -->
            <div class="thumbnail-images">
                <img src="assets/furniture.jpg" alt="2" onclick="changeImage('assets/furniture.jpg')">
                <img src="assets/furniture4.png" alt="3" onclick="changeImage('assets/furniture4.png')">
            </div>
            <!-- end -->
        </div>
        <!-- Details -->
        <div class="product-details-info">
            <h2>Single Bed with Mattress</h2>
            <div class="product-details-info-price">
                <p> <del>£345.00</del> £145.00 </p>
            </div>

            <div class="product-details-info-instock">
                <p> ✔ IN STOCK </p>
            </div>

            <!-- form -->
            <form class="product-details-info-form" action="#" method="post">
                
                <div class="product-details-info-select">
                    <label for="size">Size</label>
                    <select name="size" id="size">
                        <option value="single">Single</option>
                        <option value="small_double">Small Double</option>
                        <option value="double">Double</option>
                        <option value="king">King</option>
                        <option value="super_king">Super King</option>
                    </select>
                </div>

                <div class="product-details-info-select">
                    <label for="size">Colour</label>
                    <select name="color" id="color">
                        <option value="black">Black</option>
                        <option value="white">White</option>
                        <option value="grey">Grey</option>
                        <option value="plush_velvet_grey">Plush Velvet Grey</option>
                    </select>
                </div>

                <div class="product-discount">
                    <h1>ADD A MATTRESS AND SAVE 40%</h1>
                </div>

                <div class="product-details-info-select">
                    <label for="size">Maitress</label>
                    <select name="maitress" id="maitress">
                        <option value="none">None</option>
                        <option value="Semi Orthopaedic(7″-8″)">Semi Orthopaedic(7″-8″)</option>
                        <option value="Memory Orthopaedic(9″-10″)">Memory Orthopaedic(9″-10″)</option>
                        <option value="Full Foam(9″-10″)">Full Foam(9″-10″)</option>
                        <option value="Full Foam(5″-6″)">Full Foam(5″-6″)</option>
                        <option value="2000 Pocket Sprung">2000 Pocket Sprung</option>
                        <option value="Pillow Top (2000 Pocket Sprung)">Pillow Top (2000 Pocket Sprung)</option>
                        <option value="Euro Top (2000 Pocket Sprung)">Euro Top (2000 Pocket Sprung)</option>
                    </select>
                </div>

                <div class="product-details-info-select">
                    <label for="size">Headboard</label>
                    <select name="headboard" id="headboard">
                        <option value="none">None</option>
                        <option value="standard">Standard</option>
                        <option value="leather">Leather</option>
                        <option value="cube">Cuber</option>
                        <option value="pannel light">Pannel Light</option>
                    </select>
                </div>

                <div class="product-details-info-select">
                    <label for="size">Drawers</label>
                    <select name="drawers" id="drawers">
                        <option value="none">None</option>
                        <option value="two">2-drawers</option>
                    </select>
                </div>

                <div class="product-details-info-select">
                    <label for="size">Crome Legs</label>
                    <select name="drawers" id="drawers">
                        <option value="none">No</option>
                        <option value="yes">Yes £50.00</option>
                    </select>
                </div>
                
                <div class="total-value">
                    <h1>Final Total <br> £145.00</h1>
                </div>

                <div class="flex-btn-box">
                    <div class="number-and-btns">
                        <!-- number -->
                        <div class="number">
                            <span class="minus">-</span>
                            <input type="text" value="1"/>
                            <span class="plus">+</span>
                        </div>
                        <!-- Button -->
                        <button type="button" class="basket-btn">ADD TO BASKET</button>
                        <!-- end -->
                    </div>

                    <button type="button" class="buy-btn">BUY NOW</button>
                </div>

                <div class="paypal-btn">
                    <h1><a href="#"><span style="color: #003087;">Pay</span><span style="color: #009cde;">Pal</span></a></h1>
                </div>
                <br>
                <span>Estimated Delivery: 2 - 3 days</span>
            </form>
            <!-- form -->
        </div>
        <!-- END -->
      </section>
      <!-- END: Product and Details -->

      <!-- START: On Click Product Section -->
      <section class="click-product-sections">
        <div class="click-section-btns">
            <button type="button" onclick="showSection('description')">Description</button>
            <button type="button" onclick="showSection('short-description')">Short Description</button>
            <button type="button" onclick="showSection('information')">Information</button>
            <button type="button" onclick="showSection('additional-information')">Additional Information</button>
            <button type="button" onclick="showSection('reviews')">Reviews(N)</button>    
        </div>
        <!-- Description -->
        <section id="description" style="display: block;">
            <h2>Heading Goes Here</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio obcaecati expedita temporibus quo ipsa! Neque vero, minus hic repellendus quisquam reprehenderit cupiditate excepturi dolorum dolor veritatis eveniet fuga, iste impedit.</p><br>
            <h2>Heading Goes Here</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio obcaecati expedita temporibus quo ipsa! Neque vero, minus hic repellendus quisquam reprehenderit cupiditate excepturi dolorum dolor veritatis eveniet fuga, iste impedit.</p><br>
            <h2>Heading Goes Here</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio obcaecati expedita temporibus quo ipsa! Neque vero, minus hic repellendus quisquam reprehenderit cupiditate excepturi dolorum dolor veritatis eveniet fuga, iste impedit.</p><br>
            <h2>Heading Goes Here</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio obcaecati expedita temporibus quo ipsa! Neque vero, minus hic repellendus quisquam reprehenderit cupiditate excepturi dolorum dolor veritatis eveniet fuga, iste impedit.</p><br>
            <h2>Heading Goes Here</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio obcaecati expedita temporibus quo ipsa! Neque vero, minus hic repellendus quisquam reprehenderit cupiditate excepturi dolorum dolor veritatis eveniet fuga, iste impedit.</p><br>
        </section>
        <!-- Short Description -->
        <section id="short-description">
            <h4><b>Features of the product</b></h4>
            <ul>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
            </ul>
        </section>
        <!-- information -->
        <section id="information">
            <h4>Features of the Enigmatic Dreamer Bed:</h4>
            <ul>
                <li>An effortlessly chic, avant-garde appearance</li>
                <li>Foundation with a streamlined top for a touch of modernity</li>
                <li>Plush finishes that seamlessly harmonize with an extensive spectrum of aesthetics</li;>
                <li>Diverse array of sizes and hues for your personalized taste</li>
                <li>Adheres to UK Fire Safety Standards for your tranquility</li>
            </ul>
            <br>
        <h4>Choices:</h4>
        <ul>
            <li>Choose to include a mattress and a whimsical headboard</li>
            <li>Opt for the addition of Chrome legs, available on request</li>
        </ul>

        <br>
    <div class="dimensions">
        <h4>Dimensions:</h4>
        <p><strong>A-Height of the Dreamweaver Headboard:</strong> 50.8 cm</p>
        <p><strong>B-Elevation of the Foundation:</strong></p>
        <ul>
            <li>With hidden compartments: 58.4 cm</li>
            <li>Without secret stashes: 53.3 cm</li>
        </ul>

        <br>
        <!-- Single Bed Frame -->
        <h4>Single Bed Frame:</h4>
        <p><strong>C-Length:</strong> (190 cm)</p>
        <p><strong>D-Width:</strong> (90 cm )</p>
        <p><strong>Single Mattress Size:</strong> (90 cm x 190 cm)</p>

        <br>
        <!-- Small Double Bed Frame -->
        <h4>Small Double Bed Frame:</h4>
        <p><strong>C-Length:</strong> (190 cm)</p>
        <p><strong>D-Width:</strong> (120 cm)</p>
        <p><strong>Small Double Mattress Size:</strong> (120 cm x 190 cm)</p>

        <br>
        <!-- Double Bed Frame -->
        <h4>Double Bed Frame:</h4>
        <p><strong>C-Length:</strong> (190 cm)</p>
        <p><strong>D-Width:</strong> (140 cm)</p>
        <p><strong>Double Mattress Size:</strong> (140 cm x 190 cm)</p>

        <br>
        <!-- King Bed Frame -->
        <h4>King Bed Frame:</h4>
        <p><strong>C-Length:</strong> (200 cm)</p>
        <p><strong>D-Width:</strong> (150 cm)</p>
        <p><strong>King Mattress Size:</strong> (150 cm x 200 cm)</p>

        <br>
        <!-- Super King Bed Frame -->
        <h4>Super King Bed Frame:</h4>
        <p><strong>C-Length:</strong> (200 cm)</p>
        <p><strong>D-Width:</strong> (180 cm)</p>
        <p><strong>Super King Mattress Size:</strong> (180 cm x 200 cm)</p>

        <p>All dimensions are approximations.</p>
    </div>
        </section>
        <!-- additional information -->
        <section id="additional-information">
            <div class="additional-infodiv">
                <div><b>Legs</b></div>
                <div>Chrome Legs, Wheels</div>
            </div>	
            <br>
            <div class="additional-infodiv">
                <div><b>MATTRESS</b></div>
                <div>2 Single Mattresses (Included)</div>
            </div>
            <br>
            <div class="additional-infodiv">
                <div><b>MATERIAL</b></div>
                <div>Fabric</div>
            </div>
        
        </section>
        <!-- Reviews -->
        <section id="reviews">

            <div class="my-reviews">
                <h2>Product Reviews</h2>
    
                <div class="my-review">
                  <img src="assets/furniture.jpg" alt="avatar" width="50px" height="50px" style="border-radius: 50%;">
                    <p class="reviewer-name">Person</p>
                    <p class="review-date">November 1, 2023</p>
                    <p class="review-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in justo eu elit auctor hendrerit.</p>
                </div>
    
                <div class="my-review">
                  <img src="assets/furniture.jpg" alt="avatar" width="50px" height="50px" style="border-radius: 50%;">
                    <p class="reviewer-name">Person</p>
                    <p class="review-date">October 25, 2023</p>
                    <p class="review-text">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                </div>
            </div>

            <div class="rating-section">
                <button class="add-review-button" onclick="toggleReviewForm()">Add Review</button>
                <form action="#" method="post">
                  <div class="review-form">
                    <label for="reviewerName">Your Name:</label>
                    <input type="text" id="reviewerName" name="reviewerName" required>
    
                    <label for="reviewText">Your Review:</label>
                    <textarea id="reviewText" name="reviewText" required></textarea>
    
                    <button type="button">Submit Review</button>
                  </div>
                </form>
            </div>

        </section>
        <!-- end -->
      </section>
      <!-- END: On Click Product Section -->
      
      <!-- START: Related Products -->
      <section id="related-items-cards-section" style="padding: 20px 30px;">
          <h2>Related Products</h2>
          <div class="items-cards-section">
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
            <!-- END: Item Cards -->
          </div>
      </section>
      <!-- END: Related Products -->
@endsection