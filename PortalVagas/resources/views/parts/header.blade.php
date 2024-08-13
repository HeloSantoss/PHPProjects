
<div class="container-flex">
    <br>
    <br>
    @if(Auth::check)
    @if(Request()->user()->where('tipo','empresa', )->first())
<div>
    Olá empresa
</div>
@else
<div>
    Olá usuario
</div>
    @endif
    <br>
    <hr>
    <br>
</div>