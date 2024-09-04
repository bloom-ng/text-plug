<!-- Create page -->
<x-admin-dashboard page="tutorials">
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
            <h1 class="text-3xl text-black pb-6 font-semibold montserrat-bold">Create Tutorial</h1>
            <p class="montserrat-thin font-thin text-[24px]">Create a new tutorial</p>
            <form action="/admin/create-tutorial" method="post" class="flex flex-col gap-6 items-start lg:w-1/2">
                @csrf
                <input type="text" placeholder="Link" name="link"
                    class="italic montserrat-thin rounded-full px-8 py-2 border border-black lg:w-[570px]">
                <input type="text" placeholder="Title" name="title"
                    class="italic montserrat-thin rounded-full px-8 py-2 border border-black lg:w-[570px]">
                <button type="submit"
                    class="text-white rounded-full bg-[#F48857] px-16 py-2 font-bold text-xl">Create</button>
            </form>
        </main>
    </div>
</x-admin-dashboard>
