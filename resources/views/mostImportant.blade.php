@extends('template.publicTemplate', ['title' => 'Spamfone', 'slogan' => 'Compartilhar é a melhor forma de se proteger!'])

@section('page')
<div class="row" style="margin-top: 30px;">
    <div class="col-md-12">
        <form>
            <div class="input-group mb-3">
                <input type="text" class="form-control input" placeholder="Pesquisar por">
                <button type="button" class="btn btn-spamfone"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
        </form>
    </div>
</div>

<div class="row card-spamfone" style="margin-top: 30px;">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h1 class="card-title"><i class="fa-solid fa-mobile"></i> (16)99999-9999</h1>
                    <div class="alert-spamfone" role="alert">
                        <h2>SPAM</h2>
                    </div>
                </div>

                <div class="row justify-content-between">
                    <div class="col-md-6">
                        <p class="highlight">Nº Denuncias: 12</p>
                    </div>

                    <div class="col-md-6">
                        <p class="highlight">Nível segurança: 3</p>
                    </div>

                    <div class="col-md-12">
                        <p class="highlight">Títulos mais relevantes</p>
                        <p>Chamada silenciosa</p>
                        <p>Telemarketing</p>
                    </div>
                </div>
                <a href="#" class="btn btn-spamfone">Saiba mais</a>
            </div>
        </div>
    </div>
    
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h1 class="card-title"><i class="fa-solid fa-envelope"></i> email@tagt.us</h1>
                    <div class="alert-spamfone" role="alert">
                        <h2>SPAM</h2>
                    </div>
                </div>

                <div class="row justify-content-between">
                    <div class="col-md-6">
                        <p class="highlight">Nº Denuncias: 12</p>
                    </div>

                    <div class="col-md-6">
                        <p class="highlight">Nível segurança: 3</p>
                    </div>

                    <div class="col-md-12">
                        <p class="highlight">Títulos mais relevantes</p>
                        <p>Tentativa de pishing</p>
                        <p>Querem roubar seus dados</p>
                    </div>
                </div>
                <a href="#" class="btn btn-spamfone">Saiba mais</a>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h1 class="card-title"><i class="fa-solid fa-envelope"></i> email@tagt.us</h1>
                    <div class="alert-spamfone" role="alert">
                        <h2>SPAM</h2>
                    </div>
                </div>

                <div class="row justify-content-between">
                    <div class="col-md-6">
                        <p class="highlight">Nº Denuncias: 12</p>
                    </div>

                    <div class="col-md-6">
                        <p class="highlight">Nível segurança: 3</p>
                    </div>

                    <div class="col-md-12">
                        <p class="highlight">Títulos mais relevantes</p>
                        <p>Tentativa de pishing</p>
                        <p>Querem roubar seus dados</p>
                    </div>
                </div>
                <a href="#" class="btn btn-spamfone">Saiba mais</a>
            </div>
        </div>
    </div>
    
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h1 class="card-title"><i class="fa-solid fa-mobile"></i> (16)99999-9999</h1>
                    <div class="alert-spamfone" role="alert">
                        <h2>SPAM</h2>
                    </div>
                </div>

                <div class="row justify-content-between">
                    <div class="col-md-6">
                        <p class="highlight">Nº Denuncias: 12</p>
                    </div>

                    <div class="col-md-6">
                        <p class="highlight">Nível segurança: 3</p>
                    </div>

                    <div class="col-md-12">
                        <p class="highlight">Títulos mais relevantes</p>
                        <p>Chamada silenciosa</p>
                        <p>Telemarketing</p>
                    </div>
                </div>
                <a href="#" class="btn btn-spamfone">Saiba mais</a>
            </div>
        </div>
    </div>
</div>
@endsection 