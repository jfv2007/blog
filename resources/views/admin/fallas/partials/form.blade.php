<div class="form-group">
     {!! Form::label('id_usuario','usuario ID ')!!}
    {!! Form::text('id_usuario', $falla->id_usuario, ['class' => 'form-control', 'readonly' => 'true']) !!}

     {!! Form::label('id_tag18s','ID de tag')!!}
    {!! Form::text('id_tag18s', $falla->id_tag18s, ['class' => 'form-control', 'readonly' => 'true']) !!}

     <div class="form-group">
        {!! Form::label('tag','Nombre de tag')!!}
        {!! Form::text('tag',$id_tag18s, ['class' => 'form-control', 'readonly' => 'true']) !!}
    </div>

    {!! Form::label('descripcion_tag','Descripcion del tag')!!}
    {!! Form::text('descripcion_tag',$tagNombre,['class' => 'form-control', 'readonly' => 'true']) !!}

    {!! Form::label('descripcion_falla','Descripcion del tag')!!}
    {!! Form::text('descripcion_falla', $falla->descripcion_falla, ['class' => 'form-control']) !!}

    <div class="form-group">
    {!! Form::label('id_sfallas','Status Falla') !!}
    {!! Form::select('id_sfallas',$sfallas,null, ['class'=>'form-control']) !!}
 <div class="form-group">

    {!! Form::label('turno','Turno')!!}
    {!! Form::text('turno',$falla->turno, ['class'=>'form-control']) !!}
</div> 
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
              @isset ($falla->foto_falla)
                    <img id="picture" src="{{ Storage::url($falla->foto_falla) }}" alt="">
                @else
                     <img id="picture" src="https://cdn.pixabay.com/photo/2016/10/11/21/43/geometric-1732847_960_720.jpg" alt="">
              @endif
            </div>
        </div>

        <div class="col">
            <div class="form-group">
                {!! Form::label('foto_falla', 'Imagen que se mostrara en la falla ') !!}
                {!! Form::file('foto_falla', ['class' =>'form-control-file', 'accept' => 'image/*']) !!}

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
