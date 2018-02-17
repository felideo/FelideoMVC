<?php
/* template head */
if (class_exists('Dwoo\Plugins\Functions\PluginInclude')===false)
	$this->getLoader()->loadPlugin('PluginInclude');
/* end template head */ ob_start(); /* template body */ ;
echo $this->classCall('Dwoo\Plugins\Functions\Plugininclude', 
                        array('public/fineuploader/templates/template.html', null, null, null, '_root', null));?>

<?php echo $this->classCall('Dwoo\Plugins\Functions\Plugininclude', 
                        array('modulos/'.(isset($this->scope["modulo"]["modulo"]) ? $this->scope["modulo"]["modulo"]:null).'/view/form/clones/autor.html', null, null, null, '_root', null));?>

<?php echo $this->classCall('Dwoo\Plugins\Functions\Plugininclude', 
                        array('modulos/'.(isset($this->scope["modulo"]["modulo"]) ? $this->scope["modulo"]["modulo"]:null).'/view/form/clones/orientador.html', null, null, null, '_root', null));?>


<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Dados do Trabalho</h3>
        </div>
        <div class="panel-body">
            <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <label>Titulo</label>
                        <input type="text" class="form-control" name="<?php echo $this->scope["modulo"]["modulo"];?>[trabalho][titulo]" value="">
                    </div>

                    <!-- <div class="form-group">
                        <label>Idioma</label>
                        <br>
                        <input id="idioma" name="<?php echo $this->scope["modulo"]["modulo"];?>[idioma]" style="width: 100%">
                    </div> -->

                    <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <label>Ano</label>
                        <input type="text" class="form-control" name="<?php echo $this->scope["modulo"]["modulo"];?>[trabalho][ano]" value="">
                    </div>

                    <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <label>Curso</label>
                        <br>
                        <input id="curso" name="<?php echo $this->scope["modulo"]["modulo"];?>[trabalho][id_curso]" style="width: 100%">
                    </div>

                    <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <label>Campus</label>
                        <br>
                        <input id="campus" name="<?php echo $this->scope["modulo"]["modulo"];?>[trabalho][id_campus]" style="width: 100%">
                    </div>

                    <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <label>Palavras Chave</label>
                        <br>
                        <input id="palavra_chave" name="<?php echo $this->scope["modulo"]["modulo"];?>[palavras_chave]" style="width: 100%">
                    </div>

                    <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <label>Resumo</label>
                        <textarea class="form-control" rows="3" name="<?php echo $this->scope["modulo"]["modulo"];?>[trabalho][resumo]"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Arquivos</h3>
        </div>
        <div class="panel-body">
            <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div id="upload_trabalho_trigger"></div>
                    </div>
                    <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div id="upload_trabalho" class="row">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    $('#idioma').select2({
        placeholder: $(this).data('placeholder'),
        multiple: false,
        minimumInputLength: 2,
        ajax: {
            type: 'POST',
            url: "/idioma/buscar_idioma_select2",
            dataType: 'json',
            data: function(term) {
                return {
                    busca: {
                        nome: term,
                        page_limit: 10,
                        cadastrar_busca: true
                    }
                };
            },
            results: function(data) {
                return {
                    results: data
                };
            }
        },
        formatResult: function(object) {
            return object.idioma
        },
        formatSelection: function(object) {
            return object.idioma.replace_all('Cadastrar ', '')
        }
    });

    $('#palavra_chave').select2({
        placeholder: $(this).data('placeholder'),
        multiple: true,
        minimumInputLength: 2,
        ajax: {
            type: 'POST',
            url: "/palavra_chave/buscar_palavra_chave_select2",
            dataType: 'json',
            data: function(term) {
                return {
                    busca: {
                        nome: term,
                        page_limit: 10,
                        cadastrar_busca: true
                    }
                };
            },
            results: function(data) {
                return {
                    results: data
                };
            }
        },
        formatResult: function(object) {
            console.log(object);
            return object.palavra_chave
        },
        formatSelection: function(object) {
            return object.palavra_chave.replace_all('Cadastrar ', '')
        }
    });

    $('#curso').select2({
        placeholder: $(this).data('placeholder'),
        multiple: false,
        minimumInputLength: 2,
        ajax: {
            type: 'POST',
            url: "/curso/buscar_curso_select2",
            dataType: 'json',
            data: function(term) {
                return {
                    busca: {
                        nome: term,
                        page_limit: 10,
                        cadastrar_busca: true
                    }
                };
            },
            results: function(data) {
                return {
                    results: data
                };
            }
        },
        formatResult: function(object) {
            console.log(object);
            return object.curso
        },
        formatSelection: function(object) {
            return object.curso.replace_all('Cadastrar ', '')
        }
    });

    $('#campus').select2({
        placeholder: $(this).data('placeholder'),
        multiple: false,
        minimumInputLength: 2,
        ajax: {
            type: 'POST',
            url: "/campus/buscar_campus_select2",
            dataType: 'json',
            data: function(term) {
                return {
                    busca: {
                        nome: term,
                        page_limit: 10,
                        cadastrar_busca: true
                    }
                };
            },
            results: function(data) {
                return {
                    results: data
                };
            }
        },
        formatResult: function(object) {
            console.log(object);
            return object.campus
        },
        formatSelection: function(object) {
            return object.campus.replace_all('Cadastrar ', '')
        }
    });

    var trabalho_manualUploader = new qq.FineUploader({
        element: document.getElementById('upload_trabalho_trigger'),
        validation: {
            allowedExtensions: ["pdf"],
            sizeLimit: 50000000
        },
        template: 'qq-template-manual-trigger',
        request: {
            endpoint: "/ajax_upload/upload/",
        },
        thumbnails: {
            placeholders: {
                waitingPath: '/public/fineuploader/placeholders/waiting-generic.png',
                notAvailablePath: '/public/fineuploader/placeholders/not_available-generic.png'
            }
        },
        uploadSuccess: {
            endpoint: '/s3/success'
        },
        autoUpload: true,
        debug: true,
        multiple: false,
        callbacks: {
            onSubmit: function (id, fileName) {
                var local = {
                    local: 'trabalhos'
                }

                this.setParams(local);
            },
            onComplete: function(id, name, retorno, maybeXhr) {
                console.log(retorno);

                // $('#id_arquivo').val(retorno['id']);

                input = '<div>\n\t\t'
                 + '<input type="text" value="' + retorno['id'] + '" name="trabalho[arquivo][' + $("#upload_trabalho > div").length + ']" />\n\t\t'
                 + '</div>\n';

                 $('#upload_trabalho').append(input);

            }
        }


    });

    qq($('#upload_trabalho_trigger #trigger-upload').on('click', function(){
        trabalho_manualUploader.uploadStoredFiles();
    }));
</script>


<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>