<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <title>{{ $title ?? 'Projeto X²' }}</title>
        @livewireStyles
    </head>
    <body>

        <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container-fluid">
              <img src="" class="navbar-brand" width="60" height="60">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-link active text-danger" aria-current="page" href="#"><h4>Projeto X²</h4></a>
                </div>
              </div>
            </div>
          </nav>

        <div class="container">
            {{ $slot }}
        </div>

        
        
            <footer class="py-3 bg-dark fixed-bottom">
                <p class="text-center text-white">© 2025 Projeto X² - Todos os direitos reservados</p>
            </footer>
        
        @livewireStyles
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>


</html>
