var scollHeight = 0;
$(function () {
    setInterval(bindEvents, 10000);
});

function bindEvents() {
    if ($(document).height() == scollHeight) {
        return false;
    }
    scollHeight = $(document).height();
    $(".tag_movie_name").each(function () {
        if ($(this).find(".x").size() > 0) {
            return;
        }
        var movieName = $(this).find("a").first().text();
        $.post("http://movie.wukan.org/?s=Plus-Api-fav.html", {
            "name": movieName
        });
        //alert("add.click")
//        $(this).find("a").addClass("x").click(function () {
//            var movieName = $(this).text();
//            $.post("http://movie.wukan.org/?s=Plus-Api-fav.html", {
//                "name": movieName
//            });
//            return false;
//        })
    });
}

