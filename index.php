<?php
    include_once __DIR__ . '/template/header.inc.php';
    include_once __DIR__ . '/controller/baseController.php'
?>

<body>
    <main>
        <h1>Top ten dev Languages</h1>
        <?php
            print '<table>';
            print '<tr>
                        <th>Rang</th>
                        <th>Language</th>
                        <th>Description</th>
                        <th>Utilisation_principale</th>
                    </tr>';
            foreach ($tableau as $row) {
            print '<tr>';
                foreach ($row as $cell) {
                    print '<td>' . $cell . '</td>';
                }
                print '</tr>';
            }
            print '</table>';
            // include_once __DIR__ . '/model/model.php'
        ?>
    </main>
</body>
