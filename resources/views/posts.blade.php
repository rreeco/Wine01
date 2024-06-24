<doctype html>

<title> My Blog </title>
<link rel="stylesheet" href="/app.css">

<body>        <div>
<h1>Il mio sito di vino <br> </h1>
    <?php foreach ($posts as $post):?>

             <h4><a href="/posts/{{$post->slug}}">Look Here <br> </a> </h4>
               <h1>{{ $post->title }}
         </h1> <br>
               <h3>
               {{ $post->sub_title  }}
               </h3> 
               <p>
                 {{$post->slug }} ?>
               </p>
               <p>
                 {{$post->body }} ?>
               </p>


    <?php endforeach; ?>  </div>
<h2> Fine Post </h2>
</body> 

<a href="/cantina"> Cantine Convenzionate </a> 
<a href="/vino"> Ricerca il tuo Vino </a>
<a href="/post"> Post Recenti </a> 
<a href="/product"> Scopri i prodotti in offerta </a>
<a href="/"> HomePage </a>
   