<?php require_once($_SERVER['DOCUMENT_ROOT'].'/kr/inc/dochead.php'); ?>
</head>
<body class="member login">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/kr/inc/header.php'); ?>
    <main id="content" tabindex="-1">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-offset-1 col-md-10 col-lg-offset-3 col-lg-6">
                    <div class="content-box">
                        <div class="content-cell">
                            <div class="login-area">
                                <h3>LOGIN</h3>
                                <form>
                                    <div class="form-group">
                                        <label for="user-id" class="sr-only">아이디</label>
                                        <input id="user-id" type="text" class="form-control" placeholder="아이디">
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="sr-only">비밀번호</label>
                                        <input id="password" type="password" class="form-control" placeholder="비밀번호">
                                    </div>
                                    <div class="form-group btn-area">
                                        <button type="submit" class="btn btn-block">회원가입</button>
                                    </div>
                                </form>
                                <div class="help row">
                                    <div class="col-lg-6">
                                        <p>라온제나에 회원가입 하시면<br class="visible-xs-inline">더많은 혜택을 누리실 수 있습니다.</p>
                                        <a class="btn" href="/kr/member/join.php">회원가입</a>
                                    </div>
                                    <div class="col-lg-6">
                                        <p>아이디/비밀번호를 잊으셨나요?</p>
                                        <a class="btn" href="/kr/member/find.php">아이디/비밀번호 찾기</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/kr/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/kr/inc/docfoot.php'); ?>
</body>
</html>
