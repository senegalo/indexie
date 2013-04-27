$(function() {
    $(".search-list-item").on({
        "click": function() {
            location.href = Indexie.config.baseURL + '/' + $(this).data("id");
        }
    });
});
