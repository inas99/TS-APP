<link href="<?= ROOT ?>/public/css/pdf-style.css" type="text/css" rel="stylesheet" />
<page backtop="20mm" backbottom="10mm" backleft="10mm" backright="10mm">
    <?php
    require_once ROOT.'/App/Views/pdf/pdf-header-footer.php';
    ?>

    <table cellspacing="0" cellpadding="0">
        <tr>
            <td style="width: 50%">
                <table cellspacing="0" cellpadding="0">
                    <tr><td style="width: 100%"><h3>Consumer</h3></td></tr>
                    <tr><td style="width: 100%"><?= $invoice_clt->client_name ?></td></tr>
                    <tr><td style="width: 100%"><?= $invoice_clt->city ?></td></tr>
                    <tr><td style="width: 100%"><?= $invoice_clt->address ?></td></tr>
                </table>
            </td>
            <td  style="width: 50%">
                <table cellspacing="0" cellpadding="0">
                    <tr><td style="width: 100%"><h3>Invoice</h3></td></tr>
                    <tr><td style="width: 100%">Number: <?= $invoice_clt->num ?></td></tr>
                    <tr><td style="width: 100%">Date: <?= $invoice_clt->dt ?></td></tr>
                    <tr><td style="width: 100%">Subject:<?= $invoice_clt->subject ?></td></tr>
                </table>
            </td>

        </tr>
    </table>
    <br>
    <br>
    <br>
    <br>
    <table class="pdf-table" cellspacing="0" cellpadding="0">
        <thead>
        <tr>
            <th style="width: 15%">Total</th>
            <th style="width: 15%">Price</th>
            <th style="width: 10%">Quantity</th>
            <th style="width: 10%">Unit</th>
            <th style="width: 35%">Name</th>
            <th style="width: 20%">Code</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach($invoice_clt_arts as $invoice_clt_art): ?>
            <tr>
                <td><?= App::nFormat($invoice_clt_art->total) ?></td>
                <td><?= App::nFormat($invoice_clt_art->price) ?></td>
                <td><?= $invoice_clt_art->qte ?></td>
                <td><?= $invoice_clt_art->unit ?></td>
                <td><?= $invoice_clt_art->desig ?></td>
                <td><?= $invoice_clt_art->ref ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <br>
    <br>
    <table class="pdf-table" cellspacing="0" cellpadding="0">
        <thead>
        <tr>
            <th style="width: 33%">Total TTC</th>
            <th style="width: 34%">Fees TVA <span><?= number_format($totals->total_tva_rate,0,'','') ?> %</span></th>
            <th style="width: 33%">Total</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= App::nFormat($totals->total_ttc) ?></td>
                <td><?= App::nFormat($totals->total_tva) ?></td>
                <td><?= App::nFormat($totals->total_ht) ?></td>
            </tr>
        </tbody>
    </table>





</page>