<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.1.3/axios.min.js" integrity="sha512-0qU9M9jfqPw6FKkPafM3gy2CBAvUWnYVOfNPDYKVuRTel1PrciTj+a9P3loJB+j0QmN2Y0JYQmkBBS8W+mbezg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.7.13/vue.min.js" integrity="sha512-9PmLIATEd4w0OxdTHq61p12lQqa8OtDC6nXu0+S1Icb800oxoADle+gaPfmAXLa35KSvk/6bGeNRfi3nq0Hvvw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./script.js" defer></script>
    <link rel="stylesheet" href="style.css">
    <title></title>
</head>
<body>

    <div id="app">
        <div class='album-container' v-for="album of allMusic">
                <div class="card-container">
                    <img :src="album.poster" alt="album.poster">
                </div>
                <h3>{{album.title}}</h3>
                <h4>{{album.author}}</h4>
                <p>{{album.year}}</p>
                <p>{{album.genre}}</p>
        </div>
    </div>
</body>
</html>