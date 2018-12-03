<form class="form-horizontal" action="{{ route('postulantes.store') }}" method="POST">
    {{ csrf_field() }}
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">POSTULANTE</h3>
            <button type="submit" class="btn btn-file btn-success btn-flat pull-right fa fa-save"> Guardar</button>
        </div>
        <div class="box-body">
            @include('postulantes._formPos')
        </div>
    </div>
</form>
