


<?php

if (isset($_POST['lastname']) && isset($_POST['firstname']) && isset($_POST['gender']) && isset($_POST['teacher']) && isset($_POST['reason']) ) {
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $gender = $_POST['gender'];
    $teacher = $_POST['teacher'];
    $reason = $_POST['reason'];
    $specificreason = $_POST['specificreason'];
    
    
        $illness = array(
            1 => "$firstname got sick this night and wasn't able to go to school",
            2 => "$firstname felt down the stairs in the morning and had to go to the emergencies. She/He will be back next monday.",
            3 => "$firstname's father has contracted coronavirus. $firstname is not allowed to move until next week.",
            4 => "$firstname had temperature in the morning. Here you'll find a word from the doctor.",
            5 => "$firstname contracted chicken pox. She/He won't be able to attend class until next week.",
        );
        $randomkey_illness = array_rand($illness);
        $random_illness = $illness[$randomkey_illness];


        $death = array(
            1 => "$firstname's grandmother passed away 2 days ago.",
            2 => "$firstname's dog passed away. She/He got very affected by this situation. ",
            3 => "$firstname's grandfather passed away last night.",
            4 => "$firstname has lost his uncle yesterday.",
            5 => "$firstname's aunt passed away.",
        );
        $randomkey_death = array_rand($death);
        $random_death = $death[$randomkey_death];

        $extra = array(
            1 => "$firstname got a tennis tournament.",
            2 => "$firstname's sister got married yesterday.",
            3 => "$firstname had a sport competition",
            4 => "$firstname had a medical appointment.",
            5 => "Lorel ipsum.",
        );

        $randomkey_extra = array_rand($extra);
        $random_extra = $extra[$randomkey_extra];

        
        // $random_illness = array_rand($illness,1);
    
    $content=null;

        switch ($reason) {
            case "other": $content=$specificreason;
            break;
            case "illness": $content=$random_illness;
            break;
            case "death": $content=$random_death;
            break;
            case "extra": $content=$random_extra;
            break;
            default:
            $content ="Please, Select a Reason!";
            
        }
 
        
    $gender == "male" ? $sex = "son": $sex= "daughter";

    $date = date('l, F \t\h\e  jS  Y');

    echo '<article class="answer">
    <h1 class="answer__title">Here is your generated excuse</h1>
    <section class="answer__section">
    <p class="answer__section__text answer__section__text--date">'.$date.',</p><br>
    <p class="answer__section__text answer__section__text--letterhead">Dear Mr/Mrs '.$teacher.',</p><br>
    <p class="answer__section__text answer__section__text--intro">Please, excuse my '.$sex.' '.$lastname.' '.$firstname.' for being absent yesterday considering the following reason:</p>
    <p class="answer__section__text answer__section__text--excuse">'.$content.'</p><br>
    <p class="answer__section__text answer__section__text--polite">Respectfully,</p>
    </answer>';

} 

?>
    