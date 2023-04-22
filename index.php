<?php
         
         $query= "select * from nboard";
         $query_run = mysqli_query($connect,$query);
         $disp = mysqli_fetch_assoc($query_run);
         $nbu1 = $disp['nbu1'];
         $nbu2 = $disp['nbu2'];
         $nbu3 = $disp['nbu3'];
         $nbu4 = $disp['nbu4'];
         $nbu5 = $disp['nbu5'];
         $nbu6 = $disp['nbu6'];
         $nbu7 = $disp['nbu7'];
         $nbu8 = $disp['nbu8'];
         $nbu9 = $disp['nbu9'];
         $nbu10 = $disp['nbu10'];
 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="180x180" href="Gallery/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="Gallery/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="Gallery/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Mount Assisi School Poreyahat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript">
         var counter =1;
         setInterval(function(){
            document.getElementById('radio'+counter).checked = true;
            counter++;
            if(counter>6){
                counter =1
            }
         },5000)
     </script>
     <script src="jqery_latest.js"></script>
      <script>
        $(document).ready(function(){
            $(".one,.two, .three, .five").click(function(){
                $(".body_part").load('School.html');
            });
        });
        </script>
      <script>
        $(document).ready(function(){
            $(".four").click(function(){
                $(".body_part").load('gallery.html');
            });
        });
        </script>
     <style>
         #rdio1:checked~.topper2,.topper3,.topper4,.topper5,.topper6{
  opacity: 0;
  }
  #rdio2:checked~.topper1,.topper3,.topper4,.topper5,.topper6{
      opacity: 0;
  }
  #rdio3:checked~.topper2,.topper1,.topper4,.topper5,.topper6{
      opacity: 0;
  }
  #rdio4:checked~.topper2,.topper3,.topper1,.topper5,.topper6{
      opacity: 0;
  }
  #rdio5:checked~.topper2,.topper3,.topper4,.topper1,.topper6{
      opacity: 0;
  }
  #rdio6:checked~.topper2,.topper3,.topper4,.topper1,.topper5{
      opacity: 0;
  }
  #rdio1:checked~.topper1{
    opacity: 1;
    }
    #rdio2:checked~.topper2{
        opacity: 1;
    }
    #rdio3:checked~.topper3{
        opacity: 1;
    }
    #rdio4:checked~.topper4{
        opacity: 1;
    }
    #rdio5:checked~.topper5{
        opacity: 1;
    }
    #rdio6:checked~.topper6{
        opacity: 1;
    }
    .achivements input{
    display: none;
  }
     </style>
     <style>
         #radio1:checked~  .auto_btn1{
  padding: 10px;
}
#radio2:checked ~ .auto_btn2{
  padding: 10px;
}
#radio3:checked ~ .auto_btn3{
  padding: 10px;
}
#radio4:checked ~ .auto_btn4{
  padding: 10px;
}
#radio5:checked ~ .auto_btn5{
  padding: 10px;
}
     </style>
  </head>
