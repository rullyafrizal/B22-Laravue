<?php

use Illuminate\Support\Str;
use Illuminate\Contracts\Auth\MustVerifyEmail;

trait SetupUUID
{
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            if(!$model->getKey()){
                $model->{$model->getKeyName()} = (string) Str::uuid();
            }
        });
    }

    public function getIncrementing()
    {
        return false;
    }

    public function getKeyType()
    {
        return 'string';
    }
}
