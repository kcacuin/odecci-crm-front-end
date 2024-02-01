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
                                <img class="w-48 h-48 mb-3 rounded-full shadow-lg" src="/docs/images/people/profile-picture-3.jpg" alt="Bonnie image"/>

                                {{-- * Choose Image --}}
                                <div class="flex mx-2 mt-4 md:mt-6">
                                    <x-form.input name="client_image" type="file" labelname="Client Image" />
                                </div>

                                <span class="my-3 text-xl font-medium text-gray-900 dark:text-white">Choose Legend</span>
                            </div>
                        </div>

                        <!-- Client Image -->
                        {{-- <x-form.input name="client_image" type="file" labelname="Client Image" /> --}}


                        <div class="grid gap-6 mb-6 md:grid-cols-3">
                            <!-- Client Code -->
                            <x-form.input name="client_code" labelname="Client Code" readonly="true"
                            :value="$nextClientCode"/>

                            <!-- Company Name -->
                            <x-form.input name="barangay_district" labelname="Company Name" />

                            <!-- House No. / Bldg. No. / Street -->
                            <x-form.input name="house_number" labelname="House No. / Bldg. No. / Street" />

                            <!-- City / Municipality -->
                            <x-form.input name="city_municipality" labelname="City / Municipality" />

                            <!-- Province / Region -->
                            <x-form.input name="province_region" labelname="Province / Region" />

                            <!-- Country -->
                            <x-form.input name="country" labelname="Country" />

                            <!-- Industry -->
                            <x-form.input name="industry" labelname="Industry" />

                            <!-- Website -->
                            <x-form.input name="website" labelname="Website" />

                            <!-- Company Phone -->
                            <x-form.input name="company_phone" labelname="Company Phone" />

                        </div>
                    </div>

                    {{-- Button --}}
                    <x-form.button>Save Information</x-form.button>

                </form>

            </div>

        </div>

    </div>

</x-app-layout>
