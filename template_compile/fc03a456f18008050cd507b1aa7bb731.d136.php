<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><section class="login-section auth-section" style="padding: 0px 0px 50px;">
    <div class="container">
        <div class="row">
            <div class="form-box col-md-8 col-sm-12 col-xs-12 col-md-offset-2 col-sm-offset-0 xs-offset-0">
                <h1 class="form-box-heading logo text-center">
                    <span class="pe-icon pe-7s-box2 icon"></span><span class="highlight"><?php echo APP_NAME; ?></span>
                </h1>
                <div class="form-box-inner">
                    <form  role="form" method="post" action="/<?php echo $this->scope["modulo"]["modulo"];?>/install">
                        <h3 class="title text-center"><?php echo $this->scope["modulo"]["name"];?></h3>

                        <div class="row">
                            <div class="form-container col-md-12 col-sm-12 col-xs-12">
                                <h3 class="text-center">Informações</h3>
                                <div class="form-group email">
                                    <label class="sr-only" for="login-email">Dominio</label>
                                    <span class="fa fa-user icon"></span>
                                    <input id="login-email" type="text" class="form-control" placeholder="127.0.0.1" name="instalacao[informacoes][dominio]">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-container col-md-12 col-sm-12 col-xs-12">
                                <h3 class="text-center">Banco de Dados</h3>
                                <div class="form-group email">
                                    <label class="sr-only" for="login-email">Servidor</label>
                                    <span class="fa fa-user icon"></span>
                                    <input id="login-email" type="text" class="form-control" placeholder="127.0.0.1" name="instalacao[database][host]">
                                </div>

                                <div class="form-group email">
                                    <label class="sr-only" for="login-email">Banco de Dados</label>
                                    <span class="fa fa-user icon"></span>
                                    <input id="login-email" type="text" class="form-control" placeholder="SWDB" name="instalacao[database][name]">
                                </div>

                                <div class="form-group email">
                                    <label class="sr-only" for="login-email">Usuario</label>
                                    <span class="fa fa-user icon"></span>
                                    <input id="login-email" type="text" class="form-control" placeholder="root" name="instalacao[database][user]">
                                </div>

                                <div class="form-group email">
                                    <label class="sr-only" for="login-email">Senha</label>
                                    <span class="fa fa-user icon"></span>
                                    <input id="login-email" type="text" class="form-control" placeholder="12345" name="instalacao[database][password]">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-container col-md-12 col-sm-12 col-xs-12">
                                <h3 class="text-center">Usuario</h3>
                                <div class="form-group email">
                                    <label class="sr-only" for="login-email">Email</label>
                                    <span class="fa fa-user icon"></span>
                                    <input id="login-email" type="email" class="form-control login-email validar_email" placeholder="Email" name="instalacao[usuario][usuario]">
                                </div>

                                <div class="form-group password">
                                    <label class="sr-only" for="login-password">Senha</label>
                                    <span class="fa fa-lock icon"></span>
                                    <input id="login-password" type="password" class="form-control login-password" placeholder="Senha" name="instalacao[usuario][senha]">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-container col-md-12 col-sm-12 col-xs-12">
                                <button type="submit" class="btn btn-block btn-primary"><?php echo $this->scope["modulo"]["send"];?></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>