<body>
    <div class="boxPerm"></div>
    <div class="boxPerm1"></div>
    <div class="boxPerm2"></div>
    <div class="navi">
        <nav class="navbar navbar-expand-lg navbar-light " style="height:100%;
        ">
          <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    
              <div class="navbar12 ">
                <div class="zero">
                       <a href="" class ="same_type_nav"><i class="fa fa-home"></i></a>
                   </div>
                   <div class="one">
                       <a class ="same_type_nav" href="#school">School <i class="fa fa-angle-down"></i></a>
                   </div>
                   <div class="two">
                       <a href="#school" class ="same_type_nav">Notice <i class="fa fa-angle-down"></i></a>
                       <!-- <div class="sub_menu">
                           <ul style="list-style: none;">
                             <li><a href="#">Recent Notice</a></li>
                             <li><a href="#">Examinations</a></li>
                             <li><a href="#">Holidays</a></li>
                           </ul>
                       </div> -->
                   </div>
                   <div class="three" ><a  href="" class ="same_type_nav">Activities</a></div>
                   <div class="four" ><a href="#" class ="same_type_nav">Gallery</a></div>
                   <div class="five" ><a href="#" class ="same_type_nav">Admission</a></div>
                   <div class="six" ><a href="#cont" class ="same_type_nav">Contact Us</a></div>
                 </div>
    
            </div>
          </div>
        </nav>
    
      </div>
    <div class="top">
    <div class="title2">
                    
                 <div class="title1_1">
                    <div class="logo">
                        <img style="border: radius 50px;" src="MASlogo.jpg" alt="">
                        </div>
                     <div class="school">
                       <div class="mas">Mount Assisi School</div>
                       <div class="pgj">Poreyahat, Godda, Jharkhand <span class="pj2">( affiliated to CISCE - JH 113 )</span></div>
                     </div>
                 </div>
                 
              <div class="moto"><span class="pgj1">( affiliated to CISCE - JH 113 )</span>For God and Country</div>
        </div>
        <!-- for the hamburger menubar -->
        
        
        </div>

            <div class="linea"></div>
            <div class="lineb"></div>
            <div class="linec"></div>
                     <!-- for small devices -->
           

       </div>
        
    <br>
   <div class="body_part">
    <div class="title3">
            <div class="slider">
                <!-- slider start -->
                <div class="slides">
                    <!-- slides -->
                    <input type="radio" name="radio_btn" id="radio1">
                    <input type="radio" name="radio_btn" id="radio2">
                    <input type="radio" name="radio_btn" id="radio3">
                    <input type="radio" name="radio_btn" id="radio4">
                    <input type="radio" name="radio_btn" id="radio5">
                    <input type="radio" name="radio_btn" id="radio6">
                    
                    <div class="slide first">
                        <img src="Gallery/slide1.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="Gallery/slide2.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="Gallery/slide3.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="Gallery/slide4.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="Gallery/slide5.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="Gallery/slide6.jpg" alt="">
                    </div>
                    
                   
                                  <!-- start of automatic navigation -->
             <div class="navigation-auto">
                <div class="auto_btn1 ab"></div>
                <div class="auto_btn2"></div>
                <div class="auto_btn3"></div>
                <div class="auto_btn4"></div>
                <div class="auto_btn5"></div>
                <div class="auto_btn6"></div>
                
               </div> 
               <!-- automatic navigation ends -->
               </div>
                          <!-- end of slide -->
             
          <!-- manual navigation start -->
          <div class="navigation-manual">
                <label for="radio1" class="manual_btn"></label>
                <label for="radio2" class="manual_btn"></label>
                <label for="radio3" class="manual_btn"></label>
                <label for="radio4" class="manual_btn"></label>
                <label for="radio5" class="manual_btn"></label>
                <label for="radio6" class="manual_btn"></label>
                
          </div>
          <!-- manual navigation end -->
          </div>
            <!-- end of slider1
             -->
             <!-- noticeboard -->
             <div class="noticeboard" id ="notice">
                <div class="nbheading">Notice Board</div>
                <br>
                <div class="underline1"></div>
                <div class="nbContent">
                    <!-- <marquee style="height: 300px;" behavior="" direction="up" onmouseover="this.stop();" onmouseout="this.start();" scrollamount="5"> -->
                        <p>1. <div class="notice1"></div> <?php echo $nbu1;?> <div class="date"></div></p>
                        <br>
                        <div class="underline"></div>
                        <br>
                        <p>2. <div class="notice2"></div> <?php echo $nbu2;?> <div class="date"></div></p>
                        <br>
                        <div class="underline"></div>
                        <br> 
                        <p>3. <div class="notice3"></div> <?php echo $nbu3;?> <div class="date"></div></p>
                        <br>
                        <div class="underline"></div>
                        <br>
                        <p>4. <div class="notice4"></div> <?php echo $nbu4;?> <div class="date"></div></p>
                        <br>
                        <div class="underline"></div>
                        <br>
                        <p>5. <div class="notice5"></div> <?php echo $nbu5;?> <div class="date"></div></p>
                        <br>
                        <div class="underline"></div>
                        <br>
                        <p>6. <div class="notice6"></div> <?php echo $nbu6;?> <div class="date"></div></p>
                        <br>
                        <div class="underline"></div>
                        <br>
                        <p>7. <div class="nptoce7"></div> <?php echo $nbu7;?> <div class="date"></div></p>
                    <!-- </marquee> -->
                </div>
                    
             </div>
        <!-- end of noticeboard -->
    </div>
    <!-- end of title3 -->
     
    
    <br>
    <div class="student_faculty">
        <!-- start of student and faculty section -->
    <div class="student">
        <!-- student section -->
        <img id="stu" class="smallCardImage1" src="Gallery/cardStudent.svg">
        <a href="Student_login.php" style="text-decoration: none; color: black;" target="blank">STUDENTS</a>
    </div>
    <div class="faculty">
        <!-- faculty section -->
        <img id="fac" class="smallCardImage2" src="Gallery/cardFaculty.svg">
        <a href="Faculty_Login.php" style="text-decoration: none; color: black;" target="blank">FACULTY</a>
    </div>
    <!-- end of students and faculty section -->
   </div>
    <br>
    <br>
    <div class="sliding">
        <!-- start of school -->
        <div class= "align-left slide-in discp" style="margin-left: auto; margin-right: auto;"><div class="heading special" style=" "><p>Our School</p></div> </div>
        <div class="align-left schoolcontainer slide-in">
                <img id ="schoolpic"src="Gallery/about_school.jpg" alt="">
            <!-- <div class="discrip"> -->
                <div class="abt">
                    Mount Assisi School which was inaugurated on 23 March, 2006 in a temporary building located on the corner of Church campus began its humble journey of dedicated service with its motto: For God and Country.Fr. George Mundamattam, TOR, had the honor to be the Founding Principal, and the school began with 70 students. The Clarist Franciscan Missionaries sisters of the Most Blessed Sacrament (CFMSS) Delhi Province was kind enough to provide the service of one sister on a temporary basis to teach in the new school for a period of year. His initiative and hard work brought more students during the second year. Very Rev. Fr. Job Edakulathoor, TOR, who became President of the Society in May, 2007 took keen interest in the development of the School.During March 2008 to February 2010, Fr. Walter Xavier, TOR served as the Second Principal. During his term of service, pending paper work of the land was completed and the construction of the ground floor of the present school building commenced. During February 2010 to February 2015, Fr. Binoy Illickamuriyil, TOR, was the Principal.  
                <div class="readmore1 one"><a href="#school">Read More...</a></div>
                </div>
        </div>
    </div>
    <br>
    <br>
    <!-- Principal's Desk -->
    <div class="align-down pdesk slide-in">
        <div class="heading special pdeskh" style="margin-left: 70%; width: 20%; margin-bottom: 20px;"><p>Principal speaks</p></div>
        <img id="box" src="Gallery/Principal.JPG" alt="" >
        
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae vero debitis accusantium itaque, atque animi minus doloribus doloremque assumenda. Deserunt nemo quisquam deleniti, dolore voluptatibus ullam. Consequatur excepturi, sed velit sit repellat, deleniti unde sunt rem quis voluptas odio debitis? Ullam </p>
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis quia eveniet necessitatibus quam, modi eaque explicabo pariatur voluptates quas optio recusandae facilis hic deserunt voluptatibus ipsum, voluptas sunt eligendi fugiat praesentium veritatis natus ab consequatur officia. Hic eius aperiam omnis tenetur? Odio tempora voluptates nesciunt quod repellendus neque minus sapiente?
    
    </div>
    <!-- end of p desk -->
    <div class="patron">
        <div class="heading special" style="width: 80%;margin-left: auto;margin-right: auto;">The Patron of the School</div>
        <div class="st_francis">
            <img src="Gallery/st francis.jpg" alt="">
        </div>
        <div class="textcontent">
            <p>
            The school is named after the immortal St. Francis of Assisi. According to a survey, he is the greatest man born during the second millennium. Men and women, regardless of creed or nationality, have acclaimed him as the World’s most influential social religious reformer.</p>
