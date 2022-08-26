@php use Carbon\Carbon; @endphp
<x-layout>
    <div class="mx-16 my-6">
        <h1 class="text-white font-bold text-center">{{$app->title}}</h1>
    </div>
    <div class="container flex justify-center">
        <div class="flex flex-col">
            <div class="w-full">
                <div class="border-b border-black shadow">
                    <table class="divide-y divide-gray-700 ">
                        <thead class="bg-gray-700">
                        <tr>
                            <th class="px-6 py-2 text-xs text-gray-200">
                                Feature
                            </th>
                            <th class="px-6 py-2 text-xs text-gray-200">
                                {{Carbon::now()->subDays(3)->toFormattedDateString()}}
                            </th>
                            <th class="px-6 py-2 text-xs text-gray-200">
                                {{Carbon::now()->subDays(2)->toFormattedDateString()}}
                            </th>
                            <th class="px-6 py-2 text-xs text-gray-200">
                                {{Carbon::now()->subDays(1)->toFormattedDateString()}}
                            </th>
                            <th class="px-6 py-2 text-xs text-gray-200">
                                {{Carbon::now()->toFormattedDateString()}}
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-gray-500 divide-y divide-gray-300">
                        @foreach($app->features as $feature)
                        <tr class="whitespace-nowrap">
                            <td class="px-6 py-4 text-sm text-gray-200">
                                {{$feature->title}}
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">

                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-500"></div>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-500">

                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="px-4 py-1 text-sm text-blue-600 bg-blue-200 rounded-full"></a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-layout>
