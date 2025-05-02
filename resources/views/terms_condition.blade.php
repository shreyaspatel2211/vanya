@include('header')

<style>
    .floating-buttons {
        position: fixed;
        bottom: 80px; /* Adjust to place it above the footer */
        right: 20px; /* Adjust distance from the right side */
        z-index: 1000;
        display: flex;
        flex-direction: column;
        gap: 10px; /* Space between buttons */
    }

    .floating-buttons a {
        position: relative;
        text-decoration: none;
    }

    .floating-buttons a img {
        width: 50px; /* Adjust size */
        height: 50px;
        border-radius: 50%;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s ease;
        background: white;
        padding: 5px;
    }

    .floating-buttons a img:hover {
        transform: scale(1.1);
    }

    /* Tooltip Style */
    .floating-buttons a::after {
        content: attr(data-tooltip);
        position: absolute;
        right: 60px; /* Position tooltip to the left */
        top: 50%;
        transform: translateY(-50%);
        background: rgba(0, 0, 0, 0.8);
        color: white;
        padding: 5px 10px;
        border-radius: 5px;
        white-space: nowrap;
        font-size: 14px;
        opacity: 0;
        transition: opacity 0.3s ease-in-out;
        pointer-events: none;
    }

    .floating-buttons a:hover::after {
        opacity: 1;
    }
</style>

