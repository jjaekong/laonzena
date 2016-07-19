// 메뉴 클릭 시
$(document).on('click', '#gnb > .container > ul > li > a', function(e) {
    if ($(this).parent().hasClass('active')) {
        $(this).parent().removeClass('active');
    } else {
        $(this).parent().siblings('.active').removeClass('active');
        $(this).parent().addClass('active');
    }
    e.preventDefault();
});

// 메뉴 여닫기 버튼
$(document).on('click', '#header .btn-menu', function(e) {
    $('body').toggleClass('gnb-opened');
});
