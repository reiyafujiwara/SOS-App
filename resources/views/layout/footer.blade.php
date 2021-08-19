@section('footer')
<link href="css/sticky-footer.css" rel="stylesheet">

<?php
    $year = date('Y');
?>
<footer class="footer">
    {{-- <div class="container">


    </div> --}}

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark mb-3">
        <p class="text-muted">©︎ <?php echo $year;?> 株式会社グッドスタッフ</p>

        <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="https://gstaff.co.jp/privacy/">プライバシーポリシー</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="">特定商取引法に基づく表記</a>
                </li>

            </ul>

        </div>
        



    </nav>

</footer>
@endsection