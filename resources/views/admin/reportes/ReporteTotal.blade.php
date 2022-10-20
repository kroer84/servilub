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
    <table class="table table-responsive table-bordered text-center align-middle">
        {{-- <tr>
            <th class="text-start" colspan="10">
                Plan de control de mantenimiento para mangeras hidráulicos assemblados
            </th>
        </tr>
        <tr>
            <th>
                TK - No de maq.:
            </th>
            <th class="text-start" colspan="3">
                {{ $dato->maquina->no_maq }}
            </th>
        </tr>
        <tr>
            <th>
                TK - Des de maq:
            </th>
            <th class="text-start" colspan="3">
                {{ $dato->maquina->des_maq }}
            </th>
        </tr> --}}
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
            <th rowspan="2">Precio</th>

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
                <td class="text-center">{{ \Carbon\Carbon::parse($dato->instalacion)->format('d/m/Y') }}</td>
                <td class="text-center">{{ $dato->manguera->manguera}}</td>
                <td class="text-center">{{ $dato->manguera->fitting1 }}</td>
                <td class="text-center">{{ $dato->manguera->fitting2 }}</td>
                <td class="text-center">{{ $dato->manguera->longitud }}</td>
                <td class="text-center">{{ $dato->manguera->presion }}</td>
                <td class="text-center">{{ $dato->manguera->proteccion }}</td>
                <td class="text-center">{{ $dato->chequeo }}</td>
                <td class="text-center">{{ $dato->cambio }}</td>
                <td class="text-center">{{
                    \Carbon\Carbon::parse($dato->instalacion)->addYears($dato->cambio)->format('m/Y')}}</td>
                <td class="text-center">{{
                    \Carbon\Carbon::parse($dato->instalacion)->addYears($dato->chequeo)->DiffForHumans(Carbon\Carbon::now())
                    }}</td>
                <td class="text-center"> </td>
                <td class="text-center">{{ $dato->nota }}</td>
                <td class="text-center">${{ number_format($dato->precio, 2) }}</td>
            </tr>
            @empty
            <li>No hay Maquinas registradas.</li>
            @endforelse
    </table>

</body>
</html>
