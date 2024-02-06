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
                            <div class="flex flex-col items-center pb-10">

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

                                <div class="flex flex-col items-center">
                                    <span class="my-3 text-xl font-medium text-gray-900 dark:text-white">Choose Legend</span>
                                    <div class="flex gap-x-4">
                                        <div class="flex gap-x-4">
                                            <div>
                                                <label for="swatch1" class="p-2 rounded-full flex items-center justify-center" style="background-color: #205375;">
                                                    <input type="radio" name="client_color_legend" id="swatch1" class="p-3 rounded-full ring-[#205375] text-[#205375] bg-gray-100 border-gray-300  focus:ring-[#205375] dark:focus:ring-[#205375] dark:ring-offset-[#205375] dark:focus:ring-offset-[#205375] focus:ring-2 dark:bg-[#205375] dark:border-[#205375]" value="#205375" @if(old('client_color_legend', auth()->user()->color) === '#205375' || (!old('client_color_legend') && !auth()->user()->color)) checked @endif>
                                                </label>
                                            </div>
                                            <div>
                                                <label for="swatch2" class="p-2 rounded-full flex items-center justify-center" style="background-color: #FB4B4B;">
                                                    <input type="radio" name="color" id="swatch2" class="p-3 rounded-full ring-[#FB4B4B] text-[#FB4B4B] bg-gray-100 border-gray-300  focus:ring-[#FB4B4B] dark:focus:ring-[#FB4B4B] dark:ring-offset-[#FB4B4B] dark:focus:ring-offset-[#FB4B4B] focus:ring-2 dark:bg-[#FB4B4B] dark:border-[#FB4B4B]" value="#FB4B4B" @if(old('client_color_legend', auth()->user()->color) === '#FB4B4B' && !old('client_color_legend')) checked @endif>
                                                </label>
                                            </div>
                                            <div>
                                                <label for="swatch3" class="p-2 rounded-full flex items-center justify-center" style="background-color: #ECD456;">
                                                    <input type="radio" name="color" id="swatch3" class="p-3 rounded-full ring-[#ECD456] text-[#ECD456] bg-gray-100 border-gray-300  focus:ring-[#ECD456] dark:focus:ring-[#ECD456] dark:ring-offset-[#ECD456] dark:focus:ring-offset-[#ECD456] focus:ring-2 dark:bg-[#ECD456] dark:border-[#ECD456]" value="#ECD456" @if(old('client_color_legend', auth()->user()->color) === '#ECD456' && !old('client_color_legend')) checked @endif>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="flex flex-col">
                                            {{-- <span>Custom</span> --}}
                                            <input type="color" id="colorPicker" class="odc-clr-picker" name="client_color_legend" value="{{ old('client_color_legend', auth()->user()->color) ?? '#000000' }}" onchange="updateColorPickerValue()">
                                        </div>
                                        @push('scripts')
                                        <script>
                                            function updateColorPickerValue() {
                                                let colorPicker = document.getElementById('colorPicker');
                                                let swatch1 = document.getElementById('swatch1');
                                                let swatch2 = document.getElementById('swatch2');
                                                let swatch3 = document.getElementById('swatch3');

                                                if (swatch1.checked) {
                                                    colorPicker.value = swatch1.value;
                                                } else if (swatch2.checked) {
                                                    colorPicker.value = swatch2.value;
                                                } else if (swatch3.checked) {
                                                    colorPicker.value = swatch3.value;
                                                }
                                            }
                                        </script>
                                        @endpush
                                    </div>
                                </div>
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
                            <x-form.input name="country" labelname="Country" />

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

                    {{-- Button --}}
                    <div class="flex justify-end">
                        <x-form.button class="flex">Save Information</x-form.button>
                    </div>

                </form>

            </div>

        </div>

    </div>

</x-app-layout>


