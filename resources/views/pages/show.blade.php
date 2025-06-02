<x-layout>
    <a href="{{route('stock.index')}}" class="btn btn-sm btn-outline border-slate-500 text-slate-500">
        <i class="fa-regular fa-circle-left me-1 text-2xl"></i> 
        <span class="text-lg">back</span>
    </a>
    <div class="w-[70%] flex mx-auto gap-10">
        
        <div class=" w-1/2 flex justify-end">
            <img src="{{asset('asset/box_opened.webp')}}" class=" w-full" alt="">
        </div>

        <div class="w-1/2 flex flex-col px-3-200">
            <h1>{{$item->name}}</h1>
            <div class="flex w-full justify-between">
                <p><span class="font-bold text-6xl">{{$item->quantity}}</span> pieces</p>
                <form action="">
                    <button class="btn btn-sm bg-sky-500 text-white hover:bg-sky-700">Order now</button>
                </form>
            </div>

            <div class="my-5">
                <label for="" >Description:</label>
                <p>{{$item->description}}</p>
            </div>
            <p>created at: {{$item->created_at}}</p>
            <p>Position: {{$item->position}}</p>


        </div>
    </div>

</x-layout>