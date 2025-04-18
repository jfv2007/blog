    <div class="form-group">
        {!! Form::label('tag','Tag')!!}
        {!! Form::text('tag',null,['class'=>'form-control', 'placeholder'=>'Ingrese el Tag']) !!}

        @error('tag')
            <small class="text-danger">{{$message}} </small>
        @enderror
    </div>

    <div class="form-group">
        {!! Form::label('descripcion','Descripcion')!!}
        {!! Form::text('descripcion',null,['class'=>'form-control', 'placeholder'=>'Ingrese la Descripcion del tag']) !!}
        @error('descripcion')
            <small class="text-danger">{{$message}} </small>
        @enderror
    </div>

    <div class="form-group">
        {!! Form::label('operacion','Operacion')!!}
        {!! Form::text('operacion',null,['class'=>'form-control', 'placeholder'=>'Ingrese rangos de operacion']) !!}

        @error('operacion')
            <small class="text-danger">{{$message}} </small>
        @enderror
    </div>

    <div class="form-group">
        {!! Form::label('ubicacion','Ubicacion')!!}
        {!! Form::text('ubicacion',null,['class'=>'form-control', 'placeholder'=>'Ingrese la Ubicacion del tag']) !!}
        @error('ubicacion')
            <small class="text-danger">{{$message}} </small>
        @enderror
</div>


    <div class="form-group">
        {!! Form::label('id_cen','CT') !!}
        {!! Form::select('id_cen',$centros, null ,['class'=>'form-control']) !!}
        @error('id_cen')
            <small class="text-danger">{{$message}}</small>
        @enderror
    </div>

    <div class="form-group">
        {!! Form::label('id_planta','Planta')!!}
        {!! Form::select('id_planta',$plantas, null,['class'=>'form-control']) !!}
        @error('id_planta')
            <small class="text-danger">{{$message}}</small>
        @enderror
    </div>

    <div class="form-group">
        {!! Form::label('id_seccion','Seccion')!!}
        {!! Form::select('id_seccion',$seccions, null,['class'=>'form-control']) !!}
        @error('id_seccion')
            <small class="text-danger">{{$message}}</small>
        @enderror
    </div>

    <div class="form-group">
        {!! Form::label('id_categoria','Categoria')!!}
        {!! Form::select('id_categoria',$categorias, null,['class'=>'form-control']) !!}
        @error('id_categoria')
            <small class="text-danger">{{$message}}</small>
        @enderror
    </div>

    <div class="form-group">
        {!! Form::label('id_status','Status')!!}
        {!! Form::select('id_status',$stags, null,['class'=>'form-control']) !!}
        @error('id_status')
            <small class="text-danger">{{$message}}</small>
        @enderror
    </div>

    <div class="row mb-3">
        <div class="col">
            <div class="image-wrapper">
                @isset ($tag18->foto)
                <img id="picture" src="{{ Storage::url($tag18->foto) }}" alt="">
            @else
            <img id="picture" src="https://cdn.pixabay.com/photo/2016/10/11/21/43/geometric-1732847_960_720.jpg" alt="">
          @endif
            </div>
        </div>

        <div class="col">
            <div class="form-group">
                {!! Form::label('foto', 'Imagen que se mostrara en el post') !!}
                {!! Form::file('foto', ['class' =>'form-control-file', 'accept' => 'image/*']) !!}

                @error('foto')
                <small class="text-danger">{{$message}}</small>
                @enderror

            </div>

                @error('foto')
                <small class="text-danger">{{$message}}</small>
                @enderror


            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus neque, possimus aperiam dolorem ullam optio modi fugiat reiciendis omnis, praesentium ipsa deserunt. Atque nobis a eaque aperiam modi aspernatur eum.</p>

        </div>
    </div>
    {{-- @error('name')
         <span class="text-danger">{{$message}}</span>
    @enderror --}}

