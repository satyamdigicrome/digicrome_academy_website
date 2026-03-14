<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RolePermissionSeeder extends Seeder
{
    /**
     * All CMS modules — each becomes one row in the permissions table.
     * The module_slug is what you pass to ->middleware('module:slug')
     */
    protected array $modules = [
        ['name' => 'Dashboard',          'slug' => 'dashboard',       'desc' => 'View the main dashboard'],
        ['name' => 'Blogs',              'slug' => 'blogs',            'desc' => 'Create, edit and delete blog posts'],
        ['name' => 'Success Stories',    'slug' => 'success-stories',  'desc' => 'Manage student success stories'],
        ['name' => 'Testimonials',       'slug' => 'testimonials',     'desc' => 'Manage testimonials'],
        ['name' => 'Videos',             'slug' => 'videos',           'desc' => 'Manage video content'],
        ['name' => 'Media Presence',     'slug' => 'media-presence',   'desc' => 'Manage press & media articles'],
        ['name' => 'Instructors',        'slug' => 'instructors',      'desc' => 'Manage mentor / instructor profiles'],
        ['name' => 'Courses',            'slug' => 'courses',          'desc' => 'Full course management'],
        ['name' => 'Course Details',     'slug' => 'course-details',   'desc' => 'Key points, FAQs, modules, etc.'],
        ['name' => 'Logos & Partners',   'slug' => 'logos',            'desc' => 'Manage logos and partner images'],
        ['name' => 'Placements',         'slug' => 'placements',       'desc' => 'Manage placement records'],
        ['name' => 'Job Postings',       'slug' => 'jobs',             'desc' => 'Post and manage job vacancies'],
        ['name' => 'Applications',       'slug' => 'applications',     'desc' => 'View career applications'],
        ['name' => 'Meta Tags',          'slug' => 'meta-tags',        'desc' => 'Manage SEO meta tags'],
        ['name' => 'Privacy / Terms',    'slug' => 'content',          'desc' => 'Manage privacy policy, terms, etc.'],
        ['name' => 'Leads',              'slug' => 'leads',            'desc' => 'View lead / enquiry reports'],
    ];

    public function run(): void
    {
        // Create all modules as permissions
        foreach ($this->modules as $mod) {
            Permission::firstOrCreate(
                ['module_slug' => $mod['slug']],
                ['module_name' => $mod['name'], 'description' => $mod['desc']]
            );
        }

        // Create "Super Admin" role (full access)
        Role::firstOrCreate(
            ['slug' => 'super-admin'],
            [
                'name'           => 'Super Admin',
                'description'    => 'Unrestricted access to all CMS modules',
                'is_super_admin' => true,
            ]
        );

        // Create "Content Editor" role — content modules only
        $editor = Role::firstOrCreate(
            ['slug' => 'content-editor'],
            [
                'name'           => 'Content Editor',
                'description'    => 'Can manage blogs, testimonials, videos and success stories',
                'is_super_admin' => false,
            ]
        );
        $editorSlugs = ['dashboard', 'blogs', 'success-stories', 'testimonials', 'videos', 'media-presence'];
        $editorPerms = Permission::whereIn('module_slug', $editorSlugs)->pluck('id');
        $editor->permissions()->sync($editorPerms);

        // Create "HR Manager" role — career modules only
        $hr = Role::firstOrCreate(
            ['slug' => 'hr-manager'],
            [
                'name'           => 'HR Manager',
                'description'    => 'Can manage job postings and view applications',
                'is_super_admin' => false,
            ]
        );
        $hrSlugs = ['dashboard', 'jobs', 'applications'];
        $hrPerms = Permission::whereIn('module_slug', $hrSlugs)->pluck('id');
        $hr->permissions()->sync($hrPerms);

        $this->command->info('✅  Roles & Permissions seeded successfully.');
        $this->command->info('   • Super Admin (full access)');
        $this->command->info('   • Content Editor (blogs, testimonials, videos, stories, media)');
        $this->command->info('   • HR Manager (jobs, applications)');
        $this->command->info('   • ' . count($this->modules) . ' CMS modules registered as permissions');
    }
}
