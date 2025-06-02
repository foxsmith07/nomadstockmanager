<x-layout>

    <div class="z-0">
        <div class="card bg-base-100 image-full w-full h-[300px] rounded-none">
            <figure>
                <img src="{{asset('asset/warehouse.jpg')}}" alt="warehouse" class="w-full" />
            </figure>
            <div class="card-body">
                <h1 class="card-title" style="font-size: 100px; padding: 0; margin: 0;">Stock</h1>
                <p class="text-xl">All items in our stock</p>
            </div>
        </div>
    </div>

    <div class="w-full flex justify-around mb-10 my-5">
        <input type="text" placeholder="Search item..." class="bg-white rounded-md p-2 w-[400px]">

        <a href="" class="btn border-none p-3 bg-blue-500 text-white hover:bg-blue-700">
            <i class="fa-solid fa-circle-plus text-2xl me-2"></i>
            <span class="text-lg">Add Item</span>
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="table table-zebra">
            <!-- head -->
            <thead>
                <tr class="bg-slate-400">
                    <th>Name</th>
                    <th>Description</th>
                    <th class="w-[90px]">Quantity</th>
                    <th class="w-[90px]">Position</th>
                    <th class="text-center">Created at</th>
                    <th class="text-center">Details</th>
                </tr>
            </thead>
            <tbody>

                @forelse ($stock as $item)
                    <tr>
                        <td>{{$item->name}}</td>
                        <td>{{$item->description}}</td>
                        <td class="text-center">{{$item->quantity}}</td>
                        <td class="text-center">{{$item->position}}</td>
                        <td class="text-center">{{$item->created_at}}</td>
                        <td class="text-center">
                            <a href="{{route('stock.show',compact('item'))}}" class="btn btn-sm border-none text-white bg-sky-500">
                                <i class="fa-solid fa-circle-info me-1 text-lg"></i>
                                <span>info</span>
                            </a>
                        </td>
                    </tr>
                    
                @empty
                    <tr>
                        <td colspan="100%" class="text-red-500 font-bold text-center text-2xl">No item insert</td>
                    </tr>
                @endforelse
                
                
            </tbody>
        </table>
    </div>

</x-layout>
