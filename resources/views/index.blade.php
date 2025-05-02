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


<div class="page">
    <!-- banner section -->
    <div class="pt-[90px] h-[100vh] py-10 relative overflow-hidden">
        <div class="banner-video h-[100vh]">
            <video class="w-full h-full object-cover" autoplay loop muted playsinline>
                <source src="https://vanya.vikartrtechnologies.com/dist/assets/images/VanyaBannerVideo.mp4">
            </video>
        </div>
        {{-- <div class="bg-theme2 grid grid-cols-3 gap-2 p-5 absolute right-2 top-[110px] max-w-[50%] w-full rounded-lg">
            <a href="http://" class="flex flex-col justiy-between p-2 bg-white rounded-md">
                <img src="" alt="">
                <div class="text-lg font-semibold text-theme2">Lorium Ipsum</div>
            </a>
            <a href="http://" class="flex flex-col justiy-between p-2 bg-white rounded-md">
                <img src="" alt="">
                <div class="text-lg font-semibold text-theme2">Lorium Ipsum</div>
            </a>
            <a href="http://" class="flex flex-col justiy-between p-2 bg-white rounded-md">
                <img src="" alt="">
                <div class="text-lg font-semibold text-theme2">Lorium Ipsum</div>
            </a>
            <a href="http://" class="flex flex-col justiy-between p-2 bg-white rounded-md">
                <img src="" alt="">
                <div class="text-lg font-semibold text-theme2">Lorium Ipsum</div>
            </a>
            <a href="http://" class="flex flex-col justiy-between p-2 bg-white rounded-md">
                <img src="" alt="">
                <div class="text-lg font-semibold text-theme2">Lorium Ipsum</div>
            </a>
            <a href="http://" class="flex flex-col justiy-between p-2 bg-white rounded-md">
                <img src="" alt="">
                <div class="text-lg font-semibold text-theme2">Lorium Ipsum</div>
            </a>
        </div> --}}

        <div
            class="absolute left-0 right-0 mx-auto top-[70%] transform translate-y-[-50%] container py-[10px] lg:py-[150px] pb-0 flex flex-col-reverse md:flex-row justify-between items-center">
            <!-- Left Side -->
            <div class="py-10 w-full">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-2 2xl:gap-8">
                    @foreach ($services as $service)
                        <a href="{{ route('service.detail', $service->id) }}"
                            class="group relative bg-white shadow-lg hover:bg-theme1 rounded-lg flex flex-col">
                            <div class="flex px-5 py-6 lg:pb-2 justify-between items-center pr-12 lg:pr-6">
                                <div class="text-2xl uppercase DMSans-bold text-theme2 group-hover:text-white">
                                    {{ $service->service_name }}
                                </div>
                                {{-- <img class="w-[55px] h-[55px] block group-hover:hidden"
                                    src="./dist/assets/images/dog-insurance1.svg" alt="">
                                <img class="w-[55px] h-[55px] img-white hidden group-hover:block"
                                    src="./dist/assets/images/dog-insurance1.svg" alt=""> --}}
                            </div>
                            <span
                                class="hidden lg:block px-5 pb-5 pb-2 text-lg text-theme2 text-left w-full max-w-[220px] group-hover:text-white">{{ $service->home_page_desc }}</span>
                            <img class="absolute bottom-0 right-0 max-w-[80px] mt-auto w-fit block"
                                src="{{ Voyager::image($service->home_page_image) }}" alt="">
                        </a>
                    @endforeach
                    {{-- <div class="group bg-white shadow-lg hover:bg-theme1 rounded-lg flex flex-col">
                        <div class="flex px-5 py-6 lg:pb-2 justify-between items-end">
                            <div class="text-2xl uppercase DMSans-bold text-theme2 group-hover:text-white">Cat <br />Insurance</div>
                            <img class="w-[55px] h-[55px] block group-hover:hidden" src="./dist/assets/images/cat-insurance1.svg" alt="">
                            <img class="w-[55px] h-[55px] img-white hidden group-hover:block" src="./dist/assets/images/cat-insurance1.svg" alt="">
                        </div>
                        <span class="hidden lg:block px-5 pb-5 pb-2 text-lg text-theme2 text-center w-full max-w-[220px] mx-auto group-hover:text-white">Health care plans for
                        cats & kittens</span>
                        <img class="hidden lg:block mt-auto w-fit" src="./dist/assets/images/cat-insurance.png" alt="">
                    </div>
                    <div class="group bg-white shadow-lg hover:bg-theme1 rounded-lg flex flex-col">
                        <div class="flex px-5 py-6 lg:pb-2 justify-between items-end">
                            <div class="text-2xl uppercase DMSans-bold text-theme2 group-hover:text-white">companion pet
                                <br />Insurance
                            </div>
                            <img class="w-[55px] h-[55px] block group-hover:hidden" src="./dist/assets/images/companionpet-Insurance1.svg" alt="">
                            <img class="w-[55px] h-[55px] img-white hidden group-hover:block" src="./dist/assets/images/companionpet-Insurance1.svg" alt="">
                        </div>
                        <span class="hidden lg:block px-5 pb-5 pb-2 text-lg text-theme2 text-center w-full max-w-[220px] mx-auto group-hover:text-white">Health care plans for
                        dogs & puppies</span>
                        <img class="hidden lg:block mt-auto w-fit" src="./dist/assets/images/companionpet-Insurance.png" alt="">
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- banner section -->
    <div class="px-5 pt-3 relative bg-[#91AE8B]">
        <div class="flex items-center justify-center flex-wrap gap-5 lg:gap-20">
            <img src="./dist/assets/images/freepet-care.png" alt=""
                class="w-[120px] max-w-[150px] transform scale-x-[-1]">
            <h1 class="text-white py-2 text-[32px] md:text-[48px] DMSans-semibold text-center">{!! setting('home-page.banner_slogan') !!}
            </h1>
        </div>
    </div>
    <div class="bg-[#C7D7E3]">
        <div class="container">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-12">
                <div class="py-[30px] lg:py-[60px]">
                    <div class="heading-wrapper mb-6 w-full text-center lg:text-right max-w-[500px] ml-auto">
                        <div class="heading-label uppercase text-base DMSans-medium text-theme2 mb-1 tracking-[4px]">
                            COvers</div>
                        <h2 class="heading-title text-[38px] DMSans-bold text-theme2 mb-3">Our<span class="text-theme1">
                                Offerings </span></h2>
                        <p class="text-2xl DMSans-medium text-theme2">What are the things we cover !
                        </p>
                    </div>
                    {{-- @if ($covers->count() > 0)
                        @php $firstCover = $covers->shift(); @endphp
                        <div class="bg-white group rounded-[8px] hover:bg-theme1">
                            <a class="flex gap-10 p-6" href="http://">
                                <div class="flex items-center">
                                    <img class="w-fit mr-6 block group-hover:hidden" src="./dist/assets/images/h-offering2.svg" alt="">
                                    <img class="img-white hidden group-hover:block w-fit mr-6" src="./dist/assets/images/h-offering2.svg" alt="">
                                    <div class="">
                                        <div class="group-hover:text-white text-xl text-[#020800] mb-2">{{ $firstCover->title }}</div>
                                        <p class="group-hover:text-white text-sm text-[#808380]">{!! $firstCover->description !!}</p>
                                    </div>
                                </div>
                                <div class="text-2xl text-theme1 flex items-center group-hover:text-white">❯</div>
                            </a>
                        </div>
                    @endif --}}
                </div>
                <div class="hidden lg:block">
                    <img src="./dist/assets/images/reverece-cat.png" class="w-fit ml-auto" alt="">
                </div>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 2xl:gap-12 pb-[60px]">
                @foreach ($covers as $cover)
                    <div class="bg-white group rounded-[8px] hover:bg-theme1">
                        <a class="flex gap-10 p-6" href="http://">
                            <div class="flex items-center">
                                <img class="w-fit mr-6 block group-hover:hidden"
                                    src="./dist/assets/images/h-offering2.svg" alt="">
                                <img class="img-white hidden group-hover:block w-fit mr-6"
                                    src="./dist/assets/images/h-offering2.svg" alt="">
                                <div class="">
                                    <div class="group-hover:text-white text-xl text-[#020800] mb-2">{{ $cover->title }}
                                    </div>
                                    <p class="group-hover:text-white text-sm text-[#808380]">{!! $cover->description !!}</p>
                                </div>
                            </div>
                            {{-- <div class="text-2xl text-theme1 flex items-center group-hover:text-white">❯</div> --}}
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="py-[70px]">
        <div class="container">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 lg:gap-10">
                <div class="">
                    <img src="./dist/assets/images/step-guide.png" class="rounded-lg mb-8" alt="">
                    {{-- <div class="text-[32px] mb-4 text-[#020800]">Contact Our Expert</div>
                    <div class="flex flex-col lg:flex-row lg:items-center gap-5 lg:gap-10">
                        <div class="flex -space-x-3">
                            <img src="./dist/assets/images/team2.png"
                                class="w-[64px] h-[64px] min-w-[64px] min-h-[64px] rounded-full border-2 border-white object-cover"
                                alt="">
                            <img src="./dist/assets/images/team2.png"
                                class="w-[64px] h-[64px] min-w-[64px] min-h-[64px] rounded-full border-2 border-white object-cover"
                                alt="">
                            <img src="./dist/assets/images/team2.png"
                                class="w-[64px] h-[64px] min-w-[64px] min-h-[64px] rounded-full border-2 border-white object-cover"
                                alt="">
                        </div>
                        <p class="text-base text-[#98A393] max-w-[400px]">Reach Out to Our Professionals for Pet
                            Parenting Advice</p>
                    </div> --}}
                </div>
                <div>
                    <div class="heading-wrapper mb-6 w-full text-center lg:text-right max-w-[500px] ml-auto mb-[60px]">
                        <div class="heading-label uppercase text-base DMSans-medium text-theme2 mb-1 tracking-[4px]">
                            Steps to follow</div>
                        <h2 class="heading-title text-[38px] DMSans-bold text-theme2 mb-3">The
                            <span class="text-theme1">Step-by-Step</span><br />Guide to Pet Insurance
                        </h2>
                    </div>
                    <ul class="list-decimal pl-6 lg:pl-0">
                        <li
                            class="marker:text-theme1 marker:DMSans-black text-lg text-[#808380] pb-6 mb-6 border-b border-[#98A393]">
                            <span class="DMSans-black text-theme1">{!! setting('home-page.guide_1_titel') !!}</span> -
                            {!! setting('home-page.guide_1_desc') !!}
                        </li>
                        <li
                            class="marker:text-theme1 marker:DMSans-black text-lg text-[#808380] pb-6 mb-6 border-b border-[#98A393]">
                            <span class="DMSans-black text-theme1">{!! setting('home-page.guide_2_title') !!}</span> -
                            {!! setting('home-page.guide_2_desc') !!}
                        </li>
                        <li
                            class="marker:text-theme1 marker:DMSans-black text-lg text-[#808380] pb-6 mb-6 border-b border-[#98A393]">
                            <span class="DMSans-black text-theme1">{!! setting('home-page.guide_3_title') !!}</span> -
                            {!! setting('home-page.guide_3_desc') !!}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="py-[70px] relative">
        <div class="container">
            <div class="heading-wrapper mb-6 w-full text-center lg:text-right max-w-[500px] ml-auto">
                <div class="heading-label uppercase text-base DMSans-medium text-theme2 mb-1 tracking-[4px]">Pricing
                    Plans</div>
                <h2 class="heading-title text-[38px] DMSans-bold text-theme2 mb-3">Our <span class="text-theme1">Pet
                        Insurance Plans</span></h2>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                @foreach ($plans as $plan)
                    <div class="group bg-[#F3F5FC] border border-[#EAEEFF] p-10 hover:bg-theme2 rounded-lg">
                        <div class="text-2xl DMSans-bold text-[#050509] group-hover:text-white mb-6">₹
                            {{ $plan->price }} <span class="text-base font-medium text-[#3AA9E9]">/month</span></div>
                        <div class="text-[32px] DMSans-bold mb-4 text-[#050509] group-hover:text-white">
                            {{ $plan->name }}</div>
                        <p class="text-base text-[#828284] pb-6 mb-6 border-b border-[#D0DBFF]">
                            {{ $plan->short_description }}</p>
                        <div
                            class="uppercase text-base DMSans-medium text-[#050509] group-hover:text-white mb-1 tracking-[4px]">
                            Coverage Included:</div>
                        <ul class="list-disc space-y-2 pl-3 ml-3 py-4 mb-6">
                            @foreach (json_decode($plan->coverage_include, true) as $coverage)
                                <li class="text-lg text-[#828284]">{{ $coverage }}</li>
                                {{-- <li class="text-lg text-[#828284]">Life insurance</li> --}}
                                {{-- <li class="text-lg text-[#828284]">Life insurance</li> --}}
                            @endforeach
                        </ul>
                        <div
                            class="uppercase text-base DMSans-medium text-[#050509] group-hover:text-white mb-1 tracking-[4px]">
                            Key Features:</div>
                        <ul class="list-disc space-y-2 pl-3 ml-3 py-4 mb-6">
                            @foreach (json_decode($plan->key_feature, true) as $feature)
                                <li class="text-lg text-[#828284]">{{ $feature }}</li>
                                {{-- <li class="text-lg text-[#828284]">Life insurance</li> --}}
                                {{-- <li class="text-lg text-[#828284]">Life insurance</li> --}}
                            @endforeach
                        </ul>
                        <a href="/plan"
                            class="flex justify-center w-full items-center btn bg-theme2 text-center text-white rounded-lg py-[10px] lg:py-[20px] px-[32px] DMSans-medium text-lg btn-shadow group-hover:bg-theme1">Get
                            a Plan
                        </a>
                    </div>
                @endforeach
                {{-- <div class="group bg-[#F3F5FC] border border-[#EAEEFF] p-10 hover:bg-theme2 rounded-lg">
                    <div class="text-2xl DMSans-bold text-[#050509] group-hover:text-white mb-6">₹ 6500 <span class="text-base font-medium text-[#3AA9E9]">/month</span></div>
                    <div class="text-[32px] DMSans-bold mb-4 text-[#050509] group-hover:text-white">Modular Pet</div>
                    <p class="text-base text-[#828284] pb-6 mb-6 border-b border-[#D0DBFF]">Aenean adipiscing amet dui cursus rhoncus nibh nec tortor fusce.</p>
                    <div class="uppercase text-base DMSans-medium text-[#050509] group-hover:text-white mb-1 tracking-[4px]">Coverage Included:</div>
                    <ul class="list-disc space-y-2 pl-3 ml-3 py-4 mb-6">
                        <li class="text-lg text-[#828284]">Life insurance</li>
                        <li class="text-lg text-[#828284]">Life insurance</li>
                        <li class="text-lg text-[#828284]">Life insurance</li>
                    </ul>
                    <div class="uppercase text-base DMSans-medium text-[#050509] group-hover:text-white mb-1 tracking-[4px]">Key Features:</div>
                    <ul class="list-disc space-y-2 pl-3 ml-3 py-4 mb-6">
                        <li class="text-lg text-[#828284]">Life insurance</li>
                        <li class="text-lg text-[#828284]">Life insurance</li>
                        <li class="text-lg text-[#828284]">Life insurance</li>
                    </ul>
                    <a href="#" class="flex justify-center w-full items-center btn bg-theme2 text-center text-white rounded-lg py-[10px] lg:py-[20px] px-[32px] DMSans-medium text-lg btn-shadow group-hover:bg-theme1">Get a Quote
                    </a>
                </div>
                <div class="group bg-[#F3F5FC] border border-[#EAEEFF] p-10 hover:bg-theme2 rounded-lg">
                    <div class="text-2xl DMSans-bold text-[#050509] group-hover:text-white mb-6">V8500 <span class="text-base font-medium text-[#3AA9E9]">/month</span></div>
                    <div class="text-[32px] DMSans-bold mb-4 text-[#050509] group-hover:text-white">Whole Pet</div>
                    <p class="text-base text-[#828284] pb-6 mb-6 border-b border-[#D0DBFF]">Aenean adipiscing amet dui cursus rhoncus nibh nec tortor fusce.</p>
                    <div class="uppercase text-base DMSans-medium text-[#050509] group-hover:text-white mb-1 tracking-[4px]">Coverage Included:</div>
                    <ul class="list-disc space-y-2 pl-3 ml-3 py-4 mb-6">
                        <li class="text-lg text-[#828284]">Life insurance</li>
                        <li class="text-lg text-[#828284]">Life insurance</li>
                        <li class="text-lg text-[#828284]">Life insurance</li>
                    </ul>
                    <div class="uppercase text-base DMSans-medium text-[#050509] group-hover:text-white mb-1 tracking-[4px]">Key Features:</div>
                    <ul class="list-disc space-y-2 pl-3 ml-3 py-4 mb-6">
                        <li class="text-lg text-[#828284]">Life insurance</li>
                        <li class="text-lg text-[#828284]">Life insurance</li>
                        <li class="text-lg text-[#828284]">Life insurance</li>
                    </ul>
                    <a href="#" class="flex justify-center w-full items-center btn bg-theme2 text-center text-white rounded-lg py-[10px] lg:py-[20px] px-[32px] DMSans-medium text-lg btn-shadow group-hover:bg-theme1">Get a Quote
                    </a>
                </div> --}}
            </div>
            <img src="./dist/assets/images/pricing.png" class="hidden lg:block absolute bottom-0 right-0"
                alt="">
        </div>
    </div>
    <div class="py-[54px] bg-[#64636A]">
        <div class="container">
            <div class="heading-wrapper w-full max-w-[600px] text-center lg:text-left mr-auto mb-10">
                <div class="heading-label uppercase text-base DMSans-medium text-white mb-1 tracking-[4px]">Exclusive
                    Breeds</div>
                <h2 class="heading-title text-[38px] DMSans-bold text-white mb-3">Unique <span
                        class="text-theme1">Companions</span></h2>
                <p class="text-lg DMSans-medium text-white">Discover a variety of exclusive pet breeds covered by our Paws n Claws Pet Insurance, ensuring the best care for your furry friends.
                </p>
            </div>
            <div class="tabs mb-12">
                <div class="tab active" data-tab="tab1">Dog</div>
                <div class="tab" data-tab="tab2">Cat</div>
            </div>
            <div id="tab1" class="tab-content active">
                <div class="teams-slider">
                    @foreach ($dogs as $dog)
                        <div class="px-5">
                            <div
                                class="relative after:content-[''] after:absolute after:w-full after:h-full after:top-0 after:left-0 after:bg-[#000000] after:bg-opacity-20 after:rounded-lg">
                                <img src="{{ Voyager::image($dog->image) }}"
                                    class="w-full rounded-lg object-cover h-[350px] lg:h-[280px]" alt="">
                                <div class="absolute z-10 bottom-0 left-0 py-5 px-5">
                                    <div class="text-lg text-white DMSans-bold">{{ $dog->name }}</div>
                                    {{-- <a href="/get_quote"
                                        class="flex w-fit items-center btn bg-theme1 text-white rounded-lg py-[10px] lg:py-[8px] px-[22px] DMSans-medium text-lg btn-shadow">Get
                                        a Quote
                                    </a> --}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{-- <div class="px-5">
                        <div class="relative after:content-[''] after:absolute after:w-full after:h-full after:top-0 after:left-0 after:bg-[#000000] 5 after:rounded-lg">
                            <img src="./dist/assets/images/team2.png" class="w-full rounded-lg h-[380px]" alt="">
                            <div class="absolute z-10 bottom-0 left-0 py-5 px-5">
                                <div class="text-sm text-white DMSans-bold mb-3">Major medicalSM with wellness</div>
                                <p class="text-white text-xs DMSans-medium mb-3">Lorem morbi et amet  suscipit. At sed proin quis risus urna a. Magna in odio in urna amet ultrices fermentum. Mauris in pretium eget.</p>
                                <a href="#" class="flex w-fit items-center btn bg-theme1 text-white rounded-lg py-[10px] lg:py-[8px] px-[22px] DMSans-medium text-lg btn-shadow">Get a Quote
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="px-5">
                        <div class="relative after:content-[''] after:absolute after:w-full after:h-full after:top-0 after:left-0 after:bg-[#000000] after:bg-opacity-30 after:rounded-lg">
                            <img src="./dist/assets/images/team2.png" class="w-full rounded-lg h-[380px]" alt="">
                            <div class="absolute z-10 bottom-0 left-0 py-5 px-5">
                                <div class="text-sm text-white DMSans-bold mb-3">Major medicalSM with wellness</div>
                                <p class="text-white text-xs DMSans-medium mb-3">Lorem morbi et amet  suscipit. At sed proin quis risus urna a. Magna in odio in urna amet ultrices fermentum. Mauris in pretium eget.</p>
                                <a href="#" class="flex w-fit items-center btn bg-theme1 text-white rounded-lg py-[10px] lg:py-[8px] px-[22px] DMSans-medium text-lg btn-shadow">Get a Quote
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="px-5">
                        <div class="relative after:content-[''] after:absolute after:w-full after:h-full after:top-0 after:left-0 after:bg-[#000000] after:bg-opacity-30 after:rounded-lg">
                            <img src="./dist/assets/images/team2.png" class="w-full rounded-lg h-[380px]" alt="">
                            <div class="absolute z-10 bottom-0 left-0 py-5 px-5">
                                <div class="text-sm text-white DMSans-bold mb-3">Major medicalSM with wellness</div>
                                <p class="text-white text-xs DMSans-medium mb-3">Lorem morbi et amet  suscipit. At sed proin quis risus urna a. Magna in odio in urna amet ultrices fermentum. Mauris in pretium eget.</p>
                                <a href="#" class="flex w-fit items-center btn bg-theme1 text-white rounded-lg py-[10px] lg:py-[8px] px-[22px] DMSans-medium text-lg btn-shadow">Get a Quote
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="px-5">
                        <div class="relative after:content-[''] after:absolute after:w-full after:h-full after:top-0 after:left-0 after:bg-[#000000] after:bg-opacity-30 after:rounded-lg">
                            <img src="./dist/assets/images/team2.png" class="w-full rounded-lg h-[380px]" alt="">
                            <div class="absolute z-10 bottom-0 left-0 py-5 px-5">
                                <div class="text-sm text-white DMSans-bold mb-3">Major medicalSM with wellness</div>
                                <p class="text-white text-xs DMSans-medium mb-3">Lorem morbi et amet  suscipit. At sed proin quis risus urna a. Magna in odio in urna amet ultrices fermentum. Mauris in pretium eget.</p>
                                <a href="#" class="flex w-fit items-center btn bg-theme1 text-white rounded-lg py-[10px] lg:py-[8px] px-[22px] DMSans-medium text-lg btn-shadow">Get a Quote
                                </a>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>

            <div id="tab2" class="tab-content">
                <div class="teams-slider">
                    @foreach ($cats as $cat)
                        <div class="px-5">
                            <div
                                class="relative after:content-[''] after:absolute after:w-full after:h-full after:top-0 after:left-0 after:bg-[#000000] after:bg-opacity-20 after:rounded-lg">
                                <img src="{{ Voyager::image($cat->image) }}"
                                    class="w-full rounded-lg object-cover h-[350px] lg:h-[280px]" alt="">
                                <div class="absolute z-10 bottom-0 left-0 py-5 px-5">
                                    <div class="text-lg text-white DMSans-bold">{{ $cat->name }}</div>
                                    {{-- <p class="text-white text-xs DMSans-medium mb-3">{{ $feature->description }}</p> --}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="py-[70px] bg-[#F3F5FC]">
        <div class="container">
            <div class="flex flex-col lg:flex-row items-end justify-between mb-20">
                <div class="heading-wrapper w-full text-center lg:text-left max-w-[500px] mr-auto">
                    <div class="heading-label uppercase text-base DMSans-medium text-theme2 mb-1 tracking-[4px]">
                        Testimonials</div>
                    <h2 class="heading-title text-[38px] DMSans-bold text-theme2">Hear from <span
                            class="text-theme1">Our Clients</span></h2>
                </div>
                <a href="" class="text-theme1 mt-2 lg:mt-0 text-xl DMSans-medium">See All Testimonials</a>
            </div>
            <div class="testimonial-slider">
                @foreach ($reviews as $review)
                    <div class="px-4">
                        <div class="bg-white rounded-lg border-[#EAEEFF] p-10">
                            <div class="flex items-center mb-8 pb-8 border-b border-[#EAEEFF]">
                                {{-- <img src="./dist/assets/images/team2.png" class="w-[60px] h-[60px] object-cover rounded-full mr-3" alt=""> --}}
                                <div class="">
                                    {{-- <div class="flex items-center mb-2">
                                    <i class="fas fa-star text-yellow-500 hover:text-yellow-500"></i>
                                    <i class="fas fa-star text-yellow-500 hover:text-yellow-500"></i>
                                    <i class="fas fa-star text-yellow-500 hover:text-yellow-500"></i>
                                    <i class="fas fa-star text-[#EAEEFF] hover:text-yellow-500"></i>
                                    <i class="fas fa-star text-[#EAEEFF] hover:text-yellow-500"></i>
                                </div> --}}
                                    <div class="text-[#050509] text-sm DMSans-medium">{{ $review->name }}</div>
                                </div>
                            </div>
                            <p class="text-[#828284] DMSans-medium text-base">{{ $review->review }}</p>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="px-4">
                    <div class="bg-white rounded-lg border-[#EAEEFF] p-10">
                        <div class="flex items-center mb-8 pb-8 border-b border-[#EAEEFF]">
                            <img src="./dist/assets/images/team2.png" class="w-[60px] h-[60px] object-cover rounded-full mr-3" alt="">
                            <div class="">
                                <div class="flex items-center mb-2">
                                    <i class="fas fa-star text-yellow-500 hover:text-yellow-500"></i>
                                    <i class="fas fa-star text-yellow-500 hover:text-yellow-500"></i>
                                    <i class="fas fa-star text-yellow-500 hover:text-yellow-500"></i>
                                    <i class="fas fa-star text-[#EAEEFF] hover:text-yellow-500"></i>
                                    <i class="fas fa-star text-[#EAEEFF] hover:text-yellow-500"></i>
                                </div>
                                <div class="text-[#050509] text-sm DMSans-medium">Melba King, Consultant</div>
                            </div>
                        </div>
                        <p class="text-[#828284] DMSans-medium text-base">“Aenean adipiscing amet dui cursus rhoncus nibh nec tortor fusce. Elementum dui tempor eget ac vitae hendrerit nisl. Erat id sit.”</p>
                    </div>
                </div>
                <div class="px-4">
                    <div class="bg-white rounded-lg border-[#EAEEFF] p-10">
                        <div class="flex items-center mb-8 pb-8 border-b border-[#EAEEFF]">
                            <img src="./dist/assets/images/team2.png" class="w-[60px] h-[60px] object-cover rounded-full mr-3" alt="">
                            <div class="">
                                <div class="flex items-center mb-2">
                                    <i class="fas fa-star text-yellow-500 hover:text-yellow-500"></i>
                                    <i class="fas fa-star text-yellow-500 hover:text-yellow-500"></i>
                                    <i class="fas fa-star text-yellow-500 hover:text-yellow-500"></i>
                                    <i class="fas fa-star text-[#EAEEFF] hover:text-yellow-500"></i>
                                    <i class="fas fa-star text-[#EAEEFF] hover:text-yellow-500"></i>
                                </div>
                                <div class="text-[#050509] text-sm DMSans-medium">Melba King, Consultant</div>
                            </div>
                        </div>
                        <p class="text-[#828284] DMSans-medium text-base">“Aenean adipiscing amet dui cursus rhoncus nibh nec tortor fusce. Elementum dui tempor eget ac vitae hendrerit nisl. Erat id sit.”</p>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <div class="bg-[#DFDFDF]">
        <div class="container">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-20">
                <div class="">
                    <img src="./dist/assets/images/faq.png" class="w-full max-h-[685px] object-cover ml-auto"
                        alt="">
                </div>
                <div class="py-10 lg:py-20">
                    <div class="heading-wrapper text-center lg:text-right w-full max-w-[600px] ml-auto mb-10">
                        <div class="heading-label uppercase text-base DMSans-medium text-theme2 mb-1 tracking-[4px]">
                            FAQ’s</div>
                        <h2 class="heading-title text-[38px] DMSans-bold text-theme2 mb-3">Frequently Asked <span
                                class="text-theme1"><br />Questions ?</span></h2>
                    </div>
                    <div class="faq-accordion flex flex-col items-center justify-center">
                        <!--  Panel 1  -->
                        @foreach ($faqs as $index => $faq)
                            <div class="w-full mb-3 rounded-[10px]">
                                <input type="checkbox" name="panel" id="panel-{{ $index }}"
                                    class="hidden">
                                <label for="panel-{{ $index }}"
                                    class="relative  bg-white block text-theme2 font-bold text-base p-[20px] pl-[70px] mb-0 cursor-pointer rounded-[10px]">
                                    {{ $faq->question }}
                                </label>
                                <div class="accordion__content overflow-hidden bg-grey-lighter">
                                    <p class="!pt-0 bg-white text-[16px] rounded-b-[10px] accordion__body p-4 text-[#82828A]"
                                        id="panel1">{{ $faq->answer }}</p>
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
    <div class="py-10 lg:py-[100px] bg-theme2">
        <div class="container">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 lg:gap-10">
                <div class="">
                    <div class="heading-wrapper w-full max-w-[600px] mr-auto mb-10">
                        <div class="heading-label uppercase text-base DMSans-medium text-white mb-1 tracking-[4px]">Why
                            Choose Us</div>
                        <h2 class="heading-title text-[38px] DMSans-bold text-white mb-3">{!! setting('home-page.choose_us_title') !!}</h2>
                    </div>
                    <div class="flex gap-10 pb-10">
                        <img src="./dist/assets/images/pet-foot.svg" class="w-auto" alt="">
                        <div class="text-white">
                            <div class="text-2xl mb-4 DMSans-bold">{!! setting('home-page.choose_us_subtitle_1') !!}</div>
                            <p class="text-[#9F9F9F] text-base font-medium">{!! setting('home-page.choose_us_desc_1') !!}</p>
                        </div>
                    </div>
                    <div class="flex gap-10 pb-10">
                        <img src="./dist/assets/images/pet-foot.svg" class="w-auto" alt="">
                        <div class="text-white">
                            <div class="text-2xl mb-4 DMSans-bold">{!! setting('home-page.choose_us_subtitle_2') !!}</div>
                            <p class="text-[#9F9F9F] text-base font-medium">{!! setting('home-page.choose_us_desc_2') !!}</p>
                        </div>
                    </div>
                    <div class="flex gap-10 pb-10">
                        <img src="./dist/assets/images/pet-foot.svg" class="w-auto" alt="">
                        <div class="text-white">
                            <div class="text-2xl mb-4 DMSans-bold">{!! setting('home-page.choose_us_subtitle_3') !!}</div>
                            <p class="text-[#9F9F9F] text-base font-medium">{!! setting('home-page.choose_us_desc_3') !!}</p>
                        </div>
                    </div>
                </div>
                <div>
                    <img src="./dist/assets/images/why-choose-us.png" class="w-auto rounded-lg ml-auto"
                        alt="">
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

@include ('footer')
