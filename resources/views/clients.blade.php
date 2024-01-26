<x-app-layout>
    <x-slot name="header">
        <h2 class="flex items-center font-semibold text-xl text-white dark:text-gray-200 leading-tight">
            <x-svg-icon
                name="clients"
                :active="request()->routeIs('clients')" />
            <span class="ml-4">Corporate Clients</span>
        </h2>
        <div>
            <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                <div class="w-full md:w-1/2">
                    <form class="flex items-center">
                        <label for="simple-search" class="sr-only">Search</label>
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search" required="">
                        </div>
                    </form>
                </div>
                <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                    <button type="button" class="flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                        <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                        </svg>
                        Add product
                    </button>
                    <div class="flex items-center space-x-3 w-full md:w-auto">
                        <button id="actionsDropdownButton" data-dropdown-toggle="actionsDropdown" class="w-full md:w-auto flex items-center justify-center py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700" type="button">
                            <svg class="-ml-1 mr-1.5 w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                            </svg>
                            Actions
                        </button>
                        <div id="actionsDropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="actionsDropdownButton">
                                <li>
                                    <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Mass Edit</a>
                                </li>
                            </ul>
                            <div class="py-1">
                                <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete all</a>
                            </div>
                        </div>
                        <button id="filterDropdownButton" data-dropdown-toggle="filterDropdown" class="w-full md:w-auto flex items-center justify-center py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="h-4 w-4 mr-2 text-gray-400" viewbox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z" clip-rule="evenodd" />
                            </svg>
                            Filter
                            <svg class="-mr-1 ml-1.5 w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                            </svg>
                        </button>
                        <div id="filterDropdown" class="z-10 hidden w-48 p-3 bg-white rounded-lg shadow dark:bg-gray-700">
                            <h6 class="mb-3 text-sm font-medium text-gray-900 dark:text-white">Choose brand</h6>
                            <ul class="space-y-2 text-sm" aria-labelledby="filterDropdownButton">
                                <li class="flex items-center">
                                    <input id="apple" type="checkbox" value="" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    <label for="apple" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">Apple (56)</label>
                                </li>
                                <li class="flex items-center">
                                    <input id="fitbit" type="checkbox" value="" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    <label for="fitbit" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">Microsoft (16)</label>
                                </li>
                                <li class="flex items-center">
                                    <input id="razor" type="checkbox" value="" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    <label for="razor" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">Razor (49)</label>
                                </li>
                                <li class="flex items-center">
                                    <input id="nikon" type="checkbox" value="" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    <label for="nikon" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">Nikon (12)</label>
                                </li>
                                <li class="flex items-center">
                                    <input id="benq" type="checkbox" value="" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    <label for="benq" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">BenQ (74)</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>


<!-- Breadcrumb -->
    {{-- <nav class="flex justify-between" aria-label="Breadcrumb">
        <ol class="inline-flex items-center mb-3 sm:mb-0">
        <li>
            <div class="flex items-center">
                <button id="dropdownProject" data-dropdown-toggle="dropdown-project" class="inline-flex items-center px-3 py-2 text-sm font-normal text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-900 dark:hover:bg-gray-800 dark:text-white dark:focus:ring-gray-700">
                    <svg class="w-3 h-3 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5v10M3 5a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 10a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm9-10v.4A3.6 3.6 0 0 1 8.4 9H6.61A3.6 3.6 0 0 0 3 12.605M14.458 3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z"/>
                    </svg>flowbite.com<svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                </button>
            <div id="dropdown-project" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">themesberg.com</a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">ui.glass</a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">iconscale</a>
                </li>
                </ul>
            </div>
            </div>
        </li>
        <span class="mx-2 text-gray-400">/</span>
        <li aria-current="page">
            <div class="flex items-center">
            <button id="dropdownDatabase" data-dropdown-toggle="dropdown-database" class="inline-flex items-center px-3 py-2 text-sm font-normal text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-900 dark:hover:bg-gray-800 dark:text-white dark:focus:ring-gray-700"><svg class="w-3 h-3 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
        <path d="M8 5.625c4.418 0 8-1.063 8-2.375S12.418.875 8 .875 0 1.938 0 3.25s3.582 2.375 8 2.375Zm0 13.5c4.963 0 8-1.538 8-2.375v-4.019c-.052.029-.112.054-.165.082a8.08 8.08 0 0 1-.745.353c-.193.081-.394.158-.6.231l-.189.067c-2.04.628-4.165.936-6.3.911a20.601 20.601 0 0 1-6.3-.911l-.189-.067a10.719 10.719 0 0 1-.852-.34 8.08 8.08 0 0 1-.493-.244c-.053-.028-.113-.053-.165-.082v4.019C0 17.587 3.037 19.125 8 19.125Zm7.09-12.709c-.193.081-.394.158-.6.231l-.189.067a20.6 20.6 0 0 1-6.3.911 20.6 20.6 0 0 1-6.3-.911l-.189-.067a10.719 10.719 0 0 1-.852-.34 8.08 8.08 0 0 1-.493-.244C.112 6.035.052 6.01 0 5.981V10c0 .837 3.037 2.375 8 2.375s8-1.538 8-2.375V5.981c-.052.029-.112.054-.165.082a8.08 8.08 0 0 1-.745.353Z"/>
        </svg>databaseName<svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
        </svg></button>
            <div id="dropdown-database" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">databaseProd</a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">databaseStaging</a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">flowbiteProd</a>
                </li>
                </ul>
            </div>
            </div>
        </li>
        </ol>
    </nav> --}}


