@include('header')
<style>
    .floating-buttons {
        position: fixed;
        bottom: 80px;
        /* Adjust to place it above the footer */
        right: 20px;
        /* Adjust distance from the right side */
        z-index: 1000;
        display: flex;
        flex-direction: column;
        gap: 10px;
        /* Space between buttons */
    }

    .floating-buttons a {
        position: relative;
        text-decoration: none;
    }

    .floating-buttons a img {
        width: 50px;
        /* Adjust size */
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
        right: 60px;
        /* Position tooltip to the left */
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
    <div
        class="pt-[123px] bg-[url('./dist/assets/images/about-bg.png')] bg-no-repeat bg-cover py-10 relative overflow-hidden">
        <div class="container py-[50px] lg:py-[150px] flex flex-col-reverse md:flex-row justify-between items-center">
            <!-- Left Side -->
            <div class="w-full text-white relative  max-w-[600px] mt-5 md:mt-0 banner-header">
                <h1 class="text-[#050509] text-[32px] md:text-[48px] DMSans-bold mb-7">{!! setting('calculatepremium.banner_title') !!}</h1>
                <p class="text-[#333] relative mb-12 text-base">{!! setting('calculatepremium.banner_description') !!}</p>
                </a>
            </div>
        </div>
    </div>


    @if (session('premiumDetails'))
        <div id="premium-box" class="mt-10 bg-green-100 border border-green-400 text-green-900 p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold mb-4">Premium Summary</h2>
            <ul class="space-y-1">
                <li><strong>Total Premium:</strong> {{ session('premiumDetails.totalPremium') }}</li>
                <li><strong>Net Premium:</strong> {{ session('premiumDetails.netPremium') }}</li>
                <li><strong>Final Premium:</strong> {{ session('premiumDetails.finalPremium') }}</li>
                <li><strong>SGST Amount:</strong> {{ session('premiumDetails.sgstAmount') }}</li>
                <li><strong>CGST Amount:</strong> {{ session('premiumDetails.cgstAmount') }}</li>
                <li><strong>IGST:</strong> {{ session('premiumDetails.igst') }}</li>
            </ul>
        </div>
        <br>
    @endif

    <div class="w-full px-4 py-12 bg-[#003061]">
        <div class="max-w-7xl mx-auto bg-[#003061] p-10 rounded-lg">

            <!-- Wizard Title -->
            <h2 class="text-3xl font-bold text-white text-center mb-8">Calculate Your Premium</h2>

            <!-- Step Indicator -->
            <div id="stepIndicator" class="flex justify-between mb-10 text-white font-medium">
                <div class="step-indicator step-1 text-center flex-1 relative">
                    <div
                        class="indicator-circle w-8 h-8 mx-auto rounded-full bg-gray-400 text-white flex items-center justify-center font-bold">
                        1</div>
                    <span class="mt-2 block">Basic Info</span>
                </div>
                <div class="step-indicator step-2 text-center flex-1 relative">
                    <div
                        class="indicator-circle w-8 h-8 mx-auto rounded-full bg-gray-400 text-white flex items-center justify-center font-bold">
                        2</div>
                    <span class="mt-2 block">Address</span>
                </div>
                <div class="step-indicator step-3 text-center flex-1 relative">
                    <div
                        class="indicator-circle w-8 h-8 mx-auto rounded-full bg-gray-400 text-white flex items-center justify-center font-bold">
                        3</div>
                    <span class="mt-2 block">Pet Details</span>
                </div>
                <div class="step-indicator step-4 text-center flex-1 relative">
                    <div
                        class="indicator-circle w-8 h-8 mx-auto rounded-full bg-gray-400 text-white flex items-center justify-center font-bold">
                        4</div>
                    <span class="mt-2 block">Health Info</span>
                </div>
            </div>

            <form action="{{ route('calculate.submit') }}" method="POST" id="wizardForm">
                @csrf

                <!-- STEP 1 -->
                <div class="step" id="step-1">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-7">
                        <!-- Name -->
                        <div>
                            <label class="text-white text-xl mb-2 block">Your First Name</label>
                            <input type="text" name="first_name" required
                                class="w-full px-7 py-4 bg-white rounded-md text-[#9F9F9F] outline-none">
                            @error('first_name')
                                <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Surname -->
                        <div>
                            <label class="text-white text-xl mb-2 block">Your Surname</label>
                            <input type="text" name="surname" required
                                class="w-full px-7 py-4 bg-white rounded-md text-[#9F9F9F] outline-none">
                            @error('surname')
                                <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Term Start Date -->
                        <div>
                            <label class="text-white text-xl mb-2 block">Term Start Date</label>
                            <input type="date" name="term_start_date" required
                                class="w-full px-7 py-4 bg-white rounded-md text-[#9F9F9F] outline-none">
                            @error('term_start_date')
                                <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Term End Date -->
                        <div>
                            <label class="text-white text-xl mb-2 block">Term End Date</label>
                            <input type="date" name="term_end_date" required
                                class="w-full px-7 py-4 bg-white rounded-md text-[#9F9F9F] outline-none">
                            @error('term_end_date')
                                <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- Phone --}}
                        <div>
                            <label class="text-white text-xl mb-2 block">Phone Number</label>
                            <input type="text" name="contact1" placeholder="Enter Your Phone Number" required
                                class="w-full px-7 py-4 bg-white rounded-md text-[#9F9F9F] outline-none">
                            @error('contact1')
                                <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Email --}}
                        <div>
                            <label class="text-white text-xl mb-2 block">Email</label>
                            <input type="email" name="email" placeholder="Enter Your Email" required
                                class="w-full px-7 py-4 bg-white rounded-md text-[#9F9F9F] outline-none">
                            @error('email')
                                <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Date Of Birth --}}
                        <div>
                            <label class="text-white text-xl mb-2 block">Date Of Birth</label>
                            <input type="date" name="date_of_birth" placeholder="Select Date Of Birth" required
                                class="w-full px-7 py-4 bg-white rounded-md text-[#9F9F9F] outline-none">
                            @error('date_of_birth')
                                <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Sex --}}
                        <div>
                            <label class="text-white text-xl mb-2 block">Gender</label>
                            <select name="sex"
                                class="w-full px-7 py-4 bg-white rounded-md text-[#9F9F9F] outline-none">
                                <option value="M">Male</option>
                                <option value="F">Female</option>
                            </select>
                            @error('sex')
                                <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                    </div>
                </div>

                <!-- STEP 2 -->
                <div class="step hidden" id="step-2">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-7">

                        {{-- Address --}}
                        <div>
                            <label class="text-white text-xl mb-2 block">Address Line 1</label>
                            <input type="text" name="address_line1" placeholder="Enter Your Address"
                                class="w-full px-7 py-4 bg-white rounded-md text-[#9F9F9F] outline-none">
                            @error('address_line1')
                                <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Address --}}
                        <div>
                            <label class="text-white text-xl mb-2 block">Address Line 2</label>
                            <input type="text" name="address_line2" placeholder="Enter Your Address"
                                class="w-full px-7 py-4 bg-white rounded-md text-[#9F9F9F] outline-none">
                            @error('address_line2')
                                <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Address --}}
                        <div>
                            <label class="text-white text-xl mb-2 block">Address Line 3</label>
                            <input type="text" name="address_line3" placeholder="Enter Your Address"
                                class="w-full px-7 py-4 bg-white rounded-md text-[#9F9F9F] outline-none">
                            @error('address_line3')
                                <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Post Code --}}
                        <div>
                            <label class="text-white text-xl mb-2 block">Post Code</label>
                            <input type="text" name="postcode" placeholder="Enter Your Post Code"
                                class="w-full px-7 py-4 bg-white rounded-md text-[#9F9F9F] outline-none">
                            @error('postcode')
                                <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Country --}}
                        <div>
                            <label class="text-white text-xl mb-2 block">State</label>
                            <select name="state"
                                class="w-full px-7 py-4 bg-white rounded-md text-[#9F9F9F] outline-none">
                                <option value="MAHARASHTRA">Maharashtra</option>
                                <option value="Gujarat">Gujarat</option>
                            </select>
                            @error('state')
                                <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- STEP 3 -->
                <div class="step hidden" id="step-3">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-7">

                        {{-- Pet Type --}}
                        <div>
                            <label class="text-white text-xl mb-2 block">Pet Type</label>
                            <select name="pet_type"
                                class="w-full px-7 py-4 bg-white rounded-md text-[#9F9F9F] outline-none">
                                <option value="dog">Dog</option>
                                <option value="cat">Cat</option>
                            </select>
                            @error('pet_type')
                                <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Pet Name --}}
                        <div>
                            <label class="text-white text-xl mb-2 block">Pet Name</label>
                            <input type="text" name="pet_name" placeholder="Enter Your Pet Name"
                                class="w-full px-7 py-4 bg-white rounded-md text-[#9F9F9F] outline-none">
                            @error('pet_name')
                                <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Pet Sex --}}
                        <div>
                            <label class="text-white text-xl mb-2 block">Pet Gender</label>
                            <select name="petsex"
                                class="w-full px-7 py-4 bg-white rounded-md text-[#9F9F9F] outline-none">
                                <option value="M">Male</option>
                                <option value="F">Female</option>
                            </select>
                            @error('petsex')
                                <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- Pet Breed --}}
                        <div>
                            <label class="text-white text-xl mb-2 block">Pet Breed</label>
                            <input type="text" name="breed" placeholder="Enter Your Pet Breed"
                                class="w-full px-7 py-4 bg-white rounded-md text-[#9F9F9F] outline-none">
                            @error('breed')
                                <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Pet's Age in Year --}}
                        <div>
                            <label class="text-white text-xl mb-2 block">Pet Age in Year</label>
                            <select name="age_in_year"
                                class="w-full px-7 py-4 bg-white rounded-md text-[#9F9F9F] outline-none">
                                <option value="0">0</option>
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
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                            </select>
                            @error('age_in_year')
                                <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Pet's Age in Month --}}
                        <div>
                            <label class="text-white text-xl mb-2 block">Pet Age in Month</label>
                            <select name="age_in_month"
                                class="w-full px-7 py-4 bg-white rounded-md text-[#9F9F9F] outline-none">
                                <option value="0">0</option>
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
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                            @error('age_in_month')
                                <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- STEP 4 -->
                <div class="step hidden" id="step-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-7">
                        {{-- Weight --}}
                        <div>
                            <label class="text-white text-xl mb-2 block">Weight</label>
                            <input type="text" name="weight" placeholder="Enter Your Pet's Weight"
                                class="w-full px-7 py-4 bg-white rounded-md text-[#9F9F9F] outline-none">
                            @error('weight')
                                <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Healthy --}}
                        <div>
                            <label class="text-white text-xl mb-2 block">Is Pet Healthy?</label>
                            <select name="is_pet_healthy"
                                class="w-full px-7 py-4 bg-white rounded-md text-[#9F9F9F] outline-none">
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                            @error('is_pet_healthy')
                                <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Vaccinated --}}
                        <div>
                            <label class="text-white text-xl mb-2 block">Is Pet vacinated?</label>
                            <select name="is_pet_vacinated"
                                class="w-full px-7 py-4 bg-white rounded-md text-[#9F9F9F] outline-none">
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                            @error('is_pet_vacinated')
                                <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Pet House --}}
                        <div>
                            <label class="text-white text-xl mb-2 block">Is Pet has a House?</label>
                            <select name="dog_house"
                                class="w-full px-7 py-4 bg-white rounded-md text-[#9F9F9F] outline-none">
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                            @error('dog_house')
                                <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                    </div>
                </div>

                <!-- Navigation Buttons -->
                <div class="flex justify-between mt-10">
                    <button type="button" id="prevBtn" onclick="nextPrev(-1)"
                        class="bg-gray-500 text-white px-6 py-3 rounded-lg hidden">Previous</button>
                    <button type="button" id="nextBtn" onclick="nextPrev(1)"
                        class="bg-blue-600 text-white px-6 py-3 rounded-lg">Next</button>
                    <button type="submit" id="submitBtn"
                        class="bg-green-600 text-white px-6 py-3 rounded-lg hidden">Submit</button>
                </div>

            </form>

        </div>
    </div>

