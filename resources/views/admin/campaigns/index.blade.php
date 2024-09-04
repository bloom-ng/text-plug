<x-admin-dashboard page="campaigns">
    @if (session('success'))
        <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
        <script>
            Toastify({
                text: "{{ session('success') }}",
                duration: 3000,
                close: true,
                gravity: "top",
                position: "right",
                backgroundColor: "green",
                stopOnFocus: true,
                ariaLive: "polite",
                onClick: function() {}
            }).showToast();
        </script>
    @endif

    @if (session('error'))
        <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
        <script>
            Toastify({
                text: "{{ session('error') }}",
                duration: 3000,
                close: true,
                gravity: "top",
                position: "right",
                backgroundColor: "red",
                stopOnFocus: true,
                ariaLive: "polite",
                onClick: function() {}
            }).showToast();
        </script>
    @endif
    <div class="w-full overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow py-6 px-6 lg:px-24">
            <div class="flex flex-wrap items-start lg:items-center justify-between">
                <div class="flex flex-col">
                    <h1 class="text-3xl text-black pb-1 lg:pb-6 font-semibold montserrat-bold">Campaigns</h1>
                    <p class="montserrat-thin font-thin text-[24px]">Manage campaigns</p>
                </div>
            </div>

            <!-- <form action="/admin/campaigns" method="GET"
                class="flex items-center justify-between flex-wrap lg:flex-nowrap my-8 gap-4 lg:gap-0">

                <div class="flex items-center justify-center gap-2">
                    <p>Show</p>
                    <select class="border border-gray-300 rounded-md p-2" name="limit" id="limit">
                        {{-- <option value="5   ">5</option> --}}
                        <option value="10">10</option>
                        <option value="20">20</option>
                        <option value="30">30</option>
                        <option value="40">40</option>
                    </select>
                    <p>Entries</p>
                </div>

                <div class="relative flex items-center justify-center w-fit">
                    <input type="text" name="search"
                        class="border border-black rounded-full px-6 py-2 lg:w-[521px]">
                    <button type="submit" class="absolute right-2">
                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect width="15" height="15" rx="7.5" fill="url(#pattern0_563_596)" />
                            <defs>
                                <pattern id="pattern0_563_596" patternContentUnits="objectBoundingBox" width="1"
                                    height="1">
                                    <use xlink:href="#image0_563_596" transform="scale(0.0104167)" />
                                </pattern>
                                <image id="image0_563_596" width="96" height="96"
                                    xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAACXBIWXMAAAsTAAALEwEAmpwYAAAEpUlEQVR4nO2c24tXVRTHPzb9pszB0oJe0vES0o0eKlCYfAlRUtPEx3KCpiIiBLtMvVT6J/hWWpCIr/WgYA9ec5R0lCLRJ8V6jRonLzi/HDyxaAkyiXuf4+93ztrnrA9sGH6Xc9be6/zWXvu71x5wHMdxHMdxHMdxHMdxnHLpBZYCw8DXwAhwHhgD2trG9LUR/Yx89kX9rlOAPmAQ+AG4CmQF2xVgr15LrukEeBzYpgOXdbhd1msvdC/8n35gFzDZhYHPprTrwE5gjjsCWsAnXXris4jwNKw2NJK5wLEKBj6b0k42MSy9Alw0MPiZNsmiVtMQ3tA4nBlrk8A71JyPgBsFBucasA/4DFgLPAnM0vjd0r/ltVf1M/v1O3nvc0NtrCVvFxj8n4A3gZkF7vcgMAScKOAE+V7tYn6eFPM48FIH778MGM0ZjlZRE+bnmHBlsfQucE8X7JBrvpcj5R3T9UnStHKEgNPAEyXY9BRwJkcITHqd8GlkRw9rzC6Lh4AfI21LdlLuj/y5y+BPr8C+6cCRyLD4GAmyKzLslPnkT0XS17MRdu4gMRZGLLauaO5eNU9HSN6TqtQmw7aIp0qyHSu8H2HvlyRCX0TsP96lVLMoPcCpgM2XgBkkovWEnqZOLrI6xYoIu18jAfZG5NZWGQ3Yvgfj9EaEH9F2LOtVWSAlNb0wWxrowLWCwlqZC7SJQB8GMMzHAeNFUrbOwUAfPsQw3wSMF63eOl8E+rAdwxwNGL8G+6wL9EE0JLNcCBhfhtrZCbX0Tn2QCjyz/BUwfjb2eSTQhz8wTDtgfAq1mvcF+iBZklma4IA2hmlCCBoj4UnYgvwcI0/fqQ+/YZiRgPFS05N6GnoYw9RhIbYl5d2xkBQhFWvWORTowyYSF+Oq3AMOMTsikxtIXY4eSlyOvp/EN2SkUMsi04CfA7Z/TwIMBjqRaa2mNV6OsHsDCTBDf6qhUymyEW6FHuDXgM3jwAPUqCxFCmWtsCnC3q3UsDBLpN+qeTbiMEdbz7Qlxc6Ip+qMlgdWqfuci7DzKxJkbmRx7pGKinP7Inbwbsb+R0mU4YgO3nTCrJKf/KORtm0kYVpahhjT0bOqRJYR889F2nTAWAllIeaphh7T4ataKNvTBTvuBT7IeXpyPTVhdc5DeqeA5R1c4a7Uswix9781/i+mJrxV4JjqqH5PKtaKCGty8PqXAgNfWycUPag9oRVrn+uGicwVD6v416uD/Yy+t1kl5ZCq2VgnDBr9VwVZoP0NLKEmrMoxMWeGWq1+Cf16VqDqQT2g2c54E53Q0nnhckVP88Zb8vzFTXUCeg53R0lzQ1u1ndvJC412grBATyNe6sLAX1RJOaRqNt4J6MbH68DuuwxPIgZ+pztZeQQ/d8KUeWJA54rtWp8vJeJ/aji5rhnV7/ret7rBMnCXG+juBAM8nyNdHq/TOsES7gQDuBOMOCFUfu/hqMs8506oHneCAdwJBsizTpBV+KKqDW66E3ZXbWzTw9GEsXrYxjnhH3dAteFI9rSdEpxwu3/TLLVIL3T75s5/LNIJd0KVWnnyffArQLY6fdJ1HMdxHMdxHMdxHIdE+Bdhocj2K57vWgAAAABJRU5ErkJggg==" />
                            </defs>
                        </svg>

                    </button>
                </div>

                <div><button type="button" class="bg-[#FFEEE7] rounded-full px-8 py-2">Filter By</button></div>
            </form> -->

            <div class="flex justify-center lg:justify-end w-full my-8">
                <hr class="border-[#F48857] w-[100%]">
            </div>

            <table class="w-full self-start mt-12">
                <thead>
                    <tr class="montserrat-bold font-semibold text-[15px]">
                        <th scope="col" class="text-left">Name</th>
                        <th scope="col" class="text-left">Title</th>
                        <th scope="col" class="text-left">Campaign Type</th>
                        <th scope="col" class="text-left">ID</th>
                        <th scope="col" class="text-left">Cost</th>
                        <th scope="col" class="text-left">Status</th>
                    </tr>
                </thead>
                <tbody class="pt-12">
                    @foreach ($campaigns as $campaign)
                        <tr>
                            <td class="whitespace-wrap text-left">{{ $campaign->user->name }}</td>
                            <td class="whitespace-wrap text-left">{{ $campaign->title }}</td>
                            <td class="whitespace-wrap text-left">
                                @switch($campaign->type)
                                    @case('custom_task')
                                        Custom Task
                                    @break

                                    @case('whatsapp_add_up')
                                        Whatsapp Add Up
                                    @break

                                    @case('whatsapp_status_post')
                                        Whatsapp Add Up
                                    @break

                                    @default
                                        {{ $campaign->type }}
                                @endswitch
                            </td>
                            <td class="whitespace-wrap text-left">{{ $campaign->id }}</td>
                            <td class="whitespace-wrap text-left">{{ $campaign->cost }}</td>
                            <td
                                class="whitespace-wrap text-left font-bold {{ $campaign->status == 'pending' ? 'text-red-700' : ($campaign->status == 'active' ? 'text-green-500' : 'text-[#FFEEE7]') }}">
                                @switch($campaign->status)
                                    @case('pending')
                                        Awaiting Payment
                                    @break

                                    @case('active')
                                        Active
                                    @break

                                    @case('completed')
                                        Completed
                                    @break

                                    @default
                                        {{ $campaign->status }}
                                @endswitch
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-8">
                {{ $campaigns->links() }}
            </div>

        </main>
    </div>
</x-admin-dashboard>
