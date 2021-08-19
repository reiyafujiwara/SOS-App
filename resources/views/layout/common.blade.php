<DOCTYPE HTML>
    <html lang="ja">
        <head>
            <meta charset="UTF-8">
            <title>@yield('title')｜新サービスLP</title>
            <meta name="description" itemprop="description" content="@yield('description')">
            <meta name="keywords" itemprop="keywords" content="@yield('keywords')">
            {{-- <link rel="stylesheet" href="/css/bootstrap/bootstrap.min.css"> --}}
            <link href="/css/star/layout.css" rel="stylesheet">
            @yield('pageCss')
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
            <link href="{{ asset('css/app.css') }}" rel="stylesheet">
            <script src="{{ asset('js/app.js') }}"></script>
        </head>

        <body>

            @yield('header')

            <!-- コンテンツ -->
            <div class="content">
                @yield('content')
            </div>


            @yield('footer')
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
        </body>
    </html>