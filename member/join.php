<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
</head>
<body class="member join">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main id="content" tabindex="-1">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-offset-1 col-lg-10">
                    <div class="content-box">
                        <div class="content-cell">
                            <div class="join-area">
                                <h3>회원가입</h3>
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label for="user-id" class="col-xs-12 col-sm-4 col-lg-3 control-label">아이디</label>
                                        <div class="col-xs-8 col-sm-4">
                                            <input id="user-id" type="text" class="form-control">
                                        </div>
                                        <div class="col-xs-4 col-sm-4">
                                            <button type="button" class="btn btn-checkid">중복확인</button>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="col-sm-4 col-lg-3 control-label">비밀번호</label>
                                        <div class="col-sm-8 col-lg-4">
                                            <input id="password" type="password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="re-password" class="col-sm-4 col-lg-3 control-label">비밀번호확인</label>
                                        <div class="col-sm-8 col-lg-4">
                                            <input id="re-password" type="password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="user-name" class="col-sm-4 col-lg-3 control-label">이름</label>
                                        <div class="col-sm-8 col-lg-4">
                                            <input id="user-name" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 col-lg-3 control-label">성별</label>
                                        <div class="col-sm-8">
                                            <label>
                                                <input type="radio"> 남
                                            </label>
                                            <label>
                                                <input type="radio"> 여
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="birth" class="col-sm-4 col-lg-3 control-label">생년월일</label>
                                        <div class="col-sm-4">
                                            <input id="birth" type="text" class="form-control" placeholder="19850101">
                                        </div>
                                        <div class="col-sm-4">
                                            <label>
                                                <input type="radio"> 양력
                                            </label>
                                            <label>
                                                <input type="radio"> 음력
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group addr">
                                        <label for="zipcode" class="col-xs-12 col-sm-4 col-lg-3 control-label">주소</label>
                                        <div class="col-xs-6 col-sm-4">
                                            <input id="zipcode" type="text" class="form-control">
                                        </div>
                                        <div class="col-xs-6 col-sm-4">
                                            <button type="button" class="btn btn-zipcode">우편번호 찾기</button>
                                        </div>
                                        <div class="col-xs-12 col-sm-offset-4 col-sm-8 col-lg-offset-3 col-lg-9">
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-xs-12 col-sm-offset-4 col-sm-8 col-lg-offset-3 col-lg-9">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone" class="col-sm-4 col-lg-3 control-label">일반전화</label>
                                        <div class="col-sm-8 col-lg-4">
                                            <input id="phone" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="mobile" class="col-sm-4 col-lg-3 control-label">휴대전화</label>
                                        <div class="col-sm-8 col-lg-4">
                                            <input id="mobile" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="col-sm-4 col-lg-3 control-label">E-mail</label>
                                        <div class="col-sm-8">
                                            <input id="email" type="email" class="form-control" placeholder="username@example.com">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 col-lg-3 control-label">이메일 수신여부</label>
                                        <div class="col-sm-8">
                                            <label>
                                                <input type="radio"> 수신
                                            </label>
                                            <label>
                                                <input type="radio"> 수신안함
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 col-lg-3 control-label">SMS 수신여부</label>
                                        <div class="col-sm-8">
                                            <label>
                                                <input type="radio"> 수신
                                            </label>
                                            <label>
                                                <input type="radio"> 수신안함
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group btn-area">
                                        <button type="submit" class="btn">회원가입</button>
                                        <button type="reset" class="btn btn-cancel">취소</button>
                                    </div>
                                </form>
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
