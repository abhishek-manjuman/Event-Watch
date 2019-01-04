
$('.ui.item .icon.heart.current-user-profile_favourite_icon').popup();
$('.ui.item .icon.cog.current-user-profile_settings_icon').popup();
$('.ui.item .icon.share.current-user-profile_share_icon')
.popup({
    inline : true,
    popup : $('.current-user-profile_share.popup'),
 on    : 'click',
 position   : 'right center',
 transition: 'vertical flip'  
 
});



$('.menu .item').tab();
$('.menu .right.menu .ui.item .icon.cog').tab();

$('.ui.segment>.ui.header.about-edit>.icon.edit').popup();
$('.ui.segment>.ui.header.about-edit>.icon.edit').click(function(){
    $(".ui.segments>.ui.segment.about-detail-show").css({"display": "none"});
    $(".ui.segments>.ui.segment.about-edit-detail").css({"display": "block"});
});

//============Setting Page===========
$('.menu.setting .item').tab();
