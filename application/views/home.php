<div style="text-align: center;">
    <form class="form-inline" action="<?php print base_url("search"); ?>" method="get">
        <div class="input-append">
            <div style="text-align: left;">
                <input type="text" name="q" id="search-box" class="input-xlarge" autocomplete="off" value="<?php print isset($query)?$query:""; ?>"/>
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </div>
    </form>
</div>