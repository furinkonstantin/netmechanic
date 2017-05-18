$(function() {
    $(document).on("click", "#feedback_rate", function(e) {
        e.preventDefault();
        var url = $(this).data("url");
        var text = $(this).closest(".pricing-plan").find(".price-title span").eq(0).text() + ".";
        if (!$("#contact-form").length) {
            BX.showWait();
            $.post(
                url,
                "",
                function(data) {
                    $("#feedback_block").html($(data).find("#feedback_block").html());
                    $("#MESSAGE").val(text);
                    BX.closeWait();
                }
            );
        } else {
            $("#MESSAGE").val(text);
        }
    });
});