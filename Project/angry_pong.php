<?php
require(__DIR__ . "/../partials/nav.php")
?>
<form onsubmit="return validate(this)" method="POST">
    <div>
        <label for="Sc">Submit Score</label>
        <input type="Scores" id="Sc" name="Scores" />
    </div>
    <input type="submit" value="Submit" />
</form>
<?php
$user =get_user_id(); 
$Scores = se($_POST, "Scores", "", false);
if($Scores != null){
$db = getDB();
$stmt = $db->prepare("INSERT INTO Scores (Scores, userID) VALUES(:Scores, :userID)");
$stmt->execute([":Scores" => $Scores, ":userID"=> $user]);
flash("Score Saved!", "success");
}
?>
<div>
    <h1 style="display: inline;">Angry Pong</h1>
    <div class="col"><span id="score" class="lead">Score: 0</span></div>
</div>
    <canvas tabindex="0" id="board" width="600px" height="600px" ></canvas>
    <script>
        //modified from http://jsfiddle.net/bencentra/q1s8gmqv/?utm_source=website&utm_medium=embed&utm_campaign=q1s8gmqv
       
        var canvas;
        var context;
        var loop;
        var leftPaddle;
        var rightPaddle;
        var ball;
        var paddleWidth = 25;
        var paddleHeight = 100;
        var ballSize = 10;
        var ballSpeed = 2;
        var paddleSpeed = 5;
        var drawables = [];
        // Key Codes
        var W = 87;
        var S = 83;
        var UP = 38;
        var DOWN = 40;
        var visibilityPercent = 0.6;

        // Keep track of pressed keys
        var keys = {
            W: false,
            S: false,
            UP: false,
            DOWN: false
        };

        // Keep track of the score
        var leftScore = 0;
        var rightScore = 0;
        function init() {
            canvas = document.getElementById("board");
            if (canvas.getContext) {
                context = canvas.getContext("2d");
                let offset = canvas.width*.05;
                leftPaddle = makeRect(offset, canvas.height / 2 - paddleHeight / 2, paddleWidth, paddleHeight, paddleSpeed, '#BC0000');
                rightPaddle = makeRect(canvas.width - paddleWidth - offset, canvas.height / 2 - paddleHeight / 2, paddleWidth, paddleHeight, paddleSpeed, '#0000BC');
                ball = makeRect(0, 0, ballSize, ballSize, ballSpeed, '#000000');
                drawables.push(leftPaddle);
                drawables.push(rightPaddle);
                drawables.push(ball);
                console.log("drawables", drawables);
                resetBall();
                attachKeyListeners();
                loop = window.setInterval(gameLoop, 16); //16ms
                canvas.focus();
            }
        }
        function resetBall() {
            ball.x = canvas.width / 2 - ball.w / 2;
            ball.y = canvas.height / 2 - ball.w / 2;
            // Modify the ball object to have two speed properties, one for X and one for Y
            ball.sX = ballSpeed;
            ball.sY = ballSpeed / 2;

            // Randomize initial direction
            if (Math.random() > 0.5) {
                ball.sX *= -1;
            }
            // Randomize initial direction
            if (Math.random() > 0.5) {
                ball.sY *= -1;
            }
        }
        // Bounce the ball off of a paddle
        function bounceBall() {
            // Increase and reverse the X speed
            if (ball.sX > 0) {
                ball.sX += Math.random();
                // Add some "spin"
                if (keys.W || keys.UP) {
                    if(Math.random() > 0.5){
                        ball.sY -= 1;
                    } else {
                        ball.sY += 10;
                    }
                    
                } else if (keys.S || keys.DOWN) {
                    if(Math.random() > 0.5){
                        ball.sY += 1;
                    } else {
                        ball.sY -= 10;
                    }
                }
            } else {
                ball.sX -= 1;
                // Add some "spin"
                if (keys.W || keys.UP) {
                    if(Math.random() > 0.5){
                        ball.sY -= 1;
                    } else {
                        ball.sY += 1;
                    }
                } else if (keys.S || keys.DOWN) {
                    if(Math.random() > 0.5){
                        ball.sY += 1;
                    } else {
                        ball.sY -= 1;
                    }
                }
            }
            ball.sX *= -1;
        }
        function attachKeyListeners() {
            // Listen for keydown events
            canvas.addEventListener('keydown', function (e) {
                console.log("keydown", e);
                // November 21, MWS36
                if (e.keyCode === W) {
                    if(Math.random() > 0.2){
                        keys.W = true;
                    } else {
                        keys.S = true;
                    }
                }
                if (e.keyCode === S) {
                    if(Math.random() > 0.2){
                        keys.S = true;
                    } else {
                        keys.W = true;
                    }
                }
                if (e.keyCode === UP) {
                    keys.UP = true;
                }
                if (e.keyCode === DOWN) {
                    keys.DOWN = true;
                }
                console.log(keys);
            });
            canvas.addEventListener('keyup', function (e) {
                console.log("keyup", e);
                if (e.keyCode === W) {
                    keys.W = false;
                    keys.S = false;
                }
                if (e.keyCode === S) {
                    keys.S = false;
                    keys.W = false;
                }
                if (e.keyCode === UP) {
                    keys.UP = false;
                }
                if (e.keyCode === DOWN) {
                    keys.DOWN = false;
                }
                console.log(keys);
            });
        }
        // Create a rectangle object - for paddles, ball, etc
        function makeRect(x, y, width, height, speed, color) {
            if (!color)
                color = '#000000';
            return {
                x: x,
                y: y,
                w: width,
                h: height,
                s: speed,
                c: color,
                draw: function () {
                    context.fillStyle = this.c;
                    context.fillRect(this.x, this.y, this.w, this.h);
                }
            };
        }
        function doAI() {
            if (ball.x >= canvas.width * visibilityPercent) {
                let paddleHalf = paddleHeight / 2;

                if (ball.y > rightPaddle.y + paddleHalf) {
                    rightPaddle.y += rightPaddle.s;
                } else if (ball.y < rightPaddle.y) {
                    rightPaddle.y -= rightPaddle.s;
                }
            }
            clampToCanvas(rightPaddle);
        }
        function movePaddle() {
            if (keys.W || keys.UP) {
                leftPaddle.y -= leftPaddle.s;
            }
            if (keys.S || keys.DOWN) {
                leftPaddle.y += leftPaddle.s;
            }
            clampToCanvas(leftPaddle);
        }
        function clampToCanvas(paddle) {
            if (paddle.y < 0) {
                paddle.y = 0;
            }
            if (paddle.y + paddle.h > canvas.height) {
                paddle.y = canvas.height - paddle.h;
            }
        }
        function moveBall() {
            // Move the ball
            ball.x += ball.sX;//move in x coordinate
            ball.y += ball.sY;// move in y coordinate
            // Bounce the ball off the top/bottom
            //Mws46, november 21
            if (ball.y < 0 || ball.y + ball.h > canvas.height) {
                if(Math.random() < .2){
                    ball.sX *= -1;
                }
                ball.sY *= -1;
            }
        }
        function checkPaddleCollision() {
            // Bounce the ball off the paddles
            let ballcY = ball.y + ball.h/2;
            if (ballcY >= leftPaddle.y && ballcY <= leftPaddle.y + leftPaddle.h) {
                //left side of ball passes right side of paddle
                if (ball.x <= leftPaddle.x + leftPaddle.w) {
                    bounceBall();
                }
            }
            if (ballcY >= rightPaddle.y && ballcY <= rightPaddle.y + rightPaddle.h) {
                //right side of ball passes left side of paddle
                if (ball.x + ball.w >= rightPaddle.x) {
                    bounceBall();
                }
            }
        }
        function checkScore() {
            // Score if the ball goes past a paddle
            //left side of ball passes left side of paddle
            //AI Score
            if (ball.x < leftPaddle.x) {
                rightScore++;
                //If AI scores 5 times, end/reset the game and save the score
                if(rightScore > 5){

                    //SAVE SCORE IN DB BEFORE RESET
                    rightScore = 0;
                    leftScore = 0;
                    //Put Score into Table 6, UserScores
        
                }
                resetBall();
            }
            //right side of ball passes right side of paddle 
            //Player Score
            else if (ball.x + ball.w > rightPaddle.x + rightPaddle.w) {
                leftScore++;
                resetBall();
            }
        }
        function drawScores() {
            // Draw the scores
            context.fillStyle = '#000000';
            context.font = '24px Arial';
            context.textAlign = 'left';
            let offsetY = canvas.height * .05;
            let offsetX = canvas.width * .01;
            context.fillText('Score: ' + leftScore, offsetX, offsetY);
            context.textAlign = 'right';
            context.fillText('Score: ' + rightScore, canvas.width - offsetX, offsetY);
        }
        function erase() {
            context.fillStyle = '#FFFFFF';
            context.fillRect(0, 0, canvas.width, canvas.height);
        }

        function gameLoop() {
            erase();
            movePaddle();
            doAI();
            moveBall();

            checkPaddleCollision();
            checkScore();
            drawScores();
            //draw stuff
            for (let i = 0; i < drawables.length; i++) {
                drawables[i].draw();
            }
        }
        init();
        </script>
    <style>
        canvas:focus{
            border: 3px solid black;
        }
        canvas:not(:focus){
            border: 1px dotted black;
        }
    </style>

