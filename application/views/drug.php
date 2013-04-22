<table cellpadding="10" cellspacing="0">
    <tr>
        <td class="label">Trade Name:</td>
        <td class="value"><?php print $drug->tradeName; ?></td>
    </tr>
    <tr>
        <td class="label">Price:</td>
        <td class="value">EGP <?php print $drug->packPrice; ?></td>
    </tr>
    <tr>
        <td class="label">Generic Name:</td>
        <td class="value"><a href="<?php print base_url()."drug/alternatives/".$drug->id; ?>"><?php print $drug->genericName; ?></a></td>
    </tr>
    <tr>
        <td class="label">Dosage Form:</td>
        <td class="value"><?php print $drug->dosageForm; ?></td>
    </tr>
    <tr>
        <td class="label">Pack:</td>
        <td class="value"><?php print $drug->packCount." ".$drug->packUnit; ?></td>
    </tr>
    <tr>
        <td class="label">Strength:</td>
        <td class="value"><?php print $drug->strengthValue." ".$drug->strengthUnit; ?></td> 
    </tr>
    <tr>
        <td class="label">Man. Name:</td>
        <td class="value"><?php print $drug->manufacturerName; ?></td>
    </tr>
</table>