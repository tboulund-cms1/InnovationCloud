        </div>
        <div class="col-3">
          <div class="card">
            <h5 class="card-header">Books</h5>
            <p class="card-body">
              <ul>
                <?php $bookLoop = new WP_Query(array(
                  "post_type" => "book",
                  "orderby" => "modified",
                  "order" => "DESC",
                  "posts_per_page" => 1
                )); ?>
                <?php while($bookLoop->have_posts()): $bookLoop->the_post() ?>
                  <li>
                    <a href="<?php the_permalink() ?>"><?php the_title() ?></a> - written by <?php the_field("author") ?>
                  </li>
                <?php endwhile; ?>
                <?php wp_reset_postdata() ?>
              </ul>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="footer">
      <div class="container">
        <p>© Copyright 2021</p>
      </div>
    </div>
    <?php wp_footer() ?>
  </body>
</html>