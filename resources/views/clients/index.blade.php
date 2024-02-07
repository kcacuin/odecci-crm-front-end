<x-app-layout>

    <!-- Main modal -->
    <div id="addnew-client-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto z-[900] overflow-x-hidden fixed top-0 right-0 left-0 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5  border-b border-gray-primary rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-blue-secondary dark:text-white">
                        Client Type
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm h-8 w-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="addnew-client-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5">
                    <p class="text-sm font-normal text-gray-500 dark:text-gray-400">Add new client and select with the available client types.</p>
                    <ul class="my-4 space-y-3">
                        <li>
                            <a href="/clients/corporate/add" class="flex items-center p-3 text-base font-bold text-blue-secondary
                            rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                                <span class="flex-1 ms-3 whitespace-nowrap">Corporate</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center p-3 text-base font-bold text-blue-secondary  rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                                <span class="flex-1 ms-3 whitespace-nowrap">Solo Proprietorship</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <x-slot name="header">
        <h2 class="flex items-center font-semibold text-xl text-white dark:text-gray-200 leading-tight">
            <x-svg-icon
                name="clients"
                :active="request()->routeIs('clients')" />
            <span class="ml-4">Corporate Clients</span>
        </h2>
        <div class="flex justify-center">
            <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                    <button type="button" data-modal-target="addnew-client-modal" data-modal-toggle="addnew-client-modal" class="w-full md:w-auto flex items-center justify-center py-1.5 px-4 text-sm font-medium text-blue-secondary focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                        <x-svg-icon
                            class="-scale-75  text-blue-secondary group-hover:text-white"
                            name="add"
                            />
                        <span class="ml-1.5">
                            Add New Client
                        </span>
                    </button>
                    <div class="flex items-center space-x-3 w-full md:w-auto">
                        <button id="actionsDropdownButton" data-dropdown-toggle="actionsDropdown" class="w-full md:w-auto flex items-center justify-center py-2 px-4 text-sm font-medium text-blue-secondary focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700" type="button">
                            <svg class="-ml-1 mr-1.5 w-5 h-5  " fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                            </svg>
                            Select Client Type
                        </button>
                        <div id="actionsDropdown" class="hidden z-10 w-44 text-blue-secondary bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                            <ul class="py-1 text-sm  dark:text-gray-200" aria-labelledby="actionsDropdownButton">
                                <li>
                                    <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Corporate</a>
                                </li>
                            </ul>
                            <div class="py-1">
                                <a href="#" class="block py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sole Proprietorship</a>
                            </div>
                        </div>
                        <button id="filterDropdownButton" data-dropdown-toggle="filterDropdown" class="w-full md:w-auto flex items-center justify-center py-2 px-4 text-sm font-medium text-blue-secondary  focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="h-4 w-4 mr-2" viewbox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z" clip-rule="evenodd" />
                            </svg>
                            Filter
                            <svg class="-mr-1 ml-1.5 w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                            </svg>
                        </button>
                        <div id="filterDropdown" class="z-10 hidden w-48 p-3 bg-white rounded-lg shadow dark:bg-gray-700">
                            <ul class="space-y-2 text-sm text-blue-secondary" aria-labelledby="filterDropdownButton">
                                <li class="flex items-center">
                                    <input id="filter-1" type="checkbox" value="" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-red focus:ring-red dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    <label for="filter-1" class="ml-2 text-sm font-medium dark:text-gray-100">filter-1</label>
                                </li>
                                <li class="flex items-center">
                                    <input id="filter-2" type="checkbox" value="" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-red focus:ring-red dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    <label for="filter-2" class="ml-2 text-sm font-medium dark:text-gray-100">filter-2</label>
                                </li>
                                <li class="flex items-center">
                                    <input id="filter-3" type="checkbox" value="" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-red focus:ring-red dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    <label for="filter-3" class="ml-2 text-sm font-medium dark:text-gray-100">filter-3</label>
                                </li>
                                <li class="flex items-center">
                                    <input id="filter-4" type="checkbox" value="filter-4" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-red focus:ring-red dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    <label for="filter-4" class="ml-2 text-sm font-medium dark:text-gray-100">filter-4</label>
                                </li>
                                <li class="flex items-center">
                                    <input id="filter-5" type="checkbox" value="" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-red focus:ring-red dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    <label for="filter-5" class="ml-2 text-sm font-medium dark:text-gray-100">filter-5</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2">
                    <form class="flex items-center text-blue-secondary">
                        <label for="simple-search" class="sr-only">Search</label>
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 dark:text-gray-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search" required="">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </x-slot>


    <div class="odc-main-con-height p-4 bg-white">
        <div class="h-full flex flex-col justify-between bg-white relative overflow-hidden shadow-md sm:rounded-lg">
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
                                    Client Code
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Client Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Contact Person
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
                    <tbody>
                        @foreach ($clients as $client)
                        <tr key="{{ $client->id }}" class="bg-white border-b border-gray-primary dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="w-4 p-4">
                                <div class="flex items-center">
                                    <input id="{{ $client->id }}" type="checkbox" class="w-4 h-4 text-red bg-gray-100 border-gray-300 rounded focus:ring-red dark:focus:ring-red dark:ring-offset-red dark:focus:ring-offset-red focus:ring-2 dark:bg-red dark:border-red">
                                    <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                </div>
                            </td>
                            <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                ODC-{{ $client->client_code }}
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">
                                        <a href="#" class="relative block">
                                            <img alt="profile"
                                            src="{{ file_exists(public_path('storage/' . $client->client_image)) ? asset('storage/' . $client->client_image) : asset('storage/img/dp-default.png') }}"
                                            class="mx-auto object-cover rounded-full h-10 w-10 "/>
                                        </a>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{ $client->client_name }}
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <div class="p-3 bg-[{{ $client->client_color_legend }}] rounded-full"></div>
                            </td>
                            <td class="px-6 py-4">
                                {{ $client->contact_person }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $client->house_number . ' ' . $client->barangay_district . ' ' . $client->city_municipality . ' ' . $client->province_region . ' ' . $client->country }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $client->contact_number }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $client->client_email }}
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <button id="dropdownProject-{{ $client->client_code }}" data-dropdown-toggle="dropdown-project-{{ $client->client_code }}" class="inline-flex items-center px-2 leading-none text-sm font-normal text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-900 dark:hover:bg-gray-800 dark:text-white dark:focus:ring-gray-700">
                                        <span class="text-blue-secondary text-3xl tracking-tighter cursor-pointer select-none">
                                            {{ '••' }}
                                        </span>
                                    </button>
                                    <div id="dropdown-project-{{ $client->client_code }}" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-28 dark:bg-gray-700">
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
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="h-16 w-full flex items-center justify-between bg-gradient-to-br from-blue-primary to-blue-secondary">
                <span class="ml-5 inline-flex items-center bg-green-100 text-green-800 text-sm font-medium px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">
                    <span class="w-2 h-2 me-1 bg-green-500 rounded-full"></span>
                    <span class="me-1">{{ 8 }}</span>
                    <span>Total Active Clients</span>
                </span>
                <div class="mr-5 flex flex-col items-center">
                    {{ $clients->links() }}
            </div>
        </div>

    </div>

</x-app-layout>
