<?php $comentario =1;?>

@foreach($comments as $comment)


    <div class="display-comment">

            <div class="card">
                    <div class="card-body">
                      <h5 class="card-title mb-2 text-muted">Comentario#{{$comentario}} por {{ $comment->user->name }}
                        <span class="card-subtitle mb-2 text-muted float-right">{{$comment->created_at}}</span>
                      </h5>
                      
                    </h6>
                    <br>
                      <p class="card-text">{{ $comment->body }}</p>
                      
                      <br>
                      <!--boton borrar-->

                      @if (Auth::check() && Auth::user()->hasRole('employee'))
                      <form action="{{ route('destroyComentario', $comment->id) }}" method="POST" style="padding-right:0; margin-left:0;">


                

                              @csrf
                              @method('DELETE')
                
                              <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i>Borrar Comentario
                              </button>
                          </form>
                      @endif
                      <!--boton borrar-->
                    </div>
            </div>
            <br>
        
            <?php $comentario++;?>
    </div>
@endforeach