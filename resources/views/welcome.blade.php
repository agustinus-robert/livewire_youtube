<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>Laravel</title>
        
        @livewireStyles
    </head>
    <body>
        <div class="container">
            <div class="col-md-12 mt-2">
                <h1 class="text-center">Tutorial Youtube</h1>
                <hr>
            </div>
            
            <div class="col-md-12 konten" style='border:1px solid gray; height:460px;'>
                @yield('konten')
          
            </div>
            
            <footer class='col-md-12'>
                <hr>
                
                <div class='row'>
                    <p class='text-center'>Copyright @ <?=date('Y')?> Tutorial | <b>coderpartai.com</b></p>
                </div>
                
            </footer>
        </div>
        @livewireScripts
    </body>
</html>
