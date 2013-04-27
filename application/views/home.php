<div style="text-align: center;">
    <div class="row-fluid">
        <div class="span2">
            <?php if (isset($back_button) && isset($query) && trim($query) !== ""): ?>
                <button type="button" class="btn btn-inverse back-button" data-query="<?php print $query; ?>" style="margin-bottom: 1.5em;">Back to results</button>
            <?php endif; ?>
            <?php if (isset($back_alt_button)): ?>
                <button type="button" class="btn btn-inverse back-drug-button" data-altid ="<?php print $alt_id; ?>" style="margin-bottom: 1.5em;">Back to Drug</button>
            <?php endif; ?>
        </div>
        <div class="span4 offset2">
            <form id="search-form" action="<?php print base_url("search"); ?>" method="get">
                <div class="input-append">
                    <div style="text-align: left;">
                        <input type="text" name="q" id="search-box" class="" autocomplete="off" value="<?php print isset($query) ? urldecode($query) : ""; ?>"/>
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>