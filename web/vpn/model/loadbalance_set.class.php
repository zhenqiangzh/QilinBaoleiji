<?php
if(!defined('CAN_RUN')) {
	exit('Access Denied');
}

class loadbalance_set extends base_set {
	protected $table_name = 'loadbalance';
	protected $id_name = 'sid';

}
?>
