<x-admin-dashboard page="Account" activePage="account">
    <div class="w-full flex flex-col gap-14">
        <div class="bg-white lg:w-[725px] shadow-lg rounded-xl px-6 lg:px-10">
            <div class="flex flex-col">
                <h1 class="dm-sans-medium text-[18px] text-[#222222] font-semibold mt-6">Email
                    Address</h1>
                <p class="dm-sans-medium text-[12px] text-[#22222299]">Change your account email
                    address</p>

                <form action="/admin/update-profile" method="POST" class="flex flex-col">
                    @csrf
                    <div class="flex flex-col">
                        <input name="name" type="text" value="{{ $user->name }}" placeholder="Name"
                            class=" lg:w-[602px] h[45px] mt-12 bg-[#fcfcfd] py-2 pl-3 rounded-lg border border-[#EAEAEB] dm-sans-regular text-[#222222B2] text-[14px] mr-4">
                    </div>
                    <div class="flex flex-col">
                        <input name="email" type="email" value="{{ $user->email }}" placeholder="Email"
                            class=" lg:w-[602px] h[45px] mt-12 bg-[#fcfcfd] py-2 pl-3 rounded-lg border border-[#EAEAEB] dm-sans-regular text-[#222222B2] text-[14px] mr-4">
                    </div>
                    <div class="flex justify-end items-end mb-4">
                        <button type="submit"
                            class="lg:mt-12 mt-8 lg:w-[220px] lg:h-[49px] bg-[#DF5C0C] text-white lg:py-2 p-2 rounded-lg dm-sans-extrabold lg:text-[17px] text[12px] mr-4">
                            Save Changes
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class="bg-white lg:w-[725px] lg:h-[400px] shadow-lg lg:mb-14 mb-10 rounded-xl px-6 lg:px-10">
            <div class="flex flex-col">
                <h1 class="dm-sans-medium text-[18px] text-[#222222] font-semibold mt-6">Password
                </h1>
                <p class="dm-sans-medium text-[12px] text-[#22222299]">Change your account password
                </p>

                <form action="/admin/update-password" method="POST" class="flex flex-col">
                    @csrf
                    <div class="flex flex-col">
                        <input name="password" type="text" placeholder="Current Password"
                            class="lg:w-[602px] h[45px] mt-8 bg-[#fcfcfd] py-2 pl-3 rounded-lg border border-[#EAEAEB] dm-sans-regular text-[#222222B2] text-[14px] mr-4">
                        @error('password')
                            <div class="text-[#F48857] montserrat-thin italic mb-4">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <input name="new_password" type="text" placeholder="New Password"
                            class="lg:w-[602px] h[45px] mt-8 bg-[#fcfcfd] py-2 pl-3 rounded-lg border border-[#EAEAEB] dm-sans-regular text-[#222222B2] text-[14px] mr-4">
                        @error('new_password')
                            <div class="text-[#F48857] montserrat-thin italic mb-4">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="flex justify-end items-end">
                        <button type="submit"
                            class="lg:mt-12 mt-8 lg:w-[220px] lg:h-[49px] bg-[#DF5C0C] text-white lg:py-2 p-2 rounded-lg dm-sans-extrabold lg:text-[17px] text[12px] mr-4 mb-4">
                            Save Changes
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-admin-dashboard>
