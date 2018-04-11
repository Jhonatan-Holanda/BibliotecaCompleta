       
}
    
    
    
    
    
    
</style> 
<div class="form-row">
    <div class="container">
                  <div class="col-md-6">
                    <label for="">Nome</label>
                    <input class="form-control" id="Name" type="text" name="nome" aria-describedby="nameHelp" value="<?php echo $nome; ?>">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputName">Telefone</label>
                <input class="form-control" id="exampleInputName" type="text"  name="tele" aria-describedby="nameHelp" value="<?php echo $tele; ?>">
              </div>
              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-6">
                    <label for="exampleInputName">Email</label>
                    <input class="form-control" id="exampleInputName" type="text" name="mail" value="<?php echo $email; ?>">
                  </div>
                </div>
              </div>
                <div class="form-group">
                <div class="form-row">
                  <div class="col-md-6">
                    <label for="exampleInputName">Senha</label>
                    <input class="form-control" id="exampleInputName" type="text" name="senha" value="<?php echo $senha; ?>">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-12">
                    <label for="exampleInputName">Foto Perfil</label>
                    <input class="form-control" id="exampleInputName" type="file" name="file" value="<?php echo $img; ?>">
                  </div>
                </div>
              </div>
              <input class="btn btn-primary btn-block" type="submit" name="Enviar">
            </form>
          </div>
        </div>
    </div>
</div>