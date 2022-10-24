<div class="formularpage flex2">
    <div class="choosen">
        <span class="choosentxt">
            <?php
            echo $_SESSION['dozName'];
            ?></span>
    </div>
    <div class="question">
        <p class="questiontxt">6. Wie gut beantwortet <?php echo $_SESSION['dozName']; ?> meine Fragen?</p>
    </div>
    <form class="display-grid" action="html/include/sql/insert/insert6.php" method="POST">
        <label for="sehr_gut">Sehr gut</label>
        <input input value="1" class="radiobut" type="radio" name="notenvergabe">
        <label for="gut">Gut</label>
        <input input value="2" class="radiobut" type="radio" name="notenvergabe">
        <label for="Befriedigend"> Befriedigend</label>
        <input input value="3" class="radiobut" type="radio" name="notenvergabe">
        <label for="Ausreichend">Ausreichend</label>
        <input input value="4" class="radiobut" type="radio" name="notenvergabe">
        <label for="Mangelhaft">Mangelhaft</label>
        <input input value="5" class="radiobut" type="radio" name="notenvergabe">
        <label for="Ungenügend">Ungenügend</label>
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
        <input type="hidden" name="questionid" value="6">
        <p class="submittxt">Absenden -></p>
        <button class="chkimg"></button>
    </form>
</div>