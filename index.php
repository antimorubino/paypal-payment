<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <title>Esempio di form di pagamento con paypal</title>
    </head>
    <body>
        <div class="container mt-5 p-5 border rounded">
            <?php if($_SERVER['REQUEST_METHOD'] == 'GET'): ?>
            <form class="" action="#" method="post">
                <div class="form-group">
                    <label for="prodotto">Prodotto</label>
                    <input type="text" class="form-control" id="prodotto" name="prodotto" value="">
                </div>
                <div class="form-group">
                    <label for="cifra">Cifra (Formato 0.00)</label>
                    <input type="text" class="form-control" id="cifra" name="cifra" value="">
                </div>
                <button type="submit" class="btn btn-danger text-uppercase">Procedi >></button>
            </form>
            <?php else: ?>
            <?php
                $prodotto = str_replace(' ', '%20', $_REQUEST['prodotto']);
                $cifra = $_REQUEST['cifra'];
                $link = 'https://sandbox.paypal.com/cgi-bin/webscr?cmd=_xclick&business=2RVDBF5JPR4BC&item_name=';
                $link .= $prodotto;
                $link .= '&amount=';
                $link .= $cifra;
                $link .= '&currency_code=EUR';
            ?>
            <div class="">
                Riepilogo del tuo pagamento per il prodotto: <?= $_POST['prodotto']; ?><br /><br />
                <a href="<?= $link; ?>" class="btn btn-success text-uppercase">Vai al pagamento</a>
            </div>
            <?php endif; ?>

        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>
