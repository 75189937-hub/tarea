<?php require_once '../../resources/config.php'; ?>

<?php include VIEW_LAYOUT . DS . "head.php"; ?>
<main class="main">

    <?php include VIEW_LAYOUT . DS . "nav.php"; ?>

    <?php 
        if($url == '/admin' || $url == '/admin/index.php') {
            redirect('/admin/paciente');
        }

        if ($url == '/admin/paciente'){
            include VIEW_ADMIN . DS . 'paciente.php';
        }

        if($url == '/admin/cita') {
            include VIEW_ADMIN . DS . 'cita' . DS . 'generarcita.php';
        }
    ?>

</main>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<?php if($url == '/admin/cita') : ?>
    <script src="../js/generarcita.js"></script>
<?php endif; ?>

</body>

</html>