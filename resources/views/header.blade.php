<!DOCTYPE html>
<html>
<head>
    <title>Bath Log</title>
    <!-- Bootstrap CSSを読み込む -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <!-- ナビゲーションバーを作成 -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">ばすろぐ</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">ホーム <span class="sr-only">(現在位置)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ページ1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ページ2</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        ドロップダウンメニュー
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">アイテム1</a>
                        <a class="dropdown-item" href="#">アイテム2</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
