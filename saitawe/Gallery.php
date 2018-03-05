<html>
<head>
    <link rel="stylesheet" type="text/css" href="settings.css">
    
    
<title>Rodopa Travels</title>
    
<style type="text/css">
    div#gHolder{
        width: : 600px;
        height: 500px;
        margin: 0 auto;
        background-color: "#30558A";
        padding: 10px;
    }
    
    div#theBigImageHolder{
        width: :600 px;
        height: 400 px;
        background-color: "#30558A";
    }
   

    div#theBigImageHolder> img{
        width:  600px;
        height:  400px;
    }

    div#thumbnailsHolder{
        width: 590;
        height: 100px;
        background-color:"#30558A";
        margin: 0 auto;
        padding: 5px;
        
    }
    div#thumbnailsHolder> img{
       height:  90px;
       width: 90 px;
       display: inline-block;
       float:;
       margin: 2px;
       transition: border-radius 0.3s linear 0s;
    }
    
    div#thumbnailsHolder> img:hover{
        border-radius: 100px;
        cursor: pointer;
    }
    


    
    
    </style>
    <script type="text/javascript">
        function imgFunc(){
            var bigImage = document.getElementById("bigImage");
            var thumbnailsHolder = document.getElementById("thumbnailsHolder");
            thumbnailsHolder.addEventListener("click", function(event){
                if(event.target.tagName == "IMG"){
                    bigImage.src = event.target.src;
                }
            }, false);
            
        }
        window.addEventListener("load", imgFunc, false);
        
    </script>
    
</head>
<center><body bgcolor="#30558A" background="http://s8.postimg.org/fj9z9eaf9/back.jpg">
<?php include 'home.php';?>
    
    
    <div id="gHolder"{
         width:600px;
         height:500px;
         margin: 0px auto
         background-color: silver;}>
      <div id="theBigImageHolder">
          <img src = nature.jpg
               id= "bigImage"
               height="540px" width="540"
            style="border:2px solid grey"
               <br/>
      </div>
      <div id="thumbnailsHolder"> 
           <img class="imgStyle" src="nature.jpg"/>
           <img class="imgStyle" src="http://s30.postimg.org/5mmdvyczk/20160228022910.jpg"/>
           <img class="imgStyle" src="http://s30.postimg.org/bl0766vy9/20160228022932.jpg"/>
         
      </div>
     </div>
    
    
    
  
                                                                                                        
 
     
    
    

<?php include 'footer.php';?>
    </ul>
</body>
</html>