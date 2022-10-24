<div class="formularpage flex2">
    <div class="choosen">
        <span class="choosentxt">
            <?php
            echo $_SESSION['dozName'];
            ?></span>
    </div>
    <div class="question">
        <p class="questiontxt">5. Wie gut versteht <?php echo $_SESSION['dozName']; ?> meine Fragen?</p>
    </div>
    <form class="display-grid" action="html/include/sql/insert/insert5.php" method="POST">
        <label for="sehr_gut">immer sehr gut</label>
        <input input value="1" class="radiobut" type="radio" name="notenvergabe">
        <label for="gut">gut</label>
        <input input value="2" class="radiobut" type="radio" name="notenvergabe">
        <label for="Befriedigend"> meistens gut</label>
        <input input value="3" class="radiobut" type="radio" name="notenvergabe">
        <label for="Ausreichend">oft gut</label>
        <input input value="4" class="radiobut" type="radio" name="notenvergabe">
        <label for="Mangelhaft">selten versteht er sie überhaupt</label>
        <input input value="5" class="radiobut" type="radio" name="notenvergabe">
        <label for="Ungenügend">er versteht sie nie</label>
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
        <input type="hidden" name="questionid" value="5">
        <p class="submittxt">Absenden -></p>
        <button class="chkimg"></button>
    </form>
</div>