<?php
$menu = array(
    array(
        "SET A",
        "chicken, rice, fries, peps",
        18,
        2400
    ) ,
    array(
        "SET B",
        "chicken wrap, coke",
        12,
        4000
    ) ,
    array(
        "SET C",
        "shawarma, fries, extrajoss anggur",
        8,
        5000
    ) ,
    array(
        "SET D",
        "Ayam gepuk, Teh ais",
        13,
        6200
    )
);

echo "--------------------------------------------------------------------------------------  \n";
echo "------------------------------WELCOME TO BILAL POS SYSTEM----------------------------\n";
echo "--------------------------------------------------------------------------------------  \n";

//readline


$from = new DateTimeZone('GMT');
$to = new DateTimeZone('Asia/Singapore');
$currDate = new DateTime('now', $from);
$currDate->setTimezone($to);
echo "DATE AND TIME :" . $currDate->format('Y/m/j H:i:s' . "\n\n");
$a = readline('enter your staff ID:');
echo "\n";
$b = readline('enter your password:');
echo "\n";
echo "Verifying your credential...............\n\n";
sleep(2);
echo "Please wait a while.....................\n\n";
sleep(3);
if ($a == 1822907 & $b == 123)
{
    echo "Happy working HISYAM, keep up the good work :)\n";
    echo "\n";
    echo "CHECK IN DATE AND TIME :" . $currDate->format('Y/m/j H:i:s' . "\n\n");

}
elseif ($a == 1910331 & $b == 123)
{
    echo "Happy wokrking NAUFAL, keep up the good work :)\n";
    echo "\n";
    echo "CHECK IN DATE AND TIME :" . $currDate->format('Y/m/j H:i:s' . "\n\n");
}
elseif ($a == 1912682 & $b == 123)
{
    echo "Happy wokrking ALIA HUSNA, keep up the good work :)\n";
    echo "CHECK IN DATE AND TIME :" . $currDate->format('Y/m/j H:i:s' . "\n\n");
}
elseif ($a == 1914782 & $b == 123)
{
    echo "Happy wokrking ASILA, keep up the good work :)\n";
    echo "CHECK IN DATE AND TIME :" . $currDate->format('Y/m/j H:i:s' . "\n\n");
}
elseif ($a == 1912092 & $b == 123)
{
    echo "Happy wokrking AYUNI, keep up the good work :)\n";
    echo "CHECK IN DATE AND TIME :" . $currDate->format('Y/m/j H:i:s' . "\n\n");
}
else
{
    echo "HACKER DETECTED! ABORT SYSTEM........";
    exit();
}

$e = readline('Are you happy today :) Y or n:' . "\n");
echo "\n";
if ($e == "Y")
{
    echo "\nNICE!\n\n";
}
else
{
    echo "you can take a paid leave today :( \n";
    exit();
}

echo "-------------------------------MENU FOR TODAY----------------------------------------------------\n";

echo "|ORDER NO    " . "SET" . "           " . "SET DESC" . "                                   " . "PRICE" . "      " . "STOCK AVAIABLE |\n";
echo "|   1      " . $menu[0][0] . "             " . $menu[0][1] . "                  " . $menu[0][2] . "           " . $menu[0][3] . "      |\n";
echo "|   2      " . $menu[1][0] . "             " . $menu[1][1] . "                          " . $menu[1][2] . "           " . $menu[1][3] . "      |\n";
echo "|   3      " . $menu[2][0] . "             " . $menu[2][1] . "            " . $menu[2][2] . "           " . $menu[2][3] . "      |\n";
echo "|   4      " . $menu[3][0] . "             " . $menu[3][1] . "                         " . $menu[3][2] . "           " . $menu[3][3] . "      |\n";

echo "-------------------------------MENU FOR TODAY----------------------------------------------------\n";
echo "\n\n";
order();

