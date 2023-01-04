<?php
      require_once("../layouts/header.php");
?>
      <div class="modal mt-5" id="myModal">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">PUBLIQ.</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"></span>
              </button>
            </div>
            <div class="modal-body">
              <p>
                Come visit us in London for a relaxed and refined experience.
              </p>
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d155.22751613343857!2d-0.18429898938651101!3d51.501468751867!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe93888f2810c518b!2sPubliq.!5e0!3m2!1sen!2sca!4v1671076250989!5m2!1sen!2sca" width="100%" height="65%" style="border:3px solid black;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="modal-footer">
              <button type="button" id="closeButton" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>


      <div class="modal mt-5" id="hoursModal">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Hours of Operation</h5>
              <button type="button" class="btn-close btn-close2" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"></span>
              </button>
            </div>
            <div class="modal-body">
              <p><strong>Sunday</strong>:    12pm-11pm</p>
              <p><strong>Monday</strong>:    3pm-11pm</p>
              <p><strong>Tuesday</strong>:   3pm-11pm</p>
              <p><strong>Wednesday</strong>: 3pm-11pm</p>
              <p><strong>Thursday</strong>:  3pm-11pm</p>
              <p><strong>Friday</strong>:    3pm-2am</p>
              <p><strong>Saturday</strong>:  12pm-2am</p>
            </div>
            <div class="modal-footer">
              <button type="button" id="closeButton2" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>


      <main class="bg-primary">
          
          <!-- 
        -----------------------------           
            
        IMAGE CAROUSEL 
        
        -----------------------------
        -->
        <div id="photoCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
          <ol class="carousel-indicators">
            <li data-bs-target="#photoCarousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#photoCarousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#photoCarousel" data-bs-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active" style="background-image: url(imgs/publiq.jpg);">
              <div class="container">
                <div class="inner">
                  <h1 class="text-white">Publiq.</h1>
                  <p>Come learn more about our team!</p>
                  <a href="#" class="btn btn-lg btn-primary">
                    About
                  </a>
                </div>
              </div>
            </div>
            <div class="carousel-item" style="background-image: url(imgs/menu.jpg);">
              <div class="container">
                <div class="inner">
                  <h1 class="text-white">Drink Menu</h1>
                  <p>See our available cocktails! </p>
                  <a href="#" class="btn btn-lg btn-primary">
                    Drinks
                  </a>
                </div> 
              </div>
            </div>
            <div class="carousel-item" style="background-image: url(imgs/pour.avif);">
              <div class="container">
                <div class="inner">
                  <h1 class="text-white">Hours of Business</h1>
                  <p>Open 10am-2am on Fridays and Saturdays</p>
                  <a href="#" target="_blank" class="btn btn-lg btn-primary">
                    Hours
                  </a>
                </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#photoCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#photoCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
          </button>
        </div>
        <!-- 
        -----------------------------           
            
        Welcome Text 
        
        -----------------------------
        -->
        <div class="container-md">
          <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 mt-3">
              <p id="aboutUsText" class="text-white">
                Welcome to Publiq, the premier luxury bar in town. We pride ourselves on offering an 
                unparalleled drinking experience, with a chic and sophisticated atmosphere that is 
                perfect for any occasion.
              </p>
              <p id="aboutUsText" class="text-white">
               Our expert mixologists have crafted a diverse menu of classic and creative cocktails, all made with the finest ingredients and expertly mixed to perfection. We also have an extensive selection of wines, beers, and spirits to choose from, as well as a variety of small plates and appetizers to enjoy. Whether you're looking to unwind after a long day, celebrate a special occasion, or simply indulge in a night of sophistication and luxury, Publiq is the perfect place for you. We can't wait to welcome you and provide you with an unforgettable experience.
              </p>
            </div>
            <div class="col-md-2"></div>
          </div>
        </div>
        <!-- 
        -----------------------------           
            
        Drink Specials 
        DESKTOP VIEW
        -----------------------------
        -->
        <div id="desktopView" class="container-md">
          <div class="row">
            <div class="accordion col-md-12 mb-5" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <p>Drink of the Day!</p>
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                  <div class="accordion-body ">
                    <div class="container-md">
                      <div class="row">
                      <h5>Zyr Summer Punch</h5>
                      <h6 class="text-muted">Cocktail Special</h6>
                        <img id="drinkImg" src="imgs/summer-punch.jpg" alt="summer-punch cocktail" class="col-md-4 mt-3 mr-1" />
                        <div class="col-md-4">
                        <h5 class="ml-5 mt-2" style="text-decoration: underline; text-align: center;">Description</h5>
                          <p id="drinkDesc" class="text-dark mt-1">Zyr Summer Punch is a refreshing cocktail perfect for sipping on a hot summer day. It is made with vodka, raspberry liqueur, lemon juice, and a splash of grenadine. The vodka provides a smooth base for the sweet and tart flavors of the raspberry liqueur and lemon juice. The grenadine adds a pop of color and a touch of sweetness to the drink. This cocktail is best served over ice in a tall glass and garnished with a lemon wedge or fresh raspberries.</p>
                        </div>
                        <div class="col-md-4">
                        <h5 class="ml-5" style="text-decoration: underline; text-align: center;">Ingredients</h5>
                          <ul class="list-group list-group-flush ingredients">
                            <li class="list-group-item">1.5oz Zyr Vodka</li>
                            <li class="list-group-item">2.5oz Elderflower Liqueur</li>
                            <li class="list-group-item">2.5oz Grapefruit liqueur</li>
                            <li class="list-group-item">7.5oz Lemon Juice</li>
                            <li class="list-group-item">5oz Strawberry Syrup w/ Rose Prosecco</li>
                            <li class="list-group-item">Fresh Strawberries</li>
                          </ul>
                          <p class="mt-5 price"><strong>Price:  </strong><em>$8.99</em></p>
                        </div>
                      </div>
                    </div>  
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Drink of the Week!
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <div class="container-md">
                      <div class="row">
                        <h5>Pomegranate Prosecco Smash</h5>
                        <h6 class="text-muted">Cocktail Special</h6>
                        <img id="drinkImg" src="imgs/cocktail2.jpg" alt="Pomegranate Prosecco Smash" class="col-md-4 mt-3 mr-1" />
                        <div class="col-md-4">
                        <h5 class="ml-5 mt-2" style="text-decoration: underline; text-align: center;">Description</h5>
                          <p id="drinkDesc" class="text-dark mt-1">Our Pomegranate Prosecco Smash is a refreshing and festive cocktail made with pomegranate juice, Prosecco, and a splash of orange liqueur. It's garnished with a slice of orange and a sprig of rosemary, making it the perfect drink to toast to the holidays. The pomegranate juice adds a tart and fruity flavor, while the Prosecco brings bubbles and a touch of sweetness. The orange liqueur adds a zesty citrus kick, and the rosemary adds a subtle herbal note.Pomegranate Prosecco Smash</p>
                        </div>
                        <div class="col-md-4">
                          <h5 class="ml-5" style="text-decoration: underline; text-align: center;">Ingredients</h5>
                            <ul class="list-group list-group-flush ingredients">
                              <li class="list-group-item">1 tablespoon pomegranate arils</li>
                              <li class="list-group-item">2 ounces pomegranate juice</li>
                              <li class="list-group-item">1 teaspoon maple syrup</li>
                              <li class="list-group-item">1 ounce vodka</li>
                              <li class="list-group-item">5 ounces prosecco</li>
                              <li class="list-group-item">1 tablespoon pomegranate arils</li>
                            </ul>
                            <p class="mt-5 price"><strong>Price:  </strong><em>$8.99</em></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Drink of the Month!
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <div class="container-md">
                      <div class="row">
                        <h5>Irish Coffee</h5>
                        <h6 class="text-muted">Cocktail Special</h6>
                        <img id="drinkImg" src="imgs/irishcoffee.jpg" alt="Irish Coffee" class="col-md-4 mt-3 mr-1" />
                        <div class="col-md-4">
                        <h5 class="ml-5 mt-2" style="text-decoration: underline; text-align: center;">Description</h5>
                          <p id="drinkDesc" class="text-dark mt-1">Irish coffee is a warm, boozy drink made with strong coffee, Irish whiskey, sugar, and heavy cream. Savor the creamy, slightly sweet, and slightly boozy flavor of the Irish coffee as you drink it. It's a perfect way to warm up on a cold winter's night, or to kick off a festive evening with friends. Enjoy!</p>
                        </div>
                        <div class="col-md-4">
                          <h5 class="ml-5" style="text-decoration: underline; text-align: center;">Ingredients</h5>
                            <ul class="list-group list-group-flush ingredients">
                              <li class="list-group-item">1 3/4 ounces Slane Irish Whiskey</li>
                              <li class="list-group-item">1/2 ounce Demerara simple syrup</li>
                              <li class="list-group-item">2 1/2 ounces hot coffee</li>
                              <li class="list-group-item">1 ounce cream float</li>
                              <li class="list-group-item">Pinch freshly grated cinnamon</li>
                              <li class="list-group-item">Thin Layer Whipped Cream</li>
                            </ul>
                            <p class="mt-5 price"><strong>Price:  </strong><em>$8.99</em></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

         <!-- 
        -----------------------------           
            
        Drink Specials 
        MOBILE VIEW
        -----------------------------
        -->
        <div id="mobileView" class="container-sm">
          <div class="row">
            <div class="col-md-4 card mb-3">
              <h3 class="card-header">Drink of the Day</h3>
              <div class="card-body">
                <h5 class="card-title">Zyr Summer Punch</h5>
                <h6 class="card-subtitle text-muted">Cocktail Special</h6>
              </div>
              <img id="drinkImg" src="imgs/summer-punch.jpg" alt="summer-punch cocktail" class="col-md-4 mt-3 mr-1" />
              <div class="card-body">
                <p class="card-text">Zyr Summer Punch is a refreshing cocktail perfect for sipping on a hot summer day. It is made with vodka, raspberry liqueur, lemon juice, and a splash of grenadine. The vodka provides a smooth base for the sweet and tart flavors of the raspberry liqueur and lemon juice. The grenadine adds a pop of color and a touch of sweetness to the drink. This cocktail is best served over ice in a tall glass and garnished with a lemon wedge or fresh raspberries.</p>
              </div>
              <ul class="list-group list-group-flush">
              <li class="list-group-item">1.5oz Zyr Vodka</li>
                <li class="list-group-item">2.5oz Elderflower Liqueur</li>
                <li class="list-group-item">2.5oz Grapefruit liqueur</li>
                <li class="list-group-item">7.5oz Lemon Juice</li>
                <li class="list-group-item">5oz Strawberry Syrup w/ Rose Prosecco</li>
                <li class="list-group-item">Fresh Strawberries</li>
              </ul>
              <div class="card-footer">
                <p class="ml-5 priceMobile"><strong>Price:  </strong><em>$8.99</em></p>
              </div>
            </div>
            <div class="col-md-4 card mb-3">
              <h3 class="card-header">Drink of the Week!</h3>
              <div class="card-body">
                <h5 class="card-title">Pomegranate Prosecco Smash</h5>
                <h6 class="card-subtitle text-muted">Cocktail Special</h6>
              </div>
              <img id="drinkImg" src="imgs/cocktail2.jpg" alt="summer-punch cocktail" class="col-md-4 mt-3 mr-1" />
              <div class="card-body">
                <p class="card-text">Zyr Summer Punch is a refreshing cocktail perfect for sipping on a hot summer day. It is made with vodka, raspberry liqueur, lemon juice, and a splash of grenadine. The vodka provides a smooth base for the sweet and tart flavors of the raspberry liqueur and lemon juice. The grenadine adds a pop of color and a touch of sweetness to the drink. This cocktail is best served over ice in a tall glass and garnished with a lemon wedge or fresh raspberries.</p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">1 tablespoon pomegranate arils</li>
                <li class="list-group-item">2 ounces pomegranate juice</li>
                <li class="list-group-item">1 teaspoon maple syrup</li>
                <li class="list-group-item">1 ounce vodka</li>
                <li class="list-group-item">5 ounces prosecco</li>
                <li class="list-group-item">1 tablespoon pomegranate arils</li>
              </ul>
              <div class="card-footer">
                <p class="ml-5 priceMobile"><strong>Price:  </strong><em>$8.99</em></p>
              </div>
            </div>
            <div class="col-md-4 card mb-3">
              <h3 class="card-header">Drink of the Month!</h3>
              <div class="card-body">
                <h5 class="card-title">Irish Coffee</h5>
                <h6 class="card-subtitle text-muted">Cocktail Special</h6>
              </div>
              <img id="drinkImg" src="imgs/irishcoffee.jpg" alt="summer-punch cocktail" class="col-md-4 mt-3 mr-1" />
              <div class="card-body">
                <p class="card-text">Irish coffee is a warm, boozy drink made with strong coffee, Irish whiskey, sugar, and heavy cream. Savor the creamy, slightly sweet, and slightly boozy flavor of the Irish coffee as you drink it. It's a perfect way to warm up on a cold winter's night, or to kick off a festive evening with friends. Enjoy!</p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">1 3/4 ounces Slane Irish Whiskey</li>
                <li class="list-group-item">1/2 ounce Demerara simple syrup</li>
                <li class="list-group-item">2 1/2 ounces hot coffee</li>
                <li class="list-group-item">1 ounce cream float</li>
                <li class="list-group-item">Pinch freshly grated cinnamon</li>
                <li class="list-group-item">Thin Layer Whipped Cream</li>
              </ul>
              <div class="card-footer">
                <p class="ml-5 priceMobile"><strong>Price:  </strong><em>$8.99</em></p>
              </div>
            </div>
          </div>
        </div>
        

        <!-- 
        -----------------------------           
            
          Drink Menu 
        
        -----------------------------
        -->
        <div id="drinks" class="container-md">
          <div class="row mb-5">
            <div class="col-md-5"></div>
            <div class="col-md-4">
              <h3 name="drinkMenuTitle" class="text-white my-3">Drink Menu</h3>
            </div>
            <div class="col-md-3"></div>
          </div>
          
          <div class="row">
              <div class="col-md-1"></div>
              <div class="col-md-3 menuItem mb-2">
                <h7 class="drinkName text-white">Negroni</h7>
                <p class="text-white mt-3">The Negroni is a classic Italian cocktail made with gin, vermouth, and Campari.</p>
                <p class="mt-5 price"><strong>Price:  </strong><em>$8.99</em></p>
              </div>
              <div class="col-md-1"></div>
              <div class="col-md-3 menuItem mb-2">
                <h7 class="drinkName text-white">Martini</h7>
                <p class="text-white mt-3">This elegant cocktail is made with gin and vermouth and is served up in a chilled cocktail glass</p>
                <p class="mt-5 price"><strong>Price:  </strong><em>$9.99</em></p>
              </div>
              <div class="col-md-1"></div>
              <div class="col-md-3 menuItem mb-2">
                <h7 class="drinkName text-white">Margarita</h7>
                <p class="text-white mt-3">Made with tequila, lime juice, and triple sec, the Margarita is a balanced and delicious drink that is sure to please.</p>
                <p class="mt-5 price"><strong>Price:  </strong><em>$12.99</em></p>
              </div>
          </div>
          <div class="row">
              <div class="col-md-1"></div>
              <div class="col-md-3 menuItem mb-2">
                <h7 class="drinkName text-white">Negroni</h7>
                <p class="text-white mt-3">The Negroni is a classic Italian cocktail made with gin, vermouth, and Campari.</p>
                <p class="mt-5 price"><strong>Price:  </strong><em>$8.99</em></p>
              </div>
              <div class="col-md-1"></div>
              <div class="col-md-3 menuItem mb-2">
                <h7 class="drinkName text-white">Martini</h7>
                <p class="text-white mt-3">This elegant cocktail is made with gin and vermouth and is served up in a chilled cocktail glass</p>
                <p class="mt-5 price"><strong>Price:  </strong><em>$9.99</em></p>
              </div>
              <div class="col-md-1"></div>
              <div class="col-md-3 menuItem mb-2">
                <h7 class="drinkName text-white">Margarita</h7>
                <p class="text-white mt-3">Made with tequila, lime juice, and triple sec, the Margarita is a balanced and delicious drink that is sure to please.</p>
                <p class="mt-5 price"><strong>Price:  </strong><em>$12.99</em></p>
              </div>
          </div>
          <div class="row">
              <div class="col-md-1"></div>
              <div class="col-md-3 menuItem mb-2">
                <h7 class="drinkName text-white">Negroni</h7>
                <p class="text-white mt-3">The Negroni is a classic Italian cocktail made with gin, vermouth, and Campari.</p>
                <p class="mt-5 price"><strong>Price:  </strong><em>$8.99</em></p>
              </div>
              <div class="col-md-1"></div>
              <div class="col-md-3 menuItem mb-2">
                <h7 class="drinkName text-white">Martini</h7>
                <p class="text-white mt-3">This elegant cocktail is made with gin and vermouth and is served up in a chilled cocktail glass</p>
                <p class="mt-5 price"><strong>Price:  </strong><em>$9.99</em></p>
              </div>
              <div class="col-md-1"></div>
              <div class="col-md-3 menuItem mb-2">
                <h7 class="drinkName text-white">Margarita</h7>
                <p class="text-white mt-3">Made with tequila, lime juice, and triple sec, the Margarita is a balanced and delicious drink that is sure to please.</p>
                <p class="mt-5 price"><strong>Price:  </strong><em>$12.99</em></p>
              </div>
          </div>
        </div>


        <!-- 
        -----------------------------           
            
          Hours
        
        -----------------------------
        -->
        


        <div class="container-md">

        </div>

        
        </main>
        <?php
          require_once("../layouts/footer.php");
        ?>