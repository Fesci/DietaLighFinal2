@extends('layouts.plantilla')
@section('title','Dieta Light')
@section('contenido')
 
<section id="menu"> <!-- COMIENZO TABLA -->
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="text-center mt-5 text-uppercase">
          🥗 Menu Semanal 🍴
        </h2>
        <br>
        <h5 class="text-center">{{$msj ?? ' '}}</h5>
        <br>
      </div>

      <div class="col-12">
      <table class="table table-bordered tabla">
          <thead>
            <tr>
                <th scope="col" class="col-2 text-center tabla dia">Dia</th>
                <th scope="col" class="col-5 text-center tabla alm-bg">Almuerzo</th>
                <th scope="col" class="col-5 text-center tabla cen-bg">Cena</th>
            </tr>
          </thead>
          <tbody>
                  @foreach ($menu as $m)
                    <tr>
                      <th scope="row" class="text-center tabla diasbg">{{ date("d/m/Y", strtotime($m->dianumero));}}<br>{{$m->dianombre}}</th>
                      <td class="text-center tabla">{{ $m->almuerzo}}<br>{{$m->acompalmuerzo}}
                      </td>
                      <td class="tabla text-center">{{ $m->cena}}<br>{{$m->acompcena}}
                      </td>
                    </tr>
                  @endforeach

          </tbody>
      </table>
      </div>
    </div>
  </div>
</section>
@endsection

    

