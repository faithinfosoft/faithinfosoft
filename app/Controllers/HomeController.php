<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function index(): string
    {
        $meta = [
            'title'       => "Faith Infosoft-Software, Web & App Development Company",
            'keywords'    => "Faith Infosoft is the best in software, web, mobile app development company in Kottayam,  Kerala, ERP development services, custom software development, website development services, web application development, Android app development, iOS app development, IT services company , responsive web design, ecommerce website development, SEO services",
            'description' => "Faith Infosoft is the leading software, web and mobile app development company in Kottayam, Kerala, delivering ERP and custom digital solutions for businesses"
        ];

        if ($code = $this->request->getGet('code')) {
            $db = \Config\Database::connect();
            $builder = $db->table('geo');
            $builder->insert([
                'code'       => $code,
                'date'       => date('Y-m-d'),
                'ip_address' => $this->request->getIPAddress(),
            ]);
        }
        
        return view('web_page/home', ['meta' => $meta]);
    }

    public function about(): string
    {
        $meta = [
            'title'       => "About Faith Infosoft - Leading Software Company in Kottayam",
            'keywords'    => "Leading web development design services web application development Android  iOS mobile app development  company ERP software solutions ecommerce website development SEO services digital marketing company in Kottayam responsive web design custom software development IT solutions company software company in Kottayam Kerala digital solutions provider business software development search engine optimization services",
            'description' => "Best custom software, web and mobile app ios app development company in Kottayam, Kerala, offering ERP solutions, SEO and digital marketing services."
        ];
        return view('web_page/about', ['meta' => $meta]);
    }

    public function services(): string
    {
        $meta = [
            'title'       => "Faith Infosoft affordable Software  web development services",
            'keywords'    => "Affordable custom software development company responsive website design services professional website developers complete web and app development services custom business software web hosting services domain registration services payment gateway integration company in Kottayam Kerala",
            'description' => "Explore the wide range of services offered by Faith Infosoft, from custom software to high-end mobile applications."
        ];
        return view('web_page/services', ['meta' => $meta]);
    }

    public function portfolio(): string
    {
        $meta = [
            'title'       => "Our Portfolio - Recent Projects & Case Studies",
            'keywords'    => "faith infosoft portfolio, recent projects, web design showcase",
            'description' => "Check out our latest work and see how we've helped businesses achieve their digital goals."
        ];
        return view('web_page/portfolio', ['meta' => $meta]);
    }

    public function contact(): string
    {
        $meta = [
            'title'       => "Contact Us - Faith Infosoft Kottayam",
            'keywords'    => "contact faith infosoft, kottayam software company address, get a quote",
            'description' => "Get in touch with Faith Infosoft for your next big project. We are here to help you scale your business."
        ];
        return view('web_page/contact', ['meta' => $meta]);
    }
     public function webDevelopment()
    {
        $meta = [
            'title'       => "Professional Web Development Services for All Industries",
            'keywords'    => "web development company in Kottayam, enterprise web solutions, ecommerce development Kottayam, Laravel development India",
            'description' => "Leading web development company in Kottayam offering responsive websites and enterprise applications."
        ];
        return view('web_page/web_developmnet', ['meta' => $meta]);
    }

    public function appDevelopment()
    {
        $meta = [
            'title'       => "App Development Company in Kottayam | Android & iOS Apps",
            'keywords'    => "app development company Kottayam, android app development Kerala, iOS app development India, mobile app developers Kottayam",
            'description' => "Faith Infosoft is a leading mobile app development company in Kottayam, Kerala, offering custom Android and iOS app development services for businesses."
        ];
        return view('web_page/app-development', ['meta' => $meta]);
    }

    public function softwareDevelopment()
    {
        $meta = [
            'title'       => "Custom  Software Development Company in Kottayam , Kerala",
            'keywords'    => "software development company in Kottayam payroll software development custom software development ecommerce software  billing software in Kottayam Kerala inventory management software development secure software development services accounting software development services Kottayam Kerala",
            'description' => "Faith Infosoft leading software development company in Kottayam, Kerala, offering custom ERP, business software and enterprise application development services"
        ];
        return view('web_page/software-development', ['meta' => $meta]);
    }

    public function digitalMarketing()
    {
        $meta = [
            'title'       => "Digital Marketing Agency in Kottayam | SEO & Online Marketing Services",
            'keywords'    => "digital marketing agency Kottayam, SEO services Kerala, online marketing company India, PPC services Kottayam",
            'description' => "Professional digital marketing agency in Kottayam offering SEO, SEM, and social media marketing."
        ];
        return view('web_page/digital-marketing', ['meta' => $meta]);
    }
  

    public function seoSolutions()
    {
        $meta = [
            'title'       => "SEO Services Company in Kottayam | Search Engine Optimization",
            'keywords'    => "SEO company Kottayam, top SEO services Kerala, search engine optimization India, local SEO agency",
            'description' => "Boost your online visibility with our expert SEO services. We are the leading SEO solutions provider in Kottayam."
        ];
        return view('web_page/seo-solutions', ['meta' => $meta]);
    }

    public function erpSolutions()
    {
        $meta = [
            'title'       => "ERP Software Solutions in Kottayam | Custom ERP Development",
            'keywords'    => "ERP solutions Kottayam, custom ERP development Kerala, business management software, enterprise resource planning",
            'description' => "Streamline your business operations with our custom ERP solutions. Top ERP development company in Kottayam."
        ];
        return view('web_page/erp-solutions', ['meta' => $meta]);
    }

    public function careers(): string
    {
        $meta = [
            'title'       => "Careers at Faith Infosoft | Job Opportunities in Kottayam",
            'keywords'    => "careers faith infosoft, jobs in kottayam, software jobs kerala, marketing executive jobs kottayam, programming jobs kerala",
            'description' => "Join Faith Infosoft - leading software company in Kottayam. Apply for positions including Software Trainees, Senior Programmer, Marketing Executive and Front Office Executive."
        ];
        return view('web_page/careers', ['meta' => $meta]);
    }

    public function careersApply()
    {
        helper(['form', 'url']);

        // Validate inputs
        $validation = \Config\Services::validation();
        $validation->setRules([
            'name'     => 'required|min_length[2]|max_length[100]',
            'address'  => 'required|min_length[5]|max_length[500]',
            'email'    => 'required|valid_email',
            'position' => 'required',
            'mobile'   => 'required|min_length[7]|max_length[15]',
            'cv'       => 'uploaded[cv]|max_size[cv,2048]|ext_in[cv,pdf,doc,docx]',
        ]);

        if (!$this->request->is('post')) {
            return redirect()->to('careers');
        }

        if (!$validation->withRequest($this->request)->run()) {
            session()->setFlashdata('error', implode(' ', $validation->getErrors()));
            return redirect()->to('careers')->withInput();
        }

        $name     = $this->request->getPost('name');
        $address  = $this->request->getPost('address');
        $email    = $this->request->getPost('email');
        $position = $this->request->getPost('position');
        $mobile   = $this->request->getPost('mobile');

        // Handle file upload
        $cvFile = $this->request->getFile('cv');
        $uploadPath = WRITEPATH . 'uploads/careers/';

        if (!is_dir($uploadPath)) {
            mkdir($uploadPath, 0755, true);
        }

        $newFileName = '';
        if ($cvFile && $cvFile->isValid() && !$cvFile->hasMoved()) {
            $newFileName = $cvFile->getRandomName();
            $cvFile->move($uploadPath, $newFileName);
        }

        // ✅ Save career application to MySQL database
        $careerModel = new \App\Models\CareerModel();
        $careerModel->insert([
            'name'     => $name,
            'address'  => $address,
            'email'    => $email,
            'position' => $position,
            'mobile'   => $mobile,
            'cv'       => $newFileName ? 'uploads/careers/' . $newFileName : null,
            'status'   => 'pending',
        ]);

        // Send email notification
        $emailService = \Config\Services::email();
        $emailService->setTo('info@faithinfosoft.com');
        $emailService->setFrom($email, $name);
        $emailService->setSubject('New Career Application - ' . $position);

        $messageBody  = "<h3>New Career Application Received</h3>";
        $messageBody .= "<p><strong>Name:</strong> {$name}</p>";
        $messageBody .= "<p><strong>Address:</strong> {$address}</p>";
        $messageBody .= "<p><strong>Email:</strong> {$email}</p>";
        $messageBody .= "<p><strong>Position Applied:</strong> {$position}</p>";
        $messageBody .= "<p><strong>Mobile:</strong> {$mobile}</p>";
        if ($newFileName) {
            $messageBody .= "<p><strong>CV File:</strong> {$newFileName} (saved to server)</p>";
        }

        $emailService->setMessage($messageBody);
        $emailService->setMailType('html');

        // Attach CV if uploaded
        if ($newFileName) {
            $emailService->attach($uploadPath . $newFileName);
        }

        $emailService->send(false); // ignore errors; flash success regardless

        session()->setFlashdata('success', 'Thank you for applying! We will get back to you soon.');
        return redirect()->to('careers');
    }

    public function contactSend()
    {
        if (!$this->request->is('post')) {
            return redirect()->to('contact');
        }

        $isAjax = $this->request->isAJAX();

        // Validate inputs
        $rules = [
            'name'    => 'required|min_length[2]|max_length[255]',
            'email'   => 'required|valid_email|max_length[255]',
            'subject' => 'required|min_length[2]|max_length[255]',
            'message' => 'required|min_length[5]',
        ];

        if (!$this->validate($rules)) {
            if ($isAjax) {
                return $this->response->setBody(implode(' ', $this->validator->getErrors()));
            }
            session()->setFlashdata('error', implode(' ', $this->validator->getErrors()));
            return redirect()->to('contact')->withInput();
        }

        $name    = $this->request->getPost('name');
        $email   = $this->request->getPost('email');
        $subject = $this->request->getPost('subject');
        $message = $this->request->getPost('message');

        // ✅ Save contact message to MySQL database
        $contactModel = new \App\Models\ContactModel();
        $saved = $contactModel->insert([
            'name'    => $name,
            'email'   => $email,
            'subject' => $subject,
            'message' => $message,
        ]);

        if (!$saved) {
            $errorMsg = 'Failed to save your message. Please try again.';
            if ($isAjax) {
                return $this->response->setBody($errorMsg);
            }
            session()->setFlashdata('error', $errorMsg);
            return redirect()->to('contact')->withInput();
        }

        // Send email notification
        $emailService = \Config\Services::email();
        $emailService->setTo('info@faithinfosoft.com');
        $emailService->setFrom($email, $name);
        $emailService->setReplyTo($email, $name);
        $emailService->setSubject('New Contact Message: ' . $subject);

        $messageBody  = "<h3>New Contact Form Submission</h3>";
        $messageBody .= "<p><strong>Name:</strong> {$name}</p>";
        $messageBody .= "<p><strong>Email:</strong> {$email}</p>";
        $messageBody .= "<p><strong>Subject:</strong> {$subject}</p>";
        $messageBody .= "<p><strong>Message:</strong><br>" . nl2br(esc($message)) . "</p>";

        $emailService->setMessage($messageBody);
        $emailService->setMailType('html');
        $emailService->send(false); // ignore email errors

        if ($isAjax) {
            return $this->response->setBody('OK');
        }

        session()->setFlashdata('success', 'Your message has been sent. Thank you!');
        return redirect()->to('contact');
    }

    public function blog(): string
    {
        $meta = [
            'title'       => "Blog - Faith Infosoft | Technology, Web & Digital Marketing Insights",
            'keywords'    => "faith infosoft blog, web development blog, software tips, digital marketing articles, technology news Kottayam, SEO tips Kerala",
            'description' => "Read the latest articles from Faith Infosoft on web development, mobile apps, software solutions, SEO, and digital marketing trends."
        ];
        return view('web_page/blog', ['meta' => $meta]);
    }
}



