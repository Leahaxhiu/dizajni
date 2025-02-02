<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FirPlan</title>
    <style>
      body {
        font-family: Garamond, serif;
      }
      </style>
      </head>
<body>

    
    <h3 style="background-color: #48d1CC; color: white;">
        FitPlan
        <a href="Home.html" style="color: white; display: inline-block; text-align: right; padding-left: 1100px;">Home</a>
        <a href="About.html" style="color: white; display: inline-block; text-align: right; padding-left: 20px;">About</a>
        <a href="Services.html" style="color: white; display: inline-block; text-align: right; padding-left: 20px;">Services</a>
        <a href="Contact.html" style="color: white; display: inline-block; text-align: right; padding-left: 20px;">Contact</a>
    </h3>
  
<style>

    .image-with-text {
      position: relative;
      background: url('img 2.jpg') no-repeat center/cover;
      width: 1500px;
      height: 200px; 
      display: flex;
      justify-content: center;
      align-items: center;
      color: black;
      font-size: 20px;
      text-shadow: 1px 1px 2px black;
    }
  </style>

  <div class="image-with-text">FitPlan: Your Guide to Diets, Fitness, and Nutrition</div>


<p  style="text-align: center; font-size:160%;"></p>
 
<div  style="text-align: center;">
    <p>Welcome to FitPlan, your go-to resource for achieving health, fitness, and nutrition goals. </p> 
<p>We provide expert guidance, tools, and inspiration to help you lead a balanced and active lifestyle.</p>
    <p>Whether you’re a beginner or a seasoned wellness enthusiast, we’ve got something for you.</p>
  </div>

 <br><br>
    <style>
        * {
          box-sizing: border-box;
        }
        
        .column {
          float: left;
          width: 33.33%;
          padding: 10px;
          height: 320px; 
        }
        
        .row:after {
          content: "";
          display: table;
          clear: both;
        }
        </style>
        
        
      
        <div class="row">
          <div class="column" style="background-color: #47f6e4; color: white;">
            <h2>Diet plan</h2>
            <b>Explore diet plans designed for different needs and lifestyles:</b><br><br><br>

               <b>Weight Loss Diets: Keto, Paleo, Low-Carb, and Calorie-Deficit Plans.</b> <br><br>
                <b>Specialized Diets: Gluten-Free, Vegan, and Anti-Inflammatory.</b><br><br>
               <b> Performance Diets: High-Protein and Balanced Macronutrient Plans for athletes.</b>
          </div>
          <div class="column" style="background-color:#40e0d0;  color: white;">
            <h2>Fitness program</h2>
            <b>Fuel your body with the right nutrients:</b><br><br><br>

              <b> Meal Prep Tips: Save time while staying healthy.</b> <br><br>
                <b>Superfoods Spotlight: Learn how to include nutrient-dense foods in your diet.</b><br><br>
              <b>  Supplements 101: Guidance on multivitamins, protein powders, and omega-3s.</b>
          </div>
          <div class="column" style="background-color: #36b9ac;  color: white;">
            <h2>Nutrition guides</h2>
            <b>Understand what your body needs to thrive:</b><br><br><br>

                <b>Macronutrients & Micronutrients: Learn the role of proteins, fats, carbs, vitamins, and minerals in your body.</b><br><br>
              <b>Superfoods for Health: Spotlight on nutrient-rich foods like quinoa, kale, chia seeds, and salmon.</b><br><br>  
                <b>Meal Prepping 101: Step-by-step guides to plan, prepare, and store healthy meals efficiently.

                </b>
          </div>
        </div>
<br>
        <div style="text-align: center;">
            <p>Create a personalized meal and workout plan based on daily activity and eating habits.</p> 
            <p>Reach your muscle goals easily with MadMuscles.</p> 
            <p>For all ages and fitness levels.</p> 
            <p>Build a habit.</p>
        </div>
