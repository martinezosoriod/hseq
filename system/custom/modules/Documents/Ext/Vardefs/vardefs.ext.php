<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2020-04-29 19:07:45
$dictionary["Document"]["fields"]["irw_processes_documents_1"] = array (
  'name' => 'irw_processes_documents_1',
  'type' => 'link',
  'relationship' => 'irw_processes_documents_1',
  'source' => 'non-db',
  'module' => 'irw_processes',
  'bean_name' => 'irw_processes',
  'vname' => 'LBL_IRW_PROCESSES_DOCUMENTS_1_FROM_IRW_PROCESSES_TITLE',
  'id_name' => 'irw_processes_documents_1irw_processes_ida',
);
$dictionary["Document"]["fields"]["irw_processes_documents_1_name"] = array (
  'name' => 'irw_processes_documents_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_IRW_PROCESSES_DOCUMENTS_1_FROM_IRW_PROCESSES_TITLE',
  'save' => true,
  'id_name' => 'irw_processes_documents_1irw_processes_ida',
  'link' => 'irw_processes_documents_1',
  'table' => 'irw_processes',
  'module' => 'irw_processes',
  'rname' => 'document_name',
);
$dictionary["Document"]["fields"]["irw_processes_documents_1irw_processes_ida"] = array (
  'name' => 'irw_processes_documents_1irw_processes_ida',
  'type' => 'link',
  'relationship' => 'irw_processes_documents_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_IRW_PROCESSES_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
);

?>