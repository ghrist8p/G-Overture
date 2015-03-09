<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        
        <link rel="stylesheet" 
              type="text/css" 
              href="/assets/css/style.css" />
              
        <link rel="icon" 
              type="image/png"
              href="/assets/img/fav.png" />
        
        <script type="text/javascript" src="/assets/js/jquery-1.11.2.min.js"></script>
        <script type="text/javascript" src="{additionalJavaScript}"></script>
              
        <title>{title}</title>
    </head>
    <body>
        <div id="header">
            <div id="login">
                {login}
            </div>
            
            <img id="banner"
                 src="/assets/img/banner.png"
                 alt="Welcome" />
                 
            {menubar}
        </div>
        <div id="content">
            {content}
        </div>
        <div id="footer">
        </div>
    </body>
</html>
