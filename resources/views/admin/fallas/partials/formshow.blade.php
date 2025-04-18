<div class="form-group">
     {!! Form::label('user_id','usuario ID ')!!}
     {!! Form::text('user_id',$user_id,['class' => 'form-control', 'readonly' => 'true']) !!}

     {!! Form::label('id_tag18','ID de tag')!!}
    {!! Form::text('id_tag18', $id_tag18s, ['class' => 'form-control', 'readonly' => 'true']) !!}

    <div class="form-group">
        {!! Form::label('tag','Nombre de tag')!!}
        {!! Form::text('tag', $tagNombre, ['class' => 'form-control', 'readonly' => 'true']) !!}
    </div>

    {!! Form::label('descripcion_tag','Descripcion del tag')!!}
    {!! Form::text('descripcion_tag',$fallaDescripcion,['class' => 'form-control', 'readonly' => 'true']) !!}

    {!! Form::label('descripcion_falla','Descripcion del tag')!!}
    {!! Form::text('descripcion_falla', $fallaDescripcion, ['class' => 'form-control']) !!}

    {!! Form::label('id_sfallas','Status Falla') !!}
    {!! Form::select('id_sfallas',$sfallas, null ,['class'=>'form-control']) !!}

    {!! Form::label('turno','Turno')!!}
    {!! Form::text('turno',$turn, ['class'=>'form-control']) !!}




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

