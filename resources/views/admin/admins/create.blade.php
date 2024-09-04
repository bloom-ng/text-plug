<x-admin-dashboard page="admins">
    @if (session('success'))
        <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
        <script>
            Toastify({
                text: "{{ session('success') }}",
                duration: 3000,
                close: true,
                gravity: "top",
                position: "right",
                backgroundColor: "green",
                stopOnFocus: true,
                ariaLive: "polite",
                onClick: function() {}
            }).showToast();
        </script>
    @endif

    @if (session('error'))
        <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
        <script>
            Toastify({
                text: "{{ session('error') }}",
                duration: 3000,
                close: true,
                gravity: "top",
                position: "right",
                backgroundColor: "red",
                stopOnFocus: true,
                ariaLive: "polite",
                onClick: function() {}
            }).showToast();
        </script>
    @endif
    <div class="w-full overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow py-6 px-6 lg:px-24">
            <h1 class="text-3xl text-black pb-6 font-semibold montserrat-bold">Create Admin</h1>
            <p class="montserrat-thin font-thin text-[24px]">Create admin user</p>

            <div class="flex flex-col my-12 items-start">
                <h2 class="text-3xl text-black pb-6 font-semibold montserrat-bold">Details</h2>
                <form action="/admin/create-admins" method="post" class="flex flex-col gap-6 items-start lg:w-1/2">
                    @csrf
                    <input type="text" placeholder="Name" name="name"
                        class="italic montserrat-thin rounded-full px-8 py-2 border border-black lg:w-[570px]">
                    <input type="email" placeholder="Email" name="email"
                        class="italic montserrat-thin rounded-full px-8 py-2 border border-black lg:w-[570px]">
                    <input type="text" placeholder="Phone Number" name="phone"
                        class="italic montserrat-thin rounded-full px-8 py-2 border border-black lg:w-[570px]">
                    <input type="password" placeholder="Password" name="password"
                        class="italic montserrat-thin rounded-full px-8 py-2 border border-black lg:w-[570px]">
                    <select name="type"
                        class="italic montserrat-thin rounded-full px-8 py-2 border border-black lg:w-[570px]">
                        <option value="{{ App\Models\Admin::SUPER_ADMIN }}">Super Admin</option>
                        <option value="{{ App\Models\Admin::ADMIN }}">Admin</option>
                    </select>
                    <button type="submit"
                        class="text-white rounded-full bg-[#F48857] px-16 py-2 font-bold text-xl">Create</button>
                </form>
            </div>

        </main>
    </div>
</x-admin-dashboard>
