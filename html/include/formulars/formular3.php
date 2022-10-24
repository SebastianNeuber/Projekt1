<div class="formularpage flex2">
    <div class="choosen">
        <span class="choosentxt">
            <?php
            echo $_SESSION['dozName'];
            ?></span>
    </div>
    <div class="question">
        <p class="questiontxt">3. Wie gut bereitet <?php echo $_SESSION['dozName']; ?> den Unterricht vor?</p>
    </div>
    <form class="display-grid" action="html/include/sql/insert/insert3.php" method="POST">
        <label for="sehr_gut">sehr gut</label>
        <input input value="1" class="radiobut" type="radio" name="notenvergabe">
        <label for="gut">gut</label>
        <input input value="2" class="radiobut" type="radio" name="notenvergabe">
        <label for="Befriedigend"> ist Okay</label>
        <input input value="3" class="radiobut" type="radio" name="notenvergabe">
        <label for="Ausreichend">könnte besser sein</label>
        <input input value="4" class="radiobut" type="radio" name="notenvergabe">
        <label for="Mangelhaft">schlecht</label>
        <input input value="5" class="radiobut" type="radio" name="notenvergabe">
        <label for="Ungenügend">garnicht, der macht einfach irgendwas</label>
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
        <input type="hidden" name="questionid" value="3">
        <p class="submittxt">Absenden -></p>
        <button class="chkimg"></button>
    </form>
</div>