@extends('layouts.incos_inicio')

@section('titulo')
    Postulante
    POSTULANTE: {{ $postulantes->nombre." ".$postulantes->aPaterno." ".$postulantes->aMaterno }}
@endsection
@section('content')

@include('postulantes.editar')

@endsection