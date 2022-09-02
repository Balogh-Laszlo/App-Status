@php use Carbon\Carbon; @endphp
@inject('provider','App\Http\Controllers\ErrorController')
<x-layout>
    <div class="mx-16 my-6">
        <h1 class="text-blue-500 font-bold text-center">{{$app->title}}</h1>
        <p class="text-center text-gray-400 pt-6">
            {{$app->description}}
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
                                Feature
                            </th>
                            <th class="px-6 py-2 text-xs text-gray-900">
                                {{Carbon::now()->subDays(5)->toFormattedDateString()}}
                            </th>
                            <th class="px-6 py-2 text-xs text-gray-900">
                                {{Carbon::now()->subDays(4)->toFormattedDateString()}}
                            </th>
                            <th class="px-6 py-2 text-xs text-gray-900">
                                {{Carbon::now()->subDays(3)->toFormattedDateString()}}
                            </th>
                            <th class="px-6 py-2 text-xs text-gray-900">
                                {{Carbon::now()->subDays(2)->toFormattedDateString()}}
                            </th>
                            <th class="px-6 py-2 text-xs text-gray-900">
                                {{Carbon::now()->subDays(1)->toFormattedDateString()}}
                            </th>
                            <th class="px-6 py-2 text-xs text-blue-400">
                                {{Carbon::now()->toFormattedDateString()}}
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-gray-100 divide-y divide-gray-300">
                        @foreach($features as $feature)
                            @php
                                //                                $errors = $feature->errors->relevant();
                                                                $errors = $provider->latestErrors($feature);
                                                                $stats_error = [1 => false, 2 => false, 3 => false, 4 => false, 5 => false];
                                                                $stats_warning = [1 => false, 2 => false, 3 => false, 4 => false, 5 => false];

                                                                if ($errors->count()) {

                                                                    foreach ($errors as $error) {

                                                                //                                       calc how many days before was occurred
                                                                    $days_before = Carbon::now()->diffInDays(Carbon::createFromFormat('Y-m-d H:i:s', $error->occurred_at));
                                                                    if ($days_before > 0 && $days_before < 6) {
                                                                //                                        if it's a warning
                                                                    if ($error->status == 2) {
                                                                        $stats_warning[$days_before] = true;
                                                                    } //                                        if it's an error
                                                                    elseif ($error->status == 3) {
                                                                        $stats_error[$days_before] = true;
                                                                    }
                                                                //                                        anything else doesn't matter

                                                                        }
                                                                    }
                                                                }
                            @endphp

                            <tr class="whitespace-nowrap">
                                <td class="px-6 py-4 text-sm text-blue-400 font-semibold">
                                    <a href="/features/{{$feature->id}}">
                                        {{$feature->title}}
                                    </a>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900">
                                        @if($stats_warning[5])
                                            <x-status-sign :type="'warning'"></x-status-sign>
                                        @endif
                                        @if($stats_error[5])
                                            <x-status-sign :type="'error'"></x-status-sign>
                                        @endif
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900">
                                        @if($stats_warning[4])
                                            <x-status-sign :type="'warning'"></x-status-sign>
                                        @endif
                                        @if($stats_error[4])
                                            <x-status-sign :type="'error'"></x-status-sign>
                                        @endif
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900">
                                        @if($stats_warning[3])
                                            <x-status-sign :type="'warning'"></x-status-sign>
                                        @endif
                                        @if($stats_error[3])
                                            <x-status-sign :type="'error'"></x-status-sign>
                                        @endif
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#">
                                        @if($stats_warning[2])
                                            <x-status-sign :type="'warning'"></x-status-sign>
                                        @endif
                                        @if($stats_error[2])
                                            <x-status-sign :type="'error'"></x-status-sign>
                                        @endif
                                    </a>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-500">
                                    <a href="#">
                                        @if($stats_warning[1])
                                            <x-status-sign :type="'warning'"></x-status-sign>
                                        @endif
                                        @if($stats_error[1])
                                            <x-status-sign :type="'error'"></x-status-sign>
                                        @endif

                                    </a>
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#">
                                        @if($feature->status == 1)
                                            <img src="/images/success-sign.png" class="w-5 h-5 mx-auto">
                                        @elseif($feature->status == 2)
                                            <img src="/images/warning-sign.png" class="w-5 h-5 mx-auto">
                                        @else
                                            <img src="/images/error-sign.png" class="w-5 h-5 mx-auto">
                                        @endif
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        @admin
                        <tr class="whitespace-nowrap">
                            <td class="px-6 py-4 text-sm text-blue-400 font-semibold">
                                <a href="/admin/feature/create/{{$app->id}}">
                                    +ADD FEATURE+
                                </a>
                            </td>
                            <td class="px-6 py-4">

                            </td>
                            <td class="px-6 py-4">

                            </td>
                            <td class="px-6 py-4">

                            </td>
                            <td class="px-6 py-4">

                            </td>
                            <td class="px-6 py-4">

                            </td>
                            <td class="px-6 py-4">

                            </td>
                        </tr>
                        @endadmin
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</x-layout>
