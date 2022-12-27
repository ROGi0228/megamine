<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Отправка сообщения...</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat&family=Rubik:wght@600&display=swap');

        * {
            padding: 0;
            margin: 0;
            border: 0;
        }

        body {
            height: 100%;
            font-size: 100%;
            line-height: 1;
            font-size: 14px;
            -ms-text-size-adjust: 100%;
            -moz-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
            font-family: 'Montserrat', sans-serif;
            font-family: 'Rubik', sans-serif;
            font-style: normal;
            cursor: default;
            background: rgb(209, 233, 187);
            background: linear-gradient(145deg, rgba(209, 233, 187, 1) 0%, rgba(142, 222, 217, 1) 100%);
        }

        button::-moz-focus-inner {
            padding: 0;
            border: 0;
        }

        .container {
            max-width: 1200px;
            padding: 0;
            margin: 0 auto;
        }

        h1 {
            font-size: 50px;
            margin: 40px 0 20px 0;
        }

        p {
            font-size: 20px;
            color: #5f5f5f;
            margin: 20px 0 40px 0;
        }

        button {
            cursor: pointer;
            background-color: #32ba7c;
            font-size: 20px;
            color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 4px 5px 0px #0aa06e;
        }

        .container {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .content {
            border-radius: 30px;
            text-align: center;
            padding: 20px;
            margin: auto;
        }

        .success {
            position: relative;
            width: 200px;
            margin: 0 auto;
            height: 70px;
        }

        .icon-success {
            animation: bounce 1s infinite;
            position: absolute;
            left: 50%;
            top: 0;
            transform: translate(-50%, -50%);
            width: 80px;
            height: 80px;
            border: 8px solid #52b358;
            border-radius: 50%;
        }

        .icon-success::before {
            position: absolute;
            left: 33%;
            top: 30px;
            height: 40%;
            width: 8px;
            background-color: #52b358;
            content: "";
            transform: translateX(10px) rotate(-45deg);
            transform-origin: left bottom;
        }

        .icon-success::after {
            position: absolute;
            left: 33%;
            bottom: 18px;
            height: 8px;
            width: 60%;
            background-color: #52b358;
            content: "";
            transform: translateX(10px) rotate(-45deg);
            transform-origin: left bottom;
        }

        @media screen and (max-width:592px) {
            h1 {
                font-size: 40px;
            }

            .img {
                height: 40px;
            }

            p {
                margin: 20px 0 30px 0;
                font-size: 18px;
            }
        }

        @keyframes bounce {
            0% {
                top: 0;
            }

            50% {
                top: 15px;
            }

            100% {
                top: 0;
            }
        }
    </style>

    <!-- Global site tag (gtag.js) - Google Ads: 10905255934 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-10905255934"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'AW-10905255934');
    </script>


    <?php $this->header(); ?>
</head>

<body>
    <div class="container">
        <div class="content">
            <div class="success">
                <span class="icon-success"></span>
            </div>
            <h1>Спасибо за вашу заявку!</h1>
            <p>Мы свяжемся с Вами в ближайшее время.</p>
            <a href="javascript: history.back()"><button>Вернуться назад</button></a>
        </div>
    </div>
    <?php $this->footer(); ?>
</body>

</html>