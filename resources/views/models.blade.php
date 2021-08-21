<div class="container cards">
    @if ($models)
    @foreach ($models as $model)
        <div class="card" >
      <img class="card-img-top" src="{{ url($model->photo) }}" alt="Card image cap">
      <div class="card-body text-center">
        <h5 class="card-title text-center">{{ $model->name }}</h5>
        <span>{{ $model->year }} | ${{ $model->price }} </span>
        <a href="/home/1" class="btn btn-dark btn-ego">Ver Modelo</a>
      </div>
    </div>
    @endforeach
    @endif
</div>