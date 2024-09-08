<x-admin-dashboard activePage="setting" page="Settings">

    <form method="POST" action="/admin/add-settings"
        class="bg-white rounded-3xl p-8 flex flex-col w-full lg:w-[70%] xl:w-[40%]">
        @csrf
        <h1 class="dm-sans-bold font-bold text-3xl my-3">Create Setting</h1>
        <hr>

        <div class="w-full my-4 flex flex-col">
            <label for="key">Key</label>
            <input type="text" name="key" id="key" class="my-2 border p-3 rounded-xl" placeholder="Key"
                required>
        </div>

        <div class="w-full my-4 flex flex-col">
            <label for="value">Value</label>
            <input type="text" name="value" id="value" class="my-2 border p-3 rounded-xl" placeholder="Value"
                required>
        </div>

        <button class="bg-[#DF5C0C] rounded-lg py-4 text-white">Create</button>
    </form>

</x-admin-dashboard>
