<section class="section">
    <div class="container">

        <!-- SECTION FILTER
        ================================================== -->
        <div class="row">
            <div class="col-lg-12">

                <div class="portfolioFilter{{ $isCenter === true ? ' text-center' : '' }}">
                    <a href="#" data-filter="*" class="current waves-effect waves-success">All</a>
                    <a href="#" data-filter=".natural" class="waves-effect waves-success">Natural</a>
                    <a href="#" data-filter=".creative" class="waves-effect waves-success">Creative</a>
                    <a href="#" data-filter=".personal" class="waves-effect waves-success">Personal</a>
                    <a href="#" data-filter=".photography" class="waves-effect waves-success">Photography</a>
                </div>
            </div>
        </div>

        <div class="port portfolio-masonry m-b-30">
            <div class="portfolioContainer row">
              @foreach($projects as $project)
                <div class="col-lg-4 {{ $project->kategorija }}">
                    <a href="{{ route('projects.view', $project->id) }}">
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
