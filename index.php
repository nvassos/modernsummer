<?php 

include 'lib/Mobile_Detect.php';
$detect = new Mobile_Detect();

if ($detect->isMobile() && !$detect->isTablet()) {

	//redirection
	$host = $_SERVER['HTTP_HOST'];
	//$uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
	/*if (strlen($_SERVER['REQUEST_URI']) <= 1) {
		$redirect = "http://$host$uri/mobile.php";
	} else {
		$requestUri = str_replace('index.php', 'mobile.php', $_SERVER['REQUEST_URI']);
		$redirect = "http://$host$uri$requestUri";
	}*/
	$requestUri = str_replace('index.php', 'mobile.php', $_SERVER['REQUEST_URI']);
	if (strpos($requestUri, 'mobile.php') === false) {
		$redirect = "http://$host/index_m.php";
	} else {
		$redirect = "http://$host$requestUri";
	}
	header('Location: ' . $redirect);
	exit;
}


if ($detect->isTablet()) {

	//redirection
	$host = $_SERVER['HTTP_HOST'];
	//$uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
	/*if (strlen($_SERVER['REQUEST_URI']) <= 1) {
		$redirect = "http://$host$uri/mobile.php";
	} else {
		$requestUri = str_replace('index.php', 'mobile.php', $_SERVER['REQUEST_URI']);
		$redirect = "http://$host$uri$requestUri";
	}*/
	$requestUri = str_replace('index.php', 'mobile.php', $_SERVER['REQUEST_URI']);
	if (strpos($requestUri, 'mobile.php') === false) {
		$redirect = "http://$host/index_t.php";
	} else {
		$redirect = "http://$host$requestUri";
	}
	header('Location: ' . $redirect);
	exit;
}





?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Modern Summer Evolved PreFab Cottages & Houses</title>
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
      <script src="https://bs-cache.s3.amazonaws.com/static_content_v5/js/jquery.transit.min.js"></script>
