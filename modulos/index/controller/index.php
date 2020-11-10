<?php
namespace Controller;

class Index extends \Framework\Controller {

	protected $modulo = [
		'modulo'      => 'index',
		'name'        => 'Index',
		'table'       => 'index',
		'send'        => null,
		'localizador' => null,
		'seo'         => [
			'habilitado'    => false,
			'title_padrao'  => null,
			'robots_padrao' => null,
			'revise_padrao' => null,
		],
		'url'         => [
			'coluna'    => null,
			'metodo'    => null,
			'atualizar' => false
		]
	];

	public function index($parametros){
		// $this->view->render_plataforma('', '', 'index', ['site_cabecalho', 'site_rodape', 'post_item', 'sidebar', 'menu', 'seo']);
		$this->view->render('', $this->modulo['modulo'] . '/view/index');
	}
}