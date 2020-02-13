<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teste JQUERY</title>


</head>

<body>
    <button id="cadastrar">Cadastrar</button>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $("#cadastrar").click(function() {
            

            $.ajax({
                url: "http://localhost/apiphp/product/create.php",
                type: 'post',
                data: JSON.stringify( {

                    "name": "Sorvete de gelatina",
                    "price": "10",
                    "description": "Um sorvete maravilhoso",
                    "category_id": 2,
                    "created": "2019-06-01 00:35:07"

                }),
                dataType: 'json',
               
                success: function(Resultado) {
                    console.log(Resultado)
                },
                error: function(xhr, textStatus, errorThrown) {
                    console.log( xhr.responseText + " -> " + textStatus);
                }
           
            });




        });
    </script>
</body>

</html>