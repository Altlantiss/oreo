$(document).ready(function(){
    //下拉框插件
    $('.select').on('click', '.placeholder', function(e) {
        var parent = $(this).closest('.select');
        if (!parent.hasClass('is-open')) {
            parent.addClass('is-open');
            $('.select.is-open').not(parent).removeClass('is-open');
        } else {
            parent.removeClass('is-open');
        }
        e.stopPropagation();
    }).on('click', 'ul>li', function() {
        var parent = $(this).closest('.select');
        parent.removeClass('is-open').find('.placeholder').text($(this).text());
    });

    $('body').on('click', function() {
        $('.select.is-open').removeClass('is-open');
    });

//年月日插件
    $("#date").selectDate()


    //左侧菜单点击事件
    var listDetailLi = $(".list-detail ul li");
    var contentDetailBox = $(".content-detail-box");
    listDetailLi.on("click",function(){
        if( $(this).index() != 3 ){
            contentDetailBox.eq($(this).index()).addClass("content-detail-box-active");
            contentDetailBox.eq($(this).index()).siblings().removeClass("content-detail-box-active");
            listDetailLi.eq($(this).index()).addClass("list-detail-active");
            listDetailLi.eq($(this).index()).siblings().removeClass("list-detail-active");
        }else{

        }

    })
})


