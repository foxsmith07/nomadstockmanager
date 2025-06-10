<x-layout>

    {{-- ? ESAURITI --}}

    <div class="flex justify-between mb-5 mt-20">
        <div class="flex items-center text-3xl">
            <i class="fa-solid fa-circle-exclamation me-3 text-red-500"></i>
            <h2 class="text-red-500 font-bold">Esauriti</h2>
        </div>
        <button class="btn rounded-full bg-red-400 text-white hover:bg-red-600">
            <i class="fa-solid fa-plus"></i>
            Ordina
        </button>
    </div>

    <div class="overflow-x-auto">
        <table class="table table-zebra">
            <!-- head -->
            <thead>
                <tr class="bg-red-400 text-white">
                    <th></th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Quantity</th>
                    <th>Position</th>
                    <th class="text-center">Info</th>
                </tr>
            </thead>
            <tbody>
                <!-- row 1 -->
                <tr class="bg-red-200">
                    <th>1</th>
                    <td>Access Point</td>
                    <td>Access point Westermo</td>
                    <td>0</td>
                    <td>A12</td>
                    <td class="text-center">
                        <a href="" class="btn btn-sm rounded-full p-4 border-none text-white bg-sky-500">
                            <i class="fa-solid fa-circle-info me-1 text-lg"></i>
                            <span>info</span>
                        </a>
                    </td>
                </tr>
                <!-- row 2 -->
                <tr class="bg-red-200">
                    <th>1</th>
                    <td>Access Point</td>
                    <td>Access point Westermo</td>
                    <td>0</td>
                    <td>A12</td>
                    <td class="text-center">
                        <a href="" class="btn btn-sm rounded-full p-4 border-none text-white bg-sky-500">
                            <i class="fa-solid fa-circle-info me-1 text-lg"></i>
                            <span>info</span>
                        </a>
                    </td>
                </tr>

                <tr class="bg-red-200">
                    <th>1</th>
                    <td>Access Point</td>
                    <td>Access point Westermo</td>
                    <td>0</td>
                    <td>A12</td>
                    <td class="text-center">
                        <a href="" class="btn btn-sm rounded-full p-4 border-none text-white bg-sky-500">
                            <i class="fa-solid fa-circle-info me-1 text-lg"></i>
                            <span>info</span>
                        </a>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>

    {{-- ? ORDINATI --}}

    <div class="flex justify-between mb-5 mt-20">
        <div class="flex items-center text-3xl">
            <i class="fa-solid fa-cart-plus me-3 text-yellow-500"></i>
            <h2 class="text-yellow-500 font-bold">Ordinati</h2>
        </div>
        <button class="btn rounded-full bg-yellow-400 text-white hover:bg-yellow-600">
            <i class="fa-solid fa-plus"></i>
            Aggiungi Ordine fatto
        </button>
    </div>

    <div class="overflow-x-auto">
        <table class="table table-zebra">
            <!-- head -->
            <thead>
                <tr class="bg-yellow-400 text-white">
                    <th></th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Quantity Ordered</th>
                    <th>Data Ordered</th>
                    <th class="text-center">Details</th>
                </tr>
            </thead>
            <tbody>
                <!-- row 1 -->
                <tr class="bg-yellow-200">
                    <th>1</th>
                    <td>DC Converter AP</td>
                    <td>Converter Access Point</td>
                    <td>13</td>
                    <td>10 mag 2025</td>
                    <td class="text-center">
                        <a href="" class="btn btn-sm rounded-full p-4 border-none text-white bg-sky-500">
                            <i class="fa-solid fa-circle-info me-1 text-lg"></i>
                            <span>info</span>
                        </a>
                    </td>
                </tr>
                <!-- row 2 -->
                <tr class="bg-yellow-200">
                    <th>1</th>
                    <td>DC Converter AP</td>
                    <td>Converter Access Point</td>
                    <td>13</td>
                    <td>10 mag 2025</td>
                    <td class="text-center">
                        <a href="" class="btn btn-sm rounded-full p-4 border-none text-white bg-sky-500">
                            <i class="fa-solid fa-circle-info me-1 text-lg"></i>
                            <span>info</span>
                        </a>
                    </td>
                </tr>

                <tr class="bg-yellow-200">
                    <th>1</th>
                    <td>DC Converter AP</td>
                    <td>Converter Access Point</td>
                    <td>13</td>
                    <td>10 mag 2025</td>
                    <td class="text-center">
                        <a href="" class="btn btn-sm rounded-full p-4 border-none text-white bg-sky-500">
                            <i class="fa-solid fa-circle-info me-1 text-lg"></i>
                            <span>info</span>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    {{-- ? IN ARRIVO  --}}

    <div class="flex justify-between mb-5 mt-20">
        <div class="flex items-center text-3xl">
            <i class="fa-solid fa-truck-fast me-3 text-sky-500"></i>
            <h2 class="text-sky-500 font-bold">Spediti</h2>
        </div>
        <button class="btn rounded-full bg-sky-400 text-white hover:bg-sky-600">
            <i class="fa-solid fa-plus"></i>
            Spedizione in arrivo
        </button>
    </div>

    <div class="overflow-x-auto">
        <table class="table table-zebra">
            <!-- head -->
            <thead>
                <tr class="bg-sky-400 text-white">
                    <th></th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Quantity Shipped</th>
                    <th>Data Shipped</th>
                    <th class="text-center">Details</th>
                </tr>
            </thead>
            <tbody>
                <!-- row 1 -->
                <tr class="bg-sky-200">
                    <th>1</th>
                    <td>Switch</td>
                    <td>Moxa Switch</td>
                    <td>23</td>
                    <td>15/06/2025</td>
                    <td class="text-center">
                        <a href="" class="btn btn-sm rounded-full p-4 border-none text-white bg-sky-500">
                            <i class="fa-solid fa-circle-info me-1 text-lg"></i>
                            <span>info</span>
                        </a>
                    </td>
                </tr>
                <!-- row 2 -->
                <tr class="bg-sky-200">
                    <th>1</th>
                    <td>Switch</td>
                    <td>Moxa Switch</td>
                    <td>23</td>
                    <td>15/06/2025</td>
                    <td class="text-center">
                        <a href="" class="btn btn-sm rounded-full p-4 border-none text-white bg-sky-500">
                            <i class="fa-solid fa-circle-info me-1 text-lg"></i>
                            <span>info</span>
                        </a>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>

</x-layout>
