<x-layout>
    <h1>Dashboard</h1>

    {{-- ? WIDGET --}}
    <header class="grid grid-cols-4 gap-20">

        <x-widget color='bg-blue-700' :count=$item_count text='Total items' icon='fa-solid fa-barcode' />
        <x-widget color='bg-red-400' :count=$esauriti_count text='Esauriti' icon='fa-solid fa-triangle-exclamation' />
        <x-widget color='bg-yellow-400' :count=$ordinati_count text='Ordinati' icon='fa-solid fa-cart-arrow-down' />
        <x-widget color='bg-sky-400' :count=$arrivo_count text='In arrivo' icon='fa-solid fa-truck-fast' />

    </header>

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
        <table class="table table-zebra table-xs esaurititb">
            <!-- head -->
            <thead>
                <tr class="bg-red-400! text-white">
                    <th></th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Quantity</th>
                    <th>Position</th>
                    <th class="text-center">Info</th>
                </tr>
            </thead>
            <tbody>
                
                @forelse ($esauriti as $item)
                    <tr class="odd:bg-red-200 even:bg-red-100 hover:bg-red-300">
                        <th>{{$loop->iteration}}</th>
                        <td>{{$item->name}}</td>
                        <td>{{$item->description}}</td>
                        <td>{{$item->quantity_stock}}</td>
                        <td>{{strtoupper($item->position)}}</td>
                        <td class="text-center">
                            <a href="" class="btn btn-sm rounded-full p-4 border-2 border-black text-black bg-transparent hover:bg-red-600 hover:border-red-600 hover:text-white">
                                <i class="fa-solid fa-circle-info me-1 text-lg"></i>
                                <span>info</span>
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <th colspan="100%" class="text-center">No expired Item</th>
                    </tr>
                @endforelse


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
        <table class="table table-zebra table-xs ordinatitb">
            <!-- head -->
            <thead>
                <tr class="bg-yellow-400! text-white">
                    <th></th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Quantity Ordered</th>
                    <th>Data Ordered</th>
                    <th class="text-center">Details</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($ordinati as $item)
                    <tr class="odd:bg-yellow-200 even:bg-yellow-100 hover:bg-yellow-300">
                        <th>{{$loop->iteration}}</th>
                        <td>{{$item->name}}</td>
                        <td>{{$item->description}}</td>
                        <td>{{$item->quantity_ordered}}</td>
                        <td>{{$item->data_ordered}}</td>
                        <td class="text-center">
                            <a href="" class="btn btn-sm rounded-full p-4 border-2 border-black text-black bg-transparent hover:bg-amber-400 hover:border-amber-400 hover:text-white">
                                <i class="fa-solid fa-circle-info me-1 text-lg"></i>
                                <span>info</span>
                            </a>
                        </td>
                    </tr>
                    
                @empty
                    <tr>
                        <th colspan="100%" class="text-center">No Item ordered</th>
                    </tr>
                @endforelse

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
        <table class="table table-zebra table-xs arrivotb">
            <!-- head -->
            <thead>
                <tr class="bg-sky-400! text-white">
                    <th></th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Quantity Shipped</th>
                    <th>Data Shipped</th>
                    <th class="text-center">Details</th>
                </tr>
            </thead>
            <tbody>

                @forelse ($arrivo as $item)
                    
                    <tr class="odd:bg-sky-200 even:bg-sky-100 hover:bg-sky-300">
                        <th>{{$loop->iteration}}</th>
                        <td>{{$item->name}}</td>
                        <td>{{$item->description}}</td>
                        <td>{{$item->quantity_shipped}}</td>
                        <td>{{$item->data_shipped}}</td>
                        <td class="text-center">
                            <a href="" class="btn btn-sm rounded-full p-4 border-2 border-black text-black bg-transparent hover:bg-sky-600 hover:border-sky-600 hover:text-white">
                                <i class="fa-solid fa-circle-info me-1 text-lg"></i>
                                <span>info</span>
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <th colspan="100%" class="text-center">No Item shipped</th>
                    </tr>                  
                @endforelse


            </tbody>
        </table>
    </div>

</x-layout>
