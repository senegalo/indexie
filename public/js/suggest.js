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
                                theSuggestions.empty();
                                var out = [];
                                if (data["suggestions"]) {
                                    for (var item in data['suggestions']) {
                                        out.push(data['suggestions'][item]);
                                    }
                                }
                                return out;
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