
<!doctype html>
<html lang="en">
    <style>
        /* unvisited link */
        a:link {
        color: white;
        }

        /* mouse over link */
        a:hover {
        color: grey;
        }

        /* visited link */
        a:visited {
        color: grey;
        }

        /* selected link */
        a:active {
        color: blue;
        }
      .navbar-marg
      {
        margin-bottom: 25px;
      }
      .nadpis
      {
        text-align: center;
      }
    </style>

    <body>
        <div class= "container">
        <h1 class="nadpis">Seznam knih</h1>
        <table class= "table table-bordered table-dark nadpis">
            <tr>
            <th>Název</th>
            <th>Autor</th>
            <th>Kategorie</th>
            <th>Anotace</th>
            </tr>

            <?php foreach ($vypis as $vyp) { ?>   
            <tr>
              <td><?= $vyp->nazev_knihy?></td>
              <td><?= $vyp->autor?></td>
              <td><?= $vyp->kategorie_id_kategorie?></td>
              <td class="text-center"><a href="<?php echo base_url('Controller/knihy_anotace/'.$vyp->id) ?>"><?= $vyp->nazev_knihy; ?></a></td>
            </tr>
        <?php } ?>
        </table>
        <a style="color: black" href="Dokumentace_cetba_projekt.pdf" download="Dokumentace_cetba_projekt">
         <p>DOKUMENTACE ZDE</p>
        </a>
        </div>
    </body>
</html>