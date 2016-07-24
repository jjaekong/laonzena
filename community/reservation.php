<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
</head>
<body class="community reservation">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main id="content" tabindex="-1">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-offset-2 col-lg-8">
                    <div class="content-box">
                        <div class="content-cell">
                            <div class="reservation-area">
                                <h3>예약</h3>
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label for="product-type" class="col-sm-3 control-label">상품선택</label>
                                        <div class="col-sm-9">
                                            <select id="product-type" class="form-control">
                                                <option value="">웨딩패키지</option>
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="reserve-name" class="col-sm-3 control-label">예약자 성명</label>
                                        <div class="col-sm-9">
                                            <input id="reserve-name" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="reserve-email" class="col-sm-3 control-label">E-mail</label>
                                        <div class="col-sm-9">
                                            <input id="reserve-email" type="email" class="form-control" placeholder="username@example.com">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="wedding-area" class="col-sm-3 control-label">예식장소<span class="hidden-sm hidden-md">(예식지역)</span></label>
                                        <div class="col-sm-9">
                                            <input id="wedding-area" type="text" class="form-control" placeholder="서울 강남구">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="wedding-date" class="col-sm-3 control-label">예식날짜</label>
                                        <div class="col-sm-9">
                                            <input id="wedding-date" type="text" class="form-control" placeholder="20170101">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="wedding-inquiry" class="col-sm-3 control-label">문의내용</label>
                                        <div class="col-sm-9">
                                            <textarea id="wedding-inquiry" class="form-control" cols="100" rows="10"></textarea>
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
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
