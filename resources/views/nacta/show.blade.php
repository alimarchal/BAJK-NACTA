<x-app-layout>
    <x-slot name="header">

        <form action="{{route('nacta.index')}}" method="get"
              class="inline-flex float-right flex-wrap justify-between md:flex-row rounded-lg overflow-hidden"
              style="border: 1px solid lightgray;">
            <input type="search" name="searchq" value="" placeholder="Search NACTA"
                   class="flex-1 px-4 py-2 text-gray-700 placeholder-gray-400 bg-white border-none appearance-none dark:text-gray-200 focus:outline-none focus:placeholder-transparent focus:ring-0 ">
            <button
                class="flex justify-center px-4 py-2 bg-white text-gray-700 transition-colors duration-200 transform  lg:w-auto bg-gray-100 hover:bg-teal-300 focus:outline-none focus:bg-teal-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                     class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
            </button>
        </form>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('NACTA Check') }}
        </h2>


    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white  shadow-xl sm:rounded-lg">
                <!-- component -->
                <!-- component -->
                <style>
                    :root {
                        --main-color: #4a76a8;
                    }

                    .bg-main-color {
                        background-color: var(--main-color);
                    }

                    .text-main-color {
                        color: var(--main-color);
                    }

                    .border-main-color {
                        border-color: var(--main-color);
                    }
                </style>
                <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
                <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>



                <div class="bg-gray-100">
                    <div class="w-full text-white bg-red-800">
                        <div x-data="{ open: false }"
                             class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
                            <div class="p-4 flex flex-row items-center justify-between">
                                <a href="#" class="text-lg font-semibold tracking-widest uppercase rounded-lg focus:outline-none focus:shadow-outline">
                                    Profile - National Counter Terrorism Authority NACTA Pakistan (NACTA)
                                </a>
                                <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                                        <path x-show="!open" fill-rule="evenodd"
                                              d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                                              clip-rule="evenodd"></path>
                                        <path x-show="open" fill-rule="evenodd"
                                              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </div>

                        </div>
                    </div>
                    <!-- End of Navbar -->

                    <div class="container mx-auto my-5 p-5">
                        <div class="md:flex no-wrap md:-mx-2 ">
                            <!-- Left Side -->
                            <div class="w-full md:w-3/12 md:mx-2">
                                <!-- Profile Card -->
                                <div class="bg-white p-3 border-t-4 border-green-400">
                                    <div class="image overflow-hidden">
                                        <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24" id="image_placeholder_svg">
                                            <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                        </svg>
                                    </div>
                                    <h1 class="text-gray-900 font-bold text-xl leading-8 my-1">{{$nacta->name}}</h1>
                                    <h3 class="text-gray-600 font-lg text-semibold leading-6">Remarks</h3>
                                    @if(empty($nacta->remarks))
                                        N/A
                                    @else
                                    <p class="text-sm text-gray-500 hover:text-gray-600 leading-6">
                                        {{$nacta->remarks}}
                                    </p>
                                    @endif
                                    <ul
                                        class="bg-gray-100 text-gray-600 hover:text-gray-700 hover:shadow py-2 px-3 mt-3 divide-y rounded shadow-sm">
                                        <li class="flex items-center py-3">
                                            <span>Deceased</span>
                                            @if(empty($nacta->deceased))
                                                @else
                                                <span class="ml-auto"><span class="bg-green-500 py-1 px-2 rounded text-white text-sm">{{$nacta->deceased}}</span></span>
                                                @endif

                                        </li>
                                        <li class="flex items-center py-3">
                                            <span>Gender</span>
                                            <span class="ml-auto">{{$nacta->gender}}</span>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End of profile card -->
                                <div class="my-4"></div>
                                <!-- Friends card -->
                                <!-- End of friends card -->
                            </div>
                            <!-- Right Side -->
                            <div class="w-full md:w-9/12 mx-2 h-64">
                                <!-- Profile tab -->
                                <!-- About Section -->
                                <div class="bg-white p-3 shadow-sm rounded-sm">
                                    <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                        <span clas="text-green-500">
                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </span>
                                        <span class="tracking-wide">About</span>
                                    </div>
                                    <div class="text-gray-700">
                                        <div class="grid md:grid-cols-2 text-sm">
                                            <div class="grid grid-cols-2">
                                                <div class="px-4 py-2 font-semibold">Name</div>
                                                <div class="px-4 py-2">{{$nacta->name}}</div>
                                            </div>
                                            <div class="grid grid-cols-2">
                                                <div class="px-4 py-2 font-semibold">Category</div>
                                                <div class="px-4 py-2">{{$nacta->category}}</div>
                                            </div>
                                            <div class="grid grid-cols-2">
                                                <div class="px-4 py-2 font-semibold">Aliases</div>
                                                <div class="px-4 py-2">{{$nacta->aliases}}</div>
                                            </div>
                                            <div class="grid grid-cols-2">
                                                <div class="px-4 py-2 font-semibold">City</div>
                                                <div class="px-4 py-2">{{$nacta->city}}</div>
                                            </div>
                                            <div class="grid grid-cols-2">
                                                <div class="px-4 py-2 font-semibold">Country</div>
                                                <div class="px-4 py-2">{{$nacta->country}}</div>
                                            </div>
                                            <div class="grid grid-cols-2">
                                                <div class="px-4 py-2 font-semibold">Address</div>
                                                <div class="px-4 py-2">{{$nacta->address}}</div>
                                            </div>
                                            <div class="grid grid-cols-2">
                                                <div class="px-4 py-2 font-semibold">Program</div>
                                                <div class="px-4 py-2">{{$nacta->program}}</div>
                                            </div>
                                            <div class="grid grid-cols-2">
                                                <div class="px-4 py-2 font-semibold">Last occupation</div>
                                                <div class="px-4 py-2">
                                                    <a class="text-blue-800" >{{$nacta->last_occupation}}</a>
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-2">
                                                <div class="px-4 py-2 font-semibold">Birthday</div>
                                                <div class="px-4 py-2">{{$nacta->birth_date}}</div>
                                            </div>



                                            <div class="grid grid-cols-2">
                                                <div class="px-4 py-2 font-semibold">Birth Country</div>
                                                <div class="px-4 py-2">
                                                    <a class="text-blue-800" >{{$nacta->birth_country}}</a>
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-2">
                                                <div class="px-4 py-2 font-semibold">Residence Country</div>
                                                <div class="px-4 py-2">{{$nacta->residence_country}}</div>
                                            </div>


                                            <div class="grid grid-cols-2">
                                                <div class="px-4 py-2 font-semibold">Nationality</div>
                                                <div class="px-4 py-2">
                                                    <a class="text-blue-800" >{{$nacta->nationality}}</a>
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-2">
                                                <div class="px-4 py-2 font-semibold">External Id / CNIC</div>
                                                <div class="px-4 py-2">{{$nacta->external_id}}</div>
                                            </div>



                                            <div class="grid grid-cols-2">
                                                <div class="px-4 py-2 font-semibold">Internal Id</div>
                                                <div class="px-4 py-2">{{$nacta->internal_id}}</div>
                                            </div>
                                            <div class="grid grid-cols-2">
                                                <div class="px-4 py-2 font-semibold">Data Sources</div>
                                                <div class="px-4 py-2">{{$nacta->data_sources}}</div>
                                            </div>


                                            <div class="grid grid-cols-2">
                                                <div class="px-4 py-2 font-semibold">Related To</div>
                                                <div class="px-4 py-2">{{$nacta->related_to}}</div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <!-- End of about section -->

                                <div class="my-4"></div>


                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
</x-app-layout>
