<!-- modal content -->
<div id="messageModal" class="flex fixed z-20 w-full h-full bg-black/25 items-center justify-center hidden top-0 left-0">
    <div class="flex bg-[#ffffff] lg:h-auto lg:w-[50%] w-[90%] h-[95%] rounded-3xl flex-col overflow-scroll">
        <div class="flex flex-row justify-between mt-5 lg:mt-6">
            <div class="items-start flex-row flex ml-6">
                <svg width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg"
                    class="mr-2 lg:mt-3 mt-2">
                    <path
                        d="M2.275 12.296C1.425 11.192 1 10.639 1 9C1 7.36 1.425 6.809 2.275 5.704C3.972 3.5 6.818 1 11 1C15.182 1 18.028 3.5 19.725 5.704C20.575 6.81 21 7.361 21 9C21 10.64 20.575 11.191 19.725 12.296C18.028 14.5 15.182 17 11 17C6.818 17 3.972 14.5 2.275 12.296Z"
                        stroke="#222222" stroke-width="1.5" />
                    <path
                        d="M14 9C14 9.79565 13.6839 10.5587 13.1213 11.1213C12.5587 11.6839 11.7956 12 11 12C10.2044 12 9.44129 11.6839 8.87868 11.1213C8.31607 10.5587 8 9.79565 8 9C8 8.20435 8.31607 7.44129 8.87868 6.87868C9.44129 6.31607 10.2044 6 11 6C11.7956 6 12.5587 6.31607 13.1213 6.87868C13.6839 7.44129 14 8.20435 14 9Z"
                        stroke="#222222" stroke-width="1.5" />
                </svg>
                <h1 class="items-start text-[#222222] dm-sans-bold text-[20px] lg:text-[24px]">View Number</h1>
            </div>
            <button id="closeModal" class="items-end flex modal-content mr-7">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"
                    class="lg:mr-3 mr-1 lg:mb-1 mb-[5px]">
                    <g opacity="0.6">
                        <path
                            d="M13.0306 11.9694C13.1715 12.1103 13.2506 12.3014 13.2506 12.5006C13.2506 12.6999 13.1715 12.891 13.0306 13.0319C12.8897 13.1728 12.6986 13.2519 12.4993 13.2519C12.3001 13.2519 12.109 13.1728 11.9681 13.0319L7.99997 9.06249L4.0306 13.0306C3.8897 13.1715 3.69861 13.2507 3.49935 13.2507C3.30009 13.2507 3.10899 13.1715 2.9681 13.0306C2.8272 12.8897 2.74805 12.6986 2.74805 12.4994C2.74805 12.3001 2.8272 12.109 2.9681 11.9681L6.93747 7.99999L2.96935 4.03061C2.82845 3.88972 2.7493 3.69862 2.7493 3.49936C2.7493 3.30011 2.82845 3.10901 2.96935 2.96811C3.11024 2.82722 3.30134 2.74806 3.5006 2.74806C3.69986 2.74806 3.89095 2.82722 4.03185 2.96811L7.99997 6.93749L11.9693 2.96749C12.1102 2.82659 12.3013 2.74744 12.5006 2.74744C12.6999 2.74744 12.891 2.82659 13.0318 2.96749C13.1727 3.10838 13.2519 3.29948 13.2519 3.49874C13.2519 3.69799 13.1727 3.88909 13.0318 4.02999L9.06247 7.99999L13.0306 11.9694Z"
                            fill="#222222" />
                    </g>
                </svg>

                <p class="text-[#222222] text-[16px] lg:text-[18px]">Cancel</p>
            </button>
        </div>

        <div class="flex flex-row bg-[#DF5C0C1A] rounded-xl lg:w-[94%] w-[90%] h-full ml-6 lg:mt-6 mt-5">
            <div class="flex-row lg:mt-20 mt-[157px] ml-4">
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"
                    class="items-center">
                    <path
                        d="M9 0.75C4.425 0.75 0.75 4.425 0.75 9C0.75 13.575 4.425 17.25 9 17.25C13.575 17.25 17.25 13.575 17.25 9C17.25 4.425 13.575 0.75 9 0.75ZM10.125 14.25H7.875V8.25H10.125V14.25ZM9 6.75C8.175 6.75 7.5 6.075 7.5 5.25C7.5 4.425 8.175 3.75 9 3.75C9.825 3.75 10.5 4.425 10.5 5.25C10.5 6.075 9.825 6.75 9 6.75Z"
                        fill="#9E9E9E" />
                </svg>
            </div>
            <div class="mt-3 ml-4 lg:ml-6 lg:mr-4 mr-2 mb-3 leading-loose">
                <p class="dm-sans-regular text-[14px]"><strong>1.</strong> If you do not receive SMS within 25
                    minutes you'll be refunded.</p>
                <p class="dm-sans-regular text-[14px]"><strong>2.</strong> You can use phone number to verify
                    account only bought service, different SMS will rejected.</p>
                <p class="dm-sans-regular text-[14px]"><strong>3.</strong> Forbidden to use the service for any
                    illegal purposes as well as not to take actions that harm the service and (or) third parties.
                </p>
                <p class="dm-sans-regular text-[14px]"><strong>4.</strong> All phone numbers are temporary (not
                    permanent), when sms has been received with phone number it'll become invalid.category and start
                    performing tasks to earn money.</p>
            </div>
        </div>

        <div class="flex flex-row ml-6 mr-5 mt-5 lg:ml-6 justify-between bg-[#DF5C0C0D] rounded-md lg:bg-transparent">
            <div class="lg:bg-[#DF5C0C0D] rounded-md lg:mr-5 flex flex-row lg:h-[36px] lg:w-[265px] items-center">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"
                    class="lg:mr-1 mr-2 mt-1 ml-3">
                    <g clip-path="url(#clip0_53_3648)">
                        <path
                            d="M5.46133 4.66667V3.89733C5.46133 3.71422 5.52667 3.55733 5.65733 3.42667C5.788 3.296 5.94489 3.23067 6.128 3.23067H9.872C10.0551 3.23067 10.212 3.296 10.3427 3.42667C10.4733 3.55733 10.5387 3.71422 10.5387 3.89733V4.66667H11.8C11.9298 4.66667 12.0476 4.70111 12.1533 4.77C12.2591 4.83889 12.3362 4.93444 12.3847 5.05667L13.8747 8.42533C13.9164 8.52311 13.9476 8.62711 13.968 8.73733C13.9884 8.84756 13.9991 8.94556 14 9.03133V12C14 12.1836 13.9347 12.3404 13.804 12.4707C13.6733 12.6009 13.5164 12.6662 13.3333 12.6667H2.66667C2.48311 12.6667 2.32622 12.6013 2.196 12.4707C2.06578 12.34 2.00044 12.1831 2 12V9.036C2 8.92133 2.01044 8.81533 2.03133 8.718C2.05222 8.62022 2.08356 8.52267 2.12533 8.42533L3.61533 5.05667C3.66422 4.93444 3.74133 4.83889 3.84667 4.77C3.952 4.70111 4.06978 4.66667 4.2 4.66667H5.46133ZM6.128 4.66667H9.872V3.89733H6.128V4.66667ZM5 8.46133V7.79467H5.66667V8.46133H10.3333V7.79467H11V8.46133H13.164L11.8 5.33333H4.2L2.836 8.46133H5ZM5 9.128H2.66667V12H13.3333V9.128H11V9.79467H10.3333V9.128H5.66667V9.79467H5V9.128Z"
                            fill="#333333" />
                    </g>
                    <defs>
                        <clipPath id="clip0_53_3648">
                            <rect width="16" height="16" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
                <p><span class="font-bold">Service: </span><span id="messageService"></span></p>
            </div>

            <div class="lg:bg-[#DF5C0C0D] flex flex-row lg:mr-5 rounded-md lg:h-[36px] lg:w-[265px] items-center">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"
                    class="lg:mr-1 mr-2 lg:ml-3">
                    <path
                        d="M14.0428 2.8015L14.0214 2.78813L11.3154 1.45497L8.39467 5.34925L9.73842 7.14103C9.69821 7.81676 9.41165 8.45429 8.933 8.93294C8.45434 9.41159 7.8168 9.69814 7.14108 9.73835L5.34933 8.3946L1.45508 11.3153L2.77714 13.9987L2.78827 14.0213L2.80167 14.0427C2.87222 14.1564 2.9707 14.2501 3.08772 14.315C3.20474 14.3798 3.33641 14.4136 3.4702 14.4132H4.16845C5.51383 14.4132 6.84604 14.1482 8.089 13.6334C9.33197 13.1185 10.4614 12.3639 11.4127 11.4126C12.364 10.4612 13.1186 9.33184 13.6335 8.08887C14.1483 6.8459 14.4133 5.51369 14.4133 4.16832V3.47003C14.4138 3.33624 14.3799 3.20457 14.3151 3.08755C14.2502 2.97053 14.1565 2.87206 14.0428 2.8015ZM13.4133 4.16832C13.4133 9.26597 9.26608 13.4132 4.16845 13.4132H3.60345L2.71889 11.6175L5.34952 9.64453L6.81411 10.7429H6.98077C7.9783 10.7418 8.93466 10.3451 9.64002 9.6397C10.3454 8.93433 10.7421 7.97797 10.7433 6.98044V6.81378L9.64486 5.34922L11.6176 2.71875L13.4133 3.60347V4.16832Z"
                        fill="#333333" />
                </svg>
                <p> <span class="font-bold">Number:</span> <span id="messageNumber"></span></p>
            </div>

            <div class="lg:bg-[#DF5C0C0D] flex flex-row lg:h-[36px] lg:w-[265px] rounded-md items-center">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"
                    class="mr-2 lg:mr-1 lg:ml-3">
                    <path
                        d="M8 1.5C6.71442 1.5 5.45772 1.88122 4.3888 2.59545C3.31988 3.30968 2.48676 4.32484 1.99479 5.51256C1.50282 6.70028 1.37409 8.00721 1.6249 9.26809C1.8757 10.529 2.49477 11.6872 3.40381 12.5962C4.31285 13.5052 5.47104 14.1243 6.73192 14.3751C7.99279 14.6259 9.29973 14.4972 10.4874 14.0052C11.6752 13.5132 12.6903 12.6801 13.4046 11.6112C14.1188 10.5423 14.5 9.28558 14.5 8C14.4982 6.27665 13.8128 4.62441 12.5942 3.40582C11.3756 2.18722 9.72335 1.50182 8 1.5ZM8 13.5C6.91221 13.5 5.84884 13.1774 4.94437 12.5731C4.0399 11.9687 3.33495 11.1098 2.91867 10.1048C2.50238 9.09977 2.39347 7.9939 2.60568 6.927C2.8179 5.86011 3.34173 4.8801 4.11092 4.11091C4.8801 3.34172 5.86011 2.8179 6.92701 2.60568C7.9939 2.39346 9.09977 2.50238 10.1048 2.91866C11.1098 3.33494 11.9687 4.03989 12.5731 4.94436C13.1774 5.84883 13.5 6.9122 13.5 8C13.4983 9.45818 12.9184 10.8562 11.8873 11.8873C10.8562 12.9184 9.45819 13.4983 8 13.5ZM9 11C9 11.1326 8.94732 11.2598 8.85356 11.3536C8.75979 11.4473 8.63261 11.5 8.5 11.5C8.23479 11.5 7.98043 11.3946 7.7929 11.2071C7.60536 11.0196 7.5 10.7652 7.5 10.5V8C7.36739 8 7.24022 7.94732 7.14645 7.85355C7.05268 7.75979 7 7.63261 7 7.5C7 7.36739 7.05268 7.24021 7.14645 7.14645C7.24022 7.05268 7.36739 7 7.5 7C7.76522 7 8.01957 7.10536 8.20711 7.29289C8.39465 7.48043 8.5 7.73478 8.5 8V10.5C8.63261 10.5 8.75979 10.5527 8.85356 10.6464C8.94732 10.7402 9 10.8674 9 11ZM7 5.25C7 5.10166 7.04399 4.95666 7.1264 4.83332C7.20881 4.70999 7.32595 4.61386 7.46299 4.55709C7.60003 4.50032 7.75083 4.48547 7.89632 4.51441C8.04181 4.54335 8.17544 4.61478 8.28033 4.71967C8.38522 4.82456 8.45665 4.9582 8.48559 5.10368C8.51453 5.24917 8.49968 5.39997 8.44291 5.53701C8.38615 5.67406 8.29002 5.79119 8.16668 5.8736C8.04334 5.95601 7.89834 6 7.75 6C7.55109 6 7.36032 5.92098 7.21967 5.78033C7.07902 5.63968 7 5.44891 7 5.25Z"
                        fill="#333333" />
                </svg>
                <p><span class="font-bold">Status:</span> <span id="messageStatus"></span></p>
            </div>
        </div>

        <div
            class="flex flex-row bg-[#ffffff] rounded-xl w-[90%] h-full lg:w-[94%] border border-[#D9D9D9D9] lg:h-full ml-6 mt-6 mb-5">
            <div class="flex-col">
                <div class="flex flex-row justify-between mt-2 mb-2">
                    <div class="flex flex-row">
                        {{-- <img src="/img/discord.svg" alt="discord" class="w-6 h-6"> --}}
                        <span id="messageService"></span>
                    </div>
                    <p class="mr-4" id="messageDate"></p>
                </div>

                <div>
                    <hr class="w-full">
                </div>

                <div class="lg:mt-4 lg:ml-3 lg:mb-4 mr-3 ml-3 mb-3 mt-2">
                    <p id="messageText"></p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- modal2 content -->
