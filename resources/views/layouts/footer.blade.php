<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h4 class="title">Sumi</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin suscipit, libero a molestie consectetur, sapien elit lacinia mi.</p>
            </div>
            <div class="col-md-4">
                <h4 class="title">News</h4>
                @foreach ($news as $new)
                    <div class="border-bottom border-secondary pt-2 pb-2">
                    <a href="{{ route('news.article' , $new->id) }}" class="text-break text-muted text-decoration-none">{{$new->title}}</a>
                    </div>
                @endforeach
            </div>

            <div class="col-md-4">
                <h4 class="title">Menu</h4>
                    <div class="mb-2">
                    <a href="{{ route('main.main1') }}" class="text-muted text-decoration-none h5">地方移住</a>
                    </div>
                    <div class="mb-2">
                    <a href="{{ route('main.main2') }}" class="text-muted text-decoration-none h5">地域おこし協力隊</a>
                    </div>
                    <div class="mb-2">
                    <a href="{{ route('main.main3') }}" class="text-muted text-decoration-none h5">働きかた</a>
                    </div>
                    <div>
                    <a href="{{ route('main.main4') }}" class="text-muted text-decoration-none h5">イベント/セミナー</a>
                    </div>

            </div>
        </div>
        <hr>
        <div class="row text-center"> © 2017. Made with  by sumi9xm.</div>
    </div>
</footer>
