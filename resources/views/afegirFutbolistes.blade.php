@extends('adminlte::page')

@section('title', 'PagInici')

@section('content_header')
    <h1>Afegir futbolistes:</h1>
@stop

@section('content')
 
<form action="/jugadors" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="from-label">Nom jugador: </label>
        <input id="nom" name="nom" type="text" class="form-control" tabindex="1">
    </div>


    <div class="mb-3">
            <label for="" class="from-label">Selecciona la posicio: </label>
            <br>
            <select id="posicio" name="posicio">
                <option>POR</option>
                <option>LD</option>
                <option>DFC</option>
                <option>LI</option>
                <option>MCD</option>
                <option>MC</option>
                <option>MCO</option>
                <option>MD</option>
                <option>MI</option>
                <option>EI</option>
                <option>ED</option>
                <option>SD</option>
                <option>DC</option>
    
            </select>
        </div>

    <div class="mb-3">
        <label for="" class="from-label">Edat: </label>
        <input id="edat" name="edat" type="text" class="form-control" tabindex="3">
    </div>

    <a href="/inici" class="btn btn-secondary" tabindex="5">Cancel·lar</a>
    <button type="submit" class="btn btn-primary"  tabindex="4">Guardar</button>
<form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop