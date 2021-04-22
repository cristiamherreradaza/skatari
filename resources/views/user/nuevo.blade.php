@extends('layouts.app')

@section('metadatos')
<meta name="csrf-token" content="{{ csrf_token() }}" />
@endsection

@section('css')
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet">
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
        <!--begin::Card-->
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <h3 class="card-title">NUEVO USUARIO</h3>
                
            </div>
            <!--begin::Form-->
            <form action="{{ url('User/guarda') }}" method="POST" id="formularioPersona">
                @csrf
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Nombres
                                <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="name" name="name" required />
                            </div>        
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Ap Paterno</label>
                                <input type="text" class="form-control" id="ap_paterno" name="ap_paterno" />
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Ap materno</label>
                                <input type="text" class="form-control" id="ap_materno" name="ap_materno" />
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Carnet
                                <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="carnet" name="carnet" required />
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="exampleSelect1">Departamento <span class="text-danger">*</span></label>
                                <select class="form-control" id="ciudad" name="ciudad">
                                    <option value="La Paz">La Paz</option>
                                    <option value="Cochabamba">Cochabamba</option>
                                    <option value="Santa Cruz">Santa Cruz</option>
                                    <option value="Oruro">Oruro</option>
                                    <option value="Tarija">Tarija</option>
                                    <option value="Sucre">Sucre</option>
                                    <option value="Potosi">Potosi</option>
                                    <option value="Beni">Beni</option>
                                    <option value="Pando">Pandoa</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Fecha Nacimiento
                                    <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" required />
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="exampleSelect1">Estado Civil <span class="text-danger">*</span></label>
                                <select class="form-control" id="estado_civil" name="estado_civil">
                                    <option value="Soltero">Soltero</option>
                                    <option value="Casado">Casado</option>
                                    <option value="Divorciado">Divorciado</option>
                                    <option value="Viudo">Viudo</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="exampleSelect1">Genero <span class="text-danger">*</span></label>
                                <select class="form-control" id="genero" name="genero">
                                    <option value="Hombre">Hombre</option>
                                    <option value="Mujer">Mujer</option>
                                    <option value="Otro">Otro</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Email
                                    <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="email" name="email" required />
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Celular(es)
                                </label>
                                <input type="text" class="form-control" id="celulares" name="celulares" />
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Direccion
                                    </label>
                                <input type="text" class="form-control" id="direccion" name="direccion" />
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        
                        <div class="col-md-3">
                        <div class="form-group">
                                <label fo r="exampleSelect1">Perfil <span class="text-danger">*</span></label>
                                <select class="form-control" id="perfil" name="perfil">
                                    <option value="Administrador">Administrador</option>
                                    <option value="Encargado">Abogado</option>
                                    <option value="Cliente">Registrador</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password
                                    <span class="text-danger">*</span></label>
                                <input type="password" class="form-control" id="password" name="password" required />
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleSelect1">Oficina <span class="text-danger">*</span></label>
                                <select class="form-control" id="departamento" name="departamento">
                                    <option value="">Seleccione</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <label for="exampleSelect1">&nbsp;</label>
                            <button type="button" class="btn btn-primary mr-2 btn-block" onclick="">Nueva Oficina</button>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <button type="button" class="btn btn-success mr-2 btn-block" onclick="guarda()">Guardar</button>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ url('User/listado') }}" class="btn btn-secondary btn-block">Volver</a>
                        </div>
                    </div>

                </div>
                
            </form>
            <!--end::Form-->
        </div>
        <!--end::Card-->
    </div>
    
</div>

@stop

@section('js')
    <script type="text/javascript">
        $.ajaxSetup({
            // definimos cabecera donde estarra el token y poder hacer nuestras operaciones de put,post...
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function guarda()
        {
            if ($("#formularioPersona")[0].checkValidity()) {

                $("#formularioPersona").submit();
                Swal.fire("Excelente!", "Se guardo la persona!", "success");

            }else{
                $("#formularioPersona")[0].reportValidity();
            }
        }

        function canbiaDepartamento()
        {
            let departamento = $("#departamento").val();

            $.ajax({
                url: "{{ url('User/ajaxDistrito') }}",
                data: {departamento: departamento},
                type: 'POST',
                success: function(data) {
                    $("#ajaxDistritos").html(data);
                    // $("#listadoProductosAjax").html(data);
                }
            });

        }

    </script>
@endsection