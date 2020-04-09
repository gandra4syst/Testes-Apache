<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Ajax 1</title>
    <script src="../assets/jquery-3.4.1.min.js"></script>
</head>
<body>
   <p id="text">Texto original</p>
   <button onclick = "alterar()">Alterar</button>

   <script>
        function alterar() {
            $.ajax({
                type: 'GET',
                url: 'resposta.php',
                success: function(dados) {
                   // document.getElementById('text').innerHTML=dados;
                   $('#text').text(dados);
                },
                error: function() {
                    console.log('ERRO');
                }
            });
        }
   </script> 
</body>
</html>