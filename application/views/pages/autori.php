<title>Autoři</title>    
<div class="container">
    <h1 class="text-center">Autoři</h1>
    <table class="table table-bordered table-dark text-center">
    <?php foreach ($knihy_autori as $au) { ?>
            <tr>
                <td><?= $au->autor; ?></td>
            </tr>
        <?php } ?>
    </table>

</div>