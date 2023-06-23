<div>
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

        <div class="container mt-5">
            <h3 class="text-center">Agendamento Coletivo</h3>
            <a href="http://localhost:10010/guided-tour" style="font-size: smaller; color: blue; display: block; text-align: center;">(Deseja acessar o agendamento individual?)</a>
            <br><br>
            <h1>Preencha seus dados</h1>
            <h6>* Campos obrigatórios</h6>
            <br><br><br>

            <form class="row g-3">
                <p>IDENTIFICAÇÃO DO RESPONSÁVEL</p>
                <hr><br><br>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="fullName" class="form-label">Nome Completo *</label>
                        <input type="text" class="form-control" id="fullName" required>
                    </div>
                </div>

                <div class="col-md-4">
                    <label for="email" class="form-label">E-mail *</label>
                    <input type="email" class="form-control" id="email" placeholder="email@domínio.com" oninput="validateEmailConfirmation()">
                </div>

                <div class="col-md-4">
                    <label for="emailConfirmation" class="form-label">Confirmação do E-mail *</label>
                    <input type="email" class="form-control" id="emailConfirmation" oninput="validateEmailConfirmation()" onpaste="return false;">
                    <p id="emailError" style="color: red; display: none;">Os campos de e-mail não correspondem.</p>
                </div>
                <br><br>

                <script>
                    function validateEmailConfirmation() {
                        var email = document.getElementById("email").value;
                        var emailConfirmation = document.getElementById("emailConfirmation").value;
                        var emailError = document.getElementById("emailError");

                        if (email !== emailConfirmation) {
                            emailError.style.display = "block";
                        } else {
                            emailError.style.display = "none";
                        }
                    }
                </script>

                <br><br><br><br><br>
                <p>AGENDA</p>

                <hr><br><br>

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="visitingDate" class="form-label">Data da Visita *</label>
                        <input type="date" class="form-control" id="visitingDate" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="visitingHour" class="form-label">Hora da Visita *</label>
                        <input type="time" class="form-control" id="visitingHour" required>
                    </div>
                </div>

                <br><br><br><br><br><br>
                <p>LISTA DE CONVIDADOS</p>
                @include('livewire.modal-guided-tour-form')

                <hr><br><br>

{{--                <ul>--}}
{{--                    @foreach($fullName as $name)--}}
{{--                        <li>{{ $name }}</li>--}}
{{--                    @endforeach--}}
{{--                </ul>--}}

                <div>
                    <br>
                    <br>
                    <div class="row text-left mb-2">
                        <div class="col-6">
                            {!! htmlFormSnippet() !!}
                        </div>
                    </div>
                </div>

                <div class="col-md-12 mb">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>


        </div>
        <br><br><br><br><br>


    </div>

</div>
