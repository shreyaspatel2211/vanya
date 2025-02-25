@include('header')
<div class="page">
  <!-- banner section -->
  <div class="pt-[123px] bg-[url('./dist/assets/images/claim-submit.png')] bg-no-repeat bg-cover py-10 relative overflow-hidden">
    <div class="container py-[50px] lg:py-[150px] flex flex-col-reverse md:flex-row justify-between items-center">
      <!-- Left Side -->
      <div class="w-full text-white relative  max-w-[600px] mt-5 md:mt-0 banner-header">
        <h1 class="text-[#050509] text-[32px] md:text-[48px] DMSans-bold mb-7">{!! setting('submit-claim.banner_title') !!}</h1>
        <p class="text-[#333] relative mb-12 text-base">{!! setting('submit-claim.banner_description') !!}</p>

        <a href="#" class="flex w-fit items-center btn bg-theme1 text-white rounded-lg py-[10px] lg:py-[20px] px-[32px] DMSans-medium text-lg btn-shadow">Start your claim
        </a>
      </div>
    </div>
  </div>
  <!-- banner section -->

  <div class="py-10 bg-[#F9FAF9]">
    <div class="container">
      <div class="heading-wrapper mb-6 w-full text-center max-w-[500px] mx-auto mb-[60px]">
        <div class="heading-label uppercase text-base DMSans-medium text-theme2 mb-1 tracking-[4px]">Follow the steps</div>
        <h2 class="heading-title text-[38px] DMSans-bold text-theme2 mb-3">Steps <span class="text-theme1"> submit a claim </span></h2>
        <p class="text-2xl DMSans-medium text-theme2">Follow these simple steps to get reimbursed for your pet’s eligible medical expenses:</p>
      </div>
    
      <div class="flex flex-col lg:flex-row mb-[64px]">
        <div class="text-4xl lg:text-[68px] lg:leading-[70px] DMSans-black text-theme1 mb-3 lg:mr-4">01</div>
        <div class="flex flex-col-reverse lg:flex-row">
            <div class="flex flex-col justify-center bg-theme1 px-5 lg:px-[54px] py-5 lg:py-10 text-white rounded-xl lg:-mr-4 relative z-10">
                <div class="text-xl lg:text-[34px] lg:leading-[40px] mb-4 DMSans-black">{!! setting('submit-claim.steps_title_1') !!}</div>
                <p class="text-xl lg:text-[34px] lg:leading-[40px]">{!! setting('submit-claim.steps_desc_1') !!}</p>
            </div>
            <img src="./dist/assets/images/step-guide.png" class="rounded-xl w-full max-w-[410px] h-full max-h-[358px]" alt="">
        </div>
      </div>

      <div class="flex flex-col lg:flex-row-reverse mb-[64px]">
        <div class="text-4xl lg:text-[68px] lg:leading-[70px] DMSans-black text-theme2 mb-3 lg:ml-4">02</div>
        <div class="flex flex-col-reverse lg:flex-row-reverse">
            <div class="flex flex-col justify-center bg-theme2 px-5 lg:px-[54px] py-5 lg:py-10 text-white rounded-xl lg:-ml-4 relative z-10">
                <div class="text-xl lg:text-[34px] lg:leading-[40px] mb-4 DMSans-black">{!! setting('submit-claim.steps_title_2') !!}</div>
                <p class="text-xl lg:text-[34px] lg:leading-[40px]">{!! setting('submit-claim.steps_desc_2') !!}</p>
            </div>
            <img src="./dist/assets/images/step-guide.png" class="rounded-xl w-full max-w-[410px] h-full max-h-[358px]" alt="">
        </div>
      </div>

      <div class="flex flex-col lg:flex-row mb-[64px]">
        <div class="text-4xl lg:text-[68px] lg:leading-[70px] DMSans-black text-theme1 mb-3 lg:mr-4">01</div>
        <div class="flex flex-col-reverse lg:flex-row">
            <div class="flex flex-col justify-center bg-theme1 px-5 lg:px-[54px] py-5 lg:py-10 text-white rounded-xl lg:-mr-4 relative z-10">
                <div class="text-xl lg:text-[34px] lg:leading-[40px] mb-4 DMSans-black">{!! setting('submit-claim.steps_title_3') !!}</div>
                <p class="text-xl lg:text-[34px] lg:leading-[40px]">{!! setting('submit-claim.steps_desc_3') !!}</p>
            </div>
            <img src="./dist/assets/images/step-guide.png" class="rounded-xl w-full max-w-[410px] h-full max-h-[358px]" alt="">
        </div>
      </div>

      <div class="flex flex-col lg:flex-row-reverse mb-[64px]">
        <div class="text-4xl lg:text-[68px] lg:leading-[70px] DMSans-black text-theme2 mb-3 lg:ml-4">02</div>
        <div class="flex flex-col-reverse lg:flex-row-reverse">
            <div class="flex flex-col justify-center bg-theme2 px-5 lg:px-[54px] py-5 lg:py-10 text-white rounded-xl lg:-ml-4 relative z-10">
                <div class="text-xl lg:text-[34px] lg:leading-[40px] mb-4 DMSans-black">{!! setting('submit-claim.steps_title_4') !!}</div>
                <p class="text-xl lg:text-[34px] lg:leading-[40px]">{!! setting('submit-claim.steps_desc_4') !!}</p>
            </div>
            <img src="./dist/assets/images/step-guide.png" class="rounded-xl w-full max-w-[410px] h-full max-h-[358px]" alt="">
        </div>
      </div>

      <a href="#" class="flex w-fit mx-auto items-center btn bg-theme1 text-white rounded-lg py-[10px] lg:py-[20px] px-[32px] DMSans-medium text-lg btn-shadow">Start your claim</a>

        <img src="./dist/assets/images/sleeping-cat.png" class="w-fit ml-auto" alt="">
    </div>
  </div>

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
    </div>
</div>
@include('footer')
