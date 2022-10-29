{{ QrCode::format('svg')->size(300)->color(0,0,0)->generate($dato->identificador, 'img/qrs/'.$dato->identificador.'.svg') }}

<div>
    <div>
        <center>

            <img src="{{ asset('img/qrs/'.$dato->identificador.'.svg') }}" alt="{{ $dato->identificador }}">
        </center>
    </div>
    <div>
        <center>
            <h1>
                {{ $dato->identificador }}
            </h1>
        </center>
    </div>
</div>


