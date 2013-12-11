var scollHeight = 0;
$(function () {
    setInterval(bindEvents, 1000);
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
        //alert("add.click")
        $(this).find("a").addClass("x").click(function () {
            var movieName = $(this).text();
            $.post("http://movie.wukan.org/?s=Plus-Api-fav.html", {
                "name": movieName
            });
            return false;
        })
    });
}