<script src="http://malsup.github.com/jquery.form.js"></script> 

        <script type="text/javascript" src="jquery.onepage-scroll.js"></script>
  <link href='default.css' rel='stylesheet' type='text/css'>
         <link href='js/colorbox.css' rel='stylesheet' type='text/css'>
                <script type="text/javascript" src="js/jquery.colorbox.js"></script>


    </head>

    <body>
    
          
        <div class="wrapper">
             
            
            <section id="s_one">
                <div class="overlay_one"></div>
            	<div id="t1">
                    <div class="t1_1">Welcome to Modern Summer.</div>
                    <div class="t1_2">Evolved Prefab Cottages</div>

                    <form id="form_q" style="text-align:center;" id="questions" action="comment.php" method="post"> 
                        <input name="email_address" id="emailaddress" placeholder="Email" type="email" required>
                        <input name="location" id="location_form" placeholder="City,State" type="text" required><br>
                        <textarea name="question_text" id="questionwrapper" placeholder="Question?" required></textarea><br>
                        <input id="submit_button" type="submit" value="Submit">
                        <div style="color:white; font-size: 1.15vw; line-height:1.15vw; opacity:0; margin-top:-1px;" class="thank_ref">Thank you for your question. We will get to you as soon as possible</div>
                    </form>
                 
                 
                </div>
                <div style="position:absolute; bottom:0px; width:100%; text-align:center;"><img style="width:13%; height:auto" src="https://d2xcq4qphg1ge9.cloudfront.net/assets/17276/2089528/original_scroll_down.png"></div> 
            </section>
            <section id="s_two">
                <div class="overlay_two"></div>

                <div id="t2">
                    <div class="t2_1">A Simple Idea.</div>
                    <div class="t2_2">We believe that new home<br>construction should be a pleasure.</div>
                    <div class="t2_3">Configure. Build. Deliver.</div>
                    <div class="t2_4">Installed in hours.</div>
                    <div class="t2_5">Easy and predictable. Like buying a new car.</div>
                </div>        
                <div class="scroll_single"><img src="https://d2xcq4qphg1ge9.cloudfront.net/assets/17276/2089494/original_scroll_down_single.png"></div> 
  
            </section> 
            <section id="s_three">
            <div class="overlay_three"></div>
                <div id="t3">
                    <div class="t3_1">Simply Smarter.</div>
                    <div class="t3_2">Green materials and process<br>with minimal waste.</div>
                    <div class="t3_3">Healthy, energy efficient homes that save you<br>money before and after you purchase.</div>
                </div>            
                <div class="scroll_single"><img src="https://d2xcq4qphg1ge9.cloudfront.net/assets/17276/2089494/original_scroll_down_single.png"></div> 
            </section>    
            <section id="s_four">
            <div class="overlay_four"></div>

                <div id="t4">
                    <div class="t4_1">Simply Easier.</div>
                    <div class="t4_2">We know what we are building<br>and you know what you're buying.</div>
                    <div class="t4_3">On time. On budget. Every time.</div>
                </div>             
                <div class="scroll_single"><img src="https://d2xcq4qphg1ge9.cloudfront.net/assets/17276/2089494/original_scroll_down_single.png"></div> 

            </section>
            <section id="s_five">       
            <div class="overlay_five"></div>

                <div id="t5">
                    <div class="t5_1">Simply Beautiful.</div>
                    <div class="t5_2">Every component is crafted in our<br>temperature controlled building<br>studios to exacting standards.</div>
                    <div class="t5_3">Then it arrives.</div>
                    <div class="t5_4">Just like a wonderful sunrise.</div>
                </div>             
                <div class="scroll_single"><img src="https://d2xcq4qphg1ge9.cloudfront.net/assets/17276/2089494/original_scroll_down_single.png"></div> 

            </section>
            <section id="n1">
                <div id="t7">
                    <div class="t7_1">Gallery</div>
                </div>
                <ul id="gallery_wrapper">
                    <li class="gallery_entry"><a class="group3" title="" href="img/7.jpg"><img src="img/gallery_01.jpg" style="width:100%; height:auto;" /></a></li>
                    <li class="gallery_entry"><a class="group3" title="" href="img/8.jpg"><img src="img/gallery_02.jpg" style="width:100%; height:auto;" /></a></li>
                    <li class="gallery_entry"><a class="group3" title="" href="img/9.jpg"><img src="img/gallery_03.jpg" style="width:100%; height:auto;" /></a></li>
                    <li class="gallery_entry"><a class="group3" title="" href="img/10.jpg"><img src="img/gallery_04.jpg" style="width:100%; height:auto;" /></a></li>
                    <li class="gallery_entry"><a class="group3" title="" href="img/11.jpg"><img src="img/gallery_05.jpg" style="width:100%; height:auto;" /></a></li>
                    <li class="gallery_entry"><a class="group3" title="" href="img/12.jpg"><img src="img/gallery_06.jpg" style="width:100%; height:auto;" /></a></li>
                    <li class="gallery_entry"><a class="group3" title="" href="img/13.jpg"><img src="img/gallery_07.jpg" style="width:100%; height:auto;" /></a></li>
                    <li class="gallery_entry"><a class="group3" title="" href="img/14.jpg"><img src="img/gallery_08.jpg" style="width:100%; height:auto;" /></a></li>
                    <li class="gallery_entry"><a class="group3" title="" href="img/15.jpg"><img src="img/gallery_09.jpg" style="width:100%; height:auto;" /></a></li>
                    <li class="gallery_entry"><a class="group3" title="" href="img/16.jpg"><img src="img/gallery_10.jpg" style="width:100%; height:auto;" /></a></li>
                    <li class="gallery_entry"><a class="group3" title="" href="img/17.jpg"><img src="img/gallery_11.jpg" style="width:100%; height:auto;" /></a></li>
                    <li class="gallery_entry"><a class="group3" title="" href="img/18.jpg"><img src="img/gallery_12.jpg" style="width:100%; height:auto;" /></a></li>
                    <li class="gallery_entry"><a class="group3" title="" href="img/19.jpg"><img src="img/gallery_13.jpg" style="width:100%; height:auto;" /></a></li>
                    <li class="gallery_entry"><a class="group3" title="" href="img/20.jpg"><img src="img/gallery_14.jpg" style="width:100%; height:auto;" /></a></li>
                    <li class="gallery_entry"><a class="group3" title="" href="img/21.jpg"><img src="img/gallery_15.jpg" style="width:100%; height:auto;" /></a></li>
                    <li class="gallery_entry"><a class="group3" title="" href="img/22.jpg"><img src="img/gallery_16.jpg" style="width:100%; height:auto;" /></a></li>
                    <li class="gallery_entry"><a class="group3" title="" href="img/23.jpg"><img src="img/gallery_17.jpg" style="width:100%; height:auto;" /></a></li>
                
                
                    <div style="clear:both"></div>
                </ul>
            </section>
  
              
            
            <section id="s_six">
            <div class="overlay_six"></div>

                <div id="t6">
                    
                    <div class="t6_1">Join us on the Journey.</div>
                    <div class="t6_2">Thank you for looking us up!<br>Sign up to get our multi media email newsletters,<br>sneak peak model updates,<br>and our trendoid prefab wearables.</div><br>
                    <form id="form_q1" style="text-align:center;" id="questions" action="comment.php" method="post"> 
                        <input name="email_address" id="emailaddress1" placeholder="Email" type="email" required>
                        <input name="location" id="location_form1" placeholder="City,State" type="text" required><br>
                        <textarea name="question_text" id="questionwrapper1" placeholder="Question?" required></textarea><br>
                        <input id="submit_button1" type="submit" value="Submit">
                        <div style="color:white; font-size: 1.15vw; line-height:1.15vw; opacity:0; margin-top:-1px;" class="thank_ref1">Thank you for your question. We will get to you as soon as possible</div>
                    </form>
