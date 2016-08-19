<?php require_once($_SERVER['DOCUMENT_ROOT'].'/kr/inc/dochead.php'); ?>
</head>
<body class="main">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/kr/inc/header.php'); ?>
    <main id="content" tabindex="-1">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-4">
                    <div class="content-box">
                        <div class="content-cell">
                            <a class="video-link" href="http://www.tudou.com/programs/view/html5embed.action?type=0&code=PHowbL5xs7Q&lcode=&resourceId=0_06_05_99" data-toggle="modal" data-target="#video-modal">
                                <img class="img-responsive" src="/kr/assets/images/img_video_1.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-lg-4">
                    <div class="content-box">
                        <div class="content-cell">
                            <a class="video-link" href="http://www.tudou.com/programs/view/html5embed.action?type=0&code=u-Qz24TN14Q&lcode=&resourceId=0_06_05_99" data-toggle="modal" data-target="#video-modal">
                                <img class="img-responsive" src="/kr/assets/images/img_video_2.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-lg-4">
                    <div class="content-box">
                        <div class="content-cell">
                            <a class="video-link" href="http://www.tudou.com/programs/view/html5embed.action?type=0&code=ovI94G_1EUw&lcode=&resourceId=0_06_05_99" data-toggle="modal" data-target="#video-modal">
                                <img class="img-responsive"  src="/kr/assets/images/img_video_3.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div class="modal video-modal" id="video-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">LAONZENA MOVIE</h4>
                </div>
                <div class="modal-body">
                    <div class="embed-responsive embed-responsive-4by3">
                        <iframe src="" allowtransparency="true" allowfullscreen="true" allowfullscreenInteractive="true" scrolling="no" border="0" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/kr/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/kr/inc/docfoot.php'); ?>
    <script>
        (function($) {
            $('.video-link').on('click', function(e) {
                $('#video-modal').find('iframe').eq(0).attr('src', $(this).attr('href'));
                e.preventDefault();
            });
            $('#video-modal').on('hide.bs.modal', function(e) {
                $(this).find('iframe').eq(0).attr('src', '#');
            });
        })(jQuery);
    </script>
</body>
</html>
