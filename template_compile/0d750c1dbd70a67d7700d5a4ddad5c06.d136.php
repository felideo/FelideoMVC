<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 margin-bottom-md">
        <div class="panel panel-default">
            <div class="panel-heading">
                <?php if (((isset($this->scope["cadastro"]) ? $this->scope["cadastro"] : null) !== null)) {
?>Editar <?php echo $this->scope["modulo"]["send"];

}
elseif (! empty($this->scope["lazy_view"])) {
?>Visualizar <?php echo $this->scope["modulo"]["send"];

}
else {
?>Cadastrar <?php echo $this->scope["modulo"]["send"];

}?>

            </div>
            <div class="panel-body">
                <form method="post" class="lazy_view"
                    <?php if (((isset($this->scope["cadastro"]) ? $this->scope["cadastro"] : null) !== null)) {
?>

                        action="/<?php echo $this->scope["modulo"]["modulo"];?>/update/<?php echo $this->scope["cadastro"]["id"];?>"
                    <?php 
}
else {
?>

                        action="/<?php echo $this->scope["modulo"]["modulo"];?>/create"
                    <?php 
}?>

                >
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>