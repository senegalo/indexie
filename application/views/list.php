<table class="table table-hover table-striped search-results">

    <?php
    foreach ($list as $result):
        $hoba = true;
        ?>
        <tr data-id="<?php print $result->id; ?>">
            <td style="width:85%;">
                <strong><?php print $result->tradeName; ?></strong><br/>
                <small><em><?php print $result->genericName; ?></em></small>
            </td>
            <td style="width:15%">
                EGP <?php print $result->packPrice; ?>
            </td>
        </tr>
        <?php
    endforeach;
    if (!isset($hoba)):
        ?>
        <tr> 
            <td style="width:100%;text-align: center;"><em>No results found...</em></td>
        </tr>
    <?php endif; ?>
</table>