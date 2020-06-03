<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2020-06-03 16:57:26
$dictionary["am_project_supports"]["fields"]["project_am_project_supports_1"] = array (
  'name' => 'project_am_project_supports_1',
  'type' => 'link',
  'relationship' => 'project_am_project_supports_1',
  'source' => 'non-db',
  'module' => 'Project',
  'bean_name' => 'Project',
  'vname' => 'LBL_PROJECT_AM_PROJECT_SUPPORTS_1_FROM_PROJECT_TITLE',
  'id_name' => 'project_am_project_supports_1project_ida',
);
$dictionary["am_project_supports"]["fields"]["project_am_project_supports_1_name"] = array (
  'name' => 'project_am_project_supports_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PROJECT_AM_PROJECT_SUPPORTS_1_FROM_PROJECT_TITLE',
  'save' => true,
  'id_name' => 'project_am_project_supports_1project_ida',
  'link' => 'project_am_project_supports_1',
  'table' => 'project',
  'module' => 'Project',
  'rname' => 'name',
);
$dictionary["am_project_supports"]["fields"]["project_am_project_supports_1project_ida"] = array (
  'name' => 'project_am_project_supports_1project_ida',
  'type' => 'link',
  'relationship' => 'project_am_project_supports_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_PROJECT_AM_PROJECT_SUPPORTS_1_FROM_AM_PROJECT_SUPPORTS_TITLE',
);

?>