<aside id="gallery" class="row text-center scrollto clearfix" data-featherlight-gallery data-featherlight-filter="a">

    {{-- @foreach ($galeri as $g)     --}}
    <a href="" data-featherlight="image" class="col-3 wow fadeIn" data-wow-delay="0.1s">
        <article class="all-browsers">
            <article class="browser">
                <h2>Google Chrome</h2>
                <p>Google Chrome is a web browser developed by Google, released in 2008. Chrome is the world's most popular web browser today!</p>
            </article>
        </article>
    </a>
    {{-- @endforeach --}}

</aside>

<style>
.all-browsers {
  margin: 0;
  padding: 5px;
  background-color: lightgray;
}

.all-browsers > h1, .browser {
  margin: 10px;
  padding: 5px;
}

.browser {
  background: white;
}

.browser > h2, p {
  margin: 4px;
  font-size: 90%;
}
</style>