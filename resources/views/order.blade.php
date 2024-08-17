<x-user-layout page="Orders" activePage="orders">
    <div class="flex flex-col bg-white w-[1000px] min-h-[850px] mb-4 rounded-xl">
        <div class="flex flex-row">
            <h1 class="dm-sans-medium text-[22px] text-[#000000] mt-[43px] text-2xl ml-6 font-semibold w-[70%]">
                History</h1>

            <div class="flex flex-row">
                <button class="flex relative mt-[40px]">
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
                            xmlns="http://www.w3.org/2000/svg",>
                            <path d="M4.5 6.75L9 11.25L13.5 6.75" stroke="#3D3C42" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </select>
                </div>
            </div>
        </div>

        <table class="min-w-full mt-8 ">

            <thead>
                <tr class="border-b border-gray-300">
                    <th class="px-8 py-5 text-left  text-[#22222280] dm-sans-medium text-[14px]">Order ID</th>
                    <th class="px-8 py-5 text-left  text-[#22222280] dm-sans-medium text-[14px]">Service</th>
                    <th class="px-8 py-5 text-left  text-[#22222280] dm-sans-medium text-[14px]">Phone Number
                    </th>
                    <th class="px-8 py-5 text-left  text-[#22222280] dm-sans-medium text-[14px]">Order Date
                    </th>
                    <th class="px-8 py-5 text-left  text-[#22222280] dm-sans-medium text-[14px]">Status</th>
                </tr>
            </thead>


            <tbody>
                <tr class="border-b border-gray-300 text-[#222222] dm-sans-medium text-[14px]">
                    <td class="px-8 py-5 whitespace-nowrap">115453</td>
                    <td class="px-8 py-5 whitespace-nowrap">Discord</td>
                    <td class="px-8 py-5 whitespace-nowrap">18156166321</td>
                    <td class="px-8 py-5 whitespace-nowrap">26-04-2024</td>
                    <td class="px-8 py-5">
                        <div
                            class="bg-[#16C09861] text-[#008767] w-[90px] h-[30px] flex items-center justify-center border border-[#00B087] rounded-lg">
                            Active
                        </div>
                    </td>
                    <td class="px-8 py-5 whitespace-nowrap">
                        <div class="flex flex-row space-x-2">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg" class="mt-1">
                                <path
                                    d="M2.45625 11.472C1.81875 10.644 1.5 10.2293 1.5 9C1.5 7.77 1.81875 7.35675 2.45625 6.528C3.729 4.875 5.8635 3 9 3C12.1365 3 14.271 4.875 15.5438 6.528C16.1813 7.3575 16.5 7.77075 16.5 9C16.5 10.23 16.1813 10.6432 15.5438 11.472C14.271 13.125 12.1365 15 9 15C5.8635 15 3.729 13.125 2.45625 11.472Z"
                                    stroke="#222222" stroke-width="1.5" />
                                <path
                                    d="M11.25 9C11.25 9.59674 11.0129 10.169 10.591 10.591C10.169 11.0129 9.59674 11.25 9 11.25C8.40326 11.25 7.83097 11.0129 7.40901 10.591C6.98705 10.169 6.75 9.59674 6.75 9C6.75 8.40326 6.98705 7.83097 7.40901 7.40901C7.83097 6.98705 8.40326 6.75 9 6.75C9.59674 6.75 10.169 6.98705 10.591 7.40901C11.0129 7.83097 11.25 8.40326 11.25 9Z"
                                    stroke="#222222" stroke-width="1.5" />
                            </svg>
                            <button id="View">View</button>
                        </div>
                    </td>
                </tr>


                <tr class="border-b border-gray-300 text-[#222222] dm-sans-medium text-[14px]">
                    <td class="px-8 py-5 whitespace-nowrap">115453</td>
                    <td class="px-8 py-5 whitespace-nowrap">Q1</td>
                    <td class="px-8 py-5 whitespace-nowrap">18156166321</td>
                    <td class="px-8 py-5 whitespace-nowrap">26-04-2024</td>
                    <td class="px-8 py-5">
                        <div
                            class="bg-[#16C09861] text-[#008767] w-[90px] h-[30px] flex items-center justify-center border border-[#00B087] rounded-lg">
                            Active
                        </div>
                    </td>
                    <td class="px-8 py-5 whitespace-nowrap">
                        <div class="flex flex-row space-x-2">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg" class="mt-1">
                                <path
                                    d="M2.45625 11.472C1.81875 10.644 1.5 10.2293 1.5 9C1.5 7.77 1.81875 7.35675 2.45625 6.528C3.729 4.875 5.8635 3 9 3C12.1365 3 14.271 4.875 15.5438 6.528C16.1813 7.3575 16.5 7.77075 16.5 9C16.5 10.23 16.1813 10.6432 15.5438 11.472C14.271 13.125 12.1365 15 9 15C5.8635 15 3.729 13.125 2.45625 11.472Z"
                                    stroke="#222222" stroke-width="1.5" />
                                <path
                                    d="M11.25 9C11.25 9.59674 11.0129 10.169 10.591 10.591C10.169 11.0129 9.59674 11.25 9 11.25C8.40326 11.25 7.83097 11.0129 7.40901 10.591C6.98705 10.169 6.75 9.59674 6.75 9C6.75 8.40326 6.98705 7.83097 7.40901 7.40901C7.83097 6.98705 8.40326 6.75 9 6.75C9.59674 6.75 10.169 6.98705 10.591 7.40901C11.0129 7.83097 11.25 8.40326 11.25 9Z"
                                    stroke="#222222" stroke-width="1.5" />
                            </svg>
                            <button>View</button>
                        </div>
                    </td>
                </tr>


                <tr class="border-b border-gray-300 text-[#222222] dm-sans-medium text-[14px]">
                    <td class="px-8 py-5 whitespace-nowrap">115453</td>
                    <td class="px-8 py-5 whitespace-nowrap">Q1</td>
                    <td class="px-8 py-5 whitespace-nowrap">18156166321</td>
                    <td class="px-8 py-5 whitespace-nowrap">26-04-2024</td>
                    <td class="px-8 py-5">
                        <div
                            class="bg-[#16C09861] text-[#008767] w-[90px] h-[30px] flex items-center justify-center border border-[#00B087] rounded-lg">
                            Active
                        </div>
                    </td>
                    <td class="px-8 py-5 whitespace-nowrap">
                        <div class="flex flex-row space-x-2">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg" class="mt-1">
                                <path
                                    d="M2.45625 11.472C1.81875 10.644 1.5 10.2293 1.5 9C1.5 7.77 1.81875 7.35675 2.45625 6.528C3.729 4.875 5.8635 3 9 3C12.1365 3 14.271 4.875 15.5438 6.528C16.1813 7.3575 16.5 7.77075 16.5 9C16.5 10.23 16.1813 10.6432 15.5438 11.472C14.271 13.125 12.1365 15 9 15C5.8635 15 3.729 13.125 2.45625 11.472Z"
                                    stroke="#222222" stroke-width="1.5" />
                                <path
                                    d="M11.25 9C11.25 9.59674 11.0129 10.169 10.591 10.591C10.169 11.0129 9.59674 11.25 9 11.25C8.40326 11.25 7.83097 11.0129 7.40901 10.591C6.98705 10.169 6.75 9.59674 6.75 9C6.75 8.40326 6.98705 7.83097 7.40901 7.40901C7.83097 6.98705 8.40326 6.75 9 6.75C9.59674 6.75 10.169 6.98705 10.591 7.40901C11.0129 7.83097 11.25 8.40326 11.25 9Z"
                                    stroke="#222222" stroke-width="1.5" />
                            </svg>
                            <button>View</button>
                        </div>
                    </td>
                </tr>


                <tr class="border-b border-gray-300 text-[#222222] dm-sans-medium text-[14px]">
                    <td class="px-8 py-5 whitespace-nowrap">115453</td>
                    <td class="px-8 py-5 whitespace-nowrap">Q1</td>
                    <td class="px-8 py-5 whitespace-nowrap">18156166321</td>
                    <td class="px-8 py-5 whitespace-nowrap">26-04-2024</td>
                    <td class="px-8 py-5">
                        <div
                            class="bg-[#16C09861] text-[#008767] w-[90px] h-[30px] flex items-center justify-center border border-[#00B087] rounded-lg">
                            Active
                        </div>
                    </td>
                    <td class="px-8 py-5 whitespace-nowrap">
                        <div class="flex flex-row space-x-2">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg" class="mt-1">
                                <path
                                    d="M2.45625 11.472C1.81875 10.644 1.5 10.2293 1.5 9C1.5 7.77 1.81875 7.35675 2.45625 6.528C3.729 4.875 5.8635 3 9 3C12.1365 3 14.271 4.875 15.5438 6.528C16.1813 7.3575 16.5 7.77075 16.5 9C16.5 10.23 16.1813 10.6432 15.5438 11.472C14.271 13.125 12.1365 15 9 15C5.8635 15 3.729 13.125 2.45625 11.472Z"
                                    stroke="#222222" stroke-width="1.5" />
                                <path
                                    d="M11.25 9C11.25 9.59674 11.0129 10.169 10.591 10.591C10.169 11.0129 9.59674 11.25 9 11.25C8.40326 11.25 7.83097 11.0129 7.40901 10.591C6.98705 10.169 6.75 9.59674 6.75 9C6.75 8.40326 6.98705 7.83097 7.40901 7.40901C7.83097 6.98705 8.40326 6.75 9 6.75C9.59674 6.75 10.169 6.98705 10.591 7.40901C11.0129 7.83097 11.25 8.40326 11.25 9Z"
                                    stroke="#222222" stroke-width="1.5" />
                            </svg>
                            <button>View</button>
                        </div>
                    </td>
                </tr>


                <tr class="border-b border-gray-300 text-[#222222] dm-sans-medium text-[14px]">
                    <td class="px-8 py-5 whitespace-nowrap">115453</td>
                    <td class="px-8 py-5 whitespace-nowrap">Q1</td>
                    <td class="px-8 py-5 whitespace-nowrap">18156166321</td>
                    <td class="px-8 py-5 whitespace-nowrap">26-04-2024</td>
                    <td class="px-8 py-5">
                        <div
                            class="bg-[#16C09861] text-[#008767] w-[90px] h-[30px] flex items-center justify-center border border-[#00B087] rounded-lg">
                            Active
                        </div>
                    </td>
                    <td class="px-8 py-5 whitespace-nowrap">
                        <div class="flex flex-row space-x-2">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg" class="mt-1">
                                <path
                                    d="M2.45625 11.472C1.81875 10.644 1.5 10.2293 1.5 9C1.5 7.77 1.81875 7.35675 2.45625 6.528C3.729 4.875 5.8635 3 9 3C12.1365 3 14.271 4.875 15.5438 6.528C16.1813 7.3575 16.5 7.77075 16.5 9C16.5 10.23 16.1813 10.6432 15.5438 11.472C14.271 13.125 12.1365 15 9 15C5.8635 15 3.729 13.125 2.45625 11.472Z"
                                    stroke="#222222" stroke-width="1.5" />
                                <path
                                    d="M11.25 9C11.25 9.59674 11.0129 10.169 10.591 10.591C10.169 11.0129 9.59674 11.25 9 11.25C8.40326 11.25 7.83097 11.0129 7.40901 10.591C6.98705 10.169 6.75 9.59674 6.75 9C6.75 8.40326 6.98705 7.83097 7.40901 7.40901C7.83097 6.98705 8.40326 6.75 9 6.75C9.59674 6.75 10.169 6.98705 10.591 7.40901C11.0129 7.83097 11.25 8.40326 11.25 9Z"
                                    stroke="#222222" stroke-width="1.5" />
                            </svg>
                            <button>View</button>
                        </div>
                    </td>
                </tr>


                <tr class="border-b border-gray-300 text-[#222222] dm-sans-medium text-[14px]">
                    <td class="px-8 py-5 whitespace-nowrap">115453</td>
                    <td class="px-8 py-5 whitespace-nowrap">Q1</td>
                    <td class="px-8 py-5 whitespace-nowrap">18156166321</td>
                    <td class="px-8 py-5 whitespace-nowrap">26-04-2024</td>
                    <td class="px-8 py-5">
                        <div
                            class="bg-[#16C09861] text-[#008767] w-[90px] h-[30px] flex items-center justify-center border border-[#00B087] rounded-lg">
                            Active
                        </div>
                    </td>
                    <td class="px-8 py-5 whitespace-nowrap">
                        <div class="flex flex-row space-x-2">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg" class="mt-1">
                                <path
                                    d="M2.45625 11.472C1.81875 10.644 1.5 10.2293 1.5 9C1.5 7.77 1.81875 7.35675 2.45625 6.528C3.729 4.875 5.8635 3 9 3C12.1365 3 14.271 4.875 15.5438 6.528C16.1813 7.3575 16.5 7.77075 16.5 9C16.5 10.23 16.1813 10.6432 15.5438 11.472C14.271 13.125 12.1365 15 9 15C5.8635 15 3.729 13.125 2.45625 11.472Z"
                                    stroke="#222222" stroke-width="1.5" />
                                <path
                                    d="M11.25 9C11.25 9.59674 11.0129 10.169 10.591 10.591C10.169 11.0129 9.59674 11.25 9 11.25C8.40326 11.25 7.83097 11.0129 7.40901 10.591C6.98705 10.169 6.75 9.59674 6.75 9C6.75 8.40326 6.98705 7.83097 7.40901 7.40901C7.83097 6.98705 8.40326 6.75 9 6.75C9.59674 6.75 10.169 6.98705 10.591 7.40901C11.0129 7.83097 11.25 8.40326 11.25 9Z"
                                    stroke="#222222" stroke-width="1.5" />
                            </svg>
                            <button>View</button>
                        </div>
                    </td>
                </tr>


                <tr class="border-b border-gray-300 text-[#222222] dm-sans-medium text-[14px]">
                    <td class="px-8 py-5 whitespace-nowrap">115453</td>
                    <td class="px-8 py-5 whitespace-nowrap">Q1</td>
                    <td class="px-8 py-5 whitespace-nowrap">18156166321</td>
                    <td class="px-8 py-5 whitespace-nowrap">26-04-2024</td>
                    <td class="px-8 py-5">
                        <div
                            class="bg-[#16C09861] text-[#008767] w-[90px] h-[30px] flex items-center justify-center border border-[#00B087] rounded-lg">
                            Active
                        </div>
                    </td>
                    <td class="px-8 py-5 whitespace-nowrap">
                        <div class="flex flex-row space-x-2">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg" class="mt-1">
                                <path
                                    d="M2.45625 11.472C1.81875 10.644 1.5 10.2293 1.5 9C1.5 7.77 1.81875 7.35675 2.45625 6.528C3.729 4.875 5.8635 3 9 3C12.1365 3 14.271 4.875 15.5438 6.528C16.1813 7.3575 16.5 7.77075 16.5 9C16.5 10.23 16.1813 10.6432 15.5438 11.472C14.271 13.125 12.1365 15 9 15C5.8635 15 3.729 13.125 2.45625 11.472Z"
                                    stroke="#222222" stroke-width="1.5" />
                                <path
                                    d="M11.25 9C11.25 9.59674 11.0129 10.169 10.591 10.591C10.169 11.0129 9.59674 11.25 9 11.25C8.40326 11.25 7.83097 11.0129 7.40901 10.591C6.98705 10.169 6.75 9.59674 6.75 9C6.75 8.40326 6.98705 7.83097 7.40901 7.40901C7.83097 6.98705 8.40326 6.75 9 6.75C9.59674 6.75 10.169 6.98705 10.591 7.40901C11.0129 7.83097 11.25 8.40326 11.25 9Z"
                                    stroke="#222222" stroke-width="1.5" />
                            </svg>
                            <button>View</button>
                        </div>
                    </td>
                </tr>


                <tr class="border-b border-gray-300 text-[#222222] dm-sans-medium text-[14px]">
                    <td class="px-8 py-5 whitespace-nowrap">115453</td>
                    <td class="px-8 py-5 whitespace-nowrap">Q1</td>
                    <td class="px-8 py-5 whitespace-nowrap">18156166321</td>
                    <td class="px-8 py-5 whitespace-nowrap">26-04-2024</td>
                    <td class="px-8 py-5">
                        <div
                            class="bg-[#16C09861] text-[#008767] w-[90px] h-[30px] flex items-center justify-center border border-[#00B087] rounded-lg">
                            Active
                        </div>
                    </td>
                    <td class="px-8 py-5 whitespace-nowrap">
                        <div class="flex flex-row space-x-2">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg" class="mt-1">
                                <path
                                    d="M2.45625 11.472C1.81875 10.644 1.5 10.2293 1.5 9C1.5 7.77 1.81875 7.35675 2.45625 6.528C3.729 4.875 5.8635 3 9 3C12.1365 3 14.271 4.875 15.5438 6.528C16.1813 7.3575 16.5 7.77075 16.5 9C16.5 10.23 16.1813 10.6432 15.5438 11.472C14.271 13.125 12.1365 15 9 15C5.8635 15 3.729 13.125 2.45625 11.472Z"
                                    stroke="#222222" stroke-width="1.5" />
                                <path
                                    d="M11.25 9C11.25 9.59674 11.0129 10.169 10.591 10.591C10.169 11.0129 9.59674 11.25 9 11.25C8.40326 11.25 7.83097 11.0129 7.40901 10.591C6.98705 10.169 6.75 9.59674 6.75 9C6.75 8.40326 6.98705 7.83097 7.40901 7.40901C7.83097 6.98705 8.40326 6.75 9 6.75C9.59674 6.75 10.169 6.98705 10.591 7.40901C11.0129 7.83097 11.25 8.40326 11.25 9Z"
                                    stroke="#222222" stroke-width="1.5" />
                            </svg>
                            <button>View</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="flex flex-row justify-between">
            <div class="flex flex-col">
                <p class="mt-8 pl-8 text-[#22222280] dm-sans-medium text-[14px]">Showing data 1 to 8 of 78
                    entries</p>
                <div class="pagination ml-8">
                    <a href="#" class="bg-[#EEEEEE] border border-[#f5f5f5] p-1 text-[14px]">
                        << /a> <!-- Left arrow -->
                            <a href="#"
                                class="active bg-[#DF5C0C] border p-1 text-white border-[#f5f5f5] text-[14px]"">1</a>
                            <!-- Active page -->
                            <a href="#" class="bg-[#EEEEEE] p-1 border border-[#f5f5f5] text-[14px]">2</a>
                            <a href="#" class="bg-[#EEEEEE] p-1 border border-[#f5f5f5] text-[14px]">3</a>
                            <a href="#" class="bg-[#EEEEEE] p-1 border border-[#f5f5f5] text-[14px]">4</a>
                            <span>...</span> <!-- Ellipsis for more pages -->
                            <a href="#" class="bg-[#EEEEEE] p-1 border border-[#f5f5f5] text-[14px]">10</a>
                            <!-- Last page number -->
                            <a href="#" class="bg-[#EEEEEE] p-1 border border-[#f5f5f5] text-[14px]">></a>
                            <!-- Right arrow -->
                </div>
            </div>
            <div class="flex justify-end items-end mb-4 mt-3">
                <button id="NewOrder"
                    class="lg:mt-5 mt-3 w-[180px] h-[49px] bg-[#DF5C0C] text-white lg:py-2 rounded-lg dm-sans-extrabold text[12px] mr-6">
                    New order
                </button>
            </div>
        </div>
    </div>
</x-user-layout>
