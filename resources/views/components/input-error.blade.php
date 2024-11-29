@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'text-sm text-red']) }}>
        @foreach ((array) $messages as $message)
            <span class="text-danger">{{ $message }}</span>
        @endforeach
    </ul>
@endif
