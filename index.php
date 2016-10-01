<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="true" name="handheldfriendly">
    <meta content="320" name="mobileoptimized">
    <style>
    @font-face{font-family:'Fredo';src:url("fonts/fredo-regular-webfont.woff2") format("woff2"),url("fonts/fredo-regular-webfont.woff") format("woff");font-weight:400;font-style:normal}html{height:100%;font-size:100%;font-size:calc(1rem + .5vw);-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;-moz-osx-font-smoothing:grayscale;-webkit-font-smoothing:antialiased;font-smoothing:antialiased;overflow-y:scroll;box-sizing:border-box}*,*:before,*:after{box-sizing:inherit;padding:0;margin:0}svg{max-height:100%}svg:not(:root){overflow:hidden}::-moz-selection,::-moz-selection{background:#111}::-moz-selection,::selection{background:#111}body{position:relative;font-family:"Fredo",sans-serif;font-size:1rem;font-weight:400;line-height:1.5;background:#fff;color:#111;padding:0 1rem;max-width:50rem;margin:0 auto}a:not(.btn){color:#111;text-decoration:none}p>a{background-image:-webkit-linear-gradient(transparent,transparent 93.75%,#111 93.75%);background-image:linear-gradient(transparent,transparent 93.75%,#111 93.75%)}a:not(.btn):hover,a:not(.btn):focus{background-image:-webkit-linear-gradient(transparent,transparent 87.5%,#111 87.5%);background-image:linear-gradient(transparent,transparent 87.5%,#111 87.5%)}h1,h2,h3,h4,h5,h6{font-weight:400;margin-top:2em;margin-bottom:.5em;max-width:28rem}h1{font-size:2rem}h2{font-size:1.5rem}h3{font-size:1rem}p,ul{list-style:none;margin-top:1em;margin-bottom:1em;max-width:25rem}hr{border:0;border-bottom:6px solid #111;max-width:5rem;margin:1rem 0 4rem}mark{background:yellow}section,article{display:block;padding-top:30vh;padding-bottom:20vh}header{position:absolute;top:10vh;left:1rem;z-index:2}.icon{width:1rem;height:1rem}.h1{font-size:2rem}.h2{font-size:1.5rem}.h3{font-size:1.25rem}.h4{font-size:1rem}.h5{font-size:.875rem}.h6{font-size:.75rem}.mb0{margin-bottom:0}.mt0{margin-top:0}.mr1{margin-right:1rem}.mr05{margin-right:.25rem}.mb4{margin-bottom:4rem}.caps{text-transform:uppercase;letter-spacing:.2em}main>*{display:none;opacity:0;-webkit-animation:fadeIn 1s 0.75s forwards cubic-bezier(0.23,1,0.32,1);animation:fadeIn 1s 0.75s forwards cubic-bezier(0.23,1,0.32,1)}main>*:last-child{display:block}main>*:target{display:block}main>*:target ~ *{display:none}@-webkit-keyframes fadeIn{to{opacity:1}}@keyframes fadeIn{to{opacity:1}}.flick{position:fixed;top:0;left:0;z-index:3;width:0%;height:100%;background:#111}.flick-on{-webkit-animation:stretch 1s alternate cubic-bezier(0.23,1,0.32,1);animation:stretch 1s alternate cubic-bezier(0.23,1,0.32,1)}@-webkit-keyframes stretch{0%,100%{width:0%}50%{width:100%}}@keyframes stretch{0%,100%{width:0%}50%{width:100%}}
    </style>
    <title>Stack Developer | Rizvi Iqubal</title>
    <meta content="rizviiqubal" name="title">
    <meta content="Stack Developer | Rizvi Iqubal" name=
    "description">
    <meta content="Rizvi" property="og:title">
    <meta content="Stack Developer | Rizvi Iqubal" property=
    "og:description">
    <meta content="website" property="og:type">
    <meta content="http://www.rizvi.online.com" property="og:url">
    <meta content="Rizvi" property="og:site_name">
    <!-- <link href="http://syndicatefx.com/img/favicon.ico" rel="shortcut icon">
    <link href="http://syndicatefx.com/img/apple-touch-icon.png" rel=
    "apple-touch-icon">-->
</head>
<body>
    <header role="banner">
        <nav class="h4" role="navigation">
            <a class="js-fx" href="#home" title="home">Rizvi</a> &bull;
            <a class="js-fx" href="#projects" title="projects">Projects</a>
        </nav>
    </header>
    <main role="main">
        <section id="projects">
            <h2 class="h4 caps">Personal Projects<br>
            &amp; Experiments</h2>
            <hr>
            <ul>
                <li>
                    <h3 class="h2 mb0"><a href="https://chrome.google.com/webstore/detail/grabtext/pmkkkpcojlkfgkgoiilkgfkeaiaocehb"
                    target="_blank"><svg class="icon mr05" viewbox="0 0 32 32">
                    <path d=
                    "M14 9 L3 9 3 29 23 29 23 18 M18 4 L28 4 28 14 M28 4 L14 18">
                  </path></svg>Chrome App Grab Text</a></h3>
                    <p class="mt0">GrabText V 0.1 is a Free Chrome App to Grab the Text to your phone.</p>
                </li>
            </ul>
        </section>
        <section id="home">
            <h2>Know me!</h2>
            <hr>
            <ul>
                <li>
                    <a class="h3" href="https://twitter.com/rizviqubal"
                    target="_blank" title="Twitter">twitter</a>
                </li>
                <li>
                    <a class="h3" href="https://www.linkedin.com/in/rizviiqubal"
                    target="_blank" title="LinkedIn">LinkedIn</a>
                </li>
                <li>
                    <a class="h3" href="https://github.com/rizviiqubal" target=
                    "_blank" title="Github">github</a>
                </li>
            </ul>
        </section>
    </main>
    <div class="flick"></div>
    <script>
    var links = document.querySelectorAll(".js-fx");var panel = document.querySelector(".flick");function flickOff() {panel.classList.remove("flick-on");};for(var i = 0; i < links.length; i++){links[i].addEventListener("click",function(){panel.classList.add("flick-on");setTimeout(flickOff,1000)});}
    </script>
</body>
</html>
