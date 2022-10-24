<div class="formularpage flex2">
    <div class="choosen">
        <span class="choosentxt">
            <?php
            echo $_SESSION['dozName'];
            ?></span>
    </div>
    <div class="question">
        <p class="questiontxt">4. Wie verständlich ist <?php echo $_SESSION['dozName']; ?>'s Unterricht?</p>
    </div>
    <form class="display-grid" action="html/include/sql/insert/insert4.php" method="POST">
        <label for="sehr_gut">sehr verständlich</label>
        <input input value="1" class="radiobut" type="radio" name="notenvergabe">
        <label for="gut">überdurchschnittlich gut</label>
        <input input value="2" class="radiobut" type="radio" name="notenvergabe">
        <label for="Befriedigend">muss manchmal fragen stellen aber es geht</label>
        <input input value="3" class="radiobut" type="radio" name="notenvergabe">
        <label for="Ausreichend">ich muss fast jedes Thema hinterfragen</label>
        <input input value="4" class="radiobut" type="radio" name="notenvergabe">
        <label for="Mangelhaft">sehr unverständlich</label>
        <input input value="5" class="radiobut" type="radio" name="notenvergabe">
        <label for="Ungenügend">ich verstehe kein Wort das der spricht</label>
        <input input value="6" class="radiobut" type="radio" name="notenvergabe">
        <input type="hidden" value="<?php
                                    switch ($_SESSION['dozName']) {
                                        case "Alex":
                                            echo "1";
                                            break;
                                        case "Jochen":
                                            echo "2";
                                            break;
                                        case "Oli":
                                            echo "3";
                                            break;
                                        case "Dennis":
                                            echo "4";
                                            break;
                                        case "Mike":
                                            echo "5";
                                            break;
                                    }
                                    ?>" name="dozeName">
        <input type="hidden" name="questionid" value="4">
        <p class="submittxt">Absenden -></p>
        <button class="chkimg"></button>
    </form>
</div>