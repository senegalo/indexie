<?php
foreach ($list as $result):
    $hoba = true;
?>

<div class="search-list-item" data-id="<?php print $result->id; ?>">
    <div class="search-list-item-name">
        <div class="search-list-item-tradename"><?php print $result->tradeName; ?></div>
        <div class="search-list-item-genericname"><?php print $result->genericName; ?></div>
    </div>
    <div class="search-list-item-price">EGP <?php print $result->packPrice; ?></div>
    <div style="clear:both;"></div>
</div>

<?php
endforeach;
if(!isset($hoba)):
?>
<div style="width:100%;text-align: center;"><em>No results found...</em></div>
<?php endif; ?>
