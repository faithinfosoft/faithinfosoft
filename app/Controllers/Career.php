<?php

namespace App\Controllers;

use App\Models\CareerModel;
use CodeIgniter\Controller;

class Career extends BaseController
{
    protected $careerModel;

    public function __construct()
    {
        $this->careerModel = new CareerModel();
    }

    /**
     * Display the career application form
     */
    public function index()
    {
        return view('careers/form');
    }

    /**
     * Handle career form submission and save to MySQL
     */
    public function submit()
    {
        // Validate form input
        $rules = [
            'full_name'  => 'required|min_length[3]|max_length[255]',
            'email'      => 'required|valid_email|max_length[255]',
            'phone'      => 'permit_empty|max_length[20]',
            'position'   => 'required|max_length[255]',
            'experience' => 'permit_empty|max_length[100]',
            'message'    => 'permit_empty',
        ];

        if (! $this->validate($rules)) {
            return view('careers/form', [
                'errors'     => $this->validator->getErrors(),
                'old_input'  => $this->request->getPost(),
            ]);
        }

        // Handle resume file upload
        $resumePath = null;
        $resumeFile = $this->request->getFile('resume');

        if ($resumeFile && $resumeFile->isValid() && ! $resumeFile->hasMoved()) {
            $allowedTypes = ['pdf', 'doc', 'docx'];
            $ext = strtolower($resumeFile->getClientExtension());

            if (! in_array($ext, $allowedTypes)) {
                return view('careers/form', [
                    'errors'    => ['resume' => 'Only PDF, DOC, DOCX files are allowed.'],
                    'old_input' => $this->request->getPost(),
                ]);
            }

            $newName = $resumeFile->getRandomName();
            $resumeFile->move(WRITEPATH . 'uploads/resumes/', $newName);
            $resumePath = 'uploads/resumes/' . $newName;
        }

        // Save to database
        $data = [
            'full_name'  => $this->request->getPost('full_name'),
            'email'      => $this->request->getPost('email'),
            'phone'      => $this->request->getPost('phone'),
            'position'   => $this->request->getPost('position'),
            'experience' => $this->request->getPost('experience'),
            'message'    => $this->request->getPost('message'),
            'resume'     => $resumePath,
            'status'     => 'pending',
        ];

        if ($this->careerModel->insert($data)) {
            return redirect()->to('/career/success');
        }

        return view('careers/form', [
            'errors'    => ['general' => 'Something went wrong. Please try again.'],
            'old_input' => $this->request->getPost(),
        ]);
    }

    /**
     * Success page after form submission
     */
    public function success()
    {
        return view('careers/success');
    }

    /**
     * Admin: list all career applications
     */
    public function list()
    {
        $careers = $this->careerModel->orderBy('created_at', 'DESC')->findAll();

        return view('careers/list', ['careers' => $careers]);
    }
}
