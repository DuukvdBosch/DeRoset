<?php

include('side-info.php');

?>
    
    <link rel="stylesheet" href="css/delete.css">

    <h2>Weet u het zeker?</h2>
    <form action="0processdeleteprof.php?id=<?php echo $_SESSION['user_id']; ?>" method="post">
        <input type="submit" value="Ja">
    </form><br>
    <a href="1profile.php"><button>Nee</button></a>
