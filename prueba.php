<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- 3filasx2columnas -->
  <!--   <style>
       .contenedor{
        display: grid;
        height: 100vh; /*ocupa el alto de la pantalla*/
        grid-template-columns: repeat(3, 1fr); /*los elementos ocuparan 3 columnas*/
        grid-template-rows: repeat(2, 1fr);  /*los elementos ocuparan 2 filas*/
       /*  También podremos establecer que algunas filas ocupen mayor espacio que otras */
        grid-template-rows: repeat(1, 2fr) repeat(1, 1fr);
    }
 -->
<!-- .item{
   border: 3px solid #ffffff;
   padding: 1rem;
   font-family: arial;
   color: white;
   text-align: center;
   background: linear-gradient(135deg, rgb(97, 234, 222) 0%, rgb(30, 168, 255) 100%);
   display: flex;
   justify-content: center;
   align-items: center;
   font-size: 2rem;
}
    </style>
</head>
<body>
    <div class="contenedor">
        <div class="item">ITEM 1</div>
        <div class="item">ITEM 2</div>
        <div class="item">ITEM 3</div>
        <div class="item">ITEM 4</div>
        <div class="item">ITEM 5</div>
        <div class="item">ITEM 6</div>
    </div>
</body>
</html> -->


<!-- 3filasx2columnas -->
<style>
  .contact{
    display: grid;
    height: 98vh;
    grid-template-areas: "top top"
                         "left  right";      
    grid-template-rows: 80px 1fr;
    grid-template-columns: 300px 1fr;
}

.contact-top{
  grid-area: top;
}

.contact-left{
  grid-area: left;
}

.contact-right{
  grid-area: right;
}

</style>
</head>
<body>

<div class="contact">
      <div class="contact-top">CONTACTO</div>
      <div class="contact-left">escribime</div>
      <div class="contact-right">completa el formulario</div>

</div>
</body>
</html>