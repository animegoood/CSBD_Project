@props(['blog_image' => 'blog_image',
        'main_content' => 'main_content',
        'content_imp_highlight' => 'content_imp_highlight',
        'rest_main_content' => 'rest_main_content',
        'blog_post_date' => 'date',
        'categories' => 'categories',
        'author_image' => 'author_image',
        'author_name' => 'author_name',
        'author_description' => 'author_description',
           ])







<!--Blog-single-->
<div class="col-lg-8  wow customFadeInUp slow">
    <div class="blog-single">
        <div class="thumbnail">
            <img src="{{ $blog_image }}" alt="Blog-Image">
        </div>
        <h4 class="title">{{ $slot }}</h4>
        <p>{{ $main_content }}
        </p>
        <br>
        <p class="quote">{{ $content_imp_highlight }}
        </p>
        <br>
        <p>{{ $rest_main_content }}
        </p>
        <div class="meta">
            <p class="mb-0 ">
                <span><i class="far fa-clock"></i>{{ $blog_post_date }}</span>
                <span><i class="fas fa-tag"></i>{{ $categories }}</span>
            </p>
            <div class="social-links ml-auto">
                <ul class="list-inline">
                    <li> Share:</li>
                    <li><a href="#"> <i class="fab fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="footer-author">
            <img src="{{ $author_image }}" alt="">
            <div class="author">
                <h5>{{ $author_name }}</h5>
                <p>{{ $author_description }}</p>
            </div>
        </div>
    </div>
</div>
