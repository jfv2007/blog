<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="flex justify-center">

                 <div wire:ignore>

                  <select id="select2" class="form-select">
                    <option value="">Seleccione un Producto</option>
                    @foreach($plantas as $planta)
                        <option value="{{ $planta->id_planta }}">{{ $planta->nombre_planta }}</option>
                        {{-- <option value="{{ $product->id }}">{{ $product->description }}</option> --}}
                    @endforeach
                  </select>

                </div>

             </div>
        </div>
    </div>
    <label class="flex justify-center">Ud. seleccionó: <strong>{{ $seleccionado }}</strong></label>
    </div>
</div>

<script>

$(document).ready(function() {
    $('#select2').select2(); //inicializar el select
    $('#select2').on('change', function (e) {
        let valor = $('#select2').select2("val");//seleccionamos el value
        @this.set('seleccionado', valor);
        let texto = $('#select2 option:selected').text()
        /* @this.set('seleccionado', texto); */

    });
});
</script>
