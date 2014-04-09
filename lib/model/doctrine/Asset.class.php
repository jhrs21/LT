<?php

/**
 * Asset
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    elperro
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Asset extends BaseAsset
{    
    public function asArray($with_promos = false) 
    {
        $thumb = $this->getThumb() ? $this->getThumb() : $this->getAffiliate()->getThumb();
        $logo = $this->getLogo() ? $this->getLogo() : $this->getAffiliate()->getLogo();
        $bigLogo = $this->getBigLogo() ? $this->getBigLogo() : $this->getAffiliate()->getLogo();
        $category = $this->getCategory();
        
        $asset = array(
                'id' => $this->getAlphaId(),
                'name' => $this->getName(),
                'description' => $this->getDescription(),
                'thumb' => sfConfig::get('app_main_domain').'/uploads/'.$thumb,
                'logo' => sfConfig::get('app_main_domain').'/uploads/'.$logo,
                'big_logo' => sfConfig::get('app_main_domain').'/uploads/'.$bigLogo,
                'affiliate_id' => $this->getAffiliate()->getAlphaId(),
                'category' => array($category->getName(), $category->getAlphaId())
            );
        
        foreach ($this->getCategories() as $c) {
            $asset['categories'][$c->getAlphaId()] = $c->asArray();
        }
        
        if($this->getAssetType() == 'place')
        {
            $location = $this->getLocation()->getFirst();
            $asset['location'] = array(
                    'address' => $location->getAddress(),
                    'lat' => $location->getLatitude(),
                    'long' => $location->getLongitude()
                );
            if($this->contains('distance')){
                $asset['location']['distance'] = (string) $this->get('distance');
            }
        }
        
        if($this->getAssetType() == 'brand'){            
            $asset['pos'] = array();
            
            foreach ($this->getLocation() as $location) {
                $asset['pos'][] = array(
                        'pos_name' => $location->getName(),
                        'pos_address' => $location->getAddress(),
                        'pos_lat' => $location->getLatitude(),
                        'pos_long' => $location->getLongitude()
                    );
            }
        }
        
        if($with_promos){
            $asset['promos'] = array();
            foreach ($this->getPromos(true) as $promo) {
                $asset['promos'][$promo->getAlphaId()] = $promo->asArray(false);
            }
        }
        
        return $asset;
    }
    
    public function hasType($type)
    {
        return strcasecmp($this->getAssetType(), $type) == 0;
    }
    
    public function isBrand()
    {
        return $this->hasType('brand');
    }
    
    public function isPlace()
    {
        return $this->hasType('place');
    }
    
    public function getPromos($onlyActive = false)
    {
        return Doctrine::getTable('Promo')->retrieveAssetPromos($this->id, $onlyActive);
    }

    public function save(Doctrine_Connection $conn = null)
    {
        if(!$this->getHash()){
            $this->setHash(hash('sha256',time().rand(11111, 99999)));
        }
        
        if (!$this->getAlphaId()){
            $this->setAlphaId(Util::gen_uuid($this->getHash()));
        }
        
        return parent::save($conn);
    }
}