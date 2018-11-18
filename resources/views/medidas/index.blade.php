@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary card-header-icon">
                    <div class="card-icon">
                        <i class="fa fa-ruler fa-2x"></i>
                    </div>
                    <h4 class="card-title"><b>Unidades de Medida</b><a href="{{url('medidas/create')}}"> <button type="button" class="btn btn-outline-primary btn-sm"><i class="fa fa-plus"></i></button></a> </h4>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped ">
                            <thead>
                                <tr>
                                    <th><b>#</b></th>
                                    <th><b>Nombre</b></th>
                                    <th class="text-right"><b>Opciones</b></th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($medidas as $medida)
                                <tr>
                                    <td>{{$loop -> iteration}}</td>
                                    <td>{{$medida -> nombre}}</td>
                                    <td class="text-right ">
                                        <a href="{{url('medidas/'.$medida->id.'/edit')}}">
                                            <button class="btn btn-outline-primary btn-sm">
                                                <i class="fa fa-pen"></i>
                                            </button>
                                        </a>
                                        <button type="button" class="btn btn-outline-primary btn-sm" onclick="eliminarModelo('{{$medida->nombre}}', '{{url('medidas/'.$medida->id)}}')">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    {{$medidas->links('pagination.default')}}
                </div>
            </div>

            <!--  end card  -->
        </div>
        <!-- end col-md-12 -->
    </div>
    <!-- end row -->

    @include('modal')
    @push('scripts')
        <script>

            function eliminarModelo(nombre, url) {
                $('#modalEliminarForm').attr("action", url);
                $('#modalEliminarTitulo').html("Eliminar Modelo");
                $('#modalEliminarEnunciado').html("Realmente desea eliminar la Unidad de medida: " + nombre + "?");
                $('#modalEliminar').modal('show');

            }

        </script>

    @endpush()

@endsection