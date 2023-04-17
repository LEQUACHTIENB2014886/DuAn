<!DOCTYPE html> <html lang="en" class="no-js"> 
    <head>
        <meta charset="UTF-8" />
        <title>WEB</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="images/favicon.png" />
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/AnimateLogo.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />

	   	<link rel="stylesheet" href="css/userlogin.css" type="text/css" media="all" />

	
    </head>
    <body>
	
        <div class="container">
            <br><br>
			<div class="codrops-top">
            <header>

			    <p align="center" align="center"><b>  </b>	<b> <a href="#tologin"  class="a-btn"> <span class="a-btn-text">Đăng Nhập</span> </a> </b>
				<a href="Customer.php" class="a-btn"><strong><span class="a-btn-text">Tạo Tài Khoản</span></strong></a><a href="./Public/index.php" class="a-btn"><strong> <span class="a-btn-text">Home</span></strong></a> </p>
            </header>
			 <div class="clr"></div>
			 </div> <br><br>
            <section>				
                <div id="container_demo" >
                   <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <br><br><br>
                        <div id="login" class="animate form">
                            <form  action="userValidate.php" method="post" autocomplete="on"> 
                            <br><br><br>
                                <h1>Đăng Nhập:</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Your Email </label>
                                    <input type="text" name="magaca" required="required" type="text" placeholder="@gmail.com"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your Password </label>
                                    <input type="password" name='furaha' required="required" type="password" placeholder="*********" /> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Keep me logged in</label>
								</p>
                                <p class="login button"> 
                                    <input type="submit"  name="submit"  value =" Login">
								</p>

                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html
\\