@include('layouts.header')

    <main class="container mx-auto p-4">

    <h1>Soy una vista</h1>

    {{-- handlebars o mustache --}}
    {{ $curso }}
    <hr class="my-3">

    {{-- directiva condicional --}}
    @if( $numero < 100 )
        es menor
    @else
        NO es menor
    @endif

    {{-- directiva de iteración --}}
    <ul>
    @foreach( $zeppelin as $integrante )
        <li>{{ $integrante }}</li>
    @endforeach
    </ul>

    <hr class="my-3">

    <x-boton href="https://www.Laravel.com">Laravel</x-boton>
    <x-boton href="https://www.Laracasts.com">Laracasts</x-boton>


    </main>

@include('layouts.footer')
