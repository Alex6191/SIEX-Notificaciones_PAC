<?php

namespace App\Http\Livewire;

use App\Models\Licencia;
use Livewire\Component;
use Livewire\WithPagination;

class Licencias extends Component
{
    use WithPagination;
    Public $modal=false;
    public $errores = [];
    public $idLicencia;
    public $codLicencia;
    public $fechaInicio;
    public $fechaFin;

    public function render()
    {
        $licencias = Licencia::paginate(10);

        return view('livewire.licencias.licencias',['licencias'=>$licencias]);
    }

    public function crear(){

        $this->errores = [];
        $this->idLicencia = '';
        $this->fechaInicio = '';
        $this->fechaFin = '';
        
        do{
            $this->codLicencia = $this->generateRandomString(4).'-'.$this->generateRandomString(4).'-'.$this->generateRandomString(4).'-'.$this->generateRandomString(4);

            $licencias = Licencia::where('codigo',$this->codLicencia)->get();
        }while($licencias->count()>0);
        
       
        $this->modal = true;
    }

    public function cerrar(){
        $this->modal = false;
    }

    public function generateRandomString($length = 10) {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }
        return $randomString;
      }

      public function guardar(){
       
        if (strtotime($this->fechaInicio)>strtotime($this->fechaFin)) {
            // code...
            array_push($this->errores,"La fecha de inicio no pude ser mayor a a la de fin");
          }else{

            if($this->idLicencia == ''){
                Licencia::updateOrCreate
                (['id'=>null],['codigo'=>$this->codLicencia,
                'fechaInicio' =>$this->fechaInicio,
                'fechaFin' =>$this->fechaFin]);

            }else{
                Licencia::where('id',intval($this->idLicencia))->update([
                    'fechaFin' =>$this->fechaFin,
                    'fechaInicio' =>$this->fechaInicio,
                  ]);
            }
            $this->modal=false;
          }
    }

    public function editar($id){
      $this->errores=[];
      $licencia=Licencia::where('id',$id)->first();
      $this->idLicencia=$id;
      $this->codLicencia=$licencia->codigo;
      $this->fechaInicio=date("Y-m-d",strtotime($licencia->fechaInicio));
      $this->fechaFin=date("Y-m-d",strtotime($licencia->fechaFin));

      $this->modal=true;
    }

}