<div id="Order" class="flex fixed z-20 w-full h-full bg-black/25 items-center justify-center hidden top-0 left-0">
    <div class="flex bg-[#ffffff] lg:h-auto lg:w-[50%] w-[90%] h-[95%] rounded-3xl flex-col overflow-scroll">
        <div class="flex flex-row justify-between mt-5 lg:mt-6">
            <div class="items-start flex-row flex ml-6">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    class="mt-2 mr-2">
                    <path d="M5 12H12M12 12H19M12 12V5M12 12V19" stroke="#222222" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <h1 class="items-start text-[#222222] dm-sans font-extrabold text-[20px] lg:text-[24px]">Order
                    Number</h1>
            </div>
            <div class="items-end flex modal-content mr-7">
                <button id="CloseX"><svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                        xmlns="http://www.w3.org/2000/svg" class="lg:mr-3 mr-1 lg:mb-1 mb-[5px]">
                        <g opacity="0.6">
                            <path
                                d="M13.0306 11.9694C13.1715 12.1103 13.2506 12.3014 13.2506 12.5006C13.2506 12.6999 13.1715 12.891 13.0306 13.0319C12.8897 13.1728 12.6986 13.2519 12.4993 13.2519C12.3001 13.2519 12.109 13.1728 11.9681 13.0319L7.99997 9.06249L4.0306 13.0306C3.8897 13.1715 3.69861 13.2507 3.49935 13.2507C3.30009 13.2507 3.10899 13.1715 2.9681 13.0306C2.8272 12.8897 2.74805 12.6986 2.74805 12.4994C2.74805 12.3001 2.8272 12.109 2.9681 11.9681L6.93747 7.99999L2.96935 4.03061C2.82845 3.88972 2.7493 3.69862 2.7493 3.49936C2.7493 3.30011 2.82845 3.10901 2.96935 2.96811C3.11024 2.82722 3.30134 2.74806 3.5006 2.74806C3.69986 2.74806 3.89095 2.82722 4.03185 2.96811L7.99997 6.93749L11.9693 2.96749C12.1102 2.82659 12.3013 2.74744 12.5006 2.74744C12.6999 2.74744 12.891 2.82659 13.0318 2.96749C13.1727 3.10838 13.2519 3.29948 13.2519 3.49874C13.2519 3.69799 13.1727 3.88909 13.0318 4.02999L9.06247 7.99999L13.0306 11.9694Z"
                                fill="#222222" />
                        </g>
                    </svg></button>
                <button id="Cancel" class="text-[#222222] text-[16px] lg:text-[18px]">Cancel</button>
            </div>
        </div>

        <div class="flex flex-row bg-[#DF5C0C1A] rounded-xl lg:w-[94%] w-[90%] h-full ml-6 lg:mt-6 mt-5">
            <div class="flex-row lg:mt-20 mt-[157px] ml-4">
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                    xmlns="http://www.w3.org/2000/svg" class="items-center">
                    <path
                        d="M9 0.75C4.425 0.75 0.75 4.425 0.75 9C0.75 13.575 4.425 17.25 9 17.25C13.575 17.25 17.25 13.575 17.25 9C17.25 4.425 13.575 0.75 9 0.75ZM10.125 14.25H7.875V8.25H10.125V14.25ZM9 6.75C8.175 6.75 7.5 6.075 7.5 5.25C7.5 4.425 8.175 3.75 9 3.75C9.825 3.75 10.5 4.425 10.5 5.25C10.5 6.075 9.825 6.75 9 6.75Z"
                        fill="#9E9E9E" />
                </svg>
            </div>
            <div class="mt-3 ml-4 lg:ml-6 lg:mr-4 mr-2 mb-3 leading-loose">
                <p class="dm-sans-regular text-[14px]"><strong>1.</strong> If you do not receive SMS within 25
                    minutes you'll be refunded.</p>
                <p class="dm-sans-regular text-[14px]"><strong>2.</strong> You can use phone number to verify
                    account only bought service, different SMS will rejected.</p>
                <p class="dm-sans-regular text-[14px]"><strong>3.</strong> Forbidden to use the service for any
                    illegal purposes as well as not to take actions that harm the service and (or) third parties.
                </p>
                <p class="dm-sans-regular text-[14px]"><strong>4.</strong> All phone numbers are temporary (not
                    permanent), when sms has been received with phone number it'll become invalid.category and start
                    performing tasks to earn money.</p>
            </div>
        </div>

        <form id="orderForm" action="/user/orders" method="post">
            @csrf
            <div class="flex flex-col ml-6 mr-5 mt-5 lg:ml-6 rounded-md">
                <div class="flex flex-col mb-5">
                    <p class="text-[16px] font-bold">Select Provider</p>
                    <select value="server_1" id="server" name="server"
                        class="dm-sans-regular text-[14px] h-[45px] text-[#7E7E7E] bg-[#F9FBFF] border border-[#D9D9D9D9] rounded-md">
                        <option value="">Choose Option</option>
                        <option value="server_1">Dynamic SMS</option>
                        <option value="server_2">Swift SMS (recommended for WhatsApp and telegram verification)
                        </option>
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                            xmlns="http://www.w3.org/2000/svg",>
                            <path d="M4.5 6.75L9 11.25L13.5 6.75" stroke="#3D3C42" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </select>
                </div>

                <div id="service_1" class="hidden">
                    <div class="flex flex-col">
                        <p class="text-[16px] font-bold">Service</p>
                        <select id="smsPoolService" name="service"
                            class="dm-sans-regular text-[14px] h-[45px] text-[#7E7E7E] bg-[#F9FBFF] border border-[#D9D9D9D9] rounded-md">

                            @foreach ($smsPoolServices as $service)
                                <option value="{{ $service['ID'] }}">{{ $service['name'] }}</option>
                            @endforeach

                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg",>
                                <path d="M4.5 6.75L9 11.25L13.5 6.75" stroke="#3D3C42" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </select>
                    </div>

                    <div class="flex flex-col mt-5">
                        <p class="text-[16px] font-bold">Country</p>
                        <select id="country_1" name="country"
                            class="dm-sans-regular text-[14px] h-[45px] text-[#7E7E7E] bg-[#F9FBFF] border border-[#D9D9D9D9] rounded-md">
                            {{-- <option>United Kingdom</option> --}}
                            @foreach ($smsPoolCountries as $country)
                                <option value="{{ $country['ID'] }}">{{ $country['name'] }}
                                    ({{ $country['short_name'] }})
                                </option>
                            @endforeach
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.5 6.75L9 11.25L13.5 6.75" stroke="#3D3C42" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </select>
                    </div>
                </div>

                <div id="service_2" class="hidden">
                    <div class="flex flex-col">
                        <p class="text-[16px] font-bold">Service</p>
                        <select name="service"
                            class="dm-sans-regular text-[14px] h-[45px] text-[#7E7E7E] bg-[#F9FBFF] border border-[#D9D9D9D9] rounded-md">
                            <option value="">Select A Service</option>

                            @foreach ($daisyServices as $key => $value)
                                @foreach ($value as $subKey => $subValue)
                                    <option value="{{ $key }}">{{ $subValue['name'] }}</option>
                                @endforeach
                            @endforeach
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg",>
                                <path d="M4.5 6.75L9 11.25L13.5 6.75" stroke="#3D3C42" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </select>
                    </div>
                </div>
            </div>

            <div id="details" class="hidden flex flex-row ml-6 mr-5 mt-5 lg:ml-6 rounded-md mb-6">
                <div
                    class="bg-[#DF5C0C0D] rounded-md lg:mr-5 flex flex-row lg:h-[36px] w-[60%] lg:w-[265px] items-center">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                        xmlns="http://www.w3.org/2000/svg" class="lg:mr-1 mr-2 ml-3">
                        <g clip-path="url(#clip0_53_3648)">
                            <path
                                d="M5.46133 4.66667V3.89733C5.46133 3.71422 5.52667 3.55733 5.65733 3.42667C5.788 3.296 5.94489 3.23067 6.128 3.23067H9.872C10.0551 3.23067 10.212 3.296 10.3427 3.42667C10.4733 3.55733 10.5387 3.71422 10.5387 3.89733V4.66667H11.8C11.9298 4.66667 12.0476 4.70111 12.1533 4.77C12.2591 4.83889 12.3362 4.93444 12.3847 5.05667L13.8747 8.42533C13.9164 8.52311 13.9476 8.62711 13.968 8.73733C13.9884 8.84756 13.9991 8.94556 14 9.03133V12C14 12.1836 13.9347 12.3404 13.804 12.4707C13.6733 12.6009 13.5164 12.6662 13.3333 12.6667H2.66667C2.48311 12.6667 2.32622 12.6013 2.196 12.4707C2.06578 12.34 2.00044 12.1831 2 12V9.036C2 8.92133 2.01044 8.81533 2.03133 8.718C2.05222 8.62022 2.08356 8.52267 2.12533 8.42533L3.61533 5.05667C3.66422 4.93444 3.74133 4.83889 3.84667 4.77C3.952 4.70111 4.06978 4.66667 4.2 4.66667H5.46133ZM6.128 4.66667H9.872V3.89733H6.128V4.66667ZM5 8.46133V7.79467H5.66667V8.46133H10.3333V7.79467H11V8.46133H13.164L11.8 5.33333H4.2L2.836 8.46133H5ZM5 9.128H2.66667V12H13.3333V9.128H11V9.79467H10.3333V9.128H5.66667V9.79467H5V9.128Z"
                                fill="#333333" />
                        </g>
                        <defs>
                            <clipPath id="clip0_53_3648">
                                <rect width="16" height="16" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                    <p><span class="font-bold">Available Numbers:</span> <span id="availableNumbers">0</span></p>
                </div>

                <div class="bg-[#DF5C0C0D] flex flex-row ml-5 lg:mr-5 rounded-md lg:h-[36px] w-[35%] items-center">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                        xmlns="http://www.w3.org/2000/svg" class="lg:mr-1 mr-2 ml-3">
                        <g clip-path="url(#clip0_53_3648)">
                            <path
                                d="M5.46133 4.66667V3.89733C5.46133 3.71422 5.52667 3.55733 5.65733 3.42667C5.788 3.296 5.94489 3.23067 6.128 3.23067H9.872C10.0551 3.23067 10.212 3.296 10.3427 3.42667C10.4733 3.55733 10.5387 3.71422 10.5387 3.89733V4.66667H11.8C11.9298 4.66667 12.0476 4.70111 12.1533 4.77C12.2591 4.83889 12.3362 4.93444 12.3847 5.05667L13.8747 8.42533C13.9164 8.52311 13.9476 8.62711 13.968 8.73733C13.9884 8.84756 13.9991 8.94556 14 9.03133V12C14 12.1836 13.9347 12.3404 13.804 12.4707C13.6733 12.6009 13.5164 12.6662 13.3333 12.6667H2.66667C2.48311 12.6667 2.32622 12.6013 2.196 12.4707C2.06578 12.34 2.00044 12.1831 2 12V9.036C2 8.92133 2.01044 8.81533 2.03133 8.718C2.05222 8.62022 2.08356 8.52267 2.12533 8.42533L3.61533 5.05667C3.66422 4.93444 3.74133 4.83889 3.84667 4.77C3.952 4.70111 4.06978 4.66667 4.2 4.66667H5.46133ZM6.128 4.66667H9.872V3.89733H6.128V4.66667ZM5 8.46133V7.79467H5.66667V8.46133H10.3333V7.79467H11V8.46133H13.164L11.8 5.33333H4.2L2.836 8.46133H5ZM5 9.128H2.66667V12H13.3333V9.128H11V9.79467H10.3333V9.128H5.66667V9.79467H5V9.128Z"
                                fill="#333333" />
                        </g>
                        <defs>
                            <clipPath id="clip0_53_3648">
                                <rect width="16" height="16" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                    <p><span class="font-bold">Price:</span> <span id="numberPrice">0</span></p>
                </div>
            </div>

            <div class="flex justify-end items-end mb-4">
                <button type="submit"
                    class="{{ $can_purchase ? 'bg-[#DF5C0C]/100' : 'bg-[#DF5C0C]/50' }} cursor-pointer lg:mt-5 mt-3 lg:w-[180px] lg:h-[49px] text-white lg:py-2 p-2 rounded-lg dm-sans-extrabold text[12px] mr-6">
                    Order Now
                </button>
            </div>
        </form>
    </div>
