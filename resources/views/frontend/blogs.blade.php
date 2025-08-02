<x-fontend_layout>
   <ul class="grid-list">
        @foreach ($blogs as $blog)
          <li>
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 550; --height: 660;">
                  <img src="./assets/images/recent-1.jpg" width="550" height="660" loading="lazy"
                    alt="Creating is a privilege but it’s also a gift" class="img-cover">

                  <ul class="avatar-list absolute">

                    <li class="avatar-item">
                      <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                        <img src="./assets/images/author-3.jpg" width="100" height="100" loading="lazy" alt="Author"
                          class="img-cover">
                      </a>
                    </li>

                    <li class="avatar-item">
                      <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                        <img src="./assets/images/author-5.jpg" width="100" height="100" loading="lazy" alt="Author"
                          class="img-cover">
                      </a>
                    </li>

                  </ul>
                </figure>

                <div class="card-content">

                  <ul class="card-meta-list">

                    <li>
                      <a href="#" class="card-tag">Lifestyle</a>
                    </li>

                    <li>
                      <a href="#" class="card-tag">People</a>
                    </li>

                    <li>
                      <a href="#" class="card-tag">Review</a>
                    </li>

                  </ul>

                  <h3 class="h4">
                    <a href="#" class="card-title hover:underline">
                      {{ $blog->title }}
                    </a>
                  </h3>

                  <p class="card-text">
                    {{ $blog->description }}
                  </p>

                </div>

              </div>
            </li>
        @endforeach
          

          </ul>

</x-fontend_layout>
