@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header card-header-primary card-header-icon">
                    <div class="card-icon">
                        <i class="fa fa-ruler fa-2x"></i>
                    </div>
                    <h4 class="card-title">Nueva Unidad de medida</h4>
                </div>
                <form method="POST" action="{{url('medidas')}}" autocomplete="off">
                <div class="card-body ">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="nombre" class="bmd-label-floating">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre">
                        </div>
                </div>
                <div class="card-footer ">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
                </form>
            </div>
            <!--  end card  -->
        </div>
        <!-- end col-md-12 -->
    </div>
    <!-- end row -->
@endsection