</div>

@if (session('premiumDetails'))
    <script>
        window.onload = function() {
            const box = document.getElementById("premium-box");
            if (box) {
                box.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        }
    </script>
@endif

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
    @if (session('success'))
        toastr.success("{{ session('success') }}");
    @endif
</script>

<script>
    let currentStep = 1;
    const totalSteps = 4;

    function showStep(step) {
        // Hide all steps
        document.querySelectorAll('.step').forEach(el => el.classList.add('hidden'));
        document.getElementById(`step-${step}`).classList.remove('hidden');

        // Show/hide buttons
        document.getElementById('prevBtn').style.display = step === 1 ? 'none' : 'inline-block';
        document.getElementById('nextBtn').style.display = step === totalSteps ? 'none' : 'inline-block';
        document.getElementById('submitBtn').style.display = step === totalSteps ? 'inline-block' : 'none';

        // Update step indicators
        document.querySelectorAll('.step-indicator .indicator-circle').forEach((el, idx) => {
            if (idx < step) {
                el.classList.remove('bg-gray-400');
                el.classList.add('bg-green-500');
            } else {
                el.classList.remove('bg-green-500');
                el.classList.add('bg-gray-400');
            }
        });
    }

    function nextPrev(n) {
        const currentDiv = document.getElementById(`step-${currentStep}`);
        const inputs = currentDiv.querySelectorAll('input[required]');
        let valid = true;

        inputs.forEach(input => {
            if (!input.value) {
                input.classList.add('border-red-500');
                valid = false;
            } else {
                input.classList.remove('border-red-500');
            }
        });

        if (!valid && n === 1) return;

        currentStep += n;
        if (currentStep < 1) currentStep = 1;
        if (currentStep > totalSteps) currentStep = totalSteps;
        showStep(currentStep);
    }

    document.addEventListener("DOMContentLoaded", function() {
        showStep(currentStep);
    });
</script>


@include('footer')
