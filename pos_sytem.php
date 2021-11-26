<?php
$menu = array(
    array(
        "SET A",
        "chicken chop, pepsi",
        18,
        2400
    ) ,
    array(
        "SET B",
        "chicken wrap, ice lemon tea",
        12,
        4000
    ) ,
    array(
        "SET C",
        "shawarma, fries, extrajoss",
        8,
        5000
    ) ,
    array(
        "SET D",
        "Ayam gepuk, Coffee",
        13,
        6200
    )
);
echo "\e[1;32;40m--------------------------------------------------------------------------------------  \n";
echo "------------------------------WELCOME TO BILAL POS SYSTEM----------------------------\n";
echo "--------------------------------------------------------------------------------------\e[0m  \n";
echo "\e[1;37;42mDISCOUNT: CUSTOMER ORDER MORE OR EQUAL TO 5 WILL BE APPLICABLE TO GET 10% DISCOUNT\e[0m\n";

//readline


$from = new DateTimeZone('GMT');
$to = new DateTimeZone('Asia/Singapore');
$currDate = new DateTime('now', $from);
$currDate->setTimezone($to);
echo "\e[0;36;40mDATE AND TIME :" . $currDate->format('Y/m/j H:i:s' . "\n\n");
$a = readline('enter your staff ID:');
echo "\n";
echo "enter your password:";
echo "\033[30;40m";
$b = readline('');
echo "\033[30;40m";
echo "\033[0m";
echo "\n";
echo "Verifying your credential...............\n\n";
sleep(2);
echo "Please wait a while.....................\n\n";
sleep(3);
if ($a == 'admin' & $b == 123)
{
    echo "\e[1;32;40mWELCOME BOSS, keep up the good work :)\n";
    echo "\n";
    echo "CHECK IN DATE AND TIME :" . $currDate->format('Y/m/j H:i:s' . "\n\n");

}
elseif ($a == 1822907 & $b == 123)
{
    echo "Happy working HISYAM, keep up the good work :)\n";
    echo "\n";
    echo "CHECK IN DATE AND TIME :" . $currDate->format('Y/m/j H:i:s' . "\n\n");
}
elseif ($a == 1910331 & $b == 123)
{
    echo "Happy working NAUFAL, keep up the good work :)\n";
    echo "\n";
    echo "CHECK IN DATE AND TIME :" . $currDate->format('Y/m/j H:i:s' . "\n\n");
}
elseif ($a == 1912682 & $b == 123)
{
    echo "Happy working ALIA HUSNA, keep up the good work :)\n";
    echo "CHECK IN DATE AND TIME :" . $currDate->format('Y/m/j H:i:s' . "\n\n");
}
elseif ($a == 1914782 & $b == 123)
{
    echo "Happy working ASILA, keep up the good work :)\n";
    echo "CHECK IN DATE AND TIME :" . $currDate->format('Y/m/j H:i:s' . "\n\n");
}
elseif ($a == 1912092 & $b == 123)
{
    echo "Happy working AYUNI, keep up the good work :!\e[0m)\n";
    echo "CHECK IN DATE AND TIME :" . $currDate->format('Y/m/j H:i:s' . "\e[0m\n\n");
}
else
{
    echo "\e[0;31;40mHACKER DETECTED! ABORT SYSTEM........\e[0m";
    exit();
}

$e = readline('Are you happy today :) Y or n:' . "\n");
echo "\n";
if ($e == 'Y' or $e == 'y')
{
    echo "\nNICE!\n\n";
}
else
{
    echo "you can take a paid leave today :( \n";
    exit();
}

echo "\e[0;31;40m-------------------------------MENU FOR TODAY----------------------------------------------------\n";

echo "|ORDER NO    " . "SET" . "           " . "SET DESC" . "                                   " . "PRICE" . "      " . "STOCK AVAILABLE |\n";
echo "|   1      " . $menu[0][0] . "             " . $menu[0][1] . "                        " . $menu[0][2] . "             " . $menu[0][3] . "      |\n";
echo "|   2      " . $menu[1][0] . "             " . $menu[1][1] . "                " . $menu[1][2] . "             " . $menu[1][3] . "      |\n";
echo "|   3      " . $menu[2][0] . "             " . $menu[2][1] . "                  " . $menu[2][2] . "             " . $menu[2][3] . "      |\n";
echo "|   4      " . $menu[3][0] . "             " . $menu[3][1] . "                         " . $menu[3][2] . "             " . $menu[3][3] . "      |\n";

