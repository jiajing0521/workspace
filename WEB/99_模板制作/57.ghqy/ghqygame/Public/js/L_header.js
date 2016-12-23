/**
 * Created by dllo on 16/12/12.
 */
(function () {
   var l_bar = document.querySelector(".l_bar");
    var l_bar_warp =document.querySelector(".l_bar_warp");
    l_bar.onmouseenter =function () {
        l_bar_warp.style.display="block";
    };
    l_bar.onmouseleave =function () {
        l_bar_warp.style.display="none";
    };
})();
