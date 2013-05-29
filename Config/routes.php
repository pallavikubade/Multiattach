<?php
CroogoRouter::connect('/fl/:dimension/:filename', 									array('plugin' => 'Multiattach', 'controller' => 'Multiattach', 'action' => 'displayFile',				'admin'=>false),array('pass'=>array('filename','dimension')));
CroogoRouter::connect('/admin/Multiattach/add/:node', 		 						array('plugin' => 'Multiattach', 'controller' => 'Multiattach', 'action' => 'add',	 					'admin'=>true ),array('pass'=>array('node')));
CroogoRouter::connect('/admin/Multiattach/add_web/:node', 		 					array('plugin' => 'Multiattach', 'controller' => 'Multiattach', 'action' => 'add_web',	 				'admin'=>true ),array('pass'=>array('node')));
CroogoRouter::connect('/admin/Multiattach/deleteFile/:attachment',					array('plugin' => 'Multiattach', 'controller' => 'Multiattach', 'action' => 'deleteFile',				'admin'=>true ),array('pass'=>array('attachment')));
CroogoRouter::connect('/admin/Multiattach/AjaxGetAttachmentJson/:node',				array('plugin' => 'Multiattach', 'controller' => 'Multiattach', 'action' => 'AjaxGetAttachmentJson',	'admin'=>true ),array('pass'=>array('node')));
CroogoRouter::connect('/admin/Multiattach/AjaxKillAttachmentJson/:attachment/:node',array('plugin' => 'Multiattach', 'controller' => 'Multiattach', 'action' => 'AjaxKillAttachmentJson',	'admin'=>true ),array('pass'=>array('attachment','node')));
CroogoRouter::connect('/admin/Multiattach/PostCommentAttachmentJson',				array('plugin' => 'Multiattach', 'controller' => 'Multiattach', 'action' => 'PostCommentAttachmentJson','admin'=>true ));