<p> St. Francis was born in Assisi, Italy, in 1182 as the son of Peter Bernardone and Picca. He received his primary education at the local St. George’s Church. At the age of fourteen he joined his father’s business as a merchant. At seventeen he was drawn into a civil war in the city. When he was twenty years old, Assisi was defeated in a war with Perugia and Francis was imprisoned. When released, Francis returned home in broken health. At the age of twenty three, he set off again to join the army. But on the way he fell ill. During his recovery he had a mysterious dream which changed his life completely.</p>
Upon his return to Assisi, Francis was no more interested in fame, power or wealth. Moved by God’s grace, he opted for a life of poverty.
</p> 


        </div>
        <br>
    </div>
    <div class="new1 align-right slide-in"><div class="headingright ">our toppers</div></div>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="Gallery/2017 toppers.jpg" class="" alt="...">
          </div>
          <div class="carousel-item">
            <img src="Gallery/2018 Toppers.jpg" class="" alt="...">
          </div>
          <div class="carousel-item">
            <img src="Gallery/2019_TOPPERS.jpg" class="" alt="...">
          </div>
          <div class="carousel-item">
            <img src="Gallery/2020 TOPPERS.jpg" class="" alt="...">
          </div>
          <div class="carousel-item">
            <img src="Gallery/2021 TOPPERS .jpg" class="" alt="...">
          </div>
          <div class="carousel-item">
            <img src="Gallery/2022 TOPPERS.jpg" class="" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" style="background-color: #e4eaf3;"data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" style="background-color: #e4eaf3;" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    <div style="margin-left:0%;margin-top: 6%;" class=" align-left slide-in"><div class="heading_school_part">Calender and Timings </div></div>
    <br>
    <br>

    <br>
    <div class="calender_and_timings">
        <div class="calender">
            <table>
                <div class="special">Academic Calendar 2022</div>
                <hr>
                    <tr>
                        <th>Dates </th>
                        <th>Events</th>
                    </tr>
                <tbody>
                    <tr>
                        <td>9th August</td>
                        <td>Muharram</td>
                    </tr>
                    <tr>
                        <td>15th August</td>
                        <td>Independence Day</td>
                    </tr>
                    <tr>
                        <td>19th August</td>
                        <td>Janmashtami</td>
                    </tr>
                    <tr>
                        <td>10th October</td>
                        <td>Half-Yearly Examination Begins</td>
                    </tr>
                    <tr>
                        <td>24th October</td>
                        <td>Deepawali</td>
                    </tr>
                    <tr>
                        <td>30th October</td>
                        <td>Chath Puja </td>
                    </tr>
                    <tr>
                        <td>8th November</td>
                        <td>Guru Nanak Jayanti </td>
                    </tr>
                    <tr>
                        <td>25th December</td>
                        <td>Christmas Day </td>
                    </tr>
                    <tr>
                        <td>1st January</td>
                        <td>New Year </td>
                    </tr>
                    <tr>
                        <td>14th January</td>
                        <td>Makar Sankranti  </td>
                    </tr>
                    <tr>
                        <td>26th January</td>
                        <td>Republic Day </td>
                    </tr>
                    <tr>
                        <td>9th February</td>
                        <td>Annual Examination Begins </td>
                    </tr>
                    
                </tbody>
            </table>
            </div>
            <div class="timings">
                <br>
                <div class="special" >Timing</div>
                <hr>
                <ol>
                    
                    <li>
                        <div class="thing">School Hours</div>
                        <ul>
                            <div class="time">Day School</div>
                            <li> 07:20 am to 02:00 pm</li>
                            <div class="time">Morning School</div>
                            <li> 06:30 am to 12:30 pm</li>
                            <div class="time">Winter School</div>
                            <li> 08:50 am to 03:30 pm</li>
                        </ul>
                    </li>
                    <li>
                        <div class="thing">Office Hours</div>
                        <ul>
                            <div class="time">Day School</div>
                            <li> 08:15 am to 03:30 pm</li>
                            <div class="time">Morning School</div>
                            <li> 07:15 am to 02:00 pm</li>
                        </ul>
                    </li>
                    <li>
                        <div class="thing">Principal's Office Time</div>
                        <ul>
                            <div class="time">Day School</div>
                            <li> 08:30 am to 10:00 pm</li>
                            <div class="time">Morning School</div>
                            <li> 07:00 am to 09:00 pm</li>
                        </ul>
                    </li>

                </0l>
            </div>
    </div>



   </div>
    <div class="bottom" id="cont">
        <div class="left_side">
            <div class="part_one"><h2>MOUNT ASSISI SCHOOL, POREYAHAT</h2>
                <p>The Franciscan vision of education is spread the love of God in the heart of all people, in spirit of St. Francis of Assisi, by imparting the values of human dignity, brotherhood, equality, justice and love of nature. </p>
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3625.5279533231364!2d87.16492111428838!3d24.674371584142097!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f0ed921f8f2553%3A0x4102716c35d7f939!2sMount%20Assisi%20School%2CPoraiyahat!5e0!3m2!1sen!2sin!4v1659527140979!5m2!1sen!2sin" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="last">
                    <p>Copyright © 2023 Mount Assisi School</p>
                    <i class="fa fa-phone" ></i> 
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="fa fa-envelope-o"></i>
                </div>
            </div>
            <!-- <div class="quicklink_outer">
                <a href="#school">Home</a>
                <br>
                <a href="#school">School</a>
                <br>
                <a href="" class="four">Gallery</a>
                <br>
                <a href="#school">Page up</a>
            </div> -->
            
        </div>
        <div class="emblem">
            <img src="Gallery/MASlogo2.jpg" alt="">
        </div>
        <div class="rigth_side">
            <div class="map1">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3625.5279533231364!2d87.16492111428838!3d24.674371584142097!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f0ed921f8f2553%3A0x4102716c35d7f939!2sMount%20Assisi%20School%2CPoraiyahat!5e0!3m2!1sen!2sin!4v1659527140979!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        
    </div>
    
    <h5 style="text-align: center;">made with ♡ by Sandeep Kisku</h5>
 
    

    <script>
    function debounce(func, wait, immediate) {
var timeout;
return function() {
var context = this, args = arguments;
var later = function() {
  timeout = null;
  if (!immediate) func.apply(context, args);
};
var callNow = immediate && !timeout;
clearTimeout(timeout);
timeout = setTimeout(later, wait);
if (callNow) func.apply(context, args);
};
};

const sliderImages = document.querySelectorAll('.slide-in');

function checkSlide(e) {

// loop over every image 
// figure out where it needs to be shown
// at least 50% of its height

sliderImages.forEach(sliderImage => {
//half way through images
 const slideInAt = (window.scrollY + window.innerHeight) - sliderImage.offsetHeight / 7;
// bottom of the image
const imageBottom = sliderImage.offsetTop + sliderImage.offsetHeight;
// half way in the images
const isHalfShown = slideInAt > sliderImage.offsetTop;

const isNoScrolledPast = window.scrollY < imageBottom;

if(isHalfShown && isNoScrolledPast) {
      sliderImage.classList.add('active');
   } else {
      sliderImage.classList.remove('active');
   }
})


}
window.addEventListener('scroll', debounce(checkSlide));


</script>

<script type="text/javascript">
                        var conter =1;
                        setInterval(function(){
                           document.getElementById('radio'+conter).checked = true;
                           conter++;
                           if(conter>6){
                               conter =1
                           }
                        },5000)
                    </script>
<script>
var bar="" ;
    document.querySelector(".container-fluid").addEventListener("click",function(e){
      bar =  "this";
      document.querySelector(".collapse").classList.remove("show");
    });
    </script>
  </body>
</html>
