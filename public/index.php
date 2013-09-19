<?php 

require __DIR__.'/../bootstrap.php';

use Application\Controllers\PostController;

$r3->get('/', function() use ($twig) {
	return $twig->loadTemplate('index.html')->render(array());
});
$r3->get('/coordenador', function() use ($twig) {
	$template = $twig->loadTemplate('template.html');
	return $template->render(
		array(
			'name' => 'Coordenador',
			'style' => 'primary',
			'forms' => array(
				array(
					'name' => 'Auto Avaliação',
					'action' => 'coordenador/autoavaliacao',
					'icon' => 'icon-briefcase',
				),
				array(
					'name' => 'Avaliar Professores',
					'action' => 'coordenador/professor',
					'icon' => 'icon-user',
				)
			)
		)
	);
});
$r3->get('/professor', function() use ($twig) {
	$template = $twig->loadTemplate('template.html');
	return $template->render(
		array(
			'name' => 'Professor',
			'style' => 'info',
			'forms' => array(
				array(
					'name' => 'Avaliar Coordenadores',
					'action' => 'professor/coordenador',
					'icon' => 'icon-briefcase',
				)
			)
		)
	);
});
$r3->get('/aluno', function() use ($twig) {
	$template = $twig->loadTemplate('template.html');
	return $template->render(
		array(
			'name' => 'Aluno',
			'style' => 'warning',
			'forms' => array(
				array(
					'name' => 'Avaliar Professores',
					'action' => 'aluno/professor',
					'icon' => 'icon-user'
				),
				array(
					'name' => 'Avaliar Coordenadores',
					'action' => 'aluno/coordenador',
					'icon' => 'icon-briefcase'
				)
			)
		)
	);
});

// ACTIONS PARA OS COORDENADORES
$r3->get('/coordenador/autoavaliacao', function() {
	return 'Coordenador se Auto-avaliando';
});
$r3->get('/coordenador/professor', function() {
	return 'Coordenador Avaliando Professor';
});

// ACTIONS PARA OS PROFESSORES
$r3->get('/professor/coordenador', function() {
	return 'Professor Avaliando Coordenador';
});

// ACTIONS PARA OS ALUNOS
$r3->get('/aluno/coordenador', function() {
	return 'Aluno Avaliando Coordenador';
});

$r3->get('/aluno/professor', function() {
	return 'Alunoos Avaliando Professor';
});

// 
$r3->get('/hello', function() {
    return 'Hello from Path';
});

$r3->any('/post/*', new PostController);