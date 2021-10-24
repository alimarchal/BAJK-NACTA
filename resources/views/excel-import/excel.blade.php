<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-5 bg-white border-b border-gray-200">
                    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                        <div wire:id="GLD3AB9RhGBgBgJ4bw0X" class="md:grid md:grid-cols-3 md:gap-6">
                            <div class="md:col-span-1 flex justify-between">
                                <div class="px-4 sm:px-0">
                                    <h3 class="text-lg font-medium text-gray-900">NACTA Information</h3>
                                    <p class="mt-1 text-sm text-gray-600">
                                        Please import your Excel file that you received from NACTA.
                                    </p>
                                </div>

                                <div class="px-4 sm:px-0">

                                </div>
                            </div>

                            <div class="mt-5 md:mt-0 md:col-span-2">
                                <form action="{{route('nacta.store')}}" enctype="multipart/form-data" method="POST">
                                    @csrf
                                    <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
                                        <div class="grid grid-cols-6 gap-6">
                                            <!-- Profile Photo -->
                                            <div  class="col-span-6 sm:col-span-6">
                                                <!-- Profile Photo File Input -->

                                                <h3 class="text-lg font-medium text-gray-900">
                                                    Import excel file for updating your database.
                                                </h3>

                                                <div class="mt-3  text-sm text-gray-600">
                                                    <p>
                                                        When you import Excel file please follow the format of column sample <a href="{{Storage::url('sample_template.xlsx')}}" class="text-red-500 hover:underline "><strong>download</strong></a>.
                                                    </p>
                                                </div>

                                            </div>

                                            <!-- Name -->
                                            <div class="col-span-6 sm:col-span-4">
                                                <label class="block font-medium text-sm text-gray-700" for="import_file">
                                                    Import your excel file
                                                </label>
                                                <input required class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" id="import_file" name="import_file" type="file">
                                                @error('import_file')
                                                <div class="text-red-500 mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>

                                        </div>
                                    </div>

                                    <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition" wire:loading.attr="disabled" wire:target="photo">
                                            Import
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
</x-app-layout>
