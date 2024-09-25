
        
<?php if(isset($_GET['nome']) && isset($_GET['cognome']) && isset($_GET['materia_pref'])): ?>
LA MATERIA PREFERITA DI <?php echo $_GET["nome"]; ?> <?php echo $_GET["cognome"];?> e' <?php echo $_GET["materia_pref"]; ?>
<?php endif; ?>
