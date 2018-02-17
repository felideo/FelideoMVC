<?php
/* template head */
if (class_exists('Dwoo\Plugins\Functions\PluginInclude')===false)
	$this->getLoader()->loadPlugin('PluginInclude');
/* end template head */ ob_start(); /* template body */ ?><div class="row">
    <div class="form-box col-md-8 col-sm-12 col-xs-12 col-md-offset-2 col-sm-offset-0 xs-offset-0">
        <h1 class="form-box-heading logo text-center" style="margin-top: 5%; margin-bottom: -10%;">
            <span class="highlight"><?php echo APP_NAME; ?></span>
        </h1>
    </div>
</div>

<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <div class="login-panel panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Entrar</h3>
            </div>
            <div class="panel-body">
                <form  role="form" method="post" action="/acesso/run_back">
                    <fieldset>
                        <div class="form-group">
                            <input id="login-email" type="email" class="form-control login-email validar_email" placeholder="E-mail" name="acesso[email]" autofocus>
                        </div>
                        <div class="form-group">
                            <input id="login-password" type="password" class="form-control login-password" placeholder="Senha" name="acesso[senha]">
                        </div>

                        <button type="submit" class="btn btn-block btn-primary">Acessar</button>
                        <button id="recuperar_senha" type="button" class="btn btn-block btn-primary">Recuperar Senha</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>

<?php echo $this->classCall('Dwoo\Plugins\Functions\Plugininclude', 
                        array('login.js.html', null, null, null, '_root', null));
 /* end template body */
return $this->buffer . ob_get_clean();
?>