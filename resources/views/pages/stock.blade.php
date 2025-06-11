<x-layout>

    <div class="z-0">
        <div class="card bg-base-100 image-full w-full h-[300px] rounded-none">
            <figure>
                <img src="{{asset('asset/warehouse.jpg')}}" alt="warehouse" class="w-full" />
            </figure>
            <div class="card-body">
                <h1 class="card-title title2 text-[#ff5e48]" style="font-size: 100px; padding: 0; margin: 0;">Nola Warehouse</h1>
                <p class="text-xl title2">All items in Nola Office</p>
            </div>
        </div>
    </div>

    <livewire:Stocklive />

</x-layout>