<br><br>
					<div>
						<img style="width:30%; height:auto" src="https://d2xcq4qphg1ge9.cloudfront.net/assets/17276/2089564/original_logo_end.png">
					</div>                    
                </div>              
            
            </section>       
        
        
        </div>    
            
        
    </body>
         
    <script>
        $(document).ready(function(){

        
                $(".group3").colorbox({rel:'group3', retinaImage:true, scalePhotos:true, scrolling:false,  transition:"none", height:"80%"});
            
$('#form_q').submit(function() { 
    
    
    email_v = $('input[id=emailaddress]').val();
	location_v = $('input[id=location_form]').val();
    question_v = $('input[id=questionwrapper]').val();
    
    if( !email_v.length && !location_v.length && !question_v.length )
	{
	   alert("Please fill out all fields");	
	}
    else {
    
 
    $(this).ajaxSubmit(function(){  $('#submit_button').transition({ opacity: 0, height: 0,  duration: 1000 })
                $('.thank_ref').transition({ opacity: 1, delay:1000, duration:1000 })  
                             $('#submit_button1').transition({ opacity: 0, height: 0,  duration: 1000 })    
                                 $('.thank_ref1').transition({ opacity: 1, delay:1000, duration:1000 }) 

                                 
                                 }); return false;
        
    };
                                 
 }); 
    
    
$('#form_q1').submit(function() { 
    
    
    email_v1 = $('input[id=emailaddress1]').val();
	location_v1 = $('input[id=location_form1]').val();
    question_v1 = $('input[id=questionwrapper1]').val();
    
    if( !email_v1.length && !location_v1.length && !question_v1.length )
	{
	   alert("Please fill out all fields");	
	}
    else {
    
 
    $(this).ajaxSubmit(function(){  $('#submit_button').transition({ opacity: 0, height: 0,  duration: 1000 })
                $('.thank_ref').transition({ opacity: 1, delay:1000, duration:1000 })  
                             $('#submit_button1').transition({ opacity: 0, height: 0,  duration: 1000 })    
                                 $('.thank_ref1').transition({ opacity: 1, delay:1000, duration:1000 }) 

                                 
                                 }); return false;
        
    };
                                 
 });         
            


            $('.overlay_one').transition({ opacity: 0.4, delay: 500 });
            $(".wrapper").onepage_scroll({
            sectionContainer: "section", 
            easing: "ease", // Easing options accepts the CSS3 easing animation such "ease", "linear", "ease-in", "ease-out", "ease-in-out", or even cubic bezier value such as "cubic-bezier(0.175, 0.885, 0.420, 1.310)"
            animationTime: 800, 
            pagination: true, 
            updateURL: false, 
            beforeMove: function(index) {}, 
            afterMove: function(index) {
                    var stwo= $("#s_two").offset().top;
                    var sthree = $("#s_three").offset().top;
                    var sfour= $("#s_four").offset().top;
                    var sfive = $("#s_five").offset().top; 
                    var ssix = $("#s_six").offset().top;
            
                	if (stwo==0) {
                        $('.overlay_two').transition({ opacity: 0.4 })
                        $('.t2_1').transition({ opacity: 1 })
                        $('.t2_2').transition({ opacity: 1, delay: 500 })
                        $('.t2_3').transition({ opacity: 1, delay: 1000 })
                        $('.t2_4').transition({ opacity: 1, delay: 1500 })
                        $('.t2_5').transition({ opacity: 1, delay: 2000 })
                    }
                	else if (sthree==0) {
                        $('.overlay_three').transition({ opacity: 0.4 })
                        $('.t3_1').transition({ opacity: 1 })
                        $('.t3_2').transition({ opacity: 1, delay: 500 })
                        $('.t3_3').transition({ opacity: 1, delay: 1000 })
                    }
                	else if (sfour==0) {

                        $('.overlay_four').transition({ opacity: 0.4 }) 
                        $('.t4_1').transition({ opacity: 1 })
                        $('.t4_2').transition({ opacity: 1, delay: 500 })
                        $('.t4_3').transition({ opacity: 1, delay: 1000 })
                    }
                	else if (sfive==0) {
                        $('.overlay_five').transition({ opacity: 0.4 })
                        $('.t5_1').transition({ opacity: 1 })
                        $('.t5_2').transition({ opacity: 1, delay: 500 })
                        $('.t5_3').transition({ opacity: 1, delay: 1000 })
                        $('.t5_4').transition({ opacity: 1, delay: 1500 })

                    }
                	else if (ssix==0) {$('.overlay_six').transition({ opacity: 0.5 })
                                      
                    };
            
            },
            loop: false, 
            responsiveFallback: false 
            }); 
             
            
            causeRepaintsOn = $("div");
            

            
            jQuery.fn.center = function () {
                this.css("position","absolute");
                this.css("top", Math.max(0, (($(window).height() - $(this).outerHeight()) / 2) + 
                                                            $(window).scrollTop()) + "px");
                this.css("left", Math.max(0, (($(window).width() - $(this).outerWidth()) / 2) + 
                                                            $(window).scrollLeft()) + "px");
                return this;
            }
            jQuery.fn.centera = function () {
                this.css("position","absolute");
                this.css("top", Math.max(0, (($(window).height() - $(this).outerHeight()) / 2) + 
                                                            $(window).scrollTop()) + "px");
                
                return this;
            }
            
				$(".onepage-pagination").centera();
                $("#t1").center();            
                $("#t2").center();              
                $("#t3").center();    
                $("#t4").center();    
                $("#t5").center();    
                $("#t6").center(); 
            
            
            
            $(window).resize(function() {  causeRepaintsOn.css("z-index", 1);           $(".onepage-pagination").centera();
                $("#t1").center();            
                $("#t2").center();              
                $("#t3").center();    
                $("#t4").center();    
                $("#t5").center();    
                $("#t6").center(); 
$.colorbox.close();

                                        });
            
        });
    </script>    
    
</html>
