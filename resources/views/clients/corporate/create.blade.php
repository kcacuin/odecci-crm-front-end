<x-app-layout>

    <x-slot name="header">
        <h2 class="flex items-center font-semibold text-xl text-white dark:text-gray-200 leading-tight">
            <a href="/clients/corporate">
                <x-svg-icon name="arrow-left" class="scale-75 mr-3 cursor-pointer duration-150 hover:-translate-x-1"/>
            </a>
            <x-svg-icon
                name="clients"
                :active="request()->routeIs('clients')" />
            <span class="ml-4">Add Client (Corporate)</span>
        </h2>
    </x-slot>


    <div class="odc-main-con-height p-4 bg-white">
        <div class="h-full flex flex-col justify-between bg-white relative overflow-hidden shadow-md sm:rounded-lg">
            <div class="relative p-4 overflow-auto h-full bg-white">

                <form method="POST" action="/clients/corporate" enctype="multipart/form-data">
                    @csrf

                    <div class="flex flex-col gap-y-20">

                        {{-- * Client Information --}}
                        <div class="flex flex-col">
                            <h4 class="flex items-center ml-5 my-5 text-xl font-bold uppercase tracking-widest text-blue-primary relative after:content [''] after:inline-flex after:w-full after:h-2 after:ml-16 after:bg-blue-primary">Client Information</h4>
                            <div class="flex justify-between mx-5 gap-x-8">
                                {{-- * Display Picture --}}
                                <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                    <div class="flex justify-end px-4 pt-4">
                                        <button id="dropdownButton" data-dropdown-toggle="dropdown" class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5" type="button">
                                            <span class="sr-only">Open dropdown</span>
                                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                                                <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
                                            </svg>
                                        </button>
                                        <!-- Dropdown menu -->
                                        <div id="dropdown" class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                            <ul class="py-2" aria-labelledby="dropdownButton">
                                            <li>
                                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Edit</a>
                                            </li>
                                            <li>
                                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Export Data</a>
                                            </li>
                                            <li>
                                                <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
                                            </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="flex flex-col items-center pb-6">

                                        <img src="{{ asset('storage/img/dp-default.png')}}" alt="Default" id="imagePreview" class="w-48 h-48 mb-3 object-contain rounded-full shadow-lg">

                                        {{-- * Choose Image --}}
                                        <div class="flex mx-2 mt-4 md:mt-6">
                                            <x-form.input name="client_image" onchange="previewImage()" type="file"
                                                labelname="Client Image"
                                                accept=".jpg, .jpeg, .png, .pdf"
                                            />
                                        </div>
                                        @push('scripts')
                                            <script>
                                                function previewImage() {
                                                    let input = document.getElementById('client_image');
                                                    let preview = document.getElementById('imagePreview');

                                                    let file = input.files[0];
                                                    let reader = new FileReader();

                                                    reader.onload = function (e) {
                                                        preview.src = e.target.result;
                                                        preview.style.display = 'block';
                                                    };

                                                    if (file) {
                                                        reader.readAsDataURL(file);
                                                    }
                                                }
                                            </script>
                                        @endpush

                                        <livewire:color-legend />
                                    </div>
                                </div>

                                <div class="grid gap-6 mb-6 md:grid-cols-3">

                                    <!-- Client Code -->
                                    <x-form.input name="client_code" labelname="Client Code" readonly="true"
                                    :value="$nextClientCode"/>

                                    <!-- Company Name -->
                                    <x-form.input name="client_name" labelname="Company Name" />

                                    <!-- House No. / Bldg. No. / Street -->
                                    <x-form.input name="house_number" labelname="House No. / Bldg. No. / Street" />

                                    <!-- Barangay / District -->
                                    <x-form.input name="barangay_district" labelname="Barangay / District" />

                                    <!-- City / Municipality -->
                                    <x-form.input name="city_municipality" labelname="City / Municipality" />

                                    <!-- Province / Region -->
                                    <x-form.input name="province_region" labelname="Province / Region" />

                                    <!-- Country -->
                                    <x-form.input name="country" labelname="Country" autocomplete/>

                                    <!-- Industry -->
                                    <x-form.input name="industry" labelname="Industry" />

                                    <!-- Client Email -->
                                    <x-form.input name="client_email" labelname="Company Email" />

                                    <!-- Company Phone -->
                                    <x-form.input name="client_contact_number" labelname="Company Phone" />

                                    <!-- Website -->
                                    <x-form.input name="website" labelname="Website" />

                                    <!-- Social Media Platforms -->
                                    <x-form.input name="socmed_platforms" labelname="Social Media Platforms" />

                                </div>
                            </div>
                        </div>

                        {{-- * Contact Person --}}
                        <div class="flex flex-col">
                            <h4 class="flex items-center ml-5 my-5 text-xl font-bold uppercase tracking-widest text-blue-primary relative after:content [''] after:inline-flex after:w-full after:h-2 after:ml-16 after:bg-blue-primary">Contact Person</h4>
                            <div class="flex justify-between mx-5 gap-x-8">
                                {{-- * Display Picture --}}
                                <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                    <div class="flex justify-end px-4 pt-4">
                                        <button id="dropdownButton" data-dropdown-toggle="dropdown" class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5" type="button">
                                            <span class="sr-only">Open dropdown</span>
                                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                                                <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
                                            </svg>
                                        </button>
                                        <!-- Dropdown menu -->
                                        <div id="dropdown" class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                            <ul class="py-2" aria-labelledby="dropdownButton">
                                            <li>
                                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Edit</a>
                                            </li>
                                            <li>
                                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Export Data</a>
                                            </li>
                                            <li>
                                                <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
                                            </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="flex flex-col items-center pb-6">

                                        <img src="{{ asset('storage/img/dp-default.png')}}" alt="Default" id="imagePreview" class="w-48 h-48 mb-3 object-contain rounded-full shadow-lg">

                                        {{-- * Choose Image --}}
                                        <div class="flex mx-2 mt-4 md:mt-6">
                                            <x-form.input name="client_image" onchange="previewImage()" type="file"
                                                labelname="Client Image"
                                                accept=".jpg, .jpeg, .png, .pdf"
                                            />
                                        </div>
                                        @push('scripts')
                                            <script>
                                                function previewImage() {
                                                    let input = document.getElementById('client_image');
                                                    let preview = document.getElementById('imagePreview');

                                                    let file = input.files[0];
                                                    let reader = new FileReader();

                                                    reader.onload = function (e) {
                                                        preview.src = e.target.result;
                                                        preview.style.display = 'block';
                                                    };

                                                    if (file) {
                                                        reader.readAsDataURL(file);
                                                    }
                                                }
                                            </script>
                                        @endpush

                                    </div>
                                </div>

                                <div class="grid gap-6 mb-6 md:grid-cols-3">

                                    <!-- Last Name -->
                                    <x-form.input name="l_name" labelname="Last Name" />

                                    <!-- First Name -->
                                    <x-form.input name="f_name" labelname="First Name" />

                                    <!-- Middle Name -->
                                    <x-form.input name="m_name" labelname="Middle Name" />

                                    <!-- House No. / Bldg. No. / Street -->
                                    <x-form.input name="house_number" labelname="House No. / Bldg. No. / Street" />

                                    <!-- Barangay / District -->
                                    <x-form.input name="barangay_district" labelname="Barangay / District" />

                                    <!-- City / Municipality -->
                                    <x-form.input name="city_municipality" labelname="City / Municipality" />

                                    <!-- Province / Region -->
                                    <x-form.input name="province_region" labelname="Province / Region" />

                                    <!-- Country -->
                                    <x-form.input name="country" labelname="Country" autocomplete/>

                                    <!-- Position -->
                                    <x-form.input name="position" labelname="Position" />

                                    <!-- Phone Number -->
                                    <x-form.input name="phone_num" labelname="Phone Number" />

                                    <!-- Client Email -->
                                    <x-form.input name="client_email" labelname="Company Email" />
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Button --}}
                    <div class="flex justify-end">
                        <x-form.button class="flex">Save Information</x-form.button>
                    </div>

                </form>

            </div>

        </div>

    </div>

</x-app-layout>


