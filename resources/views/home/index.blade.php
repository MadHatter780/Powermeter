@extends('base.index')
@section('content')
    <div class="flex flex-col md:flex-row gap-y-3 md:gap-y-0 w-full mt-2 gap-x-2">
        <x-card-power title="Power Consumption Day" satuan="megaWh" value="40.01" idCard="daily" c1="from-[#EB1D36]"
            c2="to-[#FA9494]" />
        <x-card-power title="Power Consumption Week" satuan="megaWh" value="80.01" idCard="week" c1="from-[#008DDA]"
            c2="to-[#41C9E2]" />
        <x-card-power title="Power Consumption Month" satuan="megaWh" value="80.01" idCard="month" c1="from-[#87CBB9]"
            c2="to-[#B9EDDD]" />
        <x-card-power title="Power Consumption Month" satuan="megaWh" value="80.01" idCard="year" c1="from-[#FFC700]"
            c2="to-[#FFF455]" />
    </div>
    <div class="w-full mt-2 h-full">
        <div class="flex w-full px-1  flex-col md:flex-row gap-x-2 h-full">
            <x-chart-bar-card idChart="dailyBar" title="Power Consumption in Daily (July)" />
            <x-chart-bar-card idChart="monthBar" title="Power Consumption in Month" />
        </div>

    </div>
    <div class="flex  w-full h-full px-2 py-1 gap-x-2">

        <x-card-bottom color="text-white" title="Gauge Kwh"
            addition="relative bg-gradient-to-br rounded-md from-[#008DDA] to-[#97E7E1] align-middle" lebar="w-1/4">

            <div class="absolute">
                <div class="" id="chartGauge"></div>
            </div>
            <div class="absolute">
                <div class="" id="chartGauge2"></div>
                <div class="w-full border-2">
                </div>
                <div class="w-full flex text-white justify-center">
                    <div class="w-full text-center">
                        Value
                    </div>
                    <div class="w-full text-center">
                        Min
                    </div>
                    <div class="w-full text-center">
                        Max
                    </div>
                    <div class="w-full text-center">
                        Interval
                    </div>
                </div>
            </div>

        </x-card-bottom>
        <x-card-bottom title="Gauge Voltage" color="text-white"
            addition="relative bg-gradient-to-br rounded-md from-[#11999E] to-[#E4F9F5] align-middle" lebar="w-1/4">

            <div class="absolute">
                <div class="" id="chartGauge3"></div>
            </div>
            <div class="absolute">
                <div class="" id="chartGauge4"></div>
                <div class="w-full border-2">
                </div>
                <div class="w-full flex text-white justify-center">
                    <div class="w-full text-center">
                        <div class="">
                            Value
                        </div>
                        <div class="text-xl font-thin -mt-1" id="value2">
                            80
                        </div>
                    </div>
                    <div class="w-full text-center">
                        <div class="">
                            Min
                        </div>
                        <div class="text-xl font-thin -mt-1">
                            0
                        </div>
                    </div>
                    <div class="w-full text-center">
                        <div class="">
                            Max
                        </div>
                        <div class="text-xl font-thin -mt-1">
                            100
                        </div>
                    </div>
                    <div class="w-full text-center">
                        <div class="">
                            Interval
                        </div>
                        <div class="text-xl font-thin -mt-1">
                            15m
                        </div>
                    </div>
                </div>
            </div>

        </x-card-bottom>
        <x-card-bottom title="Line Chart" addition=" " color="text-slate-500" lebar="w-3/4">
            <canvas id="lineChart"></canvas>
        </x-card-bottom>

    </div>



    @push('js')
        <script src="{{ asset('js/monthBar.js') }}"></script>
        <script src="{{ asset('js/dailyBar.js') }}"></script>
        <script src="{{ asset('js/gauge.js') }}"></script>
        <script src="{{ asset('js/gaugeApex.js') }}"></script>
        <script src="{{ asset('js/realtimeLine.js') }}"></script>
    @endpush
@endsection
