<x-user-layout page="Orders" activePage="orders">
    <div
        class="flex flex-col bg-white w-full 2xl:w-[7] lg:w-[90%] min-h-[600px] mb-4 mt-8 rounded-xl overflow-x-scroll overflow-y-scroll">
        <div class="flex lg:hidden justify-start items-end mb-4 mt-3 ml-6">
            <button id="NewOrderMobile"
                class="lg:mt-5 mt-3 w-[180px] h-[49px] bg-[#DF5C0C] text-white lg:py-2 rounded-lg dm-sans-extrabold text[12px] mr-6">
                New order
            </button>
        </div>
        <div class="hidden lg:flex justify-start items-end mt-3 ml-6">
            <button id="NewOrder"
                class="w-[180px] h-[49px] bg-[#DF5C0C] text-white lg:py-2 rounded-lg dm-sans-extrabold text[12px] mr-6">
                New order
            </button>
        </div>
        <div class="flex flex-col md:flex-row">
            <h1 class="dm-sans-medium text-[22px] text-[#000000] mt-[43px] text-2xl ml-6 font-semibold w-[70%]">
                History
            </h1>

            <form action="/user/orders" method="GET" class="flex flex-col md:flex-row">
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
                    <th class="px-8 py-5 text-left  text-[#22222280] dm-sans-medium text-[14px]">Order ID</th>
                    <th class="px-8 py-5 text-left  text-[#22222280] dm-sans-medium text-[14px]">Service</th>
                    <th class="px-8 py-5 text-left  text-[#22222280] dm-sans-medium text-[14px]">Phone Number
                    </th>
                    <th class="px-8 py-5 text-left  text-[#22222280] dm-sans-medium text-[14px]">Order Date
                    </th>
                    <th class="px-8 py-5 text-left  text-[#22222280] dm-sans-medium text-[14px]">Status</th>
                </tr>
            </thead>


            <tbody>
                @foreach ($orders as $order)
                    <tr class="border-b border-gray-300 text-[#222222] dm-sans-medium text-[14px]">
                        <td class="px-8 py-5 whitespace-nowrap">{{ $order->order_id }}</td>
                        <td class="px-8 py-5 whitespace-nowrap">{{ $order->service_name }}</td>
                        <td class="px-8 py-5 whitespace-nowrap">{{ $order->phone_number }}</td>
                        <td class="px-8 py-5 whitespace-nowrap">{{ date('d-m-Y', strtotime($order->created_at)) }}</td>
                        <td class="px-8 py-5">
                            <div
                                class="{{ $order->status == 'done' ? 'bg-[#16C09861] text-[#008767] border-[#00B087]' : ($order->status == 'refunded' ? 'bg-[#FFCCCC] text-[#CC0000]' : 'text-blue-600 bg-blue-300') }} w-[90px] h-[30px] flex items-center justify-center border rounded-lg">
                                {{ $order->status }}
                            </div>
                        </td>

                        <td class="px-8 py-5 whitespace-nowrap">
                            <div class="flex flex-row space-x-2">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" class="mt-1">
                                    <path
                                        d="M2.45625 11.472C1.81875 10.644 1.5 10.2293 1.5 9C1.5 7.77 1.81875 7.35675 2.45625 6.528C3.729 4.875 5.8635 3 9 3C12.1365 3 14.271 4.875 15.5438 6.528C16.1813 7.3575 16.5 7.77075 16.5 9C16.5 10.23 16.1813 10.6432 15.5438 11.472C14.271 13.125 12.1365 15 9 15C5.8635 15 3.729 13.125 2.45625 11.472Z"
                                        stroke="#222222" stroke-width="1.5" />
                                    <path
                                        d="M11.25 9C11.25 9.59674 11.0129 10.169 10.591 10.591C10.169 11.0129 9.59674 11.25 9 11.25C8.40326 11.25 7.83097 11.0129 7.40901 10.591C6.98705 10.169 6.75 9.59674 6.75 9C6.75 8.40326 6.98705 7.83097 7.40901 7.40901C7.83097 6.98705 8.40326 6.75 9 6.75C9.59674 6.75 10.169 6.98705 10.591 7.40901C11.0129 7.83097 11.25 8.40326 11.25 9Z"
                                        stroke="#222222" stroke-width="1.5" />
                                </svg>
                                <button class="view-btn" data-order-id="{{ $order->id }}">View</button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="flex flex-row items-center justify-between mt-5">
            <div class="ml-6">
                {{ $orders->links() }}
            </div>
        </div>
    </div>
    @include('modal.order-modal')

    <!-- Order modal SCRIPT -->
    <script>
        let orderModal = document.getElementById('Order');
        let openBtn = document.getElementById('NewOrder');
        let openBtnMobile = document.getElementById('NewOrderMobile');
        let closeBtnX = document.getElementById('CloseX');
        let closeBtnCancel = document.getElementById('Cancel');

        // Function to open the modal
        let openOrderModal = () => {
            orderModal.classList.remove('hidden');
        };

        // Function to close the modal
        let closeOrderModal = () => {
            orderModal.classList.add('hidden');
        };

        // Open modal when the 'Ordernow' button is clicked
        openBtn.addEventListener('click', openOrderModal);
        openBtnMobile.addEventListener('click', openOrderModal);

        // Close modal when the 'CloseX' button or 'Cancel' button is clicked
        closeBtnX.addEventListener('click', closeOrderModal);
        closeBtnCancel.addEventListener('click', closeOrderModal);

        // Close modal when clicking outside of the modal content
        window.addEventListener('click', (event) => {
            if (event.target === orderModal) {
                closeOrderModal();
            }
        });
    </script>
    <!-- Order modal SCRIPT -->

    <script script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const viewButtons = document.querySelectorAll('.view-btn');
            const msgModal = document.getElementById('messageModal');
            const closeViewBtn = document.getElementById('closeModal');

            viewButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const orderId = this.getAttribute('data-order-id');

                    fetch(`/user/orders/${orderId}`, {
                            method: 'GET',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}' // Include CSRF token if needed
                            }
                        }).then(response => response.json()).then(data => {

                            if (data.status == 'error') {
                                Toastify({
                                    text: data.message,
                                    duration: 4000,
                                    close: true,
                                    gravity: "top",
                                    position: "right",
                                    backgroundColor: "red",
                                    stopOnFocus: true,
                                    ariaLive: "polite",
                                    onClick: function() {}
                                }).showToast();
                            } else {

                                msgModal.classList.remove('hidden');

                                document.getElementById('messageService').innerText = data
                                    .service;
                                document.getElementById('messageNumber').innerText = data
                                    .number;
                                document.getElementById('messageStatus').innerText = data
                                    .status;
                                document.getElementById('messageText').innerText = data.message;
                                document.getElementById('messageDate').innerText = data
                                    .created_at;
                            }
                            // You can display the order data in a modal or any other UI component
                            // For example:
                            // showModalWithData(data);
                        })
                        .catch(error => {
                            Toastify({
                                text: "An error occurred while fetching the order.",
                                duration: 4000,
                                close: true,
                                gravity: "top",
                                position: "right",
                                backgroundColor: "red",
                                stopOnFocus: true,
                                ariaLive: "polite",
                                onClick: function() {}
                            }).showToast();

                        });
                });
            });

            // Function to close the modal
            function closeModal() {
                msgModal.classList.add('hidden');
            }

            // When the user clicks on close button (X), close the modal
            closeViewBtn.addEventListener('click', closeModal);

            window.addEventListener('click', function(event) {
                if (event.target === msgModal) {
                    closeModal();
                }
            });
        });
    </script>

    <script>
        //  onchange event for the select element
        const service = document.getElementById('smsPoolService');
        const country = document.getElementById('country_1');
        const numberPrice = document.getElementById('numberPrice');
        const availableNumbers = document.getElementById('availableNumbers');
        const smsPoolPrice = document.getElementById('sms_pool_price');
        const purchaseButton = document.getElementById('purchaseButton');

        let fetchTimeout;

        function fetchPriceAndAvailability() {
            clearTimeout(fetchTimeout);
            fetchTimeout = setTimeout(() => {
                fetch('/user/order/check-price', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        service: service.value,
                        country: country.value
                    })
                }).then(response => response.json()).then(data => {
                    numberPrice.innerHTML = data.price;
                    smsPoolPrice.value = data.price;

                    const price = data.price;
                    const balance = {{ $balance }};
                    const currentPrice = parseFloat(price);

                    if (currentPrice > balance) {
                        purchaseButton.disabled = true;
                        purchaseButton.textContent = 'Insufficient Funds';
                    } else {
                        purchaseButton.disabled = false;
                        purchaseButton.textContent = 'Order Now';
                    }
                });

                fetch('/user/order/check-available-number', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        service: service.value,
                        country: country.value
                    })
                }).then(response => response.json()).then(data => {
                    availableNumbers.innerHTML = data.availableNumbers;

                    if (data.availableNumbers == 0) {
                        purchaseButton.disabled = true;
                        purchaseButton.textContent = 'Out of stock';
                    } else {
                        purchaseButton.disabled = false;
                        purchaseButton.textContent = 'Order Now';
                    }
                });
            }, 300); // 300ms delay
        }

        country.addEventListener('change', fetchPriceAndAvailability);
        service.addEventListener('change', fetchPriceAndAvailability);
    </script>

    <script>
        $(document).ready(function() {
            $('#smsPoolService').select2({
                placeholder: 'Search or select a service',
                allowClear: true,
                width: '100%'
            }).on('change', async function() {
                fetchPriceAndAvailability();
            });

            $('#country_1').select2({
                placeholder: 'Search or select a country',
                allowClear: true,
                width: '100%'
            }).on('change', function() {
                fetchPriceAndAvailability();
            });

            $('#service').select2({
                placeholder: 'Search or select a service',
                allowClear: true,
                width: '100%'
            })
        });
    </script>
</x-user-layout>
