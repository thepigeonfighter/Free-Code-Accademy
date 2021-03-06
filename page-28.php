<?php /*Template Name: PersonalPortfolioPage*/ 
 ?>

<html>

<style>
    :root {
        --main-bg: #e7e2b0;
        --navbar-bg: #bdba879c;
        --projects-bg: #aabcbf;
        --light-accent: rgba(255, 255, 255, 0.548);
        font-family: 'Raleway', sans-serif;
        text-align: center;
    }

    body {
        background: var(--main-bg);
    }

    #navbar {
        position: fixed;
        background: var(--navbar-bg);
        width: 100%;
        left: 0px;
        top: 0px;
    }

    #welcome-section {
        margin-top: 40vh;
        height: 100vh;
        justify-content: center;

    }

    #navbar ul {
        text-align: right;
        list-style: none;


    }

    .project-tile {
        background: var(--main-bg);
        padding: 5%;

        border-radius: 10px;
        display: grid;
        grid-row-gap: 2%;
        grid-template-rows: 1fr 3fr 2fr;

    }

    .project-description {
        background: var(--light-accent);
        border-radius: 10px;
        padding: 2% 6%;

    }

    #navbar ul li {
        padding: 1%;
        display: inline-block;
    }

    #projects {

        text-align: center;
        background: var(--light-accent);
        padding: 2%;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        grid-column-gap: 3%;
        grid-template-areas:
            "header header header"
            "project project1 project2"

    }

    #contact-me {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        grid-template-rows: 1fr 3fr;
        grid-template-areas:
            "header header header"
    }

    #contact-me-header {
        grid-area: header;
        height: 10vh;
        font-size: 5vh;
    }

    #projects-header {
        grid-area: header;
        height: 10vh;
        font-size: 5vh;
    }

    .project-name {
        background: var(--navbar-bg);
        justify-self: stretch;
        padding: 10%;
        border-radius: 10px;
    }

    .project-image {
        justify-self: center;
        border-radius: 10px;
        width: 25vw;
    }

    a {
        color: #7c82ddce;
    }

    .contactCard {

        display: grid;
        grid-template-rows: 1fr 1fr;
        border-radius: 50%;
    }

    @media only screen and (max-width: 800px) {
        #projects {
            grid-template-columns: 1fr;
            grid-row-gap: 2%;
            grid-template-areas:
                "header"
                "project"
                "project1"
                "project2"


        }

        .project-image {
            width: 75vw;
        }
            .project-tile {
        grid-template-rows: 1fr 2fr 2fr;

    }
        #contact-me-header {
            margin: 40% 0%;
        grid-area: header;
        height: 10vh;
        font-size: 5vh;
    }

    }
        @media only screen and (orientation:portrait)
    {
                #projects {
            grid-template-columns: 1fr;
            grid-row-gap: 2%;
            grid-template-areas:
                "header"
                "project"
                "project1"
                "project2"


        }

        .project-image {
            width: 75vw;
        }
            .project-tile {
        grid-template-rows: 1fr 2fr 2fr;

    }
        #contact-me-header {
            margin: 40% 0%;
        grid-area: header;
        height: 10vh;
        font-size: 5vh;
    }

    }
</style>
<nav id="navbar">

    <ul>
        <li>
            <a href="#welcome-section">About Me</a>
        </li>
        <li>
            <a href="#projects">Projects</a>
        </li>
        <li>
            <a href="#contact-me">Contact Me</a>
        </li>
    </ul>
</nav>

<body>
    <div id="welcome-section">
        <h1>
            Hi there,
            My Name is George
        </h1>
        <h2>I am a .NET developer</h2>
    </div>



    <section id="projects">
        <h1 id="projects-header">Past Projects</h1>
        <div class="project-tile">
            <h2 class="project-name">Connect Four</h2>

            <a href="https://github.com/thepigeonfighter/Connect-Four" target="blank">
                <img class="project-image" src="https://georgefabish.com/wp-content/uploads/2019/01/Untitled.png" href="https://github.com/thepigeonfighter/Connect-Four"
                    alt="A picture of a connect four board" /></a>
            <div class="project-description">
                <p>
                    I created a connect four game with using AI in mind.
                    The design of the game is meant to make it as simple as possible
                    to design your own AI and attach it to the system. In order for your
                    AI to work it only requires that you fulfil three methods from a single interface.
                    The actual details of how you implement your AI is totally up to you. Maintaining a loosely
                    coupled connection to the system. A guide to creating your own AI can be found
                    <a href="https://github.com/thepigeonfighter/Connect-Four/blob/master/README.md" target="blank">here</a>

                </p>
            </div>

        </div>
        <div class="project-tile">
            <h2 class="project-name">Automated Wallpapers</h2>

            <a href="https://github.com/thepigeonfighter/Automated-Desktop" target="blank">
                <img class="project-image" src="https://georgefabish.com/wp-content/uploads/2019/01/Untitled-2.png"
                    href="https://github.com/thepigeonfighter/Connect-Four" alt="A picture of the Automated Desktop GUI" /></a>
            <div class="project-description">
                <p>
                    This project took about 3 months to compelete. The program essientially allows you to enter
                    anything that you are interested in to the program. From there you can download collections
                    of photos associated with that interest. It allows you to start updating your desktop wallpaper
                    with those
                    downloaded images. The settings also allow for choosing how often your collections of images update
                    as well as
                    how often your background updates. For a full list of features check out this
                    <a href="https://github.com/thepigeonfighter/Automated-Desktop/blob/master/Docs/FeaturesList.png">page</a>.
                    Download the latest release <a href="https://georgefabish.com/wp-content/uploads/2019/01/AutomatedDesktop_zip.zip">
                        here.</a>

                </p>
            </div>

        </div>
        <div class="project-tile">
            <h2 class="project-name">Smaller Projects</h2>

            <img class="project-image" src="https://georgefabish.com/wp-content/uploads/2019/01/projects.png" alt="image of various projects" />
            <div class="project-description">
                <p>
                    I have continued my learning journey by completed various tutorials and small projects. Have
                    developed some rudimentary
                    webpages and games to test out and cement newly acquired knowledge.If you would like to learn more
                    about what I am currently
                    working on drop me an email below.


                </p>
            </div>

        </div>

    </section>
    <section id="contact-me">
        <h1 id="contact-me-header">Find Me</h1>
        <div class="contact-card">
            <a id='profile-link' href="https://github.com/thepigeonfighter/" target="blank">
                <img height="100" src="https://github.githubassets.com/images/modules/logos_page/GitHub-Mark.png" alt="github link" />
            </a>
            <h3>GitHub</h3>
        </div>
        <div class="contact-card">
            <a href="https://www.codewars.com/users/thepigeonfighter" target="blank">
                <img height="100" src="http://www.softlab.ntua.gr/~nickie/images/logo/codewars.png" alt="codewars link" />
            </a>
            <h3>CodeWars</h3>
        </div>
        <div class="contact-card">
            <a href="https://stackoverflow.com/users/10773493/george-fabish" target="blank">
                <img height="100" src="https://cdn.sstatic.net/Sites/stackoverflow/company/img/logos/so/so-icon.svg?v=f13ebeedfa9e"
                    alt="stack overflow link" />
            </a>
            <h3>Stack Overflow</h3>
        </div>
    </section>




</body>

<footer>This portfolio was completed for a project from <a href="https://www.freecodecamp.org/" target="_blank">Free Code Camp</a> </footer>
</html>

<?php
get_footer();