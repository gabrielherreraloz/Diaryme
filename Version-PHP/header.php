<!-- header.php -->
<!-- # Gabriel Herrera Lozano -->

<!DOCTYPE html>
<html lang = "es">
    <head>
        <meta charset = "utf-8" />
        <title>
            Diaryme - Contacta
        </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <div class="container text-center">
            <header class="container mt-4">
                <h1 class="text-center">
                    Diaryme
                </h1>
            </header>
            <main>
                <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
                    <div class="container-fluid">
                        <a class="navbar-brand"> 
                            Menú
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav-menu" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="nav-menu">
                            <ul class="navbar-nav" text-start ms-0>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="index.php"> 
                                        Principal
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="sobremi.php"> 
                                        Sobre mí
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="contacta.php"> 
                                        Contacta
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                </nav>
                <br>
                <div>
                    <?php if (isset($_COOKIE['usuario'])): ?>
                        <span class="badge bg-info text-dark">
                            Usuario: <?php echo htmlspecialchars($_COOKIE['usuario']); ?>
                        </span>
                    <?php endif; ?>
                </div>