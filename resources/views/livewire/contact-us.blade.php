<div>
    <!-- breadcrumb -->
    <section class="w3l-about-breadcrumb text-center">
        <div class="breadcrumb-bg breadcrumb-bg-about py-5">
            <div class="container py-lg-5 py-md-4">
                <div class="w3breadcrumb-gids">
                    <div class="w3breadcrumb-left text-left">
                        <h2 class="title AboutPageBanner">
                            Contact Us </h2>

                    </div>

                </div>
            </div>
            <div class="hero-overlay"></div>
        </div>
    </section>
    <!--//breadcrumb-->
    <!-- contact-form 2 -->
    <div style="margin: 8px auto; display: block; text-align:center;">

        <!---728x90--->


    </div>
    <section class="w3l-contact-2 py-5" id="contact">
        <div class="container py-lg-4 py-md-3 py-2">
            <div class="title-content text-center">
                <span class="title-subw3hny">Get in touch</span>
                <h3 class="title-w3l mb-lg-4">Contact with our support <br>
                    during emergency!</h3>

            </div>
            <div class="contact-grids d-grid mt-5 mx-lg-5">
                <div class="contact-left">
                    <div class="cont-details">
                        <div class="cont-top margin-up">
                            <div class="cont-left text-center">
                                <span class="fas fa-map-marked-alt"></span>
                            </div>
                            <div class="cont-right">
                                <h6>Our head office address:</h6>
                                <p>
                                    {{ $address[0] }}
                                </p>
                            </div>
                        </div>
                        <div class="cont-top margin-up">
                            <div class="cont-left text-center">
                                <span class="fas fa-blender-phone"></span>
                            </div>
                            <div class="cont-right">
                                <h6>Call for help :</h6>
                                <p><a href="tel:{{ $phone[0] }}">{{ $phone[0] }}</a></p>
                            </div>
                        </div>
                        <div class="cont-top margin-up">
                            <div class="cont-left text-center">
                                <span class="fas fa-envelope-open-text"></span>
                            </div>
                            <div class="cont-right">
                                <h6>
                                    Mail us:</h6>
                                <p><a href="mailto:{{ $email }}" class="mail">{{ $email }}</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-right">
                    <form wire:submit.prevent="sendMail()" method="post" class="signin-form">
                        <div class="input-grids">
                            <input type="text" wire:model="name" placeholder="Your Name*" class="contact-input" required="" />
                            <input type="email" wire:model="email" placeholder="Your Email*" class="contact-input" required="" />
                            <input type="text" wire:model="subject" placeholder="Subject*" class="contact-input" required="" />
                        </div>
                        <div class="form-input">
                            <textarea wire:model="message" placeholder="Type your message here*" required=""></textarea>
                        </div>
                        <div class="submit-w3l-button text-lg-right">
                            <button type="submit" class="btn btn-style btn-primary">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- /contact-form-2 -->
    <div class="map-iframe">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317718.69319292053!2d-0.3817765050863085!3d51.528307984912544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2spl!4v1562654563739!5m2!1sen!2spl" width="100%" height="400" frameborder="0" style="border: 0px;" allowfullscreen=""></iframe>
    </div>
    <!-- /contact1 -->
    <div style="margin: 8px auto; display: block; text-align:center;">

        <!---728x90--->

    </div>


</div>