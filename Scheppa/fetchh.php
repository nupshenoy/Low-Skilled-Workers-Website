<?php
include "dbcon.php";

?>
<script>
    var prof = document.getElementById('prof').innerText;
    switch (prof) {
        case 'Beauticians':
            <?php echo include "beauticians.php"; ?>
            break;
        case 'Low Skill Workers':
            <?php echo include "lowskill.php"; ?>
            break;
        case 'Art Commissioners':
            <?php echo include "artcomm.php"; ?>
            break;
        case 'Computer Specialists':
            <?php echo include "compspl.php"; ?>
            break;
        case 'Designers':
            <?php echo include "designers.php"; ?>
            break;
    }
</script>
<?php
