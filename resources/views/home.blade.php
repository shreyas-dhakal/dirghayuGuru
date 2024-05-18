@extends('master')
@section('content')
  <div class="swiper-container mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="swiper-slide-overlay swiperClass">
          <img src="{{asset($sliders->image)}}" alt="Slider 1" class="slider-image" />
          <div class="container">
            <div class="overlay-text d-flex flex-column flex-lg-row align-items-lg-center">
              <div class="line d-none d-lg-block"></div>
              <div class="message px-3 py-4">
                <h2 class="large-text text-center text-lg-start">Welcome To</h2>
                <p class="small-text text-center text-lg-start mb-0">
                  Dirghayu Guru Hospital
                </p>
                <!-- Navigation buttons -->
                <div class="navigation-buttons text-center mt-3 d-flex">
                  <div class="swiper-button-prev me-2"></div>
                  <div class="swiper-button-next ms-2"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="swiper-slide-overlay swiperClass">
          <img src="../images/Slider-3.jpg" alt="Slider 1" class="slider-image img-fluid" />
          <div class="container">
            <div class="overlay-text d-flex flex-column flex-lg-row align-items-lg-center">
              <div class="line d-none d-lg-block"></div>
              <div class="message px-3 py-4">
                <h2 class="large-text text-center text-lg-start">Welcome To</h2>
                <p class="small-text text-center text-lg-start mb-0">
                  Dirghayu Guru Hospital
                </p>
                <!-- Navigation buttons -->
                <div class="navigation-buttons text-center mt-3 d-flex ">
                  <div class="swiper-button-prev me-2"></div>
                  <div class="swiper-button-next ms-2"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="swiper-slide-overlay swiperClass">
          <img src="../images/Slider-2.jpg" alt="Slider 1" class="slider-image img-fluid" />
          <div class="container">
            <div class="overlay-text d-flex flex-column flex-lg-row align-items-lg-center">
              <div class="line d-none d-lg-block"></div>
              <div class="message px-3 py-4">
                <h2 class="large-text text-center text-lg-start">Welcome To</h2>
                <p class="small-text text-center text-lg-start mb-0">
                  Dirghayu Guru Hospital
                </p>
                <!-- Navigation buttons -->
                <div class="navigation-buttons text-center mt-3 d-flex ">
                  <div class="swiper-button-prev me-2"></div>
                  <div class="swiper-button-next ms-2"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     
    
      <!-- Add other swiper-slides here if needed -->
    </div>
  </div>
  
  <!--End Swiper -->

  <!-- About Us -->
  <section class="about-us pt-5">
    <div class="container">
      <h2 class="our-stories text-center pb-4 pb-md-5">
        Our <span class="green-text">Stories</span>
      </h2>
      <div class="row align-items-center">
        <div class="col-md-6 mb-4 mb-md-0">
          <div class="about-body">
            <p class="first-paragraph" style="line-height: 1.6">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Repudiandae recusandae praesentium, unde, odio nihil inventore
              nesciunt exercitationem nobis, id eius culpa assumenda fugiat
              voluptate eum voluptates quam sequi laboriosam optio fugit
              consequuntur enim quia hic quae. Consequuntur ullam iste, ut
              architecto accusantium doloremque ducimus optio! Sit, corporis
              beatae error aut, nihil harum dignissimos quibusdam quidem dolor
              hic iure velit molestias placeat rem laboriosam voluptates
              deleniti distinctio animi est ratione eum!
            </p>
            <p class="second-paragraph" style="line-height: 1.6">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora
              voluptas amet corrupti mollitia labore adipisci recusandae
              accusantium velit dolor. Cumque alias ipsam hic sint adipisci
              laudantium rerum, architecto sapiente illum doloribus? Qui
              nesciunt excepturi corrupti dolorem delectus beatae porro
              repellat quasi, doloribus sunt, minima magnam corporis optio
              exercitationem, tenetur accusantium.
            </p>
          </div>
          <a class="btn btn-primary mt-4" href="About.html">Know More</a>
        </div>
        <div class="col-md-6">
          <div class="about-image text-center align-items-center">
            <img src="../images/Our stories.png"  alt="About Us Image" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End About Us -->

  <!-- Department -->
  <section class="Departments-home py-5">
    <div class="container">
      <h2 class="our-stories text-center pb-5">
        Our <span class="green-text">Departments</span>
      </h2>
      <div class="container text-center my-3">
        <div class="row mx-auto my-auto">
          <div class="col-sm-3 mb-4">
            <div class="card">
              <div class="card-body d-flex flex-column justify-content-center align-items-center">
                <div class="circle d-flex justify-content-center align-items-center">
                  <img class="depart-image" src="../images/Icons/neurology.png" alt="Neurology" />
                </div>
                <div class="depart-name text-center mt-5">Neurology</div>
              </div>
            </div>
          </div>
          <div class="col-sm-3 mb-4">
            <div class="card">
              <div class="card-body d-flex flex-column justify-content-center align-items-center">
                <div class="circle d-flex justify-content-center align-items-center">
                  <img class="depart-image" src="../images/Icons/cardiology.png" alt="Neurology" />
                </div>
                <div class="depart-name text-center mt-5">Cardiology</div>
              </div>
            </div>
          </div>
          <div class="col-sm-3 mb-4">
            <div class="card">
              <div class="card-body d-flex flex-column justify-content-center align-items-center">
                <div class="circle d-flex justify-content-center align-items-center">
                  <img class="depart-image" src="../images/Icons/medical-scan.png" alt="Neurology" />
                </div>
                <div class="depart-name text-center mt-5">Radiology</div>
              </div>
            </div>
          </div>
          <div class="col-sm-3 mb-4">
            <div class="card">
              <div class="card-body d-flex flex-column justify-content-center align-items-center">
                <div class="circle d-flex justify-content-center align-items-center">
                  <img class="depart-image" src="../images/Icons/arthritis.png" alt="Neurology" />
                </div>
                <div class="depart-name text-center mt-5">Orthopedic</div>
              </div>
            </div>
          </div>
          <div class="col-sm-3 mb-4">
            <div class="card">
              <div class="card-body d-flex flex-column justify-content-center align-items-center">
                <div class="circle d-flex justify-content-center align-items-center">
                  <img class="depart-image" src="../images/Icons/gynecology.png" alt="Neurology" />
                </div>
                <div class="depart-name text-center mt-5">Gynaecology</div>
              </div>
            </div>
          </div>
          <div class="col-sm-3 mb-4">
            <div class="card">
              <div class="card-body d-flex flex-column justify-content-center align-items-center">
                <div class="circle d-flex justify-content-center align-items-center">
                  <img class="depart-image" src="../images/Icons/dentistry.png" alt="Neurology" />
                </div>
                <div class="depart-name text-center mt-5">Dentistry</div>
              </div>
            </div>
          </div>
          <div class="col-sm-3 mb-4">
            <div class="card">
              <div class="card-body d-flex flex-column justify-content-center align-items-center">
                <div class="circle d-flex justify-content-center align-items-center">
                  <img class="depart-image" src="../images/Icons/emergency.png" alt="Neurology" />
                </div>
                <div class="depart-name text-center mt-5">Emergency</div>
              </div>
            </div>
          </div>
          <div class="col-sm-3 mb-4">
            <div class="card">
              <div class="card-body d-flex flex-column justify-content-center align-items-center">
                <div class="circle d-flex justify-content-center align-items-center">
                  <img class="depart-image" src="../images/Icons/kidney.png" alt="Neurology" />
                </div>
                <div class="depart-name text-center mt-5">Urology</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-sm-6 text-center">
        <a href="Department.html" class="btn btn-primary mt-5">Explore All</a>
      </div>
    </div>
  </section>
  <!-- End Department -->

  <!-- Our Doctors -->
  <section class="doctors py-5">
    <div class="container">
      <h2 class="our-stories text-center pb-5">
        Our <span class="green-text">Doctors</span>
      </h2>
      <div class="row">
        <div class="col-lg-6 mt-4 mt-lg-0">
          <div class="member d-flex align-items-start">
            <div class="pic">
              <img src="../images/Doctors/doctors-1.jpg" class="img-fluid" alt="" />
            </div>
            <div class="member-info">
              <h4>Walter White</h4>
              <span>Chief Medical Officer</span>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius
                dicta aperiam expedita similique atque corrupti, quae voluptas
                aspernatur nesciunt accusantium maiores corporis tempore
                laborum minima repudiandae voluptatum ipsa quos inventore.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mt-4 mt-lg-0">
          <div class="member d-flex align-items-start">
            <div class="pic">
              <img src="../images/Doctors/doctors-2.jpg" class="img-fluid" alt="" />
            </div>
            <div class="member-info">
              <h4>Walter White</h4>
              <span>Chief Medical Officer</span>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius
                dicta aperiam expedita similique atque corrupti, quae voluptas
                aspernatur nesciunt accusantium maiores corporis tempore
                laborum minima repudiandae voluptatum ipsa quos inventore.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mt-4 mt-lg-0">
          <div class="member d-flex align-items-start">
            <div class="pic">
              <img src="../images/Doctors/doctors-3.jpg" class="img-fluid" alt="" />
            </div>
            <div class="member-info">
              <h4>Walter White</h4>
              <span>Chief Medical Officer</span>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius
                dicta aperiam expedita similique atque corrupti, quae voluptas
                aspernatur nesciunt accusantium maiores corporis tempore
                laborum minima repudiandae voluptatum ipsa quos inventore.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mt-4 mt-lg-0">
          <div class="member d-flex align-items-start">
            <div class="pic">
              <img src="../images/Doctors/doctors-4.jpg" class="img-fluid" alt="" />
            </div>
            <div class="member-info">
              <h4>Walter White</h4>
              <span>Chief Medical Officer</span>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius
                dicta aperiam expedita similique atque corrupti, quae voluptas
                aspernatur nesciunt accusantium maiores corporis tempore
                laborum minima repudiandae voluptatum ipsa quos inventore.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row justify-content-center mt-3">
      <div class="col-sm-6 text-center">
        <a href="Doctors.html" class="btn btn-primary mt-5">Explore All</a>
      </div>
    </div>
  </section>
  <!-- End Our Doctors -->

  <!-- Testimonials -->
  <section class="testimonials swiper">
    <div class="container">
      <h2 class="our-stories text-center pb-5">
        Client Testimonials
      </h2>
      <swiper-container class="swiper-container mySwiperTestimonial" pagination="true" effect="coverflow" grab-cursor="true"
  centered-slides="true" slides-per-view="3" coverflow-effect-rotate="3" coverflow-effect-stretch="3"
  coverflow-effect-depth="100" coverflow-effect-modifier="3" coverflow-effect-slide-shadows="true"
  initial-slide="2">
        <swiper-slide class="mb-5">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="row justify-content-center">
                <div class="col-md-8">
                  <div class="testimonial-wrap text-center p-3">
                    <div class="testimonial-item">
                      <img src="../images/Doctors/doctors-1.jpg" class="testimonial-img rounded-circle my-3" alt="" />
                      <p>
                        Proin iaculis purus consequat sem cure digni ssim
                        donec porttitora entum suscipit rhoncus. Accusantium
                        quam, ultricies eget id, aliquam eget nibh et. Maecen
                        aliquam, risus at semper.
                      </p>
                      <h3 class="pt-3">Saul Goodman</h3>
                      <h5 class="pb-3">Ceo & Founder</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </swiper-slide>
        <swiper-slide class="mb-5">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="row justify-content-center">
                <div class="col-md-8">
                  <div class="testimonial-wrap text-center p-3">
                    <div class="testimonial-item">
                      <img src="../images/Doctors/doctors-1.jpg" class="testimonial-img rounded-circle my-3" alt="" />
                      <p>
                        Proin iaculis purus consequat sem cure digni ssim
                        donec porttitora entum suscipit rhoncus. Accusantium
                        quam, ultricies eget id, aliquam eget nibh et. Maecen
                        aliquam, risus at semper.
                      </p>
                      <h3 class="pt-3">Saul Goodman</h3>
                      <h5 class="pb-3">Ceo & Founder</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </swiper-slide>
        <swiper-slide class="mb-5">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="row justify-content-center">
                <div class="col-md-8">
                  <div class="testimonial-wrap text-center p-3">
                    <div class="testimonial-item">
                      <img src="../images/Doctors/doctors-1.jpg" class="testimonial-img rounded-circle my-3" alt="" />
                      <p>
                        Proin iaculis purus consequat sem cure digni ssim
                        donec porttitora entum suscipit rhoncus. Accusantium
                        quam, ultricies eget id, aliquam eget nibh et. Maecen
                        aliquam, risus at semper.
                      </p>
                      <h3 class="pt-3">Saul Goodmannnnnnnn</h3>
                      <h5 class="pb-3">Ceo & Founder</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </swiper-slide>
        <swiper-slide class="mb-5">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="row justify-content-center">
                <div class="col-md-8">
                  <div class="testimonial-wrap text-center p-3">
                    <div class="testimonial-item">
                      <img src="../images/Doctors/doctors-1.jpg" class="testimonial-img rounded-circle my-3" alt="" />
                      <p>
                        Proin iaculis purus consequat sem cure digni ssim
                        donec porttitora entum suscipit rhoncus. Accusantium
                        quam, ultricies eget id, aliquam eget nibh et. Maecen
                        aliquam, risus at semper.
                      </p>
                      <h3 class="pt-3">Saul Goodman</h3>
                      <h5 class="pb-3">Ceo & Founder</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </swiper-slide>
        <swiper-slide class="mb-5">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="row justify-content-center">
                <div class="col-md-8">
                  <div class="testimonial-wrap text-center p-3">
                    <div class="testimonial-item">
                      <img src="../images/Doctors/doctors-1.jpg" class="testimonial-img rounded-circle my-3" alt="" />
                      <p>
                        Proin iaculis purus consequat sem cure digni ssim
                        donec porttitora entum suscipit rhoncus. Accusantium
                        quam, ultricies eget id, aliquam eget nibh et. Maecen
                        aliquam, risus at semper.
                      </p>
                      <h3 class="pt-3">Saul Goodman</h3>
                      <h5 class="pb-3">Ceo & Founder</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </swiper-slide>
        <swiper-slide class="mb-5">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="row justify-content-center">
                <div class="col-md-8">
                  <div class="testimonial-wrap text-center p-3">
                    <div class="testimonial-item">
                      <img src="../images/Doctors/doctors-1.jpg" class="testimonial-img rounded-circle my-3" alt="" />
                      <p>
                        Proin iaculis purus consequat sem cure digni ssim
                        donec porttitora entum suscipit rhoncus. Accusantium
                        quam, ultricies eget id, aliquam eget nibh et. Maecen
                        aliquam, risus at semper.
                      </p>
                      <h3 class="pt-3">Saul Goodman</h3>
                      <h5 class="pb-3">Ceo & Founder</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </swiper-slide>
     
      </swiper-container>
    </div>
  </section>
  <!-- Testimonials -->

   <!-- Our Packages -->
   <section class="packages py-5">
    <div class="container">
      <h2 class="our-stories text-center pb-5">
        Our <span class="green-text">Packages</span>
      </h2>
      <div class="container my-3">
        <div class="row mx-auto my-auto">
          <div class="col-sm-4 mb-4">
            <div class="card packages-card">
              <div class="card-body">
                <h4 class="package-title text-center mt-3 mb-5">
                  Child Health Packages
                </h4>
                <p class="package-desc px-4 text-center">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <p class="py-3">
                  The Package Includes:
                </p>
                <div class="package-list">
                  <ul class="list-unstyled mb-5">
                    <li class="mb-3">
                      <i class="fas fa-check-circle text-success me-2"></i> Liver Function Test (LFT)
                    </li>
                    <li class="mb-3">
                      <i class="fas fa-check-circle text-success me-2"></i> Complete Blood Count (CBC)
                    </li>
                    <li class="mb-3">
                      <i class="fas fa-check-circle text-success me-2"></i> Urine Regular (R/E)
                    </li>
                    <li class="mb-3">
                      <i class="fas fa-check-circle text-success me-2"></i> Stool Regular (R/E)
                    </li>
                    <li class="mb-3">
                      <i class="fas fa-check-circle text-success me-2"></i> Chest
                      X-ray
                    </li>
                    <li class="mb-3">
                      <i class="fas fa-check-circle text-success me-2"></i> Electrocardiogram
                    </li>
                  </ul>
                </div>
                <div class="package-price align-items-center text-center mb-3 mx-auto p-3">
                  <!-- Adjusted width and alignment -->
                  Rs. 4000
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-4 mb-4">
            <div class="card packages-card">
              <div class="card-body">
                <h4 class="package-title text-center mt-3 mb-5">
                  Child Health Packages
                </h4>
                <p class="package-desc px-4 text-center">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <p class="py-3">
                  The Package Includes:
                </p>
                <div class="package-list">
                  <ul class="list-unstyled mb-5">
                    <li class="mb-3">
                      <i class="fas fa-check-circle text-success me-2"></i> Liver Function Test (LFT)
                    </li>
                    <li class="mb-3">
                      <i class="fas fa-check-circle text-success me-2"></i> Complete Blood Count (CBC)
                    </li>
                    <li class="mb-3">
                      <i class="fas fa-check-circle text-success me-2"></i> Urine Regular (R/E)
                    </li>
                    <li class="mb-3">
                      <i class="fas fa-check-circle text-success me-2"></i> Stool Regular (R/E)
                    </li>
                    <li class="mb-3">
                      <i class="fas fa-check-circle text-success me-2"></i> Chest
                      X-ray
                    </li>
                    <li class="mb-3">
                      <i class="fas fa-check-circle text-success me-2"></i> Electrocardiogram
                    </li>
                  </ul>
                </div>
                <div class="package-price align-items-center text-center mb-3 mx-auto p-3">
                  <!-- Adjusted width and alignment -->
                  Rs. 4000
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-4 mb-4">
            <div class="card packages-card">
              <div class="card-body">
                <h4 class="package-title text-center mt-3 mb-5">
                  Child Health Packages
                </h4>
                <p class="package-desc px-4 text-center">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <p class="py-3">
                  The Package Includes:
                </p>
                <div class="package-list">
                  <ul class="list-unstyled mb-5">
                    <li class="mb-3">
                      <i class="fas fa-check-circle text-success me-2"></i> Liver Function Test (LFT)
                    </li>
                    <li class="mb-3">
                      <i class="fas fa-check-circle text-success me-2"></i> Complete Blood Count (CBC)
                    </li>
                    <li class="mb-3">
                      <i class="fas fa-check-circle text-success me-2"></i> Urine Regular (R/E)
                    </li>
                    <li class="mb-3">
                      <i class="fas fa-check-circle text-success me-2"></i> Stool Regular (R/E)
                    </li>
                    <li class="mb-3">
                      <i class="fas fa-check-circle text-success me-2"></i> Chest
                      X-ray
                    </li>
                    <li class="mb-3">
                      <i class="fas fa-check-circle text-success me-2"></i> Electrocardiogram
                    </li>
                  </ul>
                </div>
                <div class="package-price align-items-center text-center mb-3 mx-auto p-3">
                  Rs. 4000
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-sm-6 text-center">
        <a href="Packages.html" class="btn btn-primary mt-5">Explore All</a>
      </div>
    </div>
  </section>

@endsection