<title> My Blog </title>
<link rel="stylesheet" href="/app.css">

<body>
    <h1> Il mio sito di Vini </h1>
    <article>
        <h1> {{ $post->title }}</h1>
        <div>
            {!! $post->body !!}
        </div>
    </article>

    <a href="/posts"> Post Recenti </a> 

</body>

<a href="/product"> Scopri i prodotti in offerta </a>
<a href="/"> HomePage </a>