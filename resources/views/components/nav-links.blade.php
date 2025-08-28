@props(['active' => false])
@props(['type' => 'a'])

@if ($type === 'a')
    <a class="{{ $active ? 'bg-gray-900 text-white' : 'text-sm/6 font-semibold text-white'}}" {{ $attributes }}>{{ $slot}}</a>
@elseif ($type === 'button')
    <button class="text-white text-l bg-black" {{ $attributes }}>{{ $slot}}</button>
@endif