<?php

namespace App\Http\Controllers;

class JobsController extends Controller
{
    public function index()
    {
        $title = 'Available Jobs';
        $description = 'Find your next career opportunity.';

        $jobs = [
            [
                'title' => 'Forward Security Director',
                'company' => 'Bauch, Schuppe and Schulist Co',
                'category' => 'Hotels & Tourism',
                'type' => 'Full time',
                'salary' => '$40000-$42000',
                'location' => 'New-York, USA',
            ],
            [
                'title' => 'Regional Creative Facilitator',
                'company' => 'Wisozk - Becker Co',
                'category' => 'Media',
                'type' => 'Part time',
                'salary' => '$28000-$32000',
                'location' => 'Los-Angeles, USA',
            ],
            [
                'title' => 'Internal Integration Planner',
                'company' => 'Mraz, Quigley and Feest Inc.',
                'category' => 'Construction',
                'type' => 'Full time',
                'salary' => '$48000-$50000',
                'location' => 'Texas, USA',
            ],
            [
                'title' => 'District Intranet Director',
                'company' => 'VonRueden - Weber Co',
                'category' => 'Commerce',
                'type' => 'Full time',
                'salary' => '$42000-$48000',
                'location' => 'Florida, USA',
            ],
            [
                'title' => 'Corporate Tactics Facilitator',
                'company' => 'Cormier, Turner and Flatley Inc',
                'category' => 'Commerce',
                'type' => 'Full time',
                'salary' => '$38000-$40000',
                'location' => 'Boston, USA',
            ],
            [
                'title' => 'Forward Accounts Consultant',
                'company' => 'Miller Group',
                'category' => 'Financial services',
                'type' => 'Full time',
                'salary' => '$45000-$48000',
                'location' => 'Boston, USA',
            ],
        ];

        return view('jobs', [
            'title' => $title,
            'description' => $description,
            'jobs' => $jobs,
        ]);
    }
}
