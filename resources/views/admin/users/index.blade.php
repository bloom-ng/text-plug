<x-admin-dashboard page="users">
    <div class="w-full overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow py-6 px-6 lg:px-24">
            <h1 class="text-3xl text-black pb-6 font-semibold montserrat-bold">Users</h1>
            <!-- <a class="text-white rounded-full bg-[#F48857] px-6 py-2 font-semibold" href="/admin/create-user">Create</a> -->
            <table class="w-full self-start mt-12">
                <thead>
                    <tr class="montserrat-bold font-semibold text-[15px]">
                        <th scope="col" class="text-left">Name</th>
                        <th scope="col" class="text-left">Email</th>
                        <th scope="col" class="text-left">WhatsApp Number</th>
                        <th scope="col" class="text-left">Country</th>
                        <th scope="col" class="text-left">Where Did You Hear</th>
                        <th scope="col" class="text-left">Action</th>
                    </tr>
                </thead>
                <tbody class="pt-12">
                    @foreach ($users as $user)
                        <tr>
                            <td class="whitespace-wrap text-left">{{ $user->name }}</td>
                            <td class="whitespace-wrap text-left">{{ $user->email }}</td>
                            <td class="whitespace-wrap text-left">{{ $user->whatsapp_number }}</td>
                            <td class="whitespace-wrap text-left">{{ $user->country }}</td>
                            <td class="whitespace-wrap text-left">{{ $user->where_did_you_hear }}</td>
                            <td class="whitespace-wrap text-left"><a class="text-red-500"
                                    href="/admin/delete-user/{{ $user->id }}">Delete</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-8">
                {{ $users->links() }}
            </div>
        </main>
    </div>
</x-admin-dashboard>
