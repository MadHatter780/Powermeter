<div id="{{ $idCard }}" class="w-full  bg-gradient-to-br rounded-md {{ $c1 }} {{ $c2 }} p-2">
    <div class="pb-1 text-sm font-semibold text-white">
        {{ $title }}
    </div>
    <div class="flex items-center">
        <div class="relative flex justify-between w-full px-8 font-thin">
            <div class="flex">
                <div class="text-sm xl:text-3xl lg:text-xl text-white">
                    {{ $value }}
                </div>
            </div>
            <div class="absolute bottom-0 right-0 px-2 text-white">
                {{ $satuan }}
            </div>
        </div>

    </div>

</div>
