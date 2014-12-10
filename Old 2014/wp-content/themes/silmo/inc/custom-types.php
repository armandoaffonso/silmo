<?php
add_action('init', 'create_post_types');
function create_post_types()
{
	register_post_type('project', array('labels'=>array('name'=> __('Projetos'), 'singular_name'=>__('Projeto')), 'public'=>true, 'has_archive'=>true));
	register_post_type('screen', array('labels'=>array('name'=> __('Telas'), 'singular_name'=>__('Tela')), 'public'=>true, 'has_archive'=>true));
}//create_post_types