<?php

$query = htmlspecialchars($_POST['query']);
$query = strip_tags($query); // Eliminate PHP/HTML tags

## Navigation system (cd)
if (strpos($query, "cd") !== false)
{
   // remove "cd" part from command
   $query = str_replace("cd", '', $query);

   // Enter & Save new path in session
   if (isset($_SESSION['currentdir']))
        chdir($_SESSION['currentdir']);

   chdir(trim($query));
   $_SESSION['currentdir'] = $nav = getcwd();
}
