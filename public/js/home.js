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
        
        $(".back-button").on({
            click: function(){
                location.href = Indexie.config.baseURL + "/search/i/" + $(this).data("query");
            }
        });
        
        $(".back-drug-button").on({
            click: function(){
                location.href = Indexie.config.baseURL + "/drug/i/" + $(this).data("altid");
            }
        });
        
        $("#search-form").on({
            submit: function(event){
                location.href = Indexie.config.baseURL + "/search/i/" + $("#search-box").val();
                event.preventDefault();
                return false;
            }
        });
        
    });

}(jQuery));