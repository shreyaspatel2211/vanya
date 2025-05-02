@include('header')

<style>
    .whatsapp-button {
        position: fixed;
        bottom: 80px; /* Adjust to place it above the footer */
        right: 20px; /* Adjust distance from the right side */
        z-index: 1000;
    }

    .whatsapp-button img {
        width: 60px; /* Adjust size */
        height: 60px;
        border-radius: 50%;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .whatsapp-button img:hover {
        transform: scale(1.1);
    }

    .floating-icons {
        position: fixed;
        right: 20px;
        top: 30%;
        z-index: 1000;
        display: flex;
        flex-direction: column;
        gap: 20px; /* Adjust spacing between icons */
    }

    /* Floating Icons */
    .floating-icon {
        position: relative;
        display: flex;
        align-items: center;
        text-decoration: none;
    }

    /* Circle button styling */
    .floating-icon img {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background-color: white; /* Pink color */
        padding: 10px;
        box-shadow: 2px 4px 6px rgba(0, 0, 0, 0.3);
        transition: transform 0.3s ease-in-out;
    }

    /* Enlarge icon on hover */
    .floating-icon:hover img {
        transform: scale(1.1);
    }

    /* Hidden Text Initially */
    .icon-text {
        position: absolute;
        right: 60px;
        background-color: black;
        color: white;
        padding: 5px 10px;
        border-radius: 5px;
        font-size: 14px;
        font-weight: bold;
        white-space: nowrap;
        opacity: 0;
        transform: translateX(10px);
        transition: opacity 0.3s ease, transform 0.3s ease;
    }

    /* Show Text on Hover */
    .floating-icon:hover .icon-text {
        opacity: 1;
        transform: translateX(0);
    }

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
{{-- <div class="floating-icons">
    <a href="https://facebook.com" target="_blank" class="floating-icon" id="icon1">
        <span class="icon-text">Breeders</span>
        <img src="{{ asset('dist/assets/images/breeders.jpg') }}" alt="Facebook">
    </a>
    <a href="https://twitter.com" target="_blank" class="floating-icon" id="icon2">
        <span class="icon-text">Dog walkers</span>
        <img src="{{ asset('dist/assets/images/walkers.png') }}" alt="Twitter">
    </a>
    <a href="https://twitter.com" target="_blank" class="floating-icon" id="icon3">
        <span class="icon-text">Trainers</span>
        <img src="{{ asset('dist/assets/images/trainers.png') }}" alt="Twitter">
    </a>
    <a href="https://twitter.com" target="_blank" class="floating-icon" id="icon3">
        <span class="icon-text">Doctor Appointment</span>
        <img src="{{ asset('dist/assets/images/doctor.png') }}" alt="Twitter">
    </a>
    <a href="https://twitter.com" target="_blank" class="floating-icon" id="icon3">
        <span class="icon-text">Date for your pet</span>
        <img src="{{ asset('dist/assets/images/date.png') }}" alt="Twitter">
    </a>
    <a href="https://twitter.com" target="_blank" class="floating-icon">
        <img src="{{ asset('dist/assets/images/cat-insurance1.svg') }}" alt="Twitter">
    </a>
</div> --}}

<div class="page bg-[#F9FAF9] ">
    <!-- banner section -->
    <div class="pt-[123px] bg-[url('{{ asset('dist/assets/images/about-bg.png') }}')] bg-no-repeat bg-cover py-10 relative overflow-hidden">
        <div class="container py-[50px] lg:py-[150px] flex flex-col-reverse md:flex-row justify-between items-center">
            <!-- Left Side -->
            <div class="w-full text-white relative  max-w-[600px] mt-5 md:mt-0 banner-header">
                <h1 class="text-[#050509] text-[32px] md:text-[48px] DMSans-bold mb-7">{{$service->banner_title}}</h1>
                <p class="text-[#333] relative mb-12 text-base">{{$service->banner_description}}</p>
                </a>
            </div>
        </div>
    </div>
    <!-- banner section -->
    <div class="py-20">
        <div class="container">
            {{-- <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 lg:gap-[100px]">
                <div class="group bg-white shadow-lg hover:bg-theme1 rounded-lg flex border border-[#DEDEDE] flex-col group-active:bg-theme1">
                    <div class="flex px-5 py-6 justify-between items-end">
                        <div class="text-[30px] uppercase DMSans-bold text-theme2 group-hover:text-white">dog
                            <br />Insurance
                        </div>
                        <img class="w-[55px] h-[55px] block group-hover:hidden" src="{{ asset('dist/assets/images/dog-insurance1.svg') }}" alt="">
                        <img class="w-[55px] h-[55px] img-white hidden group-hover:block" src="{{ asset('dist/assets/images/dog-insurance1.svg') }}" alt="">
                    </div>
                </div>
                <div class="group bg-white shadow-lg hover:bg-theme1 rounded-lg flex border border-[#DEDEDE] flex-col">
                    <div class="flex px-5 py-6 justify-between items-end">
                        <div class="text-[30px] uppercase DMSans-bold text-theme2 group-hover:text-white">Cat <br />Insurance</div>
                        <img class="w-[55px] h-[55px] block group-hover:hidden" src="{{ asset('dist/assets/images/cat-insurance1.svg') }}" alt="">
                        <img class="w-[55px] h-[55px] img-white hidden group-hover:block" src="{{ asset('dist/assets/images/cat-insurance1.svg') }}" alt="">
                    </div>
                </div>
                <div class="group bg-white shadow-lg hover:bg-theme1 rounded-lg flex border border-[#DEDEDE] flex-col">
                    <div class="flex px-5 py-6 justify-between items-end">
                        <div class="text-[30px] uppercase DMSans-bold text-theme2 group-hover:text-white">companion pet
                            <br />Insurance
                        </div>
                        <img class="w-[55px] h-[55px] block group-hover:hidden" src="{{ asset('dist/assets/images/companionpet-Insurance1.svg') }}" alt="">
                        <img class="w-[55px] h-[55px] img-white hidden group-hover:block" src="{{ asset('dist/assets/images/companionpet-Insurance1.svg') }}" alt="">
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    <div class="py-10 pb-5">
        <div class="container">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 pb-6">
                <div class="">
                    <h1 class="text-3xl lg:text-[70px] lg:leading-[70px] text-[#1C2937] DMSans-bold mb-5">{{$service->title}}</h1>
                    <p class="text-lg text-[#525252]">{{$service->short_description}}</p>
                </div>
                <div class="pb-10">
                    <div class="relative w-full h-[350px] lg:h-full mx-auto max-w-[500px] max-h-[500px] rounded-full border-[8px] border-white">
                        <img src="{{ Voyager::image($service->image) }}" class="relative z-10 rounded-full object-cover w-full h-full" alt="">
                        <div class="absolute -top-7 left-0 w-[520px] h-[520px] bg-no-repeat bg-contain hidden lg:block" style="background-image: url('{{ asset('dist/assets/images/half-ring.svg') }}');"></div>
                        <div class="absolute z-0 -bottom-[64px] -right-4 w-[340px] h-[340px] bg-no-repeat bg-contain" style="background-image: url('{{ asset('dist/assets/images/shadow.svg') }}');"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-10">
        <div class="container">
            <p class="text-lg lg:text-2xl text-theme2 pb-10">{!!$service->description!!}</p>
            <h2 class="heading-title text-[38px] DMSans-bold text-theme2 mb-3">What's <span class="text-theme1"> Covered ?</span></h2>
            <p class="text-theme2 text-lg lg:text-2xl mb-5">We offer flexible plans to suit every pet parent’s needs. Choose from three coverage options:</p>
        </div>
    </div>
    <div class="p-5 lg:p-10 bg-theme1">
        <div class="container">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 lg:gap-12">
                @foreach($covers as $cover)
                    <div class="bg-white group rounded-[8px] hover:bg-theme2">
                        <a class="flex gap-10 p-6" href="http://">
                            <div class="flex items-center">
                                <img class="w-fit mr-6 block group-hover:hidden" src="{{ asset('dist/assets/images/h-offering1.svg') }}" alt="">
                                <img class="img-white hidden group-hover:block w-fit mr-6" src="{{ asset('dist/assets/images/h-offering1.svg') }}" alt="">
                                <div class="">
                                    <div class="group-hover:text-white text-xl text-[#020800] mb-2">{{$cover->title}}</div>
                                    <p class="group-hover:text-white text-sm text-[#808380]">{!!$cover->description!!}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
                {{-- <div class="bg-white group rounded-[8px] hover:bg-theme2">
                    <a class="flex gap-10 p-6" href="http://">
                        <div class="flex items-center">
                            <img class="w-fit mr-6 block group-hover:hidden" src="{{ asset('dist/assets/images/h-offering1.svg') }}" alt="">
                            <img class="img-white hidden group-hover:block w-fit mr-6" src="{{ asset('dist/assets/images/h-offering1.svg') }}" alt="">
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
                            <img class="w-fit mr-6 block group-hover:hidden" src="{{ asset('dist/assets/images/h-offering1.svg') }}" alt="">
                            <img class="img-white hidden group-hover:block w-fit mr-6" src="{{ asset('dist/assets/images/h-offering1.svg') }}" alt="">
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
                            <img class="w-fit mr-6 block group-hover:hidden" src="{{ asset('dist/assets/images/h-offering1.svg') }}" alt="">
                            <img class="img-white hidden group-hover:block w-fit mr-6" src="{{ asset('dist/assets/images/h-offering1.svg') }}" alt="">
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
                            <img class="w-fit mr-6 block group-hover:hidden" src="{{ asset('dist/assets/images/h-offering1.svg') }}" alt="">
                            <img class="img-white hidden group-hover:block w-fit mr-6" src="{{ asset('dist/assets/images/h-offering1.svg') }}" alt="">
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
                            <img class="w-fit mr-6 block group-hover:hidden" src="{{ asset('dist/assets/images/h-offering1.svg') }}" alt="">
                            <img class="img-white hidden group-hover:block w-fit mr-6" src="{{ asset('dist/assets/images/h-offering1.svg') }}" alt="">
                            <div class="">
                                <div class="group-hover:text-white text-xl text-[#020800] mb-2">Wellness</div>
                                <p class="group-hover:text-white text-sm text-[#808380]">Lorem morbi et amet suscipit. At sed proin quis risus urna a. Magna in odio in urna amet ultrices fermentum.</p>
                            </div>
                        </div>
                    </a>
                </div> --}}
            </div>
        </div>
    </div>
    <div class="py-10">
        <div class="container">
            <h2 class="heading-title text-[38px] DMSans-bold text-theme2 mb-3">{!! setting('service.question') !!}</span></h2>
            <p class="text-theme2 text-lg lg:text-2xl mb-3">{!! setting('service.answer') !!}</p>
        </div>
    </div>
    {{-- <div class="py-10 bg-[#C3D8C1]">
        <div class="container">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">
                <div>
                    <h2 class="heading-title text-[38px] DMSans-bold text-theme2 mb-6">Get a <span class="text-theme1"> Free Quote Today!</span></h2>
                    <div class="bg-white rounded-lg p-5 lg:p-10">
                        <h4 class="w-full DMSans-bold text-center mb-8 text-lg lg:text-2xl text-[#252B42]">Tell us about your pet</h4>
                        <form action="{{ route('get-quote.submit') }}" method="POST">
                            @csrf
                            <div class="form-group mb-7">
                                <label for="" class="text-[#252B42] text-sm DMSans-semibold mb-2 block">Name * </label>
                                <input class="w-full px-7 py-4 bg-[#F9F9F9] rounded-md text-[#9F9F9F] outline-none border border-[#E6E6E6]" type="text" placeholder="Enter Name of your pet * " name="" id="">
                            </div>
                            <div class="form-group mb-7">
                                <label for="" class="text-[#252B42] text-sm DMSans-semibold mb-2 block">Category *</label>
                                <div class="grid grid-cols-1 lg:grid-cols-3 gap-3 lg:gap-6">
                                    <!-- Option 1 -->
                                    <label class="cursor-pointer bg-[#F9F9F9] rounded-lg border border-[#E6E6E6]">
                                        <input type="radio" name="option" value="dog" class="peer hidden" 
                                            {{ $service->service_name === 'DOG INSURANCE' ? 'checked' : 'disabled' }}>
                                        <div class="border-2 border-transparent peer-checked:border-[#184175] rounded-lg p-10 text-center">
                                            <img src="{{ asset('dist/assets/images/dog-insurance1.svg') }}" alt="Option 1" class="w-24 h-24 mx-auto mb-8 rounded-lg">
                                            <p class="mt-2 text-base text-[#252B42] DMSans-bold">Dog</p>
                                        </div>
                                    </label>
                                    <!-- Option 2 -->
                                    <label class="cursor-pointer bg-[#F9F9F9] rounded-lg border border-[#E6E6E6]">
                                        <input type="radio" name="option" value="cat" class="peer hidden"
                                        {{ $service->service_name === 'CAT INSURANCE' ? 'checked' : 'disabled' }}>
                                        <div class="border-2 border-transparent peer-checked:border-[#184175] rounded-lg p-10 text-center">
                                            <img src="{{ asset('dist/assets/images/cat-insurance1.svg') }}" alt="Option 2" class="w-24 h-24 mx-auto mb-8 rounded-lg">
                                            <p class="mt-2 text-base text-[#252B42] DMSans-bold">Cat</p>
                                        </div>
                                    </label>
                                    <!-- Option 3 -->
                                    <label class="cursor-pointer bg-[#F9F9F9] rounded-lg border border-[#E6E6E6]">
                                        <input type="radio" name="option" value="companion_pet" class="peer hidden"
                                        {{ $service->service_name === 'COMPANION PET INSURANCE' ? 'checked' : 'disabled' }}>
                                        <div class="border-2 border-transparent peer-checked:border-[#184175] rounded-lg p-10 text-center">
                                            <img src="{{ asset('dist/assets/images/companionpet-Insurance1.svg') }}" alt="Option 3" class="w-24 h-24 mx-auto mb-8 rounded-lg">
                                            <p class="mt-2 text-base text-[#252B42] DMSans-bold">Companion pet</p>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-7">
                                <label for="" class="text-[#252B42] text-sm DMSans-semibold mb-2 block">Breed *</label>
                                <div class="relative after:content-['⌄'] after:absolute after:right-5 after:top-5 after:text-[32px] after:text-[#737373] after:leading-[0] z-20 cursor-pointer">
                                    <select class="appearance-none relative w-full cursor-pointer px-7 py-4 pr-11 bg-[#F9F9F9] rounded-md text-[#9F9F9F] outline-none border border-[#E6E6E6]" name="breed_name" id="">
                                        <option value="">Select breed</option>
                                        @foreach ($getBreed as $breed)
                                            <option value="{{ $breed->id }}">{{ $breed->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group mb-7">
                                <label for="" class="text-[#252B42] text-sm DMSans-semibold mb-2 block">Age *</label>
                                <div class="relative after:content-['⌄'] after:absolute after:right-5 after:top-5 after:text-[32px] after:text-[#737373] after:leading-[0] z-20 cursor-pointer">
                                    <select class="appearance-none relative w-full cursor-pointer px-7 py-4 pr-11 bg-[#F9F9F9] rounded-md text-[#9F9F9F] outline-none border border-[#E6E6E6]" name="age" id="">
                                        <option value="">Select Age</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>
                            </div>
                            <div class="flex justify-between gap-4">
                                <button type="submit" class="flex w-fit items-center btn bg-theme1 text-white rounded-lg py-[10px] lg:py-[20px] px-[32px] DMSans-medium text-lg btn-shadow">Get a quote </button>
                                <img src="{{ asset('dist/assets/images/pet-foot.svg') }}" class="w-[65px] opacity-60" alt="">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="flex items-center">
                    <img src="{{ asset('dist/assets/images/dog-insurance-c.png') }}" class="w-full max-w-[600px] ml-auto" alt="">
                </div>
            </div>
        </div>
    </div> --}}
    <div class="bg-[#DFDFDF]">
        <div class="container">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20">
                <div class="">
                    <img src="{{ asset('dist/assets/images/faq.png') }}" class="w-full max-h-[685px] object-cover ml-auto" alt="">
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
                            <img src="{{ asset('dist/assets/images/contact.png') }}" alt="">
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
                                <img src="{{ asset('dist/assets/images/pet-foot.svg') }}" class="w-[65px] opacity-60" alt="">
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    @if(session('success'))
        toastr.success("{{ session('success') }}");
    @endif
</script>
@include('footer')
