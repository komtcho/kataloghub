<section class="container p-6 mx-auto">


    <div class="grid md:grid-cols-2 gap-x-2">
        <h1 class="mb-4 text-xl md:text-2xl font-semibold text-black">
            Stores list
        </h1>

        <div>
            <a href="{{ route('admin.stores.create') }}"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded float-right">Add
                new store</a>
        </div>
    </div>

    <!-- scrolling horiz. table -->
    <div class="overflow-x-auto shadow-sm">

        <table class="w-full whitespace-no-wrap">
            <thead>
                <tr class="text-xs font-semibold tracking-wide text-left uppercase bg-gray-200">
                    <th class="px-3 py-3" width="400">Store name</th>
                    <th class="px-3 py-3" width="400">Store slug</th>
                    <th class="px-3 py-3">Currency</th>
                    <th class="px-3 py-3 text-right" width="100">Manage</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y">

                @foreach ($stores as $store)
                    <tr class="text-gray-700 dark:text-gray-400">
                        <td class="px-3 py-3">
                            {{ $store->name }}
                        </td>
                        <td class="px-3 py-3">
                            {{ $store->slug }}
                        </td>
                        <td class="px-3 py-3">
                            {{ $store->currency }}
                        </td>
                        <td class="px-3 py-3 flex justify-end gap-1">
                            <a class="px-2 py-1 inline-block text-red-500 bg-white shadow-sm border border-gray-200 rounded-md hover:bg-gray-100 hover:text-red-600"
                                href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash"
                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <line x1="4" y1="7" x2="20" y2="7"></line>
                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                </svg>
                            </a>
                            <a class="px-2 py-1 inline-block text-gray-500 bg-white shadow-sm border border-gray-200 rounded-md hover:bg-gray-100 hover:text-gray-600"
                                href="{{ route('admin.stores.update', [$store]) }}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit"
                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                                    <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z">
                                    </path>
                                    <path d="M16 5l3 3"></path>
                                </svg>
                            </a>
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>

    </div>
    <!-- scrolling horiz. table -->

</section> <!-- container -->
