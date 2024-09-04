<x-admin-dashboard activePage="users" page="Users">
    <div
        class="flex flex-col bg-white w-full 2xl:w-[7] lg:w-[90%] min-h-[600px] mb-4 mt-8 rounded-xl overflow-x-scroll overflow-y-scroll">
        <div class="flex flex-col md:flex-row">
            <h1 class="dm-sans-medium text-[22px] text-[#000000] mt-[43px] text-2xl ml-6 font-semibold w-[70%]">
                History
            </h1>

            <div class="flex flex-col md:flex-row">
                <button class="flex relative ml-5 lg:ml-0 mt-[40px]">
                    <input type="text" placeholder="Search"
                        class="bg-[#F9FBFF] text-[#22222280] dm-sans-regular text-[12px] rounded-lg w-[216px] h-[38px] pl-11 relative" />
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg" class="m-2 W-[24px] h-[24px] absolute">
                        <path
                            d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z"
                            stroke="#7E7E7E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M20.9999 21L16.6499 16.65" stroke="#7E7E7E" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>

                <div class="flex ml-5">
                    <select
                        class="dm-sans-regular text-[12px] text-[#7E7E7E] rounded-lg h-[38px] w-[154px] pl-[14px] mr-[50px] mt-[40px] bg-[#F9FBFF] hover:border-[#F9FBFF]">
                        <option>Sort by : Newest</option>
                        <option>Sort by : Oldest</option>
                        <option>Sort by : Recent</option>
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                            xmlns="http://www.w3.org/2000/svg" ,>
                            <path d="M4.5 6.75L9 11.25L13.5 6.75" stroke="#3D3C42" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </select>
                </div>
            </div>
        </div>

        <table class="min-w-full mt-8">
            <thead>
                <tr class="border-b border-gray-300">
                    <th class="px-8 py-5 text-left  text-[#22222280] dm-sans-medium text-[14px]">Name</th>
                    <th class="px-8 py-5 text-left  text-[#22222280] dm-sans-medium text-[14px]">Email</th>
                    <th class="px-8 py-5 text-left  text-[#22222280] dm-sans-medium text-[14px]">Joined On
                    </th>
                    <th class="px-8 py-5 text-left  text-[#22222280] dm-sans-medium text-[14px]">Action</th>
                </tr>
            </thead>


            <tbody>
                @foreach ($users as $user)
                    <tr class="border-b border-gray-300 text-[#222222] dm-sans-medium text-[14px]">
                        <td class="px-8 py-5 whitespace-nowrap">{{ $user->name }}</td>
                        <td class="px-8 py-5 whitespace-nowrap">{{ $user->email }}</td>
                        <td class="px-8 py-5 whitespace-nowrap">{{ date('d-m-Y', strtotime($user->created_at)) }}</td>

                        <td class="px-8 py-5 whitespace-nowrap">
                            <div class="flex flex-row space-x-2">
                                <span class="manage-btn text-blue-500 hover:text-blue-700 font-bold cursor-pointer mr-2"
                                    data-user-id="{{ $user->id }}">Manage</span>
                                <span class="edit-btn text-green-500 hover:text-green-700 font-bold cursor-pointer mr-2"
                                    data-user-id="{{ $user->id }}">Edit</span>
                                <span class="delete-btn text-red-500 hover:text-red-700 font-bold cursor-pointer mr-2"
                                    data-user-id="{{ $user->id }}">Delete</span>
                                <span class="suspend-btn text-yellow-500 hover:text-yellow-700 font-bold cursor-pointer"
                                    data-user-id="{{ $user->id }}">Suspend</span>
                            </div>
                        </td>
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
