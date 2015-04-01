<?php

namespace urmaul\gravacage;

class Gravacage
{
    private $hash;
    
    private function __construct(){}
    
    /**
     * 
     * @return Gravacage
     */
    public static function forEmail($email)
    {
        $obj = new self();
        $obj->hash = md5($email);
        return $obj;
    }
    
    public function imageUrl($size = 80)
    {
        $params = array(
            's' => $size,
            'd' => $this->nicolasUrl($size),
        );
        
        return 'http://www.gravatar.com/avatar/?' . http_build_query($params);
    }
    
    public function nicolasUrl($size = 80)
    {
        return sprintf(
            'http://gravacage.urmaul.com/%s/%d.jpg',
            $size >= 100 ? 600 : 100,
            abs(crc32($this->hash)) % 952
        );
    }
}
