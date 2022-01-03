<?php

$config = [

    'add_page_rules' => [
        [
            'field' => 'title',
            'label' => 'Title',
            'rules' => 'trim|required'
        ],

    ],

    'add_profile_rules' => [
        [
            'field' => 'first_name',
            'label' => 'First Name',
            'rules' => 'trim|required'
        ],
        [
            'field' => 'last_name',
            'label' => 'Last Name',
            'rules' => 'trim|required'
        ],
        [
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'trim|required'
        ],
        [
            'field' => 'phone',
            'label' => 'Phone No',
            'rules' => 'trim|required'
        ],

        [
            'field' => 'city',
            'label' => 'City',
            'rules' => 'trim|required'
        ],
        [
            'field' => 'state',
            'label' => 'State',
            'rules' => 'trim|required'
        ],



    ],
    
    'edit_profile_rules' => [
        [
            'field' => 'first_name',
            'label' => 'First Name',
            'rules' => 'trim|required'
        ],
        [
            'field' => 'last_name',
            'label' => 'Last Name',
            'rules' => 'trim|required'
        ],
        [
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'trim|required'
        ],
        [
            'field' => 'phone',
            'label' => 'Phone No',
            'rules' => 'trim|required'
        ],

        [
            'field' => 'city',
            'label' => 'City',
            'rules' => 'trim|required'
        ],
        [
            'field' => 'state',
            'label' => 'State',
            'rules' => 'trim|required'
        ],



    ],
    'add_admin_rules' => [
        [
            'field' => 'name',
            'label' => 'Name',
            'rules' => 'trim|required'
        ],
       
        [
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'trim|required'
        ],
        [
            'field' => 'phone',
            'label' => 'Phone No',
            'rules' => 'trim|required'
        ],

        [
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'trim|required'
        ],




    ],
    'edit_admin_rules' => [
        [
            'field' => 'name',
            'label' => 'Name',
            'rules' => 'trim|required'
        ],
       
        [
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'trim|required'
        ],
        [
            'field' => 'phone',
            'label' => 'Phone No',
            'rules' => 'trim|required'
        ],

        [
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'trim|required'
        ],




    ],
    'add_contact_rules' => [
        [
            'field' => 'name',
            'label' => 'Name',
            'rules' => 'trim|required'
        ],
       
        [
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'trim|required'
            // 'rules' => 'trim|required|is_unique[manage_contact.email]'
        ],
        [
            'field' => 'message',
            'label' => 'Message',
            'rules' => 'trim|required'
        ],

     
        ],
        'edit_contact_rules' => [
            [
                'field' => 'name',
                'label' => 'Name',
                'rules' => 'trim|required'
            ],
           
            [
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'message',
                'label' => 'Message',
                'rules' => 'trim|required'
            ],
    
         
            ],
            'login_rules' => [
                [
                    'field' => 'email',
                    'label' => 'Email',
                    'rules' => 'trim|required|is_unique[user_details.email ]'
                ],
              
               
  ],
  'update_rules' => [
        [
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'trim|required'
        ],
    ],
  'role_rules' => [
        [
            'field' => 'Role',
            'label' => 'role',
            'rules' => 'trim|required'
        ],
    ],

];
