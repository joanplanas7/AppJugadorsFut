@extends('adminlte::page')

@section('title', 'PagInici')

@section('content_header')
    <h1>Buscar futbolistes:</h1>
@stop

@section('content')

<form action="/jugadors/jugador" method="GET">
    @csrf
    <div class="mb-3">
            <label for="" class="from-label">Selecciona la forma de bsuqueda:  </label>
            <br>
            <select id="forma" name="forma" onchange="preguntes();">
                <option>Nom</option>
                <option>Posicio</option>
                <option>Edat</option>
            </select>
    </div>

    <div id="contingut" class="mb-3">
    
    <div class="mb-3">
        <label for="" class="from-label">Nom jugador: </label>
        <input id="nom" name="nom" type="text" class="form-control" tabindex="1">
    </div>
    
    </div>

    <button type="submit" class="btn btn-primary"  tabindex="4">Buscar</button>
<form>
<table id="contactes" class="table table-dark table-striped shadow-lg mt-4">
        <thead class="bg-primary text-white">
        <tr>
            <th scope="col">Nom</th>
            <th scope="col">Edat</th>
            <th scope="col">Posicio</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($jugadors as $jugador)
        <tr>
            <td>{{ $jugador -> nom }}</td>
            <td>{{ $jugador -> edat }}</td>
            <td>{{ $jugador -> posicio }}</td>
           
      
        </tr>
        @endforeach
        </tbody>
    </table>
 
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
function preguntes(){
        let cbxForma = document.getElementById('forma');
        let forma = cbxForma.value;

        if (forma == "Nom"){
            document.getElementById('contingut').innerHTML = ' <label for="" class="from-label">Nom: </label> <input id="nom" name="nom" type="text" class="form-control" tabindex="1">';
        }else if(forma == "Edat"){
            document.getElementById('contingut').innerHTML = ' <label for="" class="from-label">Edat </label> <input id="edat" name="edat" type="text" class="form-control" tabindex="3">';
        }else if(forma == "Posicio"){
            document.getElementById('contingut').innerHTML = ' <label for="" class="from-label">Posicio:  </label>  <br><select id="posicio" name="posicio"> <option>POR</option>' +
              '  <option>LD</option>' +
             '   <option>DFC</option>'+
              '  <option>LI</option>'+
               ' <option>MCD</option>'+
              '  <option>MC</option>'+
              '  <option>MCO</option>'+
               ' <option>MD</option>'+
               ' <option>MI</option>'+
                '<option>EI</option>'+
               ' <option>ED</option>'+
               ' <option>SD</option>'+
                '<option>DC</option> '+
            '</select>';
        }
       

    }
</script>
@stop