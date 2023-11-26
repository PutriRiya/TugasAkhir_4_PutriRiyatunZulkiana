@extends('userlayouts.app')
@section('content')
    <!--Banner Content-->
    <div id="banner-content" class="row clearfix">

        <div class="col-38">

            @foreach ($ho as $h)    
                <div class="section-heading">
                    <h1>{{ $h->maintitle }}</h1>
                    <h2>{{ $h->subtitle }}</h2>
                </div>
            @endforeach

            <!--Call to Action-->
                {{-- <a href="#" class="button">START CREATING TODAY</a> --}}
            <!--End Call to Action-->

        </div>

        </div><!--End of Row-->
    </header>

    <!--Main Content Area-->
    <main id="content">

        <!--Introduction-->
        @foreach ($about as $a)            
        <section id="about" class="introduction scrollto">

            <div class="row clearfix">

                <div class="col-3">
                    <div class="section-heading">
                        <h3>ABOUT</h3>
                        <h2 class="section-title">{{ $a->question }}</h2>
                        <p class="section-subtitle">{{ $a->answer }}</p>
                    </div>

                </div>

                <div class="col-2-3">

                    <!--Icon Block-->
                    <div class="col-2 icon-block icon-top wow fadeInUp" data-wow-delay="0.1s">
                        <!--Icon-->
                        <div class="icon">
                            <i class="fa fa-bolt fa-2x"></i>
                        </div>
                        <!--Icon Block Description-->
                        <div class="icon-block-description">
                            <h4>{{ $a->label1 }}</h4>
                            <p>{{ $a->deskripsi1 }}</p>
                        </div>
                    </div>
                    <!--End of Icon Block-->

                    <!--Icon Block-->
                    <div class="col-2 icon-block icon-top wow fadeInUp" data-wow-delay="0.3s">
                        <!--Icon-->
                        <div class="icon">
                            <i class="fa fa-bolt fa-2x"></i>
                        </div>
                        <!--Icon Block Description-->
                        <div class="icon-block-description">
                            <h4>{{ $a->label2 }}</h4>
                            <p>{{ $a->deskripsi2 }}</p>
                        </div>
                    </div>
                    <!--End of Icon Block-->

                    <!--Icon Block-->
                    <div class="col-2 icon-block icon-top wow fadeInUp" data-wow-delay="0.5s">
                        <!--Icon-->
                        <div class="icon">
                            <i class="fa fa-tablet fa-2x"></i>
                        </div>
                        <!--Icon Block Description-->
                        <div class="icon-block-description">
                            <h4>{{ $a->label3 }}</h4>
                            <p>{{ $a->deskripsi3 }}</p>
                        </div>
                    </div>
                    <!--End of Icon Block-->

                    <!--Icon Block-->
                    <div class="col-2 icon-block icon-top wow fadeInUp" data-wow-delay="0.5s">
                        <!--Icon-->
                        <div class="icon">
                            <i class="fa fa-rocket fa-2x"></i>
                        </div>
                        <!--Icon Block Description-->
                        <div class="icon-block-description">
                            <h4>{{ $a->label4 }}</h4>
                            <p>{{ $a->deskripsi4 }}</p>
                        </div>
                    </div>
                    <!--End of Icon Block-->

                </div>

            </div>


        </section>
        @endforeach
        <!--End of Introduction-->


        <!--Gallery-->
        <aside id="gallery" class="row text-center scrollto clearfix" data-featherlight-gallery
                    data-featherlight-filter="a">

                @foreach ($galeri as $g)    
                <a href="/storage/image/{{ $g->image }}" data-featherlight="image" class="col-3 wow fadeIn"
                    data-wow-delay="0.1s"><img src="/storage/image/{{ $g->image }}" alt="Landing Page"/></a>
                @endforeach

        </aside>
        <!--End of Gallery-->


        <!--Content Section-->
        @foreach ($servis as $s)            
        <div id="services" class="scrollto clearfix">

            <div class="row no-padding-bottom clearfix">


                <!--Content Left Side-->
                <div class="col-3">
                    <!--User Testimonial-->
                    <blockquote class="testimonial text-right bigtest">
                        <q>{{ $s->quote }}</q>
                        <footer>— Anak Gunung</footer>
                    </blockquote>
                    <!-- End of Testimonial-->

                </div>
                <!--End Content Left Side-->

                <!--Content of the Right Side-->
                <div class="col-3">
                    <div class="section-heading">
                        <h3>BELIEVING</h3>
                        <h2 class="section-title">{{ $s->title }}</h2>
                        <p class="section-subtitle">{{ $s->subtitle }}</p>
                    </div>
                    <p>{{ $s->isi }}
                    </p>
                    <!-- Just replace the Video ID "UYJ5IjBRlW8" with the ID of your video on YouTube (Found within the URL) -->
                    <a href="{{ $h->link }}" data-videosite="youtube" class="button video link-lightbox">
                        WATCH VIDEO <i class="fa fa-play" aria-hidden="true"></i>
                    </a>
                </div>
                <!--End Content Right Side-->

                <div class="col-3">
                    <img src="/storage/service/{{ $s->image }}" alt="Dancer"/>
                </div>

            </div>

        </div>
        @endforeach
        <!--End of Content Section-->

        <!--Articles Section-->
        {{-- <aside id="article" class="row text-center scrollto clearfix">

            <a href="" class="col-3 wow fadeIn" data-wow-delay="0.1s">
                <article class="all-browsers">
                    <article class="browser">
                        <h2>Google Chrome</h2>
                        <p>Google Chrome is a web browser developed by Google, released in 2008. Chrome is the world's most popular web browser today!</p>
                    </article>
                </article>
            </a>
        
        </aside>         --}}
        <!--End of Articles Section-->

        <!--Testimonials-->
        <aside id="testimonials" class="scrollto text-center" data-enllax-ratio=".2">

            {{-- <div class="row clearfix">

                <div class="section-heading">
                    <h3>FEEDBACK</h3>
                    <h2 class="section-title">What our customers are saying</h2>
                </div>

                <!--User Testimonial-->
                <blockquote class="col-3 testimonial classic">
                    <img src="images/user-images/user-1.jpg" alt="User"/>
                    <q>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna aliqua</q>
                    <footer>John Doe - Happy Customer</footer>
                </blockquote>
                <!-- End of Testimonial-->

                <!--User Testimonial-->
                <blockquote class="col-3 testimonial classic">
                    <img src="images/user-images/user-2.jpg" alt="User"/>
                    <q>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna aliqua</q>
                    <footer>Roslyn Doe - Happy Customer</footer>
                </blockquote>
                <!-- End of Testimonial-->

                <!--User Testimonial-->
                <blockquote class="col-3 testimonial classic">
                    <img src="images/user-images/user-3.jpg" alt="User"/>
                    <q>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna aliqua</q>
                    <footer>Thomas Doe - Happy Customer</footer>
                </blockquote>
                <!-- End of Testimonial-->

            </div> --}}

        </aside>
        <!--End of Testimonials-->

        <!--Clients-->
        <section id="clients" class="scrollto clearfix">
            {{-- <div class="row clearfix">

                <div class="col-3">

                    <div class="section-heading">
                        <h3>TRUST</h3>
                        <h2 class="section-title">Companies who use our services</h2>
                        <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam!</p>
                    </div>

                </div>

                <div class="col-2-3">

                    <a href="#" class="col-3">
                        <img src="images/company-images/company-logo1.png" alt="Company"/>
                        <div class="client-overlay"><span>Tree</span></div>
                    </a>
                    <a href="#" class="col-3">
                        <img src="images/company-images/company-logo2.png" alt="Company"/>
                        <div class="client-overlay"><span>Fingerprint</span></div>
                    </a>
                    <a href="#" class="col-3">
                        <img src="images/company-images/company-logo3.png" alt="Company"/>
                        <div class="client-overlay"><span>The Man</span></div>
                    </a>
                    <a href="#" class="col-3">
                        <img src="images/company-images/company-logo4.png" alt="Company"/>
                        <div class="client-overlay"><span>Mustache</span></div>
                    </a>
                    <a href="#" class="col-3">
                        <img src="images/company-images/company-logo5.png" alt="Company"/>
                        <div class="client-overlay"><span>Goat</span></div>
                    </a>
                    <a href="#" class="col-3">
                        <img src="images/company-images/company-logo6.png" alt="Company"/>
                        <div class="client-overlay"><span>Justice</span></div>
                    </a>
                    <a href="#" class="col-3">
                        <img src="images/company-images/company-logo7.png" alt="Company"/>
                        <div class="client-overlay"><span>Ball</span></div>
                    </a>
                    <a href="#" class="col-3">
                        <img src="images/company-images/company-logo8.png" alt="Company"/>
                        <div class="client-overlay"><span>Cold</span></div>
                    </a>

                    <a href="#" class="col-3">
                        <img src="images/company-images/company-logo9.png" alt="Company"/>
                        <div class="client-overlay"><span>Cold</span></div>
                    </a>

                </div>

            </div> --}}
        </section>
        <!--End of Clients-->

        <!--Contact-->
        <section id="contact-us">

            @include('userlayouts.contact')
{{-- 
            <h3 style="margin-left: 3%;">Contact Form</h3>

            <div class="con">
              <form action="{{ route('home.store') }}" method="POST">
                @csrf
            
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Your name...">
            
                <label for="email">Email</label>
                <input type="text" id="email" name="email" placeholder="Your email...">
            
                <label for="subject">Subject</label>
                <textarea id="subject" name="subject" placeholder="Write something.." style="height:150px"></textarea>
            
                <button type="submit" class="btn btn-success">KIRIM</button>
            </form> --}}

        </section>
        <!--End Contact-->
    
    </main>
    <!--End Main Content Area-->
