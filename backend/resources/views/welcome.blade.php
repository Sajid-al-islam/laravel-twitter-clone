<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .hero-image {
            /*  This creates an image overlay  */
            background-image:
                linear-gradient(to bottom,
                    rgba(0, 0, 0, 0.8),
                    rgba(0, 0, 0, 0.8)),

                /* photo coutesy of unsplash */
                url(https://source.unsplash.com/YUEcePrJsgg);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            /* to ensure the image takes up the entire viewport */
            height: 100vh;
            position: relative;
        }

        /* centers the content on the viewport */
        .hero-text {
            text-align: center;
            position: absolute;
            top: 52.5%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-family: 'Lato', sans-serif;
            font-weight: 400;
            color: #fff;
            /*  words remain as is without breaking up  */
            white-space: nowrap;

            /*  This creates a text shadow around the the text within the hero-text div  */
            text-shadow: 0px 4px 3px rgba(0, 0, 0, 0.4),
                0px 8px 13px rgba(0, 0, 0, 0.1),
                0px 16px 23px rgba(0, 0, 0, 0.1);

        }

        .hero-text h1 {
            font-size: 4.3em;
            font-weight: 300;

        }

        .hero-text p {
            font-size: 1em;
            text-transform: uppercase;
            letter-spacing: 5px;
            font-weight: 700;
            margin-bottom: 20px;
        }
        .instruction{
            padding-top: 50px;
            text-decoration: none;
            color: white;
            font-size: 1em;
            text-transform: uppercase;
            letter-spacing: 5px;
        }
    </style>
</head>

<body>
    <main>
        <div class="hero-image">
            <div class="hero-text">
                <h1>Laravel twitter clone</h1>
                <p>Follow these instruction to run</p>
                <a class="instruction" href="https://github.com/Sajid-al-islam/laravel-twitter-clone">Instructiions</a>
            </div>
        </div>
    </main>
</body>

</html>
