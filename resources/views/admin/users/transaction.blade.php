<x-admin-dashboard activePage="users" page="Transactions">
    <div class="flex flex-col bg-white w-full lg:w-[80%] min-h-[600px] mb-4 mt-8 rounded-xl overflow-x-scroll">
        <div class="flex flex-col md:flex-row">
            <h1 class="dm-sans-medium text-[22px] text-[#000000] mt-[43px] text-2xl ml-6 font-semibold w-[70%]">
                {{ $user->name }}'s Transactions
            </h1>

            {{-- <form action="/admin/wallet" method="GET" class="flex flex-col md:flex-row">
                <div class="flex relative ml-5 lg:ml-0 mt-[40px]">
                    <input type="text" name="transaction_search" placeholder="Search"
                        value="{{ request('transaction_search') }}"
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
            </form> --}}
        </div>

        <table class="min-w-full mt-8">
            <thead>
                <tr class="border-b border-gray-300">
                    {{-- <th class="px-8 py-5 pl-6 text-left text-[#22222280] dm-sans-medium text-[14px]">

                    </th> --}}
                    <th class="px-8 py-5 text-left text-[#22222280] dm-sans-medium text-[14px]">
                        Amount
                    </th>
                    <th class="px-8 py-5 text-left text-[#22222280] dm-sans-medium text-[14px]">
                        Email
                    </th>
                    <th class="px-8 py-5 text-left text-[#22222280] dm-sans-medium text-[14px]">
                        Status
                    </th>
                    <th class="px-8 py-5 text-left text-[#22222280] dm-sans-medium text-[14px]">
                        Order Date
                    </th>
                </tr>
            </thead>

            <tbody>
                @foreach ($transactions as $transaction)
                    <tr class="border-b border-gray-300 text-[#222222] dm-sans-medium text-[14px]">
                        {{-- <td class="px-8 py-5 whitespace-nowrap text-green-500">
                            <a href="/user/payments/re-verify/{{ $transaction->id }}">Re-Verify</a>
                        </td> --}}
                        <td class="px-8 py-5 whitespace-nowrap">
                            {{ number_format($transaction->amount, 2) }}
                        </td>
                        <td class="px-8 py-5 whitespace-nowrap">{{ $transaction->user->email }}</td>
                        <td class="px-8 py-5 whitespace-nowrap">
                            {{ $transaction->status }}
                            {{-- {{ $transaction->status == 'pending' ? 'Pending' : 'Failed' }} --}}
                        </td>
                        <td class="px-8 py-5 whitespace-nowrap">
                            {{ \Carbon\Carbon::parse($transaction->created_at)->format('jS F, Y') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="flex flex-row items-center justify-between mt-5 mb-5">
            <div class="ml-6">
                {{ $transactions->links() }}
            </div>
        </div>
    </div>
</x-admin-dashboard>
