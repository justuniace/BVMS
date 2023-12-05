<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help Center</title>
    <link rel="stylesheet" href="../../css/get-help/get-help.css">
    <script src="https://kit.fontawesome.com/5007ab2160.js"></script>
</head>

<body>
    <div class="container">
        <div class="wrapper">
            <header>
                 <img onclick="logoClick()" src="../../images/logo.png" alt="" class="logo">
                 <h1 onclick="logoClick()">VMS Help Center</h1>
            </header>
        </div>

             <img src="../../images/help-center.png" class="img1">

          <div class="first">
              <h2>How can we help you?</h2>
          </div>

          <div class="search-wrapper">
              <div class="search-box">
                  <input type="text" placeholder="Type to Search">
                  <div class="icon"><i class="fas fa-search"></i></div>
              </div>
          </div>

          <div class="topics">
              <h3>Browse Help Topics</h3>
                 <button class ="question">How can I re-schedule my vaccination?</button>
                     <div class="content">
                         <p>
                             To re-schedule your vaccination, you can send a message to us in the bottom right corner of 
                             this page. It will be receive by the baranggay officials and will review your email. In a 
                             one to two days you will receive a text message confirming your new schedule of  vaccination.
                         </p>
                    </div>

                 <button class="question">How can I ensure the privacy of my data?</button>
                    <div class="content">
                         <p>
                             When you use our services, you're trusting us with your information.
                            We understand this is a big responsibility and work hard to
                            protect your information and put you in control.
                            For more information you can visit <a href="privacy.php">Privacy Policy</a>
                        </p>
                   </div>

                <button class="question">How many times I can re-schedule my vaccination? </button>
                    <div class="content">
                        <p> 
                            We recommend that you re-schedule your vaccination once.
                        </p>
                   </div>
               
                <button class="question">How can I see my schedule of vaccination? </button>
                   <div class="content">
                       <p> 
                           For the schedule of vaccination you can visit our facebook page named Vaccination Management System</a>.
                          Also, the Barangay officials will message you the day before of your vaccination.
                       </p>
                  </div>

                <button class="question">What are the things that I need to bring in vaccination area? </button>
                   <div class="content">
                      <p>  
                          Bring your original copy of birth certificate and one valid ID. 
                          Also, to ensure the safety of everyone do not forget your mask.
                     </p>
                  </div>
        </div>
          
    </div>

      <div class="form">
          <p>Message Us Here!</p>
          <form>
              <div>
                 <input type="text"  name="mail" placeholder="Email">
              </div>
              <div>
              <input type="text" name="subject" placeholder="Subject">
              </div>
               <div>
               <textarea name="message" placeholder="Message"></textarea>
               </div>
               <div>
               <button type="submit" name="submit">Send</button>
               </div> 
          </form>
      </div>
    
    <footer>
        <p>Get Vaccinated Now!</p>
        <a href="privacy.php">Privacy Policy </a>
        <a href="#">About Us</a>
    </footer>

    


  
   <script>

       var questions = document.getElementsByClassName("question");

       for(var i=0; i<questions.length; i++)
       {
          questions[i].onclick = function()
          {
              var contents = this.nextElementSibling;

              if(contents.style.maxHeight)
              {
                  contents.style.maxHeight = null;
              }
              else
              {
                  contents.style.maxHeight = contents.scrollHeight + "px";
              }
          }
       }
      

       function logoClick()
       {
           window.location.href ="../../index.php";
       }

  
   

   </script>


</body>
</html>