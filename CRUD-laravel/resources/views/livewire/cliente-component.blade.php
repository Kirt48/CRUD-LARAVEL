<div>
    <div class="row">
        <div class="col-md-8">
            <div class="mt-2 table-responsive-md">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">apellido</th>
                            <th scope="col">documento</th>
                            <th scope="col">telefono</th>
                            <th scope="col">Acción</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>


                    <tbody>

                        @foreach ($clientes as $cliente)
                            <tr>
                                <td>{{ $cliente->id }}</td>
                                <td>{{ $cliente->nombre }}</td>
                                <td>{{ $cliente->apellido }}</td>
                                <td>{{ $cliente->documento }}</td>
                                <td>{{ $cliente->telefono }}</td>
                                <td>
                                    <button type="button" class="btn btn-success"
                                        wire:click='editCliente({{ $cliente->id }})'>Editar</button>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger"
                                        wire:click='destroy({{ $cliente->id }})'>Borrar</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $clientes->links('pagination::Bootstrap-4') }}
            </div>
        </div>
        <div class="col-md-4">
            <div class="container">
                @include("livewire.$viewCliente");
            </div>
        </div>
    </div>
</div>
