<x-layout>
    <h1>Dashboard</h1>

    {{-- ? WIDGET --}}
    <header class="grid grid-cols-4 gap-10">

        <x-widget color='bg-blue-400' count='3' text='Total items' icon='fa-solid fa-barcode' />
        <x-widget color='bg-red-400' count='3' text='Esauriti' icon='fa-solid fa-triangle-exclamation' />
        <x-widget color='bg-yellow-400' count='3' text='Ordinati' icon='fa-solid fa-cart-arrow-down' />
        <x-widget color='bg-indigo-400' count='3' text='In arrivo' icon='fa-solid fa-truck-fast' />

    </header>


    <h2 class="text-3xl font-bold mt-[80px] mb-5">Recent Avtivity</h2>
    <div class="overflow-x-auto">
        <table class="table table-zebra">
            <!-- head -->
            <thead>
                <tr>
                    <th>Last modification</th>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Detsails</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <th>23 gen 2025 - 10.30</th>
                    <td>Braccio Console</td>
                    <td>12</td>
                    <td>
                        <a href="">
                            <i class="fa-solid fa-circle-info me-3 text-2xl text-blue-400"></i>
                            <span>info</span>
                        </a>
                    </td>
                <tr>
                    <th>23 gen 2025 - 10.30</th>
                    <td>Braccio Console</td>
                    <td>12</td>
                    <td>
                        <a href="">
                            <i class="fa-solid fa-circle-info me-3 text-2xl text-blue-400"></i>
                            <span>info</span>
                        </a>
                    </td>
                <tr>
                    <th>23 gen 2025 - 10.30</th>
                    <td>Braccio Console</td>
                    <td>12</td>
                    <td>
                        <a href="">
                            <i class="fa-solid fa-circle-info me-3 text-2xl text-blue-400"></i>
                            <span>info</span>
                        </a>
                    </td>
                </tr>
                <tr>
                    <th>23 gen 2025 - 10.30</th>
                    <td>Braccio Console</td>
                    <td>12</td>
                    <td>
                        <a href="">
                            <i class="fa-solid fa-circle-info me-3 text-2xl text-blue-400"></i>
                            <span>info</span>
                        </a>
                    </td>
                </tr>
                <tr>
                    <th>23 gen 2025 - 10.30</th>
                    <td>Braccio Console</td>
                    <td>12</td>
                    <td>
                        <a href="">
                            <i class="fa-solid fa-circle-info me-3 text-2xl text-blue-400"></i>
                            <span>info</span>
                        </a>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</x-layout>
