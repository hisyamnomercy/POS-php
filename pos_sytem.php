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
$ordernourrDate = new DateTime('now', $from);
$ordernourrDate->setTimezone($to);
echo "\e[0;36;40mDATE AND TIME :" . $ordernourrDate->format('Y/m/j H:i:s' . "\n\n");
$staffid = readline('enter your staff ID:');
echo "\n";
echo "enter your password:";
echo "\033[30;40m";
$password = readline('');
echo "\033[30;40m";
echo "\033[0m";
echo "\n";
echo "Verifying your credential...............\n\n";
sleep(2);
echo "Please wait a while.....................\n\n";
sleep(3);
if ($staffid == 'admin' & $password == 123)
{
    echo "\e[1;32;40mWELCOME BOSS, keep up the good work :)\n";
    echo "\n";
    echo "CHECK IN DATE AND TIME :" . $ordernourrDate->format('Y/m/j H:i:s' . "\n\n");

}
elseif ($staffid == 1822907 & $password == 123)
{
    echo "Happy working HISYAM, keep up the good work :)\n";
    echo "\n";
    echo "CHECK IN DATE AND TIME :" . $ordernourrDate->format('Y/m/j H:i:s' . "\n\n");
}
else
{
    echo "\e[0;31;40mHACKER DETECTED! ABORT SYSTEM........\e[0m";
    exit();
}

