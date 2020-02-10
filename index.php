<?php
    include "includes/header.php";

    //write PHP here...
    $weight = '225';
    $age = '43';
    $first_name = 'Tony';
    $last_name = 'Mainelli';

    function poundsToKg()
    {
        global $weight, $Kg;

        $Kg = $weight * (1/ 2.2);
    }
    poundsToKg();

?>
<body>
<p>Good morning, ladies and gentlemen!</p>
<p>My name is <?php echo $first_name; ?> <?php echo $last_name; ?>!</p>
<p>I am <?php echo $age; ?> years old. I weigh <?php echo $weight; ?> pounds, which is <?php echo $Kg; ?> kg!</p>

</body>
<?php
    include "includes/footer.php";
?>


