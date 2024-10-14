<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}" />
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">Fashionably</a>
        </div>
    </header>

    <main>
        <div class="contact-form__content">
            <div class="contact-form__heading">
                <h2>Contact</h2>
            </div>
            <form class="form" action="/contacts/confirm" method="post">
                @csrf
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お名前</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text-name">
                            <input
                                type="text"
                                id="last-name"
                                name="last-name"
                                placeholder="例:山田" />
                            <input
                                type="text"
                                id="first-name"
                                name="first-name"
                                placeholder="例:太郎" />
                        </div>
                        <div class="form__error"></div>
                    </div>
                </div>

                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">性別</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--radio">
                            <input type="radio" name="gender" value="男性" checked />男性
                            <input type="radio" name="gender" value="女性" />女性
                            <input type="radio" name="gender" value="その他" />その他
                        </div>
                        <div class="form__error"></div>
                    </div>
                </div>

                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">メールアドレス</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input
                                type="email"
                                name="email"
                                placeholder="test@example.com" />
                        </div>
                        <div class="form__error"></div>
                    </div>
                </div>

                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">電話番号</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="tel" name="tel" placeholder="08012345678" />
                        </div>
                        <div class="form__error"></div>
                    </div>
                </div>

                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">住所</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input
                                type="text"
                                name="address"
                                placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" />
                        </div>
                        <div class="form__error"></div>
                    </div>
                </div>

                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">建物</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input
                                type="text"
                                name="building"
                                placeholder="千駄ヶ谷マンション101" />
                        </div>
                        <div class="form__error"></div>
                    </div>
                </div>

                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お問い合せ種類</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <select name="detail">
                                <option name="detail" value="" disabled selected>選択してください</option>
                                <option name="detail" value="商品の届けについて">商品の届けについて</option>
                                <option name="detail" value="商品の交換について">商品の交換について</option>
                                <option name="detail" value="商品トラブル">商品トラブル</option>
                                <option name="detail" value="ショップへのお問い合せ">
                                    ショップへのお問い合せ
                                </option>
                                <option name="detail" value="その他">その他</option>
                            </select>
                            <div class="form__error"></div>
                        </div>
                    </div>
                </div>

                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お問い合せ内容</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--textarea">
                            <textarea
                                name="message"
                                placeholder="お問い合せ内容を記載ください"></textarea>
                        </div>
                        <div class="form__error"></div>
                    </div>
                </div>

                <div class="form__button">
                    <button class="form__button-submit" type="submit">確認画面</button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>