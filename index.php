<?php
header("Access-Control-Allow-Origin:*");
header('Access-Control-Allow-Methods: GET, POST, OPTIONS, DELETE, PUT');
header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With, X-CLIENT-ID, X-CLIENT-SECRET');
header('Access-Control-Allow-Credentials: true');
?>

<!DOCTYPE html>
<html>
<head>
<title>Progetto java</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<style>
        body {
            background-image:  url(img/background.jpg);
			text-align: center;
        }
		

        h3 {
            font-size: 20px;
			text-align: center;
            color: #000;
        }


       
        .container {
            width: 80%;
            margin: auto;
            color: #FFF;
            font-size: 25px;
		 text-align: center;
        }

            .container h3 {
                font-size: 20px;
            }


        #apiDiv {
            border: dashed 2px #ccc;
            padding: 10px;
            text-align: center;
        }

            #apiDiv input, #apiDiv button {
                font-size: 25px;
                color: #000;
            }

            #apiDiv h4 {
                margin: 10px 0;
            }

            #apiDiv .imageDiv {
                text-align: center;
            }

                #apiDiv .imageDiv img {
                    display: none;
                }

            #apiDiv #message {
                padding-top: 10px;
				color:#cc0000;
				font-size:18px;

            }

                #apiDiv #message .resultDiv {
                    background-image:  url(img/background.jpg);
                    display: inline-block;
                }

                    #apiDiv #message .resultDiv > p {
                        color: #000;
                        display: inline-block;
                        width: 95%;
                        padding: 10px;
                        border-bottom: double 2px #CCC;
                    }

                    #apiDiv #message .resultDiv .result {
                        width: 100%;
                       
                        padding: 6px;
                        float: left;
                        text-align: center;
				   border-bottom: 1px solid #ccc;
                        cursor: pointer;
                    }

                        #apiDiv #message .resultDiv .result img {
                        width: 60%;
                        padding: 6px;
                        text-align: center;
				   border: 4px double #CCC;

							
                        }

                        #apiDiv #message .resultDiv .result p {
                            margin: 0;
							text-align: center;
                        }

                            #apiDiv #message .resultDiv .result p a {
                                color: #808080;
                                text-decoration: none;
                                font-size: 14px;
                                height: 100px;
								text-align: center;
                            }

                                #apiDiv #message .resultDiv .result p a:hover {
                                    text-decoration: underline;
                                }
								
								



        

#top {
  position: fixed;
  top: 0;
  left: 0;
  background-image:  url(img/sfondo.jpg);
  z-index: 999;
  width: 100%;
  height: 64px;
  
}

#middle {
    margin-top:80px;
    font-size:20px;
}

#bottom {
    position: fixed;
    bottom: 0;
    right: 0;
    width: 100%;
    height: 64px;
    background-image:  url(img/sfondo_bottom.jpg);
}

#img {
  margin-top:20px;
  
}

#bimg {
  margin-bottom:10px;

}
#timg {
  margin-top:10px;
  
}
#ima {
border: 1px solid #dddddd;
    border-radius: 4px;
    padding: 20px;
    background:#ffffff;
  
  
}
</style>

</head>
<body>

<div id="top"><img src="img/webLogo.png" id="timg"></div>
<div id="middle"> <?php include("include_index.php"); ?> </div><br><br><br><br>
<div id="bottom"><div id="img">Copyright &#169; 2018 - DEVELOPER CARMINE MORABITO</div></div>
</body>
</html>
