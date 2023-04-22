<div class="card border border-danger rounded" style="width: 15rem;">
    <img src="{{ Storage::url($trailer->img)}}" class="card-img-top" alt="...">
    <div class="card-body bg-dark">
      <h5 class="card-title text-center fw-semibold text-danger">{!! $trailer->title !!}</h5>
      <a href="{{route('trailers.show', ['id' => $trailer->id])}}" class="btn btn-success my-3 d-flex flex-column align-items-center ">Guarda Trailer</a>
      <a href="#" class="btn btn-warning my-3 d-flex flex-column align-items-center ">Modifica Trailer</a>
      <a href="{{route('trailers.delete', ['id' => $trailer->id])}}" class="btn btn-danger my-3 d-flex flex-column align-items-center ">Elimina Trailer</a>
    </div>
  </div>