<!-- Blog Sidebar Widgets Column -->
    <div class="col-md-4">
        <!-- Blog Categories Well -->
        <div class="well">
            <h4>Categories</h4>
            <div class="row">
              @foreach ($categories->chunk(2) as $part)
                <div class="col-lg-6">
                    <ul class="list-unstyled">
                      @foreach ($part as $category)
                        <li><a href="/category/{{$category->slug}}">{{$category->title}}</a></li>
                      @endforeach
                    </ul>
                </div>
              @endforeach
            </div>
            <!-- /.row -->
            <div class="row">
              <div class="col-lg-6 col-lg-offset-6">
                  <p class="text pull-right">
                    <a href="/category/all">See All</a>
                  </p>
              </div>
            </div>
            <!-- /.row -->
        </div>

        <!-- Side Widget Well -->
        <div class="well">
            <h4>Copyright &copy; Job Khoj. 2015</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
        </div>
    </div>