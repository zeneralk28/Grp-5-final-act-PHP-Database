
<?php
// Prevent caching
header('Expires: Thu, 1 Jan 1970 00:00:00 GMT');
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Cache-Control: post-check=0, pre-check=0', false);
header('Pragma: no-cache');

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Website</title>
    <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">


    <!--font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>


<body>

    <header class="header">
        <a href="#" class="logo">Group 5</a>

        <div class="greeting">
            <?php include 'greeting.php'; ?>
        </div>

        <!-- <span ="toggle-button">Dark Mode</span> -->
        <button id="toggle-button">Dark Mode</button>

        <nav class="navbar">
            <a href="#anaya">Anaya</a>
            <a href="#adam">Adam</a>
            <a href="#delantar">Delantar</a>
            <a href="#masuela">Masuela</a>
            <a href="#yulip">Yulip</a>
        </nav>
    </header>

    <section class="home" id="anaya">
        <div class="home-img">
            <img src="img/mic.png" alt="">
        </div>
        <div class="home-content">
            <h1>Hi, It's <span>Micah</span></h1>
            <h3 class="typing-text">I'm a <span>programming student</span></h3>
            <p>I'm Micah, the leader of our group, and I love coding! Solving problems with code helps me sharpen my critical thinking skills. I'm really into web development, game development, and cybersecurity. When I'm not coding, you can find me gaming, drawing, painting, or reading. These hobbies let me relax and tap into my creative side. I'm always up for learning new things that challenge me to think in different ways. If you’re into tech or just want to chat, feel free to reach out!</p>
            
            <div class="social-icon">
                <a href="https://www.linkedin.com/in/micah-kristine-anaya-b68874244/"><i class="fa-brands fa-linkedin"></i></a>
                <a href="https://github.com/mccvliqht"><i class="fa-brands fa-github"></i></a>
                <a href="https://www.facebook.com/micah.anaya.7/"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
            </div>
        </div>
    </section>
        <section class="info" id="info">
            <h2 class="heading">Additional Information</h2>

            <div class="info-container">
                <div class="info-box">
                    <div class="info">
                        <h4>Double Scholarship</h4>
                        <P>Thanks to my hometown, San Pedro, Laguna, I’m supported by not just one, but two scholarships throughout my college journey. I’m grateful for this opportunity to pursue my academic goals with such valuable support.</P>
                    </div>
                </div>

                <div class="info-box">
                    <div class="info">
                        <h4>Commited Student</h4>
                        <P>Aside from being a Dean’s Lister, I’m also a member of our university organization, the CITCS Cross-Devs Society. This organization brings together students eager to gain more knowledge and experience in computer studies. </P>
                    </div>
                </div>

                <div class="info-box">
                    <div class="info">
                        <h4>Introverted Person</h4>
                        <P>My introverted nature allows me to work independently and find energy in quiet moments. While I enjoy spending time alone, I am also capable of engaging with others and building connections when necessary. </P>
                    </div>
                </div>
            </div>
        </section>
    
    <br>
    <section class="home" id="adam">
        <div class="home-img">
            <img src="img/adam.jpg" alt="">
        </div>
        <div class="home-content">
            <h1>Hi, my name is <span>Adam</span></h1>
            <h3 class="typing-text">I'm an <span>IT student</span></h3>
            <p>I'm a third-year IT student who is passionate about learning new things and skills.
                Developing those for a greater purpose. I also love to play games and watch movies to entertain
                myself. </p>

            <div class="social-icon">
                <a target="_blank" href="https://www.linkedin.com/in/michael-adam-b6b693218/"><i class="fa-brands fa-linkedin"></i></a>
                <a target="_blank" href="https://github.com/FilandreAdam"><i class="fa-brands fa-github"></i></a>
                <a target="_blank" href="https://www.facebook.com/michael.adam.750983/"><i class="fa-brands fa-facebook"></i></a>
                <a target="_blank" href="https://www.instagram.com/mchl_admm/"><i class="fa-brands fa-instagram"></i></a>
            </div>
        </div>
    </section>

    <section class="info" id="info">
        <h2 class="heading">Additional Information</h2>

        <div class="info-container">
            <div class="info-box">
                <div class="info">
                    <h4>CONTACT INFO</h4>
                    <P>PHONE NO#: 09983546490 <br>ADDRESS: Southville 3 Poblacion
                        Muntinlupa City.
                    </P>
                </div>
            </div>

            <div class="info-box">
                <div class="info">
                    <h4>HOBBIES </h4>
                    <P>VIDEO GAMES, WATCHING MOVIES, WORKING OUT</P>
                </div>
            </div>

            <div class="info-box">
                <div class="info">
                    <h4>WORK EXPERIENCE</h4>
                    <P>LAZADA:Warehouse Crew <br> JOLLIBEE: Service Crew</P>
                </div>
            </div>

        </div>
    </section>

    <section class="home" id="delantar">
        <div class="home-img">
            <img src="img/img3.jpg" alt="">
        </div>
        <div class="home-content">
            <h1>Hi, It's me <span>Delantar</span></h1>
            <h3 class="typing-text">I'm a <span>Working Student</span></h3>
            <p>I'm Jennifer Delantar a 3rd third-year Student, under BS in Information Technoloy from PLMUN. Although my coding skills are still lacking, I'm making every effort to improve my knowledges. Additionally, even though im a working student, I enjoy playing online games and watching movies in my leisure time :D .

            </p>

            <div class="social-icon">
                <a href="https://www.linkedin.com/in/jennifer-delantar-5479222b8/"><i class="fa-brands fa-linkedin"></i></a>
                <a href="https://github.com/jenniferdelantar"><i class="fa-brands fa-github"></i></a>
                <a href="https://web.facebook.com/jeng.jld"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
            </div>
        </div>
    </section>
    <section class="info" id="info">
        <h2 class="heading">Additional Information</h2>

        <div class="info-container">
            <div class="info-box">
                <div class="info">
                    <h4>CONTACT INFO</h4>
                    <P>PHONE NUMBER:<br> 09157047681 <br>
                        PERSONAL GMAIL: Jendelantar3@gmail.com
                        INSTITUTIONAL EMAIL: delantarjennifer_bsit@plmun.edu.ph
                    </P>
                </div>
            </div>

            <div class="info-box">
                <div class="info">
                    <h4>ADDRESS</h4>
                    <P>I live in Biazon rd. Poblacion Muntinlupa City</P>
                </div>
            </div>

            <div class="info-box">
                <div class="info">
                    <h4>WORKING EXPERIENCE</h4>
                    <P>I work during our online week and on days when there are no classes,
                        I still engage in my online class, but occasionally I am unable to respond to questions, especially if recess time po nila.</P>
                </div>
            </div>

            
        </div>
    </section>

    <br>
    <section class="home" id="masuela">
        <div class="home-img">
            <img src="img/masuela.jpg" alt="Picture of Glen">
        </div>
        <div class="home-content">
            <h1>Hi, It's <span>Glen</span></h1>
            <h3 class="typing-text">I'm an <span>Aspiring Programmer</span></h3>
            <p>     I am currently pursuing my degree in Bachelor of Science in Information Technology and in my free time, I like to study to further improve my knowledges and skills in programming. I also like comics and lifting to improve my overall health and entertain myself.</p>

            <div class="social-icon">
                <a href="https://www.linkedin.com/in/klarenz-glen-masuela-392496278/"><i class="fa-brands fa-linkedin"></i></a>
                <a href="https://github.com/zeneralk28"><i class="fa-brands fa-github"></i></a>
                <a href="https://www.facebook.com/glenie.28/"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://www.instagram.com/klrnzglnm/"><i class="fa-brands fa-instagram"></i></a>
            </div>
        </div>
    </section>

    <section class="info" id="info">
        <h2 class="heading">Additional Information</h2>

        <div class="info-container">
            <div class="info-box">
                <div class="info">
                    <h4>Consistent Lifter</h4>
                    <P>More than 1 year experiences in lifting</P>
                </div>
            </div>

            <div class="info-box">
                <div class="info">
                    <h4>Dedicated Student</h4>
                    <P>Second-year Dean lister</P>
                </div>
            </div>

            <div class="info-box">
                <div class="info">
                <h4>No Job Experience</h4>
                <P>No Prior proper Job experience until now</P>
                </div>
            </div>

            
        </div>
    </section>

    <br>
    <section class="home" id="yulip">
        <div class="home-img">
            <img src="img/yulip.jpg" alt="Picture of Arjay" id="yulip-pic">
        </div>
        <div class="home-content">
            <h1>Hi, It's <span>Arjay</span></h1>
            <h3 class="typing-text">I'm a <span>Dancer</span></h3>
            <p>     I'm a third-year information technology student who is enthusiastic about everything he does. I'm a tricky individual 
                who appears to know a lot yet has a short-term memory. I also perform well in other parts of life however, I cannot master any of them. 
                Despite all of this, It does not prevent me from doing what I enjoy: dancing.
            </p>

            <div class="social-icon">
                <a href="https://www.linkedin.com/in/arjay-yulip-m19300391/"><i class="fa-brands fa-linkedin"></i></a>
                <a href="https://github.com/haoisky"><i class="fa-brands fa-github"></i></a>
                <a href="https://www.facebook.com/yulipppp"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://www.instagram.com/haoiskoy"><i class="fa-brands fa-instagram"></i></a>
            </div>
        </div>
    </section>

    <section class="info" id="info">
        <h2 class="heading">Additional Information</h2>

        <div class="info-container">
            <div class="info-box">
                <div class="info">
                    <h4>! A Bookworm</h4>
                    <P>Although my imagination is pretty broad, I believe that it is ideal when we perceive things as they are supposed to be.  
                    I am not a fan of reading. So, you can say that I am a visual learner. 
                    </P>
                </div>
            </div>

            <div class="info-box">
                <div class="info">
                    <h4>Learning == Living</h4>
                    <P>Discovering something new has always been a cliche hobby of mine. The knowledge that I absorb every now and then fuels my day. 
                        It just feels so right to learn and to be educated, especially in this generation.
                    </P>
                </div>
            </div>

            <div class="info-box">
                <div class="info">
                    <h4>Industrios && Lazy</h4>
                    <P>At some point, I am still your typical student, and we all go through phases where we either do everything in one day or nothing at all.</P>
                </div>
            </div>
        </div>
    </section>


    <section class="message-section" id="message">
            <h2>Send Us a Message</h2>
            <form class="message-form" action="send_message.php" method="post" autocomplete="off">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required onkeyup="showSuggestion(this.value)">
                    <span id="suggestion">Suggestion: <p id="txtHint"></p></span>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="recipient">Recipient:</label>
                    <select id="recipient" name="recipient" required>
                        <option value="anaya">Anaya</option>
                        <option value="adam">Adam</option>
                        <option value="delantar">Delantar</option>
                        <option value="masuela">Masuela</option>
                        <option value="yulip">Yulip</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="8" required></textarea>
                </div>
                <button type="submit">Send Message</button>
            </form>
        </section>


    <script src="script.js"></script>
</body>
</html>