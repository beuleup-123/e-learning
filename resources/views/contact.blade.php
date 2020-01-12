@extends("layouts.app")
@section("content")
<div class="row contact ">       

  <div class="col-lg-12">
    <form>
      <div class="form-group">
        <label for="exampleFormControlInput1">Votre nom </label>
        <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="name">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput2">Email </label>
        <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="name@example.com">
      </div>
      <div class="form-group ">
        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
        <input type="password" class="form-control" id="inputPassword">
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Votre message</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
     <button class="btn btn-primary">Envoyer</button>
    </form>
   </div>
</div>
@endsection