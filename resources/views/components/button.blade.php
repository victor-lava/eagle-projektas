<!-- href, tekstas turi buti kintamasis -->
{{-- Ternary if/else (sutrumpintas blade if/else) --}}
<a href="{{ isset($href) ? $href : '#' }}"
   class="btn btn-dark btn-rounded">
   {{ $slot }}
</a>
