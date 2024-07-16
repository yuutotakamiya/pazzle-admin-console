<html lang="ja">
<head>
    <link href="/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>@yield('title')</title>
<body>
<header class="p-3 text-bg-dark">
    <h1>@yield('h1')</h1>
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap"></use>
                </svg>
            </a>
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="{{route('accountscreate')}}"
                       class="nav-link px-2 text-white ">アカウント登録</a></li>
                <li><a href="{{route('accountsindex')}}" class="nav-link px-2 text-white ">アカウント一覧</a></li>
                <li><a href="{{route('accounts.userList')}}" class="nav-link px-2 text-white">ユーザー一覧</a></li>
                <li><a href="{{route('accounts.itemList')}}" class="nav-link px-2 text-white">アイテム一覧</a></li>
                <li><a href="{{route('accounts.useritemList')}}"
                       class="nav-link px-2 text-white">ユーザー所持アイテム一覧</a>
                <li><a href="{{route('mailsmail_index')}}" class="nav-link px-2 text-white">メールマスタ一覧</a>
                <li><a href="{{route('mailsuser_mail_list')}}"
                       class="nav-link px-2 text-white">ユーザーメール受信一覧</a>
                <li><a href="{{route('mailsmail_send')}}"
                       class="nav-link px-2 text-white">メールの送信</a>
                <li><a href="{{route('followsfollow_List')}}"
                       class="nav-link px-2 text-white">フォロー一覧</a>
                <li><a href="{{route('follow_logslogs')}}"
                       class="nav-link px-2 text-white">フォローログ一覧</a>
            </ul>
        </div>
    </div>
    <form method="post" action="{{route('accounts.dologout')}}">
        @csrf
        <button class="btn btn-warning btn btn-primary w-8 py-2" type="submit">ログアウト
        </button>
        <input type="hidden" name="action" value="dologout">
    </form>
</header>
@yield('body')
<script src="/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>
</html>
