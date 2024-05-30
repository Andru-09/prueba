<!DOCTYPE html>
<html>
<head>
    <title>Formulario POST en PHP</title>
    <!-- Incluir el CSS de Bootstrap y Font Awesome -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
    body {
        background-color: #fffbee;
        background-image: url('https://www.transparenttextures.com/patterns/hexellence.png'); /* Patrón de panal */
    }
    .card {
        border-color: #f9a602; /* Amarillo abeja */
    }
    .card-header {
        background-color: #f9a602; /* Amarillo abeja */
        color: white;
    }
    .btn-custom {
        background-color: #f9a602; /* Amarillo abeja */
        color: white;
    }
    .form-group i {
        color: #f9a602; /* Amarillo abeja */
    }
    .form-control:focus {
        border-color: #f9a602;
        box-shadow: 0 0 0 0.2rem rgba(249, 166, 2, 0.25);
    }
    .tooltip-inner {
        background-color: #f9a602;
    }
    .tooltip.bs-tooltip-auto[x-placement^=top] .arrow::before, 
    .tooltip.bs-tooltip-top .arrow::before {
        border-top-color: #f9a602;
    }
</style>


</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nombre']) && isset($_POST['apellido'])) {
                    // Procesar los datos del formulario POST
                    $nombre = htmlspecialchars($_POST['nombre']);
                    $apellido = htmlspecialchars($_POST['apellido']);
                    $edad = htmlspecialchars($_POST['edad']);
                    $numero = htmlspecialchars($_POST['numero']);
                    $email = htmlspecialchars($_POST['email']);
                    $direccion = htmlspecialchars($_POST['direccion']);
                    $empresa = htmlspecialchars($_POST['empresa']);
                    $estado = htmlspecialchars($_POST['estado']);
                    $municipio = htmlspecialchars($_POST['municipio']);
                    $codigo = htmlspecialchars($_POST['codigo']);
                    $pregunta = htmlspecialchars($_POST['pregunta']);
                    $colmenas = htmlspecialchars($_POST['colmenas']);
                    $oficio = htmlspecialchars($_POST['oficio']);
                    $alguna = htmlspecialchars($_POST['alguna']);
                    $opcional = htmlspecialchars($_POST['opcional']);
                    $datos = htmlspecialchars($_POST['datos']);
                    echo "<div class='alert alert-success'>";
                    echo "<h4 class='alert-heading'>Datos Recibidos (POST):</h4>";
                    echo "<p><i class='fas fa-user'></i> Nombre: $nombre</p>";
                    echo "<p><i class='fas fa-user'></i> Apellido: $apellido</p>";
                    echo "<p><i class='fas fa-calendar'></i> Edad: $edad</p>";
                    echo "<p><i class='fas fa-phone'></i> Número: $numero</p>";
                    echo "<p><i class='fas fa-envelope'></i> E-Mail: $email</p>";
                    echo "<p><i class='fas fa-map-marker-alt'></i> Dirección: $direccion</p>";
                    echo "<p><i class='fas fa-building'></i> Empresa: $empresa</p>";
                    echo "<p><i class='fas fa-globe'></i> Estado: $estado</p>";
                    echo "<p><i class='fas fa-map-marked-alt'></i> Municipio: $municipio</p>";
                    echo "<p><i class='fas fa-mail-bulk'></i> Código Postal: $codigo</p>";
                    echo "<p><i class='fas fa-bug'></i> Porcentaje de infestación de ácaros en la colmena: $pregunta</p>";
                    echo "<p><i class='fas fa-cubes'></i> Número de colmenas: $colmenas</p>";
                    echo "<p><i class='fas fa-briefcase'></i> Años de oficio: $oficio</p>";
                    echo "<p><i class='fas fa-question'></i> ¿Ya ha tenido problemas anteriormente con el ácaro Varroa?: $alguna</p>";
                    echo "<p><i class='fas fa-file-alt'></i> Si es así, especifique cómo la trató: $opcional</p>";
                    echo "<p><i class='fas fa-info-circle'></i> Datos a proporcionar: $datos</p>";
                    echo "</div>";
                    
                } else {
                    // Mostrar el formulario POST
                    ?>
                    <div class="card">
                        <div class="card-header">
                            <h4><i class="fas fa-user-edit"></i> Formulario de Registro</h4>
                        </div>
                        <div class="card-body">
                            <form action="" method="post" class="needs-validation" novalidate>
                                <!-- Información Personal -->
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="nombre"><i class="fas fa-user"></i> Nombre:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                            </div>
                                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                                            <div class="invalid-feedback">Por favor, ingresa tu nombre.</div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="apellido"><i class="fas fa-user"></i> Apellido:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                            </div>
                                            <input type="text" class="form-control" id="apellido" name="apellido" required>
                                            <div class="invalid-feedback">Por favor, ingresa tu apellido.</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="edad"><i class="fas fa-birthday-cake"></i> Edad:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-birthday-cake"></i></span>
                                            </div>
                                            <input type="number" class="form-control" id="edad" name="edad" required>
                                            <div class="invalid-feedback">Por favor, ingresa tu edad.</div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="numero"><i class="fas fa-phone"></i> Número:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                            </div>
                                            <input type="number" class="form-control" id="numero" name="numero" required>
                                            <div class="invalid-feedback">Por favor, ingresa tu número de teléfono.</div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="email"><i class="fas fa-envelope"></i> E-Mail:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                            </div>
                                            <input type="email" class="form-control" id="email" name="email" required>
                                            <div class="invalid-feedback">Por favor, ingresa tu correo electrónico.</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="direccion"><i class="fas fa-home"></i> Dirección:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-home"></i></span>
                                            </div>
                                            <input type="text" class="form-control" id="direccion" name="direccion" required>
                                            <div class="invalid-feedback">Por favor, ingresa tu dirección.</div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="empresa"><i class="fas fa-building"></i> Empresa:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-building"></i></span>
                                            </div>
                                            <input type="text" class="form-control" id="empresa" name="empresa" required>
                                            <div class="invalid-feedback">Por favor, ingresa el nombre de tu empresa.</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="estado"><i class="fas fa-map-marker-alt"></i> Estado:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                            </div>
                                            <input type="text" class="form-control" id="estado" name="estado" required>
                                            <div class="invalid-feedback">Por favor, ingresa tu estado.</div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="municipio"><i class="fas fa-map-marker-alt"></i> Municipio:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                            </div>
                                            <input type="text" class="form-control" id="municipio" name="municipio" required>
                                            <div class="invalid-feedback">Por favor, ingresa tu municipio.</div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="codigo"><i class="fas fa-map-pin"></i> Código Postal:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-map-pin"></i></span>
                                            </div>
                                            <input type="number" class="form-control" id="codigo" name="codigo" required>
                                            <div class="invalid-feedback">Por favor, ingresa tu código postal.</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Información de Infestación -->
                                <div class="card mt-4">
                                    <div class="card-header">
                                        <h5><i class="fas fa-bug"></i> Información de Infestación</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="pregunta"><i class="fas fa-bug"></i> Porcentaje de infestación de ácaros en la colmena:</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-bug"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" id="pregunta" name="pregunta" required>
                                                    <div class="invalid-feedback">Por favor, ingresa el porcentaje de infestación.</div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="colmenas"><i class="fas fa-cubes"></i> Número de colmenas:</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-cubes"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" id="colmenas" name="colmenas" required>
                                                    <div class="invalid-feedback">Por favor, ingresa el número de colmenas.</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Información de Experiencia -->
                                <div class="card mt-4">
                                    <div class="card-header">
                                        <h5><i class="fas fa-briefcase"></i> Información de Experiencia</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="oficio"><i class="fas fa-briefcase"></i> Años de oficio:</label>
                                            <textarea class="form-control" id="oficio" name="oficio" rows="3" required></textarea>
                                            <div class="invalid-feedback">Por favor, ingresa los años de oficio.</div>
                                        </div>
                                        <div class="form-group">
                                            <label for="alguna"><i class="fas fa-question"></i> ¿Ya ha tenido problemas anteriormente con el ácaro Varroa?:</label>
                                            <textarea class="form-control" id="alguna" name="alguna" rows="3" required></textarea>
                                            <div class="invalid-feedback">Por favor, ingresa si has tenido problemas con el ácaro Varroa.</div>
                                        </div>
                                        <div class="form-group">
                                            <label for="opcional"><i class="fas fa-file-alt"></i> Si es así, especifique cómo la trató:</label>
                                            <textarea class="form-control" id="opcional" name="opcional" rows="3" required></textarea>
                                            <div class="invalid-feedback">Por favor, especifique cómo trató el problema.</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Datos a Proporcionar -->
                                <div class="card mt-4">
                                    <div class="card-header">
                                        <h5><i class="fas fa-info-circle"></i> Datos a proporcionar</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="datos"><i class="fas fa-info-circle"></i> Datos a proporcionar:</label>
                                            <textarea class="form-control" id="datos" name="datos" rows="3" required></textarea>
                                            <div class="invalid-feedback">Por favor, ingresa los datos a proporcionar.</div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-custom btn-block mt-4"><i class="fas fa-paper-plane"></i> Enviar POST</button>
                            </form>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>

    <!-- Incluir el JavaScript de Bootstrap y jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script>
        // Validación de formularios de Bootstrap
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                var forms = document.getElementsByClassName('needs-validation');
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
</body>
</html>