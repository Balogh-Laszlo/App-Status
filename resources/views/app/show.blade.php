@php use App\Constants\FeatureStatusEnum;use App\Http\Controllers\ErrorController;use Carbon\Carbon; @endphp
@inject('provider','App\Http\Controllers\ErrorController')
<x-layout>
    <div class="mx-16 my-6">
        <h1 class="text-blue-500 font-bold text-center">{{$app->title}}</h1>
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
                            <th class="px-6 py-2 text-xs text-green-400">
                                {{Carbon::now()->toFormattedDateString()}}
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-gray-200 divide-y divide-gray-300">
                        @foreach($app->features as $feature)
                                <?php
                                $errors = $provider->latestErrors($feature);
                                $stats_error = ['day_before' => false, '2_days_before' => false, '3_days_before' => false, '4_days_before' => false, '5_days_before' => false];
                                $stats_warning = ['day_before' => false, '2_days_before' => false, '3_days_before' => false, '4_days_before' => false, '5_days_before' => false];

                                ?>
                            {{$errors->first()}}

                            @foreach($errors as $error)

                                {{Carbon::now()->diffInDays(Carbon::createFromTimestamp($error['occurred_at']))}}
                            @endforeach
                            <tr class="whitespace-nowrap">
                                <td class="px-6 py-4 text-sm text-gray-900">
                                    {{$feature->title}}
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900">

                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900">

                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900">

                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#">
                                        <img src="/images/error-sign.png" class="w-5 h-5 mx-auto">
                                    </a>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-500">
                                    <a href="#">
                                        <img src="/images/warning-sign.png" class="w-5 h-5 mx-auto">
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
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</x-layout>