<div class="page bg-[#F9FAF9] ">
    <!-- banner section -->
    <div class="pt-[123px] bg-[url('./dist/assets/images/about-bg.png')] bg-no-repeat bg-cover py-10 relative overflow-hidden">
        <div class="container py-[50px] lg:py-[150px] flex flex-col-reverse md:flex-row justify-between items-center">
        <!-- Left Side -->
        <div class="w-full text-white relative  max-w-[600px] mt-5 md:mt-0 banner-header">
            <h1 class="text-[#050509] text-[32px] md:text-[48px] DMSans-bold mb-7">{!! setting('terms-and-condition.banner_title') !!}</h1>
            <p class="text-[#333] relative mb-12 text-base">{!! setting('terms-and-condition.banner_description') !!}</p>
            </a>
        </div>
        </div>
    </div>
    <!-- banner section -->

    <img src="./dist/assets/images/terms-pet.png" class="w-fit -mb-[120px]" alt="">
    <div class="py-5 lg:py-10 bg-[#F9FAF9]">
        <div class="container">
            <div class="heading-wrapper w-full text-center max-w-[600px] mx-auto mb-5 lg:mb-[60px]">
                <div class="heading-label uppercase text-base DMSans-medium text-theme2 mb-1 tracking-[4px]">T&C</div>
                <h2 class="heading-title text-[38px] DMSans-bold text-theme2 mb-3">Terms & Conditions</h2>
            </div>
        </div>
    </div>

    <div class="py-10">
        <div class="container">
            <p class="text-theme2 text-lg lg:text-2xl mb-5">{!! setting('terms-and-condition.description') !!}</p>
            <div class="py-10">
                <h2 class="heading-title text-[38px] DMSans-bold text-theme2 mb-3"><span class="text-theme1">{!! setting('terms-and-condition.term_1') !!}</span></h2>
                <p class="text-theme2 text-lg lg:text-2xl mb-5">{!! setting('terms-and-condition.term_1_detail') !!}</p>
            </div>
            <div class="py-10">
                <h2 class="heading-title text-[38px] DMSans-bold text-theme2 mb-3"><span class="text-theme1">{!! setting('terms-and-condition.term_2') !!}</span></h2>
                <p class="text-theme2 text-lg lg:text-2xl mb-5">{!! setting('terms-and-condition.term_2_detail') !!}</p>
            </div>
            <div class="py-10">
                <h2 class="heading-title text-[38px] DMSans-bold text-theme2 mb-3"><span class="text-theme1">{!! setting('terms-and-condition.term_3') !!}</span></h2>
                <p class="text-theme2 text-lg lg:text-2xl mb-5">{!! setting('terms-and-condition.term_3_detail') !!}</p>
            </div>
            <div class="py-10">
                <h2 class="heading-title text-[38px] DMSans-bold text-theme2 mb-3"><span class="text-theme1">{!! setting('terms-and-condition.term_4') !!}</span></h2>
                <p class="text-theme2 text-lg lg:text-2xl mb-5">{!! setting('terms-and-condition.term_4_detail') !!}</p>
            </div>
            <div class="py-10">
                <h2 class="heading-title text-[38px] DMSans-bold text-theme2 mb-3"><span class="text-theme1">{!! setting('terms-and-condition.term_5') !!}</span></h2>
                <p class="text-theme2 text-lg lg:text-2xl mb-5">{!! setting('terms-and-condition.term_5_detail') !!}</p>
            </div>
        </div>
    </div>

    {{-- <div class="py-[100px] bg-white">
        <div class="container">
            <div class="flex flex-col lg:flex-row">
                <div class="w-full lg:w-1/2">
                    <div class="flex flex-col lg:flex-row items-end">
                        <div class="">
                            <div class="heading-wrapper text-center lg:text-left w-full max-w-[600px] mr-auto mb-10">
                                <div class="heading-label uppercase text-base DMSans-medium text-theme2 mb-1 tracking-[4px]">Get Started</div>
                                <h2 class="heading-title text-[38px] DMSans-black text-theme2 mb-3">Get your <span class="text-theme1"><br />pet insured Now !!!</span></h2>
                            </div>
                            <div class="pb-5 mb-5 border-b border-[#EAEEFF] text-2xl DMSans-bold text-[#050509]">Contact Info</div>
                            <div class="flex items-center py-2 gap-10 pb-5">
                                <i class="fas fa-phone-alt text-[38px] text-theme2"></i>
                                <div class>
                                    <div class="text-xl text-[#050509] mb-2">Phone Number</div>
                                    <a class="text-base text-[#828284]" href="tel:+{!! setting('contact.mobile_number') !!}">{!! setting('contact.mobile_number') !!}</a>
                                </div>
                            </div>
                            <div class="flex items-center py-2 gap-10 pb-5">
                                <i class="fas fa-map-marker-alt text-[38px] text-theme2"></i>
                                <div class>
                                    <div class="text-xl text-[#050509] mb-2">Address</div>
                                    <span class="text-base text-[#828284]">{!! setting('contact.address') !!}</a>
                                </div>
                            </div>
                            <div class="flex items-center py-2 gap-10 pb-5">
                                <i class="fas fa-envelope text-[38px] text-theme2"></i>
                                <div class>
                                    <div class="text-xl text-[#050509] mb-2">Email Address</div>
                                    <a class="text-base text-[#828284]" href="mailto:{!! setting('contact.email') !!}">{!! setting('contact.email') !!}</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <img src="./dist/assets/images/contact.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/2">
                    <div class="bg-[#003061] p-10 rounded-lg">
                        <form action="">
                            <div class="form-group mb-7">
                                <label for="" class="text-white text-xl mb-2 block">Your Name</label>
                                <input class="w-full px-7 py-4 bg-white rounded-md text-[#9F9F9F] outline-none" type="text" placeholder="Enter Your Name" name="" id="">
                            </div>
                            <div class="form-group mb-7">
                                <label for="" class="text-white text-xl mb-2 block">Your Email</label>
                                <input class="w-full px-7 py-4 bg-white rounded-md text-[#9F9F9F] outline-none" type="email" placeholder="Enter Your Name" name="" id="">
                            </div>
                            <div class="form-group mb-7">
                                <label for="" class="text-white text-xl mb-2 block">Your Message</label>
                                <textarea class="w-full px-7 py-4 bg-white rounded-md text-[#9F9F9F] outline-none" rows="6" placeholder="Enter Your Message" name="" id=""></textarea>
                            </div>
                            <div class="flex justify-between gap-4">
                                <button type="submit" class="flex w-fit items-center btn bg-theme1 text-white rounded-lg py-[10px] lg:py-[20px] px-[32px] DMSans-medium text-lg btn-shadow">Send Message</button>
                                <img src="./dist/assets/images/pet-foot.svg" class="w-[65px] opacity-60" alt="">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</div>
<div class="floating-buttons">
    
    <a href="/doctors-appointment" target="_blank" data-tooltip="Doctor's Appointment">
        <img src="{{ asset('dist/assets/images/veterinary.png') }}" alt="Doctor's Appointment" />
    </a>

    <!-- Breeders Page -->
    <a href="/breeders" target="_blank" data-tooltip="Breeders">
        <img src="{{ asset('dist/assets/images/dogs.png') }}" alt="Breeders" />
    </a>

    <!-- Dog Walker & Trainer Page -->
    <a href="/dog-walker-trainer" target="_blank" data-tooltip="Dog Walker & Trainer">
        <img src="{{ asset('dist/assets/images/trainer.png') }}" alt="Dog Walker & Trainer" />
    </a>

    <!-- Hostel for Pets -->
    <a href="/pet-hostel" target="_blank" data-tooltip="Pet Hostel">
        <img src="{{ asset('dist/assets/images/hostel.png') }}" alt="Pet Hostel" />
    </a>

    <!-- Pet Dating Page (Tinder for Pets) -->
    <a href="/pet-dating" target="_blank" data-tooltip="Pet Dating">
        <img src="{{ asset('dist/assets/images/date.png') }}" alt="Pet Dating" />
    </a>

    <!-- Wellness & Grooming -->
    <a href="/pet-wellness-grooming" target="_blank" data-tooltip="Wellness & Grooming">
        <img src="{{ asset('dist/assets/images/dryer.png') }}" alt="Wellness & Grooming" />
    </a>

    <!-- WhatsApp -->
    <a href="https://wa.me/+919574953131" target="_blank" data-tooltip="Whatsapp">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" />
    </a>
</div>
@include('footer')
