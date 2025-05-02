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
            <h1 class="text-[#050509] text-[32px] md:text-[48px] DMSans-bold mb-7">{!! setting('contact.banner_title') !!}</h1>
            <p class="text-[#333] relative mb-12 text-base">{!! setting('contact.banner_description') !!}</p>
            </a>
        </div>
        </div>
    </div>
    <!-- banner section -->

    {{-- <div class="py-10 bg-[#D5CBE2]">
        <div class="container">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 lg:gap-10">
                <div class="relative">
                    <img src="./dist/assets/images/contactus.png" class="w-full h-[400px] lg:h-full rounded-xl object-cover" alt="">
                    <div class="absolute w-full max-w-[90%] lg:max-w-[300px] left-5 bottom-5 bg-black bg-opacity-80 p-5 rounded-lg">
                        <div class="flex items-center py-2 gap-5 pb-5">
                            <i class="fas fa-phone-alt text-[22px] text-theme1 border border-theme1 rounded-full w-12 h-12 flex items-center justify-center "></i>
                            <div class>
                            <div class="text-xl text-white mb-2">Phone Number</div>
                            <a class="text-base text-[#828284]" href="tel:+{!! setting('contact.mobile_number') !!}">{!! setting('contact.mobile_number') !!}</a>
                            </div>
                        </div>
                        <div class="flex items-center py-2 gap-5 pb-5">
                            <i class="fas fa-map-marker-alt text-[22px] text-theme1 border border-theme1 rounded-full w-12 h-12 flex items-center justify-center "></i>
                            <div class>
                            <div class="text-xl text-white mb-2">Address</div>
                            <span class="text-base text-[#828284]">{!! setting('contact.address') !!}</a>
                            </div>
                        </div>
                        <div class="flex items-center py-2 gap-5 pb-5">
                            <i class="fas fa-envelope text-[322x] text-theme1 border border-theme1 rounded-full w-12 h-12 flex items-center justify-center "></i>
                            <div class>
                            <div class="text-xl text-white mb-2">Email Address</div>
                            <a class="text-base text-[#828284]" href="mailto:{!! setting('contact.email') !!}">{!! setting('contact.email') !!}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-8">
                    <h4 class="text-2xl text-[#1E2436] mb-6 DMSans-semibold">Connect with us!</h4>
                    <form action="">
                        <div class="colum-two flex gap-5">
                            <div class="w-full lg:w-1/2 form-group mb-7">
                                <input class="w-full px-7 py-4 bg-white rounded-xl text-[#9F9F9F]  outline-none" type="text" placeholder="Enter Your Name" name="" id="">
                            </div>
                            <div class="w-full lg:w-1/2 form form-group mb-7">
                                <input class="w-full px-7 py-4 bg-white rounded-xl text-[#9F9F9F]  outline-none" type="email" placeholder="Enter Your Email" name="" id="">
                            </div>
                        </div>
                        <div class="form-group mb-7">
                            <input class="w-full px-7 py-4 bg-white rounded-xl text-[#9F9F9F]  outline-none" type="text" placeholder="Enter Your subject" name="" id="">
                        </div>
                        <div class="form-group mb-7">
                            <textarea class="w-full px-7 py-4 bg-white rounded-xl text-[#9F9F9F]  outline-none" rows="6" placeholder="Write Message" name="" id=""></textarea>
                        </div>
                        <div class="flex justify-between gap-4">
                            <button type="submit" class="flex w-fit items-center btn bg-theme1 text-white rounded-lg py-[6px] lg:py-[10px] h-fit px-[32px] DMSans-medium text-lg btn-shadow">Send Message</button>
                            <img src="./dist/assets/images/pet-foot.svg" class="w-[65px] opacity-60" alt="">
                        </div>
                        </form>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- <div class="py-10">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3667.593336209615!2d72.63721567531873!3d23.185037879060307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4d247ac15088e183%3A0x34e5284bc9dbc494!2sVikartr%20Technologies!5e0!3m2!1sen!2sin!4v1711274914378!5m2!1sen!2sin" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div> --}}

    <div class="bg-[#DFDFDF]">
        <div class="container">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20">
                <div class="">
                    <img src="./dist/assets/images/faq.png" class="w-full max-h-[685px] object-cover ml-auto" alt="">
                </div>
                <div class="py-10 lg:py-20">
                    <div class="heading-wrapper text-center lg:text-right w-full max-w-[600px] ml-auto mb-10">
                        <div class="heading-label uppercase text-base DMSans-medium text-theme2 mb-1 tracking-[4px]">FAQ’s</div>
                        <h2 class="heading-title text-[38px] DMSans-bold text-theme2 mb-3">Frequently Asked <span class="text-theme1"><br />Questions ?</span></h2>
                    </div>
                    <div class="faq-accordion flex flex-col items-center justify-center">
                        <!--  Panel 1  -->
                        @foreach($faqs as $index => $faq)
                        <div class="w-full mb-3 rounded-[10px]">
                            <input type="checkbox" name="panel" id="panel-{{$index}}" class="hidden">
                            <label for="panel-{{$index}}" class="relative  bg-white block text-theme2 font-bold text-base p-[20px] pl-[70px] mb-0 cursor-pointer rounded-[10px]">
                            {{ $faq->question }}
                            </label>
                            <div class="accordion__content overflow-hidden bg-grey-lighter">
                                <p class="!pt-0 bg-white text-[16px] rounded-b-[10px] accordion__body p-4 text-[#82828A]" id="panel1">{{ $faq->answer }}</p>
                            </div>
                        </div>
                        @endforeach
                        <!-- Panel 2 -->
                        {{-- <div class="w-full mb-3 rounded-[10px]">
                            <input type="checkbox" name="panel" id="panel-2" class="hidden">
                            <label for="panel-2" class="relative  bg-white block text-theme2 font-bold text-base p-[20px] pl-[70px] mb-0 cursor-pointer rounded-[10px]">
                            How does the claim process work?
                            </label>
                            <div class="accordion__content overflow-hidden bg-grey-lighter">
                                <p class="!pt-0 bg-white text-[16px] rounded-b-[10px] accordion__body p-4 text-[#82828A]">Pet insurance comes in various types, including accident-only, accident and illness, and wellness plans. Each offers different coverage levels for vet bills, treatments, and routine care.</p>
                            </div>
                        </div> --}}
                        <!--  Panel 3  -->
                        {{-- <div class="w-full mb-3 rounded-[10px]">
                            <input type="checkbox" name="panel" id="panel-3" class="hidden">
                            <label for="panel-3" class="relative  bg-white block text-theme2 font-bold text-base p-[20px] pl-[70px] mb-0 cursor-pointer rounded-[10px]">
                            What are the beneifts ?
                            </label>
                            <div class="accordion__content overflow-hidden bg-grey-lighter">
                                <p class="!pt-0 bg-white text-[16px] rounded-b-[10px] accordion__body p-4 text-[#82828A]">Pet insurance comes in various types, including accident-only, accident and illness, and wellness plans. Each offers different coverage levels for vet bills, treatments, and routine care.</p>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-[100px] bg-white">
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
                                    <div class="text-xl text-[#050509] mb-2">Connect Us At</div>
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
                        <form action="{{ route('contact.submit') }}" method="POST">
                            @csrf
                            <div class="form-group mb-7">
                                <label for="" class="text-white text-xl mb-2 block">Your Name</label>
                                <input class="w-full px-7 py-4 bg-white rounded-md text-[#9F9F9F] outline-none" type="text" placeholder="Enter Your Name" name="name" id="name" required>
                                @error('name') <p class="text-red-500">{{ $message }}</p> @enderror
                            </div>
                            <div class="form-group mb-7">
                                <label for="" class="text-white text-xl mb-2 block">Your Email</label>
                                <input class="w-full px-7 py-4 bg-white rounded-md text-[#9F9F9F] outline-none" type="email" placeholder="Enter Your Name" name="email" id="email" required>
                                @error('email') <p class="text-red-500">{{ $message }}</p> @enderror
                            </div>
                            <div class="form-group mb-7">
                                <label for="" class="text-white text-xl mb-2 block">Your Message</label>
                                <textarea class="w-full px-7 py-4 bg-white rounded-md text-[#9F9F9F] outline-none" rows="6" placeholder="Enter Your Message" name="message" id="message" required></textarea>
                                @error('message') <p class="text-red-500">{{ $message }}</p> @enderror
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
    </div>
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

<!-- jQuery (Required for Toastr) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<!-- Display Toastr Notification -->
<script>
    @if(session('success'))
        toastr.success("{{ session('success') }}");
    @endif
</script>

@include('footer')
