<x-layout>
    <h1>Dashboard</h1>

    {{-- ? WIDGET --}}
    <header class="grid grid-cols-4 gap-20">

        <x-widget color='bg-blue-400' count='3' text='Total items' icon='fa-solid fa-barcode' />
        <x-widget color='bg-red-400' count='3' text='Esauriti' icon='fa-solid fa-triangle-exclamation' />
        <x-widget color='bg-yellow-400' count='3' text='Ordinati' icon='fa-solid fa-cart-arrow-down' />
        <x-widget color='bg-indigo-400' count='3' text='In arrivo' icon='fa-solid fa-truck-fast' />

    </header>


    <h2 class="text-3xl mt-[80px] mb-5 text-center">Last 5 movement..</h2>

    <div class="overflow-x-auto">
        <table class="table table-zebra">
            <!-- head -->
            <thead>
                <tr class="bg-[#ff5e48] text-white">
                    <th>Last modification</th>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Details</th>
                </tr>
            </thead>
            <tbody>

                @forelse ($last_movement as $item)
                    <tr class="hover:bg-slate-200">
                        <th>{{$item->updated_at}}</th>
                        <td>{{$item->name}}</td>
                        <td>{{$item->quantity}}</td>
                        <td>
                            <a href="{{route('stock.show', compact('item'))}}" class="btn btn-sm rounded-full p-4 border-none text-white bg-sky-500">
                                <i class="fa-solid fa-circle-info me-1 text-lg"></i>
                                <span>info</span>
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="100%" class="text-red-500">No Item insert</td>
                    </tr>
                @endforelse

            </tbody>
        </table>
    </div>
</x-layout>
