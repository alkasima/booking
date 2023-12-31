@include('layout/frontend/header')
@include('layout/frontend/menu')    
<!-- Site Slider -->   
<div class="hero-slide owl-carousel site-blocks-cover">
  <div class="intro-section" style="background-image: url('{{ asset('assets/images/bus1.jpg') }}');">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7 ml-auto text-right" data-aos="fade-up">
            <h1>Explore, Discover The World</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, in distinctio nostrum laborum sed quisquam voluptate facilis non.</p>
            <p><a href="#" class="btn btn-primary py-3 px-5">Read More</a></p>
          </div>
        </div>
      </div>
    </div>

    <div class="intro-section" style="background-image: url('{{ asset('assets/images/bus2.jpg') }}');">

      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7 mx-auto text-center" data-aos="fade-up">
            <h1>Enjoy The Journey With Your Family</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, in distinctio nostrum laborum sed quisquam voluptate facilis non.</p>
            <p><a href="#" class="btn btn-primary py-3 px-5">Read More</a></p>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- END slider -->

  <div class="site-section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="{{ asset('assets/images/bus2.jpg')}}" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6">
          <span class="text-serif text-primary">About Us</span>
          <h3 class="heading-92913 text-black">Welcome To Our Website</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, illum, quasi. Odit velit deserunt eligendi unde, enim. Enim fugiat.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium eius ullam impedit architecto debitis facilis!</p>
          <p><a href="#" class="btn btn-primary py-3 px-4">Learn More</a></p>
        </div>
      </div>
    </div>
  </div>

  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-4">
          <div class="service-29283">
            <span class="wrap-icon-39293">
              <span class="flaticon-car"></span>
            </span>
            <h3>Luxuries Cars</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus ipsa, ad ratione quos distinctio unde.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="service-29283">
            <span class="wrap-icon-39293">
              <span class="flaticon-shield"></span>
            </span>
            <h3>30 Years of Experience</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus ipsa, ad ratione quos distinctio unde.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="service-29283">
            <span class="wrap-icon-39293">
              <span class="flaticon-captain"></span>
            </span>
            <h3>Good Captain</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus ipsa, ad ratione quos distinctio unde.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="site-section bg-image overlay" style="background-image: url('images/hero_1.jpg');">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="counter-39392">
            <h3>349</h3>
            <span>Number of Cars</span>
          </div>
        </div>
        <div class="col">
          <div class="counter-39392">
            <h3>7000+</h3>
            <span>Customers Satisfied</span>
          </div>
        </div>
        <div class="col">
          <div class="counter-39392">
            <h3>120</h3>
            <span>Number of Staffs</span>
          </div>
        </div>
        <div class="col">
          <div class="counter-39392">
            <h3>493</h3>
            <span>Destinations</span>
          </div>
        </div>
        <div class="col">
          <div class="counter-39392">
            <h3>230</h3>
            <span>Professional Drivers</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="site-section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-7 text-center">
          <span class="text-serif text-primary">Destination</span>
          <h3 class="heading-92913 text-black text-center">Our Destinations</h3>
        </div>
      </div>

      <!-- <div class="row">
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="service-39381">
            <img src="images/bus2.jpg" alt="Image" class="img-fluid">
            <div class="p-4">
              <h3><a href="#"><span class="icon-room mr-1 text-primary"></span> Benin &mdash; Lagos</a></h3>
              <div class="d-flex">
                <div class="mr-auto">
                  <span class="icon-date_range"></span>
                  Sep. 05. 3:00 PM
                </div>
                
                <div class="ml-auto price">
                  <span class="bg-primary">N10000</span>
                </div>
                
              </div>
              <div class="mt-auto book-button">
                  <span class="bg-primary"><a href="login.php">Book Now</a></span>
                </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="service-39381">
            <img src="images/bus2.jpg" alt="Image" class="img-fluid">
            <div class="p-4">
              <h3><a href="#"><span class="icon-room mr-1 text-primary"></span> Croatia &mdash; Columbia</a></h3>
              <div class="d-flex">
                <div class="mr-auto">
                  <span class="icon-date_range"></span>
                  Sep. 05 &mdash; Oct. 15
                </div>
                <div class="ml-auto price">
                  <span class="bg-primary">$600</span>
                </div>
                
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="service-39381">
            <img src="images/bus2.jpg" alt="Image" class="img-fluid">
            <div class="p-4">
              <h3><a href="#"><span class="icon-room mr-1 text-primary"></span> Croatia &mdash; Columbia</a></h3>
              <div class="d-flex">
                <div class="mr-auto">
                  <span class="icon-date_range"></span>
                  Sep. 05 &mdash; Oct. 15
                </div>
                <div class="ml-auto price">
                  <span class="bg-primary">$600</span>
                </div>
                
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4">
          <div class="service-39381">
            <img src="images/bus2.jpg" alt="Image" class="img-fluid">
            <div class="p-4">
              <h3><a href="#"><span class="icon-room mr-1 text-primary"></span> Croatia &mdash; Columbia</a></h3>
              <div class="d-flex">
                <div class="mr-auto">
                  <span class="icon-date_range"></span>
                  Sep. 05 &mdash; Oct. 15
                </div>
                <div class="ml-auto price">
                  <span class="bg-primary">$600</span>
                </div>
                
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="service-39381">
            <img src="images/bus2.jpg" alt="Image" class="img-fluid">
            <div class="p-4">
              <h3><a href="#"><span class="icon-room mr-1 text-primary"></span> Croatia &mdash; Columbia</a></h3>
              <div class="d-flex">
                <div class="mr-auto">
                  <span class="icon-date_range"></span>
                  Sep. 05 &mdash; Oct. 15
                </div>
                <div class="ml-auto price">
                  <span class="bg-primary">$600</span>
                </div>
                
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="service-39381">
            <img src="images/bus2.jpg" alt="Image" class="img-fluid">
            <div class="p-4">
              <h3><a href="#"><span class="icon-room mr-1 text-primary"></span> Croatia &mdash; Columbia</a></h3>
              <div class="d-flex">
                <div class="mr-auto">
                  <span class="icon-date_range"></span>
                  Sep. 05 &mdash; Oct. 15
                </div>
                <div class="ml-auto price">
                  <span class="bg-primary">$600</span>
                </div>
                
              </div>
            </div>
          </div>
        </div>

      </div> -->

