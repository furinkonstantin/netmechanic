$(function() {
    $(document).on("click", "#feedback_rate", function(e) {
        e.preventDefault();
        $("#MESSAGE").val($(this).closest(".pricing-plan").find(".price-title span").eq(0).text() + ".");
    });
});