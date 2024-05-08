<div class="flex justify-between w-full  bg-white  shadow-md border-slate-200 " id="navbar">
    <div class=" text-xl text-slate-600 p-3 font-semibold">
        MONITORING POWERMETER
    </div>
    <div class=" w-1/2">
        <div class="h-full py-2 w-full px-10">
            <input type="text" class="h-full w-full border-2 border-slate-400 rounded-xl text-slate-700 px-2">

        </div>
    </div>
    <div class="flex items-center h-full">
        <x-navbar-content route="home" name="Realtime" />
        <x-navbar-content route="history.index" name="History" />
        <x-navbar-content route="history.index" name="Control" />
        <x-navbar-content route="history.index" name="LogOut" />
    </div>
</div>