<div class="row">

  <div class="col-md-6 col-lg-4 mb-4">
    <div class="service-39381">
      <img src="{{ asset('assets/images')}}" alt="Image" class="img-fluid">
      <div class="p-4">
        <h3><a href="#"></a></h3>
        <div class="d-flex">
          <div class="mr-auto">
            <span class="icon-date_range"></span>
            <?php
             // Subtract 1 hour from the date
             // Format the date to display as AM/PM
            
            ?>
          </div>
          <div class="ml-auto price">
            <span class="bg-primary"></span>
          </div>
        </div>
        <div class="mt-auto book-button">
          <span class="bg-primary"><a href="/login">Book Now</a></span>
        </div>
      </div>
    </div>
  </div>


</div>
    </div>
  </div>

  <!-- <div class="site-section">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <p><img src="images/hero_1.jpg" alt="Image" class="img-fluid"></p>
        </div>
        <div class="col-md-5">
          <span class="text-serif text-primary">Book Now</span>
          <h3 class="heading-92913 text-black">Book A Yacht</h3>
          <form action="#" class="row">
            <div class="form-group col-md-6">
              <label for="input-1">Full Name:</label>
              <input type="text" class="form-control" id="input-1">
            </div>
            <div class="form-group col-md-6">
              <label for="input-2">Number of People:</label>
              <input type="text" class="form-control" id="input-2">
            </div>

            <div class="form-group col-md-6">
              <label for="input-3">Date From:</label>
              <input type="text" class="form-control datepicker" id="input-3">
            </div>
            <div class="form-group col-md-6">
              <label for="input-4">Date To:</label>
              <input type="text" class="form-control datepicker" id="input-4">
            </div>

            <div class="form-group col-md-12">
              <label for="input-5">Yacht You're Interested in:</label>
              <select name="" id="input-5" class="form-control">
                <option value="">Motor Yacht</option>
                <option value="">Hi-Speed Yacht</option>
                <option value="">Premium Yacht</option>
                <option value="">Presidential Yacht</option>
              </select>
            </div>

            <div class="form-group col-md-6">
              <label for="input-6">Email Address</label>
              <input type="text" class="form-control" id="input-6">
            </div>

            <div class="form-group col-md-6">
              <label for="input-7">Phone Number</label>
              <input type="text" class="form-control" id="input-7">
            </div>


            
            <div class="form-group col-md-12">
              <label for="input-8">Notes</label>
              <textarea name="" id="input-8" cols="30" rows="5" class="form-control"></textarea>
            </div>

            <div class="form-group col-md-12">
              <input type="submit" class="btn btn-primary py-3 px-5" value="Book Now">
            </div>

          </form>
        </div>
      </div>
    </div>
  </div> -->
  

  <div class="site-section">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-7 text-center">
          <span class="text-serif text-primary">Team</span>
          <h3 class="heading-92913 text-black text-center">Our Team</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-6 mb-lg-0">
          <div class="person">
            <figure>
              <img src="{{ asset('assets/images/person_1.jpg')}}" alt="Image" class="img-fluid">
              <div class="social">
                <a href="#"><span class="icon-facebook"></span></a>
                <a href="#"><span class="icon-twitter"></span></a>
                <a href="#"><span class="icon-linkedin"></span></a>
              </div>
            </figure>
            <div class="person-contents">
              <h3>Craig Daniel</h3>
              <span class="position">Engineer</span>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-lg-0">
          <div class="person">
            <figure>
              <img src="{{ asset('assets/images/person_2.jpg')}}" alt="Image" class="img-fluid">
              <div class="social">
                <a href="#"><span class="icon-facebook"></span></a>
                <a href="#"><span class="icon-twitter"></span></a>
                <a href="#"><span class="icon-linkedin"></span></a>
              </div>
            </figure>
            <div class="person-contents">
              <h3>Craig Daniel</h3>
              <span class="position">Engineer</span>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-lg-0">
          <div class="person">
            <figure>
              <img src="{{ asset('assets/images/person_3.jpg')}}" alt="Image" class="img-fluid">
              <div class="social">
                <a href="#"><span class="icon-facebook"></span></a>
                <a href="#"><span class="icon-twitter"></span></a>
                <a href="#"><span class="icon-linkedin"></span></a>
              </div>
            </figure>
            <div class="person-contents">
              <h3>Craig Daniel</h3>
              <span class="position">Engineer</span>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-lg-0">
          <div class="person">
            <figure>
              <img src="{{ asset('assets/images/person_4.jpg')}}" alt="Image" class="img-fluid">
              <div class="social">
                <a href="#"><span class="icon-facebook"></span></a>
                <a href="#"><span class="icon-twitter"></span></a>
                <a href="#"><span class="icon-linkedin"></span></a>
              </div>
            </figure>
            <div class="person-contents">
              <h3>Craig Daniel</h3>
              <span class="position">Engineer</span>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="site-section">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-7 text-center">
          <span class="text-serif text-primary">Testimonial</span>
          <h3 class="heading-92913 text-black text-center">What Customer Saying...</h3>
        </div>
      </div>
      <div class="row">
        <div class="mb-4 mb-lg-0 col-md-6 col-lg-4">
          <div class="testimony-39291">
            <blockquote>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem laborum cumque commodi, unde doloribus.</p>
            </blockquote>
            <div class="d-flex vcard align-items-center">
              <div class="pic mr-3">
                <img src="{{ asset('assets/images/person_3_sq.jpg')}}" alt="Image" class="img-fluid">
              </div>
              <div class="text">
                <strong class="d-block">John Doe</strong>
                <span>CEO and Co-Founder</span>
              </div>
            </div>
          </div>
        </div>
        <div class="mb-4 mb-lg-0 col-md-6 col-lg-4">
          <div class="testimony-39291">
            <blockquote>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem laborum cumque commodi, unde doloribus.</p>
            </blockquote>
            <div class="d-flex vcard align-items-center">
              <div class="pic mr-3">
                <img src="{{ asset('assets/images/person_4_sq.jpg')}}" alt="Image" class="img-fluid">
              </div>
              <div class="text">
                <strong class="d-block">John Doe</strong>
                <span>CEO and Co-Founder</span>
              </div>
            </div>
          </div>
        </div>
        <div class="mb-4 mb-lg-0 col-md-6 col-lg-4">
          <div class="testimony-39291">
            <blockquote>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem laborum cumque commodi, unde doloribus.</p>
            </blockquote>
            <div class="d-flex vcard align-items-center">
              <div class="pic mr-3">
                <img src="{{ asset('assets/images/person_3_sq.jpg')}}" alt="Image" class="img-fluid">
              </div>
              <div class="text">
                <strong class="d-block">John Doe</strong>
                <span>CEO and Co-Founder</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="site-section bg-image overlay" style="background-image: url('images/hero_2.jpg');">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-7 text-center">
          <h2 class="text-white">Get In Touch With Us</h2>
          <p class="lead text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          <p class="mb-0"><a href="#" class="btn btn-warning py-3 px-5 text-white">Contact Us</a></p>
        </div>
      </div>
    </div>
  </div>

  @include('layout/frontend/footer')
  
