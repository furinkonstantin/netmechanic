$(function() {
    
    $(document).on("submit", "#contact-form", function(e) {
        e.preventDefault();
        var url = $(this).data("url");
        var serialize = $(this).serialize();
        BX.showWait();
        $.post(
            url,
            serialize,
            function(data) {
                $("#feedback_block").html($(data).find("#feedback_block").html());
                BX.closeWait();
            }
        );
    });

    $(document).on("click", "#feedback_modal", function() {
        var url = $(this).data("url");
        if (!$("#contact-form").length) {
            $.post(
                url,
                "",
                function(data) {
                    $("#feedback_block").html($(data).find("#feedback_block").html());
                }
            );
        }
    });
});