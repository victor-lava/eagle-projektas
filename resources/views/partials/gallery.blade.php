<section class="section">
    <div class="container">

        <!-- SECTION FILTER
        ================================================== -->
        <div class="row">
            <div class="col-lg-12">

                <div class="portfolioFilter{{ $isCenter === true ? ' text-center' : '' }}">
                    <a href="#" data-filter="*" class="current waves-effect waves-success">All</a>
                    <a href="#" data-filter=".uncategorized" class="waves-effect waves-success">Uncategorized</a>
                    @foreach($categories as $category)
                    <a href="#" data-filter=".{{ Str::slug($category->title, '-') }}" class="waves-effect waves-success">{{ $category->title}}</a>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="port portfolio-masonry m-b-30">
            <div class="portfolioContainer row">
              @foreach($projects as $project)
                <div class="col-lg-4 {{ isset($project->category) ? Str::slug($project->category->title) : 'uncategorized' }}">
                    <a href="{{ route('projects.view', $project->slug) }}">
                        <div class="portfolio-box">
                            <div class="portfolio-box-img">
                                <img src="{{ $project->image_url }}" class="img-fluid" alt="member-image">
                            </div>
                            <div class="portfolio-box-detail">
                                <p>{{ ucfirst($project->kategorija) }}</p>
                                <h4>{{ $project->title }}</h4>
                            </div>
                        </div>
                    </a>
                </div>
              @endforeach
            </div>
            <!-- end portfoliocontainer-->
        </div>
        <!-- End row -->

    </div> <!-- end container -->
</section>
