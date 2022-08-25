@extends('main')
@section('title', 'Portal de notícias')
@section('content')

<main class="container">

  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      <a class="p-2 link-secondary" href="#">Regiões</a>
      <a class="p-2 link-secondary" href="#">Editorias</a>
      <a class="p-2 link-secondary" href="#">Podcasts</a>
      <a class="p-2 link-secondary" href="/contato">Contato</a>
    </nav>
  </div>
  <a class="blog-header-logo" href="/noticia">
      <img class="p-4 p-md-12 mb-8" src="imagens/bn1.png">
        <div class="col-md-10 px-0">
          <h1 class="display-4 fst-italic text-dark">Número de deputados federais que tentam reeleição é recorde:</h1>
          <p class="lead my-3 text-dark">Em 2018, 404 parlamentares tentaram a reeleição, segundo o TSE. A média de candidaturas em busca de reeleição na Câmara é de 408 deputados, com base em dados de 1990 a 2022.</p>
        </div>
      </img>
  </a>

  <div class="row g-5">
    
      <article class="blog-post">
      </article>

    </div>
  </div>

</main>

@endsection