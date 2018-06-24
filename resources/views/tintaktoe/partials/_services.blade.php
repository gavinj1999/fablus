<!-- Marketing Icons Section -->
<div class="row">
  @foreach($services as $s)
  <div class="col-lg-4 mb-4">
    <div class="card h-100">
      <h4 class="card-header">{!!$s->title!!}</h4>
      <div class="card-body">
        <p class="card-text">{!!$s->article!!}</p>
      </div>
      <div class="card-footer">
        <a href="#" class="btn btn-primary">Learn More</a>
      </div>
    </div>
  </div>
@endforeach
</div>