</div>


<script>
    let server = document.getElementById('server');
    let service_1 = document.getElementById('service_1');
    let service_2 = document.getElementById('service_2');
    let details = document.getElementById('details');
    let orderForm = document.getElementById('orderForm');

    service_1.classList.add('hidden');
    service_2.classList.add('hidden');

    server.addEventListener('change', (e) => {
        if (e.target.value === 'server_1') {
            service_1.classList.remove('hidden');
            service_2.classList.add('hidden');
            details.classList.remove('hidden');

        } else if (e.target.value === 'server_2') {
            service_1.classList.add('hidden');
            service_2.classList.remove('hidden');
            details.classList.add('hidden');

        } else {
            service_1.classList.add('hidden');
            service_2.classList.add('hidden');
            details.classList.add('hidden');

        }
    });

    orderForm.addEventListener('submit', function(e) {
        let selectedServer = server.value;
        if (selectedServer === 'server_1') {
            // Disable inputs in service_2 div
            Array.from(service_2.querySelectorAll('input, select')).forEach(input => {
                input.disabled = true;
            });
        } else if (selectedServer === 'server_2') {
            // Disable inputs in service_1 div
            Array.from(service_1.querySelectorAll('input, select')).forEach(input => {
                input.disabled = true;
            });
        }
    });
</script>