$happy = readline('Are you happy today :) Y or n:' . "\n");
echo "\n";
if ($happy == 'Y' or $happy == 'y')
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

    $orderno = readline('Please enter the customer order no:');
    if ($orderno > 4 or $orderno < 1)
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

        $quantity = readline('enter the quantity :');
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
            $totalpriceA = $quantity * $menu[0][2];
            $totalpriceB = $quantity * $menu[1][2];
            $totalpriceC = $quantity * $menu[2][2];
            $totalpriceD = $quantity * $menu[3][2];

            $totaltaxA = $quantity * $menu[0][2] * $tax;
            $totaltaxB = $quantity * $menu[1][2] * $tax;
            $totaltaxC = $quantity * $menu[2][2] * $tax;
            $totaltaxD = $quantity * $menu[3][2] * $tax;

            $discountA = $totalpriceA * $dis2;
            $discountB = $totalpriceB * $dis2;
            $discountC = $totalpriceB * $dis2;
            $discountD = $totalpriceD * $dis2;

            $finalpriceAwithDisc = $totalpriceA + $totaltaxA - $discountA;
            $finalpriceBwithDisc = $totalpriceB + $totaltaxB - $discountB;
            $finalpriceCwithDisc = $totalpriceC + $totaltaxC - $discountC;
            $finalpriceDwithDisc = $totalpriceD + $totaltaxD - $discountD;

            $finalpriceA = $totalpriceA + $totaltaxA;
            $finalpriceB = $totalpriceB + $totaltaxB;
            $finalpriceC = $totalpriceC + $totaltaxC;
            $finalpriceD = $totalpriceD + $totaltaxD;

            switch ($orderno)
            {

                case 1:
                    $menu[0][3] = $menu[0][3] - $quantity;
                    echo "\e[0;31;40mCUSTOMER ORDER DETAILS :\n" . $menu[0][0] . " \n" . $menu[0][1] . " \n";
                    echo "Price per set =  RM" . $menu[0][2] . "\n\n";
                    echo "Total amount customer have to pay without GST: RM" . $totalpriceA . "\n\n";
                    echo "GST 6% : RM" . $totaltaxA . "\n";
                    if ($quantity >= 5)
                    {
                        echo "Total discount is (10%) : RM" . $discountA . "\n";
                        echo "Total amount customer have to pay including GST and discount: RM" . $finalpriceAwithDisc . "\n\n";
                        $pay = readline('How much customer pay: RM');
                        echo " \n";
                        $passwordalanceA = $pay - $finalpriceAwithDisc;
                        if ($finalpriceAwithDisc > $pay)
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
                        echo "Total amount customer have to pay including GST : RM" . $finalpriceA . "\n\n";
                        $pay = readline('How much customer pay: RM');
                        echo " \n";
                        $passwordalanceA = $pay - $finalpriceA;
                        if ($finalpriceA > $pay)
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

                    echo "customer balance = RM" . $passwordalanceA . "\n\n";

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
                    $ordernourrDate = new DateTime('now', $from);
                    $ordernourrDate->setTimezone($to);
                    echo "DATE AND TIME :" . $ordernourrDate->format('Y/m/j H:i:s' . "\n\n");
                    echo "ORDER DETAILS: \n";
                    echo $menu[0][0] . " \n" . $menu[0][1] . " \n";
                    echo "quantity :" . $quantity . "\n";
                    if ($z == 'Y' or $z == 'y')
                    {
                        echo "DINE IN\n";
                    }
                    else
                    {
                        echo "TAKE AWAY\n";
                    }
                    echo "\n";
                    echo "GST 6% (RM) :" . $totaltaxA;
                    echo "\n";

                    echo "Total (RM) : " . $totalpriceA;
                    echo "\n";

                    if ($quantity >= 5)
                    {
                        echo "Total discount is (10%) : RM" . $discountA . "\n";
                        echo "Total amount including GST 6% (RM) and discount : " . $finalpriceAwithDisc;
                        echo "\n";
                    }

                    else
                    {
                        echo "NOT APPLICABLE FOR ANY discount \n";
                        echo "Total amount including GST 6% (RM)  : " . $finalpriceA;
                        echo "\n";
                    }

                    echo "Cash Tender (RM) :" . $pay;

                    echo "\n";
                    echo "Change Due (RM) : " . $passwordalanceA;
                    echo "\n\n";
                    echo " It was a pleasure serving you \n Thank you & please come again\e[0m\n\n";
                    echo "\e[1;37;42m...................BILAL CAFE RECEIPT .......................\e[0m\n";

                break;
                case 2:
                    $menu[1][3] = $menu[1][3] - $quantity;
                    echo "CUSTOMER ORDER DETAILS :\n" . $menu[1][0] . " \n" . $menu[1][1] . " \n";
                    echo "Price per set =  RM" . $menu[1][2] . "\n\n";
                    echo "Total amount customer have to pay without GST: RM" . $totalpriceB . "\n\n";
                    echo "GST 6% : RM" . $totaltaxB . "\n";
                    if ($quantity >= 5)
                    {
                        echo "Total discount is (10%) : RM" . $discountB . "\n";
                        echo "Total amount customer have to pay including GST and discount: RM" . $finalpriceBwithDisc . "\n\n";
                        $pay = readline('How much customer pay: RM');
                        $passwordalanceB = $pay - $finalpriceBwithDisc;
                        if ($finalpriceBwithDisc > $pay)
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
                        echo "Total amount customer have to pay including GST : RM" . $finalpriceB . "\n\n";
                        $pay = readline('How much customer pay: RM');
                        $passwordalanceB = $pay - $finalpriceB;
                        if ($finalpriceB > $pay)
                        {
                            echo "\e[1;32;40mINVALID TRANSACTION \n\nPLEASE RETAKE THE ORDER AND AVOID ANY ERROR!\e[0m\n\n";;
                            break;
                        }
                        else
                        {
                            # code...
                            
                        }
                    }

                    echo "customer balance = RM" . $passwordalanceB . "\n\n";

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
                    $ordernourrDate = new DateTime('now', $from);
                    $ordernourrDate->setTimezone($to);
                    echo "DATE AND TIME :" . $ordernourrDate->format('Y/m/j H:i:s' . "\n\n");
                    echo "ORDER DETAILS: \n";
                    echo $menu[1][0] . " \n" . $menu[1][1] . " \n";
                    echo "quantity :" . $quantity;
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
                    echo "GST 6% (RM) :" . $totaltaxB;
                    echo "\n";

                    echo "Total (RM) : " . $totalpriceB;
                    echo "\n";
                    if ($quantity >= 5)
                    {
                        echo "Total discount is (10%) : RM" . $discountB . "\n";
                        echo "Total amount including GST 6% (RM) and discount: " . $finalpriceBwithDisc;
                        echo "\n";
                    }

                    else
                    {
                        echo "NOT APPLICABLE FOR ANY discount \n";
                        echo "Total amount including GST 6% (RM)  " . $finalpriceB;
                        echo "\n";
                    }

                    echo "Cash Tender (RM) :" . $pay;
                    echo "\n";
                    echo "Change Due (RM) : " . $passwordalanceB;
                    echo "\n\n";
                    echo " It was a pleasure serving you \n Thank you & please come again \e[0m\n\n";
                    echo "\e[1;37;42m...................BILAL CAFE RECEIPT .......................\e[0m\n";

                break;
                case 3:
                    $menu[2][3] = $menu[2][3] - $quantity;
                    echo "CUSTOMER ORDER DETAILS :\n" . $menu[2][0] . " \n" . $menu[2][1] . " \n";
                    echo "Price per set=  RM" . $menu[2][2] . "\n\n";
                    echo "Total amount customer have to pay without GST: RM" . $totalpriceC . "\n\n";
                    echo "GST 6% : RM" . $totaltaxC . "\n";
                    if ($quantity >= 5)
                    {
                        echo "Total discount is (10%) : RM" . $discountC . "\n";
                        echo "Total amount customer have to pay including GST and discount: RM" . $finalpriceCwithDisc . "\n\n";
                        $pay = readline('How much customer pay: RM');
                        $passwordalanceC = $pay - $finalpriceCwithDisc;
                        if ($finalpriceCwithDisc > $pay)
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
                        echo "Total amount customer have to pay including GST : RM" . $finalpriceC . "\n\n";
                        $pay = readline('How much customer pay: RM');
                        $passwordalanceC = $pay - $finalpriceC;
                        if ($finalpriceC > $pay)
                        {
                            echo "\e[1;32;40mINVALID TRANSACTION \n\nPLEASE RETAKE THE ORDER AND AVOID ANY ERROR!\e[0m\n\n";
                            break;
                        }
                        else
                        {
                            # code...
                            
                        }
                    }

                    echo "customer balance = RM" . $passwordalanceC . "\n\n";

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
                    $ordernourrDate = new DateTime('now', $from);
                    $ordernourrDate->setTimezone($to);
                    echo "DATE AND TIME :" . $ordernourrDate->format('Y/m/j H:i:s' . "\n\n");
                    echo "ORDER DETAILS: \n";
                    echo $menu[2][0] . " \n" . $menu[2][1] . " \n";
                    echo "quantity :" . $quantity;
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
                    echo "GST 6% (RM) :" . $totaltaxC;
                    echo "\n";

                    echo "Total (RM) : " . $totalpriceC;
                    echo "\n";
                    if ($quantity >= 5)
                    {
                        echo "Total discount is (10%) : RM" . $discountC . "\n";
                        echo "Total amount including GST 6% (RM) and discount : " . $finalpriceCwithDisc;
                        echo "\n";
                    }

                    else
                    {
                        echo "NOT APPLICABLE FOR ANY discount \n";
                        echo "Total amount including GST 6% (RM) : " . $finalpriceC;
                        echo "\n";
                    }

                    echo "Cash Tender (RM) :" . $pay;
                    echo "\n";
                    echo "Change Due (RM) : " . $passwordalanceC;
                    echo "\n\n";
                    echo " It was a pleasure serving you \n Thank you & please come again \e[0m\n\n";
                    echo "\e[1;37;42m...................BILAL CAFE RECEIPT .......................\e[0m\n";

                break;
                case 4:
                    $menu[3][3] = $menu[3][3] - $quantity;
                    echo "CUSTOMER ORDER DETAILS :\n" . $menu[3][0] . " \n" . $menu[3][1] . " \n";
                    echo "Price per set=  RM" . $menu[3][2] . "\n\n";
                    echo "Total amount customer have to pay without GST: RM" . $totalpriceD . "\n\n";
                    echo "GST 6% : RM" . $totaltaxD . "\n";
                    if ($quantity >= 5)
                    {
                        echo "Total discount is (10%) : RM" . $discountD . "\n";
                        echo "Total amount customer have to pay including GST and discount: RM" . $finalpriceDwithDisc . "\n\n";
                        $pay = readline('How much customer pay: RM');
                        $passwordalanceD = $pay - $finalpriceDwithDisc;
                        if ($finalpriceDwithDisc > $pay)
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
                        echo "Total amount customer have to pay including GST : RM" . $$finalpriceDwithDisc . "\n\n";
                        $pay = readline('How much customer pay: RM');
                        $passwordalanceD = $pay - $$finalpriceDwithDisc;
                        if ($$finalpriceDwithDisc > $pay)
                        {
                            echo "\e[1;32;40mINVALID TRANSACTION \n\nPLEASE RETAKE THE ORDER AND AVOID ANY ERROR!\e[0m\n\n";
                            break;
                        }
                        else
                        {
                            # code...
                            
                        }
                    }

                    echo "customer balance = RM" . $passwordalanceD . "\n\n";

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
                    $ordernourrDate = new DateTime('now', $from);
                    $ordernourrDate->setTimezone($to);
                    echo "DATE AND TIME :" . $ordernourrDate->format('Y/m/j H:i:s' . "\n\n");
                    echo "ORDER DETAILS: \n";
                    echo $menu[3][0] . " \n" . $menu[3][1] . " \n";
                    echo "quantity :" . $quantity;
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
                    echo "GST 6% (RM) :" . $totaltaxD;
                    echo "\n";

                    echo "Total (RM) : " . $totalpriceD;
                    echo "\n";
                    if ($quantity >= 5)
                    {
                        echo "Total discount is (10%) : RM" . $discountD . "\n";
                        echo "Total amount including GST 6% (RM) and discount : " . $finalpriceDwithDisc;
                        echo "\n";
                    }

                    else
                    {
                        echo "NOT APPLICABLE FOR ANY discount \n";
                        echo "Total amount including GST 6% (RM): " . $$finalpriceDwithDisc;
                        echo "\n";
                    }

                    echo "Cash Tender (RM) :" . $pay;
                    echo "\n";
                    echo "Change Due (RM) : " . $passwordalanceD;
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
