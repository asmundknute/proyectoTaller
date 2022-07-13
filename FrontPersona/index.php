<!DOCTYPE html>
<html lang="en">

<head>
    <title>Agregar addPersona</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function agregarUsuario() {
            let rut = parseInt( document.getElementById('rut').value);
            let nombre = document.getElementById('nombre').value;
            let mutation = `
            mutation miMutation( $input: PersonaInput) {
                    addPersona(input: $input){
                        id
                        rut
                        nombre
                    }
                }
            `;
            $.ajax({
                type: "POST",
                url: "http://localhost:8090/graphql",
                contentType: "application/json",
                timeout: 15000,
                data: JSON.stringify({
                    query: mutation,
                    variables: {
                        input: {
                            rut: rut,
                            nombre: nombre
                        }
                    }
                }),
                success: function(response) {
                    alert(response.data.addPersona.id);
                }
            })
        }
    </script>

</head>

<body>

    <div class="container mt-3">
        <h2>Agregar Persona</h2>
        <form action="/action_page.php">
            <div class="mb-3 mt-3">
                <label for="rut">Rut:</label>
                <input type="text" class="form-control" id="rut" name="rut">
            </div>
            <div class="mb-3">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre">
            </div>

            <button type="button" onclick="agregarUsuario();" class="btn btn-primary">Agregar</button>
        </form>
    </div>

</body>

</html>