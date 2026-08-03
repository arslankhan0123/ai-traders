@include('frontend.shared.company-cta')
<footer class="rts__footer__area__two rts-section-gapTop2" style="background-color: #001514;">
    <div class="container">
        <!-- <div class="footer-contact-info text-center">
            <span class="subtitle" style="color: #34A853;">Industrial Solution Provider</span>
            <h2 class="title" style="color: white;">Your Global Partner for <br> Industrial Solutions</h2>
            <a href="{{ route('contact') }}" class="rts-btn btn-primary">Contact Our Team <i class="fa-solid fa-arrow-right"></i></a>
        </div> -->
        <div class="footer-brand-widget">
            <div class="footer-brand">
                <a href="{{ route('home') }}" class="logo">
                    <img src="{{ asset('logo.png') }}" alt="logo" style="max-height: 80px; width: auto;">
                </a>
                <p class="desc" style="color: rgba(255, 255, 255, 0.7); margin-top: 20px;">Alberta International Traders is a Calgary-based trading company creating commercial flows, importing and exporting products, and managing international projects with trusted global partners.</p>
                <!-- <div class="footer-social" style="margin-top: 30px;">
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                </div> -->
            </div>

            <div class="footer-widget-wrapper">
                <div class="single-widget">
                    <h3 class="widget-title">Why Choose AIT:</h3>
                    <ul class="widget-list">
                        <li style="color: rgba(255, 255, 255, 0.7); display: flex; align-items: center; gap: 8px;"><i class="fa-solid fa-circle-check" style="color: #34A853;"></i> Global Product Sourcing</li>
                        <li style="color: rgba(255, 255, 255, 0.7); display: flex; align-items: center; gap: 8px;"><i class="fa-solid fa-circle-check" style="color: #34A853;"></i> Reputable Manufacturers</li>
                        <li style="color: rgba(255, 255, 255, 0.7); display: flex; align-items: center; gap: 8px;"><i class="fa-solid fa-circle-check" style="color: #34A853;"></i> Quality Products</li>
                        <li style="color: rgba(255, 255, 255, 0.7); display: flex; align-items: center; gap: 8px;"><i class="fa-solid fa-circle-check" style="color: #34A853;"></i> Reliable Customer Service</li>
                        <li style="color: rgba(255, 255, 255, 0.7); display: flex; align-items: center; gap: 8px;"><i class="fa-solid fa-circle-check" style="color: #34A853;"></i> Effective Supply Chain</li>
                    </ul>
                </div>
                <div class="single-widget">
                    <h3 class="widget-title" style="color: white;">Location & Contact:</h3>
                    <ul class="widget-list">
                        <li><a href="https://maps.google.com/?q=Calgary,+Alberta,+Canada" style="color: rgba(255, 255, 255, 0.7);"><b>Address:</b> Calgary, Alberta, Canada</a></li>
                        <li><a href="tel:+14039090602" style="color: rgba(255, 255, 255, 0.7);"><b>Canada:</b> +1 403-909-0602</a></li>
                        <li><a href="tel:+966596039208" style="color: rgba(255, 255, 255, 0.7);"><b>Gulf:</b> +966 59 603 9208</a></li>
                        <li><a href="mailto:info@aittraders.com" style="color: rgba(255, 255, 255, 0.7);"><b>Email:</b> info@aittraders.com</a></li>
                        <li><a href="https://www.aittraders.com" target="_blank" rel="noopener" style="color: rgba(255, 255, 255, 0.7);"><b>Web:</b> aittraders.com</a></li>
                    </ul>
                </div>
                <div class="single-widget">
                    <h3 class="widget-title">Quick Links:</h3>
                    <ul class="widget-list">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About</a></li>
                        <!-- <li><a href="{{ route('industries') }}">Industries</a></li> -->
                        <!-- <li><a href="{{ route('global-sourcing') }}">Global Sourcing</a></li> -->
                        <!-- <li><a href="{{ route('projects') }}">Projects</a></li> -->
                        <!-- <li><a href="{{ route('partners-vendors') }}">Partners & Vendors</a></li> -->
                        <!-- <li><a href="{{ route('services') }}">Solutions</a></li> -->
                        <!-- <li><a href="{{ route('home') }}#products">Products</a></li> -->
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                        <!-- <li><a href="{{ route('faq') }}">FAQs</a></li> -->
                        <li><a href="{{ route('gallery') }}">Our Gallery</a></li>
                        <!-- <li><a href="{{ route('reviews') }}">Reviews</a></li> -->
                        <li><a href="{{ route('quote') }}">Request a Quote</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__copyright__wrapper">
        <div class="container">
            <p style="color: rgba(255, 255, 255, 0.7); text-align: center; margin-bottom: 0;"><b>Global Solutions:</b> Industrial Equipment, Construction Equipment, Construction Materials, Food & Beverage Equipment</p>
            <div class="footer__copyright">
                <div class="copyright">
                    <p>
                        <script>
                            document.write(new Date().getFullYear());
                        </script>&copy; <span>Alberta International Traders</span>. All rights
                        reserved.
                    </p>
                </div>
                <ul class="terms">
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#"> Privacy Policy</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<style>
    .rts__footer__area__two .footer-brand-widget {
        display: grid !important;
        grid-template-columns: repeat(4, minmax(0, 1fr)) !important;
        gap: 40px !important;
        align-items: start !important;
    }

    .rts__footer__area__two .footer-brand,
    .rts__footer__area__two .single-widget {
        width: 100% !important;
        max-width: none !important;
        margin: 0 !important;
    }

    .rts__footer__area__two .footer-widget-wrapper {
        display: contents !important;
    }

    .rts__footer__area__two .footer-widget-wrapper .single-widget:first-child {
        padding-left: 50px !important;
    }

    @media (max-width: 991px) {
        .rts__footer__area__two .footer-brand-widget {
            grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
            gap: 35px !important;
        }

        .rts__footer__area__two .footer-widget-wrapper .single-widget:first-child {
            padding-left: 0 !important;
        }
    }

    @media (max-width: 575px) {
        .rts__footer__area__two .footer-brand-widget {
            grid-template-columns: 1fr !important;
            gap: 30px !important;
        }
    }
</style>
