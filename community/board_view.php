<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
</head>
<body class="community board">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main id="content" tabindex="-1">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-12">
                    <div class="content-box">
                        <div class="content-cell">
                            <div class="board-view">
                                <h3>공지사항</h3>
                                <article>
                                    <header>
                                        <h4>공지사항입니다.</h4>
                                        <dl class="date">
                                            <dt>작성일</dt>
                                            <dd>2016-07-15</dd>
                                        </dl>
                                        <dl class="hit">
                                            <dt>조회수</dt>
                                            <dd>167</dd>
                                        </dl>
                                    </header>
                                    <div class="details">
                                        <p>
                                            안녕하세요 라온제나입니다.
                                        </p>
                                        <p>
                                            공지사항을 알려드립니다.
                                        </p>
                                    </div>
                                </article>
                                <div class="btn-area">
                                    <p>
                                        <a href="#" class="btn btn-edit">수정</a>
                                        <a href="#" class="btn btn-delete">삭제</a>
                                    </p>
                                    <p>
                                        <a href="./board.php" class="btn btn-list">목록</a>
                                    </p>
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
