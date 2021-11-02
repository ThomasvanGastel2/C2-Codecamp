<?php
    require_once 'header.php'
    ?>

<div class="content">
    <div class="clock">
        <div class="digital-clock"id = "digital-clock"></div>
        <p>Actuele tijd</p>
    </div>
    <div class="actual-date">
        <p class="date"id="date"></p>
        <p>Actuele datum</p>
    </div>
    <script src = "script.js"> </script>
</div>
    <?php
    require_once 'footer.php'
    ?>
</html>
    <style>
    body {
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    }
    * {
        box-sizing: border-box;
    }
    .openChatBtn {
        background-color: rgb(123, 28, 179);
        color: white;
        padding: 16px 20px;
        border: none;
        font-weight: 500;
        font-size: 18px;
        cursor: pointer;
        opacity: 0.8;
        position: fixed;
        bottom: 23px;
        right: 28px;
        width: 280px;
        border-radius: 22px;
    }
    .openChat {
        display: none;
        position: fixed;
        bottom: 0;
        right: 15px;
        border: 3px solid #ff08086b;
        z-index: 9;
        border-radius: 22px;
    }
    form {
        max-width: 300px;
        padding: 10px;
        background-color: white;
        border-radius: 22px;
    }
    form textarea {
        width: 100%;
        font-size: 18px;
        padding: 15px;
        margin: 5px 0 22px 0;
        border: none;
        font-weight: 500;
        background: #d5e7ff;
        color: rgb(0, 0, 0);
        resize: none;
        min-height: 200px;
    }
    form textarea:focus {
        background-color: rgb(219, 255, 252);
        outline: none;
    }

    textarea {
        border-radius: 22px;
    }

    form .btn {
        background-color: rgb(34, 197, 107);
        color: white;
        padding: 16px 20px;
        font-weight: bold;
        border: none;
        cursor: pointer;
        width: 100%;
        margin-bottom: 10px;
        opacity: 0.8;
        border-radius: 22px;
    }
    form .close {
        background-color: red;
    }
    form .btn:hover, .openChatBtn:hover {
        opacity: 1;
    }
    </style>
    </head>
    <body>
    <button class="openChatBtn" onclick="openForm()">Chat</button>
    <div class="openChat">
    <form>
    <h1>Chat</h1>
    <label for="msg"><b>Message</b></label>
    <textarea placeholder="Type message.." name="msg" required></textarea>
    <button type="submit" class="btn">Send</button>
    <button type="button" class="btn close" onclick="closeForm()">
    Close
    </button>
    </form>
    </div>
    <script>
    document .querySelector(".openChatBtn") .addEventListener("click", openForm);
    document.querySelector(".close").addEventListener("click", closeForm);
    function openForm() {
        document.querySelector(".openChat").style.display = "block";
    }
    function closeForm() {
        document.querySelector(".openChat").style.display = "none";
    }
    </script>

        <?php
        require_once 'footer.php'
        ?>
    </html>
