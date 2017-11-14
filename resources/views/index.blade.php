@extends('layouts.general')

@section('title')
  Pagina principal
@endsection

@section('section')

  <div class="container">
  <div class="banner">
    <video autoplay loop muted preload="auto">
      <source src="videos/secuencia.mp4" type="video/mp4">
    </video>
    <p class="animated fadeInUp">Liquidación de INVIERNO</p>
  </div>
  <div class="banner-cel">
    <img src="images/nieve.png" alt="">
    <p>Liquidación de INVIERNO</p>
  </div>
  <div class="parallax-primavera">

  </div>

        <section class="ofertas">
          <h2>PRODUCTOS EN OFERTA</h2>
          <div class="prod-oferta">
            <img  src="images/foto1.png" alt="">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut laborlaborum.</p>
            <button type="button" name="button">COMPRAR</button>
          </div>
          <div class="prod-oferta">
            <img src="images/foto2.png" alt="">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut laborlaborum.</p>
            <button type="button" name="button">COMPRAR</button>
          </div>
          <div class="prod-oferta">
            <img src="images/foto3.png" alt="">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut laborlaborum.</p>
            <button type="button" name="button">COMPRAR</button>
          </div>
          <div class="prod-oferta">
            <img src="images/foto4.png" alt="">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut laborlaborum.</p>
            <button type="button" name="button">COMPRAR</button>
          </div>
          <div class="prod-oferta">
            <img src="images/foto5.png" alt="">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut laborlaborum.</p>
            <button type="button" name="button">COMPRAR</button>
          </div>
          <div class="prod-oferta">
            <img src="images/foto1.png" alt="">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut laborlaborum.</p>
            <button type="button" name="button">COMPRAR</button>
          </div>

        </section>
        <div class="parallax-divisor1">
        </div>
        <div class="parallax-invierno">
          <a class="animated fadeIn" href="#"><img src="images/inviernocartel.png" alt=""></a>
        </div>
        <div class="parallax-divisor2">
        </div>
        <div class="parallax-verano">
          <a href="#"><img src="images/vermas.png" alt=""></a>
        </div>
        <div class="parallax-divisor3">
        </div>
        <div class="parallax-hombres">
          <a href="#"><img src="images/hombrecartel.png" alt=""></a>
        </div>
        <div class="parallax-divisor4">
        </div>
        <div class="parallax-mujeres">
          <img src="images/mujerescartel.png" alt="">
        </div>

  </div><!-- NOTE: end container -->


@endsection
