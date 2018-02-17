<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0; text-align: center;">
            <div class="container">
                <small class="copyright pull-left">Copyright © 2016 - 2017 | <a href="http://felideo.com.br" target="_blank">Felideo (Diego Pires)</a> - <a href="https://github.com/felideo" target="_blank">Github</a> - <a href="http://lattes.cnpq.br/4155283413710538" target="_blank">Lattes</a></small>
            </div>
        </nav>
     </div>

    <script type="text/javascript">
        <?php if (((isset($this->scope["_SESSION"]["alertas"]) ? $this->scope["_SESSION"]["alertas"]:null) !== null)) {
?>
            <?php echo $this->scope["_SESSION"]["alertas"];?>
        <?php 
}?>

        <?php if (((isset($this->scope["_SESSION"]["notificacoes"]) ? $this->scope["_SESSION"]["notificacoes"]:null) !== null)) {
?>
            <?php 
$_fh0_data = (isset($this->scope["_SESSION"]["notificacoes"]) ? $this->scope["_SESSION"]["notificacoes"]:null);
if ($this->isTraversable($_fh0_data) == true)
{
	foreach ($_fh0_data as $this->scope['notificacao'])
	{
/* -- foreach start output */
?>
                <?php echo $this->scope["notificacao"];?>
            <?php 
/* -- foreach end output */
	}
}?>
        <?php 
}?>

        $(window).load(function(){
            limpar_alertas_ajax();
            limpar_notificacoes_ajax();
        });
    </script>
</body>
</html><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>