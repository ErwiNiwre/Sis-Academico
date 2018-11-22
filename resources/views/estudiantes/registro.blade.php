<form class="form-horizontal" action="{{ route('estudiantes.store') }}" method="POST">
    {{ csrf_field() }}
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">ESTUDIANTE</h3>
        </div>
        <div class="box-body">
            @include('estudaintes._formEst')
            <div class="col-md-12">
                <div class="form-group">
                        <button type="submit" class="btn btn-block btn-success btn-flat pull-right">Guardar</button>
                </div>                
            </div>
        </div>
    </div>
</form>
