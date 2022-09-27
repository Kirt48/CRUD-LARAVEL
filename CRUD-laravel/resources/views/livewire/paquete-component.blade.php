<div>
    <div class="row">
        <div class="col-md-9">
            <div class="mt-2 table-responsive-md">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Destino</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Lugar de encuentro</th>
                            <th scope="col">Fecha de partida</th>
                            <th scope="col">Fecha de regreso</th>
                            <th scope="col">Cupos</th>
                            <th scope="col">Precio por adulto</th>
                            <th scope="col">Precio por niño</th>
                            <th scope="col">Accion</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($paquetes as $paquete)
                            <tr>
                                <td>{{ $paquete->id }}</td>
                                <td>{{ $paquete->nombre }}</td>
                                <td>{{ $paquete->destino }}</td>
                                <td>{{ $paquete->descripcion }}</td>
                                <td>{{ $paquete->lugarEncuentro }} </td>
                                <td>{{ $paquete->fechaPartida }}</td>
                                <td>{{ $paquete->fechaRegreso }}</td>
                                <td>{{ $paquete->cupos }}</td>
                                <td>{{ $paquete->precioAdulto }}</td>
                                <td>{{ $paquete->precioNino }}</td>
                                <td>
                                    <button type="button" class="btn btn-success"
                                        wire:click='editPaquete({{ $paquete->id }})'>Editar</button>
                                </td>

                                <td>
                                    <button type="button" class="btn btn-danger"
                                        wire:click='destroy({{ $paquete->id }})'>Borrar</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $paquetes->links('pagination::Bootstrap-4') }}
            </div>
        </div>
        <div class="col-md-3">
            <div class="container-fluid">
                @include("livewire.$viewPaquete");
            </div>
        </div>
    </div>
</div>