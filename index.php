<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="assets/jquery-3.4.1.min.js"></script>
</head>
<body>
    <h3>CLIENTES</h3>
    <hr>
    <div id="detalhe_cliente">
        <small>Cliente não selecionado</small>
    </div>
    <hr>
    <div id="listagem"></div>
    <button onclick = "lista()">Atualizar</button>
    
    <script>

        $(document).ready(function(){
            lista();
        });

        function lista(){
            $.ajax({
                type: "GET",
                url: "ajax/list_clientes.php",
                success: function(dados){
                    var clientes = JSON.parse(dados);
               
                    var html = "<ul>";
                
                    clientes.forEach(c=>{
                        html += "<li onclick = \"det_cliente(" + c['id_cliente'] +")\">" + c['nome'] + "</li>";
                    });
                    html += "</ul>";

                    $("#listagem").html(html);
                },

                error: function(){
                    console.log("Erro!");
                }
            });
        }

        function det_cliente(id_cliente){
            $.ajax({
                type: "POST",
                url: "ajax/detalhes_cliente.php",
                data: {id_cliente: id_cliente},
                success: function(dados){
                    console.clear();
                    console.log(dados);
                },

                error: function(){
                    console.log("Erro!");
                }
            });
        }
        
    </script>
</body>
</html>
