<x-layout>
    <div class="px-6">
        <h3 class="text-sm font-bold mt-3 border-b border-black border-opacity-5">
            Az App-Status állapot-jelző felülete
        </h3>
        <p class="text-gray-400 text-xs">Ezen az oldalon a(z) Google Workspace részeként működő szolgáltatásokkal
            kapcsolatos állapotinformációk láthatók. Az alábbi listán található szolgáltatások aktuális állapotának
            megtekintéséhez látogasson vissza ide. Ha itt nem szereplő problémát tapasztal, vegye fel a kapcsolatot az
            ügyfélszolgálattal. További tájékoztatás az irányítópulton közzétett információkról: GYIK. További
            információ ezekről a szolgáltatásokról: https://workspace.google.com/. A Google Analytics-eseményekhez
            látogasson el a Google Ads állapot-irányítópultra.</p>
    </div>
    <div class="px-6 py-6 bg-gray-300 rounded-xl mt-6 border border-black border-opacity-5">
    <ul>
        <x-app-list-item ></x-app-list-item>
        <x-app-list-item ></x-app-list-item>
        <x-app-list-item ></x-app-list-item>
        <x-app-list-item ></x-app-list-item>
        <x-app-list-item ></x-app-list-item>
    </ul>

    </div>
</x-layout>
