// 메뉴 클릭 시
$(document).on('click', '#gnb > ul > li > a', function(e) {
    if ($(document).width() < 1200) {
        if ($(this).siblings('ul').length > 0) {
            if ($(this).parent().hasClass('active')) {
                $(this).parent().removeClass('active');
            } else {
                $(this).parent().siblings('.active').removeClass('active');
                $(this).parent().addClass('active');
            }
            e.preventDefault();
        }
    } else {
        if ($(this).siblings('ul').length > 0) {
            e.preventDefault();
        }
    }
});

// 마우스 오버
$(document).on('mouseover focus', '#gnb > ul > li > a', function(e) {
    if ($(document).width() >= 1200) {
        $(this).parent().siblings('.active').removeClass('active');
        $(this).parent().addClass('active');
    }
});

// 메뉴 여닫기 버튼
$(document).on('click', '#header .btn-menu', function(e) {
    $('body').toggleClass('gnb-opened');
});
