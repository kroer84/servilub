<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ mix('css/admin.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body>
    <div class="table-responsive mt-3">
        <table class="table table-bordered text-center align-middle">

            <tr>
                <th rowspan="2">BMK</th>
                <th colspan="2">Módulo</th>
                <th colspan="1">Fecha</th>
                <th colspan="4">Tipo y asamblea</th>
                <th colspan="1">Presión máxima</th>
                <th colspan="1">Proteccion</th>
                <th colspan="2">Intervalo</th>
                <th colspan="1">Prox.cambio</th>
                <th colspan="1">Verificacion</th>
                <th colspan="1">Firma</th>
                <th rowspan="2">Anotación</th>


            </tr>
            <tr>

                <th scope="col">[No.]</th>
                <th scope="col">[Descripcion]</th>
                <th scope="col">[Fecha Istalacion:]</th>
                <th scope="col">Manguera</th>
                <th scope="col">1.Fitting</th>
                <th scope="col">2.Fitting</th>
                <th scope="col">Longitud [mm]</th>
                <th scope="col">[bar]</th>
                <th scope="col">si/no</th>
                <th scope="col">Check[año]</th>
                <th scope="col">Cambio[año]</th>
                <th scope="col">[mes/año]</th>
                <th scope="col">[fecha]</th>
                <th scope="col">[nombre]</th>
            </tr>
                <tbody>
            @forelse($datos as $dato)
            <tr>
                <td class="text-center">{{ $dato->identificador }}</td>
                <td class="text-center"> </td>
                <td class="text-center">{{ $dato->manguera->descripcion }}</td>
                {{-- <td class="text-center">{{ $dato->instalacion }}</td> --}}
                @if ($dato->instalacion != null)
                <td class="text-center">{{ \Carbon\Carbon::parse($dato->instalacion)->format('d/m/Y') }}
                </td>
                @else
                <td></td>
                @endif
                <td class="text-center">{{ $dato->manguera->manguera}}</td>
                <td class="text-center">{{ $dato->manguera->fitting1 }}</td>
                <td class="text-center">{{ $dato->manguera->fitting2 }}</td>
                <td class="text-center">{{ $dato->manguera->longitud }}</td>
                <td class="text-center">{{ $dato->manguera->presion }}</td>
                <td class="text-center">{{ $dato->manguera->proteccion }}</td>
                <td class="text-center">{{ $dato->chequeo }}</td>

                @if ($dato->instalacion != null)

                @if(\Carbon\Carbon::parse($dato->fechaCambio)->lte(Carbon\Carbon::now()))
                    <td class="text-center alert alert-danger bg-danger bg-opacity-25">
                        {{ \Carbon\Carbon::parse($dato->instalacion)->addYears($dato->cambio)->format('Y')}}
                    </td>
                @elseif(\Carbon\Carbon::parse($dato->fechaCambio)->lte(Carbon\Carbon::now()->addYear(1)))
                    <td class="text-center bg-warning bg-opacity-25">
                        {{ \Carbon\Carbon::parse($dato->instalacion)->addYears($dato->cambio)->format('Y')}}
                    </td>
                @else
                    <td class="text-center bg-success bg-opacity-25">
                        {{ \Carbon\Carbon::parse($dato->instalacion)->addYears($dato->cambio)->format('Y')}}
                    </td>
                @endif

                @if(\Carbon\Carbon::parse($dato->fechaCambio)->lte(Carbon\Carbon::now()))
                    <td class="text-center alert alert-danger bg-danger bg-opacity-25">
                        {{ \Carbon\Carbon::parse($dato->instalacion)->addYears($dato->cambio)->isoFormat('MMMM/Y')}}
                    </td>
                @elseif(\Carbon\Carbon::parse($dato->fechaCambio)->lte(Carbon\Carbon::now()->addYear(1)))
                    <td class="text-center bg-warning bg-opacity-25">
                        {{ \Carbon\Carbon::parse($dato->instalacion)->addYears($dato->cambio)->isoFormat('MMMM/Y')}}
                    </td>
                @else
                    <td class="text-center bg-success bg-opacity-25">
                        {{ \Carbon\Carbon::parse($dato->instalacion)->addYears($dato->cambio)->isoFormat('MMMM/Y')}}
                    </td>
                @endif

            @else
                <td></td>
                <td></td>
            @endif



                <td class="text-center"> </td>
                <td class="text-center"> </td>
                <td class="text-center">{{ $dato->nota }}</td>

            </tr>
            @empty
            <li>No hay Maquinas registradas.</li>
            @endforelse
        </table>

</body>
</html>
