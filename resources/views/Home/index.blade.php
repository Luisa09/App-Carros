@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<h1 style="width: 100%;
height: 90px;
font-size: 25px;
text-align: center;
padding: 20px;
box-sizing: border-box;">Bienvenidos App Carros</h1>

<style>.mySlides {display:none;}</style>
<body>


    <div class="container" style="padding: 16px;">
        <img class="mySlides" src="https://acroadtrip.blob.core.windows.net/catalogo-imagenes/s/RT_V_10741a5538cc4106835033f1ff9007f0.jpg" style="width:50%; margin: 20%;">
        <img class="mySlides" src="https://acroadtrip.blob.core.windows.net/catalogo-imagenes/s/RT_V_030dd82c0652424f9fc86b9e92fcb320.jpg" style="width:50%;margin: 20%;">
        <img class="mySlides" src="https://acroadtrip.blob.core.windows.net/catalogo-imagenes/s/RT_V_00e88f62e6e8453897807d5bdd91c408.jpg" style="width:50%;margin: 20%;">
        <img class="mySlides" src="https://acroadtrip.blob.core.windows.net/catalogo-imagenes/s/RT_V_628a1caca69e4e18b516d365022dfe3d.jpg" style="width:50%;margin: 20%;">

         <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>

        <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
      </div>


      <script>

        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
          showDivs(slideIndex += n);
        }

        function showDivs(n) {
          var i;
          var x = document.getElementsByClassName("mySlides");
          if (n > x.length) {slideIndex = 1}
          if (n < 1) {slideIndex = x.length}
          for (i = 0; i < x.length; i++) {
             x[i].style.display = "none";
          }
          x[slideIndex-1].style.display = "block";
        }
        </script>
<div class="month">
    <ul>
      <li class="prev">&#10094;</li>
      <li class="next">&#10095;</li>
      <li>August<br><span style="font-size:18px">2021</span></li>
    </ul>
  </div>

  <ul class="weekdays">
    <li>Mo</li>
    <li>Tu</li>
    <li>We</li>
    <li>Th</li>
    <li>Fr</li>
    <li>Sa</li>
    <li>Su</li>
  </ul>

  <ul class="days">
    <li>1</li>
    <li>2</li>
    <li>3</li>
    <li>4</li>
    <li>5</li>
    <li>6</li>
    <li>7</li>
    <li>8</li>
    <li>9</li>
    <li><span class="active">10</span></li>
    <li>11</li>
    ...etc
  </ul>
  <style>ul {list-style-type: none;}
    body {font-family: Verdana, sans-serif;}

    /* Month header */
    .month {
      padding: 70px 25px;
      width: 100%;
      background: #1abc9c;
      text-align: center;
    }

    /* Month list */
    .month ul {
      margin: 0;
      padding: 0;
    }

    .month ul li {
      color: white;
      font-size: 20px;
      text-transform: uppercase;
      letter-spacing: 3px;
    }

    /* Previous button inside month header */
    .month .prev {
      float: left;
      padding-top: 10px;
    }

    /* Next button */
    .month .next {
      float: right;
      padding-top: 10px;
    }

    /* Weekdays (Mon-Sun) */
    .weekdays {
      margin: 0;
      padding: 10px 0;
      background-color:#ddd;
    }

    .weekdays li {
      display: inline-block;
      width: 13.6%;
      color: #666;
      text-align: center;
    }

    /* Days (1-31) */
    .days {
      padding: 10px 0;
      background: #eee;
      margin: 0;
    }

    .days li {
      list-style-type: none;
      display: inline-block;
      width: 13.6%;
      text-align: center;
      margin-bottom: 5px;
      font-size:12px;
      color: #777;
    }

    /* Highlight the "current" day */
    .days li .active {
      padding: 5px;
      background: #1abc9c;
      color: white !important
    }</style>
</body>


@endsection

