<div class="container marketing">
    <hr class="featurette-divider" />
    <h4 class="mb-3">Create Account</h4>
    <form class="needs-validation" action="./engine/registro.php" novalidate>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="nome">First name</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="" value="" required />
            </div>
            <div class="col-md-6 mb-3">
                <label for="sobreNome">Last name</label>
                <input type="text" class="form-control" id="sobreNome" name="sobreNome" placeholder="" value="" required />
            </div>
        </div>

        <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="your@email.com" required />
        </div>

        <div class="row">
            <div class="col-md-5 mb-3">
                <label for="cep">Zip code</label>
                <input type="text" class="form-control" id="cep" name="cep" placeholder="" value="" required />
            </div>
            <div class="col-md-4 mb-3">
                <label for="logradouro">Public place</label>
                <input type="text" class="form-control" id="logradouro" name="logradouro" placeholder="" value="" required />
            </div>
            <div class="col-md-3 mb-3">
                <label for="numero">Home number</label>
                <input type="text" class="form-control" id="numero" name="numero" placeholder="" value="" required />
            </div>
        </div>

        <div class="row">
            <div class="col-md-5 mb-3">
                <label for="complemento">Complement</label>
                <input type="text" class="form-control" id="complemento" name="complemento" placeholder="" value="" />
            </div>
            <div class="col-md-4 mb-3">
                <label for="bairro">Neighborhood</label>
                <input type="text" class="form-control" id="bairro" name="bairro" placeholder="" value="" required />
            </div>
            <div class="col-md-3 mb-3">
                <label for="uf">State</label>
                <select class="custom-select d-block w-100" id="uf" required>
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                </select>
            </div>
        </div>
        <hr class="mb-4" />
        <button class="btn btn-primary btn-lg btn-block" type="submit">Create account</button>
    </form>
    <hr class="featurette-divider" />
</div>
