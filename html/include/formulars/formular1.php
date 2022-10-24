<div class="formularpage flex2">
    <div class="choosen">
        <span class="choosentxt">
            <?php
            if (isset($_POST['dozName'])) {
                $_SESSION['dozName'] = $_POST['dozName'];
                echo $_SESSION['dozName'];
            }

            ?></span>
    </div>

    <div class="question">
        <p class="questiontxt">1. Wie fair verteilt <?php echo $_SESSION['dozName']; ?> Noten?</p>
    </div>
    <form class="display-grid" action="html/include/sql/insert/insert1.php" method="POST">
        <label for="sehr_fair">sehr fair</label>
        <input value="1" class="radiobut" type="radio" name="notenvergabe">
        <label for="fair">fair</label>
        <input value="2" class="radiobut" type="radio" name="notenvergabe">
        <label for="okay">okay</label>
        <input value="3" class="radiobut" type="radio" name="notenvergabe">
        <label for="könnte_besser_sein">könnte besser sein</label>
        <input value="4" class="radiobut" type="radio" name="notenvergabe">
        <label for="meistens_unfair">meistens unfair</label>
        <input value="5" class="radiobut" type="radio" name="notenvergabe">
        <label for="immer_unfair">immer unfair</label>
        <input value="6" class="radiobut" type="radio" name="notenvergabe">
        <input type="hidden" name="questionid" value="1">
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
        <p class="submittxt">Absenden -></p>
        <button class="chkimg"></button>
    </form>

</div>