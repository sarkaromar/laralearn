@extends('layout.master')

@section('contant')
    <h1>My Blog</h1>
    <ul>
        <li>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, mollitia dolorem nemo et aut corporis exercitationem quasi perferendis, quae maiores eaque odio. Consequatur officia quasi velit odit nulla aliquid expedita?</p>
            <a href="{{ route('blog.post', ['id'=> 1]) }}">View More</a>
        </li>
        <li>
            <p>Aliquid aspernatur distinctio laudantium tempora dolor laborum deserunt, ex nobis possimus suscipit! Fugit numquam excepturi fugiat amet nam beatae adipisci cum nihil ratione doloremque, maxime deserunt et sapiente nesciunt laudantium?</p>
            <a href="{{ route('blog.post', ['id'=> 2]) }}">View More</a>
        </li>
        <li>
            <p>Consequatur, voluptatum hic atque corporis dolorum nesciunt similique soluta possimus. Adipisci error architecto placeat molestias aperiam! Maxime assumenda excepturi officiis delectus sequi dolorum similique nisi, ab accusamus aspernatur molestias commodi!</p>
            <a href="{{ route('blog.post', ['id'=> 3]) }}">View More</a>
        </li>
    </ul>
@endsection