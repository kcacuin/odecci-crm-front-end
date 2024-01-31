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

                    <div class="flex">
                        {{-- * Display Picture --}}
                        <!-- Client Image -->
                        <div class="relative">
                            <x-text-input
                                class="block mt-1 w-full @error('client_image')
                                border-pink-600 placeholder:select-none
                                @enderror"
                                type="file"
                                name="client_image"
                                required
                                autofocus
                            />
                            <x-input-label name="Company Image"/>

                            <x-input-error :messages="$errors->get('client_image')" class="mt-2" />
                        </div>

                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            {{-- TODO: Populated Client Code with Disaabled Input --}}
                            <!-- Client Code -->
                            <div class="relative">
                                <x-text-input
                                    class="block mt-1 w-full @error('client_code')
                                    border-pink-600 placeholder:select-none
                                    @enderror"
                                    type="text"
                                    name="client_code"
                                    required
                                    autofocus
                                />
                                <x-input-label name="Client Code"/>

                                <x-input-error :messages="$errors->get('client_code')" class="mt-2" />
                            </div>
                            <!-- Company Name -->
                            <div class="relative">
                                <x-text-input
                                    class="block mt-1 w-full @error('client_name')
                                    border-pink-600 placeholder:select-none
                                    @enderror"
                                    type="text"
                                    name="client_name"
                                    required
                                    autofocus
                                />
                                <x-input-label name="Company Name"/>

                                <x-input-error :messages="$errors->get('client_name')" class="mt-2" />
                            </div>
                            <!-- Contact Person -->
                            <div class="relative">
                                <x-text-input
                                    class="block mt-1 w-full @error('contact_person')
                                    border-pink-600 placeholder:select-none
                                    @enderror"
                                    type="text"
                                    name="contact_person"
                                    required
                                    autofocus
                                />
                                <x-input-label name="Contact Person"/>

                                <x-input-error :messages="$errors->get('contact_person')" class="mt-2" />
                            </div>
                            <!-- Contact Number -->
                            <div class="relative">
                                <x-text-input
                                    class="block mt-1 w-full @error('contact_number')
                                    border-pink-600 placeholder:select-none
                                    @enderror"
                                    type="number"
                                    name="contact_number"
                                    required
                                    autofocus
                                />
                                <x-input-label name="Contact Number"/>

                                <x-input-error :messages="$errors->get('contact_number')" class="mt-2" />
                            </div>
                        </div>
                    </div>
                    <!-- Address -->
                    <div class="relative">
                        <x-text-input
                            class="block mt-1 w-full @error('address')
                            border-pink-600 placeholder:select-none
                            @enderror"
                            type="text"
                            name="address"
                            required
                            autofocus
                        />
                        <x-input-label name="Address"/>

                        <x-input-error :messages="$errors->get('address')" class="mt-2" />
                    </div>
                    <!-- Email -->
                    <div class="relative">
                        <x-text-input
                            class="block mt-1 w-full @error('email')
                            border-pink-600 placeholder:select-none
                            @enderror"
                            type="email"
                            name="email"
                            required
                            autofocus
                        />
                        <x-input-label name="Email"/>

                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <x-primary-button class="w-full flex justify-center mt-4">
                        {{ __('Save Information') }}
                    </x-primary-button>
                </form>

            </div>

        </div>

    </div>

</x-app-layout>
