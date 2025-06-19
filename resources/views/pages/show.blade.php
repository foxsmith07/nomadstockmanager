<x-layout>
    <a href="{{route('stock.index')}}" class="btn btn-sm btn-outline border-slate-500 text-slate-500">
        <i class="fa-regular fa-circle-left me-1 text-2xl"></i> 
        <span class="text-lg">back</span>
    </a>
    <div class="w-[70%] flex mx-auto gap-10">
        
        <div class=" w-1/2 flex justify-end">
            <img src="{{asset('asset/box_opened.webp')}}" class=" w-full" alt="">
        </div>

        <div class="w-1/2 flex flex-col px-3 h-[650px]">
            <h1>{{strtoupper($item->name)}}</h1>

            <div class="flex flex-col justify-between h-full">
                <div class="flex w-full justify-between">
                    <p><span class="font-bold text-6xl">{{$item->quantity_stock}}</span> pieces</p>
                    <form action="">
                        <button class="btn btn-sm bg-sky-500 text-white hover:bg-sky-700">Order now</button>
                    </form>
                </div>

                <div class="my-5">
                    <label for="" >Description:</label>
                    <p>{{$item->description ? $item->description : 'No Description insered'}}</p>
                </div>

                <div class="h-[200px] flex flex-col justify-between">
                    <p>Position: <span class="text-xl font-bold">{{strtoupper($item->position)}}</span></p>
                    <div class="grid grid-cols-2 gap-10">
                        <p class="col-span-1"><span class="font-semibold">created at: </span> {{$item->created_at->format('d M Y - H:i')}}</p>
                        <p class="col-span-1"><span class="font-semibold">last update: </span> {{$item->updated_at->format('d M Y - H:i')}}</p>

                    </div>
        
                    <div class="grid gap-10 grid-cols-2">
                        <div class="col-span-1 flex flex-col border-2 rounded-md p-3 border-yellow-500">
                            <h4 class="font-bold text-yellow-500 mb-3">Ordered...</h4>
                            <p>Quantity order: {{$item->quantity_ordered}}</p>
                            <p>Data ordered: {{$item->data_ordered == null ? '' : $item->data_ordered->format('d M Y')}}</p>
                        </div>
                        <div class="col-span-1 flex flex-col border-2 rounded-md p-3 border-sky-500">
                            <h4 class="font-bold text-sky-500 mb-3">Shipped...</h4>
                            <p>Quantity shipped: {{$item->quantity_shipped}}</p>
                            <p>Data shipped: {{$item->data_shipped == null ? '' : $item->data_shipped->format('d M Y')}}</p>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>

</x-layout>