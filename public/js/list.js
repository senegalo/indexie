$(function() {
    $(".search-results").on({
        click: function() {
            location.href = Indexie.config.baseURL + '/drug/i/' + $(this).data("id") + '/' + $("#search-box").val();
        }
    },"tr");
});
