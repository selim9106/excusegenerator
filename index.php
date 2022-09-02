<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/style.css"
  />
    <!-- favicon links -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon_io//favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicon_io/site.webmanifest">
        
    <title>Fake Excuse Notes Generator</title>

</head>
<body>

    <header class="header">
        <h1 class="header__title">Fake Excuses Generator</h1>
        <h2 class="header__subtitle">Fill the form to generate an excuse</h2>
    </header>

    <main class="main">

    <section class="main__section">

        <form class="main__section__form" id="excuse" method="post" action="answer.php">

            <section class="form__section form__section--name">

                <label class="form__section__label" for="lastname">Last name&nbsp;: </label>
                <input class="form__section__input form__section__input--text" type="text" name="lastname" required  placeholder="Smith"><br>

                <label class="form__section__label" for="firstname">Firstname&nbsp;: </label>
                <input class="form__section__input form__section__input--text" type="text" name="firstname" required placeholder="John">

            </section>

            <section class="form__section form__section--gender">

                <p class="form__section__field">Gender&nbsp;:</p>
                <input class="form__section__input form__section__input--radio" type="radio"  name="gender" value="male" required>
                <label class="form__section__radio" for="male">Male</label><br>
                <input class="form__section__input form__section__input--radio" type="radio" name="gender" value="female" required>
                <label class="form__section__radio" for="female">Female</label><br>

            </section>

            <section class="form__section form__section--teacher">

                <label class="form__section__label form__section__label--teacher" for="teacher">Teacher&nbsp;: </label>
                <input class="form__section__input form__section__input--text" type="text" name="teacher" placeholder="Satan" required>

            </section>

            <section class="form__section form__section--reason">

                <p class="form__section__field">Reason&nbsp;of&nbsp;the&nbsp;absence&nbsp;:</p>
                <input class="form__section__input form__section__input--radio" type="radio"  name="reason" value="illness">
                <label class="form__section__radio" for="illness">Illness</label><br>
                <input class="form__section__input form__section__input--radio" type="radio"  name="reason" value="death">
                <label class="form__section__radio" for="death">Death</label><br>
                <input class="form__section__input form__section__input--radio" type="radio"  name="reason" value="extra">
                <label class="form__section__radio" for="extra">Extra-curricular&nbsp;Activity</label><br>
                <input class="form__section__input form__section__input--radio" type="radio"  name="reason" value="other">
                <label class="form__section__radio" for="other">Other&nbsp;: </label>
                <input class="form__section__input form__section__input--text" type="text" name="specificreason"></br>

            </section>

            <section class="form__section form__section--submit">

                <input type="submit" name="submit" value="Submit" id="submit">
            
            </section>
        </form>

    </section>

</main>

    <?php
    include("./assets/php/excuse.php");
    ?>
</body>
</html>