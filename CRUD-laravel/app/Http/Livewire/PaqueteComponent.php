<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Paquete;
use Livewire\WithPagination;

class PaqueteComponent extends Component
{

    use WithPagination;

    public $paquete_id, $nombre, $destino, $descripcion, $lugarEncuentro, $fechaPartida, $fechaRegreso, $cupos, $precioAdulto, $precioNino;
    public $viewPaquete = 'createPaquete';

    public function render()
    {
        $paquetes = Paquete::orderBy('id', 'asc')->paginate(10);
        return view('livewire.paquete-component', compact('paquetes'));
    }

    public function destroy($id){
        Paquete::destroy($id);
    }

    public function savePaquete(){
        $this->validate([
        
        'nombre' => 'required',
        'destino' => 'required',
        'descripcion' => 'required',
        'lugarEncuentro' => 'required',
        'fechaPartida' => 'required',
        'fechaRegreso' => 'required',
        'cupos' => 'required',
        'precioAdulto' => 'required',
        'precioNino' => 'required'
        
        ]);
        Paquete::create([
        
        'nombre' =>  $this->nombre,
        'destino'  => $this->destino,
        'descripcion' => $this->descripcion,
        'lugarEncuentro' => $this->lugarEncuentro,
        'fechaPartida' => $this->fechaPartida,
        'fechaRegreso' => $this->fechaRegreso,
        'cupos' => $this->cupos,
        'precioAdulto' => $this->precioAdulto,
        'precioNino' => $this->precioNino
        
        
        ]);
        $this->reset();
        }


        public function editPaquete($id){

            $paquete = paquete::find($id);
            $this->paquete_id = $paquete->id;
            $this->nombre = $paquete->nombre;
            $this->destino = $paquete->destino;
            $this->descripcion = $paquete->descripcion;
            $this->lugarEncuentro = $paquete->lugarEncuentro;
            $this->fechaPartida = $paquete->fechaPartida;
            $this->fechaRegreso = $paquete->fechaRegreso;
            $this->cupos = $paquete->cupos;
            $this->precioAdulto = $paquete->precioAdulto;
            $this->precioNino = $paquete->precioNino;
            $this->viewPaquete = 'editPaquete';
            }

            public function updatePaquete(){
                $this->validate([
                    'nombre' => 'required',
                    'destino' => 'required',
                    'descripcion' => 'required',
                    'lugarEncuentro' => 'required',
                    'fechaPartida' => 'required',
                    'fechaRegreso' => 'required',
                    'cupos' => 'required',
                    'precioAdulto' => 'required',
                    'precioNino' => 'required'
                ]);
                $paquete = Paquete::find($this->paquete_id);
                $paquete->update([
                    'nombre' =>  $this->nombre,
                    'destino'  => $this->destino,
                    'descripcion' => $this->descripcion,
                    'lugarEncuentro' => $this->lugarEncuentro,
                    'fechaPartida' => $this->fechaPartida,
                    'fechaRegreso' => $this->fechaRegreso,
                    'cupos' => $this->cupos,
                    'precioAdulto' => $this->precioAdulto,
                    'precioNino' => $this->precioNino            
                ]);
                $this->reset();
                
                }


}
