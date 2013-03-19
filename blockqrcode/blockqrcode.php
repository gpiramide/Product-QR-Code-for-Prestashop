<?php

if (!defined('_PS_VERSION_'))
	exit;

class BlockQRCode extends Module
{
	public function __construct()
	{
		$this->name = 'blockqrcode';
		$this->tab = 'front_office_features';
		$this->version = '1.0';
		$this->author = 'Leonel Roberto Perea Trejo';

		parent::__construct();

		$this->displayName = $this->l('Product QR Code');
		$this->description = $this->l('Display QR Code contains url of the product page. http://ileonel.com');
	}

	public function install()
	{
		return (parent::install() AND $this->registerHook('productActions'));
	}

	public function uninstall()
	{
		if (!parent::uninstall())
			return false;
		return true;
	}

	public function hookProductActions($params)
	{
	
		
		return $this->display(__FILE__, 'blockqrcode.tpl');
	}
		

}
