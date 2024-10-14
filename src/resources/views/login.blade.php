<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <button class="header__button-submit" type="submit">Login</button>
            <a class="header__logo" href="/">FashinablyLate</a>
        </div>
    </header>

    <main>
        <div class="login__contact">
            <div class="login__heading">
                <h2>Login</h2>
            </div>
            <form class="form">
                <div class="form__group">
                    <span class="form__group-title">メールアドレス</span>
                    <div class="form__group-content">
                        <input type="email" name="email" placeholder="例:test@example" />
                    </div>
                    <div class="form__error"></div>
                </div>
                <div class="form__group">
                    <span class="form__group-title">パスワード</span>
                    <div class="form__group-content">
                        <input
                            type="password"
                            name="password"
                            placeholder="例:coachtech1106" />
                    </div>
                    <div class="form__error"></div>
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">ログイン</button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>