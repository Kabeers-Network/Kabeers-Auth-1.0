<?php
session_start();
echo '<img src=".././user-AccountImages/'.$_SESSION['image'].'" style="border-radius:30px">';
echo'<br>';
echo$_SESSION['username'];