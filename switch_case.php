<?php
$today = date("D");
switch($today){
    case "Mon":
        echo "Today is Monday. First working day of the week.";
        break;
    case "Tue":
        echo "Today is Tuesday. Second working day of the week";
        break;
    case "Wed":
        echo "Today is Wednesday. UpWork payments are available to withdraw :D";
        break;
    case "Thu":
        echo "Today is Thursday. Money will be added to the bank account soon!";
        break;
    case "Fri":
        echo "Today is Friday. Let's hangout to spend money!";
        break;
    case "Sat":
        echo "Today is Saturday. Ta Ta Bye Bye Money Khatam.";
        break;
    case "Sun":
        echo "Today is Sunday. Last day of the week but still need to work to earn money.";
        break;
    default:
        echo "No task available for that day.";
        break;
}
?>