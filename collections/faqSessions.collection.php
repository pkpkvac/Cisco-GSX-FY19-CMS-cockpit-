<?php
 return array (
  'name' => 'faqSessions',
  'label' => 'FAQ - Sessions',
  '_id' => 'faqSessions5b1eca86f1a0a',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'title',
      'label' => 'title',
      'type' => 'text',
      'default' => '',
      'info' => 'Question',
      'group' => '',
      'localize' => false,
      'options' => 
      array (
      ),
      'width' => '1-1',
      'lst' => true,
      'acl' => 
      array (
      ),
      'required' => true,
    ),
    1 => 
    array (
      'name' => 'body',
      'label' => 'body',
      'type' => 'wysiwyg',
      'default' => '',
      'info' => 'Answer',
      'group' => '',
      'localize' => false,
      'options' => 
      array (
      ),
      'width' => '1-1',
      'lst' => true,
      'acl' => 
      array (
      ),
      'required' => true,
    ),
    2 => 
    array (
      'name' => 'pageId',
      'label' => 'pageId',
      'type' => 'text',
      'default' => '',
      'info' => 'Unique ID',
      'group' => '',
      'localize' => false,
      'options' => 
      array (
      ),
      'width' => '1-1',
      'lst' => true,
      'acl' => 
      array (
      ),
      'required' => true,
    ),
  ),
  'sortable' => true,
  'in_menu' => false,
  '_created' => 1528744582,
  '_modified' => 1528744669,
  'color' => '#A0D468',
  'acl' => 
  array (
  ),
  'rules' => 
  array (
    'create' => 
    array (
    ),
    'read' => 
    array (
    ),
    'update' => 
    array (
    ),
    'delete' => 
    array (
    ),
  ),
  'icon' => 'audio.svg',
);