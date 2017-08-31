<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="cesar.js"></script>
        <title>Cifra de César</title>
    </head>
    <body>
        <div class="container text-center">
            <h1>Cifra de César</h1>
            <hr>
            <form class="" action="index.html" method="post">
                <div class="form-row">
                    <div class="col">
                        <textarea name="txt_encript" id="txt_encript" class="form-control" rows="8" cols="80" placeholder="Insira aqui o texto que deseja codificar"></textarea>
                    </div>
                    <div class="col">
                        <textarea name="txt_decript" id="txt_decript" class="form-control" rows="8" cols="80" placeholder="Insira aqui o texto que deseja decifrar"></textarea>
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col">
                        <div class="input-group">
                            <input type="number" class="form-control" id="txt_key_encript" placeholder="Insira aqui sua chave">
                            <div class="input-group-addon">
                                <button type="button" name="btn_encript" id="btn_encript" class="btn btn-primary">Codificar</button>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group">
                            <input type="number" class="form-control" id="txt_key_decript" placeholder="Insira aqui sua chave">
                            <div class="input-group-addon">
                                <button type="button" name="btn_decript" id="btn_decript" class="btn btn-success">Decodificar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <hr>
            <h2>Resultado</h2>
            <div class="col">
                <textarea name="txt_result" id="txt_result" class="form-control" rows="8" cols="80" placeholder="Resultado gerado pela codificação/decodificação" disabled></textarea>
            </div>
        </div>
    </body>
</html>
