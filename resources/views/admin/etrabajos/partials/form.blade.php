<div class="form-group">
    {!! Form::label('id_falla','ID Falla')!!}
    {!! Form::text('id_falla', $trabajo->id_falla, ['class' => 'form-control', 'readonly' => 'true']) !!}

    {!! Form::label('id_user','ID usuario ')!!}
    {!! Form::text('id_user', $trabajo->id_user, ['class' => 'form-control', 'readonly' => 'true']) !!}

    {!! Form::label('tagnombre','TAG ')!!}
    {!! Form::text('tagnombre', $tagnombre, ['class' => 'form-control', 'readonly' => 'true']) !!}

    {!! Form::label('tagdescripcion','Descripcion del tag')!!}
    {!! Form::text('tagdescripcion', $tagdescripcion, ['class' => 'form-control', 'readonly' => 'true']) !!}

    <div class="form-group">
       {!! Form::label('descripcion_falla','Descripcion de la Falla')!!}
       {!! Form::text('descripcion_falla',$descripcion_falla, ['class' => 'form-control', 'readonly' => 'true']) !!}
   </div>

   {!! Form::label('des_trabajo','Descripcion del Trabajo')!!}
   {!! Form::text('des_trabajo',$trabajo->des_trabajo,['class' => 'form-control']) !!}

   <div class="form-group">
   {!! Form::label('id_strabajos','Status Trabajo') !!}
   {!! Form::select('id_strabajos',$strabajo,null, ['class'=>'form-control']) !!}
    <div class="form-group">
{{--}}
   {!! Form::label('turno','Turno')!!}
   {!! Form::text('turno',$falla->turno, ['class'=>'form-control']) !!}
</div>
 --}}
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


       </div>
   </div>
   {{-- @error('name')
        <span class="text-danger">{{$message}}</span>
   @enderror --}}

</div>
