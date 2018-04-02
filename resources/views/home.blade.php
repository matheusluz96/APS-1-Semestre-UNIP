@extends('layout.topnavbar')
<!doctype html>
<html lang="{{ app()->getLocale() }}">
@section ('css')
@stop
@section('content')
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


</head>
<body>
  <div class="flex-center position-ref full-height">
    <button onclick="teste()">TESTE</button>

    <div id="div1" class="content centratexto"> <!--DIV 1-->
      <p>Sustentabilidade é a palavra do momento, palavra que está prometendo revolucionar a maneira em que nossa sociedade
        e econômica vêm produzindo seus bens e serviços até o dia de hoje. É pena, que muitas pessoas, ainda não saibam o
        real significado dessa palavra e muito menos, saibam os benefícios que a sustentabilidade vem trazendo para nosso meio
        ambiente dia após dia, em uma escala de ascensão no meio industrial e educacional.
      </p>
    </div> <!--//DIV 1-->

    <div id="div2"  style="display: none;" class="content centratexto"> <!--DIV 2-->
      <p>Para compreendemos o termo sustentabilidade, é preciso explicar que antes de tudo essa palavra está diretamente
         relacionada com consciência ou conscientização ambiental de uma sociedade moderna, que descobriu que o homem depende
          diretamente dos recursos naturais para sua existência. Sustentabilidade é a maneira moderna de produzir bens e
          serviços de forma á promover o desenvolvimento econômico com consciência ambiental, garantindo o sustento das
          próximas gerações, da mesma forma que hoje os recursos naturais nos promovem. Mais do que uma simples palavra,
          o ato de se praticar sustentabilidade é o próprio ato de desenvolver em si mesmo, uma consciência ambiental justa
           com o meio ambiente e seus recursos naturais.
      </p>
    </div> <!--//DIV 2-->

  </div>
</body>


<script>

 function teste(){
   if (document.getElementById("div1").style.display === "none") {
        document.getElementById("div2").style.display = "none";
        document.getElementById("div1").style.display = "block";

    } else {
      document.getElementById("div1").style.display = "none";
     document.getElementById("div2").style.display = "block";
    }

}
</script>

@stop
</html>
