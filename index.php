<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Your Mom Goes To College!</title>
    <style>
        body {
            display: table;
            height: 100vh;
            width: 100%;
            font-family: Helvetica Neue, Helvetica, "Segoe UI", Arial, sans-serif;
            color: #fff;
            text-align: center;
            background: #111;
        }
        .main { display: table-cell; vertical-align: middle }
        a, a:hover { text-decoration: none; color: #ff4e74; }
        #copyright {
            position: absolute;
            bottom: 1rem;
            right: 1rem;
            font-size: 0.8rem;
            color: #666;
        }
        h1 {
            font-family: "HelveticaNeue-CondensedBold", "HelveticaNeueBoldCondensed", "HelveticaNeue-Bold-Condensed", "Helvetica Neue Bold Condensed", "HelveticaNeueBold", "HelveticaNeue-Bold", "Helvetica Neue Bold", "HelveticaNeue", "Helvetica Neue", 'TeXGyreHerosCnBold', "Helvetica", "Impact", "Tahoma", "Geneva", "Arial Narrow", "Arial", sans-serif;
            font-weight: 600;
            font-stretch: condensed;
            color: #FFB23F;
            text-transform: uppercase;
            margin: 2rem 0;
            font-size: 3rem;
        }
        @media screen and (max-width: 40em){
            h1 {
                font-size: 2rem;
            }
            iframe {
                max-width: 100% !important;
                width: auto !important;
                height: auto !important;
            }
        }
    </style>
</head>
<body>
<div class="main">
    <h1>Your Mom Goes To College!</h1>
<?php
    $gifs = [
        '<iframe src="//giphy.com/embed/Ys2oOKQgBzcLS" width="480" height="360" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="http://giphy.com/gifs/stuff-kip-Ys2oOKQgBzcLS">via GIPHY</a></p>',
        '<iframe src="//giphy.com/embed/yzBAE6wXsXs4g" width="480" height="182" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="http://giphy.com/gifs/napoleon-dynamite-kip-yzBAE6wXsXs4g">via GIPHY</a></p>',
        '<iframe src="//giphy.com/embed/l7Ky808S5hA5O" width="480" height="380" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="http://giphy.com/gifs/l7Ky808S5hA5O">via GIPHY</a></p>',
        '<iframe src="//giphy.com/embed/llKJGxQ1ESmac" width="480" height="360" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="http://giphy.com/gifs/computer-nerd-typing-llKJGxQ1ESmac">via GIPHY</a></p>',
        '<iframe src="//giphy.com/embed/nYL2SVGoXD3qM" width="480" height="261" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="http://giphy.com/gifs/computer-kip-chrisrushing-nYL2SVGoXD3qM">via GIPHY</a></p>',
        '<iframe src="//giphy.com/embed/K4ZpbvnkgWKdO" width="480" height="189" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="http://giphy.com/gifs/napoleon-dynamite-yesss-K4ZpbvnkgWKdO">via GIPHY</a></p>',
        '<iframe src="//giphy.com/embed/RmWrAFLqhUtdm" width="480" height="270" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="http://giphy.com/gifs/reactiongifs-RmWrAFLqhUtdm">via GIPHY</a></p>',
        '<iframe src="//giphy.com/embed/vSYdtjXIyrcs" width="480" height="331" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="http://giphy.com/gifs/napoleon-dynamite-dancing-vSYdtjXIyrcs">via GIPHY</a></p>',
        '<iframe src="//giphy.com/embed/xfcmsyQCyulGg" width="480" height="234" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="http://giphy.com/gifs/film-true-love-nap-xfcmsyQCyulGg">via GIPHY</a></p>',
        '<iframe src="//giphy.com/embed/KWfhruKxPtQPK" width="480" height="256" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="http://giphy.com/gifs/KWfhruKxPtQPK">via GIPHY</a></p>',
        '<iframe src="//giphy.com/embed/QoesEe6tCbLyw" width="480" height="258" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="http://giphy.com/gifs/goodbye-napoleon-dynamite-peace-out-QoesEe6tCbLyw">via GIPHY</a></p>',
        '<iframe src="//giphy.com/embed/c4t11obaChpu0" width="480" height="192" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="http://giphy.com/gifs/upset-slapping-c4t11obaChpu0">via GIPHY</a></p>',
        '<iframe src="//giphy.com/embed/qr8FoUcrISr7O" width="480" height="218" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="http://giphy.com/gifs/napoleon-dynamite-best-movie-kip-qr8FoUcrISr7O">via GIPHY</a></p>'
    ];
    echo $gifs[array_rand($gifs)]; ?>
</div><div id="copyright">For shits and giggles. <a href="http://karolbrennan.com">KB.com</a></div>
</body>
</html>