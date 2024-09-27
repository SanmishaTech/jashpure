<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\StrictRules\CreditCardRules;
use CodeIgniter\Validation\StrictRules\FileRules;
use CodeIgniter\Validation\StrictRules\FormatRules;
use CodeIgniter\Validation\StrictRules\Rules;

class Validation extends BaseConfig
{
    // --------------------------------------------------------------------
    // Setup
    // --------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public array $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
        \Webly\Core\Validation\WeblyRules::class
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public array $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    // --------------------------------------------------------------------
    // Rules
    // --------------------------------------------------------------------
    
    //--------------------------------------------------------------------
    // Rules For Registration
    //--------------------------------------------------------------------
    public $registration = [
        'name' => [
            'label' =>  'Name',
            'rules' => 'required|max_length[100]',
        ],
        'email' => [
            'label' =>  'Auth.email',
            'rules' => 'required|max_length[254]|valid_email|is_unique[auth_identities.secret]',
        ],
        'password' => [
            'label' =>  'Auth.password',
            'rules' => 'required|strong_password',
        ],
        'password_confirm' => [
            'label' =>  'Auth.passwordConfirm',
            'rules' => 'required|matches[password]',
        ],
    ]; 

    public $createUser = [
        'name' => [
            'label' =>  'Name',
            'rules' => 'required|max_length[100]',
        ],        
        'email' => [
            'label' =>  'Auth.email',
            'rules' => 'required|max_length[254]|valid_email|is_unique[auth_identities.secret]',
        ],
        'password' => [
            'label' =>  'Auth.password',
            'rules' => 'strong_password',
        ],
        'group' => [
            'label' =>  'Please select atleast 1 Group',
            'rules' => 'required',
        ]
    ];     
    
    public $updateUser = [
        'name' => [
            'label' =>  'Name',
            'rules' => 'required|max_length[100]',
        ],        
        'email' => [
            'label' =>  'Auth.email',
            'rules' => 'required|max_length[254]|valid_email|is_unique[auth_identities.secret, user_id, {id}]',
        ],
        'password' => [
            'label' =>  'Auth.password',
            'rules' => 'strong_password',
        ],
        'group' => [
            'label' =>  'Please select atleast 1 Group',
            'rules' => 'required',
        ]
    ];         
}
