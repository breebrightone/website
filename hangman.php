<!doctype html>
<html>
    <head>
        <title>Hangman Game</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/hangman.css">
    </head>

    <body>
        <?php include('includes/header.php') ?>
        
        <main class="siteMain">
            <h2>Welcome to my hangman game</h2>
            
            <button id="playButton">PLAY</button>
            
            <div class="wordBox">
                <span class="wordBox--letter"></span>
                <span class="wordBox--letter"></span>
                <span class="wordBox--letter"></span>
                <span class="wordBox--letter"></span>
                <span class="wordBox--letter"></span>
            </div>
            
            <div class="guessBox">
                <label for="guess">Guess a letter:</label>
                <input type="text" id="guess">
            </div>
            
            <div class="hangman">
                <div class="gallows"></div>
                <div class="body">
                    <div id="head" class="body--head"></div>
                    <div id="leftArm" class="body--leftArm"></div>
                    <div id="rightArm" class="body--rightArm"></div>
                    <div id="torso" class="body--torso"></div>
                    <div id="leftLeg" class="body--leftLeg"></div>
                    <div id="rightLeg" class="body--rightLeg"></div>
                </div>
            </div>
            
            <div class="message">
                <p id="rightMessage" class="message--text">You are right</p>
                <p id="wrongMessage" class="message--text">You are wrong</p>
                <p id="winMessage" class="message--text">You won!</p>
                <p id="loseMessage" class="message--text">You lost</p>
            </div>
        </main>
        
        
        <script
          src="https://code.jquery.com/jquery-3.3.1.min.js"
          integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
          crossorigin="anonymous"></script>
          
        <script src="js/hang-man.js"></script>
    </body>
</html>
