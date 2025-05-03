
    <br>
    <h1>{{$modo}} Suministro</h1>

    @if(count($errors)>0)
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="row">

        <div class="col-lg-6">
            <div class="form-group">
                <label for="Nombre">Nombre</label>
                <input type="text" class="form-control" name ="Nombre_suministro" id ="Nombre_suministro" value="{{isset($suministro->Nombre_suministro)?$suministro->Nombre_suministro:old('Nombre_suministro')}}">
            </div>

            <div class="form-group">
                <label for="ApellidoP">Descripcion</label>
                <textarea class="form-control" name="Descripcion_suministro" id="Descripcion_suministro" cols="10" rows="5" >{{isset($suministro->Descripcion_suministro)?$suministro->Descripcion_suministro:old('Descripcion_suministro')}}</textarea>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <label for="ApellidoM">Stock(Cantidad)</label>
                <input type="number" class="form-control" name ="Stock_suministro" id="Stock_suministro" value="{{isset($suministro->Stock_suministro)?$suministro->Stock_suministro:old('Stock_suministro')}}">
            </div>

            <div class="form-group">
                <label for="ApellidoM">Precio Unitario</label>
                <input type="text" class="form-control" name ="Precio_unitario_suministro" id="Precio_unitario_suministro" value="{{isset($suministro->Precio_unitario_suministro)?$suministro->Precio_unitario_suministro:old('Precio_unitario_suministro')}}">
            </div>
        
            <div class="form-group">
                <label for="ApellidoM">Tipo Suministro</label>
                <select class="form-control" name="id_tipo_suministro" id="id_tipo_suministro" class="custom-select selector">
                    @foreach($tiposuministro as $ser)
                        <option value="{{isset($ser->id)?$ser->id:old('id')}}" selected>{{isset($ser->nombre)?$ser->nombre:old('nombre')}}</option>
                    @endforeach
                </select> 
                
            </div>
        </div>
    </div>

    <input class="btn btn-success" type="submit" value="{{$modo}} datos">


<a href="{{url('curso')}}" class="btn btn-success">Regresar</a>


<br>
<br>
<br>