<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <button class="header__button-submit" type="submit">Login</button>
            <a class="header__logo" href="/">FashionablyLate</a>
        </div>
    </header>

    <main>
        <div class="admin__contact">
            <div class="admin__heading">
                <h2>Admin</h2>
            </div>
        </div>

        <div class="search">
            <div class="search__group">
                <div class="search__group-searchinput">
                    <input
                        class="input_searchinput"
                        type="text"
                        id="searchinput"
                        placeholder="名前やメールアドレスを入力してください" />
                </div>
                <div class="search__group-gender">
                    <select name="gender">
                        <option value="" disabled selected>性別</option>
                        <option value="男性">男性</option>
                        <option value="女性">女性</option>
                        <option value="その他">その他</option>
                    </select>
                </div>
                <div class="search__group-detail">
                    <select name="detail">
                        <option value="" disabled selected>お問い合せの種類</option>
                        <option value="商品のお届けについて">商品のお届けについて</option>
                        <option value="商品の交換について">商品の交換について</option>
                        <option value="商品トラブル">商品トラブル</option>
                        <option value="ショップへのお問い合せ">
                            ショップへのお問い合せ
                        </option>
                        <option value="その他">その他</option>
                    </select>
                </div>
                <div class="search__group-date">
                    <input type="date" />
                </div>
                <div class="search__group-button">
                    <button class="search__button-search" type="submit">検索</button>
                    <button class="search__button-reset" type="reset">リセット</button>
                </div>
            </div>
        </div>

        <div class="export__contact">
            <div class="export__contact-button">
                <button class="export__button">エクスポート</button>
            </div>
        </div>

        <form class="form">
            <div class="admin-table">
                <table class="admin-table__inner">
                    <thead>
                        <tr class="admin-table__row">
                            <th class="admin-table__header">お名前</th>
                            <th class="admin-table__header">性別</th>
                            <th class="admin-table__header">メールアドレス</th>
                            <th class="admin-table__header">お問い合せの種類</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="admin-table__row">
                            <td class="admin-table__text">
                                <input type="text" name="name" value="サンプルテキスト" />
                            </td>
                            <td class="admin-table__text">
                                <input type="text" name="gender" value="サンプルテキスト" />
                            </td>
                            <td class="admin-table__text">
                                <input type="text" name="email" value="サンプルテキスト" />
                            </td>
                            <td class="admin-table__text">
                                <input type="text" name="detail" value="サンプルテキスト" />
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="admin-table__button">
                    <button class="table__button" type="submit">詳細</button>
                </div>
            </div>
        </form>
    </main>
</body>

</html>