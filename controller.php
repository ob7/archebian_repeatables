<?php
namespace Concrete\Package\ArchebianRepeatables;

use Package;
use BlockType;

class Controller extends Package
{
    protected $pkgHandle = 'archebian_repeatables';
    protected $appVersionRequired = '5.7.5.8';
    protected $pkgVersion = '0.9';

    public function getPackageName()
    {
        return t('Archebian Repeatables');
    }

    public function getPackageDescription()
    {
        return t('Toggleable repeatable elements such as images or links.');
    }

    public function install()
    {
        $pkg = parent::install();
		$bt = BlockType::getByHandle('archebian_repeatables');
		if (!is_object($bt)) {
			BlockType::installBlockTypeFromPackage('archebian_repeatables', $pkg);
		}
    }
}
