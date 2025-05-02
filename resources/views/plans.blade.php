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
        <div class="container py-[200px] flex flex-col-reverse md:flex-row justify-between items-center">
        <!-- Left Side -->
        <div class="w-full text-white relative  max-w-[600px] mt-5 md:mt-0 banner-header">
            <h1 class="text-[#050509] text-[32px] md:text-[48px] DMSans-bold mb-7">{!! setting('plan.banner_title') !!}</h1>
            <p class="text-[#333] relative mb-12 text-base">{!! setting('plan.banner_description') !!}</p>
            </a>
        </div>
        </div>
    </div>
    <!-- banner section -->

    <div class="py-10">
        <div class="container">
            <div class="heading-wrapper mb-6 w-full text-center max-w-[500px] mx-auto mb-[60px]">
                <div class="heading-label uppercase text-base DMSans-medium text-theme2 mb-1 tracking-[4px]">Pricing Plans</div>
                <h2 class="heading-title text-[38px] DMSans-bold text-theme2 mb-3">Our <span class="text-theme1"> Pet Insurance Plans </span></h2>
            </div>
        </div>
    </div>
<!-- ----------------------------------------------------------------------------------- -->
    @foreach($plans as $plan)
        <div class="py-6">
            <div class="container">
                <div class="bg-[#F3F5FC] border border-[#9C9898] rounded-lg">
                    <div class="grid grid-cols-1 lg:grid-cols-4 gap-5 p-4 lg:p-8">
                        <div class="">
                            <h2 class="text-[32px] DMSans-bold text-[#050509] mb-3">{{$plan->title}}</h2>
                            <p class="text-[#828284] DMSans-medium text-base">{{$plan->short_description}}</p>
                        </div>
                        <div class="">
                            <div class="uppercase text-base DMSans-medium text-[#050509] group-hover:text-white mb-1 tracking-[4px]">Coverage Included:</div>
                            <ul class="list-disc space-y-2 pl-3 ml-3 py-4 mb-0">
                                @foreach(json_decode($plan->coverage_include, true) as $coverage)
                                    <li class="text-lg text-[#828284]">{{$coverage}}</li>
                                    {{-- <li class="text-lg text-[#828284]">Life insurance</li> --}}
                                    {{-- <li class="text-lg text-[#828284]">Life insurance</li> --}}
                                @endforeach
                            </ul>
                        </div>
                        <div class="">
                            <div class="uppercase text-base DMSans-medium text-[#050509] group-hover:text-white mb-1 tracking-[4px]">Key Features:</div>
                            <ul class="list-disc space-y-2 pl-3 ml-3 py-4 mb-0">
                                @foreach(json_decode($plan->key_feature, true) as $feature)
                                    <li class="text-lg text-[#828284]">{{$feature}}</li>
                                    {{-- <li class="text-lg text-[#828284]">Life insurance</li> --}}
                                    {{-- <li class="text-lg text-[#828284]">Life insurance</li> --}}
                                @endforeach
                            </ul>
                        </div>
                        <div class="flex flex-col">
                            <div class="text-lg lg:text-2xl DMSans-bold text-[#050509] group-hover:text-white mb-6">₹ {{$plan->price}} <span class="text-base font-medium text-[#3AA9E9]">/month</span></div>
                            <a href="#" class="flex justify-center mt-auto w-full items-center btn bg-theme2 text-center text-white rounded-lg py-[6px] lg:py-[8px] px-[32px] DMSans-medium text-lg btn-shadow group-hover:bg-theme1">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 lg:gap-12 py-6 lg:py-10">
                    <div class="bg-white group rounded-[8px] hover:bg-theme2">
                        <a class="flex gap-10 p-6" href="http://">
                            <div class="flex items-center">
                                <img class="w-fit mr-6 block group-hover:hidden" src="./dist/assets/images/h-offering1.svg" alt="">
                                <img class="img-white hidden group-hover:block w-fit mr-6" src="./dist/assets/images/h-offering1.svg" alt="">
                                <div class="">
                                    <div class="group-hover:text-white text-xl text-[#020800] mb-2">{{$plan->include_1_title}}</div>
                                    <p class="group-hover:text-white text-sm text-[#808380]">{{$plan->include_1_desc}}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="bg-white group rounded-[8px] hover:bg-theme2">
                        <a class="flex gap-10 p-6" href="http://">
                            <div class="flex items-center">
                                <img class="w-fit mr-6 block group-hover:hidden" src="./dist/assets/images/h-offering1.svg" alt="">
                                <img class="img-white hidden group-hover:block w-fit mr-6" src="./dist/assets/images/h-offering1.svg" alt="">
                                <div class="">
                                    <div class="group-hover:text-white text-xl text-[#020800] mb-2">{{$plan->include_2_title}}</div>
                                    <p class="group-hover:text-white text-sm text-[#808380]">{{$plan->include_2_desc}}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="bg-white group rounded-[8px] hover:bg-theme2">
                        <a class="flex gap-10 p-6" href="http://">
                            <div class="flex items-center">
                                <img class="w-fit mr-6 block group-hover:hidden" src="./dist/assets/images/h-offering1.svg" alt="">
                                <img class="img-white hidden group-hover:block w-fit mr-6" src="./dist/assets/images/h-offering1.svg" alt="">
                                <div class="">
                                    <div class="group-hover:text-white text-xl text-[#020800] mb-2">{{$plan->include_3_title}}</div>
                                    <p class="group-hover:text-white text-sm text-[#808380]">{{$plan->include_3_desc}}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="py-10">
                    <p class="text-theme2 text-lg lg:text-2xl mb-3">{!! $plan->long_description !!}</p>
                    {{-- <p class="text-theme2 text-lg lg:text-2xl mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> --}}
                </div>
            </div>
        </div>
    @endforeach
    {{-- <div class="py-6">
        <div class="container">
            <div class="bg-[#F3F5FC] border border-[#9C9898] rounded-lg">
                <div class="grid grid-cols-1 lg:grid-cols-4 gap-5 p-4 lg:p-8">
                    <div class="">
                        <h2 class="text-[32px] DMSans-bold text-[#050509] mb-3">Pet Protection</h2>
                        <p class="text-[#828284] DMSans-medium text-base">Aenean adipiscing amet dui cursus rhoncus nibh nec tortor fusce.</p>
                    </div>
                    <div class="">
                        <div class="uppercase text-base DMSans-medium text-[#050509] group-hover:text-white mb-1 tracking-[4px]">Coverage Included:</div>
                        <ul class="list-disc space-y-2 pl-3 ml-3 py-4 mb-0">
                            <li class="text-lg text-[#828284]">Life insurance</li>
                            <li class="text-lg text-[#828284]">Life insurance</li>
                            <li class="text-lg text-[#828284]">Life insurance</li>
                        </ul>
                    </div>
                    <div class="">
                        <div class="uppercase text-base DMSans-medium text-[#050509] group-hover:text-white mb-1 tracking-[4px]">Key Features:</div>
                        <ul class="list-disc space-y-2 pl-3 ml-3 py-4 mb-0">
                            <li class="text-lg text-[#828284]">Life insurance</li>
                            <li class="text-lg text-[#828284]">Life insurance</li>
                            <li class="text-lg text-[#828284]">Life insurance</li>
                        </ul>
                    </div>
                    <div class="flex flex-col">
                        <div class="text-lg lg:text-2xl DMSans-bold text-[#050509] group-hover:text-white mb-6">₹ 3500 <span class="text-base font-medium text-[#3AA9E9]">/month</span></div>
                        <a href="#" class="flex justify-center mt-auto w-full items-center btn bg-theme2 text-center text-white rounded-lg py-[6px] lg:py-[8px] px-[32px] DMSans-medium text-lg btn-shadow group-hover:bg-theme1">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 lg:gap-12 py-6 lg:py-10">
                <div class="bg-white group rounded-[8px] hover:bg-theme2">
                    <a class="flex gap-10 p-6" href="http://">
                        <div class="flex items-center">
                            <img class="w-fit mr-6 block group-hover:hidden" src="./dist/assets/images/h-offering1.svg" alt="">
                            <img class="img-white hidden group-hover:block w-fit mr-6" src="./dist/assets/images/h-offering1.svg" alt="">
                            <div class="">
                                <div class="group-hover:text-white text-xl text-[#020800] mb-2">Illness</div>
                                <p class="group-hover:text-white text-sm text-[#808380]">Lorem morbi et amet suscipit. At sed proin quis risus urna a. Magna in odio in urna amet ultrices fermentum.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="bg-white group rounded-[8px] hover:bg-theme2">
                    <a class="flex gap-10 p-6" href="http://">
                        <div class="flex items-center">
                            <img class="w-fit mr-6 block group-hover:hidden" src="./dist/assets/images/h-offering1.svg" alt="">
                            <img class="img-white hidden group-hover:block w-fit mr-6" src="./dist/assets/images/h-offering1.svg" alt="">
                            <div class="">
                                <div class="group-hover:text-white text-xl text-[#020800] mb-2">Wellness</div>
                                <p class="group-hover:text-white text-sm text-[#808380]">Lorem morbi et amet suscipit. At sed proin quis risus urna a. Magna in odio in urna amet ultrices fermentum.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="bg-white group rounded-[8px] hover:bg-theme2">
                    <a class="flex gap-10 p-6" href="http://">
                        <div class="flex items-center">
                            <img class="w-fit mr-6 block group-hover:hidden" src="./dist/assets/images/h-offering1.svg" alt="">
                            <img class="img-white hidden group-hover:block w-fit mr-6" src="./dist/assets/images/h-offering1.svg" alt="">
                            <div class="">
                                <div class="group-hover:text-white text-xl text-[#020800] mb-2">Wellness</div>
                                <p class="group-hover:text-white text-sm text-[#808380]">Lorem morbi et amet suscipit. At sed proin quis risus urna a. Magna in odio in urna amet ultrices fermentum.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="py-10">
                <p class="text-theme2 text-lg lg:text-2xl mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p class="text-theme2 text-lg lg:text-2xl mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
    </div>
    <div class="py-6">
        <div class="container">
            <div class="bg-[#F3F5FC] border border-[#9C9898] rounded-lg">
                <div class="grid grid-cols-1 lg:grid-cols-4 gap-5 p-4 lg:p-8">
                    <div class="">
                        <h2 class="text-[32px] DMSans-bold text-[#050509] mb-3">Pet Protection</h2>
                        <p class="text-[#828284] DMSans-medium text-base">Aenean adipiscing amet dui cursus rhoncus nibh nec tortor fusce.</p>
                    </div>
                    <div class="">
                        <div class="uppercase text-base DMSans-medium text-[#050509] group-hover:text-white mb-1 tracking-[4px]">Coverage Included:</div>
                        <ul class="list-disc space-y-2 pl-3 ml-3 py-4 mb-0">
                            <li class="text-lg text-[#828284]">Life insurance</li>
                            <li class="text-lg text-[#828284]">Life insurance</li>
                            <li class="text-lg text-[#828284]">Life insurance</li>
                        </ul>
                    </div>
                    <div class="">
                        <div class="uppercase text-base DMSans-medium text-[#050509] group-hover:text-white mb-1 tracking-[4px]">Key Features:</div>
                        <ul class="list-disc space-y-2 pl-3 ml-3 py-4 mb-0">
                            <li class="text-lg text-[#828284]">Life insurance</li>
                            <li class="text-lg text-[#828284]">Life insurance</li>
                            <li class="text-lg text-[#828284]">Life insurance</li>
                        </ul>
                    </div>
                    <div class="flex flex-col">
                        <div class="text-lg lg:text-2xl DMSans-bold text-[#050509] group-hover:text-white mb-6">₹ 3500 <span class="text-base font-medium text-[#3AA9E9]">/month</span></div>
                        <a href="#" class="flex justify-center mt-auto w-full items-center btn bg-theme2 text-center text-white rounded-lg py-[6px] lg:py-[8px] px-[32px] DMSans-medium text-lg btn-shadow group-hover:bg-theme1">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 lg:gap-12 py-6 lg:py-10">
                <div class="bg-white group rounded-[8px] hover:bg-theme2">
                    <a class="flex gap-10 p-6" href="http://">
                        <div class="flex items-center">
                            <img class="w-fit mr-6 block group-hover:hidden" src="./dist/assets/images/h-offering1.svg" alt="">
                            <img class="img-white hidden group-hover:block w-fit mr-6" src="./dist/assets/images/h-offering1.svg" alt="">
                            <div class="">
                                <div class="group-hover:text-white text-xl text-[#020800] mb-2">Illness</div>
                                <p class="group-hover:text-white text-sm text-[#808380]">Lorem morbi et amet suscipit. At sed proin quis risus urna a. Magna in odio in urna amet ultrices fermentum.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="bg-white group rounded-[8px] hover:bg-theme2">
                    <a class="flex gap-10 p-6" href="http://">
                        <div class="flex items-center">
                            <img class="w-fit mr-6 block group-hover:hidden" src="./dist/assets/images/h-offering1.svg" alt="">
                            <img class="img-white hidden group-hover:block w-fit mr-6" src="./dist/assets/images/h-offering1.svg" alt="">
                            <div class="">
                                <div class="group-hover:text-white text-xl text-[#020800] mb-2">Wellness</div>
                                <p class="group-hover:text-white text-sm text-[#808380]">Lorem morbi et amet suscipit. At sed proin quis risus urna a. Magna in odio in urna amet ultrices fermentum.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="bg-white group rounded-[8px] hover:bg-theme2">
                    <a class="flex gap-10 p-6" href="http://">
                        <div class="flex items-center">
                            <img class="w-fit mr-6 block group-hover:hidden" src="./dist/assets/images/h-offering1.svg" alt="">
                            <img class="img-white hidden group-hover:block w-fit mr-6" src="./dist/assets/images/h-offering1.svg" alt="">
                            <div class="">
                                <div class="group-hover:text-white text-xl text-[#020800] mb-2">Wellness</div>
                                <p class="group-hover:text-white text-sm text-[#808380]">Lorem morbi et amet suscipit. At sed proin quis risus urna a. Magna in odio in urna amet ultrices fermentum.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="py-10">
                <p class="text-theme2 text-lg lg:text-2xl mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p class="text-theme2 text-lg lg:text-2xl mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
    </div> --}}
<!-- ----------------------------------------------------------------------------------- -->

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
