<?php

/*
التكليف 08

    لديك ال Switch Code التالي والمطلوب عمله بال If Condition

 */

$day = "Sat";

if ($day == "Sat" || $day == "Sun" || $day == "Mon") :
    echo "We Are Open All The Day";
elseif ($day == "Tue" || $day == "Wed") :
    echo "We Are Open From 08:12";
elseif ($day == "Tue" || $day == "Wed") :
    echo "We Are Closed";
else :
    echo "Unknown Day";
endif;
