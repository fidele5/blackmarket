            <!-- Site Footer-->
            <footer class="site-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <!-- Contact Info-->
                            <section class="widget widget-light-skin">
                                <h3 class="widget-title">Get In Touch With Us</h3>
                                <p class="text-white">Phone: 0974217408</p>
                                <p><a class="navi-link-light" href="mailto:ovadorservices@gmail.com">ovadorservices@gmail.com</a></p><a class="social-button shape-circle sb-facebook sb-light-skin" href="#"><i class="socicon-facebook"></i></a><a class="social-button shape-circle sb-twitter sb-light-skin" href="#"><i class="socicon-twitter"></i></a><a class="social-button shape-circle sb-instagram sb-light-skin" href="#"><i class="socicon-instagram"></i></a><a class="social-button shape-circle sb-google-plus sb-light-skin" href="#"><i class="socicon-googleplus"></i></a>
                            </section>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <!-- Mobile App Buttons-->
                            <section class="widget widget-light-skin">
                                <h3 class="widget-title">Our Mobile App</h3><a class="market-button apple-button mb-light-skin" href="#"><span class="mb-subtitle">Download on the</span><span class="mb-title">App Store</span></a><a class="market-button google-button mb-light-skin" href="#"><span class="mb-subtitle">Download on the</span><span class="mb-title">Google Play</span></a><a class="market-button windows-button mb-light-skin" href="#"><span class="mb-subtitle">Download on the</span><span class="mb-title">Windows Store</span></a>
                            </section>
                        </div>
                    </div>
                    <hr class="hr-light mt-2 margin-bottom-2x">
                    <div class="row">
                        <div class="col-md-7 padding-bottom-1x">
                        <!-- Payment Methods-->
                            <div class="margin-bottom-1x" style="max-width: 615px;"><img src="{{ asset('img/payment_methods.png') }}" alt="Payment Methods">
                            </div>
                        </div>
                        <div class="col-md-5 padding-bottom-1x">
                            <div class="margin-top-1x hidden-md-up"></div>
                            <!--Subscription-->
                            <form class="subscribe-form" action="http://rokaux.us12.list-manage.com/subscribe/post?u=c7103e2c981361a6639545bd5&amp;amp;id=1194bb7544" method="post" target="_blank" novalidate>
                                <div class="clearfix">
                                    <div class="input-group input-light">
                                        <input class="form-control" type="email" name="EMAIL" placeholder="Your e-mail"><span class="input-group-addon"><i class="icon-mail"></i></span>
                                    </div>
                                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                    <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                        <input type="text" name="b_c7103e2c981361a6639545bd5_1194bb7544" tabindex="-1">
                                    </div>
                                    <button class="btn btn-primary" type="submit"><i class="icon-check"></i></button>
                                </div>
                                <span class="form-text text-sm text-white opacity-50">Subscribe to our Newsletter to receive early discount offers, latest news, sales and promo information.</span>
                            </form>
                        </div>
                    </div>
                    <!-- Copyright-->
                    <p class="footer-copyright">© All rights reserved. Made with &nbsp;<i class="icon-heart text-danger"></i><a href="https://ovadors.com target="_blank"> &nbsp;Ovadors Services</a></p>
                </div>
            </footer>
        </div>
        <!-- Back To Top Button--><a class="scroll-to-top-btn" href="#"><i class="icon-arrow-up"></i></a>
        <!-- Backdrop-->
        <div class="site-backdrop"></div>
        <!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
        <script src="{{ asset('js/vendor.min.js') }}"></script>
        <script src="{{ asset('js/scripts.min.js') }}"></script>
        <script src="{{ asset('js/submitcontact.js') }}"></script>
        <script src="{{ asset('/adminn/assets/ajax/account.js') }}"></script>
        <!-- Customizer scripts-->
        <script src="{{ asset('customizer/customizer.min.js') }}"></script>
        <script>
            console.clear();

            class skeleton {
                /**
                * Lock skeleton
                */
                static lock() {
                    var skel = this.objects();
                    var len = skel ? skel.length : 0;
                    for (var i = 0; i < len; i++) {
                        skel[i].classList.add("skel");
                    }
                }

                /**
                * Object of skeletonable element
                */
                static objects() {
                    return document.querySelectorAll(
                        ".card-image,.card-title,h1,img,p,h2,h3,h4,h5,button"
                    );
                }

                /**
                * Release skeleton
                */
                static release() {
                    var skel = this.objects();
                    var len = skel ? skel.length : 0;
                    for (var i = 0; i < len; i++) {
                        skel[i].classList.remove("skel");
                    }
                }
            }

            /* Skeleton start */
            skeleton.lock();
            //lock
            
            window.onload = function() {
                skeleton.release();
            }; 
            
        </script>
    </body>
</html>