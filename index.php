<?php echo get_header(); ?>

<body>
    <div class="site-wrapper">
        <div class="main-overlay"></div>
        <header class="header-default">
            <nav class="navbar navbar-expand-lg">
                <div class="container-xl">
                    <!-- logo  -->
                    <a href="index.html" class="navbar-brand">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="">
                    </a>

                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item dropdown active">
                                <a href="index.html" class="nav-link dropdown-toggle">Home</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#" class="dropdown-item">Fashion</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown-item">Movies</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown-item">Electronic</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown-item">Cricket</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown-item">Technology</a>
                                    </li>

                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Latest</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Trending</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Contact</a>
                            </li>
                        </ul>
                    </div>

                    <!-- right side of header  -->
                    <div class="header-right">
                        <ul class="social-icons list-unstyled list-inline mb-0">
                            <li class="list-inline-item">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><i class="fab fa-itunes"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><i class="fab fa-pinterest"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </li>
                        </ul>

                        <!-- buttons  -->
                        <div class="header-buttons">
                            <button class="search icon-button">
                                <i class="icon-magnifier"></i>
                            </button>
                            <button class="burger-menu icon-button">
                                <span class="burger-icon"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </nav>


        </header>



        <!-- section starts  -->
        <section id="hero">
            <div class="container-xl">
                <div class="row gy-4">
                    <div class="col-lg-8">

                        <div class="post featured-post-lg">
                            <div class="details clearfix">
                                <a href="#" class="category-badge">Finance</a>
                                <h2 class="post-title">
                                    <a href="#">3 Things to avoid while investing in stock market as a beginner</a>
                                </h2>
                                <ul class="meta list-inline mb-0">
                                    <li class="list-inline-item">
                                        <a href="#">Techie Coder</a>
                                    </li>
                                    <li class="list-inline-item">30 May 2021</li>
                                </ul>
                            </div>
                            <a href="#">
                                <div class="thumb rounded">
                                    <div class="inner data-bg-image" data-bg-image="images/posts/featured-lg.jpg">
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="post-tabs rounded bordered">
                            <ul class="nav nav-tabs nav-pills nav-fill" id="postTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button aria-controls="popular" aria-selected="true" class="nav-link active" data-bs-target="#popular" data-bs-toggle="tab" id="popular-tab" role="tab" type="button">
                                        Popular
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button aria-controls="recent" aria-selected="false" class="nav-link" data-bs-target="#recent" data-bs-toggle="tab" id="recent-tab" role="tab" type="button">
                                        Recent
                                    </button>
                                </li>

                            </ul>

                            <!-- content  -->
                            <div class="tab-content" id="postsTabContent">
                                <!-- loader -->
                                <div class="lds-dual-ring"></div>
                                <!-- pop post  -->

                                <div class="tab-pane fade show active" id="popular" aria-labelledby="popular-tab" role="tabpanel">
                                    <!-- post  -->
                                    <div class="post post-list-sm circle">
                                        <div class="thumb circle">
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="images/posts/tabs-1.jpg" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0">
                                                <a href="#">Bitcoin price raise after sudden fall</a>
                                            </h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">24 May 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- post2  -->
                                    <div class="post post-list-sm circle">
                                        <div class="thumb circle">
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="images/posts/tabs-2.jpg" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0">
                                                <a href="#">Clubhouse Crosses 1Mn Downloads On Play Store</a>
                                            </h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">26 May 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- post3  -->
                                    <div class="post post-list-sm circle">
                                        <div class="thumb circle">
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="images/posts/tabs-3.jpg" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0">
                                                <a href="#">Check current Gold Price of 24k</a>
                                            </h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">28 May 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- post4  -->
                                    <div class="post post-list-sm circle">
                                        <div class="thumb circle">
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="images/posts/tabs-4.png" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0">
                                                <a href="#">Improve your mails with Grammarly</a>
                                            </h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">01 Jun 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- recent  -->
                                <div class="tab-pane fade" id="recent" aria-labelledby="recent-tab" role="tabpanel">
                                    <!-- post  -->
                                    <div class="post post-list-sm circle">
                                        <div class="thumb circle">
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="images/posts/tabs-2.jpg" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0">
                                                <a href="#">Clubhouse breaking records of many apps</a>
                                            </h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">24 May 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- post2  -->
                                    <div class="post post-list-sm circle">
                                        <div class="thumb circle">
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="images/posts/tabs-1.jpg" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0">
                                                <a href="#">At what age you should start investing</a>
                                            </h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">26 May 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- post3  -->
                                    <div class="post post-list-sm circle">
                                        <div class="thumb circle">
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="images/posts/tabs-5.jpg" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0">
                                                <a href="#">Sonu sood foundation providing help in COVID-19</a>
                                            </h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">28 Jun 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- post4  -->
                                    <div class="post post-list-sm circle">
                                        <div class="thumb circle">
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="images/posts/tabs-3.jpg" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0">
                                                <a href="#">Should we invest in soverign gold bonds</a>
                                            </h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">04 Jun 2021</li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </section>

        <!-- main content  -->

        <section class="main-content">
            <div class="container-xl">
                <div class="row gy-4">

                    <!-- left part 1st section  -->
                    <div class="col-lg-8">
                        <div class="section-header">
                            <h3 class="section-title">Editor's Pick</h3>
                        </div>

                        <div class="padding-30 rounded bordered">
                            <div class="row gy-5">
                                <div class="col-sm-6">
                                    <!-- post  -->
                                    <div class="post">
                                        <div class="thumb rounded">
                                            <a href="#" class="category-badge position-absolute">Lifestyle</a>
                                            <span class="post-format">
                                                <i class="icon-picture"></i>
                                            </span>
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="images/posts/editors-lg.jpg" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <ul class="meta list-inline mt-4 mb-0">
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    <img class="author" src="images/other/author-sm.jpg" alt="">
                                                    Techie Coder
                                                </a>
                                            </li>
                                            <li class="list-inline-item">05 Jun 2021</li>
                                        </ul>
                                        <h5 class="post-title mb-3 mt-3">
                                            <a href="#">3 must visit Place in switzerland</a>
                                        </h5>
                                        <p class="excerpt mb-0">
                                            This is Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo,
                                            quasi.

                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="post post-list-sm square">
                                        <div class="thumb rounded">
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="images/posts/editor-side-1.jpg" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0">
                                                <a href="#">
                                                    2 Policemen saved life like a hero
                                                </a>
                                            </h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">25 May 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="post post-list-sm square">
                                        <div class="thumb rounded">
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="images/posts/editor-side-2.jpg" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0">
                                                <a href="#">
                                                    3 ways to remove dark spots naturally
                                                </a>
                                            </h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">25 May 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="post post-list-sm square">
                                        <div class="thumb rounded">
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="images/posts/editor-side-3.jpg" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0">
                                                <a href="#">
                                                    Top 10 Interior designers for your dream home.
                                                </a>
                                            </h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">28 May 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="post post-list-sm square">
                                        <div class="thumb rounded">
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="images/posts/editor-side-4.jpg" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0">
                                                <a href="#">
                                                    Learn how to make desert at home.
                                                </a>
                                            </h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">28 May 2021</li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="spacer" data-height="50"></div>

                        <div class="section-header">
                            <h3 class="section-title">Trending</h3>
                        </div>

                        <div class="padding-30 rounded bordered">
                            <div class="row gy-5">
                                <div class="col-sm-6">
                                    <div class="post">
                                        <div class="thumb rounded">
                                            <a href="#" class="category-badge position-absolute">Business</a>
                                            <span class="post-format">
                                                <i class="icon-picture"></i>
                                            </span>
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="images/posts/tren-lg-1.jpg" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <ul class="meta list-inline mt-4 mb-0">
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    <img src="images/other/author-sm.jpg" class="author" alt="">
                                                    Techie Coder
                                                </a>
                                            </li>
                                            <li class="list-inline-item">24 May 2021</li>
                                        </ul>
                                        <h5 class="post-title mb-3 mt-3">
                                            <a href="#">Bitcoin investors lost $14.2bn in recent cypto crash</a>
                                        </h5>
                                        <p class="excerpt mb-0">
                                            This is Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus,
                                            id.
                                        </p>
                                    </div>

                                    <div class="post post-list-sm square before-seperator">
                                        <div class="thumb rounded">
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="images/posts/tren-sm-1.jpg" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0">
                                                <a href="#">IPL 2021 to resume in sept 3rd week in UAE</a>
                                            </h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">25 May 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="post post-list-sm square before-seperator">
                                        <div class="thumb rounded">
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="images/posts/tren-sm-2.jpg" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0">
                                                <a href="#">HDFC Bank concerned over retail asset quality in
                                                    near-term</a>
                                            </h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">25 May 2021</li>
                                            </ul>
                                        </div>
                                    </div>




                                </div>

                                <div class="col-sm-6">
                                    <div class="post">
                                        <div class="thumb rounded">
                                            <a href="#" class="category-badge position-absolute">Inspiration</a>
                                            <span class="post-format">
                                                <i class="icon-earphones"></i>
                                            </span>
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="images/posts/tren-lg-2.jpg" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <ul class="meta list-inline mt-4 mb-0">
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    <img src="images/other/author-sm.jpg" class="author" alt="">
                                                    Techie Coder
                                                </a>
                                            </li>
                                            <li class="list-inline-item">29 May 2021</li>
                                        </ul>
                                        <h5 class="post-title mb-3 mt-3">
                                            <a href="#">Spotify gives a discount for student</a>
                                        </h5>
                                        <p class="excerpt mb-0">
                                            This is Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus,
                                            id.
                                        </p>
                                    </div>

                                    <div class="post post-list-sm square before-seperator">
                                        <div class="thumb rounded">
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="images/posts/tren-sm-3.jpg" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0">
                                                <a href="#">Arogya ap to display vaccination status</a>
                                            </h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">25 May 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="post post-list-sm square before-seperator">
                                        <div class="thumb rounded">
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="images/posts/tren-sm-4.jpg" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0">
                                                <a href="#">Petrol, diesel prices hiked again today.</a>
                                            </h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">25 May 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="spacer" data-height="50"></div>

                        <div class="section-header">
                            <h3 class="section-title">Inspiration</h3>
                            <div class="slick-arrows-top">
                                <buttton class="carousel-topNav-prev slick-custom-buttons" type="button" data-role="none" aria-label="Previous">
                                    <i class="icon-arrow-left"></i>
                                </buttton>
                                <buttton class="carousel-topNav-next slick-custom-buttons" type="button" data-role="none" aria-label="Next">
                                    <i class="icon-arrow-right"></i>
                                </buttton>
                            </div>
                        </div>

                        <div class="row post-carousel-twoCol post-carousel">
                            <div class="post post-over-content col-md-6">
                                <div class="details clearfix">
                                    <a href="#" class="category-badge">Entertainment</a>
                                    <h4 class="post-title">
                                        <a href="#">Amazon prime video to coproduce "Ram Setu"</a>
                                    </h4>
                                    <ul class="meta list-inline mb-0">
                                        <li class="list-inline-item">
                                            <a href="#">Techie Coder</a>
                                        </li>
                                        <li class="list-inline-item">03 Jun 2021</li>
                                    </ul>
                                </div>
                                <a href="#">
                                    <div class="thumb rounded">
                                        <div class="inner">
                                            <img src="images/posts/insp-1.jpg" alt="">
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="post post-over-content col-md-6">
                                <div class="details clearfix">
                                    <a href="#" class="category-badge">Technology</a>
                                    <h4 class="post-title">
                                        <a href="#">How to prepare your Google account afterlife.</a>
                                    </h4>
                                    <ul class="meta list-inline mb-0">
                                        <li class="list-inline-item">
                                            <a href="#">Techie Coder</a>
                                        </li>
                                        <li class="list-inline-item">02 Jun 2021</li>
                                    </ul>
                                </div>
                                <a href="#">
                                    <div class="thumb rounded">
                                        <div class="inner">
                                            <img src="images/posts/insp-2.jpg" alt="">
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="post post-over-content col-md-6">
                                <div class="details clearfix">
                                    <a href="#" class="category-badge">Education</a>
                                    <h4 class="post-title">
                                        <a href="#">Learn from top B-Schools at 1/10th the fee: upGrad</a>
                                    </h4>
                                    <ul class="meta list-inline mb-0">
                                        <li class="list-inline-item">
                                            <a href="#">Techie Coder</a>
                                        </li>
                                        <li class="list-inline-item">01 Jun 2021</li>
                                    </ul>
                                </div>
                                <a href="#">
                                    <div class="thumb rounded">
                                        <div class="inner">
                                            <img src="images/posts/insp-3.jpg" alt="">
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>


                        <div class="spacer" data-height="50"></div>

                        <div class="section-header">
                            <h3 class="section-title">Latest Posts</h3>
                        </div>

                        <div class="padding-30 rounded bordered">
                            <div class="row">
                                <div class="col-md-12 col-sm-6">
                                    <!-- post  -->
                                    <div class="post post-list clearfix">
                                        <div class="thumb rounded">
                                            <span class="post-format-sm">
                                                <i class="icon-picture"></i>
                                            </span>
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="images/posts/latest-1.jpg" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details">
                                            <ul class="meta list-inline mb-3">
                                                <li class="list-inline-item">
                                                    <a href="#">
                                                        <img src="images/other/author-sm.jpg" class="author" alt="">
                                                        Techie Coder
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Trending</a>
                                                </li>
                                                <li class="list-inline-item">26 May 2021</li>
                                            </ul>
                                            <h5 class="post-tile">
                                                <a href="#">
                                                    360-seater plane flies to Dubai from Mumbai with only 1 Passenger
                                                </a>
                                            </h5>
                                            <p class="excerpt mb-0">
                                                This is Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi,
                                                iure.
                                            </p>
                                            <div class="post-bottom clearfix d-flex align-items-center">
                                                <div class="social-share me-auto">
                                                    <button class="toggle-button icon-share"></button>
                                                    <ul class="icons list-unstyled list-inline mb-0">
                                                        <li class="list-inline-item">
                                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#"><i class="fab fa-pinterest"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#"><i class="fab fa-telegram-plane"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#"><i class="far fa-envelope"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="more-button float-end">
                                                    <a href="#"><span class="icon-options"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-6">
                                    <!-- post  -->
                                    <div class="post post-list clearfix">
                                        <div class="thumb rounded">
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="images/posts/latest-2.jpg" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details">
                                            <ul class="meta list-inline mb-3">
                                                <li class="list-inline-item">
                                                    <a href="#">
                                                        <img src="images/other/author-sm.jpg" class="author" alt="">
                                                        Techie Coder
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Technology</a>
                                                </li>
                                                <li class="list-inline-item">26 May 2021</li>
                                            </ul>
                                            <h5 class="post-tile">
                                                <a href="#">
                                                    MS-teams to enhancce user experience with dev updates
                                                </a>
                                            </h5>
                                            <p class="excerpt mb-0">
                                                This is Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi,
                                                iure.
                                            </p>
                                            <div class="post-bottom clearfix d-flex align-items-center">
                                                <div class="social-share me-auto">
                                                    <button class="toggle-button icon-share"></button>
                                                    <ul class="icons list-unstyled list-inline mb-0">
                                                        <li class="list-inline-item">
                                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#"><i class="fab fa-pinterest"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#"><i class="fab fa-telegram-plane"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#"><i class="far fa-envelope"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="more-button float-end">
                                                    <a href="#"><span class="icon-options"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-6">
                                    <!-- post  -->
                                    <div class="post post-list clearfix">
                                        <div class="thumb rounded">
                                            <span class="post-format-sm">
                                                <i class="icon-camrecorder"></i>
                                            </span>
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="images/posts/latest-3.jpg" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details">
                                            <ul class="meta list-inline mb-3">
                                                <li class="list-inline-item">
                                                    <a href="#">
                                                        <img src="images/other/author-sm.jpg" class="author" alt="">
                                                        Techie Coder
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Technology</a>
                                                </li>
                                                <li class="list-inline-item">26 May 2021</li>
                                            </ul>
                                            <h5 class="post-tile">
                                                <a href="#">
                                                    India responds to whatsapp, says no intention to violate ROP.
                                                </a>
                                            </h5>
                                            <p class="excerpt mb-0">
                                                This is Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi,
                                                iure.
                                            </p>
                                            <div class="post-bottom clearfix d-flex align-items-center">
                                                <div class="social-share me-auto">
                                                    <button class="toggle-button icon-share"></button>
                                                    <ul class="icons list-unstyled list-inline mb-0">
                                                        <li class="list-inline-item">
                                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#"><i class="fab fa-pinterest"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#"><i class="fab fa-telegram-plane"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#"><i class="far fa-envelope"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="more-button float-end">
                                                    <a href="#"><span class="icon-options"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-6">
                                    <!-- post  -->
                                    <div class="post post-list clearfix">
                                        <div class="thumb rounded">
                                            <a href="#">
                                                <div class="inner">
                                                    <img src="images/posts/latest-4.jpg" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details">
                                            <ul class="meta list-inline mb-3">
                                                <li class="list-inline-item">
                                                    <a href="#">
                                                        <img src="images/other/author-sm.jpg" class="author" alt="">
                                                        Techie Coder
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Finance</a>
                                                </li>
                                                <li class="list-inline-item">26 May 2021</li>
                                            </ul>
                                            <h5 class="post-tile">
                                                <a href="#">
                                                    Sensex closes 380pts higher, Nifty at 15,302; metal, power drag
                                                </a>
                                            </h5>
                                            <p class="excerpt mb-0">
                                                This is Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi,
                                                iure.
                                            </p>
                                            <div class="post-bottom clearfix d-flex align-items-center">
                                                <div class="social-share me-auto">
                                                    <button class="toggle-button icon-share"></button>
                                                    <ul class="icons list-unstyled list-inline mb-0">
                                                        <li class="list-inline-item">
                                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#"><i class="fab fa-pinterest"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#"><i class="fab fa-telegram-plane"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#"><i class="far fa-envelope"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="more-button float-end">
                                                    <a href="#"><span class="icon-options"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button class="btn btn-simple">Load More</button>
                                </div>
                            </div>
                        </div>
                        <!-- left part over here  -->
                    </div>
                    <!-- right part starts from here  -->


                    <?php echo get_sidebar(); ?>


                    <?php echo get_footer(); ?>