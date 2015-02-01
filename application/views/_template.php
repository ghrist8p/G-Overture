<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        
        <link rel="stylesheet" 
              type="text/css" 
              href="assets/css/style.css" />
              
        <link rel="icon" 
              type="image/png"
              href="assets/img/fav.png" />
              
        <title>{title}</title>
    </head>
    <body>
        <div id="header">
            <div id="login">
                {login}
            </div>
            
            <img id="banner"
                 src="assets/img/banner.png"
                 alt="Welcome" />
                 
            <div id="navbar">
                <ul>
                    <li><a href="/">
                        Home
                    </a></li>
                    
                    <li><a href="/projects">
                        Projects
                    </a></li>
                    
                    <li><a href="/messages">
                        Messages
                    </a></li>
                    
                    <li><a href="/meetings">
                        Meetings
                    </a></li>
                    
                    <li><a href="/blog">
                        Blog
                    </a></li>
                </ul>
            </div>
        </div>
        <div id="content">
            {content}
        </div>
        <div id="footer">
        </div>
    </body>
</html>
