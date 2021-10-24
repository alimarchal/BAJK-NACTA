<x-app-layout>
    <x-slot name="header">

        <form action="{{route('nacta.index')}}" method="get"
              class="inline-flex float-right flex-wrap justify-between md:flex-row rounded-lg overflow-hidden"
              style="border: 1px solid lightgray;">
            <input type="search" name="searchq" value="{{request()->has('searchq') ? @request()->get('searchq'):'' }}" placeholder="Search NACTA"
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
            BAJK Customer Inquiry Portal - Date: {{date('d-m-Y')}}
        </h2>


    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white  shadow-xl sm:rounded-lg">
                <!-- component -->

                @if($collection->isNotEmpty())
                <div class="bg-white shadow-md rounded ">
                    <table class="min-w-full leading-normal">
                        <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-left">Category</th>
                            <th class="py-3 px-6 text-left">name</th>
                            <th class="py-3 px-6 text-left">aliases</th>
                            <th class="py-3 px-6 text-center">country</th>
                            <th class="py-3 px-6 text-left">city</th>
                            <th class="py-3 px-6 text-center">External ID / CNIC</th>
                            <th class="py-3 px-6 text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody class="text-black text-sm font-light">
                        @foreach($collection as $list)
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    <div class="flex items-center">
                                        {{$list->category}}
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">

                                    <a href="{{route('nacta.show',$list->id)}}" class="text-blue-500 hover:text-blue-600">
                                        <span class="font-medium">
                                        {{$list->name}}
                                        </span>
                                    </a>
                                </td>
                                <td class="py-3 px-6 text-center">

                                    @if(empty($list->aliases))
                                        N/A
                                    @else
                                        {{$list->aliases}}
                                    @endif
                                </td>


                                <td class="py-3 px-6 text-center">
                                    @if(empty($list->country))
                                        N/A
                                    @else
                                        {{$list->country}}
                                    @endif
                                </td>

                                <td class="py-3 px-6 text-center">

                                    @if(empty($list->city))
                                        N/A
                                    @else
                                        {{$list->city}}
                                    @endif


                                </td>

                                <td class="py-3 px-6 text-center">
                                    @if(empty($list->external_id))
                                        N/A
                                    @else
                                        <span class="bg-red-900 text-white py-1 px-3 rounded-full text-xs">
                                        {{$list->external_id}}
                                    </span>
                                    @endif

                                </td>
                                <td class="py-3 px-6 text-center">
                                    <div class="flex item-center justify-center">
                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <a href="{{route('nacta.show',$list->id)}}" >
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                 stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                            </svg>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div>

                <div class="p-4 m-4">
                    {{ $collection->links() }}
                </div>
                @else
                    <h1 class="p-10  text-2xl text-center"> Not Found as of {{date('d-m-Y')}}</h1>
                @endif

            </div>
        </div>
</x-app-layout>
