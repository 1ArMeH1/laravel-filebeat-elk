<?php

namespace App\Trait;


trait WithHandyTools
{
    public function GetFullName()
    {
        return __CLASS__;
    }

    public function GetShortName()
    {
        $parts = explode("\\", __CLASS__);
        return $parts[sizeof($parts) - 1];
    }

    public function GetName($locale = null)
    {
        try {
            return __($this->GetTranslateKey(), [], $locale);
        } catch (\Throwable $th) {
            //throw $th;
        }
        return $this->GetShortName();
    }

    public static function GetFullNameKey()
    {
        return str_replace('\\', '_', __CLASS__);
    }

    public function Milliseconds()
    {
        $mt = explode(' ', microtime());
        return intval($mt[1] * 1E3) + intval(round($mt[0] * 1E3));
    }
}
