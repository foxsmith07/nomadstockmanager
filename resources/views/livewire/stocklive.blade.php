<div>
    <div class="w-full flex justify-between mb-10 my-5 px-5">
        <input type="text" wire:model.live="search" placeholder="Search item... name, description or position" 
                class="bg-white outline-2 outline-black hover:outline-2 hover:outline-orange-600 focus:outline-2 focus:outline-orange-600 rounded-md p-2 w-[400px]">

        <a href="" class="btn rounded-full p-3 bg-transparent text-black border-2 border-black hover:bg-[#ff5e48] hover:text-white hover:border-[#ff5e48]">
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
                    <tr class="hover:bg-slate-200">
                        <td>{{$item->name}}</td>
                        <td>{{$item->description}}</td>
                        <td class="text-center">{{$item->quantity}}</td>
                        <td class="text-center">{{$item->position}}</td>
                        <td class="text-center">{{$item->created_at}}</td>
                        <td class="text-center">
                            <a href="{{route('stock.show',compact('item'))}}" class="btn btn-sm rounded-full p-4 border-black text-black hover:bg-[#ff5e48] hover:text-white hover:border-[#ff5e48]">
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
