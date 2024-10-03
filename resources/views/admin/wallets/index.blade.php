<x-admin-dashboard activePage="wallet" page="Deposits">
    <div class="w-full flex lg:flex-row flex-col-reverse gap-10 xl:gap-14">
        <div class="flex bg-white w-full lg:w-[80%] lg:h-[290px] h-fit shadow-lg rounded-xl px-8 pb-8">
            <div class="w-full flex flex-col leading-tight">
                <h1 class="dm-sans-medium text-[#222222] lg:text-2xl text-[28px] font-semibold mt-4">
                    Overview
                </h1>
                <p class="dm-sans-medium lg:text-[12px] text-[14px] text-[#22222299]">
                    Your Account Summary
                </p>

                <div class="w-full gap-10 lg:gap-6 flex lg:flex-row flex-col justify-center">
                    <div class="bg-[#FFE2E5] w-full h-[138px] shadow-lg mt-7 rounded-xl">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                            xmlns="http://www.w3.org/2000/svg" class="ml-4 mt-4">
                            <circle cx="15" cy="15" r="15" fill="#FA5A7D" />
                            <path
                                d="M10.5 21C9.675 21 8.96875 20.7063 8.38125 20.1188C7.79375 19.5313 7.5 18.825 7.5 18V12C7.5 11.175 7.79375 10.4688 8.38125 9.88125C8.96875 9.29375 9.675 9 10.5 9H19.5C20.325 9 21.0313 9.29375 21.6188 9.88125C22.2063 10.4688 22.5 11.175 22.5 12V18C22.5 18.825 22.2063 19.5313 21.6188 20.1188C21.0313 20.7063 20.325 21 19.5 21H10.5ZM10.5 12H19.5C19.775 12 20.0375 12.0312 20.2875 12.0938C20.5375 12.1562 20.775 12.2562 21 12.3937V12C21 11.5875 20.8533 11.2345 20.5597 10.941C20.2662 10.6475 19.913 10.5005 19.5 10.5H10.5C10.0875 10.5 9.7345 10.647 9.441 10.941C9.1475 11.235 9.0005 11.588 9 12V12.3937C9.225 12.2562 9.4625 12.1562 9.7125 12.0938C9.9625 12.0312 10.225 12 10.5 12ZM9.1125 14.4375L17.4562 16.4625C17.5687 16.4875 17.6813 16.4875 17.7938 16.4625C17.9062 16.4375 18.0125 16.3875 18.1125 16.3125L20.7188 14.1375C20.5813 13.95 20.4062 13.797 20.1937 13.6785C19.9812 13.56 19.75 13.5005 19.5 13.5H10.5C10.175 13.5 9.89075 13.5845 9.64725 13.7535C9.40375 13.9225 9.2255 14.1505 9.1125 14.4375Z"
                                fill="white" />
                        </svg>
                        <h1 class="dm-sans-medium text-[18px] text-[#222222] text-2xl font-semibold mt-2 ml-4">
                            N{{ $balance }}
                        </h1>
                        <p class="ml-4 dm-sans-medium text-[12px] text-[#22222299]">
                            Total Deposit
                        </p>
                    </div>

                    <div class="bg-[#DCFCE7] w-full h-[138px] shadow-lg mt-7 rounded-xl">
                        <svg width="31" height="30" viewBox="0 0 31 30" fill="none"
                            xmlns="http://www.w3.org/2000/svg" class="ml-4 mt-4">
                            <circle cx="15.5" cy="15" r="15" fill="#3CD856" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M15.0144 8.25C13.3205 8.25 11.7774 8.8095 10.8643 9.26663C10.7818 9.30788 10.7049 9.34837 10.6333 9.38737C10.4915 9.46463 10.3708 9.53663 10.2748 9.6L11.3135 11.1293L11.8025 11.3239C13.7135 12.288 16.2763 12.288 18.1877 11.3239L18.7427 11.0359L19.7248 9.6C19.5214 9.46727 19.3098 9.34741 19.0914 9.24112C18.1828 8.78887 16.6764 8.25 15.0148 8.25M12.599 9.981C12.2312 9.91217 11.8679 9.821 11.5112 9.708C12.3665 9.32812 13.6412 8.925 15.0148 8.925C15.9662 8.925 16.8658 9.1185 17.6098 9.36375C16.7379 9.48638 15.8075 9.6945 14.921 9.95062C14.2235 10.1524 13.4083 10.1306 12.599 9.981ZM18.584 11.88L18.4918 11.9265C16.3895 12.987 13.601 12.987 11.4988 11.9265L11.4114 11.8822C8.25278 15.3476 5.84153 21.7489 15.0144 21.7489C24.1873 21.7489 21.7175 15.2288 18.584 11.88ZM14.6248 15C14.4259 15 14.2351 15.079 14.0944 15.2197C13.9538 15.3603 13.8748 15.5511 13.8748 15.75C13.8748 15.9489 13.9538 16.1397 14.0944 16.2803C14.2351 16.421 14.4259 16.5 14.6248 16.5V15ZM15.3748 14.25V13.875H14.6248V14.25C14.227 14.25 13.8454 14.408 13.5641 14.6893C13.2828 14.9706 13.1248 15.3522 13.1248 15.75C13.1248 16.1478 13.2828 16.5294 13.5641 16.8107C13.8454 17.092 14.227 17.25 14.6248 17.25V18.75C14.2985 18.75 14.0207 18.5419 13.9172 18.2501C13.9018 18.2024 13.877 18.1582 13.8443 18.1202C13.8116 18.0822 13.7716 18.0512 13.7266 18.0289C13.6817 18.0067 13.6328 17.9937 13.5827 17.9906C13.5327 17.9876 13.4825 17.9947 13.4352 18.0114C13.388 18.0281 13.3445 18.0541 13.3075 18.0879C13.2704 18.1217 13.2405 18.1626 13.2196 18.2081C13.1986 18.2536 13.187 18.3029 13.1854 18.353C13.1838 18.4032 13.1922 18.4531 13.2103 18.4999C13.3137 18.7924 13.5053 19.0456 13.7586 19.2247C14.0119 19.4038 14.3145 19.5 14.6248 19.5V19.875H15.3748V19.5C15.7726 19.5 16.1541 19.342 16.4354 19.0607C16.7167 18.7794 16.8748 18.3978 16.8748 18C16.8748 17.6022 16.7167 17.2206 16.4354 16.9393C16.1541 16.658 15.7726 16.5 15.3748 16.5V15C15.701 15 15.9789 15.2081 16.0824 15.4999C16.0978 15.5476 16.1225 15.5918 16.1553 15.6298C16.188 15.6678 16.228 15.6988 16.2729 15.7211C16.3178 15.7433 16.3668 15.7563 16.4168 15.7594C16.4669 15.7624 16.517 15.7553 16.5643 15.7386C16.6116 15.7219 16.655 15.6959 16.6921 15.6621C16.7291 15.6283 16.759 15.5874 16.78 15.5419C16.801 15.4964 16.8126 15.4471 16.8142 15.397C16.8158 15.3468 16.8073 15.2969 16.7893 15.2501C16.6858 14.9576 16.4943 14.7044 16.241 14.5253C15.9876 14.3462 15.685 14.25 15.3748 14.25ZM15.3748 17.25V18.75C15.5737 18.75 15.7645 18.671 15.9051 18.5303C16.0458 18.3897 16.1248 18.1989 16.1248 18C16.1248 17.8011 16.0458 17.6103 15.9051 17.4697C15.7645 17.329 15.5737 17.25 15.3748 17.25Z"
                                fill="white" />
                        </svg>
                        <h1 class="dm-sans-medium text-[18px] text-[#222222] text-2xl font-semibold mt-2 ml-4">
                            N{{ $amount_spent }}
                        </h1>
                        <p class="ml-4 dm-sans-medium text-[12px] text-[#22222299]">
                            Total Debit
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-col bg-white w-full lg:w-[80%] min-h-[600px] mb-4 mt-8 rounded-xl overflow-x-scroll">
        <div class="flex flex-col md:flex-row">
            <h1 class="dm-sans-medium text-[22px] text-[#000000] mt-[43px] text-2xl ml-6 font-semibold w-[70%]">
                Unsuccessful Transactions
            </h1>

            <form action="/admin/wallet" method="GET" class="flex flex-col md:flex-row">
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
            </form>
        </div>

        <table class="min-w-full mt-8">
            <thead>
                <tr class="border-b border-gray-300">
                    <th class="px-8 py-5 pl-6 text-left text-[#22222280] dm-sans-medium text-[14px]">

                    </th>
                    <th class="px-8 py-5 text-left text-[#22222280] dm-sans-medium text-[14px]">
                        Email
                    </th>
                    <th class="px-8 py-5 text-left text-[#22222280] dm-sans-medium text-[14px]">
                        Amount
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
                        <td class="px-8 py-5 whitespace-nowrap text-green-500">
                            <a href="/admin/payments/re-verify/{{ $transaction->id }}">Re-Verify</a>
                        </td>
                        <td class="px-8 py-5 whitespace-nowrap">{{ $transaction->user->email }}</td>
                        <td class="px-8 py-5 whitespace-nowrap">
                            {{ number_format($transaction->amount, 2) }}
                        </td>
                        <td class="px-8 py-5 whitespace-nowrap">
                            {{ $transaction->status == 'pending' ? 'Pending' : 'Failed' }}
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

    {{-- Wallets History --}}
    <div class="flex flex-col bg-white w-full lg:w-[80%] min-h-[600px] mb-4 mt-8 rounded-xl overflow-x-scroll">
        <div class="flex flex-col md:flex-row">
            <h1 class="dm-sans-medium text-[22px] text-[#000000] mt-[43px] text-2xl ml-6 font-semibold w-[70%]">
                History
            </h1>

            <form action="/admin/wallet" method="GET" class="flex flex-col md:flex-row">
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
                    {{-- <th class="px-8 py-5 pl-6 text-left text-[#22222280] dm-sans-medium text-[14px]">
                        Transaction ID
                    </th> --}}
                    <th class="px-8 py-5 text-left text-[#22222280] dm-sans-medium text-[14px]">
                        Email
                    </th>
                    <th class="px-8 py-5 text-left text-[#22222280] dm-sans-medium text-[14px]">
                        Purpose
                    </th>
                    <th class="px-8 py-5 text-left text-[#22222280] dm-sans-medium text-[14px]">
                        Order Date
                    </th>
                    <th class="px-8 py-5 text-left text-[#22222280] dm-sans-medium text-[14px]">
                        Amount
                    </th>
                </tr>
            </thead>

            <tbody>
                @foreach ($wallets as $wallet)
                    <tr class="border-b border-gray-300 text-[#222222] dm-sans-medium text-[14px]">
                        <td class="px-8 py-5 whitespace-nowrap">{{ $wallet->user->email }}</td>
                        <td class="px-8 py-5 whitespace-nowrap">
                            {{ $wallet->type == 'refund' ? 'Purchase Refunded' : ($wallet->type == 'credit' ? 'Account Funding' : 'Purchased Number') }}
                        </td>
                        <td class="px-8 py-5 whitespace-nowrap">
                            {{ \Carbon\Carbon::parse($wallet->updated_at)->format('jS F, Y') }}</td>
                        <td
                            class="px-8 py-5 whitespace-nowrap {{ $wallet->type == 'credit' ? 'text-[#00B087]' : ($wallet->type == 'refund' ? 'text-blue-400' : 'text-[#DF5C0C]') }}">
                            @if ($wallet->type == 'credit')
                                +{{ number_format($wallet->amount, 2) }}
                            @elseif ($wallet->type == 'refund')
                                +{{ number_format($wallet->amount, 2) }} (Refunded)
                            @else
                                -{{ number_format($wallet->amount, 2) }}
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="flex flex-row items-center justify-between mt-5 mb-5">
            <div class="ml-6">
                {{ $wallets->links() }}
            </div>
        </div>
    </div>
</x-admin-dashboard>
