<html>
<head>
    <title>Rock Paper Scissors</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="stage" id="stage">
        <h1>Rock Paper Scissors!</h1>
        <h2>Choose your fighter!</h2>
        <input type="button" id="rock" />
        <input type="button" id="paper" />
        <input type="button" id="scissors" />
        <p id="output"></p>
    </div>
</body>

<script>

    let buttonPushed = "";
    let playerHand;
    let robotHand;
    let winCount = 0;
    let loseCount = 0;
    let tieCount = 0;
    let gamesPlayed = 0;
    
    document.getElementById("rock").addEventListener("click", rockHandler);
    document.getElementById("paper").addEventListener("click", paperHandler);
    document.getElementById("scissors").addEventListener("click", scissorsHandler);

    function playGame() {
        gamesPlayed++;
        randomNumber = Math.floor(Math.random() * 3);
        switch(randomNumber) {
            
            case 0: 
                robotHand = "Rock";
                break;
            
            case 1: 
                robotHand = "Paper";
                break;
            
            case 2: 
                robotHand = "Scissors";
                break;
        }

        if ((robotHand === "Rock" && playerHand === "Rock") || (robotHand === "Paper" && playerHand === "Paper") || (robotHand === "Scissors" && playerHand === "Scissors")) {
            tieCount++;
            output.innerHTML 
             = "Your hand: " + playerHand
             + "<br>Robot's hand: " + robotHand
             + "<br>It's a tie! Play again.";
        } else if (robotHand === "Rock") {
            if (playerHand === "Paper") {
                output.innerHTML 
                = "Your hand: " + playerHand
                + "<br>Robot's hand: " + robotHand
                + "<br>Paper covers rock! You win.";
                winCount++;
            } else {
                output.innerHTML 
                = "Your hand: " + playerHand
                + "<br>Robot's hand: " + robotHand
                + "<br>Rock smashes scissors! You lose.";
                loseCount++;
            }
        } else if (robotHand == "Paper") {
            if (playerHand === "Rock") {
                output.innerHTML 
                = "Your hand: " + playerHand
                + "<br>Robot's hand: " + robotHand
                + "<br>Paper covers rock! You lose.";
                loseCount++;
            } else {
                output.innerHTML 
                = "Your hand: " + playerHand
                + "<br>Robot's hand: " + robotHand
                + "<br>Paper cuts scissors! You win.";
                winCount++;

            }
        } else {
            if (playerHand === "Rock") {
                output.innerHTML 
                = "Your hand: " + playerHand
                + "<br>Robot's hand: " + robotHand
                + "<br>Rock smashes scissors! You win.";
                winCount++;
            } else {
                output.innerHTML 
                = "Your hand: " + playerHand
                + "<br>Robot's hand: " + robotHand
                + "<br>Scissors cut paper! You lose.";
                loseCount++;
            }
        }

        output.innerHTML 
         += "<br>Games played: " + gamesPlayed + " | " 
         + "Won: " + winCount + " | " 
         + "Lost: " + loseCount + " | " 
         + "Tied: " + tieCount;
        
    }

    function rockHandler() {
        buttonPushed = "Rock";
        playerHand = buttonPushed;
        buttonPushed = "";
        playGame();
    }

    function paperHandler() {
        buttonPushed = "Paper";
        playerHand = buttonPushed;
        buttonPushed = "";
        playGame();
    }

    function scissorsHandler() {
        buttonPushed = "Scissors";
        playerHand = buttonPushed;
        buttonPushed = "";
        playGame();
    }
</script>
