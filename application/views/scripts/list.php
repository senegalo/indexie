<script type="text/javascript">
    $(function(){
        $(".search-list-item").on({
            "click": function(){
                 location.href = '<?php print base_url("drug"); ?>'+'/'+$(this).data("id");
            }
        })
    })
</script>