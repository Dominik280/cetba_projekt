<title>Anotace knihy</title>    
<div class="container">
    <h1 class="text-center">Anotace</h1>
    <table class="table table-bordered table-dark text-center">
    <tr>
      <th>Název knihy</th>
      <th>Anotace</th>
    </tr>
    <?php foreach ($knihy_anotace as $an) { ?>
            <tr>
                <td><?= $an->nazev_knihy; ?></td>
                <td><?= $an->anotace; ?></td>
            </tr>
        <?php } ?>
    </table>

</div>