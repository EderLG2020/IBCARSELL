<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to CodeIgniter 4!</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>

    <!-- STYLES -->

    <style {csp-style-nonce}>
        * {
            transition: background-color 300ms ease, color 300ms ease;
        }
        *:focus {
            background-color: rgba(221, 72, 20, .2);
            outline: none;
        }
        html, body {
            color: rgba(33, 37, 41, 1);
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
            font-size: 16px;
            margin: 0;
            padding: 0;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            text-rendering: optimizeLegibility;
        }
        header {
            background-color: rgba(247, 248, 249, 1);
            padding: .4rem 0 0;
        }
        .menu {
            padding: .4rem 2rem;
        }
        .titulo{
            text-align:center;
        }
        header ul {
            border-bottom: 1px solid rgba(242, 242, 242, 1);
            list-style-type: none;
            margin: 0;
            overflow: hidden;
            padding: 0;
            text-align: right;
        }
        header li {
            display: inline-block;
        }
        header li a {
            border-radius: 5px;
            color: rgba(0, 0, 0, .5);
            display: block;
            height: 44px;
            text-decoration: none;
        }
        header li.menu-item a {
            border-radius: 5px;
            margin: 5px 0;
            height: 38px;
            line-height: 36px;
            padding: .4rem .65rem;
            text-align: center;
        }
        
        header .logo {
            float: left;
            height: 44px;
            padding: .4rem .5rem;
        }
        header .menu-toggle {
            display: none;
            float: right;
            font-size: 2rem;
            font-weight: bold;
        }
        header .menu-toggle button {
            background-color: rgba(221, 72, 20, .6);
            border: none;
            border-radius: 3px;
            color: rgba(255, 255, 255, 1);
            cursor: pointer;
            font: inherit;
            font-size: 1.3rem;
            height: 36px;
            padding: 0;
            margin: 11px 0;
            overflow: visible;
            width: 40px;
        }
        header .menu-toggle button:hover,
        header .menu-toggle button:focus {
            background-color: rgba(221, 72, 20, .8);
            color: rgba(255, 255, 255, .8);
        }
        header .heroe {
            margin: 0 auto;
            max-width: 1100px;
            padding: 1rem 1.75rem 1.75rem 1.75rem;
        }
        header .heroe h1 {
            font-size: 2.5rem;
            font-weight: 500;
        }
        header .heroe h2 {
            font-size: 1.5rem;
            font-weight: 300;
        }
        section {
            margin: 0 auto;
            max-width: 1100px;
            padding: 2.5rem 1.75rem 3.5rem 1.75rem;
        }
        section h1 {
            margin-bottom: 2.5rem;
        }
        section h2 {
            font-size: 120%;
            line-height: 2.5rem;
            padding-top: 1.5rem;
        }
        section pre {
            background-color: rgba(247, 248, 249, 1);
            border: 1px solid rgba(242, 242, 242, 1);
            display: block;
            font-size: .9rem;
            margin: 2rem 0;
            padding: 1rem 1.5rem;
            white-space: pre-wrap;
            word-break: break-all;
        }
        section code {
            display: block;
        }
        section a {
            color: rgba(221, 72, 20, 1);
        }
        section svg {
            margin-bottom: -5px;
            margin-right: 5px;
            width: 25px;
        }
        .further {
            background-color: rgba(247, 248, 249, 1);
            border-bottom: 1px solid rgba(242, 242, 242, 1);
            border-top: 1px solid rgba(242, 242, 242, 1);
        }
        .further h2:first-of-type {
            padding-top: 0;
        }
        footer {
            background-color: rgba(221, 72, 20, .8);
            text-align: center;
        }
        footer .environment {
            color: rgba(255, 255, 255, 1);
            padding: 2rem 1.75rem;
        }
        footer .copyrights {
            background-color: rgba(62, 62, 62, 1);
            color: rgba(200, 200, 200, 1);
            padding: .25rem 1.75rem;
        }
        @media (max-width: 629px) {
            header ul {
                padding: 0;
            }
            header .menu-toggle {
                padding: 0 1rem;
            }
            header .menu-item {
                background-color: rgba(244, 245, 246, 1);
                border-top: 1px solid rgba(242, 242, 242, 1);
                margin: 0 15px;
                width: calc(100% - 30px);
            }
            header .menu-toggle {
                display: block;
            }
            header .hidden {
                display: none;
            }
            header li.menu-item a {
                background-color: rgba(221, 72, 20, .1);
            }
            header li.menu-item a:hover,
            header li.menu-item a:focus {
                background-color: rgba(221, 72, 20, .7);
                color: rgba(255, 255, 255, .8);
            }
        }
    </style>
</head>
<body>

<!-- HEADER: MENU + HEROE SECTION -->
<header>

    <div class="menu">
        <ul>
            <li class="logo">
                <a href="https://codeigniter.com" target="_blank">
                <svg width="209" height="60" viewBox="0 0 209 60" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<g filter="url(#filter0_d_414_7)">
<rect width="180" height="52" fill="url(#pattern0)" shape-rendering="crispEdges"/>
</g>
<defs>
<filter id="filter0_d_414_7" x="0" y="0" width="209" height="60" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="26" dy="5"/>
<feGaussianBlur stdDeviation="1.5"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.3 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_414_7"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_414_7" result="shape"/>
</filter>
<pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
<use xlink:href="#image0_414_7" transform="translate(0 -0.0452106) scale(0.00211416 0.00731826)"/>
</pattern>
<image id="image0_414_7" width="473" height="149" xlink:href="data:image/png;base64,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"/>
</defs>
</svg>


                </a>
            </li>
            <!-- <li class="menu-toggle">
                <button onclick="toggleMenu();">&#9776;</button>
            </li> -->
            <li class="titulo">IBCARSELL</li>
            <!-- <li class="menu-item hidden"><a href="https://codeigniter4.github.io/userguide/" target="_blank">sa</a> -->
            </li>
            <li class="menu-item hidden"><a href="https://forum.codeigniter.com/" target="_blank">Registrate</a></li>
            <li class="menu-item hidden"><a
                    href="https://github.com/codeigniter4/CodeIgniter4/blob/develop/CONTRIBUTING.md" target="_blank">Ingresar</a>
            </li>
        </ul>
    </div>

</header>

<!-- CONTENT -->

<section>

    

</section>



<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->

<footer>
    <!-- <div class="environment">

        <p>Page rendered in {elapsed_time} seconds</p>

        <p>Environment: <?= ENVIRONMENT ?></p>

    </div>

    <div class="copyrights">

        <p>&copy; <?= date('Y') ?> CodeIgniter Foundation. CodeIgniter is open source project released under the MIT
            open source licence.</p>

    </div> -->

</footer>

<!-- SCRIPTS -->

<script>
    function toggleMenu() {
        var menuItems = document.getElementsByClassName('menu-item');
        for (var i = 0; i < menuItems.length; i++) {
            var menuItem = menuItems[i];
            menuItem.classList.toggle("hidden");
        }
    }
</script>

<!-- -->

</body>
</html>
