<div class="flex">
    <table>
        <thead>
            <tr>
                <td>
                    Name
                </td>
                <td class="tablehead">Notenvergabe</td>
                <td class="tablehead">Pünktlichkeit</td>
                <td class="tablehead">Vorbereitung</td>
                <td class="tablehead">Unterricht</td>
                <td class="tablehead">Fragenverständnis</td>
                <td class="tablehead">Beantwortung</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Alex</td>
                <td><?php
                    require('dbcon.php');
                    // NOTEN ALEX
                    // FRAGE 1
                    $AN1 = $connection->query('SELECT avg(note_id) as durchschnitt
    FROM results
    WHERE question_id = 1
        AND teacher_id = 1 ')->fetchAll(PDO::FETCH_ASSOC);
                    $AN1 = (float)$AN1[0]["durchschnitt"];
                    echo ($AN1); ?></td>
                <td><?php
                    // FRAGE 2 
                    require('dbcon.php');
                    $AN2 = $connection->query('SELECT avg(note_id) as durchschnitt
    FROM results
    WHERE question_id = 2
        AND teacher_id = 1 ')->fetchAll(PDO::FETCH_ASSOC);
                    $AN2 = (float)$AN2[0]["durchschnitt"];
                    echo ($AN2); ?></td>
                <td><?php
                    // FRAGE 3
                    require('dbcon.php');
                    $AN3 = $connection->query('SELECT avg(note_id) as durchschnitt
    FROM results
    WHERE question_id = 3
        AND teacher_id = 1 ')->fetchAll(PDO::FETCH_ASSOC);
                    $AN3 = (float)$AN3[0]["durchschnitt"];
                    echo ($AN3); ?></td>
                <td><?php // FRAGE 4
                    require('dbcon.php');
                    $AN4 = $connection->query('SELECT avg(note_id) as durchschnitt
    FROM results
    WHERE question_id = 4
        AND teacher_id = 1 ')->fetchAll(PDO::FETCH_ASSOC);
                    $AN4 = (float)$AN4[0]["durchschnitt"];
                    echo ($AN4); ?></td>
                <td><?php // FRAGE 5
                    require('dbcon.php');
                    $AN5 = $connection->query('SELECT avg(note_id) as durchschnitt
    FROM results
    WHERE question_id = 5
        AND teacher_id = 1 ')->fetchAll(PDO::FETCH_ASSOC);
                    $AN5 = (float)$AN5[0]["durchschnitt"];
                    echo ($AN5); ?></td>
                <td><?php // FRAGE 6
                    require('dbcon.php');
                    $AN6 = $connection->query('SELECT avg(note_id) as durchschnitt
    FROM results
    WHERE question_id = 6
        AND teacher_id = 1 ')->fetchAll(PDO::FETCH_ASSOC);
                    $AN6 = (float)$AN6[0]["durchschnitt"];
                    echo ($AN6); ?></td>
            </tr>
            <tr>
                <td>Jochen</td>
                <td><?php
                    // FRAGE 1 JOCHEN
                    require('dbcon.php');
                    $JN1 = $connection->query('SELECT avg(note_id) as durchschnitt
    FROM results
    WHERE question_id = 1
        AND teacher_id = 2 ')->fetchAll(PDO::FETCH_ASSOC);
                    $JN1 = (float)$JN1[0]["durchschnitt"];
                    echo ($JN1);
                    ?></td>
                <td><?php
                    // FRAGE 2
                    require('dbcon.php');
                    $JN2 = $connection->query('SELECT avg(note_id) as durchschnitt
    FROM results
    WHERE question_id = 2
        AND teacher_id = 2 ')->fetchAll(PDO::FETCH_ASSOC);
                    $JN2 = (float)$JN2[0]["durchschnitt"];
                    echo ($JN2);
                    ?></td>
                <td><?php
                    // FRAGE 3
                    require('dbcon.php');
                    $JN3 = $connection->query('SELECT avg(note_id) as durchschnitt
    FROM results
    WHERE question_id = 3
        AND teacher_id = 2 ')->fetchAll(PDO::FETCH_ASSOC);
                    $JN3 = (float)$JN3[0]["durchschnitt"];
                    echo ($JN3);
                    ?>
                </td>
                <td><?php // FRAGE 4
                    require('dbcon.php');
                    $JN4 = $connection->query('SELECT avg(note_id) as durchschnitt
            FROM results
            WHERE question_id = 4
                AND teacher_id = 2 ')->fetchAll(PDO::FETCH_ASSOC);
                    $JN4 = (float)$JN4[0]["durchschnitt"];
                    echo ($JN4);
                    ?></td>
                <td> <?php
                        // FRAGE 5
                        require('dbcon.php');
                        $JN5 = $connection->query('SELECT avg(note_id) as durchschnitt
    FROM results
    WHERE question_id = 5
        AND teacher_id = 2 ')->fetchAll(PDO::FETCH_ASSOC);
                        $JN5 = (float)$JN5[0]["durchschnitt"];
                        echo ($JN5);
                        ?></td>
                <td><?php
                    // FRAGE 6
                    require('dbcon.php');
                    $JN6 = $connection->query('SELECT avg(note_id) as durchschnitt
    FROM results
    WHERE question_id = 6
        AND teacher_id = 2 ')->fetchAll(PDO::FETCH_ASSOC);
                    $JN6 = (float)$JN6[0]["durchschnitt"];
                    echo ($JN6);
                    ?></td>
            </tr>
            <tr>
                <td>Oli</td>
                <td><?php
                    // FRAGE 1 OLI
                    require('dbcon.php');
                    $ON1 = $connection->query('SELECT avg(note_id) as durchschnitt
    FROM results
    WHERE question_id = 1
        AND teacher_id = 3 ')->fetchAll(PDO::FETCH_ASSOC);
                    $ON1 = (float)$ON1[0]["durchschnitt"];
                    echo ($ON1);
                    ?></td>
                <td> <?php
                        // FRAGE 2
                        require('dbcon.php');
                        $ON2 = $connection->query('SELECT avg(note_id) as durchschnitt
    FROM results
    WHERE question_id = 2
        AND teacher_id = 3 ')->fetchAll(PDO::FETCH_ASSOC);
                        $ON2 = (float)$ON2[0]["durchschnitt"];
                        echo ($ON2);
                        ?></td>
                <td> <?php
                        // FRAGE 3
                        require('dbcon.php');
                        $ON3 = $connection->query('SELECT avg(note_id) as durchschnitt
    FROM results
    WHERE question_id = 3
        AND teacher_id = 3 ')->fetchAll(PDO::FETCH_ASSOC);
                        $ON3 = (float)$ON3[0]["durchschnitt"];
                        echo ($ON3);
                        ?></td>
                <td> <?php
                        // FRAGE 4
                        require('dbcon.php');
                        $ON4 = $connection->query('SELECT avg(note_id) as durchschnitt
    FROM results
    WHERE question_id = 4
        AND teacher_id = 3 ')->fetchAll(PDO::FETCH_ASSOC);
                        $ON4 = (float)$ON4[0]["durchschnitt"];
                        echo ($ON4);
                        ?>
                </td>
                <td> <?php
                        // FRAGE 5
                        require('dbcon.php');
                        $ON5 = $connection->query('SELECT avg(note_id) as durchschnitt
    FROM results
    WHERE question_id = 5
        AND teacher_id = 3 ')->fetchAll(PDO::FETCH_ASSOC);
                        $ON5 = (float)$ON5[0]["durchschnitt"];
                        echo ($ON5);
                        ?></td>
                <td><?php
                    // FRAGE 6
                    require('dbcon.php');
                    $ON6 = $connection->query('SELECT avg(note_id) as durchschnitt
    FROM results
    WHERE question_id = 6
        AND teacher_id = 3 ')->fetchAll(PDO::FETCH_ASSOC);
                    $ON6 = (float)$ON6[0]["durchschnitt"];
                    echo ($ON6);
                    ?></td>
            </tr>
            <tr>
                <td>Dennis</td>
                <td><?php
                    // FRAGE 1 DENNIS
                    require('dbcon.php');
                    $DN1 = $connection->query('SELECT avg(note_id) as durchschnitt
    FROM results
    WHERE question_id = 1
        AND teacher_id = 4 ')->fetchAll(PDO::FETCH_ASSOC);
                    $DN1 = (float)$DN1[0]["durchschnitt"];
                    echo ($DN1);
                    ?></td>
                <td><?php
                    // FRAGE 2
                    require('dbcon.php');
                    $DN2 = $connection->query('SELECT avg(note_id) as durchschnitt
    FROM results
    WHERE question_id = 2
        AND teacher_id = 4 ')->fetchAll(PDO::FETCH_ASSOC);
                    $DN2 = (float)$DN2[0]["durchschnitt"];
                    echo ($DN2);
                    ?></td>
                <td><?php
                    // FRAGE 3
                    require('dbcon.php');
                    $DN3 = $connection->query('SELECT avg(note_id) as durchschnitt
    FROM results
    WHERE question_id = 3
        AND teacher_id = 4 ')->fetchAll(PDO::FETCH_ASSOC);
                    $DN3 = (float)$DN3[0]["durchschnitt"];
                    echo ($DN3);
                    ?></td>
                <td><?php
                    // FRAGE 4
                    require('dbcon.php');
                    $DN4 = $connection->query('SELECT avg(note_id) as durchschnitt
    FROM results
    WHERE question_id = 4
        AND teacher_id = 4 ')->fetchAll(PDO::FETCH_ASSOC);
                    $DN4 = (float)$DN4[0]["durchschnitt"];
                    echo ($DN4);
                    ?></td>
                <td><?php
                    // FRAGE 5
                    require('dbcon.php');
                    $DN5 = $connection->query('SELECT avg(note_id) as durchschnitt
    FROM results
    WHERE question_id = 5
        AND teacher_id = 4 ')->fetchAll(PDO::FETCH_ASSOC);
                    $DN5 = (float)$DN5[0]["durchschnitt"];
                    echo ($DN5);
                    ?></td>
                <td><?php
                    // FRAGE 6
                    require('dbcon.php');
                    $DN6 = $connection->query('SELECT avg(note_id) as durchschnitt
    FROM results
    WHERE question_id = 6
        AND teacher_id = 4 ')->fetchAll(PDO::FETCH_ASSOC);
                    $DN6 = (float)$DN6[0]["durchschnitt"];
                    echo ($DN6);
                    ?></td>
            </tr>
            <tr>
                <td>Mike</td>
                <td><?php
                    // FRAGE 1 MIKE
                    require('dbcon.php');
                    $MN1 = $connection->query('SELECT avg(note_id) as durchschnitt
    FROM results
    WHERE question_id = 1
        AND teacher_id = 5 ')->fetchAll(PDO::FETCH_ASSOC);
                    $MN1 = (float)$MN1[0]["durchschnitt"];
                    echo ($MN1);
                    ?></td>
                <td><?php
                    // FRAGE 2
                    require('dbcon.php');
                    $MN2 = $connection->query('SELECT avg(note_id) as durchschnitt
    FROM results
    WHERE question_id = 2
        AND teacher_id = 5 ')->fetchAll(PDO::FETCH_ASSOC);
                    $MN2 = (float)$MN2[0]["durchschnitt"];
                    echo ($MN2);
                    ?></td>
                <td>
                    <?php
                    // FRAGE 3
                    require('dbcon.php');
                    $MN3 = $connection->query('SELECT avg(note_id) as durchschnitt
    FROM results
    WHERE question_id = 3
        AND teacher_id = 5 ')->fetchAll(PDO::FETCH_ASSOC);
                    $MN3 = (float)$MN3[0]["durchschnitt"];
                    echo ($MN3);
                    ?></td>
                <td><?php
                    // FRAGE 4
                    require('dbcon.php');
                    $MN4 = $connection->query('SELECT avg(note_id) as durchschnitt
    FROM results
    WHERE question_id = 4
        AND teacher_id = 5 ')->fetchAll(PDO::FETCH_ASSOC);
                    $MN4 = (float)$MN4[0]["durchschnitt"];
                    echo ($MN4);
                    ?></td>
                <td><?php
                    // FRAGE 5
                    require('dbcon.php');
                    $MN5 = $connection->query('SELECT avg(note_id) as durchschnitt
    FROM results
    WHERE question_id = 5
        AND teacher_id = 5 ')->fetchAll(PDO::FETCH_ASSOC);
                    $MN5 = (float)$MN5[0]["durchschnitt"];
                    echo ($MN5);
                    ?></td>
                <td><?php
                    // FRAGE 6
                    require('dbcon.php');
                    $MN6 = $connection->query('SELECT avg(note_id) as durchschnitt
    FROM results
    WHERE question_id = 6
        AND teacher_id = 5 ')->fetchAll(PDO::FETCH_ASSOC);
                    $MN6 = (float)$MN6[0]["durchschnitt"];
                    echo ($MN6);
                    ?></td>
            </tr>
        </tbody>
    </table>



</div>