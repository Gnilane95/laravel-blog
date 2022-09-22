@props([
    'title'
])
<div class="">
    <div class="bg-black text-white lg:text-lg md:text-3xl p-3">{{ $title }}</div>
    <div class="bg-white ">
        {{ $slot }}
    </div>
</div>