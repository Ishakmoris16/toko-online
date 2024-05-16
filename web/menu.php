<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 220px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

h2{
  text-shadow: 2px 2px 5px white;
  padding:10px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div class="sidenav">
  <h2>𝑻𝑶𝑲𝑶 𝑪𝑨𝑲𝑬</h2>
  <a href="index.php">𝙃𝙤𝙢𝙚</a>
  <a href="abode.php">𝘼𝙗𝙤𝙙𝙚</a>
  <a href="produk.php">𝙋𝙧𝙤𝙙𝙪𝙠</a>
  <a href="testimoni.php">𝙏𝙚𝙨𝙩𝙞𝙢𝙤𝙣𝙞</a>
  <a href="contak.php">𝘾𝙤𝙣𝙩𝙖𝙘𝙩</a>
</div>
</body>
</html>