
<!-- Portfolio Section -->
<h2>Portfolio Heading</h2>
<div class="row">
  @foreach($portfolio as $p)

  <div class="col-lg-4 col-sm-6 portfolio-item">
    <div class="card h-100">
      <a href="#"><img class="card-img-top" src="storage/{{$p->image}}" alt=""></a>
      <div class="card-body">
        <h4 class="card-title">
                  <a href="#">{!!$p->title!!}</a>
                </h4>
        <p class="card-text">{!!$p->article!!}</p>
      </div>
    </div>
  </div>

  @endforeach
</div>
