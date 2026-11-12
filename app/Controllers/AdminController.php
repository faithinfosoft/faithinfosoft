<?php

namespace App\Controllers;

use App\Models\ContactModel;
use App\Models\CareerModel;

class AdminController extends BaseController
{
    /**
     * Show the login form.
     */
    public function login()
    {
        if (session()->get('admin_logged_in')) {
            return redirect()->to(base_url('admin/dashboard'));
        }

        return view('admin/login');
    }

    /**
     * Authenticate admin credentials.
     */
    public function loginSubmit()
    {
        if (!$this->request->is('post')) {
            return redirect()->to(base_url('admin/login'));
        }

        $rules = [
            'email'    => 'required|valid_email',
            'password' => 'required|min_length[6]',
        ];

        if (!$this->validate($rules)) {
            session()->setFlashdata('error', 'Please enter a valid email and password.');
            return redirect()->to(base_url('admin/login'))->withInput();
        }

        $email    = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $db = \Config\Database::connect();
        $admin = $db->table('admins')
            ->where('email', $email)
            ->get()
            ->getRowArray();

        if ($admin && password_verify($password, $admin['password'])) {
            session()->set([
                'admin_logged_in' => true,
                'admin_id'        => $admin['id'],
                'admin_name'      => $admin['name'],
                'admin_email'     => $admin['email'],
            ]);
            return redirect()->to(base_url('admin/dashboard'));
        }

        session()->setFlashdata('error', 'Invalid email or password.');
        return redirect()->to(base_url('admin/login'))->withInput();
    }

    /**
     * Admin dashboard.
     */
    public function dashboard()
    {
        $contactModel = new ContactModel();
        $careerModel  = new CareerModel();

        $data = [
            'totalContacts' => $contactModel->countAllResults(),
            'totalCareers'  => $careerModel->countAllResults(),
            'recentContacts' => $contactModel->orderBy('created_at', 'DESC')->findAll(5),
            'recentCareers'  => $careerModel->orderBy('created_at', 'DESC')->findAll(5),
        ];

        return view('admin/dashboard', $data);
    }

    /**
     * List all contact messages.
     */
    public function contacts()
    {
        $contactModel = new ContactModel();
        $data = [
            'contacts' => $contactModel->orderBy('created_at', 'DESC')->findAll(),
        ];

        return view('admin/contacts', $data);
    }

    /**
     * View a single contact message.
     */
    public function contactView($id)
    {
        $contactModel = new ContactModel();
        $contact = $contactModel->find($id);

        if (!$contact) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('admin/contact_view', ['contact' => $contact]);
    }

    /**
     * Delete a contact message.
     */
    public function contactDelete($id)
    {
        $contactModel = new ContactModel();
        $contactModel->delete($id);

        session()->setFlashdata('success', 'Contact message deleted.');
        return redirect()->to(base_url('admin/contacts'));
    }

    /**
     * List all career applications.
     */
    public function careers()
    {
        $careerModel = new CareerModel();
        $data = [
            'careers' => $careerModel->orderBy('created_at', 'DESC')->findAll(),
        ];

        return view('admin/careers', $data);
    }

    /**
     * View a single career application.
     */
    public function careerView($id)
    {
        $careerModel = new CareerModel();
        $career = $careerModel->find($id);

        if (!$career) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('admin/career_view', ['career' => $career]);
    }

    /**
     * Delete a career application.
     */
    public function careerDelete($id)
    {
        $careerModel = new CareerModel();
        $careerModel->delete($id);

        session()->setFlashdata('success', 'Career application deleted.');
        return redirect()->to(base_url('admin/careers'));
    }

    /**
     * Logout.
     */
    public function logout()
    {
        session()->remove(['admin_logged_in', 'admin_id', 'admin_name', 'admin_email']);
        session()->setFlashdata('success', 'You have been logged out.');
        return redirect()->to(base_url('admin/login'));
    }
}
