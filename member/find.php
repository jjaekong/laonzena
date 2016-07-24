<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
</head>
<body class="member find">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main id="content" tabindex="-1">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-offset-1 col-lg-10">
                    <div class="content-box">
                        <div class="content-cell">
                            <div class="find-area row">
                                <h3>아이디/비밀번호 찾기</h3>
                                <div class="col-lg-5">
                                    <div class="find-id-area">
                                        <h4>아이디 찾기</h4>
                                        <form class="form-horizontal">
                                            <div class="form-group">
                                                <label for="find-id-name" class="col-sm-3 control-label">이름</label>
                                                <div class="col-sm-9">
                                                    <input id="find-id-name" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="find-id-email" class="col-sm-3 control-label">E-mail</label>
                                                <div class="col-sm-9">
                                                    <input id="find-id-email" type="email" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group btn-area">
                                                <button type="submit" class="btn">확인</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-lg-offset-2">
                                    <div class="find-pw-area">
                                        <h4>비밀번호 찾기</h4>
                                        <form class="form-horizontal">
                                           <div class="form-group">
                                                <label for="find-pw-userid" class="col-sm-3 control-label">아이디</label>
                                                <div class="col-sm-9">
                                                    <input id="find-pw-userid" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="find-pw-name" class="col-sm-3 control-label">이름</label>
                                                <div class="col-sm-9">
                                                    <input id="find-pw-name" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="find-pw-email" class="col-sm-3 control-label">E-mail</label>
                                                <div class="col-sm-9">
                                                    <input id="find-pw-email" type="email" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group btn-area">
                                                <button type="submit" class="btn">확인</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
