(function($) {

    $(function() {
        if ($.support.ajax) {
            $("#search-box").typeahead({
                source: function(query, process) {
                    if (query !== "") {
                        return $.ajax({
                            url: Indexie.config.apiURL + "/search/suggest",
                            dataType: "json",
                            type: "get",
                            cache: false,
                            data: {
                                q: query
                            },
                            success: function(data) {
                                var out = [];
                                if (data["suggestions"]) {
                                    return process(data["suggestions"]);
                                }
                                return [];
                            },
                            error: function() {
                                return [];
                            }
                        });
                    }
                }

            });
        }
    });

}(jQuery));