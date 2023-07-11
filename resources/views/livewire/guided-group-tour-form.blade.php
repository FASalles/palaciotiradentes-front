<div>
    @if($errors->any())
        <div class="col-md-8 offset-md-2 alert alert-danger text-center mt-5 pt-4 pb-4">
            <ul class="list-unstyled">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if(request()->has('socialName'))
        @php
            $socialName = request()->input('socialName');
            $socialNames = session('socialNames', []);

            if (!in_array($socialName, $socialNames)) {
                $socialNames[] = $socialName;
                session(['socialNames' => $socialNames]);

                // exibe mensagem de sucesso apenas qdo o convidado for adicionado e ñ qdo recarrega página
                echo '<div class="alert alert-success text-center">';
                echo '<p>Convidado adicionado: ' . $socialName . '</p>';
                echo '</div>';
            }
        @endphp
    @endif

        {{--        @php--}}
        {{--            $guestList = session('guestList', []);--}}
        {{--        @endphp--}}

        <div>
            <div class="container mt-5">
                <h3 class="text-center">Agendamento Coletivo</h3>
                <a href="http://localhost:10010/guided-tour" style="font-size: smaller; color: blue; display: block; text-align: center;">(Deseja acessar o agendamento individual?)</a>
                <br><br>
                <h1>Preencha seus dados</h1>
                <h6>* Campos obrigatórios</h6>
                <br><br><br>

                <form action="{{route('GuidedGroupTour.store')}}" method="post" enctype="multipart/form-data" class="row g-3">
                    @csrf
                    <p>IDENTIFICAÇÃO DO RESPONSÁVEL</p>
                    <hr><br><br>

                    <div class="row">
                        <div class="form-floating col-md-6 mb-3">
                            <input type="text" class="form-control @error('fullNameResponsible') is-invalid @enderror" name="fullNameResponsible" id="fullNameResponsible" placeholder="fullNameResponsible">
                            <label for="fullNameResponsible" style="margin-left: 10px;"><i class="fa-solid fa-user fa-lg" style="margin-right: 20px; margin-left: 10px;"></i> Nome Completo *</label>
                            @error('fullNameResponsible')
                            <div class="invalid-feedback">
                                @foreach($errors->get('fullNameResponsible') as $error)
                                    {{ $error}}
                                @endforeach()
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-floating col-md-4">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="email@domínio.com" oninput="validateEmailConfirmation()">
                        <label for="email" style="margin-left: 10px;"><i class="fa-solid fa-envelope fa-lg" style="margin-right: 20px; margin-left: 10px;"></i> E-mail *</label>
                        @error('email')
                        <div class="invalid-feedback">
                            @foreach($errors->get('email') as $error)
                                {{ $error}}
                            @endforeach()
                        </div>
                        @enderror
                    </div>

                    <div class="form-floating col-md-4">
                        <input type="email" class="form-control @error('emailConfirmation') is-invalid @enderror" name="emailConfirmation" id="emailConfirmation" placeholder="email@domínio.com" oninput="validateEmailConfirmation()" onpaste="return false;">
                        <label for="emailConfirmation" style="margin-left: 10px;"><i class="fa-solid fa-envelope-circle-check fa-lg" style="margin-right: 20px; margin-left: 10px;"></i> Confirmação do E-mail *</label>
                        <p id="emailError" style="color: red; display: none;">Os campos de e-mail não correspondem.</p>
                        @error('emailConfirmation')
                        <div class="invalid-feedback">
                            @foreach($errors->get('emailConfirmation') as $error)
                                {{ $error}}
                            @endforeach()
                        </div>
                        @enderror
                    </div>
                    <br><br>

                    <br><br><br><br><br>
                    <p>AGENDA</p>

                    <hr><br><br>

                    <div class="row">

                        <div class="form-floating col-md-4 mb-3">
                            <input type="date" class="form-control @error('visitingDate') is-invalid @enderror" id="visitingDate" name="visitingDate">
                            <label for="visitingDate" style="margin-left: 10px;" class="form-label">Data da Visita *</label>
                            @error('visitingDate')
                            <div class="invalid-feedback">
                                @foreach($errors->get('visitingDate') as $error)
                                    {{ $error}}
                                @endforeach()
                            </div>
                            @enderror
                        </div>

                        <div class="form-floating col-md-4 mb-3">
                            <input type="time" class="form-control @error('visitingHour') is-invalid @enderror" id="visitingHour" name="visitingHour">
                            <label for="visitingHour" style="margin-left: 10px;" class="form-label">Hora da Visita *</label>
                            @error('visitingHour')
                            <div class="invalid-feedback">
                                @foreach($errors->get('visitingHour') as $error)
                                    {{ $error}}
                                @endforeach()
                            </div>
                            @enderror
                        </div>

                    <br><br><br><br><br>

                    <p>LISTA DE CONVIDADOS</p>

                    @include('livewire.modal-guided-tour-form')
                        <br><br>

                    @if(session('socialNames'))
                        <div class="social-names">
                            <ul>
                                @foreach(session('socialNames') as $name)
                                    <li>{{ $name }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <hr><br><br>

                    <div wire:ignore>
                        @if(config('recaptcha.enabled'))
                            <br>
                            <br>
                            <div class="row text-left mb-2">
                                <div class="col-6">
                                    {!! htmlFormSnippet() !!}
                                </div>
                            </div>
                        @endIf
                    </div>

                    <div class="col-md-12 mb">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>
        </div>

{{--        <script>--}}
{{--            function validateEmailConfirmation() {--}}
{{--                var email = document.getElementById("email").value;--}}
{{--                var emailConfirmation = document.getElementById("emailConfirmation").value;--}}
{{--                var emailError = document.getElementById("emailError");--}}

{{--                if (email !== emailConfirmation) {--}}
{{--                    emailError.style.display = "block";--}}
{{--                } else {--}}
{{--                    emailError.style.display = "none";--}}
{{--                }--}}
{{--            }--}}
{{--        </script>--}}
</div>
