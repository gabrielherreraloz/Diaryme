<!-- sobremi.php -->
<!-- # Gabriel Herrera Lozano -->

<?php require_once 'header.php'; ?>
<h3>
    Gabriel Herrera Lozano
</h3>
<img src="assets/images/foto_sobremi.jpg" width = 300 alt="Foto de orla del autor" class="mifoto">
<div class="enumerados">
    <article>
        <h2>
            Hobbies
        </h2>
        <ol>
            <li>
                Ver fútbol
            </li>
            <li>
                Ver Formula 1
            </li>
            <li>
                Jugar videojuegos
            </li>
            <li>
                Coleccionar
            </li>
        </ol>
    </article>
    <article >
        <h2>
            Cualidades
        </h2>
        <ul>
            <li>
                Lealtad
            </li>
            <li>
                Empatía
            </li>
            <li>
                Liderazgo
            </li>
            <li>
                Inteligencia
            </li>
        </ul>
    </article>
</div>

<p>
    <h2>
        Asignaturas
    </h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Asignatura</th>
                <th>Abreviatura</th>
                <th>Curso</th>
                <th>Cuatrimestre</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                require_once 'utils.php';
                muestra_tabla('assets/asignaturas.csv'); 
            ?>
        </tbody>
    </table>
</p>
</main>
<?php require_once 'footer.php'; ?>