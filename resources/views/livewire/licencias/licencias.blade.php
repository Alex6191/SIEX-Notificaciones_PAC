<div class="py_12">
    <div class="max-w-7x1 mx-auto sm:px6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-x1 sm_rounded-lg px-4 py-4">
        @if($modal)
          @include('livewire.licencias.modal')
        @endif
        <button wire:click="crear()">Nuevo</button>
        <table class="table-fiex w-full">
          <thead>
          <tr>
              <th class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">Código</th>
              <th  scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">Fecha Inicio</th>
              <th  scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">Fecha Fin</th>
              <th  scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">Acciones</th>
          </tr>
          </thead>
          <tbody>
  
            @foreach ($licencias as $licencia)
  
              <tr>
  
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{$licencia->codigo}}</td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{$licencia->fechaInicio}}</td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{$licencia->fechaFin}}</td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap"><button wire:click="editar({{$licencia->id}})">Editar</button></td>

              </tr>
            @endforeach
          </tbody>
        </table>
        @if ($licencias->hasPages())
            {{ $licencias->links() }}
        @endif
  
      </div>
    </div>
  </div>