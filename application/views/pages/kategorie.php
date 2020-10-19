
<!doctype html>
<html lang="en">
    <title>kategorie</title>
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
        <h1 class="nadpis">Znáš kategorie podle názvu?</h1>
        <table class= "table table-bordered table-dark nadpis">
            <?php foreach ($kategorie as $kat) { ?>   
            <tr>
              <td class="text-center"><a href="<?php echo base_url('Controller/knihy_kategorie/'.$kat->id) ?>"><?= $kat->nazev_knihy; ?></a></td>
            </tr>
        <?php } ?>
        </table>
        </div>
    </body>
</html>