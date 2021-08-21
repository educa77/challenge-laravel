@extends('layouts.app')

@section('content')
<div class="container">
    <div class="home-title Text-Style-6">
        <h1 className='page-title'>
            Descubrí todos los modelos
        </h1>
    </div>

        @include('filter')
        @include('models')

</div>
@endsection
