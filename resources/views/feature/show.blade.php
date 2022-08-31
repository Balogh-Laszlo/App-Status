@php use Carbon\Carbon; @endphp
<x-layout>
    <div class="m-6">
        <h1 class="text-center text-blue-500 font-semibold text-xl py-6">
            {{$feature->title}}
        </h1>
        <p class="text-center text-gray-400 pt-6">
            {{$feature->description}}
        </p>
    </div>
    <div class="container flex justify-center">
        <div class="flex flex-col">
            <div class="w-full">
                <div class="border-b border-gray-300 shadow">
                    <table class="divide-y divide-gray-300 table-auto">
                        <thead class="bg-gray-200">
                        <tr>
                            <th class="px-6 py-2 text-xs text-gray-900">
                                Status
                            </th>
                            <th class="px-6 py-2 text-xs text-gray-900">
                                Description
                            </th>
                            <th class="px-6 py-2 text-xs text-gray-900">
                                Occurred at
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-gray-100 divide-y divide-gray-300">
                        @foreach($errors as $error)
                            <tr class="whitespace-nowrap">
                                <td class="px-6 py-4 text-sm text-blue-400 font-semibold">
                                    {{--                                Status corresponding symbol--}}
                                    @if($error->status == 2)
                                        <img src="/images/warning-sign.png" class="w-6 h-6">
                                    @elseif($error->status == 3)
                                        <img src="/images/error-sign.png" class="w-16 h-16">
                                    @endif
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-400">
                                        {{$error->description}}
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-blue-400">
                                        {{Carbon::createFromFormat('Y-m-d H:i:s',$error->occurred_at)->diffForHumans()}}
                                    </div>
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
