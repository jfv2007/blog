<div class="form-group">
    {!! Form::label('id_falla','ID Falla ')!!}
    {!! Form::text('id_falla', $falla->id, ['class' => 'form-control', 'readonly' => 'true']) !!}

   |{!! Form::label('id_user','ID de Usuario')!!}
    {!! Form::text('id_user', $id_user, ['class' => 'form-control', 'readonly' => 'true']) !!}

    <div class="form-group">
        {!! Form::label('tag','Nombre de tag')!!}
        {!! Form::text('tag', $tag, ['class' => 'form-control', 'readonly' => 'true']) !!}
    </div>

    {!! Form::label('descripcion_tag','Descripcion del tag')!!}
    {!! Form::text('descripcion_tag',$tagDescripcion,['class' => 'form-control', 'readonly' => 'true']) !!}

    {!! Form::label('descripcion_falla','Descripcion de la falla')!!}
    {!! Form::text('descripcion_falla',$falla->descripcion_falla,['class' => 'form-control','readonly' => 'true']) !!}

    {!! Form::label('id_sfallas','Status Falla') !!}
    {!! Form::select('id_sfallas',$sfallas, null ,['class'=>'form-control','readonly' => 'true']) !!}

    <div class="form-group">
        {!! Form::label('des_trabajo','Descripcion del Trabajo')!!}
        {!! Form::text('des_trabajo',null,['class'=>'form-control', 'placeholder'=>'Ingrese la Descripcion del Trabajo']) !!}
        @error('des_trabajo')
            <small class="text-danger">{{$message}} </small>
        @enderror
    </div>

    {!! Form::label('id_strabajos','Status de Trabajo')!!}
    {!! Form::select('id_strabajos',$strabajo,null,['class'=>'form-control']) !!}

    {{-- <div class="form-group">
        {!! Form::label('id_centro','CT') !!}
        {!! Form::select('id_centro',$tcentros, null ,['class'=>'form-control']) !!}

        @error('id_centro')
            <small class="text-danger">{{$message}}</small>
        @enderror
    </div> --}}


    <div class="row mb-3">
        <div class="col">
            <div class="image-wrapper">
              @isset ($trabajo->foto_trabajo)
                    <img id="picture" src="{{ Storage::url($trabajo->foto_trabajo) }}" alt="">
                @else
                     <img id="picture" src="https://cdn.pixabay.com/photo/2016/10/11/21/43/geometric-1732847_960_720.jpg" alt="">
              @endif
            </div>
        </div>

        <div class="col">
            <div class="form-group">
                {!! Form::label('foto_trabajo', 'Imagen que se mostrara en la falla ') !!}
                {!! Form::file('foto_trabajo', ['class' =>'form-control-file', 'accept' => 'image/*']) !!}

                {{-- @error('file')
                    <span class="text-danger">{{message}}</span>
                @enderror
                 --}}
            </div>

          {{--   @error('file')
                <span class="text-danger">{{message}}</span>
            @enderror
            --}}

            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus neque, possimus aperiam dolorem ullam optio modi fugiat reiciendis omnis, praesentium ipsa deserunt. Atque nobis a eaque aperiam modi aspernatur eum.</p>

        </div>
    </div>
    {{-- @error('name')
         <span class="text-danger">{{$message}}</span>
    @enderror --}}

 </div>
