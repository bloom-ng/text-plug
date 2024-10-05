<x-admin-dashboard activePage="users" page="Users">
    <div
        class="flex flex-col bg-white w-full 2xl:w-[7] lg:w-[90%] min-h-[600px] mb-4 mt-8 rounded-xl overflow-x-scroll overflow-y-scroll">
        <div class="flex flex-col md:flex-row">
            <h1 class="dm-sans-medium text-[22px] text-[#000000] mt-[43px] text-2xl ml-6 font-semibold w-[70%]">
                History
            </h1>

            <form action="/admin/users" method="GET" class="flex flex-col md:flex-row">
                <div class="flex relative ml-5 lg:ml-0 mt-[40px]">
                    <input type="text" name="search" placeholder="Search" value="{{ request('search') }}"
                        class="bg-[#F9FBFF] text-[#22222280] dm-sans-regular text-[12px] rounded-lg w-[216px] h-[38px] pl-11 relative" />
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg" class="m-2 W-[24px] h-[24px] absolute">
                        <path
                            d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z"
                            stroke="#7E7E7E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M20.9999 21L16.6499 16.65" stroke="#7E7E7E" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </div>

                <div class="flex ml-5">
                    <select name="sort" onchange="this.form.submit()"
                        class="dm-sans-regular text-[12px] text-[#7E7E7E] rounded-lg h-[38px] w-[154px] pl-[14px] mr-[50px] mt-[40px] bg-[#F9FBFF] hover:border-[#F9FBFF]">
                        <option value="newest">Sort by : Newest</option>
                        <option value="oldest">Sort by : Oldest</option>
                        <option value="recent">Sort by : Recent</option>
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                            xmlns="http://www.w3.org/2000/svg" ,>
                            <path d="M4.5 6.75L9 11.25L13.5 6.75" stroke="#3D3C42" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </select>
                </div>
            </form>
        </div>

        <table class="min-w-full mt-8">
            <thead>
                <tr class="border-b border-gray-300">
                    <th class="px-8 py-5 text-left  text-[#22222280] dm-sans-medium text-[14px]">Action</th>
                    <th class="px-8 py-5 text-left  text-[#22222280] dm-sans-medium text-[14px]">Name</th>
                    <th class="px-8 py-5 text-left  text-[#22222280] dm-sans-medium text-[14px]">Email</th>
                    <th class="px-8 py-5 text-left  text-[#22222280] dm-sans-medium text-[14px]">Balance</th>
                    <th class="px-8 py-5 text-left  text-[#22222280] dm-sans-medium text-[14px]">Joined On
                    </th>
                </tr>
            </thead>


            <tbody>
                @foreach ($users as $user)
                    <tr class="border-b border-gray-300 text-[#222222] dm-sans-medium text-[14px]">
                        <td x-data="{ open: false }" class="relative inline-block text-left px-8 py-5">
                            <div>
                                <button @click="open = !open" type="button"
                                    class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50"
                                    id="menu-button" aria-expanded="true" aria-haspopup="true">
                                    Manage
                                    <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true" data-slot="icon">
                                        <path fill-rule="evenodd"
                                            d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>

                            <div x-show="open"
                                class="absolute right-0 z-10 mt-2 w-fit origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                                role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                <div class="p-4 flex flex-col gap-2" role="none">
                                    <a href="/admin/edit-users/{{ $user->id }}"
                                        class="text-gray-500 hover:text-gray-700 font-bold mr-2">Edit</a>
                                    <a href="/admin/credit-users/{{ $user->id }}"
                                        class="text-gray-500 hover:text-gray-700 font-bold mr-2">Credit</a>
                                    <a href="/admin/debit-users/{{ $user->id }}"
                                        class="text-gray-500 hover:text-gray-700 font-bold mr-2">Debit</a>
                                    <a href="/admin/user-orders/{{ $user->id }}"
                                        class="text-gray-500 hover:text-gray-700 font-bold mr-2">Orders</a>
                                    <a href="/admin/user-transactions/{{ $user->id }}"
                                        class="text-gray-500 hover:text-gray-700 font-bold mr-2">Transactions</a>
                                    <form action="/admin/delete-users/{{ $user->id }}" method="POST"
                                        class="inline">
                                        @csrf
                                        <button type="submit"
                                            class="text-red-500 hover:text-red-700 font-bold mr-2">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </td>
                        <td class="px-8 py-5 whitespace-nowrap">{{ $user->name }}</td>
                        <td class="px-8 py-5 whitespace-nowrap">{{ $user->email }}</td>
                        <td class="px-8 py-5 whitespace-nowrap">{{ $user->walletBalance() }}</td>
                        <td class="px-8 py-5 whitespace-nowrap">{{ date('d-m-Y', strtotime($user->created_at)) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="flex flex-row items-center justify-between mt-5 mb-5">
            <div class="ml-6">
                {{ $users->links() }}
            </div>
        </div>
    </div>
</x-admin-dashboard>
