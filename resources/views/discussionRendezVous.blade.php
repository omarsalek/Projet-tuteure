
@extends('layouts.app')

@section('content')
<div class="container-fluid h-100">
    <div class="row justify-content-center h-100">
        <div class="col-md-8 col-xl-6 chat">
            <div class="cardDiscussion">
                <div class="card-header" id="titreDiscu">{{$type}}</div>
                <div id="msgForm" >
                    <div class="card-body msg_card_body">
                        @if (!empty($messages))
                            @foreach($messages as $message)

                                @if ($message->id == $idUserConnect)
                                <div class="d-flex justify-content-end mb-4">
                            <div class="msg_cotainer_send">
                                <span class="msg_nom">{{$message->nomUtilisateur}}</span>
                                @if($message->photo !=NULL)
                                <span class="msg_photo"><img  src="{{URL('storage/imageAnnonces/'.$message->photo)}}"  alt="Card image cap"></span>
                                @endif
                                <br>
                                <span id="contenuMessage">{{nl2br($message->contenu)}}</span>
                                <span class="msg_time_send">{{$message->DatePublication}}</span>
                            </div>
                        </div>
                            @else
                        <div class="d-flex justify-content-start mb-4">
                            <div class="msg_cotainer">
                                <span class="msg_nom_receiver">{{$message->nomUtilisateur}}</span>
                                @if($value->photo !=NULL)
                                <span class="msg_photo"><img  src="{{URL('storage/imageAnnonces/'.$message->photo)}}"  alt="Card image cap"></span>
                                @endif
                                <br>
                                <span id="contenuMessage">{{nl2br($message->contenu)}}</span>
                                <span class="msg_time_receiver">{{$message->DatePublication}}</span>
                            </div>
                        </div>
                        <script>document.getElementById('msgForm').scrollTop = document.getElementById('msgForm').scrollHeight;
                        </script>
                    </div>
                </div>
                @endif
                @endforeach
                @endif
                <div class="card-footer">
                    <form name="message" action="{{route('enligne2')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group">
                            <div class="input-group-append">
                                <input type="file" id="file" name="photoDiscussion">
                                <label for="file" id="labelFile"><i class="fas fa-image"></i></label>
                                <input type="hidden"  name="idAnnonce" value="{{ $messages[0]->idAnnonce }}">
                            </div>

                        <textarea name="contenuMsg" class="form-control type_msg" placeholder="Ecrivez votre message..."></textarea>
                        <div class="input-group-append">
                            <button name="envoyerMessage" id="sendMsgButton"><i class="fas fa-paper-plane"></i></button>
                        </div>
                </div>
                </form>
            </div>

        </div>
    </div>
</div>
</div>

@endsection
