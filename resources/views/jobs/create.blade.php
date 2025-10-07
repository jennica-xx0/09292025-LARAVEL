<x-layout>
    <x-slot:heading>
        Create Job
    </x-slot:heading>

    <form method="POST" action="/jobs" class="space-y-12">
        @csrf
        <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base/7 font-semibold text-gray-900">Create a New Job</h2>
            <p class="mt-1 text-sm/6 text-gray-600">We just need a handful of details from you.</p>

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <!-- Title -->
                <x-form-field>
                    <x-form-label for="title">Title</x-form-label>
                    <div class="mt-2">
                        <x-form-input name="title" id="title" placeholder="CEO" required />
                        <x-form-error name="title" />
                    </div>
                </x-form-field>

                <x-form-field>
                    <x-form-label for="salary">Salary</x-form-label>
                    <div class="mt-2">
                        <x-form-input name="salary" id="title" placeholder="$50,000 USD" required />
                        <x-form-error name="salary" />
                    </div>
                </x-form-field>
            </div>
        </div>

        <!-- Buttons -->
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a></button>
            <x-form-button> Save </x-form-button>
          
        </div>
        </div>
    </form>
</x-layout>

<!--     <div class="sm:col-span-4">
                    <label for="salary" class="block text-sm/6 font-medium text-gray-900">Salary</label>
                    <div class="mt-2">
                        <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                            <input
                                id="salary"
                                type="text"
                                name="salary"
                                placeholder="$50,000 Per Year"
                                required
                                class="block min-w-0 grow bg-white py-1.5 pr-3 pl-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" />
                        </div>
                        @error('salary')
                        <p class="text-xs text-red-500 font-semibold mt-2"> {{ $message }}</p>
                        @enderror
                    </div> -->