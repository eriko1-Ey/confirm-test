<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/register.css') }}" />
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <button class="header__button-submit" type="submit">login</button>
            <a class="header__logo" href="/">FashionablyLate</a>
        </div>
    </header>

    <main>
        <div class="register-form__content">
            <div class="register-form__heading">
                <h2>Register</h2>
            </div>
            <form class="form">
                <div clas="form__group">
                    <div class="form__group-title">
                        <span class="form__lavel-item">お名前</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input-item">
                            <input type="text" name="name" placeholder="例:山田 太郎" />
                        </div>
                        <div class="form__error"></div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__lavel-item">メールアドレス</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input-item">
                            <input
                                type="email"
                                name="email"
                                placeholder="例:test@example" />
                        </div>
                        <div class="form__error"></div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__lavel-item">パスワード</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input-item">
                            <input
                                type="password"
                                name="password"
                                placeholder="例:coachtech1106" />
                        </div>
                        <div class="form__error"></div>
                    </div>
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">登録</button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>