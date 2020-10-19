<title>Kategorie</title>    
<div class="container">
    <h1 class="text-center">Kategorie číslo:</h1>
    <table class="table table-bordered table-dark text-center">
    <?php foreach ($knihy_kategorie as $kk) { ?>
            <tr>
                <td><?= $kk->kategorie_id_kategorie; ?></td>
            </tr>
        <?php } ?>
    </table>

</div>