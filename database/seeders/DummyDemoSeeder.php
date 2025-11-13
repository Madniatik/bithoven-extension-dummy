<?php

namespace Bithoven\Dummy\Database\Seeders;

use Illuminate\Database\Seeder;
use Bithoven\Dummy\Models\DummyItem;

class DummyDemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $demoItems = [
            [
                'name' => 'Sample Task 1',
                'category' => 'general',
                'priority' => 'normal',
                'description' => 'This is a demo task to showcase the extension functionality',
                'status' => 'active',
                'order' => 1,
            ],
            [
                'name' => 'Important Meeting',
                'category' => 'important',
                'priority' => 'high',
                'description' => 'Quarterly business review meeting with stakeholders',
                'status' => 'active',
                'order' => 2,
            ],
            [
                'name' => 'Code Review',
                'category' => 'technical',
                'priority' => 'normal',
                'description' => 'Review pull requests for the new feature implementation',
                'status' => 'active',
                'order' => 3,
            ],
            [
                'name' => 'Emergency Bug Fix',
                'category' => 'urgent',
                'priority' => 'critical',
                'description' => 'Critical production bug affecting user authentication',
                'status' => 'active',
                'order' => 4,
            ],
            [
                'name' => 'Documentation Update',
                'category' => 'general',
                'priority' => 'low',
                'description' => 'Update API documentation for the latest release',
                'status' => 'active',
                'order' => 5,
            ],
            [
                'name' => 'Database Optimization',
                'category' => 'technical',
                'priority' => 'high',
                'description' => 'Optimize slow queries and add missing indexes',
                'status' => 'active',
                'order' => 6,
            ],
            [
                'name' => 'Team Training',
                'category' => 'important',
                'priority' => 'normal',
                'description' => 'Conduct training session on new development tools',
                'status' => 'active',
                'order' => 7,
            ],
            [
                'name' => 'Security Audit',
                'category' => 'urgent',
                'priority' => 'high',
                'description' => 'Perform security audit and vulnerability assessment',
                'status' => 'active',
                'order' => 8,
            ],
            [
                'name' => 'Client Presentation',
                'category' => 'important',
                'priority' => 'high',
                'description' => 'Present project progress and upcoming milestones to client',
                'status' => 'active',
                'order' => 9,
            ],
            [
                'name' => 'Performance Testing',
                'category' => 'technical',
                'priority' => 'normal',
                'description' => 'Load testing for the new API endpoints',
                'status' => 'active',
                'order' => 10,
            ],
        ];

        foreach ($demoItems as $item) {
            DummyItem::create($item);
        }

        $this->command->info('✓ Created 10 demo items successfully');
    }
}