function order()
{
    $p1 = 18;
    $p2 = 12;
    $p3 = 8;
    $p4 = 13;
    $tax = 0.06;

    $menu = array(
        array(
            "SET A",
            "chicken, rice, fries, peps",
            18,
            2400
        ) ,
        array(
            "SET B",
            "chicken wrap, coke",
            12,
            4000
        ) ,
        array(
            "SET C",
            "shawarma, fries, extrajoss anggur",
            8,
            5000
        ) ,
        array(
            "SET D",
            "Ayam gepuk, Teh ais",
            13,
            6200
        )
    );

    $c = readline('Please enter the customer order no:');
    if ($c > 4)
    {
        echo "YOU MADE AN ERROR \n\n";
        echo "DEDUCTING YOU SALARY........................... \n\n";
        sleep(2);
        echo "YOUR SALARY DEDUCTED BY RM 10 TODAY! \n\n";
        echo "TERMINATING THE SYSTEM ...........................";
        sleep(5);
        exit();
    }
    else
    {

        $h = readline('enter the quantity :');
        $d = readline('do the customer want more? Y or n: ');
        echo "\n\n";
        if ($d == "Y")
        {
            echo " ------------------Due to some policy change------------------------------\n |The customer only can order one set per transaction                    | \n |But the customer can order unlimited amount as long it is the same set | \n ------------------------------------------------------------------------- \n\n PLEASE RETAKE THE ORDER, THANK YOU! \n ";
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

            $c12 = $c1 + $c11;
            $c22 = $c2 + $c21;
            $c32 = $c3 + $c31;
            $c42 = $c4 + $c41;

            switch ($c)
            {

                case 1:

                    echo "CUSTOMER ORDER DETAILS :\n" . $menu[0][0] . " \n" . $menu[0][1] . " \n";
                    echo "Price per set =  RM" . $menu[0][2] . "\n\n";
                    echo "Total amount customer have to pay without GST: RM" . $c1 . "\n\n";
                    echo "GST 6% : RM" . $c11 . "\n";
                    echo "Total amount customer have to pay including GST: RM" . $c12 . "\n\n";
                    $pay = readline('How much customer pay: RM');
                    $bal1 = $pay - $c12;
                    echo "\n";

                    echo "customer balance = RM" . $bal1 . "\n\n";

                    echo "GENERATING CUSTOMER RECIEPT.....\n";
                    sleep(1);
                    echo "GENERATING CUSTOMER RECIEPT.......\n";
                    sleep(1);
                    echo "GENERATING CUSTOMER RECIEPT.........\n";
                    sleep(1);
                    echo "GENERATING CUSTOMER RECIEPT...........\n";
                    sleep(1);
                    echo "GENERATING CUSTOMER RECIEPT.............\n";
                    sleep(1);
                    echo "PRINTING RECEIPT ..........................................\n\n";
                    sleep(2);
                    echo "...................BILAL CAFE RECEIPT .......................\n";
                    echo "RECEIPT GENERATED ";
                    $from = new DateTimeZone('GMT');
                    $to = new DateTimeZone('Asia/Singapore');
                    $currDate = new DateTime('now', $from);
                    $currDate->setTimezone($to);
                    echo "DATE AND TIME :" . $currDate->format('Y/m/j H:i:s' . "\n\n");
                    echo "ORDER DETAILS: \n";
                    echo $menu[0][0] . " \n" . $menu[0][1] . " \n";
                    echo "quantity :" . $h;
                    echo "\n";
                    echo "GST 6% (RM) :" . $c11;
                    echo "\n";
                    echo "Total (RM) : " . $c1;
                    echo "\n";
                    echo "Total amount including GST 6% (RM) : " . $c12;
                    echo "\n";
                    echo "Cash Tender (RM) :" . $pay;

                   //for loop to enter the amount

                    echo "\n";
                    echo "Change Due (RM) : " . $bal1;
                    echo "\n\n";
                    echo " It was a pleasure serving you \n Thank you & please come again \n\n";
                    echo "...................BILAL CAFE RECEIPT .......................\n";

                break;
                case 2:
                    echo "CUSTOMER ORDER DETAILS :\n" . $menu[1][0] . " \n" . $menu[1][1] . " \n";
                    echo "Price per set =  RM" . $menu[1][2] . "\n\n";
                    echo "Total amount customer have to pay without GST: RM" . $c2 . "\n\n";
                    echo "GST 6% : RM" . $c21 . "\n";
                    echo "Total amount customer have to pay including GST: RM" . $c22 . "\n\n";
                    $pay = readline('How much customer pay: RM');
                    $bal2 = $pay - $c22;
                    echo "\n";

                    echo "customer balance = RM" . $bal2 . "\n\n";

                    echo "GENERATING CUSTOMER RECIEPT.....\n";
                    sleep(1);
                    echo "GENERATING CUSTOMER RECIEPT.......\n";
                    sleep(1);
                    echo "GENERATING CUSTOMER RECIEPT.........\n";
                    sleep(1);
                    echo "GENERATING CUSTOMER RECIEPT...........\n";
                    sleep(1);
                    echo "GENERATING CUSTOMER RECIEPT.............\n";
                    sleep(1);
                    echo "PRINTING RECEIPT ..........................................\n\n";
                    sleep(2);
                    echo "...................BILAL CAFE RECEIPT .......................\n";
                    echo "RECEIPT GENERATED ";
                    $from = new DateTimeZone('GMT');
                    $to = new DateTimeZone('Asia/Singapore');
                    $currDate = new DateTime('now', $from);
                    $currDate->setTimezone($to);
                    echo "DATE AND TIME :" . $currDate->format('Y/m/j H:i:s' . "\n\n");
                    echo "ORDER DETAILS: \n";
                    echo $menu[0][0] . " \n" . $menu[0][1] . " \n";
                    echo "quantity :" . $h;
                    echo "\n";
                    echo "GST 6% (RM) :" . $c21;
                    echo "\n";
                    echo "Total (RM) : " . $c2;
                    echo "\n";
                    echo "Total amount including GST 6% (RM) : " . $c22;
                    echo "\n";
                    echo "Cash Tender (RM) :" . $pay;
                    echo "\n";
                    echo "Change Due (RM) : " . $bal2;
                    echo "\n\n";
                    echo " It was a pleasure serving you \n Thank you & please come again \n\n";
                    echo "...................BILAL CAFE RECEIPT .......................\n";
                break;
                case 3:
                    echo "CUSTOMER ORDER DETAILS :\n" . $menu[2][0] . " \n" . $menu[2][1] . " \n";
                    echo "Price per set=  RM" . $menu[2][2] . "\n\n";
                    echo "Total amount customer have to pay without GST: RM" . $c3 . "\n\n";
                    echo "GST 6% : RM" . $c31 . "\n";
                    echo "Total amount customer have to pay including GST: RM" . $c32 . "\n\n";
                    $pay = readline('How much customer pay: RM');
                    $bal3 = $pay - $c32;
                    echo "\n";

                    echo "customer balance = RM" . $bal3 . "\n\n";

                    echo "GENERATING CUSTOMER RECIEPT.....\n";
                    sleep(1);
                    echo "GENERATING CUSTOMER RECIEPT.......\n";
                    sleep(1);
                    echo "GENERATING CUSTOMER RECIEPT.........\n";
                    sleep(1);
                    echo "GENERATING CUSTOMER RECIEPT...........\n";
                    sleep(1);
                    echo "GENERATING CUSTOMER RECIEPT.............\n";
                    sleep(1);
                    echo "PRINTING RECEIPT ..........................................\n\n";
                    sleep(2);
                    echo "...................BILAL CAFE RECEIPT .......................\n";
                    echo "RECEIPT GENERATED ";
                    $from = new DateTimeZone('GMT');
                    $to = new DateTimeZone('Asia/Singapore');
                    $currDate = new DateTime('now', $from);
                    $currDate->setTimezone($to);
                    echo "DATE AND TIME :" . $currDate->format('Y/m/j H:i:s' . "\n\n");
                    echo "ORDER DETAILS: \n";
                    echo $menu[0][0] . " \n" . $menu[0][1] . " \n";
                    echo "quantity :" . $h;
                    echo "\n";
                    echo "GST 6% (RM) :" . $c31;
                    echo "\n";
                    echo "Total (RM) : " . $c3;
                    echo "\n";
                    echo "Total amount including GST 6% (RM) : " . $c32;
                    echo "\n";
                    echo "Cash Tender (RM) :" . $pay;
                    echo "\n";
                    echo "Change Due (RM) : " . $bal3;
                    echo "\n\n";
                    echo " It was a pleasure serving you \n Thank you & please come again \n\n";
                    echo "...................BILAL CAFE RECEIPT .......................\n";
                break;
                case 4:
                    echo "CUSTOMER ORDER DETAILS :\n" . $menu[3][0] . " \n" . $menu[3][1] . " \n";
                    echo "Price per set=  RM" . $menu[3][2] . "\n\n";
                    echo "Total amount customer have to pay without GST: RM" . $c4 . "\n\n";
                    echo "GST 6% : RM" . $c41 . "\n";
                    echo "Total amount customer have to pay including GST: RM" . $c42 . "\n\n";
                    $pay = readline('How much customer pay: RM');
                    $bal4 = $pay - $c42;
                    echo "\n";

                    echo "customer balance = RM" . $bal4 . "\n\n";

                    echo "GENERATING CUSTOMER RECIEPT.....\n";
                    sleep(1);
                    echo "GENERATING CUSTOMER RECIEPT.......\n";
                    sleep(1);
                    echo "GENERATING CUSTOMER RECIEPT.........\n";
                    sleep(1);
                    echo "GENERATING CUSTOMER RECIEPT...........\n";
                    sleep(1);
                    echo "GENERATING CUSTOMER RECIEPT.............\n";
                    sleep(1);
                    echo "PRINTING RECEIPT ..........................................\n\n";
                    sleep(2);
                    echo "...................BILAL CAFE RECEIPT .......................\n";
                    echo "RECEIPT GENERATED ";
                    $from = new DateTimeZone('GMT');
                    $to = new DateTimeZone('Asia/Singapore');
                    $currDate = new DateTime('now', $from);
                    $currDate->setTimezone($to);
                    echo "DATE AND TIME :" . $currDate->format('Y/m/j H:i:s' . "\n\n");
                    echo "ORDER DETAILS: \n";
                    echo $menu[0][0] . " \n" . $menu[0][1] . " \n";
                    echo "quantity :" . $h;
                    echo "\n";
                    echo "GST 6% (RM) :" . $c41;
                    echo "\n";
                    echo "Total (RM) : " . $c1;
                    echo "\n";
                    echo "Total amount including GST 6% (RM) : " . $c42;
                    echo "\n";
                    echo "Cash Tender (RM) :" . $pay;
                    echo "\n";
                    echo "Change Due (RM) : " . $bal4;
                    echo "\n\n";
                    echo " It was a pleasure serving you \n Thank you & please come again \n\n";
                    echo "...................BILAL CAFE RECEIPT .......................\n";
                break;
                default:
                    echo exit(); // print receipt
                    
            }
        }
    }

    echo "\n";

    function calc()
    {

    }

    function receipt()
    {

    }
    $new = readline('Take new order : Y or n  ');
    if ($new == "Y")
    {
        echo "-------------------------------MENU FOR TODAY----------------------------------------------------\n";

        echo "|ORDER NO    " . "SET" . "           " . "SET DESC" . "                                   " . "PRICE" . "      " . "STOCK AVAIABLE |\n";
        echo "|   1      " . $menu[0][0] . "             " . $menu[0][1] . "                  " . $menu[0][2] . "           " . $menu[0][3] . "      |\n";
        echo "|   2      " . $menu[1][0] . "             " . $menu[1][1] . "                          " . $menu[1][2] . "           " . $menu[1][3] . "      |\n";
        echo "|   3      " . $menu[2][0] . "             " . $menu[2][1] . "            " . $menu[2][2] . "           " . $menu[2][3] . "      |\n";
        echo "|   4      " . $menu[3][0] . "             " . $menu[3][1] . "                         " . $menu[3][2] . "           " . $menu[3][3] . "      |\n";

        echo "-------------------------------MENU FOR TODAY----------------------------------------------------\n";
        echo "\n\n";
        return order();
    }
    else
    {
        echo "THANK YOU FOR SERVICE TODAY! \nDO NOT FORGET TO CLAIM YOUR STAFF MEAL TODAY :) \n";
        sleep(3);
        exit();
    }

}
?>



