<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beginning of Time</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<style>
    body {
        background-color: black;
    }

    .mid_text h1 {
        font-family: 'Open Sans', sans-serif;
        color: white;
        font-size: 30px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);

        -webkit-animation: fadein 2s;
        /* Safari, Chrome and Opera > 12.1 */
        -moz-animation: fadein 2s;
        /* Firefox < 16 */
        -ms-animation: fadein 2s;
        /* Internet Explorer */
        -o-animation: fadein 2s;
        /* Opera < 12.1 */
        animation: fadein 2s;
    }

    @keyframes fadein {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }

    }

    .mid_text p {
        text-align: center;
        color: yellow;
        animation: fadein 2s;
    }
</style>

<body>
    <div class="mid_text">
        <h1>Welcome to SI PAUD-HI</h1>
        <p><i>Coming Soon</i></p>
    </div>
</body>

</html>