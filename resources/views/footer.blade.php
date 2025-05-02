<footer class="bg-theme2 py-10">
    <div class="container">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-5 text-white mb-6">
            <div>
                <a class="mb-5" href="index.php">
                <img src="{{ asset('dist/assets/images/logo-white.svg') }}" alt="">
                </a>
                <p class="text-[#9F9F9F] text-base font-medium">{!! setting('site.description') !!}</p>
            </div>
            <div class="">
                <h3 class="text-white text-[20px] DMSans-bold mb-8">Company</h3>
                <ul class="space-y-3 text-[#9F9F9F]">
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About US</a></li>
                    <li><a href="">Services</a></li>
                    <li><a href="/submit_claim">Submit a claim</a></li>
                </ul>
            </div>
            <div class="">
                <h3 class="text-white text-[20px] DMSans-bold mb-8">Help</h3>
                <ul class="space-y-3 text-[#9F9F9F]">
                    <li><a href="#">Customer Support</a></li>
                    <li><a href="#">How It Works</a></li>
                    <li><a href="/terms_and_condition">Terms & Condition</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="">
                <h3 class="text-white text-[20px] DMSans-bold mb-8">Get in touch</h3>
                <ul class="space-y-3 text-[#9F9F9F] mb-4">
                    <li><a class="text-lg text-[#9F9F9F]" href="mailto:{!! setting('contact.email') !!}"><i class="fas mr-4 fa-envelope text-lg text-theme1"></i> {!! setting('contact.email') !!}</a></li>
                    <li><a class="text-lg text-[#9F9F9F]" href="tel:+{!! setting('contact.mobile_number') !!}"><i class="fas mr-4 fa-phone-alt text-lg text-theme1"></i>{!! setting('contact.mobile_number') !!}</a></li>
                    <li><i class="fas mr-4 fa-map-marker-alt text-lg text-theme1"></i><span class="text-lg text-[#9F9F9F]">{!! setting('contact.address') !!}<span></li>
                </ul>
                <ul class="flex items-center gap-2">
                    <li><a href="{!! setting('contact.facebook_link') !!}" target="_blank" class="border-2 w-12 h-12 flex items-center justify-center border-[2px] border-[#E6E6ED56] bg-transparent text-theme1 rounded-xl text-xl p-2"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="{!! setting('contact.twitter_link') !!}" target="_blank" class="border-2 w-12 h-12 flex items-center justify-center border-[2px] border-[#E6E6ED56] bg-transparent text-theme1 rounded-xl text-xl p-2"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="{!! setting('contact.instagram_link') !!}" target="_blank" class="border-2 w-12 h-12 flex items-center justify-center border-[2px] border-[#E6E6ED56] bg-transparent text-theme1 rounded-xl text-xl p-2"><i class="fab fa-instagram-square"></i></a></li>
                    <li><a href="{!! setting('contact.youtube_link') !!}" target="_blank" class="border-2 w-12 h-12 flex items-center justify-center border-[2px] border-[#E6E6ED56] bg-transparent text-theme1 rounded-xl text-xl p-2"><i class="fab fa-youtube"></i></a></li>
                </ul>
            </div>
        </div>
        <img src="{{ asset('dist/assets/images/footer-cat.svg') }}" class="w-full pt-2" alt="">
        <div class="flex justify-center w-full text-base text-[#9F9F9F] uppercase">
            Copyright © 2025 VANYA  RISK MANAGEMENT CONSULTANT
        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript" src="{{ asset('dist/assets/js/app.min.js') }}"></script>
</body>
</html>