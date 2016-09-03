<%-- 
    Document   : 3
    Created on : Aug 16, 2016, 10:32:05 AM
    Author     : benzro
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
    </head>
    <body>
        <h1>Hello World!</h1>
        <h1>What Can JavaScript Do?</h1>

        <p>JavaScript can change HTML attributes.</p>

        <p>In this case JavaScript changes the src (source) attribute of an image.</p>

        <button onclick="document.getElementById('myImage').src='./images/pic_bulbon.gif'">Turn on the light</button>

        <img id="myImage" src="./images/pic_bulboff.gif" style="width:100px">

        <button onclick="document.getElementById('myImage').src='./images/pic_bulboff.gif'">Turn off the light</button>

    </body>
</html>