<?php
$height = filter_input(INPUT_POST,'height');
$weight = filter_input(INPUT_POST, 'weight');
//$height = (int)$height;
//$weight = (int)$weight;

function validate($height,$weight){
    $errors = [];
    if(empty($height)){
        $errors[] = 'You dont write "Height" to calculate..';
    }
    if(empty($weight)){
        $errors[] = 'You dont write "Weight" to calculate..';
    }
    if($height < 0){
        $errors[] = 'You should write positive Height...';
    }
    if($weight < 0){
        $errors[] = 'You should write positive Weight..';
    }
    if(!is_numeric($height)){
        $errors[] = "Height - is not a number..";
    }
    if(!is_numeric($weight)){
        $errors[] = "Weight - is not a number..";
    }
    return $errors;
}
$errors = validate($height,$weight);


if($errors == 0){
    resultOfBmi($height,$weight);
}

function resultOfBmi($height,$weight){
    $result = [];
    $bmi = ($weight / $height ** 2) * 1e4;
    if($bmi < 16){
        $result = 'Acute underweight';
    }else if($bmi < 18.5){
        $result = 'underweight';
    }else if($bmi < 25){
        $result = 'Weight is ok';
    }else if($bmi < 30){
        $result = 'Overweight';
    }else if($bmi > 30){
        $result = 'Obesity of the first degree';
    }
    return $result;
}
?>
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
    <a href="index.php"><img src="logo.png" alt="logo"></a>
    <h1>bmi</h1>
    <div>
        <p>share the links:</p>
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
        <a href="#"><i class="fa fa-share"></i></a>
    </div>
</header>
<div id="main">
    <div>
        <h2>Facts about your weight:</h2>
        <div class="info">
            <?php if(!empty($errors)){?>
                 <?php foreach($errors as $value){
                         $errors = $value;?>
            <ul>
                <li>
                    <?php echo $errors;?>
                </li>
            </ul>
                <?php }?>
            <?php }else{?>
            <div>
                <h2>
                <?php if(resultOfBmi($height,$weight) === 'Acute underweight'){
                    echo resultOfBmi($height,$weight)?></h2>
                <img class="images" src="weight/defitsyt-masy-tila-pc-min.jpg" alt="#">
                    <p>Since a lack of body weight can indicate serious problems in the body, and not only of a
                        psychological nature, when the first signs of this disease appear, the first thing to do is to make
                        an appointment with specialists - an endocrinologist, a gastroenterologist and a nutritionist.</p>
                    <?php } ?>
                <?php if(resultOfBmi($height,$weight) === 'underweight'){
                    echo resultOfBmi($height,$weight)?>
                    <img class="images" src="weight/дефицит-массы-тела.jpg" alt="#">
                    <p>To eliminate low body weight, you need:
                        taking medications that increase appetite and saturate the body with vitamins
                        and minerals; exercise stress; adherence to a proper diet and sufficient physical activity.</p>
                <?php };?>
                <?php if(resultOfBmi($height,$weight) === 'Weight is ok'){
                    echo resultOfBmi($height,$weight)?>
                    <img class="images" src="weight/normal.jpg" alt="#">
                    <p>Your weight of body is okey. Just keep your body in tonus.</p>
                <?php };?>
                <?php if(resultOfBmi($height,$weight) === 'Overweight'){
                    echo resultOfBmi($height,$weight)?>
                    <img class="images" src="weight/izbutochnaya.jpg" alt="#">
                    <p>In order to achieve a decrease in body weight, it is necessary to reduce the caloric content of the diet to 1800-1200 kcal / day, that is, by about one third.
                        Weight loss should be slow: 400-800 g per week. This is the ideal rate of loss of "extra" pounds.</p>
                <?php };?>
                <?php if(resultOfBmi($height,$weight) === 'Obesity of the first degree'){
                    echo resultOfBmi($height,$weight)?>
                    <img class="images" src="weight/first_degree.jpg" alt="#">
                    <p>Limit saturated foods: fats, sweets, pastries, fast food, alcohol. The average daily calorie content
                        for 1 degree of obesity is up to 1500 kcal / day. with obesity of the first degree in women, up
                        to 1800 kcal - for men. You need to eat often, fractionally, in small portions (with fists), usuall
                        y 3 hours.</p>
                    <?php };?>
                <?php };?>
            </div>
<!--            <div>-->
<!--                <ul>-->
<!--                    <li>-->
<!--                        --><?php //echo resultOfBmi($height,$weight);?>
<!--                    </li>-->
<!--                </ul>-->
<!--                --><?php //};?>
<!--            </div>-->
        </div>
    </div>
</div>
</body>
</html>