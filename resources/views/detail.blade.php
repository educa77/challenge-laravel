@extends('layouts.app')

@section('detail')
<div>
    <div>
        <div class="container">
            @if ($details)
                <div class="detail-container__header">
                    <div class="detail-container__image">
                        <img class='img-fluid img-main' src="{{ $details[0]->image }}" alt='Imagen principal de '/>
                    </div>
                    <div class="detail-container__text">
                        <div class="detail-container__text__container">
                            <h2 class='model-title'>{{ $details[0]->name }}&nbsp{{ $details[0]->version }}</h2>
                            <h1 class='main-title'>{{ $details[0]->slogan }}</h1>
                            <p class='short-description'>
                                {{ $details[0]->description }}
                            </p>
                        </div>
                    </div>

                </div>
            @endif
        </div>
        <div class='details-content'>
            <div class='card-carousel border-0 bg-transparent detail-slide'>
                <div class="details-content__card">
                    <img class="img-fluid" src="/uploads/airbags_13ca340447.jpeg" alt=""/>
                    <h5 class='card-title'>Nuevos motores Toyota</h5>
                    <p>Dos alternativas diesel con turbo de geometría variable, 1GD (2.8 L) y 2GD (2.4 L).</p>
                </div>
                <div class="details-content__card">
                    <img class="img-fluid" src="/uploads/aclajes_2c73903a06.jpeg" alt=""/>
                    <h5 class='card-title'>Suspensión mejorada</h5>
                    <p>Dos alternativas diesel con turbo de geometría variable, 1GD (2.8 L) y 2GD (2.4 L).</p>
                </div>
                <div class="details-content__card">
                    <img class="img-fluid" src="/uploads/asietos_de_cuero_21f5798efe.jpeg" alt=""/>
                    <h5 class='card-title'>Transmisión automática</h5>
                    <p>Dos alternativas diesel con turbo de geometría variable, 1GD (2.8 L) y 2GD (2.4 L).</p>
                </div>
                <div class="details-content__card">
                    <img class="img-fluid" src="/uploads/caja_automatica_f0a99266ff.jpeg" alt=""/>
                    <h5 class='card-title'>Transmisión manual</h5>
                    <p>Dos alternativas diesel con turbo de geometría variable, 1GD (2.8 L) y 2GD (2.4 L).</p>
                </div>
                <div class="details-content__card">
                    <img class="img-fluid" src="/uploads/airbags_13ca340447.jpeg" alt=""/>
                    <h5 class='card-title'>Nuevos motores Toyota</h5>
                    <p>Dos alternativas diesel con turbo de geometría variable, 1GD (2.8 L) y 2GD (2.4 L).</p>
                </div>
                <div class="details-content__card">
                    <img class="img-fluid" src="/uploads/aclajes_2c73903a06.jpeg" alt=""/>
                    <h5 class='card-title'>Suspensión mejorada</h5>
                    <p>Dos alternativas diesel con turbo de geometría variable, 1GD (2.8 L) y 2GD (2.4 L).</p>
                </div>
                <div class="details-content__card">
                    <img class="img-fluid" src="/uploads/asietos_de_cuero_21f5798efe.jpeg" alt=""/>
                    <h5 class='card-title'>Transmisión automática</h5>
                    <p>Dos alternativas diesel con turbo de geometría variable, 1GD (2.8 L) y 2GD (2.4 L).</p>
                </div>
                <div class="details-content__card">
                    <img class="img-fluid" src="/uploads/caja_automatica_f0a99266ff.jpeg" alt=""/>
                    <h5 class='card-title'>Transmisión manual</h5>
                    <p>Dos alternativas diesel con turbo de geometría variable, 1GD (2.8 L) y 2GD (2.4 L).</p>
                </div>
                <div class="details-content__card">
                    <img class="img-fluid" src="/uploads/airbags_13ca340447.jpeg" alt=""/>
                    <h5 class='card-title'>Nuevos motores Toyota</h5>
                    <p>Dos alternativas diesel con turbo de geometría variable, 1GD (2.8 L) y 2GD (2.4 L).</p>
                </div>
                <div class="details-content__card">
                    <img class="img-fluid" src="/uploads/aclajes_2c73903a06.jpeg" alt=""/>
                    <h5 class='card-title'>Suspensión mejorada</h5>
                    <p>Dos alternativas diesel con turbo de geometría variable, 1GD (2.8 L) y 2GD (2.4 L).</p>
                </div>
                <div class="details-content__card">
                    <img class="img-fluid" src="/uploads/asietos_de_cuero_21f5798efe.jpeg" alt=""/>
                    <h5 class='card-title'>Transmisión automática</h5>
                    <p>Dos alternativas diesel con turbo de geometría variable, 1GD (2.8 L) y 2GD (2.4 L).</p>
                </div>
                <div class="details-content__card">
                    <img class="img-fluid" src="/uploads/caja_automatica_f0a99266ff.jpeg" alt=""/>
                    <h5 class='card-title'>Transmisión manual</h5>
                    <p>Dos alternativas diesel con turbo de geometría variable, 1GD (2.8 L) y 2GD (2.4 L).</p>
                </div>
            <div class='arrow-container'>
                <div class='arrow-container__left'>
                    <img class="arrow-img" src="/images/arrow-left.svg" alt=""/>
                </div>
                <div class='arrow-container__right'>
                    <img class="arrow-img" src="/images/arrow-right.svg" alt=""/>
                </div>    
            </div>
        </div>
    </div>
    <div class='container'>
        <div class='first'>
            <div class="first-container">
                <div class="first-container__text">
                        <h3 class='title'>Título de 20 px</h3>
                        <p class='description'>Texto lorem ipsum dolor sit amet orem ipsum dolor sit amet. lorem ipsum dolor sit amet orem ipsum dolor sit amet lorem ipsum dolor sit amet orem ipsum dolor sit amet.</p>
                </div>
            </div>
            <div class="first__image">
                <img src="/uploads/hilux_bloqueo_83189897d0.jpeg" class="img-fluid rounded" alt='Imagen de '/>
            </div>
        </div>

        <div class='first'>
            <div class="first__image">
                <img src="/uploads/hilux_asistente_1beac6240e.jpeg" class="img-fluid rounded" alt='Imagen de ' />
            </div> 
            <div class="first-container">
                <div class="first-container__text">
                    <h3 class='title'>Título de 20 px</h3>
                    <p class='description'>Texto lorem ipsum dolor sit amet orem ipsum dolor sit amet. lorem ipsum dolor sit amet orem ipsum dolor sit amet lorem ipsum dolor sit amet orem ipsum dolor sit amet.</p>
                </div>
            </div>
        </div>    
    </div>
</div>

@endsection