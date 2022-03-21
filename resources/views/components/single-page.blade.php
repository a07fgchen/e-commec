{{-- {{ dd($attributes) }} --}}

<div 
{{ $attributes->merge([
    'class' => "container mx-auto bg-$type-700",
]) }}
>
    <!-- Nothing worth having comes easy. - Theodore Roosevelt -->
    {{ $slot }}
</div>
