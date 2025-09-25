<?php
include("cabecera.inc.php");
?>

<h1>Variables $_SERVER</h1>
<table border="1" cellpadding="5" cellspacing="0">
    <tr>
        <th>Clave</th>
        <th>Valor</th>
    </tr>
    <?php foreach ($_SERVER as $clave => $valor): ?>
        <tr>
            <td><?php echo htmlspecialchars($clave); ?></td>
            <td>
                <?php
                if (is_array($valor)) {
                    echo htmlspecialchars(implode(', ', $valor));
                } else {
                    echo htmlspecialchars($valor);
                }
                ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<?php
include("footer.inc.php");
?>