@endsection

        {{-- <!--Pricing Tables-->
        <section id="pricing" class="secondary-color text-center scrollto clearfix ">
            <div class="row clearfix">

                <div class="section-heading">
                    <h3>YOUR CHOICE</h3>
                    <h2 class="section-title">We have the right package for you</h2>
                </div>

                <!--Pricing Block-->
                <div class="pricing-block col-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="pricing-block-content">
                        <h3>Personal</h3>
                        <p class="pricing-sub">The standard version</p>
                        <div class="pricing">
                            <div class="price"><span>$</span>19</div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        </div>
                        <ul>
                            <li>5 Downloads</li>
                            <li>2 Extensions</li>
                            <li>Tutorials</li>
                            <li>Forum Support</li>
                            <li>1 year free updates</li>
                        </ul>
                        <a href="#" class="button">BUY TODAY</a>
                    </div>
                </div>
                <!--End Pricing Block-->

                <!--Pricing Block-->
                <div class="pricing-block featured col-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="pricing-block-content">
                        <h3>Student</h3>
                        <p class="pricing-sub">Most popular choice</p>
                        <div class="pricing">
                            <div class="price"><span>$</span>29</div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        </div>
                        <ul>
                            <li>15 Downloads</li>
                            <li>5 Extensions</li>
                            <li>Tutorials with Files</li>
                            <li>Forum Support</li>
                            <li>2 years free updates</li>
                        </ul>
                        <a href="#" class="button">BUY TODAY</a>
                    </div>
                </div>
                <!--End Pricing Block-->

                <!--Pricing Block-->
                <div class="pricing-block col-3 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="pricing-block-content">
                        <h3>Business</h3>
                        <p class="pricing-sub">For the whole team</p>
                        <div class="pricing">
                            <div class="price"><span>$</span>49</div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        </div>
                        <ul>
                            <li>Unlimited Downloads</li>
                            <li>Unlimited Extensions</li>
                            <li>HD Video Tutorials</li>
                            <li>Chat Support</li>
                            <li>Lifetime free updates</li>
                        </ul>
                        <a href="#" class="button">BUY TODAY</a>
                    </div>
                </div>
                <!--End Pricing Block-->

            </div>
        </section>
        <!--End of Pricing Tables--> --}}

