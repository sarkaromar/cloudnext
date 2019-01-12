@extends('front.layouts.master')

@section('content')

    <!-- Testimonials -->
    <div class="section section-quotes section-pad bg-light">
        <div class="container">
            <div class="content row center">
            
                <h2 class="heading-section">What Our Client Say's</h2>
                <div class="gaps size-sm"></div>
                <div class="testimonials">
                    <div id="testimonial" class="quotes-slider quotes-boxed col-md-8 col-md-offset-2">
                        <div class="owl-carousel loop has-carousel" data-items="1" data-loop="true" data-dots="true" data-auto="true">
                            <div class="item">
                                <!-- Each Quotes -->
                                <div class="quotes">
                                    <div class="quotes-text">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo nemo enim ipsam.</p>
                                    </div>
                                    <div class="profile-thumb">
                                        <img src="image/client-a.jpg" alt="">
                                    </div>
                                    <div class="profile">
                                        <h5>John Doe</h5>
                                        <h6>CEO, Company Name</h6>
                                    </div>
                                </div>
                                <!-- End Quotes -->
                            </div>
                            <!-- // -->
                            <div class="item">
                                <!-- Each Quotes -->
                                <div class="quotes">
                                    <div class="quotes-text">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo Nemo enim ipsam.</p>
                                    </div>
                                    <div class="profile-thumb">
                                        <img src="image/client-b.jpg" alt="">
                                    </div>
                                    <div class="profile">
                                        <h5>John Doe</h5>
                                        <h6>CEO, Company Name</h6>
                                    </div>
                                </div>
                                <!-- End Quotes -->
                            </div>
                        </div>
                        <!-- End LoopSlide -->
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- End Section -->

@endsection