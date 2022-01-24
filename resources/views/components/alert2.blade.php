@props(['color'])
<div {{ $attributes->merge(['class' => "bg-$color border-l-4 border-$color-500 text-$color-700 p-4"]) }} role="alert">
  <p class="font-bold">{{ $title }}</p>
  <p>{{ $slot }}</p>
</div>

<div {{ $attributes->merge(['class' => "bg-$color-900 text-$color-100 font-bold rounded-t px-4 py-2"]) }}
  role="alert">
  <div>
    {{ $title }}
  </div>
  <div
    class="bg-{{ $color }}-100 border border-t-0 border-{{ $color }}-900 rounded-b px-4 py-3 text-{{ $color }}-900">
    <p>{{ $slot }}</p>
  </div>
</div>
