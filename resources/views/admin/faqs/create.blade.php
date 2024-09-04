<x-admin-dashboard page="faqs">
    <div class="w-full overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow py-6 px-6 lg:px-24">
            <h1 class="text-3xl text-black pb-6 font-semibold montserrat-bold">Create FAQ</h1>
            <form action="/admin/create-faq" method="post" class="flex flex-col gap-6 items-start lg:w-1/2">
                @csrf
                <input type="text" placeholder="Title" name="title"
                    class="italic montserrat-thin rounded-full px-8 py-2 border border-black lg:w-[570px]">
                <textarea name="content" class="italic montserrat-thin rounded-lg px-8 py-2 border border-black lg:w-[570px]"></textarea>
                <button type="submit"
                    class="text-white rounded-full bg-[#F48857] px-16 py-2 font-bold text-xl">Create</button>
            </form>
        </main>
    </div>
</x-admin-dashboard>