echo "-------------------------------MENU FOR TODAY----------------------------------------------------\e[0m\n";
echo "\n\n";
echo "\e[1;37;42mDISCOUNT: CUSTOMER ORDER MORE OR EQUAL TO 5 WILL BE APPLICABLE TO GET 10% DISCOUNT\e[0m\n";
order();

function order()
{
    $p1 = 18;
    $p2 = 12;
    $p3 = 8;
    $p4 = 13;
    $tax = 0.06;
    $dis1 = 0.05;
    $dis2 = 0.10;

    $menu = array(
        array(
            "SET A",
            "chicken chop, pepsi",
            18,
            2400
        ) ,
        array(
            "SET B",
            "chicken wrap, ice lemon tea",
            12,
            4000
        ) ,
        array(
            "SET C",
            "shawarma, fries, extrajoss",
            8,
            5000
        ) ,
        array(
            "SET D",
            "Ayam gepuk, Coffee",
            13,
            6200
        )
    );

    $c = readline('Please enter the customer order no:');
    if ($c > 4 or $c < 1)
    {
        echo "YOU MADE AN ERROR \n\n";
        echo "DEDUCTING YOU SALARY........................... \n\n";
        sleep(2);
        echo "YOUR SALARY DEDUCTED BY RM 10 TODAY! \n\n";
        echo "TERMINATING THE SYSTEM ...........................";
        sleep(2);
        exit();
    }
    else
    {

        $h = readline('enter the quantity :');
        $z = readline('dine in ? Y or n ');
        $d = readline('do the customer want more set? Y or n: ');
        echo "\n\n";
        if ($d == "Y" or $d == 'y')
        {
            echo "\e[0;31;40m ------------------Due to some policy change------------------------------\n |The customer only can order one set per transaction                    | \n |But the customer can order unlimited amount as long it is the same set | \n ------------------------------------------------------------------------- \n\n PLEASE RETAKE THE ORDER, THANK YOU!\e[0m \n ";
            echo "\n\n";
            return order();
        }
        else
        {
            $c1 = $h * $p1;
            $c2 = $h * $p2;
            $c3 = $h * $p3;
            $c4 = $h * $p4;

            $c11 = $h * $p1 * $tax;
            $c21 = $h * $p2 * $tax;
            $c31 = $h * $p3 * $tax;
            $c41 = $h * $p4 * $tax;

            $dis11 = $c1 * $dis2;
            $dis12 = $c2 * $dis2;
            $dis13 = $c2 * $dis2;
            $dis14 = $c4 * $dis2;

            $c12 = $c1 + $c11 - $dis11;
            $c22 = $c2 + $c21 - $dis12;
            $c32 = $c3 + $c31 - $dis13;
            $c42 = $c4 + $c41 - $dis14;

            $c121 = $c1 + $c11;
            $c221 = $c2 + $c21;
            $c321 = $c3 + $c31;
            $c421 = $c4 + $c41;

            switch ($c)
            {

                case 1:

                    echo "\e[0;31;40mCUSTOMER ORDER DETAILS :\n" . $menu[0][0] . " \n" . $menu[0][1] . " \n";
                    echo "Price per set =  RM" . $menu[0][2] . "\n\n";
                    echo "Total amount customer have to pay without GST: RM" . $c1 . "\n\n";
                    echo "GST 6% : RM" . $c11 . "\n";
                    if ($h >= 5)
                    {
                        echo "Total discount is (10%) : RM" . $dis11 . "\n";
                        echo "Total amount customer have to pay including GST and discount: RM" . $c12 . "\n\n";
                        $pay = readline('How much customer pay: RM');
                        echo " \n";
                        $bal1 = $pay - $c12;
                        if ($c12 > $pay)
                        {
                            echo "\e[1;32;40mINVALID TRANSACTION \n\nPLEASE RETAKE THE ORDER AND AVOID ANY ERROR!\e[0m\n\n";
                            break;
                        }
                        else
                        {
                            # code...
                            
                        }
                    }

                    else
                    {
                        echo "NOT APPLICABLE FOR ANY discount \n";
                        echo "Total amount customer have to pay including GST : RM" . $c121 . "\n\n";
                        $pay = readline('How much customer pay: RM');
                        echo " \n";
                        $bal1 = $pay - $c121;
                        if ($c121 > $pay)
                        {
                            echo "\e[1;32;40mINVALID TRANSACTION \n\nPLEASE RETAKE THE ORDER AND AVOID ANY ERROR!\e[0m\n\n";
                            break;
                        }
                        else
                        {
                            # code...
                            
                        }
                    }

                    echo "\n";

                    echo "customer balance = RM" . $bal1 . "\n\n";

                    echo "GENERATING CUSTOMER RECEIPT.....\n";
                    sleep(1);
                    echo "GENERATING CUSTOMER RECEIPT.......\n";
                    sleep(1);
                    echo "GENERATING CUSTOMER RECEIPT.........\n";
                    sleep(1);
                    echo "GENERATING CUSTOMER RECEIPT...........\n";
                    sleep(1);
                    echo "GENERATING CUSTOMER RECEIPT.............\n";
                    sleep(1);
                    echo "PRINTING RECEIPT ..........................................\n\n";
                    sleep(2);
                    echo "\e[1;37;42m...................BILAL CAFE RECEIPT .......................\e[0m\n";

                    echo "\e[0;36;40mRECEIPT GENERATED ";
                    $from = new DateTimeZone('GMT');
                    $to = new DateTimeZone('Asia/Singapore');
                    $currDate = new DateTime('now', $from);
                    $currDate->setTimezone($to);
                    echo "DATE AND TIME :" . $currDate->format('Y/m/j H:i:s' . "\n\n");
                    echo "ORDER DETAILS: \n";
                    echo $menu[0][0] . " \n" . $menu[0][1] . " \n";
                    echo "quantity :" . $h . "\n";
                    if ($z == 'Y' or $z == 'y')
                    {
                        echo "DINE IN\n";
                    }
                    else
                    {
                        echo "TAKE AWAY\n";
                    }
                    echo "\n";
                    echo "GST 6% (RM) :" . $c11;
                    echo "\n";

                    echo "Total (RM) : " . $c1;
                    echo "\n";

                    if ($h >= 5)
                    {
                        echo "Total discount is (10%) : RM" . $dis11 . "\n";
                        echo "Total amount including GST 6% (RM) and discount : " . $c12;
                        echo "\n";
                    }

                    else
                    {
                        echo "NOT APPLICABLE FOR ANY discount \n";
                        echo "Total amount including GST 6% (RM)  : " . $c121;
                        echo "\n";
                    }

                    echo "Cash Tender (RM) :" . $pay;

                    echo "\n";
                    echo "Change Due (RM) : " . $bal1;
                    echo "\n\n";
                    echo " It was a pleasure serving you \n Thank you & please come again\e[0m\n\n";
                    echo "\e[1;37;42m...................BILAL CAFE RECEIPT .......................\e[0m\n";

                break;
                case 2:
                    echo "CUSTOMER ORDER DETAILS :\n" . $menu[1][0] . " \n" . $menu[1][1] . " \n";
                    echo "Price per set =  RM" . $menu[1][2] . "\n\n";
                    echo "Total amount customer have to pay without GST: RM" . $c2 . "\n\n";
                    echo "GST 6% : RM" . $c21 . "\n";
                    if ($h >= 5)
                    {
                        echo "Total discount is (10%) : RM" . $dis12 . "\n";
                        echo "Total amount customer have to pay including GST and discount: RM" . $c22 . "\n\n";
                        $pay = readline('How much customer pay: RM');
                        $bal2 = $pay - $c22;
                        if ($c22 > $pay)
                        {
                            echo "\e[1;32;40mINVALID TRANSACTION \n\nPLEASE RETAKE THE ORDER AND AVOID ANY ERROR!\e[0m\n\n";
                            break;
                        }
                        else
                        {
                            # code...
                            
                        }
                    }

                    else
                    {
                        echo "NOT APPLICABLE FOR ANY discount \n";
                        echo "Total amount customer have to pay including GST : RM" . $c221 . "\n\n";
                        $pay = readline('How much customer pay: RM');
                        $bal2 = $pay - $c221;
                        if ($c221 > $pay)
                        {
                            echo "\e[1;32;40mINVALID TRANSACTION \n\nPLEASE RETAKE THE ORDER AND AVOID ANY ERROR!\e[0m\n\n";;
                            break;
                        }
                        else
                        {
                            # code...
                            
                        }
                    }

                    echo "customer balance = RM" . $bal2 . "\n\n";

                    echo "GENERATING CUSTOMER RECEIPT.....\n";
                    sleep(1);
                    echo "GENERATING CUSTOMER RECEIPT.......\n";
                    sleep(1);
                    echo "GENERATING CUSTOMER RECEIPT.........\n";
                    sleep(1);
                    echo "GENERATING CUSTOMER RECEIPT...........\n";
                    sleep(1);
                    echo "GENERATING CUSTOMER RECEIPT.............\n";
                    sleep(1);
                    echo "PRINTING RECEIPT ..........................................\n\n";
                    sleep(2);
                    echo "\e[1;37;42m...................BILAL CAFE RECEIPT .......................\e[0m\n";

                    echo "\e[0;36;40mRECEIPT GENERATED ";
                    $from = new DateTimeZone('GMT');
                    $to = new DateTimeZone('Asia/Singapore');
                    $currDate = new DateTime('now', $from);
                    $currDate->setTimezone($to);
                    echo "DATE AND TIME :" . $currDate->format('Y/m/j H:i:s' . "\n\n");
                    echo "ORDER DETAILS: \n";
                    echo $menu[1][0] . " \n" . $menu[1][1] . " \n";
                    echo "quantity :" . $h;
                    echo "\n";
                    if ($z == 'Y' or $z == 'y')
                    {
                        echo "DINE IN\n";
                    }
                    else
                    {
                        echo "TAKE AWAY\n";
                    }
                    echo "\n";
                    echo "GST 6% (RM) :" . $c21;
                    echo "\n";

                    echo "Total (RM) : " . $c2;
                    echo "\n";
                    if ($h >= 5)
                    {
                        echo "Total discount is (10%) : RM" . $dis12 . "\n";
                        echo "Total amount including GST 6% (RM) and discount: " . $c22;
                        echo "\n";
                    }

                    else
                    {
                        echo "NOT APPLICABLE FOR ANY discount \n";
                        echo "Total amount including GST 6% (RM)  " . $c221;
                        echo "\n";
                    }

                    echo "Cash Tender (RM) :" . $pay;
                    echo "\n";
                    echo "Change Due (RM) : " . $bal2;
                    echo "\n\n";
                    echo " It was a pleasure serving you \n Thank you & please come again \e[0m\n\n";
                    echo "\e[1;37;42m...................BILAL CAFE RECEIPT .......................\e[0m\n";

                break;
                case 3:
                    echo "CUSTOMER ORDER DETAILS :\n" . $menu[2][0] . " \n" . $menu[2][1] . " \n";
                    echo "Price per set=  RM" . $menu[2][2] . "\n\n";
                    echo "Total amount customer have to pay without GST: RM" . $c3 . "\n\n";
                    echo "GST 6% : RM" . $c31 . "\n";
                    if ($h >= 5)
                    {
                        echo "Total discount is (10%) : RM" . $dis13 . "\n";
                        echo "Total amount customer have to pay including GST and discount: RM" . $c32 . "\n\n";
                        $pay = readline('How much customer pay: RM');
                        $bal3 = $pay - $c32;
                        if ($c32 > $pay)
                        {
                            echo "\e[1;32;40mINVALID TRANSACTION \n\nPLEASE RETAKE THE ORDER AND AVOID ANY ERROR!\e[0m\n\n";
                            break;
                        }
                        else
                        {
                            # code...
                            
                        }
                    }

                    else
                    {
                        echo "NOT APPLICABLE FOR ANY discount \n";
                        echo "Total amount customer have to pay including GST : RM" . $c321 . "\n\n";
                        $pay = readline('How much customer pay: RM');
                        $bal3 = $pay - $c321;
                        if ($c321 > $pay)
                        {
                            echo "\e[1;32;40mINVALID TRANSACTION \n\nPLEASE RETAKE THE ORDER AND AVOID ANY ERROR!\e[0m\n\n";
                            break;
                        }
                        else
                        {
                            # code...
                            
                        }
                    }

                    echo "customer balance = RM" . $bal3 . "\n\n";

                    echo "GENERATING CUSTOMER RECEIPT.....\n";
                    sleep(1);
                    echo "GENERATING CUSTOMER RECEIPT.......\n";
                    sleep(1);
                    echo "GENERATING CUSTOMER RECEIPT.........\n";
                    sleep(1);
                    echo "GENERATING CUSTOMER RECEIPT...........\n";
                    sleep(1);
                    echo "GENERATING CUSTOMER RECEIPT.............\n";
                    sleep(1);
                    echo "PRINTING RECEIPT ..........................................\n\n";
                    sleep(2);
                    echo "\e[1;37;42m...................BILAL CAFE RECEIPT .......................\e[0m\n";

                    echo "\e[0;36;40mRECEIPT GENERATED ";
                    $from = new DateTimeZone('GMT');
                    $to = new DateTimeZone('Asia/Singapore');
                    $currDate = new DateTime('now', $from);
                    $currDate->setTimezone($to);
                    echo "DATE AND TIME :" . $currDate->format('Y/m/j H:i:s' . "\n\n");
                    echo "ORDER DETAILS: \n";
                    echo $menu[2][0] . " \n" . $menu[2][1] . " \n";
                    echo "quantity :" . $h;
                    echo "\n";
                    if ($z == 'Y' or $z == 'y')
                    {
                        echo "DINE IN\n";
                    }
                    else
                    {
                        echo "TAKE AWAY\n";
                    }
                    echo "\n";
                    echo "GST 6% (RM) :" . $c31;
                    echo "\n";

                    echo "Total (RM) : " . $c3;
                    echo "\n";
                    if ($h >= 5)
                    {
                        echo "Total discount is (10%) : RM" . $dis13 . "\n";
                        echo "Total amount including GST 6% (RM) and discount : " . $c32;
                        echo "\n";
                    }

                    else
                    {
                        echo "NOT APPLICABLE FOR ANY discount \n";
                        echo "Total amount including GST 6% (RM) : " . $c321;
                        echo "\n";
                    }

                    echo "Cash Tender (RM) :" . $pay;
                    echo "\n";
                    echo "Change Due (RM) : " . $bal3;
                    echo "\n\n";
                    echo " It was a pleasure serving you \n Thank you & please come again \e[0m\n\n";
                    echo "\e[1;37;42m...................BILAL CAFE RECEIPT .......................\e[0m\n";

                break;
                case 4:
                    echo "CUSTOMER ORDER DETAILS :\n" . $menu[3][0] . " \n" . $menu[3][1] . " \n";
                    echo "Price per set=  RM" . $menu[3][2] . "\n\n";
                    echo "Total amount customer have to pay without GST: RM" . $c4 . "\n\n";
                    echo "GST 6% : RM" . $c41 . "\n";
                    if ($h >= 5)
                    {
                        echo "Total discount is (10%) : RM" . $dis14 . "\n";
                        echo "Total amount customer have to pay including GST and discount: RM" . $c42 . "\n\n";
                        $pay = readline('How much customer pay: RM');
                        $bal4 = $pay - $c42;
                        if ($c42 > $pay)
                        {
                            echo "\e[1;32;40mINVALID TRANSACTION \n\nPLEASE RETAKE THE ORDER AND AVOID ANY ERROR!\e[0m\n\n";
                            break;
                        }
                        else
                        {
                            # code...
                            
                        }
                    }

                    else
                    {
                        echo "NOT APPLICABLE FOR ANY discount \n";
                        echo "Total amount customer have to pay including GST : RM" . $c421 . "\n\n";
                        $pay = readline('How much customer pay: RM');
                        $bal4 = $pay - $c421;
                        if ($c421 > $pay)
                        {
                            echo "\e[1;32;40mINVALID TRANSACTION \n\nPLEASE RETAKE THE ORDER AND AVOID ANY ERROR!\e[0m\n\n";
                            break;
                        }
                        else
                        {
                            # code...
                            
                        }
                    }

                    echo "customer balance = RM" . $bal4 . "\n\n";

                    echo "GENERATING CUSTOMER RECEIPT.....\n";
                    sleep(1);
                    echo "GENERATING CUSTOMER RECEIPT.......\n";
                    sleep(1);
                    echo "GENERATING CUSTOMER RECEIPT.........\n";
                    sleep(1);
                    echo "GENERATING CUSTOMER RECEIPT...........\n";
                    sleep(1);
                    echo "GENERATING CUSTOMER RECEIPT.............\n";
                    sleep(1);
                    echo "PRINTING RECEIPT ..........................................\n\n";
                    sleep(2);
                    echo "\e[1;37;42m...................BILAL CAFE RECEIPT .......................\e[0m\n";

                    echo "\e[0;36;40mRECEIPT GENERATED ";
                    $from = new DateTimeZone('GMT');
                    $to = new DateTimeZone('Asia/Singapore');
                    $currDate = new DateTime('now', $from);
                    $currDate->setTimezone($to);
                    echo "DATE AND TIME :" . $currDate->format('Y/m/j H:i:s' . "\n\n");
                    echo "ORDER DETAILS: \n";
                    echo $menu[3][0] . " \n" . $menu[3][1] . " \n";
                    echo "quantity :" . $h;
                    echo "\n";
                    if ($z == 'Y' or $z == 'y')
                    {
                        echo "DINE IN\n";
                    }
                    else
                    {
                        echo "TAKE AWAY\n";
                    }
                    echo "\n";
                    echo "GST 6% (RM) :" . $c41;
                    echo "\n";

                    echo "Total (RM) : " . $c4;
                    echo "\n";
                    if ($h >= 5)
                    {
                        echo "Total discount is (10%) : RM" . $dis14 . "\n";
                        echo "Total amount including GST 6% (RM) and discount : " . $c42;
                        echo "\n";
                    }

                    else
                    {
                        echo "NOT APPLICABLE FOR ANY discount \n";
                        echo "Total amount including GST 6% (RM): " . $c421;
                        echo "\n";
                    }

                    echo "Cash Tender (RM) :" . $pay;
                    echo "\n";
                    echo "Change Due (RM) : " . $bal4;
                    echo "\n\n";
                    echo " It was a pleasure serving you \n Thank you & please come again \e[0m\n\n";
                    echo "\e[1;37;42m...................BILAL CAFE RECEIPT .......................\e[0m\n";

                break;
                default:
                    echo exit(); // print receipt
                    
            }
        }
    }

    echo "\n";

    $new = readline('Take new order : Y or n  ');
    if ($new == "Y" or $new == 'y')
    {

        echo "\e[0;36;40m-------------------------------MENU FOR TODAY----------------------------------------------------\n";

        echo "|ORDER NO    " . "SET" . "           " . "SET DESC" . "                                   " . "PRICE" . "      " . "STOCK AVAILABLE |\n";
        echo "|   1      " . $menu[0][0] . "             " . $menu[0][1] . "                        " . $menu[0][2] . "             " . $menu[0][3] . "      |\n";
        echo "|   2      " . $menu[1][0] . "             " . $menu[1][1] . "                " . $menu[1][2] . "             " . $menu[1][3] . "      |\n";
        echo "|   3      " . $menu[2][0] . "             " . $menu[2][1] . "                  " . $menu[2][2] . "             " . $menu[2][3] . "      |\n";
        echo "|   4      " . $menu[3][0] . "             " . $menu[3][1] . "                         " . $menu[3][2] . "             " . $menu[3][3] . "      |\n";

        echo "-------------------------------MENU FOR TODAY----------------------------------------------------\n";
        echo "\n\n";
        echo "\e[1;37;42mDISCOUNT: CUSTOMER ORDER MORE OR EQUAL TO 5 WILL BE APPLICABLE TO GET 10% DISCOUNT\e[0m\n";
        return order();

    }
    else
    {
        echo "\n\nTHANK YOU FOR SERVICE TODAY! \n\nDO NOT FORGET TO CLAIM YOUR STAFF MEAL TODAY :) \n";
        sleep(1);
        exit();
    }

}

?>
