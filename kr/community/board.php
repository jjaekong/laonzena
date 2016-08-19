<?php require_once($_SERVER['DOCUMENT_ROOT'].'/kr/inc/dochead.php'); ?>
</head>
<body class="community board">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/kr/inc/header.php'); ?>
    <main id="content" tabindex="-1">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-12">
                    <div class="content-box">
                        <div class="content-cell">
                            <div class="board-list">
                                <h3>공지사항</h3>
                                <div class="search-area">
                                    <form>
                                        <div class="form-group category">
                                            <select class="form-control">
                                                <option value="#">전체</option>
                                            </select>
                                        </div>
                                        <div class="form-group word">
                                            <label for="search-word" class="sr-only">검색어</label>
                                            <input id="search-word" type="text" class="form-control">
                                        </div>
                                        <button type="button" class="btn btn-search"><span class="glyphicon glyphicon-search"></span></button>
                                    </form>
                                </div>
                                <table class="table">
                                    <colgroup>
                                        <col>
                                        <col>
                                        <col>
                                        <col>
                                    </colgroup>
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>제목</th>
                                            <th>작성일</th>
                                            <th>조회</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>10</td>
                                            <td class="title"><a href="./board_view.php">공지사항 입니다.</a></td>
                                            <td>1016-07-15</td>
                                            <td>134</td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td class="title"><a href="#">공지사항 입니다.</a></td>
                                            <td>1016-07-15</td>
                                            <td>134</td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td class="title"><a href="#">공지사항 입니다.</a></td>
                                            <td>1016-07-15</td>
                                            <td>134</td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td class="title"><a href="#">공지사항 입니다.</a></td>
                                            <td>1016-07-15</td>
                                            <td>134</td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td class="title"><a href="#">공지사항 입니다.</a></td>
                                            <td>1016-07-15</td>
                                            <td>134</td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td class="title"><a href="#">공지사항 입니다.</a></td>
                                            <td>1016-07-15</td>
                                            <td>134</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <?php require_once($_SERVER['DOCUMENT_ROOT'].'/kr/inc/paging.php'); ?>
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
