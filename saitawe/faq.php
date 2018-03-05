<html>
<head>
    <link rel="stylesheet" type="text/css" href="settings.css">
<title>Rodopa Travels</title>
    

</head>
<center><body background="http://s8.postimg.org/fj9z9eaf9/back.jpg">
 <ul>
<?php include 'home.php';?>
   
    
    <script type="text/javascript" src="jquery-1.12.2.min.js"></script>
    <script type="text/javascript">
    
        
        
      $(document).ready(function(){
          //hide all the questions
          $(".answer").hide();
          //make the questions clickable
          $(".main h4").click(function(){
              //show the answer
            //$(this).next(".answer").slideDown(); 
              var $currentAnswer = $(this).next(".answer");
              //check if the answer is currently visible
              if($currentAnswer.is(':hidden')){
                  $(".answer").slideUp()
                   $currentAnswer.slideDown();
              }else{
                  $currentAnswer.slideUp();
              }
              
            
          });//end of click function
          
      }); //end of ready()
    
    
    
    
    
    
    </script>
    
    
    </ul>
    
     <img src="https://blink.ucsd.edu/_images/homepage/landing-pages/travel-wing.png"  width="300" height="300"/>
    
    
        <h4 class="hs">FAQ</h3>
        <div class="main"> 
            <section>
                <h4 class="open">How many people will be on my trip?</h3>
                <p class="answer">Good things come in small packages, which is why we keep our group sizes down. This means we are small enough to remain flexible as we thread our way through communities without intimidating the locals. On most of our trips you will be part of an intimate group of 12-16 people, though our group sizes are on average 10 people. Our Overland trips are in purpose-built vehicles that can carry up to 24 travellers. Group sizes are displayed on each trips overview page on our website.
                </p>
            </section>
            <section>
                <h4 class="open">Do I need travel insurance?</h3>
                <p class="answer">Travel insurance is compulsory for all Intrepid travellers and should be taken out at the time of booking. You must provide proof of your travel insurance on the first day of your trip; you will not be able to join the trip without it.
                </p>
            </section>
            <section>
                <h4 class="open">Can you provide me a list of places we are staying at?</h3>
                <p class="answer">We are only able to provide information on your joining and finish point accommodation.

As Rodopa Travel likes to support numerous local businesses, we often have a few places in each city that we can alternate our groups between. For this reason, we cannot give you a full list before you travel. At the welcome meeting on Day 1, your leader may be able to provide you with this so you can email friends and family back home with the details.
                </p>
            </section>
            <section>
                <h4 class="open">What do I do if I am unable to open a link on the Rodopa Travel website?</h3>
                <p class="answer">Oh no! We really want to get you where you need to go. Please tell us what is broken through our facebook/instagram and our resident techno-gurus will fix it as quickly as possible.
                </p>
            </section>
            <section>
                <h4 class="open">What is the currency in my destination? How much should I take in credit cards/cash? Can I use my credit card during my trip?</h3>
                <p class="answer"> Travellers cheques are not common practice anymore so it is a good idea to travel with a credit card and ATM card, or a bank issued 'cash card' specifically for travel. Having a couple of options will assure that you are covered if one does not work. In certain countries it comes down to potluck if you can withdraw money. One day it'll work, the next it won't, but it will work for your friend… Go figure! Visa cards are more widely accepted than Mastercard, particularly in Cuba where only Visa cards are accepted.

                </p>
            </section>
            <section>
                <h4 class="open">How do I find out about the visa requirements for the trip I am interested in?</h3>
                <p class="answer">We always recommend that passengers check with their local embassy as visa rules can change without warning. Embassy websites in your home country will always have information about requirements, visa costs and will provide the required forms. If you are uncomfortable with the visa process, you can visit a travel agent who can arrange these for you at a cost.
                </p>
            </section>
            
        </div>
        
        

  <?php include 'footer.php';?>
    
</ul>
</body>
</html>