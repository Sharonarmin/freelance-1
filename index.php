<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- owl carousel -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <!-- slick -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- fancy box -->
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.fancybox.min.css" />
    <!-- data aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- style -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>


        <!-- header -->
            <?php include 'inc/header.php';?>
        <!-- header end -->




    <!-- Page content -->
    <div class="main">

        <!-- maincarousel -->

        <div class="main-slider">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/images/carousel/carousel-1.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption">
                            <div>
                                <h5 class="carousel-head">THROUGH <span>YOUR</span> VISION</h5>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/carousel/carousel-1.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption ">
                            <div>
                                <h5 class="carousel-head">THROUGH <span>YOUR</span> VISION</h5>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/carousel/carousel-1.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption ">
                            <div>
                                <h5 class="carousel-head">THROUGH <span>YOUR</span> VISION</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <!-- maincarousel end-->

        <!-- about section -->

        <div class="about-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-12 d-flex flex-column justify-content-center" data-aos="fade-up">
                        <h3 class="main-head mb-md-4 mb-3">About Us</h3>
                        <p class="para mb-md-4 mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
                            vulputate libero et velit interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad
                            litora torquent per conubia nostra, per inceptos himenaeos. Curabitur tempus urna at turpis
                            condimentum lobortis. Ut commodo efficitur neque. Ut diam quam, semper iaculis condimentum
                            ac, vestibulum eu nisl..
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit
                            interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquen</p>
                        <div class="mt-4 mb-md-0 mb-4">
                            <a href="about.html" class="btn-1">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-12" data-aos="fade-up">
                        <img src="assets/images/about.png" class="img-fluid"  alt="">
                    </div>
                </div>
            </div>
        </div>

        <!-- about section end -->

        <!-- latest project section -->

        <div class="latest-projects-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-12 latest--project" data-aos="fade-up">
                        <h3 class="main-head mt-md-5 mt-3">Our Latest Projects</h3>
                        <p class="para mt-md-5 mt-3">Lorem ipsum dolor sit amet consectetur. Dictum justo faucibus
                            pulvinar pulvinar purus donec id tristique.
                            Vulputate amet arcu sed in facilisis. Lorem ipsum dolor sit amet consectetur. Dictum justo
                            faucibus pulvinar
                            pulvinar</p>
                        <div class="my-md-5 my-3">
                            <a href="project.html" class="btn-2">View All</a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-12" data-aos="fade-up">
                        <div class="latest-project-slider owl-carousel">
                            <div class="latest-projects">
                                <a href="project.html">
                                    <div class="latest-projects-box">
                                        <img class="img-fluid" src="assets/images/latest-project/project-1.png" alt="">
                                        <div class="latest-project-dtls">
                                            <p class="head">Living Room</p>
                                            <div class="project-location"><i class="fa-regular fa-building"></i>Landmark,
                                                Kozhikode</div>
    
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-projects">
                                <a href="project.html">
                                    <div class="latest-projects-box">
                                        <img class="img-fluid" src="assets/images/latest-project/project-2.png" alt="">
                                        <div class="latest-project-dtls">
                                            <p class="head">Living Room</p>
                                            <div class="project-location"><i class="fa-regular fa-building"></i>Landmark,
                                                Kozhikode</div>
    
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-projects">
                                <a href="project.html">
                                    <div class="latest-projects-box">
                                        <img class="img-fluid" src="assets/images/latest-project/project-1.png" alt="">
                                        <div class="latest-project-dtls">
                                            <p class="head">Living Room</p>
                                            <div class="project-location"><i class="fa-regular fa-building"></i>Landmark,
                                                Kozhikode</div>
    
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- latest project section end -->

        <!-- 3d design section start -->


        <div class="three-d-design-section" data-aos="fade-up">
            <div class="container">
                <h3 class="main-head mt-3 text-center">3D Design Projects</h3>
                <p class="para  text-center mb-4">Lorem ipsum dolor sit amet consectetur. Dictum justo faucibus
                    pulvinar pulvinar purus donec id tristique.</p>


                <div class="three-d-slider owl-carousel">
                    
                    <div class="slider-item">
                        <a href="three-d.html">
                            <div>
                                <img class="three-d-slider-img" src="assets/images/three-d/3d1.jpg" alt="">
                            </div>
                            <div class="thrre-d-card-dtls">
                                <i class="fa-solid fa-house-chimney"></i>
                                <span>Villa 304</span>
                            </div>
                        </a>
                    </div>
                    <div class="slider-item">
                        <a href="three-d.html">
                            <div>
                                <img class="three-d-slider-img" src="assets/images/three-d/3d2.PNG" alt="">
                            </div>
                            <div class="thrre-d-card-dtls">
                                <i class="fa-solid fa-house-chimney"></i>
                                <span>Villa 304</span>
                            </div>
                        </a>
                    </div>
                    <div class="slider-item">
                        <a href="three-d.html">
                            <div>
                                <img class="three-d-slider-img" src="assets/images/three-d/3d3.jpeg" alt="">
                            </div>
                            <div class="thrre-d-card-dtls">
                                <i class="fa-solid fa-house-chimney"></i>
                                <span>Villa 304</span>
                            </div>
                        </a>
                    </div>
                    <div class="slider-item">
                        <a href="three-d.html">
                            <div>
                                <img class="three-d-slider-img" src="assets/images/three-d/3d4.jpg" alt="">
                            </div>
                            <div class="thrre-d-card-dtls">
                                <i class="fa-solid fa-house-chimney"></i>
                                <span>Villa 304</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>


        <!-- 3d design section end -->
        
        

        <!-- client section start -->

        <div class="client-section" data-aos="fade-up">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <h3 class="main-head mt-md-5 mt-3 text-center">Our Clients</h3>
                        <p class="para text-center">Lorem ipsum dolor sit amet consectetur. Ut consectetur donec nisl
                            sed.</p>
                    </div>
                    <div class="col-lg-12 col-md-12 d-flex justify-content-center align-items-center">

                        <div class="client-slider owl-carousel">

                            <div class="item">
                                <div class="client-logo">
                                    <img src="assets/images/client/logo-1.png" alt="">
                                </div>
                                <div class="client-logo">
                                    <img src="assets/images/client/logo-2.png" alt="">
                                </div>
                            </div>

                            <div class="item">
                                <div class="client-logo">
                                    <img src="assets/images/client/logo-3.png" alt="">
                                </div>
                                <div class="client-logo">
                                    <img src="assets/images/client/logo-4.png" alt="">
                                </div>
                            </div>

                            <div class="item">
                                <div class="client-logo">
                                    <img src="assets/images/client/logo-5.png" alt="">
                                </div>
                                <div class="client-logo">
                                    <img src="assets/images/client/logo-6.png" alt="">
                                </div>
                            </div>

                            <div class="item">
                                <div class="client-logo">
                                    <img src="assets/images/client/logo-7.png" alt="">
                                </div>
                                <div class="client-logo">
                                    <img src="assets/images/client/logo-8.png" alt="">
                                </div>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>

        <!-- client section end -->

        <!-- service section start -->

        <div class="service-section" data-aos="fade-up">
            <div class="container">
                <div>
                    <h3 class="main-head text-center">Our Services</h3>
                    <p class="para text-center">Lorem ipsum dolor sit amet consectetur. amet consectetur. Ut consectetur
                        donec nisl sed.</p>
                </div>
                <div class="service-card-section">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 d-flex">
                            <div class="service-card">
                                <div class="service-card-hover-bg"></div>
                                <img class="service-sm-img" src="assets/images/service/consultation-sm 1.png" alt="">
                                <h6>Building Consulting</h6>
                                <p>Lorem ipsum dolor sit amet, cons ctetur adipiscing elit. Nunc vulputate libero et
                                    velit interdum, ac aliquet odio mattis. Class aptent.</p>
                                <a href="service.html">View More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 d-flex">
                            <div class="service-card">
                                <div class="service-card-hover-bg"></div>
                                <img class="service-sm-img" src="assets/images/service/elevation-sm 1.png" alt="">
                                <h6>Elevation Designing</h6>
                                <p>Lorem ipsum dolor sit amet, cons ctetur adipiscing elit. Nunc vulputate libero et
                                    velit interdum, ac aliquet odio mattis. Class aptent.</p>
                                <a href="service.html">View More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 d-flex">
                            <div class="service-card">
                                <div class="service-card-hover-bg"></div>
                                <img class="service-sm-img" src="assets/images/service/civil-construction-sm 1.png"
                                    alt="">
                                <h6>Civil Constructions</h6>
                                <p>Lorem ipsum dolor sit amet, cons ctetur adipiscing elit. Nunc vulputate libero et
                                    velit interdum, ac aliquet odio mattis. Class aptent.</p>
                                <a href="service.html">View More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 d-flex">
                            <div class="service-card">
                                <div class="service-card-hover-bg"></div>
                                <img class="service-sm-img" src="assets/images/service/landscape-sm 1.png" alt="">
                                <h6>Landscaping</h6>
                                <p>Lorem ipsum dolor sit amet, cons ctetur adipiscing elit. Nunc vulputate libero et
                                    velit interdum, ac aliquet odio mattis. Class aptent.</p>
                                <a href="service.html">View More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 d-flex">
                            <div class="service-card">
                                <div class="service-card-hover-bg"></div>
                                <img class="service-sm-img" src="assets/images/service/water-pool-sm 1.png" alt="">
                                <h6>Water pool Designing</h6>
                                <p>Lorem ipsum dolor sit amet, cons ctetur adipiscing elit. Nunc vulputate libero et
                                    velit interdum, ac aliquet odio mattis. Class aptent.</p>
                                <a href="service.html">View More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 d-flex">
                            <div class="service-card">
                                <div class="service-card-hover-bg"></div>
                                <img class="service-sm-img" src="assets/images/service/approval-sm 1.png" alt="">
                                <h6>Approval Completion</h6>
                                <p>Lorem ipsum dolor sit amet, cons ctetur adipiscing elit. Nunc vulputate libero et
                                    velit interdum, ac aliquet odio mattis. Class aptent.</p>
                                <a href="service.html">View More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 d-flex">
                            <div class="service-card">
                                <div class="service-card-hover-bg"></div>
                                <img class="service-sm-img" src="assets/images/service/interior-sm 1.png" alt="">
                                <h6>Interior Designing</h6>
                                <p>Lorem ipsum dolor sit amet, cons ctetur adipiscing elit. Nunc vulputate libero et
                                    velit interdum, ac aliquet odio mattis. Class aptent.</p>
                                <a href="service.html">View More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 d-flex">
                            <div class="service-card">
                                <div class="service-card-hover-bg"></div>
                                <img class="service-sm-img" src="assets/images/service/walkthrough-sm 1.png" alt="">
                                <h6>Walk Through Modeling</h6>
                                <p>Lorem ipsum dolor sit amet, cons ctetur adipiscing elit. Nunc vulputate libero et
                                    velit interdum, ac aliquet odio mattis. Class aptent.</p>
                                <a href="service.html">View More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 d-flex">
                            <div class="service-card">
                                <div class="service-card-hover-bg"></div>
                                <img class="service-sm-img" src="assets/images/service/wall-sm 1.png" alt="">
                                <h6>Landscaping & Compound Wall</h6>
                                <p>Lorem ipsum dolor sit amet, cons ctetur adipiscing elit. Nunc vulputate libero et
                                    velit interdum, ac aliquet odio mattis. Class aptent.</p>
                                <a href="service.html">View More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- service section end -->


        <!-- testimonial section start  -->

        <div class="testimonial-section" data-aos="fade-up">
            <div class="container">
                <h3 class="main-head mt-md-3 mt-3">What Our Customers Say !</h3>
                <div class="testimonial-slider owl-carousel">
                    <div class="testimonial-box">
                        <div class="profile-sec">
                            <div>
                                <img src="assets/images/testimonial/profile-1.png" alt="">
                            </div>
                            <div class="details">
                                <p class="name">John</p>
                                <p class="designation">Engineer</p>
                                <div class="starRating">
                                    <div>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="review">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cursus nibh mauris, nec turpis
                                orci lectus maecenas.
                                Suspendisse sed magna eget nibh in turpis. Consequat duis diam lacus arcu.</p>
                        </div>
                    </div>
                    <div class="testimonial-box">
                        <div class="profile-sec">
                            <div>
                                <img src="assets/images/testimonial/profile-2.png" alt="">
                            </div>
                            <div class="details">
                                <p class="name">Vinod Kumar</p>
                                <p class="designation">Doctor</p>
                                <div class="starRating">
                                    <div>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="review">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cursus nibh mauris, nec turpis
                                orci lectus maecenas.
                                Suspendisse sed magna eget nibh in turpis. Consequat duis diam lacus arcu.</p>
                        </div>
                    </div>
                    <div class="testimonial-box">
                        <div class="profile-sec">
                            <div>
                                <img src="assets/images/testimonial/profile-3.png" alt="">
                            </div>
                            <div class="details">
                                <p class="name">Aleena</p>
                                <p class="designation">Photographer</p>
                                <div class="starRating">
                                    <div>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="review">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cursus nibh mauris, nec turpis
                                orci lectus maecenas.
                                Suspendisse sed magna eget nibh in turpis. Consequat duis diam lacus arcu.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- testimonial section end -->

    <!-- cta section start -->

    <div class="cta-section" data-aos="fade-up">
        <div class="cta-section-img">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-lg-8 col-md-12 col-12 d-flex flex-column justify-content-center">
                        <p class="cta-head">Get a free consultation. <br>Just leave a request below </p>
                        <div class="cta-input">
                            <input type="text" placeholder="Enter Your Name" name="" id="">
                            <input type="text" placeholder="Enter Your Number" name="" id="">
                            <a href="#" class="">Connect Us</a>
                        </div>
                    </div>
                    <div class="col-lg-4 d-lg-block d-md-none d-none d-flex">
                        <div class="cta-right-img">
                            <div class="cta-img-div">
                                <img src="assets/images/cta-banner-side-img.png" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- cta section end -->

        
    <!-- img gallery section start -->



    <div class="masionary-container">
        <div class="item">                    
            <a href="assets/images/gallery/gallery-1.png" data-fancybox="group">
            <span class="thumb"> <img src="assets/images/gallery/gallery-1.png" /></span></a>
        </div>
        <div class="item">
            <a href="assets/images/gallery/gallery-5.png" data-fancybox="group">
                <span class="thumb"> <img src="assets/images/gallery/gallery-5.png" /></span>
            </a>
        </div>
        <div class="item">
            <a href="assets/images/gallery/gallery-2.png" data-fancybox="group">
                <span class="thumb"> <img src="assets/images/gallery/gallery-2.png" /></span>
            </a>
        </div>
        <div class="item">
            <a href="assets/images/gallery/gallery-3.png" data-fancybox="group">
                <span class="thumb"> <img src="assets/images/gallery/gallery-3.png" /></span>
            </a>
        </div>
        <div class="item">
            <a href="assets/images/gallery/gallery-6.png" data-fancybox="group">
                <span class="thumb"> <img src="assets/images/gallery/gallery-6.png" /></span>
            </a>
        </div>
        <div class="item">
            <a href="assets/images/gallery/gallery-7.png" data-fancybox="group">
                <span class="thumb"> <img src="assets/images/gallery/gallery-7.png" /></span>
            </a>
        </div>
        <div class="item">
            <a href="assets/images/gallery/gallery-8.png" data-fancybox="group">
                <span class="thumb"> <img src="assets/images/gallery/gallery-8.png" /></span>
            </a>
        </div>
        <div class="item">
            <a href="assets/images/gallery/gallery-9.png" data-fancybox="group">
                <span class="thumb"> <img src="assets/images/gallery/gallery-9.png" /></span>
            </a>
        </div>
        <div class="item">
            <a href="assets/images/gallery/gallery-10.png" data-fancybox="group">
                <span class="thumb"> <img src="assets/images/gallery/gallery-10.png" /></span>
            </a>
        </div>
        <div class="item">
            <a href="assets/images/gallery/gallery-11.png" data-fancybox="group">
                <span class="thumb"> <img src="assets/images/gallery/gallery-11.png" /></span>
            </a>
        </div>
      </div>





<!-- img gallery section end -->

    <!-- footer start -->
    <?php include 'inc/footer.php';?>
    <!-- footer end -->



    </div>








    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
    <!-- smooth scroll -->
    <script src="assets/js/SmoothScrollMouseWheel.js"></script>
    <!-- owl carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
    <!-- slick -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- gallery -->
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script>
    <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.js"></script>
    <!-- fancybox -->
    <script src="assets/js/jquery.fancybox.min.js"></script>
    <!-- aos -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <!-- lottie -->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <!-- main js -->
    <script src="assets/js/main.js"></script>




</body>
</html>