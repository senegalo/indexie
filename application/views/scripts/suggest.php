<script type="text/javascript">
    $(function(){
        if($.support.ajax){
            var theSuggestions = $(".search-suggestions");
            $("#search-box").on({
                "keyup": function(){
                    var that = $(this);
                    var theValue = that.val();
                    if(theValue != ""){
                        $.ajax({
                            url: "<?php print $api_location; ?>/search/suggest",
                            dataType: "json",
                            type: "get",
                            cache: false,
                            data: {
                                q: theValue
                            },
                            success: function(data){
                                theSuggestions.empty();
                                var newSug = "";
                                if(data["suggestions"]){
                                    for(var item in data['suggestions']){
                                        newSug += '<div class="suggestions">'+data['suggestions'][item]+"</div>";
                                    }
                                }
                                theSuggestions.append(newSug);
                                $(".suggestions").on({
                                    "click": function(){
                                        location.href = '<?php print base_url("search");; ?>'+'?q='+$(this).text();
                                    }
                                });
                            }
                        });
                    }
                }
                
            });
        }
    });
</script>