<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Be Simple</title>
  <link rel="stylesheet" href="./dist/css/app.css">
</head>

<body>

<style>
#site_header {
    text-align: center;
    border-bottom: 1px solid black;
    padding-bottom: 1rem;
}  
    h1 {
      font-size: blue;
      text-transform: uppercase;
      padding: 4rem 0;
    }
  
    nav {
      background-color: white;
    }
      a {
        text-decoration: none;
        color: red;
        padding: 1rem;
      }
    
  

  /* Common rules */
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
  }
  
  body {
    font-family: 'Poppins',
      sans-serif;
    width: 1000px;
    margin: auto;
  }

</style>

  <div id="site_header">
    <h1>Be simple</h1>
    <nav class="navbar">
        @foreach ($links as $link) 
            <a href="#">{{$link}}</a>
        @endforeach
    </nav>
  </div>
  <!-- /#site_header -->
  <main id="site_main">

    <section class="photos">

    </section>
    <!-- /.photos -->

    <div class="bag">

    </div>
    <!-- /.bag -->

  </main>
  <!-- /#site_main -->
  <footer id="site_footer"></footer>
  <!-- /#site_footer -->

  <script src="./dist/js/app.js"></script>
</body>

</html>