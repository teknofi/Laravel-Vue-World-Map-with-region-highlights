@php
    use App\Models\Machines\DatabaseConstants;
@endphp

<x-app-layout>
    <div class="z-10 fixed w-full bg-gray-50 shadow-md">
        <h2 class="flex py-2 text-lg md:text-xl max-w-7xl mx-auto pl-4 md:pl-8 font-semibold">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="blue"
                class="w-6 h-6 mr-2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="m20.893 13.393-1.135-1.135a2.252 2.252 0 0 1-.421-.585l-1.08-2.16a.414.414 0 0 0-.663-.107.827.827 0 0 1-.812.21l-1.273-.363a.89.89 0 0 0-.738 1.595l.587.39c.59.395.674 1.23.172 1.732l-.2.2c-.212.212-.33.498-.33.796v.41c0 .409-.11.809-.32 1.158l-1.315 2.191a2.11 2.11 0 0 1-1.81 1.025 1.055 1.055 0 0 1-1.055-1.055v-1.172c0-.92-.56-1.747-1.414-2.089l-.655-.261a2.25 2.25 0 0 1-1.383-2.46l.007-.042a2.25 2.25 0 0 1 .29-.787l.09-.15a2.25 2.25 0 0 1 2.37-1.048l1.178.236a1.125 1.125 0 0 0 1.302-.795l.208-.73a1.125 1.125 0 0 0-.578-1.315l-.665-.332-.091.091a2.25 2.25 0 0 1-1.591.659h-.18c-.249 0-.487.1-.662.274a.931.931 0 0 1-1.458-1.137l1.411-2.353a2.25 2.25 0 0 0 .286-.76m11.928 9.869A9 9 0 0 0 8.965 3.525m11.928 9.868A9 9 0 1 1 8.965 3.525" />
            </svg>
            Distributor Record: <span class="ml-1 font-normal text-blue-800">{{ $distributor->name }}</span>
            @if ($addressCount > 1)
                <span
                    class="font-normal shadow-[0_5px_12px_rgba(0,_0,_0,_0.2)] ml-2 py-1 px-3 rounded-xl bg-blue-800 text-white text-base">Multiple
                    Sites</span>
            @endif
            {{-- <span
                class="hidden md:block font-normal shadow-[0_5px_12px_rgba(0,_0,_0,_0.2)] ml-2 py-1 px-3 rounded-xl bg-blue-800 text-white text-base">International
                distributor</span> --}}
        </h2>
    </div>
    <div class="pt-8 md:pt-12">

        <div class="max-w-7xl mx-auto my-2 sm:px-6 lg:px-8">
            <div class="mb-4 md:grid md:grid-cols-5 md:gap-4">
                <div class="mt-6 md:mt-0 md:col-span-1 flex justify-between">
                    <x-nav-link :href="route('machines.distributor.index')">
                        <x-buttonBlue>
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 w-5 h-5" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                            </svg> All distributors
                        </x-buttonBlue>
                    </x-nav-link>
                </div>
            </div>
        </div>
    </div>

    <x-splade-rehydrate on="note-logged" url="{{ url()->current() }}">
        @if ($importantNotes)
            @foreach ($importantNotes as $iNote)
                <Link slideover
                    href="{{ route('machines.distributorimportantnote.edit', ['distributorimportantnote' => $iNote->id]) }}">
                <div class="max-w-7xl mx-auto py-1 px-4 sm:px-6 lg:px-8">
                    @if ($iNote->note_type == 1)
                        <div
                            class="flex bg-blue-300 text-blue-700 w-full font-bold text-sm p-2 border-blue-700 border-l-4 shadow-[0_5px_12px_rgba(0,_0,_0,_0.2)]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-1">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                            </svg>
                    @endif
                    @if ($iNote->note_type == 2)
                        <div
                            class="flex bg-amber-200 text-amber-700 w-full font-bold text-sm p-2 border-amber-700 border-l-4 shadow-[0_5px_12px_rgba(0,_0,_0,_0.2)]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-1">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
                            </svg>
                    @endif
                    @if ($iNote->note_type == 3)
                        <div
                            class="flex bg-red-300 text-red-700 w-full font-bold text-sm p-2 border-red-700 border-l-4 shadow-[0_5px_12px_rgba(0,_0,_0,_0.2)]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-1">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                            </svg>
                    @endif


                    <p>{!! '[ ' . $iNote->created_at . ' ] ------ ' . $iNote->description . ' ------ logged by: ' . $iNote->user->name !!}
                    </p>
                </div>
                </div>
                </link>
            @endforeach
        @endif
    </x-splade-rehydrate>

    <x-splade-modal class="bg-gray-200" max-width="5xl">

        <div class="max-w-7xl mx-auto my-10 sm:px-6 lg:px-8">
            <div class="mb-4 md:grid md:grid-cols-5 md:gap-4">
                <div class="md:col-span-1 flex justify-between">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-xl font-medium text-gray-900">
                            Distributor Details
                        </h3>
                    </div>
                </div>

                <div class="mt-5 md:mt-0 md:col-span-4">

                    <x-splade-rehydrate on="address-updated, contact-updated, distributor-updated"
                        url="{{ url()->current() }}">
                        <x-splade-form stay :default="$distributor" method="PUT"
                            action="{{ route('machines.distributor.update', ['distributor' => $distributor->id]) }}"
                            @success="$splade.emit('distributor-updated')">
                            <div class="mb-4 px-4 py-5 bg-white sm:p-6 shadow sm:rounded-md">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div class="col-span-1 md:col-span-2">
                                        <div class="md:grid md:grid-cols-6 gap-2">
                                            <div class="col-span-2">
                                                <x-splade-rehydrate on="image-changed" url="{{ url()->current() }}">
                                                    <div class="col-span-1 flex justify-center items-center relative">
                                                        <img src="{{ asset($distributorLogo && $distributorLogo->filename ? '/file/' . $distributorLogo->foldername . '/' . $distributorLogo->filename : '/images/no-image.jpg') }}"
                                                            alt="Logo"
                                                            class="my-auto flex mr-2 w-full h-full md:h-40 object-contain" />
                                                        <Link slideover
                                                            href="{{ route('machines.distributorlogo', ['id' => $distributor->id]) }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                            class="text-gray hover:scale-110 hover:text-blue-600 h-6 w-6 absolute bottom-0 right-0 mb-5 mr-5">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M6.827 6.175A2.31 2.31 0 0 1 5.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 0 0-1.134-.175 2.31 2.31 0 0 1-1.64-1.055l-.822-1.316a2.192 2.192 0 0 0-1.736-1.039 48.774 48.774 0 0 0-5.232 0 2.192 2.192 0 0 0-1.736 1.039l-.821 1.316Z" />
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M16.5 12.75a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0ZM18.75 10.5h.008v.008h-.008V10.5Z" />
                                                        </svg>
                                                        </link>
                                                    </div>
                                                </x-splade-rehydrate>
                                            </div>

                                            <div class="col-span-4">
                                                <div class="md:grid md:grid-cols-4 gap-2">
                                                    <div class="col-span-2">
                                                        <x-splade-input class="w-full" label="Distributor Name"
                                                            name="name" />
                                                    </div>
                                                    <div class="col-span-2">
                                                        <x-splade-input class="w-full" label="Currency Type"
                                                            name="currency" />
                                                    </div>
                                                    <div class="col-span-2">
                                                        <x-splade-input class="w-full" label="Website"
                                                            name="website" />
                                                    </div>
                                                    <div class="col-span-2">
                                                        <x-splade-select class="w-full" label="Still Trading?"
                                                            name="trading">
                                                            <option value="1">Yes</option>
                                                            <option value="0">No</option>
                                                        </x-splade-select>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-span-1 md:col-span-6">
                                                <x-splade-select class="w-full" label="Default Address"
                                                    name="default_address_id">
                                                    @forelse ($distributor->addresses as $address)
                                                        <option value="{{ $address->id }}">
                                                            {{ implode(', ', array_filter([$address->address_line_1, $address->address_line_2, $address->town_city, $address->state_province_region, $address->country, $address->zip_postal_code])) }}
                                                        </option>
                                                    @empty
                                                        <option disabled value="">No Addresses Stored, Please
                                                            add an address</option>
                                                    @endforelse
                                                    <option class="border border-t text-blue-500 italic"
                                                        value="">
                                                        Clear Default</option>
                                                </x-splade-select>
                                            </div>
                                            <div class="col-span-1 md:col-span-3">

                                                <x-splade-select class="w-full"
                                                    label="Default Sales & Marketing Contact"
                                                    name="default_sales_contact_id">
                                                    @forelse ($distributor->contacts as $contact)
                                                        <option value="{{ $contact->id }}">
                                                            {{ $contact->title . ' ' . $contact->name . ($contact->role ? ' (' . $contact->role . ')' : '') }}
                                                        </option>
                                                    @empty
                                                        <option disabled value="">No Contacts Stored, Please
                                                            add an contact</option>
                                                    @endforelse
                                                    <option class="text-blue-500 italic" value="">Clear
                                                        Default
                                                    </option>
                                                </x-splade-select>
                                            </div>
                                            <div class="col-span-1 md:col-span-3">
                                                <x-splade-select class="w-full" label="Default Technical Contact"
                                                    name="default_techincal_contact_id">
                                                    @forelse ($distributor->contacts as $contact)
                                                        <option value="{{ $contact->id }}">
                                                            {{ $contact->title . ' ' . $contact->name . ($contact->role ? ' (' . $contact->role . ')' : '') }}
                                                        </option>
                                                    @empty
                                                        <option disabled value="">No Contacts Stored, Please
                                                            add an contact</option>
                                                    @endforelse
                                                    <option class="text-blue-500 italic" value="">Clear
                                                        Default
                                                    </option>
                                                </x-splade-select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4 flex justify-end">
                                    <x-buttonBlack>
                                        <span>Update</span>
                                    </x-buttonBlack>
                                </div>
                            </div>
                        </x-splade-form>
                    </x-splade-rehydrate>
                </div>

            </div>
        </div>

        <div class="max-w-7xl mx-auto my-10 sm:px-6 lg:px-8">
            <div class="mb-4 md:grid md:grid-cols-5 md:gap-4">
                <div class="md:col-span-1 flex justify-between">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-xl font-medium text-gray-900">
                            Distributor Regions
                        </h3>
                    </div>
                </div>

                <div class="mt-5 md:mt-0 md:col-span-4">

                    <x-splade-rehydrate on="region-changed"
                        url="{{ url()->current() }}">
                        <div class="mb-4 px-4 py-5 bg-white sm:p-6 shadow sm:rounded-md" x-data="{ highlightedCountries: { gb: true, us: true } }">
                             <WorldMap :countryIDs="@js($distLocationCodes)" />
                            <p class="">Associated territories:</p>
                            
                            @foreach($distLocations as $location) 
                            <div class="border border-blue-400 border-2 inline-flex bg-blue-300 rounded-lg p-2 mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-blue-700 my-auto h-6 w-6 mr-1">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m6.115 5.19.319 1.913A6 6 0 0 0 8.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 0 0 2.288-4.042 1.087 1.087 0 0 0-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 0 1-.98-.314l-.295-.295a1.125 1.125 0 0 1 0-1.591l.13-.132a1.125 1.125 0 0 1 1.3-.21l.603.302a.809.809 0 0 0 1.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 0 0 1.528-1.732l.146-.292M6.115 5.19A9 9 0 1 0 17.18 4.64M6.115 5.19A8.965 8.965 0 0 1 12 3c1.929 0 3.716.607 5.18 1.64" />
                                  </svg>
                                <span class="font-bold text-blue-700">{{$location->country->name}}</span>
                                
                                <Link class="my-auto" confirm="Remove region" confirm-text="Do you want to remove the region {{$location->country->name}} for this distributor?" href="{{ route('machines.removeregion', ['regionID' => $location->id, 'distID' => $location->distributor_id, 'regionName' => $location->country->name]) }}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-blue-500 my-auto h-4 w-4 ml-2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                  </svg>
                                </link>
                                  
                            </div>
                            @endforeach
                        </div>
                    </x-splade-rehydrate>
                </div>

            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pb-2">
            <div class="mb-4 md:grid md:grid-cols-5 md:gap-4">
                <div class="md:col-span-1 flex justify-between">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-xl font-medium text-gray-900">
                            Contacts
                        </h3>

                    </div>
                </div>

                <div class="md:mt-0 md:col-span-4">
                    <x-splade-rehydrate on="contact-updated" url="{{ url()->current() }}">
                        <x-splade-data remember="tabContacts">
                            <HeadlessTabGroup :selectedIndex="data.tabIndex" @change="(x) => {data.tabIndex = x}">
                                <HeadlessTabList
                                    class="overflow-x-auto whitespace-nowrap scrollbar-thin scrollbar-thumb-rounded-lg scrollbar-corner-rounded-lg scrollbar-track-rounded-lg scrollbar scrollbar-thumb-blue-800 scrollbar-track-white">
                                    @foreach ($distributor->contacts as $contact)
                                        <HeadlessTab as="template" v-slot="{ selected }">
                                            <x-button-tab>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="w-5 h-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                                </svg>
                                                <p class="pl-1 font-semibold">{{ $contact->name }}</p>
                                            </x-button-tab>
                                        </HeadlessTab>
                                    @endforeach
                                </HeadlessTabList>
                                <HeadlessTabPanels>
                                    @forelse ($distributor->contacts as $contact)
                                        <HeadlessTabPanel>
                                            <x-splade-form stay :default="$contact" method="PUT"
                                                action="{{ route('machines.distributorcontacts.update', ['distributorcontact' => $contact->id]) }}"
                                                @success="$splade.emit('contact-updated')">
                                                <div
                                                    class="shadow-[0px_0px_1px_1px_#00000024] px-4 py-5 bg-white sm:p-6 sm:rounded-tr-md">
                                                    <div class="grid grid-cols-2 gap-6">
                                                        <div class="col-span-2">
                                                            <div class="grid grid-cols-5 gap-2">
                                                                <div class="col-span-2 md:col-span-1">
                                                                    <x-splade-select class="w-full" label="Title"
                                                                        name="title">
                                                                        <option value="Miss">Miss</option>
                                                                        <option value="Mr">Mr</option>
                                                                        <option value="Mrs">Mrs</option>
                                                                        <option value="Ms">Ms</option>
                                                                        <option value="Mx">Mx</option>
                                                                    </x-splade-select>
                                                                </div>
                                                                <div class="col-span-3 md:col-span-2">
                                                                    <x-splade-input class="w-full" label="Name"
                                                                        name="name" />
                                                                </div>
                                                                <div class="col-span-5 md:col-span-2">
                                                                    <x-splade-input class="w-full" label="Role"
                                                                        name="role" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    {{-- Button Dial Start --}}

                                                    {{-- Button Dial End --}}

                                                    <FlowbiteDial class="mt-2 w-full flex justify-end"
                                                        triggerType="hover">
                                                        <div class="flex flex-row items-center space-x-2">
                                                            @if ($machineAdmin)
                                                                <Link
                                                                    confirm="Do you want to delete the contact: {{ $contact->name }}? this will aslo delete the emails and telephone numbers for this contact?"
                                                                    confirm-button="Delete"
                                                                    href="{{ route('machines.distributorcontacts.destroy', $contact) }}"
                                                                    method="DELETE">
                                                                <button type="button"
                                                                    class="hover:scale-[115%] w-[56px] h-[56px] text-gray-100 bg-red-600 rounded-lg border border-gray-200 hover:text-gray-100 shadow-sm hover:bg-red-800 focus:ring-4 focus:ring-gray-300 focus:outline-none">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        fill="none" viewBox="0 0 24 24"
                                                                        stroke-width="1.5" stroke="currentColor"
                                                                        class="w-5 h-5 mx-auto mb-1">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                                    </svg>
                                                                    <span
                                                                        class="block mb-px text-xs font-medium">Delete</span>
                                                                </button>
                                                                </Link>
                                                            @endif

                                                            <Link slideover
                                                                href="{{ route('machines.distributoremails.create', ['contact_id' => $contact->id]) }}">
                                                            <button type="button"
                                                                class="hover:scale-[115%] w-[56px] h-[56px] text-gray-100 bg-blue-800 rounded-lg border border-gray-200 hover:text-gray-100 shadow-sm hover:bg-slate-800 focus:ring-4 focus:ring-gray-300 focus:outline-none">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                                    stroke="currentColor"
                                                                    class="w-5 h-5 mx-auto mb-1">
                                                                    <path stroke-linecap="round"
                                                                        d="M16.5 12a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 10-2.636 6.364M16.5 12V8.25" />
                                                                </svg>
                                                                <span
                                                                    class="block mb-px text-xs font-medium">Email</span>
                                                            </button>
                                                            </Link>

                                                            <Link slideover
                                                                href="{{ route('machines.distributortelephones.create', ['contact_id' => $contact->id]) }}">
                                                            <button type="button"
                                                                class="hover:scale-[115%] w-[56px] h-[56px] text-gray-100 bg-blue-800 rounded-lg border border-gray-200 hover:text-gray-100 shadow-sm hover:bg-slate-800 focus:ring-4 focus:ring-gray-300 focus:outline-none">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                                    stroke="currentColor"
                                                                    class="w-5 h-5 mx-auto mb-1">
                                                                    <path stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                                                                </svg>
                                                                <span
                                                                    class="block mb-px text-xs font-medium">Phone</span>
                                                            </button>
                                                            </Link>

                                                            <button type="submit"
                                                                class="hover:scale-[115%] w-[56px] h-[56px] text-gray-100 bg-blue-800 rounded-lg border border-gray-200 hover:text-gray-100 shadow-sm hover:bg-slate-800 focus:ring-4 focus:ring-gray-300 focus:outline-none">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                                    stroke="currentColor"
                                                                    class="w-5 h-5 mx-auto mb-1">
                                                                    <path stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                                </svg>
                                                                <span
                                                                    class="block mb-px text-xs font-medium">Update</span>
                                                            </button>
                                                        </div>
                                                        <template v-slot:trigger>
                                                            <button type="button"
                                                                class="ml-2 w-[56px] h-[56px] items-center justify-center text-white bg-blue-800 rounded-lg w-14 h-14 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 focus:outline-none">
                                                                <svg class="w-6 h-6 transition-transform group-hover:rotate-45 mx-auto"
                                                                    aria-hidden="true"
                                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 18 18">
                                                                    <path stroke="currentColor" stroke-linecap="round"
                                                                        stroke-linejoin="round" stroke-width="2"
                                                                        d="M9 1v16M1 9h16" />
                                                                </svg>
                                                                <span
                                                                    class="mt-1 block mb-px text-xs font-medium">Actions</span>
                                                            </button>
                                                        </template>
                                                    </FlowbiteDial>

                                                </div>
                                            </x-splade-form>

                                            <div
                                                class="shadow-[0px_0px_1px_1px_#00000024] border-t border-gray-400 bg-gray-300 p-2">
                                                <x-label value="Email Addresses" />
                                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                                    @forelse ($contact->emails as $email)
                                                        <x-splade-form stay :default="$email" method="PUT"
                                                            action="{{ route('machines.distributoremails.update', ['distributoremail' => $email->id]) }}"
                                                            @success="$splade.emit('contact-updated')">
                                                            <div class="flex relative">
                                                                <x-splade-input class="w-full" name="email" />
                                                                @if ($machineAdmin)
                                                                    <Link
                                                                        confirm="Do you want to delete this email address for this contact?"
                                                                        confirm-button="Delete"
                                                                        href="{{ route('machines.distributoremails.destroy', ['distributoremail' => $email->id]) }}"
                                                                        method="DELETE">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        fill="none" viewBox="0 0 24 24"
                                                                        stroke-width="1.5" stroke="currentColor"
                                                                        class="w-5 h-5 hover:text-slate-800 hover:scale-[110%] text-red-500 absolute right-16 md:right-24 bottom-3 mr-2">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                                    </svg>
                                                                    </link>
                                                                    <a href="mailto:{{ $email->email }}">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            fill="none" viewBox="0 0 24 24"
                                                                            stroke-width="1.5" stroke="currentColor"
                                                                            class="w-5 h-5 hover:text-slate-800 hover:scale-[110%] text-blue-600 absolute right-10 md:right-32 bottom-3 mr-2">
                                                                            <path stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                d="M21.75 9v.906a2.25 2.25 0 01-1.183 1.981l-6.478 3.488M2.25 9v.906a2.25 2.25 0 001.183 1.981l6.478 3.488m8.839 2.51l-4.66-2.51m0 0l-1.023-.55a2.25 2.25 0 00-2.134 0l-1.022.55m0 0l-4.661 2.51m16.5 1.615a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V8.844a2.25 2.25 0 011.183-1.98l7.5-4.04a2.25 2.25 0 012.134 0l7.5 4.04a2.25 2.25 0 011.183 1.98V19.5z" />
                                                                        </svg>
                                                                    </a>
                                                                @else
                                                                    <a href="mailto:{{ $email->email }}">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            fill="none" viewBox="0 0 24 24"
                                                                            stroke-width="1.5" stroke="currentColor"
                                                                            class="w-5 h-5 hover:text-slate-800 hover:scale-[110%] text-blue-600 absolute right-24 bottom-3 mr-2">
                                                                            <path stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                d="M21.75 9v.906a2.25 2.25 0 01-1.183 1.981l-6.478 3.488M2.25 9v.906a2.25 2.25 0 001.183 1.981l6.478 3.488m8.839 2.51l-4.66-2.51m0 0l-1.023-.55a2.25 2.25 0 00-2.134 0l-1.022.55m0 0l-4.661 2.51m16.5 1.615a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V8.844a2.25 2.25 0 011.183-1.98l7.5-4.04a2.25 2.25 0 012.134 0l7.5 4.04a2.25 2.25 0 011.183 1.98V19.5z" />
                                                                        </svg>
                                                                    </a>
                                                                @endif
                                                                <x-buttonBlack>
                                                                    <span class="hidden md:block">Update</span>
                                                                </x-buttonBlack>
                                                            </div>
                                                        </x-splade-form>
                                                    @empty
                                                        <p class="pl-2">No Email Addresses stored for this contact
                                                        </p>
                                                    @endforelse
                                                </div>
                                            </div>

                                            <div
                                                class="shadow-[0px_0px_1px_1px_#00000024] mb-10 rounded-b-lg border-t border-gray-400 bg-gray-300 p-2">
                                                <x-label value="Telephone Numbers" />
                                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                                    @forelse ($contact->telephones as $telephone)
                                                        <x-splade-form stay :default="$telephone" method="PUT"
                                                            action="{{ route('machines.distributortelephones.update', ['distributortelephone' => $telephone->id]) }}"
                                                            @success="$splade.emit('contact-updated')">
                                                            <div class="flex relative">
                                                                <x-splade-input name="telephone" class="w-full" />
                                                                @if ($machineAdmin)
                                                                    <Link
                                                                        confirm="Do you want to delete this telephone number for this contact?"
                                                                        confirm-button="Delete"
                                                                        href="{{ route('machines.distributortelephones.destroy', ['distributortelephone' => $telephone->id]) }}"
                                                                        method="DELETE">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        fill="none" viewBox="0 0 24 24"
                                                                        stroke-width="1.5" stroke="currentColor"
                                                                        class="w-5 h-5 hover:text-slate-800 hover:scale-[110%] text-red-500 absolute right-24 bottom-3 mr-2">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                                    </svg>
                                                                    </link>
                                                                @endif
                                                                <x-buttonBlack>
                                                                    <span class="hidden md:block">Update</span>
                                                                </x-buttonBlack>
                                                            </div>
                                                        </x-splade-form>
                                                    @empty
                                                        <p class="pl-2">No Telephone Numbers stored for this contact
                                                        </p>
                                                    @endforelse
                                                </div>
                                            </div>
                                        </HeadlessTabPanel>
                                    @empty
                                        <div class="h-20 px-4 py-5 bg-white sm:p-6 shadow rounded-lg">
                                            <p>No Contacts stored for this distributor</p>
                                        </div>
                                    @endforelse
                                </HeadlessTabPanels>
                            </HeadlessTabGroup>
                        </x-splade-data>
                    </x-splade-rehydrate>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto my-10 sm:px-6 lg:px-8">
            <div class="mb-4 md:grid md:grid-cols-5 md:gap-4">
                <div class="md:col-span-1 flex justify-between">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-xl font-medium text-gray-900">
                            Distributor Addresses
                        </h3>
                    </div>
                </div>

                <div class="mt-5 md:mt-0 md:col-span-4">
                    <x-splade-rehydrate on="address-updated" url="{{ url()->current() }}">

                        <x-splade-data remember="tabAddress">
                            <HeadlessTabGroup :selectedIndex="data.tabIndex" @change="(x) => {data.tabIndex = x}">
                                <HeadlessTabList
                                    class="overflow-x-auto whitespace-nowrap scrollbar-thin scrollbar-thumb-rounded-lg scrollbar-corner-rounded-lg scrollbar-track-rounded-lg scrollbar scrollbar-thumb-blue-800 scrollbar-track-white">
                                    @foreach ($distributor->addresses as $address)
                                        <HeadlessTab as="template" v-slot="{ selected }">
                                            <x-button-tab>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="w-5 h-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205l3 1m1.5.5l-1.5-.5M6.75 7.364V3h-3v18m3-13.636l10.5-3.819" />
                                                </svg>
                                                <p class="pl-1 font-semibold">{{ $address->address_line_1 }}</p>
                                            </x-button-tab>
                                        </HeadlessTab>
                                    @endforeach
                                </HeadlessTabList>
                                <HeadlessTabPanels>
                                    @forelse ($distributor->addresses as $address)
                                        {{-- International addresses --}}
                                        <HeadlessTabPanel>
                                            <x-splade-form stay :default="$address" method="PUT"
                                                action="{{ route('machines.addressesdistributor.update', ['addressesdistributor' => $address]) }}"
                                                @success="$splade.emit('address-updated')">
                                                <div
                                                    class="shadow-[0px_0px_1px_1px_#00000024] mb-4 px-4 py-5 bg-white sm:p-6 sm:rounded-b-md sm:rounded-tr-md">
                                                    <div class="grid grid-cols-2 gap-6">
                                                        <div class="col-span-2">

                                                            <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                                                                <div class="col-span-1">
                                                                    <x-splade-input class="w-full"
                                                                        label="Address Line 1"
                                                                        name="address_line_1" />
                                                                </div>
                                                                <div class="col-span-1">
                                                                    <x-splade-input class="w-full"
                                                                        label="Address Line 2"
                                                                        name="address_line_2" />
                                                                </div>
                                                                <div class="col-span-1">
                                                                    <x-splade-input class="w-full" label="Town / City"
                                                                        name="town_city" />
                                                                </div>
                                                                <div class="col-span-1">
                                                                    <x-splade-input class="w-full"
                                                                        label="State / Province / Region"
                                                                        name="state_province_region" />
                                                                </div>
                                                                <div class="col-span-1">
                                                                    <x-splade-input class="w-full" label="Country"
                                                                        name="country" />
                                                                </div>
                                                                <div class="col-span-1">
                                                                    <x-splade-input class="w-full"
                                                                        label="ZIP / Postal Code"
                                                                        name="zip_postal_code" />
                                                                </div>
                                                            </div>
                                                            <div class="mt-2 rounded-lg bg-gray-800 w-full"><iframe
                                                                    width="100%" height="300" frameborder="0"
                                                                    scrolling="no" marginheight="0" marginwidth="0"
                                                                    src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q={{ urlencode($distributor->name) }}%20{{ urlencode($address->address_line_1) }}%20{{ urlencode($address->address_line_2) }}%20{{ urlencode($address->town_city) }}%20{{ urlencode($address->zip_postal_code) }}+{{ urlencode($address->address_line_1) }}&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a
                                                                        href="https://www.maps.ie/distance-area-calculator.html">area
                                                                        maps</a></iframe>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="mt-4 flex justify-end space-x-2">
                                                        @if ($machineAdmin)
                                                            <Link
                                                                confirm="Do you want to delete this address for this distributor?"
                                                                confirm-button="Delete"
                                                                href="{{ route('machines.addressesdistributor.destroy', ['addressesdistributor' => $address->id]) }}"
                                                                method="DELETE">
                                                            <x-buttonDelete class="py-2.5">
                                                                Delete
                                                            </x-buttonDelete>
                                                            </link>
                                                        @endif

                                                        <x-buttonBlack>
                                                            <span class="hidden md:block">Update</span>
                                                        </x-buttonBlack>
                                                    </div>
                                                </div>

                                            </x-splade-form>
                                        </HeadlessTabPanel>
                                    @empty
                                        <div class="h-20 px-4 py-5 bg-white sm:p-6 shadow rounded-lg">
                                            <p>No Addresses stored for this distributor</p>
                                        </div>
                                    @endforelse
                                </HeadlessTabPanels>
                            </HeadlessTabGroup>
                        </x-splade-data>
                    </x-splade-rehydrate>
                </div>

            </div>
        </div>


        <div class="max-w-7xl mx-auto py-3 px-4 sm:px-6 lg:px-8">
            <x-splade-rehydrate
                on="note-logged, training-logged, address-updated, contact-updated, distributor-updated, region-changed"
                url="{{ url()->full() }}">
                <x-splade-data remember="tabNotes">
                    <HeadlessTabGroup :selectedIndex="data.tabIndex" @change="(x) => {data.tabIndex = x}">
                        <HeadlessTabList
                            class="overflow-x-auto whitespace-nowrap scrollbar-thin scrollbar-thumb-rounded-lg scrollbar-corner-rounded-lg scrollbar-track-rounded-lg scrollbar scrollbar-thumb-blue-800 scrollbar-track-white">
                            <HeadlessTab as="template" v-slot="{ selected }">
                                <x-button-tab>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="mx-auto w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>

                                    <p class="text-sm md:text-base pl-1 font-semibold">History</p>
                                </x-button-tab>
                            </HeadlessTab>
                            <HeadlessTab as="template" v-slot="{ selected }">
                                <x-button-tab>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="mx-auto w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                    </svg>

                                    <p class="text-sm md:text-base pl-1 font-semibold">Notes</p>
                                </x-button-tab>
                            </HeadlessTab>
                            {{-- <HeadlessTab as="template" v-slot="{ selected }">
                                <x-button-tab>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="mx-auto w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                                    </svg>
                                    <p class="text-sm md:text-base pl-1 font-semibold">Training</p>
                                </x-button-tab>
                            </HeadlessTab> --}}
                        </HeadlessTabList>
                        <HeadlessTabPanels>
                            <HeadlessTabPanel>
                                <div
                                    class="shadow-[0px_0px_1px_1px_#00000024] mb-4 px-4 py-5 bg-white sm:p-6 sm:rounded-b-md sm:rounded-tr-md">
                                    <x-splade-table :for="$distributorHistory" pagination-scroll="preserve">
                                        <x-splade-cell created_at>
                                            <div class="text-center whitespace-normal">{!! nl2br(htmlentities($item->created_at)) !!}</div>
                                        </x-splade-cell>
                                        <x-splade-cell type>
                                            <div class="text-center whitespace-normal">{!! nl2br(htmlentities($item->type)) !!}</div>
                                        </x-splade-cell>
                                        <x-splade-cell new_data>
                                            <div class="text-center whitespace-normal">{!! Illuminate\Support\Str::highlightBrackets(nl2br(htmlentities($item->new_data))) !!}</div>
                                        </x-splade-cell>
                                        <x-splade-cell old_data>
                                            <div class="text-gray-400 line-through text-center whitespace-normal">
                                                {!! Illuminate\Support\Str::highlightBrackets(nl2br(htmlentities($item->old_data))) !!}</div>
                                        </x-splade-cell>
                                    </x-splade-table>
                                </div>
                            </HeadlessTabPanel>
                            <HeadlessTabPanel>
                                <div
                                    class="shadow-[0px_0px_1px_1px_#00000024] mb-4 px-4 py-5 bg-white sm:p-6 sm:rounded-b-md sm:rounded-tr-md">
                                    <x-splade-table :for="$notes" pagination-scroll="preserve">
                                        <x-splade-cell created_at>
                                            <div class="whitespace-normal">{!! nl2br(htmlentities($item->created_at)) !!}</div>
                                        </x-splade-cell>
                                        <x-splade-cell description>
                                            <div class="whitespace-normal">{!! nl2br(htmlentities($item->description)) !!}</div>
                                        </x-splade-cell>
                                    </x-splade-table>
                                </div>
                            </HeadlessTabPanel>
                            {{-- <HeadlessTabPanel>
                                <div
                                    class="shadow-[0px_0px_1px_1px_#00000024] mb-4 px-4 py-5 bg-white sm:p-6 sm:rounded-b-md sm:rounded-tr-md">
                                    <x-splade-table :for="$trainings" pagination-scroll="preserve">
                                    </x-splade-table>
                                </div>
                            </HeadlessTabPanel> --}}
                        </HeadlessTabPanels>
                    </HeadlessTabGroup>
                </x-splade-data>
            </x-splade-rehydrate>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pb-24 md:pb-10">
            <div class="px-4 py-4 sm:px-0">
                <h3 class="text-xl font-medium text-gray-900">
                    Machines
                </h3>
            </div>
            <x-splade-table :for="$tableMachines">
                <x-splade-cell machine_name.filename>
                    <div style="position: relative;">
                        @if ($item->decommissioned)
                            <img src="{{ asset('images/machines/decommissioned.svg') }}" alt="Decommissioned"
                                class="opacity-75" style="position: absolute; top: 10px; left: 10px;" />
                        @endif

                        @switch($item->machine_name_id)
                            @case(DatabaseConstants::MachineNameXtreme)
                                @if ($item->serial > 600000)
                                    <img src="{{ asset('images/machines/xtreme350.png') }}" alt="Logo"
                                        style="min-width: 80px; max-width: 80px; width: auto; height: auto;" />
                                @else
                                    <img src="{{ asset('images/machines/xtreme500.png') }}" alt="Logo"
                                        style="min-width: 80px; max-width: 80px; width: auto; height: auto;" />
                                @endif
                            @break

                            @case(DatabaseConstants::MachineNameExtol)
                                @if ($item->serial > 30000)
                                    <img src="{{ asset('images/machines/extol520.png') }}" alt="Logo"
                                        style="min-width: 80px; max-width: 80px; width: auto; height: auto;" />
                                @else
                                    <img src="{{ asset('images/machines/extol370.png') }}" alt="Logo"
                                        style="min-width: 80px; max-width: 80px; width: auto; height: auto;" />
                                @endif
                            @break

                            @default
                                <img src="{{ asset('images/' . $item->machine_name->filename) }}" alt="Logo"
                                    style="min-width: 80px; max-width: 80px; width: auto; height: auto;" />
                        @endswitch
                    </div>
                </x-splade-cell>
                <x-splade-cell serial>
                    {{ $item->serial }}
                    @if ($item->decommissioned)
                        <span class="ml-1">(Decomissioned)</span>
                    @endif
                </x-splade-cell>
            </x-splade-table>
        </div>



        <FlowbiteDial class="fixed right-6 bottom-6 group" triggerType="click">
            <div class="flex flex-col items-center mb-4 space-y-2">

                <Link slideover
                    href="{{ route('machines.addressesdistributor.create', ['distributor_id' => $distributor->id]) }}">
                <button type="button"
                    class="hover:scale-[115%] w-[64px] h-[64px] text-gray-100 bg-blue-800 rounded-lg border border-gray-200 hover:text-gray-100 shadow-sm hover:bg-slate-800 focus:ring-4 focus:ring-gray-300 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 mx-auto mb-1">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M20.893 13.393l-1.135-1.135a2.252 2.252 0 01-.421-.585l-1.08-2.16a.414.414 0 00-.663-.107.827.827 0 01-.812.21l-1.273-.363a.89.89 0 00-.738 1.595l.587.39c.59.395.674 1.23.172 1.732l-.2.2c-.212.212-.33.498-.33.796v.41c0 .409-.11.809-.32 1.158l-1.315 2.191a2.11 2.11 0 01-1.81 1.025 1.055 1.055 0 01-1.055-1.055v-1.172c0-.92-.56-1.747-1.414-2.089l-.655-.261a2.25 2.25 0 01-1.383-2.46l.007-.042a2.25 2.25 0 01.29-.787l.09-.15a2.25 2.25 0 012.37-1.048l1.178.236a1.125 1.125 0 001.302-.795l.208-.73a1.125 1.125 0 00-.578-1.315l-.665-.332-.091.091a2.25 2.25 0 01-1.591.659h-.18c-.249 0-.487.1-.662.274a.931.931 0 01-1.458-1.137l1.411-2.353a2.25 2.25 0 00.286-.76m11.928 9.869A9 9 0 008.965 3.525m11.928 9.868A9 9 0 118.965 3.525" />
                    </svg>
                    <span class="block mb-px text-xs font-medium">Address</span>
                </button>
                </Link>

                <Link slideover
                    href="{{ route('machines.distributorcontacts.create', ['distributor_id' => $distributor->id]) }}">
                <button type="button"
                    class="hover:scale-[115%] w-[64px] h-[64px] text-gray-100 bg-blue-800 rounded-lg border border-gray-200 hover:text-gray-100 shadow-sm hover:bg-slate-800 focus:ring-4 focus:ring-gray-300 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 mx-auto mb-1">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                    </svg>
                    <span class="block mb-px text-xs font-medium">Contact</span>
                </button>
                </Link>

                <Link slideover
                    href="{{ route('machines.addregion', ['distributor_id' => $distributor->id]) }}">
                <button type="button"
                    class="hover:scale-[115%] w-[64px] h-[64px] text-gray-100 bg-blue-800 rounded-lg border border-gray-200 hover:text-gray-100 shadow-sm hover:bg-slate-800 focus:ring-4 focus:ring-gray-300 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mx-auto mb-1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 6.75V15m6-6v8.25m.503 3.498 4.875-2.437c.381-.19.622-.58.622-1.006V4.82c0-.836-.88-1.38-1.628-1.006l-3.869 1.934c-.317.159-.69.159-1.006 0L9.503 3.252a1.125 1.125 0 0 0-1.006 0L3.622 5.689C3.24 5.88 3 6.27 3 6.695V19.18c0 .836.88 1.38 1.628 1.006l3.869-1.934c.317-.159.69-.159 1.006 0l4.994 2.497c.317.158.69.158 1.006 0Z" />
                      </svg>                      
                    <span class="block mb-px text-xs font-medium">Region</span>
                </button>
                </Link>

                {{-- <Link slideover
                    href="{{ route('machines.distributornote.create', ['distributor_id' => $distributor->id]) }}">
                <button type="button"
                    class="hover:scale-[115%] w-[64px] h-[64px] text-gray-100 bg-blue-800 rounded-lg border border-gray-200 hover:text-gray-100 shadow-sm hover:bg-slate-800 focus:ring-4 focus:ring-gray-300 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 mx-auto mb-1">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m3.75 9v6m3-3H9m1.5-12H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                    </svg>
                    <span class="block mb-px text-xs font-medium">Note</span>
                </button>
                </Link> --}}

                {{-- <Link slideover
                    href="{{ route('machines.distributorimportantnote.create', ['distributor_id' => $distributor->id]) }}">
                <button type="button"
                    class="hover:scale-[115%] w-[64px] h-[64px] text-gray-100 bg-blue-800 rounded-lg border border-gray-200 hover:text-gray-100 shadow-sm hover:bg-slate-800 focus:ring-4 focus:ring-gray-300 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 mx-auto ">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
                    </svg>
                    <span class="block mb-px text-xs font-medium">Important Note</span>
                </button>
                </Link> --}}

                {{-- <Link slideover
                    href="{{ route('machines.distributortraining.create', ['distributor_id' => $distributor->id]) }}">
                <button type="button"
                    class="hover:scale-[115%] w-[64px] h-[64px] text-gray-100 bg-blue-800 rounded-lg border border-gray-200 hover:text-gray-100 shadow-sm hover:bg-slate-800 focus:ring-4 focus:ring-gray-300 focus:outline-none">
                    <svg class="w-6 h-6 mx-auto mb-1" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                    </svg>
                    <span class="block mb-px text-xs font-medium">Training</span>
                </button>
                </Link> --}}
            </div>
            <template v-slot:trigger>
                <button type="button"
                    class="w-[64px] h-[64px] items-center justify-center text-white bg-blue-800 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 focus:outline-none">
                    <svg class="w-6 h-6 transition-transform group-hover:rotate-45 mx-auto" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="1.5" d="M9 1v16M1 9h16" />
                    </svg>
                    <span class="mt-1 block mb-px text-xs font-medium">Actions</span>
                </button>
            </template>
        </FlowbiteDial>

    </x-splade-modal>

</x-app-layout>
