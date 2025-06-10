<div>
    <div class="w-full flex justify-between mb-10 my-5 px-5">
        <input type="text" wire:model.live="search" placeholder="Search item... name, description or position" class="bg-white outline-1 hover:outline-2 outline-orange-600 focus:outline-2 rounded-md p-2 w-[400px]">

        <a href="" class="btn rounded-full border-none p-3 bg-blue-500 text-white hover:bg-blue-700">
            <i class="fa-solid fa-circle-plus text-2xl me-2"></i>
            <span class="text-lg">Add Item</span>
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="table table-zebra">
            <!-- head -->
            <thead>
                <tr class="bg-[#ff5e48] text-white">
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
                            <a href="{{route('stock.show',compact('item'))}}" class="btn btn-sm rounded-full p-4 border-none text-white bg-sky-500">
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

</div>
