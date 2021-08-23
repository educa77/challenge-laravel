<div class='filter-nav'>
    <div class='desktop-filter'>
        <div>
            <span class='filter-title'>
                Filtrar por
            </span>
            <a  href="{{ route('home') }}" class='filter-badge-todos {{  request()->is('home') ? 'active' : '' }}'>
                Todos
            </a>
            <a key=1 href="{{ route('filter', 'Autos')}}" class='filter-badge-autos {{ (request()->is('home/Autos')) ? 'active' : '' }}'>
                Autos
            </a>
            <a key=2 href="{{ route('filter', 'Pickups y Comerciales') }}"class='filter-badge-pickups {{ (request()->is('home/Pickups*')) ? 'active' : '' }}'>
                Pickups y Comerciales
            </a>
            <a key=3 href="{{ route('filter', 'SUVs y Crossovers') }}"class='filter-badge-suvs {{ (request()->is('home/SUVs*')) ? 'active' : '' }} '>
                SUVs y Crossovers
            </a>
        </div>
{{--         <div>
        <span class='filter-title'>
            Filtrar por
        </span>
        <a  href="{{ route('home') }}" class='filter-badge-todos {{  request()->routeIs('home') ? 'active' : '' }}'>
            Todos
        </a>
        @if (count($segmentos) == 3)
            @foreach ($segmentos as $segmento)
                <a href="{{ route( 'filter', $segmento->segment ) }}" class='filter-badge'>
                {{ $segmento->segment }}
            @endforeach
        @endif
        </div> --}}
            <div class="dropdown">
                <div class="dropdown__order-image">
                    <a class="ml-auto" type="button" id="dropdownMenu">
                        Ordenar por
                        <img 
                        src="{{ url('images/fill-1.svg') }}" 
                        alt="Flecha dropdown"
                        class='Fill-1'{{-- + (state.dropdownToggled ? ' ' + s['active'] : '')}  --}}
                        >
                    </a>
                </div>
                @if (request()->routeIs('home'))

                <div class="dropdown__menu" >
                    <a class="dropdown__item {{  request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}" >Nada</a>
                    <a class="dropdown__item" href="{{ url("home?0=price&1=asc") }}">
                        De <b>menor</b> a <b>mayor</b> precio
                    </a>
                    <a class="dropdown__item" href="{{ url("home?0=price&1=desc") }}">
                        De <b>mayor</b> a <b>menor</b> precio
                    </a>
                    <a class="dropdown__item" href="{{ url("home?0=year&1=desc") }}">
                        Más <b>nuevos</b> primero
                    </a>
                    <a class="dropdown__item" href="{{ url("home?0=year&1=asc") }}">
                        Más <b>viejos</b> primero
                    </a>
                </div>
                @elseif (request()->routeIs('filter'))
                <div class="dropdown__menu" >
                    <a class="dropdown__item " href="{{ route('home') }}" >Nada</a>
                    <a class="dropdown__item" href="{{ url("home/$segmento?0=price&1=asc") }}">
                        De <b>menor</b> a <b>mayor</b> precio
                    </a>
                    <a class="dropdown__item" href="{{ url("home/$segmento?0=price&1=desc") }}">
                        De <b>mayor</b> a <b>menor</b> precio
                    </a>
                    <a class="dropdown__item" href="{{ url("home/$segmento?0=year&1=desc") }}">
                        Más <b>nuevos</b> primero
                    </a>
                    <a class="dropdown__item" href="{{ url("home/$segmento?0=year&1=asc") }}">
                        Más <b>viejos</b> primero
                    </a>
                </div>
                @endif               
            </div>
    </div>
</div>
