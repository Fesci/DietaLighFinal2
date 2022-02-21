@extends('layouts.plantilla')

@section('title','Dieta Light Home')

@section('contenido')
<main>
    <div class="container-fluid">
        <div class="row">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="{{url('/')}}" data-slide-to="0" class="active"></li>
                    <li data-target="#" data-slide-to="1"></li>
                    <li data-target="#" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                      <!--slider 1-->
                    <div class="carousel-item active">
                      <img class="d-block w-100 opac" src="img/slider3opac.jpg" alt="First slide">
                      <div class="carousel-caption d-md-block hom">
                        <h1 class="text-center tithom md:text-8xl text-2xl">Dieta Light<h1>
                        <a href="{{url("/")}}"><img src="img/dietalogo1.png" alt="logo" class="img-fluid mx-auto h-10 md:h-full  mt-10"></a>
                      </div>
                    </div>
                    <!--slider 2-->
                <div class="carousel-item">
                      <img class="d-block w-100 opac" src="img/slider2opac.jpg" alt="Second slide">
                      <div class="carousel-caption d-none d-md-block hom">
                        <h1 class="text-center titulohom">Menu Semanal</h1>
                        <p class="text-center text-xl texthom">En tu casa o en tu lugar de trabajo.
                            Un servicio que prioriza la alimentación como base de la buena salud.
                            Menúes adaptables para personas diabéticas, hipertensas y/o con sobrepeso.</p>
                            <br>
                        <a href="{{url("/menu")}}">
                            <button class="btn btn-light mb-10">Ver</button>
                        </a>
                    </div>
                </div>
                    <!--slider 3-->
                <div class="carousel-item">
                      <img class="d-block w-100 opac" src="img/slider1opac.jpg" alt="Third slide">
                      <div class="carousel-caption d-none d-md-block hom">
                        <h1 class="text-center titulohom">Opciones Saludables</h1>
                        <p class="text-center texthom">Ademas de nuestro adaptable menu semanal, contamos con tartas, tarteletas individuales, empanadas, postres y mas!</p>
                        <br>
                        <a href="{{url("/opciones")}}">
                            <button class="btn btn-light mb-10">Ver</button>
                        </a>
                    </div>
                </div>
                  </div>
                      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Atras</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Siguiente</span>
                      </a>
            </div>
        </div>
    </div>
<br>
<div class="container">
  <div class="row">
    <div class="col-12">
      <h1 class="text-center articulo tithom mt-5">Nutritivo y natural</h1>

      <p class="col-lg-6 col-12 float-left text-sm md:text-lg"><span style="font-weight:bold;" class="text-xl">Acerca de</span><br>Dieta Light nutritivo y natural, una empresa chivilcoyana,
      fue una idea de la Lic. María Fernanda Mariani, y hoy es una realidad.
      Nació hace 20 años, con el claro objetivo de mejorar la calidad de vida de sus clientes a través de una adecuada alimentación.
      La amplia experiencia y pasión le ha permitido optimizar su servicio, volcando todo su conocimiento en su empresa, ofreciendo un producto terminado que se garantiza asimismo, por su calidad, sabor, variedad y presentación  gracias al cuidadoso equilibrio que se guarda en la selección de sus menús, alimentos con que se preparan, los que se encuentran elaborados artesanalmente, respetando al máximos las normas de seguridad e higiene.</p>
      <img class="col-lg-6 col-12 float-right img-fluid" src="img/localdieta.jpg" alt="Foto Local">
    </div>
  </div>
</div>
</main>
@endsection
