<div id="numberModal" class="flex items-center justify-center fixed w-[100vw] h-[100vh] bg-black/25 hidden">
    <div class="bg-[#ffffff] h-fit lg:w-[50%] w-[90%] rounded-3xl flex-col">
        <div class="flex flex-row justify-between mt-5 lg:mt-6">
            <div class="items-start flex-row flex ml-6">
                <svg width="24" height="24" viewBox="0 0 24 24" rfill="none" xmlns="http://www.w3.org/2000/svg"
                    class="mt-1 mr-2">
                    <path d="M5 12H12M12 12H19M12 12V5M12 12V19" stroke="#222222" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <h1 class="items-start text-[#222222] dm-sans font-extrabold text-[20px] lg:text-[24px]">Add Funds
                </h1>
            </div>
            <div class="items-end flex modal-content mr-7">
                <a href="#"><svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                        xmlns="http://www.w3.org/2000/svg" class="lg:mr-3 mr-1 lg:mb-1 mb-[5px]">
                        <g opacity="0.6">
                            <path
                                d="M13.0306 11.9694C13.1715 12.1103 13.2506 12.3014 13.2506 12.5006C13.2506 12.6999 13.1715 12.891 13.0306 13.0319C12.8897 13.1728 12.6986 13.2519 12.4993 13.2519C12.3001 13.2519 12.109 13.1728 11.9681 13.0319L7.99997 9.06249L4.0306 13.0306C3.8897 13.1715 3.69861 13.2507 3.49935 13.2507C3.30009 13.2507 3.10899 13.1715 2.9681 13.0306C2.8272 12.8897 2.74805 12.6986 2.74805 12.4994C2.74805 12.3001 2.8272 12.109 2.9681 11.9681L6.93747 7.99999L2.96935 4.03061C2.82845 3.88972 2.7493 3.69862 2.7493 3.49936C2.7493 3.30011 2.82845 3.10901 2.96935 2.96811C3.11024 2.82722 3.30134 2.74806 3.5006 2.74806C3.69986 2.74806 3.89095 2.82722 4.03185 2.96811L7.99997 6.93749L11.9693 2.96749C12.1102 2.82659 12.3013 2.74744 12.5006 2.74744C12.6999 2.74744 12.891 2.82659 13.0318 2.96749C13.1727 3.10838 13.2519 3.29948 13.2519 3.49874C13.2519 3.69799 13.1727 3.88909 13.0318 4.02999L9.06247 7.99999L13.0306 11.9694Z"
                                fill="#222222" />
                        </g>
                    </svg></a>
                <button></a>
                    <p class="text-[#222222] text-[16px] lg:text-[18px]">Cancel</p>
                </button>
            </div>
        </div>

        <div class="flex flex-row bg-[#DF5C0C1A] rounded-xl lg:w-[94%] w-[90%] ml-6 lg:mt-6 mt-5">
            <div class="flex-row lg:mt-5 mt-[32px] ml-4 justify-center items-center">
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"
                    class="">
                    <path
                        d="M9 0.75C4.425 0.75 0.75 4.425 0.75 9C0.75 13.575 4.425 17.25 9 17.25C13.575 17.25 17.25 13.575 17.25 9C17.25 4.425 13.575 0.75 9 0.75ZM10.125 14.25H7.875V8.25H10.125V14.25ZM9 6.75C8.175 6.75 7.5 6.075 7.5 5.25C7.5 4.425 8.175 3.75 9 3.75C9.825 3.75 10.5 4.425 10.5 5.25C10.5 6.075 9.825 6.75 9 6.75Z"
                        fill="#9E9E9E" />
                </svg>
            </div>
            <div class="mt-3 ml-4 lg:ml-6 lg:mr-4 mr-2 mb-3 leading-tight">
                <p class="dm-sans-regular text-[15px] lg:text-[14px]">Fund your account to be able to purchase
                    mobile
                    numbers.
                    You’ll be redirected to flutterwave where you can securely make payments.
                </p>
            </div>
        </div>

        <form action="/user/fund-wallet" method="post">
            @csrf
            <div class="flex flex-col ml-6 mr-5 mt-5 lg:ml-6 rounded-md">
                <div class="flex flex-col">
                    <p class="text-[16px] font-bold">Amount</p>
                    <input type="text" name="amount" class="rounded-md border border-[#D9D9D9D9] bg-[#FCFCFD] p-2">
                </div>
            </div>


            <div class="flex justify-end items-end mb-4 mt-3">
                <button type="submit"
                    class="lg:mt-5 mt-3 w-[180px] h-[49px] bg-[#DF5C0C] text-white lg:py-2 rounded-lg dm-sans-extrabold text[12px] mr-6">
                    Add Funds
                </button>
            </div>
        </form>
    </div>
</div>
<!-- modal  -->
