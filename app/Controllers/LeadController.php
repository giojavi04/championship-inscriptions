<?php

namespace App\Controllers;

use App\Entities\Lead;
use Core\Controllers\EmailController  as Email;

class LeadController extends BaseController
{
    /**
     * Validations rules to $_POST data
     * @var [array]
     */
    protected $rules = [
            'required' => [
                ['name'],
                ['last_name'],
                ['email']
            ],
            'lengthMin' => [
                ['name', 3],
            ],

            'email' => 'email',
        ];

    /**
     * Input labels
     * @var array
     */
    protected $labels = [
        'name'  => 'Nombre',
        'last_name' => 'Apellido',
        'name_team' => 'Nombre del equipo',
        'email' => 'Email',
        'phone' => 'Teléfono',
        'img_inscription' => 'Imágen del depósito',
        'message' => 'Comentario'
    ];


    public function store()
    {
        $errors = $this->validate($_POST, $this->rules, $this->labels);

        if ($errors) {
            return view('home.twig', compact('errors'));
        }

        $request = (object) cleanRequest($_POST);

        $lead            = new Lead();
        $lead->name      = $request->name;
        $lead->last_name = $request->last_name;
        $lead->name_team = $request->name_team;
        $lead->email     = $request->email;
        $lead->phone     = $request->phone;
        // $lead->img_inscription = $request->img_inscription;
        $lead->message   = $request->message;
        $lead->created_at      = date('Y-m-d H:i:s');

        if (!$lead->isRegistered($request->email)) {
            $lead->save();
            
            Email::send($lead->email, getenv('LEAD_EMAIL_SUBJECT'), 'lead', $lead);
            Email::send(getenv('ADMIN_EMAIL'), getenv('ADMIN_EMAIL_SUBJECT'), 'admin', $lead);
        }


        redirect('thanks');
    }
}
