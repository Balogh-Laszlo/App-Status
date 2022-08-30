@props(['type'])

@if(isset($type))
    @if($type == 'warning')
        <img src="/images/warning-sign.png" class="w-5 h-5 mx-auto">
    @else
        <img src="/images/error-sign.png" class="w-5 h-5 mx-auto">
    @endif
@endif
