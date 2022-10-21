{{ QrCode::format('svg')->size(300)->color(0,0,0)->generate($dato->identificador, 'img/qrs/'.$dato->identificador.'.svg') }}
<img src={{ asset('img/qrs/'.$dato->identificador.'.svg') }} alt="">
