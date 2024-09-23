<x-admin-dashboard activePage="users" page="Users">

    <form method="POST" action="/admin/credit-users/{{ $user->id }}"
        class="bg-white rounded-3xl p-8 flex flex-col w-full lg:w-[70%] xl:w-[40%]">
        @csrf
        <h1 class="dm-sans-bold font-bold text-3xl my-3">Credit {{ $user->name }}'s Wallet</h1>
        <hr>
        <input type="text" name="type" value="credit" hidden>

        <input type="text" name="user_id" value="{{ $user->id }}" hidden>

        <div class="w-full my-4 flex flex-col">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" value="{{ $user->email }}"
                class="my-2 border p-3 rounded-xl" placeholder="Email" readonly />
        </div>

        <div class="w-full my-4 flex flex-col">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="{{ $user->name }}"
                class="my-2 border p-3 rounded-xl" placeholder="Name" readonly />
        </div>

        <div class="w-full my-4 flex flex-col">
            <label for="amount">Amount</label>
            <input type="number" name="amount" id="amount" class="my-2 border p-3 rounded-xl"
                placeholder="Amount" />
        </div>

        <button class="bg-[#DF5C0C] rounded-lg py-4 text-white">Credit</button>
    </form>

</x-admin-dashboard>