<div class="odc-main-con-height p-4 bg-cyan-200">
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
                    <tr class="bg-white border-b border-gray-primary dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="w-4 p-4">
                            <div class="flex items-center">
                                <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-red bg-gray-100 border-gray-300 rounded focus:ring-red dark:focus:ring-red dark:ring-offset-red dark:focus:ring-offset-red focus:ring-2 dark:bg-red dark:border-red">
                                <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                            </div>
                        </td>
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            ODC001
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <a href="#" class="relative block">
                                        <img alt="profile" src="{{ asset('storage/img/client-dp-sample.png')}}" class="mx-auto object-cover rounded-full h-10 w-10 "/>
                                    </a>
                                </div>
                                <div class="ml-3">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        Odecci Solutions Inc.
                                    </p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            Alisandro Martin P. Villegas
                        </td>
                        <td class="px-6 py-4">
                            0004 Miranda Street, Manatal Pandi Bulacan Philippines, 3014
                        </td>
                        <td class="px-6 py-4">
                            0935-887-8176
                        </td>
                        <td class="px-6 py-4">
                            Ali@odecci.com
                        </td>
                        <td class="text-center px-6 py-4">
                            <span class="text-blue-secondary text-3xl tracking-tighter cursor-pointer select-none">
                                {{ '••' }}
                            </span>
                        </td>
                    </tr>
                    <tr class="bg-white border-b border-gray-primary dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="w-4 p-4">
                            <div class="flex items-center">
                                <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-red bg-gray-100 border-gray-300 rounded focus:ring-red dark:focus:ring-red dark:ring-offset-red dark:focus:ring-offset-red focus:ring-2 dark:bg-red dark:border-red">
                                <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                            </div>
                        </td>
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            ODC001
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <a href="#" class="relative block">
                                        <img alt="profile" src="{{ asset('storage/img/client-dp-sample.png')}}" class="mx-auto object-cover rounded-full h-10 w-10 "/>
                                    </a>
                                </div>
                                <div class="ml-3">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        Odecci Solutions Inc.
                                    </p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            Alisandro Martin P. Villegas
                        </td>
                        <td class="px-6 py-4">
                            0004 Miranda Street, Manatal Pandi Bulacan Philippines, 3014
                        </td>
                        <td class="px-6 py-4">
                            0935-887-8176
                        </td>
                        <td class="px-6 py-4">
                            Ali@odecci.com
                        </td>
                        <td class="text-center px-6 py-4">
                            <span class="text-blue-secondary text-3xl tracking-tighter cursor-pointer select-none">
                                {{ '••' }}
                            </span>
                        </td>
                    </tr>
                    <tr class="bg-white border-b border-gray-primary dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="w-4 p-4">
                            <div class="flex items-center">
                                <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-red bg-gray-100 border-gray-300 rounded focus:ring-red dark:focus:ring-red dark:ring-offset-red dark:focus:ring-offset-red focus:ring-2 dark:bg-red dark:border-red">
                                <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                            </div>
                        </td>
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            ODC001
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <a href="#" class="relative block">
                                        <img alt="profile" src="{{ asset('storage/img/client-dp-sample.png')}}" class="mx-auto object-cover rounded-full h-10 w-10 "/>
                                    </a>
                                </div>
                                <div class="ml-3">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        Odecci Solutions Inc.
                                    </p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            Alisandro Martin P. Villegas
                        </td>
                        <td class="px-6 py-4">
                            0004 Miranda Street, Manatal Pandi Bulacan Philippines, 3014
                        </td>
                        <td class="px-6 py-4">
                            0935-887-8176
                        </td>
                        <td class="px-6 py-4">
                            Ali@odecci.com
                        </td>
                        <td class="text-center px-6 py-4">
                            <span class="text-blue-secondary text-3xl tracking-tighter cursor-pointer select-none">
                                {{ '••' }}
                            </span>
                        </td>
                    </tr>
                    <tr class="bg-white border-b border-gray-primary dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="w-4 p-4">
                            <div class="flex items-center">
                                <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-red bg-gray-100 border-gray-300 rounded focus:ring-red dark:focus:ring-red dark:ring-offset-red dark:focus:ring-offset-red focus:ring-2 dark:bg-red dark:border-red">
                                <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                            </div>
                        </td>
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            ODC001
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <a href="#" class="relative block">
                                        <img alt="profile" src="{{ asset('storage/img/client-dp-sample.png')}}" class="mx-auto object-cover rounded-full h-10 w-10 "/>
                                    </a>
                                </div>
                                <div class="ml-3">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        Odecci Solutions Inc.
                                    </p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            Alisandro Martin P. Villegas
                        </td>
                        <td class="px-6 py-4">
                            0004 Miranda Street, Manatal Pandi Bulacan Philippines, 3014
                        </td>
                        <td class="px-6 py-4">
                            0935-887-8176
                        </td>
                        <td class="px-6 py-4">
                            Ali@odecci.com
                        </td>
                        <td class="text-center px-6 py-4">
                            <span class="text-blue-secondary text-3xl tracking-tighter cursor-pointer select-none">
                                {{ '••' }}
                            </span>
                        </td>
                    </tr>
                    <tr class="bg-white border-b border-gray-primary dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="w-4 p-4">
                            <div class="flex items-center">
                                <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-red bg-gray-100 border-gray-300 rounded focus:ring-red dark:focus:ring-red dark:ring-offset-red dark:focus:ring-offset-red focus:ring-2 dark:bg-red dark:border-red">
                                <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                            </div>
                        </td>
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            ODC001
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <a href="#" class="relative block">
                                        <img alt="profile" src="{{ asset('storage/img/client-dp-sample.png')}}" class="mx-auto object-cover rounded-full h-10 w-10 "/>
                                    </a>
                                </div>
                                <div class="ml-3">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        Odecci Solutions Inc.
                                    </p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            Alisandro Martin P. Villegas
                        </td>
                        <td class="px-6 py-4">
                            0004 Miranda Street, Manatal Pandi Bulacan Philippines, 3014
                        </td>
                        <td class="px-6 py-4">
                            0935-887-8176
                        </td>
                        <td class="px-6 py-4">
                            Ali@odecci.com
                        </td>
                        <td class="text-center px-6 py-4">
                            <span class="text-blue-secondary text-3xl tracking-tighter cursor-pointer select-none">
                                {{ '••' }}
                            </span>
                        </td>
                    </tr>
                    <tr class="bg-white border-b border-gray-primary dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="w-4 p-4">
                            <div class="flex items-center">
                                <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-red bg-gray-100 border-gray-300 rounded focus:ring-red dark:focus:ring-red dark:ring-offset-red dark:focus:ring-offset-red focus:ring-2 dark:bg-red dark:border-red">
                                <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                            </div>
                        </td>
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            ODC001
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <a href="#" class="relative block">
                                        <img alt="profile" src="{{ asset('storage/img/client-dp-sample.png')}}" class="mx-auto object-cover rounded-full h-10 w-10 "/>
                                    </a>
                                </div>
                                <div class="ml-3">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        Odecci Solutions Inc.
                                    </p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            Alisandro Martin P. Villegas
                        </td>
                        <td class="px-6 py-4">
                            0004 Miranda Street, Manatal Pandi Bulacan Philippines, 3014
                        </td>
                        <td class="px-6 py-4">
                            0935-887-8176
                        </td>
                        <td class="px-6 py-4">
                            Ali@odecci.com
                        </td>
                        <td class="text-center px-6 py-4">
                            <span class="text-blue-secondary text-3xl tracking-tighter cursor-pointer select-none">
                                {{ '••' }}
                            </span>
                        </td>
                    </tr>
                    <tr class="bg-white border-b border-gray-primary dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="w-4 p-4">
                            <div class="flex items-center">
                                <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-red bg-gray-100 border-gray-300 rounded focus:ring-red dark:focus:ring-red dark:ring-offset-red dark:focus:ring-offset-red focus:ring-2 dark:bg-red dark:border-red">
                                <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                            </div>
                        </td>
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            ODC001
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <a href="#" class="relative block">
                                        <img alt="profile" src="{{ asset('storage/img/client-dp-sample.png')}}" class="mx-auto object-cover rounded-full h-10 w-10 "/>
                                    </a>
                                </div>
                                <div class="ml-3">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        Odecci Solutions Inc.
                                    </p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            Alisandro Martin P. Villegas
                        </td>
                        <td class="px-6 py-4">
                            0004 Miranda Street, Manatal Pandi Bulacan Philippines, 3014
                        </td>
                        <td class="px-6 py-4">
                            0935-887-8176
                        </td>
                        <td class="px-6 py-4">
                            Ali@odecci.com
                        </td>
                        <td class="text-center px-6 py-4">
                            <span class="text-blue-secondary text-3xl tracking-tighter cursor-pointer select-none">
                                {{ '••' }}
                            </span>
                        </td>
                    </tr>
                    <tr class="bg-white border-b border-gray-primary dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="w-4 p-4">
                            <div class="flex items-center">
                                <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-red bg-gray-100 border-gray-300 rounded focus:ring-red dark:focus:ring-red dark:ring-offset-red dark:focus:ring-offset-red focus:ring-2 dark:bg-red dark:border-red">
                                <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                            </div>
                        </td>
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            ODC001
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <a href="#" class="relative block">
                                        <img alt="profile" src="{{ asset('storage/img/client-dp-sample.png')}}" class="mx-auto object-cover rounded-full h-10 w-10 "/>
                                    </a>
                                </div>
                                <div class="ml-3">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        Odecci Solutions Inc.
                                    </p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            Alisandro Martin P. Villegas
                        </td>
                        <td class="px-6 py-4">
                            0004 Miranda Street, Manatal Pandi Bulacan Philippines, 3014
                        </td>
                        <td class="px-6 py-4">
                            0935-887-8176
                        </td>
                        <td class="px-6 py-4">
                            Ali@odecci.com
                        </td>
                        <td class="text-center px-6 py-4">
                            <span class="text-blue-secondary text-3xl tracking-tighter cursor-pointer select-none">
                                {{ '••' }}
                            </span>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
        <div class="w-full flex items-center justify-between bg-gradient-to-br from-blue-primary to-blue-secondary">
            <span class="ml-5 inline-flex items-center bg-green-100 text-green-800 text-sm font-medium px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">
                <span class="w-2 h-2 me-1 bg-green-500 rounded-full"></span>
                <span class="me-1">{{ 8 }}</span>
                <span>Total Active Clients</span>
            </span>
            <div class="mr-5 my-3 flex flex-col items-center">
                <!-- Help text -->
                <span class="text-sm text-white dark:text-gray-400">
                    Showing <span class="font-semibold text-white dark:text-white">1</span> to <span class="font-semibold text-white dark:text-white">10</span> of <span class="font-semibold text-white dark:text-white">100</span> Entries
                </span>
                <div class="inline-flex mt-2 xs:mt-0">
                    <!-- Buttons -->
                    <button class="flex items-center justify-center px-3 h-8 text-sm font-medium text-blue-secondary bg-white rounded-s hover:bg-gray-light dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                        <svg class="w-3.5 h-3.5 me-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
                        </svg>
                        Prev
                    </button>
                    <button class="flex items-center justify-center px-3 h-8 text-sm font-medium text-blue-secondary bg-white border-0 border-s border-gray-700 rounded-e hover:bg-gray-light dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                        Next
                        <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                    </button>
                </div>
                </div>
        </div>
    </div>
</div>

</x-app-layout>
