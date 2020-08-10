<?php
require_once "html.php";

echo $html;
echo $head;
echo $clsHead;
echo $body;
echo $navBar;

if (!empty($_POST['mail']) & !empty($_POST['pass'])) {
    echo 'I will create a record with such fields:<br> E-mail: ' . $_POST['mail'] . '<br>' . 'Password: ' . $_POST['pass'].'<br>';
}
else
    {header("Location: index.php?error=E-mail or password is empty!");}
?>
<a href="index.php"><button class="btn btn-primary">Go to main</button></a>
<?php
echo $clsBody;
echo $clsHtml;