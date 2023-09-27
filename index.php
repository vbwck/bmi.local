
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <title>BMI</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <img src="logo.png" alt="logo">
            <h1>bmi</h1>
            <div>
                <p>share the links:</p>
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-share"></i></a>
            </div>
        </header>
        <div id="main">
            <form action="calculate.php" method="post">
                <label>Write your height:
                    <input type="text" name="height" placeholder="cm..">
                </label>
                <label>Write your weight:
                    <input type="text" name="weight" placeholder="kg..">
                </label>
                <button type="submit">Calculate</button>
            </form>
            <div>
                <h2>Here you can know something about your weight :) </h2>
                <hr>
                <div class="info">
                    The Body Mass Index (BMI) Calculator can be used to calculate BMI value
                    and corresponding weight status while taking age into consideration. Use the "Metric Units" tab for the International System
                    of Units or the "Other Units" tab to convert units into either US or metric units. Note that the calculator also computes the Ponderal
                    Index in addition to BMI, both of which are discussed below in detail.
                    <br>
                    <br>
                    <h3>Risks associated with being overweight</h3>
                    <hr>
                    <br>
                    Being overweight increases the risk of a number of serious diseases and health conditions. Below is a list of said risks, according to the Centers for Disease Control and Prevention (CDC):
                    <br>
                    High blood pressure
                    Higher levels of LDL cholesterol, which is widely considered "bad cholesterol," lower levels of HDL cholesterol, considered to be good cholesterol in moderation, and high levels of triglycerides
                    Type II diabetes
                    Coronary heart disease
                    Stroke
                    Gallbladder disease
                    Osteoarthritis, a type of joint disease caused by breakdown of joint cartilage
                    Sleep apnea and breathing problems
                    Certain cancers (endometrial, breast, colon, kidney, gallbladder, liver)
                    Low quality of life
                    Mental illnesses such as clinical depression, anxiety, and others
                    Body pains and difficulty with certain physical functions
                    Generally, an increased risk of mortality compared to those with a healthy BMI

                </div>
            </div>
        </div>
    </body>
</html>
