let nav=document.querySelector("#navarea");
let btn=document.querySelector(".toggle-btn");

btn.onclick=()=>{
    nav.classList.toggle("open");
}

const animateFade=(entries,obs)=>{
    entries.forEach((entry)=>{
        if(entry.isIntersecting){
        entry.target.animate(
            {
                opacity:[0,1],
                filter:['blur(.4rem)','blur(0)'],
                translate:['0 4rem',0],
            },
            {
                duration:2000,
                easing:'ease',
                fill:'forwards',
            }
        );
        obs.unobserve(entry.target);
    }
    });
};

const fadeObserver = new IntersectionObserver(animateFade);

const fadeElements = document.querySelectorAll('.fadeIn');
fadeElements.forEach((fadeElement)=>{
    fadeObserver.observe(fadeElement);
});


$(function(){
    // １　スクロールしたときに～
    $(window).scroll(function(){
      // ２　スクロール量が200を超えているかどうか
    if($(window).scrollTop() > 200){
        // ３　超えていたら、small クラスを追加
        $(".header-logo").addClass("small");
    }else{
        // ４　超えない場合、small クラスを削除
        $(".header-logo").removeClass("small");
    }
    });
});