<br> <br>
        <img src="img 3.jpg" alt="img 3" style="width:1500px;height:550px";>

        <style>
           
            .timeline {
              position: relative;
              max-width: 1000px;
              margin: 0 auto;
            }
            
            .timeline::after {
              content: '';
              position: absolute;
              width: 6px;
              height: 840px;
              background-color: gray;
              top: 0;
              bottom: 0;
              left: 50%;
              margin-left: -3px;
            }
            
            .container {
              padding: 10px 40px;
              position: relative;
              background-color: inherit;
              width: 50%;
            }
            
            .container::after {
              content: '';
              position: absolute;
              width: 25px;
              height: 25px;
              right: -17px;
              background-color: white;
              border: 4px solid #FF9F55;
              top: 15px;
              border-radius: 50%;
              z-index: 1;
            }
            
            .left {
              left: 0;
            }
            
            .right {
              left: 50%;
            }
            
            .left::before {
              content: " ";
              height: 0;
              position: absolute;
              top: 22px;
              width: 0;
              z-index: 1;
              right: 30px;
              border: medium solid #40e0d0;
              border-width: 10px 0 10px 10px;
              border-color: transparent transparent transparent white;
            }
            
            .right::before {
              content: " ";
              height: 0;
              position: absolute;
              top: 22px;
              width: 0;
              z-index: 1;
              left: 30px;
              border: medium solid gray;
              border-width: 10px 10px 10px 0;
              border-color: transparent white transparent transparent;
            }
            
            .right::after {
              left: -16px;
            }
            
            .content {
              padding: 20px 30px;
              background-color: #47f6e4;
              position: relative;
              border-radius: 6px;
            }
            
            @media screen and (max-width: 600px) {
              .timeline::after {
              left: 31px;
              }
              
              .container {
              width: 100%;
              padding-left: 70px;
              padding-right: 25px;
              }
              
              .container::before {
              left: 60px;
              border: medium solid gray;
              border-width: 10px 10px 10px 0;
              border-color: transparent gray transparent transparent;
              }
            
              .left::after, .right::after {
              left: 15px;
              }
              
              .right {
              left: 0%;
              }
            }
            </style>

   
<div class="timeline">
    <div class="container left">
      <div class="content">
        <h2>🛠️ Tools & Resources  </h2>
<pre>BMI & Calorie Calculators: Easy-to-use tools to track 
    your progress.
    Recipe Hub: Delicious, healthy recipes for every 
    meal.
    Wellness Blog: Expert tips, success stories, and 
    the latest in health science.
    </pre>    
  </div>
    </div>
    <div class="container right">
      <div class="content">
        <h2>📅 Join Our Community
        </h2>
<pre>Become part of a supportive community dedicated
     to health and fitness:

    Weekly Challenges: Stay motivated with fun, 
    interactive activities.
    Live Q&A Sessions: Ask our experts anything 
    about your wellness journey.
    Social Media Connect: Follow us on Instagram,
     Facebook, and Twitter for daily tips!</pre>   
   </div>
    </div>
    <div class="container left">
      <div class="content">
        <h2>🛒 Shop
        </h2>
<pre>Explore curated selection of wellness products:

    Premium protein powders.
    Sustainable workout gear.
    Meal prep containers.
    </pre>
      </div>
    </div>
</div>
<br><br><br><br>
<section style="background-color: #48d1CC; padding: 10px; margin-top: 350px;">
  <h3 style="margin: 0; display: inline-block; color: white;">
    FitPlan
  </h3>
  <div style=" float: right;">
    <a href="Home.html" style="color: white; text-decoration: none; margin-left: 20px;">Home</a>
    <a href="About.html" style="color: white; text-decoration: none; margin-left: 20px;">About</a>
    <a href="Services.html" style="color: white; text-decoration: none; margin-left: 20px;">Services</a>
    <a href="Contact.html" style="color: white; text-decoration: none; margin-left: 20px;">Contact</a>
  </div>
  <p style="color: white;">Your plan to a healthier you</p> 
  <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center; color: white;">
      <h3>Subscribe to our newsletter!</h3>
      <form method="post">
        <input id="myInput" name="email" value="Your E-mail" style="text-align: center; margin-bottom: 10px;">
        <button type="submit" name="subscribe">Subscribe</button>
    </form>
</div>

<?php
if (isset($_POST['subscribe'])) {
    $email = $_POST['email'];
   
    echo "<p style='color:white;'>Thank you for subscribing with the email: " . htmlspecialchars($email) . "</p>";
}
?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style >
.fa {
padding: 20px;
font-size: 30px;
width: 50px;
text-align: center;
text-decoration: none;
margin: 5px 2px;
}

.fa:hover {
  opacity: 0.7;
}

.fa-facebook {
background: #3B5998;
color: white;
}

.fa-twitter {
background: #55ACEE;
color: white;
}
.fa-pinterest {
background: #ff4500;
color: white;
}



</style>
    
<a href="https://www.facebook.com/" class="fa fa-facebook"></a>
<a href="https://x.com/?lang=en" class="fa fa-twitter"></a>
<a href="https://www.pinterest.com/" class="fa fa-pinterest"></a>

</section>
         
         
  


</body>
</html>