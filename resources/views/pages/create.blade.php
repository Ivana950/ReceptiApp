@extends('user')

@section('sadrzaj')

<html>
    <body>
     <!--Znaci ovo sam kopirala sa contact, jer doslovno sta god sam pokusala, nije moglo, doslovno sve drugo ne radi, nak pojavi se al css ne valja -->
        <div class="contact-area section-padding-0-80">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading">
                            <h3>Novi recept</h3>
                        </div>
                    </div>
                </div>
    
                <div class="row">
                    
                    <div class="col-12">
                        <div class="contact-form-area">
                            <form action="#" method="post">
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <input type="text" class="form-control" id="name" placeholder="Naslov">
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <input type="text" class="form-control" id="kategorija" placeholder="Kategorija">
                                    </div>
                                    <div class="col-12">
                                        <input type="text" class="form-control" id="sastojci" placeholder="Sastojci">
                                    </div>
                                    <div class="col-12">
                                        <textarea name="text" class="form-control" id="Opis" cols="30" rows="10" placeholder="Opis"></textarea>
                                    </div>
                                    <div class="col-12 text-center">
                                        <button class="btn delicious-btn mt-30" type="submit">Objavi</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>








@endsection


