<x-layout>
    <div class="px-16 ">
        <h3 class="text-sm font-bold mt-3 border-b border-gray-300 text-blue-300">
            Az App-Status állapotjelző felülete
        </h3>
        <p class="text-xs text-gray-400">Ezen az oldalon a(z) Google Workspace részeként működő szolgáltatásokkal
            kapcsolatos állapotinformációk láthatók. Az alábbi listán található szolgáltatások aktuális állapotának
            megtekintéséhez látogasson vissza ide. Ha itt nem szereplő problémát tapasztal, vegye fel a kapcsolatot az
            ügyfélszolgálattal. További tájékoztatás az irányítópulton közzétett információkról: GYIK. További
            információ ezekről a szolgáltatásokról: https://workspace.google.com/. A Google Analytics-eseményekhez
            látogasson el a Google Ads állapot-irányítópultra.</p>
    </div>
    <div class="lg:grid lg:grid-cols-6 px-12 py-12">
        @foreach($apps as $app)
            <x-app-list-item :app="$app"
                             class="{{$loop->iteration < 3 ? 'col-span-3' : 'col-span-2'}}"
            ></x-app-list-item>
        @endforeach
    </div>
    <div class="m-16">
        {{$apps->links()}}
    </div>
</x-layout>
