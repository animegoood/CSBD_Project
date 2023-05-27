@props(['blog_images' => 'blog_image',
        'main_contents' => 'main_content',
        'content_imp_highlights' => 'content_imp_highlight',
        'rest_main_contents' => 'rest_main_content',
        'blog_post_dates' => 'date',
        'categorieses' => 'categories',
        'author_images' => 'author_image',
        'author_names' => 'author_name',
        'author_descriptions' => 'author_description',
        'blog_title'=>'blog_title'
           ])







<!--Blog-single-->
<div class="col-lg-8  wow customFadeInUp slow">
    <div class="blog-single">
        <div class="thumbnail">
            <img src="{{ $blog_images }}" alt="Blog-Image">
        </div>
        <h4 class="title">{{ $blog_title }}</h4>
        <p>{{ $main_contents }}
        </p>
        <br>
        <p class="quote">{{ $content_imp_highlights }}
        </p>
        <br>
        <p>{{ $rest_main_contents }}
        </p>
        <div class="meta">
            <p class="mb-0 ">
                <span><i class="far fa-clock"></i>{{ $blog_post_dates }}</span>
                <span><i class="fas fa-tag"></i>{{ $categorieses }}</span>
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
            <img src="{{ $author_images }}" alt="">
            <div class="author">
                <h5>{{ $author_names }}</h5>
                <p>{{ $author_descriptions }}</p>
            </div>
        </div>
    </div>
</div>
