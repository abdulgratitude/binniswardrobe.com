<script>
    if (getCookie('b-sidebar') == 1) {
        $("#b-sidebar,#main").addClass("deactive");
    } else {
        $("#b-sidebar,#main").addClass("active");
    }

    if ($(window).width() < 720 && getCookie('b-sidebar') == 1) {
        $("#b-sidebar,#main").addClass("deactive");
    }

    $(".b-sidebar-trigger").click(function() {
        if (getCookie('b-sidebar') == 1) {
            $("#b-sidebar,#main").toggleClass("deactive");
            $("#b-sidebar,#main").toggleClass("active");
            setCookie('b-sidebar', 0, 1);
        } else {
            $("#b-sidebar,#main").toggleClass("deactive");
            $("#b-sidebar,#main").toggleClass("active");
            setCookie('b-sidebar', 1, 1);
        }
    });

    function setCookie(cname, cvalue, exdays) {
        var TheCookie = Cookies.set(cname, cvalue, { expires: exdays });
    }

    function getCookie(cname) {
        return Cookies.get(cname);
    }

</script>
