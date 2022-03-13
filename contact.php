<?php
	
	// include phpmailer class
	require_once 'mailer/class.phpmailer.php';
    require_once 'mailer/class.smtp.php';

	$mail = new PHPMailer(true);	
	
	if (isset($_POST['submit-btn'])) {
		
		$fullname  = strip_tags($_POST['fullname']);
		$email      = strip_tags($_POST['email']);
        $additional_details     = strip_tags($_POST['additional_details']);
        $project_type      = strip_tags($_POST['project_type']);
        
        $subject = 'New Contact Email';
        $message = "<div style='padding:25px 16px;background-color:#121212;color:white;line-height:1.5;'>
            <h2>Dear <strong>{$fullname}!</strong></h2>

            <h1> &#128640; New Message from Shorebricks</h1>
            
            <p style='font-size:16px;padding:20px 20px;margin:10px auto 20px auto;background-color:#222222;border-radius:10px;line-height:1.7;'>
                {$additional_details}
            </p>
            
            <span style='font-size:15px;color:#606060;display:block;'>
                Project type: {$project_type}
            </span>
            
        </div>";
        
        try	{			
			$mail->IsSMTP(); 
			$mail->isHTML(true);
			$mail->SMTPDebug  = 0;                     
			$mail->SMTPAuth   = true;                  
			$mail->SMTPSecure = "ssl";                 
			$mail->Host       = "smtp.gmail.com";      
			$mail->Port       = 465;             
			$mail->AddAddress('astongemmy@hotmail.com');  // Here is the address you want to send to
			$mail->Username   ="astongemmy@gmail.com";  // I'm using my gmail account as email host. You will need to change to yours
			$mail->Password   ="jddovqmailvexoej";  // Email host account password. When you create your gmail app password you replace it
			$mail->SetFrom($email, $fullname);
			$mail->AddReplyTo($email, $fullname);
			$mail->Subject    = $subject;
			$mail->Body 	  = $message;
			$mail->AltBody    = $message;
			
			if ($mail->Send()) {				
				$msg = "<div class='alert alert-success'> Hi, ".$fullname." your mail was successfully sent</div>";				
			}
		
		} catch(phpmailerException $ex) {			
			$msg = "<div class='alert alert-warning'>".$ex->errorMessage()."</div>";			
		}
		
	}	

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;1,400&family=Open+Sans:wght@300;400;500;600;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500&display=swap"
        rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;1,400&family=Open+Sans:wght@300;400;500;600;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://kit.fontawesome.com/e6258a65d6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/styles.css" />
    <link rel="stylesheet" href="./css/styles2.css">
    <title>Contact - Shorebricks </title>

    <style>
        .parallax {
            /* The image used */
            background-image: url("images/contact2.jpg");
            /* Set a specific height */
            min-height: 500px;
            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            ;
        }
        
        .parallax2 {
            /* The image used */
            background-image: url("images/house5.JPG");
            /* Set a specific height */
            min-height: 400px;
            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        
        .parallax3 {
            /* The image used */
            background-image: url("images/house5.JPG");
            /* Set a specific height */
            min-height: 400px;
            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        
        .parallax4 {
            /* The image used */
            background-image: url("images/house16.JPG");
            /* Set a specific height */
            min-height: 700px;
            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>

</head>

<body class="font-nunito text-white bg-white">

    <!-- Header -->

    <header class="fixed nav-down top-0 left-0 w-full bg-input
        text-white font-nunito z-50 transition-all ease-in duration-500" id="menu-list">
        <div class="mx-auto px-8 md:px-14 lg:px-12 xl:px-16 py-4 lg:py-0 flex justify-between items-center">
            <!-- Logo -->

            <a href="index.html" class=""><img src="images/logo3.png" alt="" class="w-32 md:w-40 xl:w-50 object-cover md:block mb-1 z-50" /></a>

            <!-- Sidebar Menu -->
            <div class="menu-wrap fixed lg:relative top-0 left-0 h-full lg:hidden z-50">
                <input type="checkbox" class="toggler">
                <div class="hamburger">
                    <div></div>
                </div>
                <div class="menu">
                    <div>
                        <div>
                            <ul>
                                <li class="text-hover"><a href="index.html" class="text-change hover:text-compcolor">Home</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="projects.html">Projects</a></li>
                                <li><a href="contact.html">Contact</a></li>

                            </ul>
                            <div class=" lg:block mt-6 bg-compcolor rounded-lg py-2">

                                <button class="btn2 text-lg"><a href="contact2.html">Schedule Appointment</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Navigation -->

            <nav class="hidden lg:flex items-center justify-center nav-links text-xs lg:text-sm cursor-pointer z-40 nav_bar">
                <ul class="md:flex justify-center items-center space-x-6 lg:space-x-12 ml-12 xl:ml-50">
                    <li class="hover:text-compcolor uppercase"><a href="index.html">Home</a></li>
                    <li class="hover:text-compcolor uppercase"><a href="about.html">About Us</a></li>
                    <li class="hover:text-compcolor overflow-auto uppercase"><a href="projects.html">Projects</a></li>

                    <li class="hover:text-compcolor flex justify-start  z-20 dropdown overflow-visible py-5 p-0 my-0">

                        <a href="" class="dropdown uppercase">Services</a>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 font-bold ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                    </svg>


                        <div class="absolute top-0  mx-auto bg-gray-300 flex-col w-screen  text-sm text-input font-bold dropdown-content z-30  animate__animated animate__slideInDown animate_delay-1s">

                            <div class="mt-4">
                                <h4 class="font-sans font-bold text-2xl pl-32 py-8 uppercase">Services</h4>

                                <div class="px-10 grid grid-col-1 md:grid-cols-2 lg:grid-cols-5 gap-6 items-center md:justify-center overflow-hidden text-input xl:text-lg gap-y-6 mx-8 mr-12 py-12 bg-input mb-8">

                                    <div class="text-white">
                                        <a href="design-build.html">
                                            <h4 class="mb-4 opacity-75">Design-Build Services</h4>
                                            <img src="images/house15.jpg" alt="" class="object-cover w-full h-56">
                                        </a>
                                    </div>
                                    <a href="homeremodelling.html">
                                        <div class="text-white">
                                            <h4 class=" mb-4 opacity-75 ">Home Remodelling</h4>
                                            <img src="images/house13.jpg " alt=" " class="object-cover w-full h-56">
                                        </div>
                                    </a>
                                    <a href="constructionmanagement.html">
                                        <div class="text-white ">
                                            <h4 class="mb-4 opacity-75 text-sm xl:text-lg ">Construction Management</h4>
                                            <img src="images/site.jpg " alt=" " class="object-cover w-full h-56">
                                        </div>
                                    </a>
                                    <a href="interiordecor.html">
                                        <div class="text-white ">
                                            <h4 class="mb-4 opacity-75 ">Interior Decor</h4>
                                            <img src="images/house10.jpg " alt=" " class="object-cover w-full h-56">
                                        </div>
                                    </a>
                                    <a href="realestate.html">
                                        <div class="text-white ">
                                            <h4 class="mb-4 opacity-75 ">Real Estate Investment</h4>
                                            <img src="images/house16.jpg " alt=" " class="object-cover w-full h-56">
                                        </div>
                                    </a>


                                </div>


                            </div>

                            <div class="px-10">
                                <h4 class="mb-4 text-2xl">
                                    Other Services
                                </h4>

                                <!-- <div>
                                        <ul>
                                            <li>
                                                <a href="#">Stamped Concrete</a>
                                                <a href="#">Car Park</a>
                                                <a href="#">Automated Swimming pool cover</a>
                                                <a href="#"></a>
                                                <a href="#"></a>
                                            </li>
                                        </ul>
                                    </div> -->
                                <div class="table w-full ...">
                                    <div class="table-header-group ...">

                                        <div class="table-row-group text-base bg text-badge py-3 px-16">
                                            <div class="table-row">
                                                <div class="table-cell pb-4 pr-12 ">Stamped Concrete</div>
                                                <div class="table-cell ...">Contemporary Car Park and Pergola</div>

                                            </div>
                                            <div class="table-row">
                                                <div class="table-cell pb-4 pr-12">Automated Swimming Pool Cover</div>
                                                <div class="table-cell ...">Consultancy Services</div>

                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>



                    </li>
                    <li class="hover:text-compcolor animate-wiggle uppercase">
                        <a href="contact.html ">Contact US</a></li>
                </ul>

            </nav>


            <!-- Social icons -->
            <div class="space-x-6 xl:flex mt-3 px-4 hidden text-sm ">
                <div class="animate-bounce3 "><a href="https://www.twitter.com/shorebricks " class="opacity-60 hover:opacity-100 text-blue-300 "><i class="fa fa-twitter fa-2x " aria-hidden="true "></i></a></div>
                <div class="animate-bounce4 ">
                    <a href="https://www.facebook.com/shorebricks " class="opacity-60 hover:opacity-100 ">
                        <i class="fa fa-facebook-official fa-2x " aria-hidden="true "></i>
                    </a>
                </div>
                <div class="animate-bounce3 ">
                    <a href="https://www.instagram.com/shorebricks " class="opacity-60 hover:opacity-100 text-instagram "><i class="fa fa-instagram fa-2x " aria-hidden="true "></i></a>
                </div>
            </div>

            <div class="hidden xl:block ">

                <button class="ring-2 ring-gray-600 btn2 "><a href="contact2.html ">Schedule Appointment</a></button>
            </div>
            </div>
    </header>

    <!-- Header ends -->

    <!-- Hero -->

    <section class="mx-auto parallax flex items-center mb-10 bg-fixed bg-center bg-cover">
        <div class="overlay-bg3 py-24 w-full text-3xl lg:text-5xl text-white">
            <h1 class="ml-12 lg:ml-32 overflow-hidden font-bold uppercase font-sans">Contact Us
            </h1>
        </div>
    </section>


    <!-- Contact form -->

    <section class="mx-auto w-10/12 mb-12 text-input border p-8 bg-gray-200">
        <div class="flex flex-row justify- gap-56">

            <form id="contact-form" action="" method="POST" class="py-8">
                <h2 class="text-2xl lg:text-3xl font-bold Uppercase mb-4 text-compcolor">Get In Touch</h2>
                <p class="mb-10">Contact us today to get one step closer to the home you’ve always wanted.</p>
                <?php echo $msg; ?>
                <div class="mt-8 max-w-md">
                    <div class="grid grid-cols-1 gap-6">
                        <label class="block">
                            <span class="text-gray-700">Full name</span>
                            <input type="text" name="fullname" id="fullname" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="" />
                        </label>
                        <label class="block">
                            <span class="text-gray-700">Email address</span>
                            <input type="email" name="email" id="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="john@example.com"/>
                        </label>

                        <label class="block">
                            <span class="text-gray-700">What type of project?</span>
                            <select  name="project_type" id="project_type" class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                <option value="residential">Residential</option>
                                <option value="commercial">Commercial</option>
                            </select>
                        </label>
                        
                        <label class="block">
                            <span class="text-gray-700">Additional details</span>
                            <textarea name="additional_details" id="additional_details" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" rows="3"></textarea>
                        </label>
                        
                        <div class="block">
                            <div class="mt-2">
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50" checked/>
                                        <span class="ml-2">Email me news and real estate offers</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <button type="submit" name="submit-btn" id="submit-btn" class="btn bg-compcolor mb-12: mt-8 md:mt-12">Send</button>
            </form>

        <!-- Contact address -->
        <div class="hidden lg:block space-y-4">
            <h4 class="font-bold text-lg lg:text-2xl pt-10 text-compcolor">Office</h4>
            <p class="flex text-sm lg:text-base">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                </svg> Gani Adebayo Close, Lekki Expressway <br> Lagos, Nigeria
            </p>
            <p class="flex text-sm lg:base">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2M5 3a2 2 0 00-2 2v1c0 8.284 6.716 15 15 15h1a2 2 0 002-2v-3.28a1 1 0 00-.684-.948l-4.493-1.498a1 1 0 00-1.21.502l-1.13 2.257a11.042 11.042 0 01-5.516-5.517l2.257-1.128a1 1 0 00.502-1.21L9.228 3.683A1 1 0 008.279 3H5z" />
                </svg>09056538331
            </p>
            <p class="flex text-sm lg:text-base">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>shorebricks@yahoo.com
            </p>
        </div>

        </div>

    </section>


    <!-- Footer -->
    <!-- Social section -->
    <div class="text-white bg-gray-100 mt-12 md:flex items-center md:py-4 font-poppins mx-auto ">
        <div class="md:rounded text-sm text-white bg-compcolor shadow-md flex items-center md:w-11/12 mx-auto px-12 md:px-20 py-6 ">
            <h4 class=" mr-8 text-lg ">Follow Shorebricks</h4>
            <a href="https://www.twitter.com/shorebricks " class="mr-4 opacity-80 hover:opacity-100 "><i class="fa fa-twitter fa-2x " aria-hidden="true "></i></a>
            <a href="https://www.facebook.com/shorebricks " class="mr-4 opacity-80 hover:opacity-100 ">
                <i class="fa fa-facebook-official fa-2x " aria-hidden="true "></i>
            </a>
            <a href="https://www.instagram.com/shorebricks " class="opacity-80 hover:opacity-100 "><i class="fa fa-instagram fa-2x " aria-hidden="true "></i></a>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-input pt-8 px-10 md:px-16 lg:px-24 ">
        <div class="grid md:grid-cols-3 md:justify-center gap-8 space-y-6 md:space-y-0 ">

            <div class=" ">
                <a href="index.html ">
                    <img src="images/logo3.png " alt=" " class="w-32 lg:w-48 bg-transparent ">
                </a>

                <div class="text-sm text-white mx-auto py-6 ">

            </div>

            <div class="space-y-4 ">
                <h4 class="font-bold text-lg mb-5 ">Office</h4>
                <p class="flex text-sm ">
                    <svg xmlns="http://www.w3.org/2000/svg " class="h-6 w-5 mr-2 " fill="none " viewBox="0 0 24 24 " stroke="currentColor ">
                    <path stroke-linecap="round " stroke-linejoin="round " stroke-width="2 " d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4 " />
                  </svg> Gani Adebayo Close, Lekki Expressway <br> Lagos, Nigeria
                </p>
                <p class="flex text-sm ">
                    <svg xmlns="http://www.w3.org/2000/svg " class="h-6 w-5 mr-2 " fill="none " viewBox="0 0 24 24 " stroke="currentColor ">
                    <path stroke-linecap="round " stroke-linejoin="round " stroke-width="2 " d="M16 8l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2M5 3a2 2 0 00-2 2v1c0 8.284 6.716 15 15 15h1a2 2 0 002-2v-3.28a1 1 0 00-.684-.948l-4.493-1.498a1 1 0 00-1.21.502l-1.13
                                        2.257a11.042 11.042 0 01-5.516-5.517l2.257-1.128a1 1 0 00.502-1.21L9.228 3.683A1 1 0 008.279 3H5z " />
                  </svg>09056538331
                </p>
                <p class="flex text-sm ">
                    <svg xmlns="http://www.w3.org/2000/svg " class="h-6 w-5 mr-2 " fill="none " viewBox="0 0 24 24 " stroke="currentColor ">
                    <path stroke-linecap="round " stroke-linejoin="round " stroke-width="2 " d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z " />
                  </svg>shorebricks@yahoo.com
                </p>
            </div>

            <div>
                <h4 class="mb-5 font-bold text-lg ">Useful Links</h4>
                <span class="flex flex-col space-y-5 ">
                <a href="index.html ">Home</a>
                <a href="contact.html ">Contact</a>
                <a href="privacy.html ">Privacy Policy</a>
            </span>
            </div>

        </div>

        <p class="md:text-center mt-12 pb-8 ">
            Copyright &copy; 2022 Shorebricks
        </p>
    </footer>

    <script type="text/javascript">
        var counter = 1;
        setInterval(function() {
            document.getElementById('radio' + counter).checked = true;
            counter++;
            if (counter > 4) {
                counter = 1;
            }
        }, 5000);
    </script>


    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 100,
            duration: 1000
        });
    </script>

    <!-- I was using this javascript to run it before but it wasn't working so I decided to do it the manual way to be sure what was wrong -->
    <script type="text/javascript">
        // const contactForm = document.querySelector('#contact-form');
        // contactForm.addEventListener('submit', function(e) {
        //     e.preventDefault()
        //     const email = contactForm.querySelector('#email').value;
        //     const fullname = contactForm.querySelector('#fullname').value;
        //     const project_type = contactForm.querySelector('#project_type').value;
        //     const additional_details = contactForm.querySelector('#additional_details').value;
        //     const submit_btn = contactForm.querySelector('#submit-btn');
        //     const emailObject = {
        //         email: email,
        //         fullname: fullname,
        //         project_type: project_type,
        //         additional_details: additional_details
        //     }
        //     submit_btn.textContent = 'Sending...';
        //     fetch("http://localhost/shorebricks/sendmail", {
        //         method: 'POST',
        //         mode: 'cors', // no-cors, *cors, same-origin
        //         cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
        //         credentials: 'same-origin', // include, *same-origin, omit
        //         headers: {
        //             "Content-Type": "application/json"
        //             // 'Content-Type': 'application/x-www-form-urlencoded',
        //         },
        //         body: JSON.stringify(emailObject)
        //     }).then(function(result) {
        //         return result.json();
        //     }).then(function(data) {
        //         if (data.status == 'success') {
        //             submit_btn.textContent = 'Sent';
        //         } else {
        //             submit_btn.textContent = 'Error sending email';
        //         }
        //         setTimeout(() => {
        //             submit_btn.textContent = 'Send';
        //         }, 1000)
        //     });
        // })
    </script>

    <!-- <script src="./app.js"></script> -->
</body>

</html>

</html>

</html>