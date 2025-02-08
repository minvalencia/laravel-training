@props(['type' => 'button', 'color' => 'primary'])
<button type="{{ $type }}" class="mb-1 mt-1 me-1 btn btn-{{ $color }}">{{ $slot }}</button>
