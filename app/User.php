<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use QCod\ImageUp\HasImageUploads;

class User extends Authenticatable
{
    use Notifiable;
    use HasImageUploads;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom',
        'prenom',
        'username',
        'telephone1',
        'telephone2',
        'email',
        'password',
        'photo',
        'type'
    ];

    public function routeNotificationForTelegram()
    {
        return "723709530";
    }

    public function routeNotificationForChatAPI()
    {
        return $this->phone;
    }

    protected $imagesUploadDisk = 'local';
     
    protected $imagesUploadPath = 'uploads';
     
    protected $autoUploadImages = true;
    
    protected static $imageFields = [
        'photo' => [
            
            'width' => 250,
            
            
            'height' => 250,
            
           
            'crop' => true,
            
            
            'disk' => 'public',
            
        
            'path' => 'avatars',
            
            
            'placeholder' => '/images/avatar-placeholder.svg',
            
            
            'rules' => 'image|max:2000',
            
            
            'auto_upload' => false,
            
            
            'file_input' => 'photo',
            
            
            'before_save' => BlurFilter::class,
            
            
            'after_save' => CreateWatermarkImage::class
        ],
        'cover' => [
            //...    
        ]
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function articles()
    {
        return $this->hasMany(Articles::class);
    }
}
