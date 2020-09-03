<?php

// Register Custom Post Type Equipe
function create_equipe_cpt() {

	$labels = array(
		'name' => 'Equipes',
		'singular_name' => 'Equipe',
		'menu_name' => 'Equipes',
		'name_admin_bar' => 'Equipe',
		'archives' => 'Equipe Archives',
		'attributes' => 'Equipe Attributes',
		'parent_item_colon' => 'Parent Equipe:',
		'all_items' => 'Todas Equipes',
		'add_new_item' => 'Nova Equipe',
		'add_new' => 'Adicionar nova',
		'new_item' => 'Nova Equipe',
		'edit_item' => 'Editar Equipe',
		'update_item' => 'Atualizar Equipe',
		'view_item' => 'Ver Equipe',
		'view_items' => 'Ver Equipes',
		'search_items' => 'Pesquisar Equipe',
		'not_found' => 'Não encontrada',
		'not_found_in_trash' => 'Não encontrada no lixo',
		'featured_image' => 'Imagem destacada',
		'set_featured_image' => 'Adicionar imagem destacada',
		'remove_featured_image' => 'Remover imagem destacada',
		'use_featured_image' => 'Usar como imagem destacada',
		'insert_into_item' => 'Inserir em equipe',
		'uploaded_to_this_item' => 'Uploaded to this Equipe',
		'items_list' => 'Equipes list',
		'items_list_navigation' => 'Equipes list navigation',
		'filter_items_list' => 'Filter Equipes list',
	);
	$rewrite = array(
		'slug' => 'equipe',
		'with_front' => true,
		'pages' => false,
		'feeds' => false,
	);
	$args = array(
		'label' => 'Equipe',
		'description' => '',
		'labels' => $labels,
		'supports' => array('title', 'editor', 'thumbnail'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
		'rewrite' => $rewrite,
	);
	register_post_type( 'equipe', $args );

}

add_action( 'init', 'create_equipe_cpt', 0 );