<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\cliente;
use Livewire\WithPagination;

class ClienteComponent extends Component
{

    public $cliente_id, $nombre, $apellido, $documento, $telefono;
    public $viewCliente = 'createCliente';
    use WithPagination;

    public function render()
    {
        $clientes = cliente::orderBy('id', 'asc')->paginate(10);
        return view('livewire.cliente-component', compact('clientes'));
    }

    public function destroy($id){
        cliente::destroy($id);
        }

        public function saveCliente(){
            $this->validate([
            
            'nombre' => 'required',
            'apellido' => 'required',
            'documento' => 'required',
            'telefono' => 'required'
            
            ]);

            
            cliente::create([
            
            'nombre' => $this->nombre,
            'apellido' => $this->apellido,
            'documento' => $this->documento,
            'telefono' => $this->telefono
            
            ]);
            $this->reset();
            }

            
            public function editCliente($id){

                $cliente = cliente::find($id);
                $this->cliente_id = $cliente->id;
                $this->nombre = $cliente->nombre;
                $this->apellido = $cliente->apellido;
                $this->documento = $cliente->documento;
                $this->telefono = $cliente->telefono;
                $this->viewCliente = 'editCliente';
                }

                public function updateCliente(){
                    $this->validate([
                    'nombre' => 'required',
                    'apellido' => 'required',
                    'documento' => 'required',
                    'telefono' => 'required'
                    ]);
                    $cliente = cliente::find($this->cliente_id);
                    $cliente->update([
                    'nombre' => $this->nombre,
                    'apellido' => $this->apellido,
                    'documento' => $this->documento,
                    'telefono' => $this->telefono
                    ]);
                    $this->reset();
                    
                    }
}
