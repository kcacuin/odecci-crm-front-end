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
                                            <x-form.input name="image" onchange="previewImage()" type="file"
                                                labelname="Client Image"
                                                accept=".jpg, .jpeg, .png, .pdf"
                                            />
                                        </div>
                                        @push('scripts')
                                            <script>
                                                function previewImage() {
                                                    let input = document.getElementById('image');
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
                                    <x-form.input name="code" labelname="Client Code" readonly="true"
                                    :value="$nextClientCode"/>

                                    <!-- Company Name -->
                                    <x-form.input name="name" labelname="Company Name" />

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
                                    <x-form.input name="email" labelname="Company Email" />

                                    <!-- Company Phone -->
                                    <x-form.input name="contact_number" labelname="Company Phone" />

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
                                            <x-form.input name="image-2" onchange="previewImage()" type="file"
                                                labelname="Contact Person"
                                                accept=".jpg, .jpeg, .png, .pdf"
                                            />
                                        </div>
                                        @push('scripts')
                                            <script>
                                                function previewImage() {
                                                    let input = document.getElementById('image');
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
                                    <x-form.input name="email" labelname="Company Email" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="m-10 h-full flex flex-col justify-between bg-white relative overflow-hidden shadow-md sm:rounded-lg">
                        <div class="relative overflow-auto h-full bg-white">
                            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <div class="relative w-full">
                                    <thead class="w-full text-xs text-white uppercase bg-gradient-to-br from-blue-primary to-blue-secondary dark:bg-gray-700 dark:text-gray-400">
                                        <tr>
                                            <th scope="col" class="p-4">
                                                <div class="flex items-center">
                                                    <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-red bg-gray-100 border-gray-300 rounded focus:ring-red dark:focus:ring-red dark:ring-offset-red dark:focus:ring-offset-red focus:ring-2 dark:bg-red dark:border-red">
                                                    <label for="checkbox-all-search" class="sr-only">checkbox</label>
                                                </div>
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Contact Person Name
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Position
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Address
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Contact No.
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Email
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                </div>
                                @foreach ($clients as $client)
                                <tbody>
                                    <tr key="{{ $client->contact_person->id }}" class="bg-white border-b border-gray-primary dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <td class="w-4 p-4">
                                            <div class="flex items-center">
                                                <input id="{{ $client->contact_person->id }}" type="checkbox" class="w-4 h-4 text-red bg-gray-100 border-gray-300 rounded focus:ring-red dark:focus:ring-red dark:ring-offset-red dark:focus:ring-offset-red focus:ring-2 dark:bg-red dark:border-red">
                                                <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0">
                                                    <a href="#" class="relative block">
                                                        <img alt="profile"
                                                        src="{{ file_exists(public_path('storage/' . $client->contact_person->image)) ? asset('storage/' . $client->contact_person->image) : asset('storage/img/dp-default.png') }}"
                                                        class="mx-auto object-cover rounded-full h-10 w-10 "/>
                                                    </a>
                                                </div>
                                                <div class="ml-3">
                                                    <p class="text-gray-900 whitespace-no-wrap">
                                                        {{ $client->contact_person->first_name }} {{ $client->contact_person->middle_name }} {{ $client->contact_person->last_name }}
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $client->contact_person->position }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $client->contact_person->house_number . ' ' . $client->contact_person->barangay_district . ' ' . $client->contact_person->city_municipality . ' ' . $client->contact_person->province_region . ' ' . $client->contact_person->country }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $client->contact_person->contact_number }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $client->contact_person->email }}
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="flex items-center">
                                                <button id="dropdownProject-{{ $client->contact_person->id }}" data-dropdown-toggle="dropdown-project-{{ $client->contact_person->id }}" class="inline-flex items-center px-2 leading-none text-sm font-normal text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-900 dark:hover:bg-gray-800 dark:text-white dark:focus:ring-gray-700">
                                                    <span class="text-blue-secondary text-3xl tracking-tighter cursor-pointer select-none">
                                                        {{ '••' }}
                                                    </span>
                                                </button>
                                                <div id="dropdown-project-{{ $client->contact_person->id }}" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-28 dark:bg-gray-700">
                                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                                                    <li>
                                                        <a href="#" class="group flex items-center px-4 py-2
                                                        hover:text-white
                                                        hover:bg-gradient-to-br hover:from-blue-primary hover:to-blue-secondary
                                                        dark:hover:bg-gray-600 dark:hover:text-white">
                                                            <x-svg-icon
                                                                class="text-blue-secondary group-hover:text-white"
                                                                name="view"
                                                                />
                                                            <span class="ml-3 text-blue-secondary group-hover:text-white">
                                                                View
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="group flex items-center px-4 py-2
                                                        hover:text-white
                                                        hover:bg-gradient-to-br hover:from-blue-primary hover:to-blue-secondary
                                                        dark:hover:bg-gray-600 dark:hover:text-white">
                                                            <x-svg-icon
                                                                class="text-blue-secondary group-hover:text-white"
                                                                name="edit"
                                                                />
                                                            <span class="ml-3 text-blue-secondary group-hover:text-white">
                                                                Edit
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="group flex items-center px-4 py-2
                                                        hover:text-white
                                                        hover:bg-gradient-to-br hover:from-blue-primary hover:to-blue-secondary
                                                        dark:hover:bg-gray-600 dark:hover:text-white">
                                                            <x-svg-icon
                                                                class="text-blue-secondary group-hover:text-white"
                                                                name="trash"
                                                                />
                                                            <span class="ml-3 text-blue-secondary group-hover:text-white">
                                                                Trash
                                                            </span>
                                                        </a>
                                                    </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                @endforeach
                            </table>
                        </div>
                        <div class="h-16 w-full flex items-center justify-between bg-gradient-to-br from-blue-primary to-blue-secondary">
                            <span class="ml-5 inline-flex items-center">
                            </span>
                            <div class="mr-5 flex flex-col items-center">
                                {{-- {{ $clients->contact_person->links() }} --}}
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


