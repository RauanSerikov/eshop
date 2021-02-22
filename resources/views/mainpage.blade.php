<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rauan Serikov</title>
    <link rel="stylesheet" href="mainpagestyle.css">
</head>
<style>
    * {
    margin: 0 auto;
}
body {
    background-color: rgb(148, 3, 148);
}
.box {
    margin-top: 40px;
    width: 1000px;
    height: 500px;
    background-color: white;
    display: flex;
    flex-direction: row;
}
img {
    width: 400px;
}
.subbox2 {
    width: 600px;
    height: 500px;
    background-color: white;
}
.name {
    margin-top: 140px;
    text-align: center;
    color: gold;
    font-size: 30px;
}
.subname {
    text-align: center;
    color: gold;
    font-size: 20px;
}
.nav {
    margin-top: 120px;
    text-align: center;
    color: gray;
    font-size: 13px;
}
.subbox3 {
    margin-top: 40px;
    display: flex;
    flex-direction: row;
}
a {
    color: gray;
    text-decoration: none;
}
</style>
<body>
    <div class="box">
        <div class="subbox1"><img src="https://instagram.fkgf2-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/p640x640/127304974_231627348387597_4718143335441547664_n.jpg?_nc_ht=instagram.fkgf2-1.fna.fbcdn.net&_nc_cat=109&_nc_ohc=6J8OgNhNQ4gAX99p3us&tp=1&oh=aa13d4ed0eefb5e46e6f5c1d1e89097f&oe=605D1EA0" alt="ra.one"></div>
        <div class="subbox2">
            <div class="name"><b>SRN</b></div>
            <div class="subname">Serikov Rauan Nurlanuly</div>
            <div class="nav">Click here if you want to know :</div>
            <div class="subbox3">
                <div class="sub1">
                    <a href=" {{ route('aboutme') }} ">ABOUT ME</a>
                </div>
                <div class="sub2">
                    <a href=" {{ route('mycontact') }} ">MY CONTACT</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>