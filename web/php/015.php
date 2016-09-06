<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
    <title>TODO supply a title</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Header navigation-->
    <div class="header_image">
        <div class="header_navigation_V-2">
            <ul> 
                <li id="prev" class="active"><a href="./014.php">« Previous</a></li>
                <li id="home" class="active"><a href="../index.html">HOME</a></li>
                <li id="next" class="active"><a href="./016.php">Next »</a></li>
            </ul>
        </div>
    </div>

    <!--External Stylesheets-->
    <link rel="stylesheet" type="text/css" href="../css/default.css">
    <link rel="stylesheet" type="text/css" href="../css/site-navigation.css">
    <link rel="stylesheet" type="text/css" href="../css/background-images.css">
    
    <!--Internal Stylesheet-->
    <style>
        table,th,td {
          border : 1px solid black;
          border-collapse: collapse;
        }
        th,td {
          padding: 5px;
        }
    </style>
    
</head>    
<body>       
    <div>
        <!--Body content-->
        <div class = "mainbody"> 
            <h1>What Can PHP Do?</h1>
            <div class = "interactive">
                <h2>AJAX</h2>
                <!--new example-->
                <h2>What is AJAX?</h2>
                <p>AJAX = Asynchronous JavaScript and XML.</p>
                <p>AJAX is a technique for creating fast and dynamic web pages.</p>
                <p>AJAX allows web pages to be updated asynchronously 
                    by exchanging small amounts of data with the server 
                    behind the scenes. This means that it is possible to 
                    update parts of a web page, without reloading the whole page.
                </p>
                <p>Classic web pages, (which do not use AJAX) must reload 
                    the entire page if the content should change.
                </p>
                <p>AJAX is based on internet standards, and uses a combination of:</p>
                <ul>
                    <li>XMLHttpRequest object (to exchange data asynchronously 
                        with a server)</li>
                    <li>JavaScript/DOM (to display/interact with the information)</li>
                    <li>CSS (to style the data)</li>
                    <li>XML (often used as the format for transferring data)</li>
                </ul>
                <p>AJAX applications are browser- and platform-independent! 
                    AJAX was made popular in 2005 by Google, with Google Suggest.</p>
                <!--new example-->
                <h2>AJAX</h2>
                <button type="button" onclick="loadDoc1()">Request data</button>
                <p id="demo1"></p>
                <script>
                function loadDoc1() {
                    /*All modern browsers support the XMLHttpRequest object.*/
                    var xhttp = new XMLHttpRequest();
                    /*When using async=true, specify a function to execute 
                     * when the response is ready in the onreadystatechange 
                     * event:*/
                    xhttp.onreadystatechange = function() {
                      if (this.readyState === 4 && this.status === 200) {
                        /*If the response from the server is not XML, 
                        * use the responseText property. 
                        * The responseText property returns the response as a string, 
                        * and you can use it accordingly:*/
                        document.getElementById("demo1").innerHTML = this.responseText;
                      }
                    };
                    /*To send a request to a server, we use the open() and send() 
                     * methods of the XMLHttpRequest object:
                     * Request the file:sometext.txt*/
                    xhttp.open("POST", "../txt/sometext1.txt", true);
                    /*To POST data like an HTML form, add an HTTP header 
                     * with setRequestHeader(). Specify the data you want 
                     * to send in the send() method:*/
                    xhttp.setRequestHeader("Content-type", "../xml/cd_catalog.xml");
                    xhttp.send("fname=Henry&lname=Ford");
                }
                </script>
                <!--new example-->
                <h2>AJAX</h2>
                <button type="button" onclick="loadDoc2()">Request data</button>
                <p>Click the button several times to see if the time changes, or if the file is cached.</p>
                <p id="demo2"></p>
                <script>
                function loadDoc2() {
                  /*All modern browsers support the XMLHttpRequest object.*/
                  var xhttp = new XMLHttpRequest();
                  /*When using async=true, specify a function to execute 
                   * when the response is ready in the onreadystatechange event:*/
                  xhttp.onreadystatechange=function() {
                    if (this.readyState === 4 && this.status === 200) {
                      /*If the response from the server is not XML, 
                       * use the responseText property. 
                       * The responseText property returns the response as a string, 
                       * and you can use it accordingly:*/
                      document.getElementById("demo2").innerHTML = this.responseText;
                    }
                  };
                  /*To send a request to a server, we use the open() and send() 
                   * methods of the XMLHttpRequest object:
                   * Request the file:sometext.txt
                   * you may get a cached result. 
                   * To avoid this, add a unique ID to the URL:
                   * If you want to send information with the GET method, 
                   * add the information to the URL:*/
                  xhttp.open("GET", "../txt/sometext1.txt?t=" 
                          + Math.random() + 
                          "fname=Henry&lname=Ford", true);
                  xhttp.send();
                }
                </script>
                <!--new example-->
                <p>When using async=true, specify a function to execute when 
                    the response is ready in the onreadystatechange event:</p>
                <p>Using async=false is not recommended, but for a few small 
                    requests this can be ok.</p>
                <p>Remember that the JavaScript will NOT continue to execute, 
                    until the server response is ready. If the server is busy 
                    or slow, the application will hang or stop.</p>
                <p><b>Note:</b> When you use async=false, do NOT write an 
                    onreadystatechange function - just put the code after 
                    the send() statement:</p>
                <!--new example-->
                <p>Sending asynchronous requests is a huge improvement for 
                    web developers. Many of the tasks  performed on the server 
                    are very time consuming. Before AJAX, this operation could 
                    cause the application to hang or stop.</p>
                <p>With AJAX, the JavaScript does not have to wait for the 
                    server response, but can instead:</p>
                <ul>
                    <li>execute other scripts while waiting for server response</li>
                    <li>deal with the response when the response ready</li>
                </ul>
                <!--new example-->
                <h2>My CD Collection:</h2>
                <button type="button" onclick="loadDoc3()">Get my CD collection</button>
                <p id="demo3"></p>
                <script>
                function loadDoc3() {
                  var xhttp, xmlDoc, txt, x, i;
                  /*All modern browsers support the XMLHttpRequest object.*/
                  xhttp = new XMLHttpRequest();
                  /*When using async=true, specify a function to execute 
                   * when the response is ready in the onreadystatechange event:*/
                  xhttp.onreadystatechange = function() {
                  if (this.readyState === 4 && this.status === 200) {
                    /*If the response from the server is XML, and you want to 
                     * parse it as an XML object, use the responseXML property:*/
                    xmlDoc = this.responseXML;
                    txt = "";
                    /*get an array of all artist nodes*/
                    x = xmlDoc.getElementsByTagName("ARTIST");
                    /*array of nodes to text string*/
                    for (i = 0; i < x.length; i++) {
                      txt = txt + x[i].childNodes[0].nodeValue + "<br>";
                    }
                    /*write result into tag with id='demo'*/
                    document.getElementById("demo3").innerHTML = txt;
                    }
                  };
                  /*To send a request to a server, we use the open() and send() 
                   * methods of the XMLHttpRequest object:
                   * Request the file cd_catalog.xml*/
                  xhttp.open("GET", "../xml/cd_catalog.xml", true);
                  xhttp.send();
                }
                </script>
                <!--new example-->
                <h2>The onreadystatechange event</h2>
                <p>When a request to a server is sent, we want to perform 
                    some actions based on the response.</p>
                <p>The onreadystatechange event is triggered every time the 
                    readyState changes. The onreadystatechange event is 
                    triggered five times (0-4), one time for each change in 
                    readyState.</p>
                <p>The readyState property holds the status of the XMLHttpRequest.</p>
                <p>Three important properties of the XMLHttpRequest object:</p>
                <table> 
                  <tbody>
                      <tr>
                        <th style="width:20%">Property</th>
                        <th>Description</th>
                      </tr>  
                      <tr>
                        <td>onreadystatechange</td>
                        <td>Stores a function (or the name of a function) to be 
                            called automatically each time the readyState 
                            property changes</td>
                      </tr>
                      <tr>
                        <td>readyState</td>
                        <td>Holds the status of the XMLHttpRequest. Changes from 0 to 4: <br>
                            0: request not initialized <br>
                            1: server connection established<br>
                            2: request received <br>
                            3: processing request <br>
                            4: request finished and response is ready</td>
                      </tr>
                      <tr>
                        <td>status</td>
                        <td>200: "OK"<br>
                            404: Page not found</td>
                      </tr>
                    </tbody>
                </table>
                <!--new example-->
                <h2>Using a Callback Function</h2>
                <p>A callback function is a function passed as a parameter 
                    to another function.</p>
                <p>If you have more than one AJAX task on your website, 
                    you should create ONE standard function for creating 
                    the XMLHttpRequest object, and call this for each 
                    AJAX task.</p>
                <p>The function call should contain the URL and what to do 
                    on onreadystatechange (which is probably different for each call):</p>
                <!--new example-->
                <p id="demo4">Let AJAX change this text.</p>
                <button type="button"
                onclick="loadDoc4('../txt/sometext1.txt', myFunction4)">
                    Change Content
                </button>

                <script>
                /*If you have more than one AJAX task on your website, 
                 * you should create ONE standard function for creating 
                 * the XMLHttpRequest object, and call this for each AJAX task. 
                 * The function call should contain the URL and what to do 
                 * on onreadystatechange (which is probably different 
                 * for each call):
                 * cfunc: variable for the callback function*/
                function loadDoc4(url, cfunc) {
                  var xhttp;
                  xhttp=new XMLHttpRequest();
                  xhttp.onreadystatechange = function() {
                    if (this.readyState === 4 && this.status === 200) {
                      /*what to do on onreadystatechange (which is probably 
                       * different for each call)*/
                      cfunc(this);
                    }
                  };
                  xhttp.open("GET", url, true);
                  xhttp.send();
                }
                /*callback function: A callback function is a 
                 * function passed as a parameter 
                 * to another function.*/
                function myFunction4(xhttp) {
                  document.getElementById("demo4").innerHTML = xhttp.responseText;
                }
                </script>
                <!--new example-->
                <h3>Start typing a name in the input field below:</h3>
                <form action=""> 
                    First name: <input type="text" id="txt1" 
                                       onkeyup="showHint5(this.value)">
                </form>
                <p>Suggestions: <span id="txtHint5"></span></p> 
                <script>
                function showHint5(str) {
                  var xhttp;
                  /*if str is empty do nothing*/
                  if (str.length === 0) { 
                    document.getElementById("txtHint5").innerHTML = "";
                    return;
                  }
                  /*make the request to the server*/
                  xhttp = new XMLHttpRequest();
                  xhttp.onreadystatechange = function() {
                    if (this.readyState === 4 && this.status === 200) {
                      document.getElementById("txtHint5").innerHTML =
                              this.responseText;
                    }
                  };
                  /*call get_hint.php 
                   * and pass parameter q
                   * with value of variable str
                   * to the file*/
                  xhttp.open("GET", "get_hint.php?q="+str, true);
                  xhttp.send();   
                }
                </script>
                <!--new example-->
                <form action=""> 
                    <select name="customers" onchange="showCustomer6(this.value)">
                        <option value="">Select a customer:</option>
                        <option value="ALFKI">Alfreds Futterkiste</option>
                        <option value="NORTS ">North/South</option>
                        <option value="WOLZA">Wolski Zajazd</option>
                    </select>
                </form>
                <br>
                <div id="txtHint6">Customer info will be listed here...</div>
                <script>
                function showCustomer6(str) {
                  var xhttp;    
                  if (str === "") {
                    document.getElementById("txtHint6").innerHTML = "";
                    return;
                  }
                  /*make the request to the server*/
                  xhttp = new XMLHttpRequest();
                  xhttp.onreadystatechange = function() {
                    if (this.readyState === 4 && this.status === 200) {
                      document.getElementById("txtHint6").innerHTML = 
                              this.responseText;
                    }
                  };
                  /*call mysql_select.php 
                   * and pass parameter q
                   * with value of variable str
                   * to the file*/
                  xhttp.open("GET", "mysql_select.php?q="+str, true);
                  xhttp.send();
                }
                </script>
                <!--new example-->
                <script>
                function showUser7(str) {
                  if (str==="") {
                    document.getElementById("txtHint7").innerHTML="";
                    return;
                  }
                  if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp=new XMLHttpRequest();
                  } else { // code for IE6, IE5
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                  }
                  xmlhttp.onreadystatechange=function() {
                    if (this.readyState===4 && this.status===200) {
                      document.getElementById("txtHint7").innerHTML=this.responseText;
                    }
                  }
                  xmlhttp.open("GET","get_user.php?q="+str,true);
                  xmlhttp.send();
                }
                </script>
                <br>
                <form>
                    <select name="users" onchange="showUser7(this.value)">
                        <option value="">Select a person:</option>
                        <option value="1">Peter Griffin</option>
                        <option value="2">Lois Griffin</option>
                        <option value="3">Joseph Swanson</option>
                        <option value="4">Glenn Quagmire</option>
                    </select>
                </form>
                <br>
                <div id="txtHint7"><b>Person info will be listed here.</b></div>
                <!--new example-->
                <script>
                function showCD8(str) {
                  if (str==="") {
                    document.getElementById("txtHint8").innerHTML="";
                    return;
                  }
                  if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp=new XMLHttpRequest();
                  } else {  // code for IE6, IE5
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                  }
                  xmlhttp.onreadystatechange=function() {
                    if (this.readyState===4 && this.status===200) {
                      document.getElementById("txtHint8").innerHTML=this.responseText;
                    }
                  }
                  xmlhttp.open("GET","get_cd.php?q="+str,true);
                  xmlhttp.send();
                }
                </script>
                <form>
                    Select a CD:
                    <select name="cds" onchange="showCD8(this.value)">
                        <option value="">Select a CD:</option>
                        <option value="Bob Dylan">Bob Dylan</option>
                        <option value="Bee Gees">Bee Gees</option>
                        <option value="Cat Stevens">Cat Stevens</option>
                    </select>
                </form>
                <div id="txtHint8"><b>CD info will be listed here...</b></div>
                <!--new example-->
                <script>
                function showResult9(str) {
                  if (str.length===0) {
                    document.getElementById("livesearch9").innerHTML="";
                    document.getElementById("livesearch9").style.border="0px";
                    return;
                  }
                  if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp=new XMLHttpRequest();
                  } else {  // code for IE6, IE5
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                  }
                  xmlhttp.onreadystatechange=function() {
                    if (this.readyState===4 && this.status===200) {
                      document.getElementById("livesearch9").innerHTML=this.responseText;
                      document.getElementById("livesearch9").style.border="1px solid #A5ACB2";
                    }
                  }
                  xmlhttp.open("GET","livesearch.php?q="+str,true);
                  xmlhttp.send();
                }
                </script>
                </head>
                <body>

                <form>
                <input type="text" size="30" onkeyup="showResult9(this.value)">
                <div id="livesearch9"></div>
                </form>
                <!--new example-->
                <script>
                function showRSS10(str) {
                  if (str.length===0) {
                    document.getElementById("rssOutput10").innerHTML="";
                    return;
                  }
                  if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp=new XMLHttpRequest();
                  } else {  // code for IE6, IE5
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                  }
                  xmlhttp.onreadystatechange=function() {
                    if (this.readyState===4 && this.status===200) {
                      document.getElementById("rssOutput10").innerHTML=
                              this.responseText;
                    }
                  }
                  xmlhttp.open("GET","get_rss.php?q="+str,true);
                  xmlhttp.send();
                }
                </script>
                <form>
                <select onchange="showRSS10(this.value)">
                <option value="">Select an RSS-feed:</option>
                <option value="Google">Google News</option>
                <option value="NBC">NBC News</option>
                </select>
                </form>
                <br>
                <div id="rssOutput10">RSS-feed will be listed here...</div>
                <!--new example-->
                <script>
                function getVote11(int) {
                  if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp=new XMLHttpRequest();
                  } else {  // code for IE6, IE5
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                  }
                  xmlhttp.onreadystatechange=function() {
                    if (this.readyState===4 && this.status===200) {
                      document.getElementById("poll11").innerHTML=this.responseText;
                    }
                  }
                  xmlhttp.open("GET","poll_vote.php?vote="+int,true);
                  xmlhttp.send();
                }
                </script>
                <div id="poll11">
                <h3>Do you like PHP and AJAX so far?</h3>
                <form>
                Yes:
                <input type="radio" name="vote" value="0" 
                       onclick="getVote11(this.value)">
                <br>
                No:
                <input type="radio" name="vote" value="1" 
                       onclick="getVote11(this.value)">
                </form>
                </div>
                <!--new example-->
            </div>
        </div>
        
        <!--Code verbose-->
        <div class="code">
        <pre class="code_">
        <code class="language-html">
            &lt!--Body content-->


        </code>
        </pre>
        </div>
    </div>      

    <!--Body picture-->
    <div class="background_image"></div>

    <!--Footer navigation--> 
    <div style="margin:15px 40px 15px 40px">
        <div class="footer_navigation_V-2">
            <ul> 
                <li id="prev" class="active"><a href="./014.php">« Previous</a></li>
                <li id="home" class="active"><a href="../index.html">HOME</a></li>
                <li id="next" class="active"><a href="./016.php">Next »</a></li>
            </ul>
        </div>
    </div> 
</body>
</html>