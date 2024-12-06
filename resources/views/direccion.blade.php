@extends('layouts.base')
@section('contenido')
<br>
<br>
<br>
<br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Maps</title>
</head>
<body>
  <h3>Maps</h3>
<div class="container">
  <div class="row">
    <div class="col-6">
      <form action="" method="GET">
        <label>
           <h4>Destino / Modo</h4>
        </label>
        <select class="form-control seleccion" name="destino" id="destino" required>
            <option value="">Seleccione un destino</option>
            <option value="17.5265479,-92.0247582">Palenque</option>
            <option value="16.7435551,-93.2885277">Tuxtla Gutierrez</option>
            <option value="16.7336806,-92.6835993">San Cristobal</option>
        </select>
        <select class="form-control seleccion" name="modo" id="modo">
              <option value="walking" {{(isset($_GET['modo']) && $_GET['modo'] == 'walking') ? 'selected' : '' }}>Walking</option>
              <option value="driving" {{(isset($_GET['modo']) && $_GET['modo'] == 'driving') ? 'selected' : '' }}>Driving</option>
              <option value="bicycling" {{(isset($_GET['modo']) && $_GET['modo'] == 'bicycling') ? 'selected' : ''}}>Bicycling</option>
          </select>
        <button class="modo" type="submit" value="Buscar" id="modo" name="buscar">buscar</button>
      </form>
    </div>
  </div>
</div>
  <?php
  $modo = isset($_GET['modo']) ? $_GET['modo'] : 'driving';
  $destination = isset($_GET['destino']) ? $_GET['destino'] : '16.7435973,-93.215032';

  $directionsUrl = "https://maps.googleapis.com/maps/api/directions/json?key=AIzaSyAibYPSh8rpnqU3j7QziKE_jpVZ6YKt5rc&origin=16.9051824,-92.130818&destination={$destination}&mode={$modo}";

  // Realizar la solicitud a la API de Google Maps Directions
  $respuesta = file_get_contents($directionsUrl);
  $json = json_decode($respuesta);

    $distancia = $json->routes[0]->legs[0]->distance->text;
    $duracion = $json->routes[0]->legs[0]->duration->text;
  

  echo "<br>";
  echo "Distancia: " . $distancia;  
  echo "<br>";
  echo "Duración: " . $duracion;
  echo "<br>";
  echo "Modo:  "  .$modo
  ?>
  <br>
  <br>
  <iframe
      width="1300"
      height="450"
      style="border:0"
      loading="lazy"
      src="https://www.google.com/maps/embed/v1/directions?key=AIzaSyAibYPSh8rpnqU3j7QziKE_jpVZ6YKt5rc&origin=16.9051824,-92.130818&destination={{$destination}}&mode={{$modo}} " allowfullscreen>
  </iframe>
</body>
</html>
@endsection