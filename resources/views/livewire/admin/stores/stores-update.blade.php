<section class="container max-w-3xl p-6 mx-auto">

    <article class="bg-white rounded shadow-sm border border-gray-200 p-4 lg:p-6 my-5">

        <h2 class="mb-3 text-xl md:text-2xl font-semibold text-black">
            Update this store
        </h2>

        <form wire:submit.prevent="submit">

            <div class="mb-4">
                <label class="block mb-1">Name of store</label>
                <input type="text"
                    class="appearance-none border border-gray-200 bg-gray-100 rounded-md py-2 px-3 hover:border-gray-400 focus:outline-none focus:border-gray-400 w-full @error('name') input-error @enderror"
                    placeholder="Type here" wire:model="name" />
                @error('name')
                    <span class="text-red-500 text-xs italic">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block mb-1">Slug of store</label>
                <input type="text"
                    class="appearance-none border border-gray-200 bg-gray-100 rounded-md py-2 px-3 hover:border-gray-400 focus:outline-none focus:border-gray-400 w-full @error('slug') input-error @enderror"
                    placeholder="Type here" wire:model="slug" />
                @error('slug')
                    <span class="text-red-500 text-xs italic">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block mb-1">Currency of store</label>
                <div>
                    <select
                        class="block appearance-none border border-gray-200 bg-gray-100 rounded-md py-2 px-3 hover:border-gray-400 focus:outline-none focus:border-gray-400 w-full @error('currency') input-error @enderror"
                        placeholder="Select one option" wire:model="currency">
                        <option value=>Select currency</option>
                        @foreach ($currencys as $currency)
                            <option value="{{ $currency->value }}">{{ $currency->name }}</option>
                        @endforeach
                    </select>
                    @error('currency')
                        <span class="text-red-500 text-xs italic">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <button type="submit"
                class="my-2 px-4 py-2 text-center inline-block text-white bg-blue-600 border border-transparent rounded-md hover:bg-blue-700">
                Update store </button>
        </form>

    </article>

</section> <!-- container -->
