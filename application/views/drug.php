<table class="table table-striped table-hover">
    <tr>
        <td class="drug-item-label">Trade Name:</td>
        <td class="drug-item-value"><?php print $drug->tradeName; ?></td>
    </tr>
    <tr>
        <td class="drug-item-label">Price:</td>
        <td class="drug-item-value">EGP <?php print $drug->packPrice; ?></td>
    </tr>
    <tr>
        <td class="drug-item-label">Generic Name:</td>
        <td class="drug-item-value"><a href="<?php print base_url()."drug/alternatives/".$drug->id; ?>"><?php print $drug->genericName; ?></a></td>
    </tr>
    <tr>
        <td class="drug-item-label">Dosage Form:</td>
        <td class="drug-item-value"><?php print $drug->dosageForm; ?></td>
    </tr>
    <tr>
        <td class="drug-item-label">Pack:</td>
        <td class="drug-item-value"><?php print $drug->packCount." ".$drug->packUnit; ?></td>
    </tr>
    <tr>
        <td class="drug-item-label">Strength:</td>
        <td class="drug-item-value"><?php print $drug->strengthValue." ".$drug->strengthUnit; ?></td> 
    </tr>
    <tr>
        <td class="drug-item-label">Man. Name:</td>
        <td class="drug-item-value"><?php print $drug->manufacturerName; ?></td>
    </tr>
</table>