$(".categories-content-main > div:not(:first)").hide();
$(".categories-tab > ul li").click(function () {
var $index = $(this).index();
$(".categories-content-main > div").eq($index).fadeIn('fast').siblings("div").hide();
$(this).addClass("activetab").siblings().removeClass("activetab");
});