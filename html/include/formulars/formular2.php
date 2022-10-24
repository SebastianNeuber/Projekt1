<div class="formularpage flex2">
    <div class="choosen">
        <span class="choosentxt">
            <?php
            echo $_SESSION['dozName'];
            ?></span>
    </div>
    <div class="question">
        <p class="questiontxt">2. Wie pünktlich ist <?php echo $_SESSION['dozName']; ?>?</p>
    </div>
    <form class="display-grid" action="html/include/sql/insert/insert2.php" method="POST">
        <label for="immer_pünktlich">immer pünktlich</label>
        <input value="1" lass="radiobut" type="radio" name="notenvergabe">
        <label for="fast_immer_pünktlich">fast immer pünktlich</label>
        <input value="2" class="radiobut" type="radio" name="notenvergabe">
        <label for="meistens_pünktlich">meistens pünktlich</label>
        <input value="3" class="radiobut" type="radio" name="notenvergabe">
        <label for="ist_mir_egal">ist mir egal</label>
        <input value="4" class="radiobut" type="radio" name="notenvergabe">
        <label for="oft_unpünktlich">oft unpünktlich</label>
        <input value="5" class="radiobut" type="radio" name="notenvergabe">
        <label for="immer_unpünktlich">immer unpünktlich</label>
        <input value="6" class="radiobut" type="radio" name="notenvergabe">
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
        <input type="hidden" name="questionid" value="2">
        <p class="submittxt">Absenden -></p>
        <button class="chkimg"></button>
    </form>
</div>